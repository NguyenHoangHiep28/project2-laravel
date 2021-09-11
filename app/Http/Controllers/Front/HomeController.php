<?php


namespace App\Http\Controllers\Front;


use App\Models\Category;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController
{
    function index()
    {
        $products = Product::orderByDesc('created_at')->limit(6)->get();
        $populars = Product::where('is_deleted',0)->where('featured', 1)->orderByDesc('created_at')->limit(4)->get();
        $promotions = Product::where('is_deleted', 0)->where('discount', '<>', null)->limit(3)->get();
        $restaurants = Restaurant::orderByDesc('id')->limit(5)->get();
        $visibleClass = '';
        return view('front.index', compact('products', 'populars', 'restaurants', 'visibleClass', 'promotions'));
    }

    public function showContact(){
        return view('front.contact');
    }

    public function getMessage(){
        return view('front.thankContact');
    }

    public function showAboutUs(){
        $restaurants = Restaurant::where('status', 1)->orderByDesc('created_at')->limit(8)->get();
        return view('front.about-us', compact('restaurants'));
    }

    public function redirectTo()
    {
        switch (auth()->user()->role) {
            case '0':
                return route('showManagement');
            case '1':
                    return route('showIndex');
            case '2':
                return route('showAdmin');

            default:
                auth()->logout();
                return route('showIndex');
        }
    }

    function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|max:15'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        if ($validator->fails()) {
            $errors = $validator->errors();
            return view('front.auth.login', compact('password', 'email'))->withErrors($errors);
        } else {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect($this->redirectTo());
            } else {
                $getSignedUpUser = User::where('email', "$email")->count();
                if ($getSignedUpUser === 1) {
                    return back()->withErrors([
                        'password' => 'Incorrect email or password !'
                    ]);
                } else {
                    return back()->withErrors([
                        'email' => 'Account does not exist !'
                    ]);
                }
            }
        }
    }

    function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:15|confirmed'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        if ($validator->fails()) {
            $errors = $validator->errors();
            $login = '';
            return view('front.auth.register', compact('password', 'name', 'email', 'login'))->withErrors($errors);
        } else {
            $newUser = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'role' => 1
            ]);
            return view('front.auth.register')->with(['login' => 'yes']);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function search(Request $request)
    {
        $productName = $request->input('key-word');
        $products = Product::where('is_deleted', 0)->where('name', 'like', "%$productName%")->orderBy('created_at')->get();
        if (count($products) > 0){
            $products = Product::where('is_deleted', 0)->where('name', 'like', "%$productName%")->orderBy('created_at')->paginate(9);
            $search = 'Search Food';
            return view('front.shop.shop', compact('products', 'search'))->with(['keyWord' => $productName]);
        }else{
            return redirect('/search-not-found')->with(['keyWord' => $productName]);
        }
    }

    public function searchNotFound()
    {  $categories = Category::all();
        $search = null;
        return view('front.shop.searchNotFound', compact('categories', 'search'));
    }

    public function showAccountSetting()
    {
        return view('front.dashboard.setting');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        if ($request->input('full-name') !== null) {
            $user->name = $request->input('full-name');
        }
        if ($request->input('phone-number') !== null) {
            $user->telephone = $request->input('phone-number');
        }
        if ($request->input('address') !== null) {
            $user->address = $request->input('address');
        }
        if ($request->hasFile('avatar')) {
            $validator = Validator::make(['avatar' => $request->avatar], [
                'avatar' => 'mimes:jpg,png,jpeg,gif|max:10000'
            ]);
            if ($validator->fails()) {
                $error = $validator->errors();
                return back()->withErrors($error);
            } else {
                $file = $request->file('avatar');
                $imageName = time() . '.' . $file->getClientOriginalName();
                // remove old avatar image if exist
                if ($user->avatar != null) {
                    unlink('images/user/' . $user->avatar);
                }
                // store new avatar image
                $file->move(public_path('images/user'), $imageName);
                // store path in database
                $user->avatar = $imageName;
            }
        }
        $user->save();
        return back();
    }

    public function showShop()
    {
        $categories = Category::all();
        $search = null;
        $products = Product::where('is_deleted', 0)->orderBy('created_at')->limit(24)->paginate(6);
        return view('front.shop.shop', compact('products', 'search', 'categories'));
    }
    public function showFeature()
    {
        $categories = Category::all();
        $search = null;
        $products = Product::where('is_deleted', 0)->where('featured', 1)->orderBy('created_at')->limit(24)->paginate(6);
        return view('front.shop.shop', compact('products', 'search', 'categories'));
    }
    public function category($cateId){
        $categories = Category::all();
        $search = null;
        $products = Product::where('is_deleted', 0)->where('cate_id', $cateId)->paginate(6);
        return view('front.shop.shop', compact('products', 'search', 'categories'));
    }
    public function filterProducts(Request $request){
        $categories = Category::all();
        $search = null;
        $products = Product::where('is_deleted', 0);
        $products = $this->filter($products, $request);
        $products = $products->paginate(6);
        return view('front.shop.shop', compact('products', 'search', 'categories'));
    }
    public function filter($products, Request $request){
        //status
        $status= $request->input('filter-status');
            if ($status == 'featured'){
                $products = Product::where('featured', '=', 1);
            }elseif ($status == 'promotion'){
                $products = Product::where('discount', '<>', null);
            }
        //price
        $price = $request->input('filter-price');
        if ($price != null){
            if ($price == 'lt50'){
                $products = $products->where('discount', '<', 50)->orWhere('price', '<', 50);
            }elseif ($price == 'bt50n100'){
                $products = $products->whereBetween('price', [50, 100]);
            }elseif($price == 'gt100'){
                $products = $products->where('price', '>', 100);
            }
        }
        return $products;
    }
}
