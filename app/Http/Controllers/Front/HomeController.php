<?php


namespace App\Http\Controllers\Front;


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
    function index(){
        $products = Product::orderByDesc('created_at')->limit(6)->get();
        $populars = Product::where('featured', true)->orderByDesc('created_at')->limit(4)->get();
        $restaurants = Restaurant::orderByDesc('id')->limit(5)->get();
        $visibleClass = '';
        return view('front.index', compact('products', 'populars', 'restaurants', 'visibleClass'));
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
    function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|max:15'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        if ($validator->fails()) {
            $errors = $validator->errors();
            return view('front.auth.login', compact('password','email'))->withErrors($errors);
        }
        else {
            if (Auth::attempt(['email' => $email, 'password' =>$password])){
                return redirect($this->redirectTo());
            }else{
                $getSignedUpUser = User::where('email',"$email")->count();
                if ($getSignedUpUser === 1){
                return back()->withErrors([
                    'password' => 'Incorrect email or password !'
                ]);
                }else{
                    return back()->withErrors([
                        'email' => 'Account does not exist !'
                    ]);
                }
            }
        }
    }
    function register(Request $request){
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
        }
        else {
            $newUser = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'role' => 1
            ]);
            return view('front.auth.register')->with(['login' =>'yes']);
        }
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function search(){
        return view('front.shop.searchFound');
    }
    public function searchNotFound(){
        return view('front.shop.searchNotFound');
    }

    public function showAccountSetting(){
        return view('front.dashboard.setting');
    }

    public function updateProfile(Request $request){
        $user = Auth::user();
        if ($request->input('full-name') !== null){
            $user->name =$request->input('full-name');
        }
        if ($request->input('phone-number') !== null){
            $user->telephone =$request->input('phone-number');
        }
        if ($request->input('address') !== null){
            $user->address =$request->input('address');
        }
        if ($request->hasFile('avatar')){
            $validator = Validator::make(['avatar' => $request->avatar], [
                'avatar' => 'mimes:jpg,png,jpeg,gif|max:10000'
            ]);
            if ($validator->fails()){
                $error = $validator->errors();
                return back()->withErrors($error);
            }else{
                $file = $request->file('avatar');
                $imageName = time().'.'.$file->getClientOriginalName();
                // remove old avatar image if exist
                if ($user->avatar != null){
                    unlink('images/user/'.$user->avatar);
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
}
