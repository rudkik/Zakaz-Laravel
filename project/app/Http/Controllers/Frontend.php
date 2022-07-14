<?php


namespace App\Http\Controllers;
use App\Mail\EmailReceipts;
use Illuminate\Http\Request;

class Frontend extends Controller
{


    public function index(){

        return view('index');
    }
}
               // Mail::to($order->email)->send(new EmailReceipts($order, $orderProducts));
