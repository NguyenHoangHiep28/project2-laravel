<?php


namespace App\Http\Controllers\Front;


use App\Models\Product;
use App\Models\Restaurant;
use App\Models\User;
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
                return redirect('/');
            } else{
                $getSignedInUser = User::where('email',"$email")->count();
                if ($getSignedInUser === 1){
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
}
