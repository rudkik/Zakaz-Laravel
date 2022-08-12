<?php

namespace App\Http\Controllers;

use App\Mail\EmailNewOrder;
use App\Mail\EmailRecall;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMailRecall(Request $request){

        if ($request->name == NULL){
            $name = '';
        }else{
            $name = $request->name;
        }
        if ($request->phone == NULL){
            $phone = '';
        }else{
            $phone = $request->phone;
        }
        Mail::to('rudnikr85@gmail.com')->send(new EmailRecall($name, $request->email, $phone));
        return redirect()->route('main');
    }

    public function sendMailOrder(Request $request){
        $orders = \Cart::session($_COOKIE['cart_id'])->getContent();
        Mail::to('rudnikr85@gmail.com')->send(new EmailNewOrder($request, $orders));
        return redirect()->route('main');
    }
}
