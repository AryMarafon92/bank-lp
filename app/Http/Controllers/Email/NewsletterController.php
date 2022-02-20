<?php

namespace App\Http\Controllers\Email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Help;
use Validator;
use Input;
use Redirect;
use Mail;
use Alert;
use App\Mail\NewsletterRegister;

class NewsletterController extends Controller
{

    public static function email(Request $request){

        $curl = curl_init();
        
        $name = $request->inputName;
        $email = $request->inputEmail;


        curl_setopt_array($curl, array(
          CURLOPT_URL => "",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "PUT",
          CURLOPT_POSTFIELDS => "{\"list_ids\":[\"\"],\"contacts\":[{\"unique_name\":\"$name\",\"email\":\"$email\",\"custom_fields\":{}}]}",

          CURLOPT_HTTPHEADER => array(
            "",
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);


        curl_close($curl);

        if ($err) {
         // echo "cURL Error #:" . $err;
        } else {
          // echo $response;
        }

        // Save to List

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "PATCH",
          CURLOPT_POSTFIELDS => "{\"name\":\"bank-admin\"}",
          CURLOPT_HTTPHEADER => "",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          // echo "cURL Error #:" . $err;
        } else {
          // echo $response;
        }

        if($response != NULL)
        {
            //alert()->message('success', 'E-mail enviado com sucesso!');
           session()->flash('message', 'E-mail successfully forwarded.');

            $status = 'success';
            return redirect()->back()->with('status', 'E-mail successfully forwarded.');
            // Mail::to($email)->send(new \App\Mail\NewsletterRegister());
        }else
        {
            session()->flash('message', 'Sorry.<br>Please, try again later.');
            $status = 'danger';
            return redirect()->back()->with('status', 'error', 'Sorry.<br>Please, try again later.');
        }


    }



}
