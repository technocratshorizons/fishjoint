<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MailerController extends Controller
{
    public function sendRequest(Request $request)
    {
        // echo "<pre>"; print_r($request->all()); die;
        $validateRules = [
            'name' => 'required',
            'email' =>' required|email',
            'phone_no' => 'required',
            'message' => 'required',
        ];
        $validator = Validator::make($request->all(), $validateRules);

        if($validator->fails())
        {
            return response()->json(['success'=>false, 'status'=>2, 'error'=>$validator->errors()]);
        }

        // $customer = collect([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'phone_no'=>$request->phone_no,
        //     'message'=>$request->message
        // ]);
            // dd($customer);
        Mail::to('amar123@yopmail.com')->send(new ContactMail($request->all()));
        return response()->json(['success'=>true,'status'=>1,'message'=>'Thanks for reaching us']);
    }
}
