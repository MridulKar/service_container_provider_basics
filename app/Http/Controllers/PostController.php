<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PaymentService;
use App\Services\PaymentServiceContract;

class PostController extends Controller
{
    // you can use like this...
    // public function index(){
    //     $payment = new PaymentService;
    //     return $payment->process();
    // }

    // you can use like this...
    // public function index(PaymentService $payment){
    //     return $payment->process();
    //      dd($payment);
    // }

    // public function index(PaymentServiceContract $payment){
    //      dd($payment);
    // }


    public function index(){
        $payment = app(PaymentServiceContract::class);
        $payment = resolve(PaymentServiceContract::class);
        dd($payment);
    }



    // model route binding...
    public function show(Post $post, Request $request){
        return $post;
    }
}
