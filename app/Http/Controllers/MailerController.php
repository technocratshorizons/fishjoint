<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Enquiry;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MailerController extends Controller
{
    public function sendRequest(Request $request)
    {

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

        // GOOGLE  recaptcha validation
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->get('recaptcha'),
            'remoteip' => $remoteip
        ];
        $options = [
            'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);
        if ($resultJson->success != true) {
            return response()->json(['success'=>false, 'status'=>2,'captcha' => 'Captcha Not verified']);
        }
        if ($resultJson->score >= 0.3) {
            //Validation was successful, add your form submission logic here

            Mail::to('info@thefishjoint.com')->send(new ContactMail($request->all()));
            $customer_data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'phone_no'=>$request->phone_no,
                'message'=>$request->message,
            ];
            $check_signup = $request->check;

            if($check_signup =='option1')
            {
                $customer_data['signup_email'] ='yes';
            }
            else{
                $customer_data['signup_email'] = 'no';
            }
            // saving data into the database
            Enquiry::create( $customer_data);

            return response()->json(['success'=>true,'status'=>1,'message'=>'Thanks for reaching us']);
            }
        else {
            return response()->json(['success'=>false, 'status'=>2,'captcha' => 'Captcha Not verified']);
        }


    }
}
