<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\NumberMail;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function callform(Request $request){


        $validation = $request->validate([
           'number' => 'required'
        ]);

        $toEmail = "losmedical3@gmail.com";
        Mail::to($toEmail)->send(new NumberMail($request->number));

        return redirect($request->server('HTTP_REFERER'))->with('success' , 'Number sent successfully');


    }
}
