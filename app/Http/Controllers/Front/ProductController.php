<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showDetail($productId){
        $allComment = Comment::where('product_id', $productId)->where('rating', '>', 0)->get();
        $sum = 0;
        foreach ($allComment as $comment){
            $sum += $comment->rating;
        }
        if (count($allComment) > 0) {
            $rating = number_format($sum / count($allComment), 1);
        }else{
            $rating = null;
        }
        $product = Product::find($productId);
        $comments = Comment::where('product_id', $productId)->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('front.shop.food-detail', compact('product', 'comments', 'rating'));
    }
    public function review(Request $request){
        $productId = $request->input('product-id');
        $previousReview = Comment::where('user_id', Auth::id())->where('product_id', $productId)->first();
        if ($request->rate != null) {
            $rate = $request->rate;
        } else {
            $rate = 0;
        }
        if ($request->message != null) {
            $message = $request->message;
        } else {
            $message = '';
        }
        if ($previousReview == null) {
            $review = new Comment();
        }else{
            $review = $previousReview;
        }
        $review->messages = $message;
        $review->rating = $rate;
        $review->product_id = $productId;
        $review->user_id = Auth::id();
        $review->email = Auth::user()->email;
        $review->name = Auth::user()->name;
        $review->save();
        return back();
    }
}
