<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function send(Request $request)
    {
//        dd($request->all());
        if($request->has('g-recaptcha-response') && !empty($request->input('g-recaptcha-response'))){
            //your site secret key
            $secret = config('mail.recaptch');
//            $secret = '6LdqmCAUAAAAANONcPUkgVpTSGGqm60cabVMVaON';
            //get verify response data

            $c = curl_init('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
            $verifyResponse = curl_exec($c);

            $responseData = json_decode($verifyResponse);
            if($responseData->success){
                $subject = $request->input('subject');
                $email = $request->input('email');
                $name = $request->input('name');
                $message_txt = "Mail-From: $email ( $name ) \r\n" . $request->input('message');
                $to_mail = config('mail.to');

                Mail::raw($message_txt, function ($message) use ($subject, $to_mail) {
                    $message->to($to_mail)->subject($subject);});
            }
            return response()->json(['type' => 'success', 'message' => 'Message sent!'], 200);
        }
        return response()->json(['type' => 'danger', 'message' => 'Robot verification failed, please try again.'], 200);
    }
}
