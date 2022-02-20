<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Change_Name;
use App\Mail\Change_Email;
use App\Mail\Alterar_CNPJ;
use App\Mail\Alterar_CPF;
use App\Mail\Alterar_E_mail;
use App\Mail\Alterar_Nome;
use App\Mail\Alterar_Senha;
use App\Mail\Dificuldade_em_Ativar_2FA;
use App\Mail\Desativar_2FA;
use App\Mail\Outras_Dificuldades_2FA;
use App\Mail\Dificuldade_de_Acesso_a_Plataforma;
use App\Mail\Transacoes;
use App\Mail\Outros;
use Storage;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendemail(Request $request)
    {

          if($request->assunt == "Change-Email"){

            $op1_photonewdocument = $request->file('op1_photonewdocument');

            if($op1_photonewdocument){
              $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
              $file_path = '/forms/image/'.$filename;
              $storage = Storage::disk('spaces2')->put($file_path, $op1_photonewdocument, 'public');
              $file_url = ''.$storage;
              $op1_photonewdocument = $file_url;
            }
            $op1_selfie = $request->file('op1_selfie');
            if($op1_selfie){
              $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
              $file_path = '/forms/image/'.$filename;
              $storage = Storage::disk('spaces2')->put($file_path, $op1_selfie, 'public');
              $file_url = ''.$storage;
              $op1_selfie = $file_url;
            }

            $name = $request->name;
            $subname = $request->subname;
            $email = $request->email;
            $phone = $request->phone;
            $subject = $request->assunt;
            $op1_emailregister = $request->op1_emailregister;
            $op1_newemailregister = $request->op1_newemailregister;
            $op1_texto = $request->op1_texto;




              Config::set([
                'mail.from.address' => $request->email,
                'mail.from.name' =>  $request->name,
              ]);

              $test = Config::get('mail.from');

              // $test = Config::get('mail.from');

              // dd($test);
            

              $status = true;
              // 
              Mail::to('')->send(new \App\Mail\Change_Email(
                    $name, $subname, $email, $phone, $subject,
                    $op1_emailregister, $op1_newemailregister,
                    $op1_photonewdocument, $op1_selfie, $op1_texto
              ));

            
              
              if($request && $request->status){
              
                $status = 'danger';
                 return view('site.index',compact('status'));
                }else{
                $status = 'success';
                 return view('site.index',compact('status'));
              }

          }

          elseif($request->assunt == "Change-Name"){
              $op2_photonewdocument = $request->file('op2_photonewdocument');
              if($op2_photonewdocument){
                $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
                $file_path = '/forms/image/'.$filename;
                $storage = Storage::disk('spaces2')->put($file_path, $op2_photonewdocument, 'public');
                $file_url = ''.$storage;
                $op2_photonewdocument = $file_url;
              }
              $op2_selfie = $request->file('op2_selfie');
              if($op2_selfie){
                $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
                $file_path = '/forms/image/'.$filename;
                $storage = Storage::disk('spaces2')->put($file_path, $op2_selfie, 'public');
                $file_url = ''.$storage;
                $op2_selfie = $file_url;
              }
              // dd($request->all());


              $name = $request->name;
              $subname = $request->subname;
              $email = $request->email;
              $phone = $request->phone;
              $subject = $request->assunt;
              $op2_emailregister = $request->op2_emailregister;
              $op2_newname = $request->op2_newname;
              $op2_registername = $request->op2_registername;
              $newname = $request->newname;

              // dd($request->all());

              $op2_texto = $request->op2_texto;

              Config::set([
                'mail.from.address' => $request->email,
                'mail.from.name' =>  $request->name,
              ]);

              $status = true;
              Mail::to('')->send(new \App\Mail\Change_Name($name, $subname,
              $email, $phone, $subject, $op2_emailregister, $op2_newname,
              $op2_photonewdocument, $op2_selfie, $op2_texto,  $op2_registername, $newname
              ));
              
              if($request && $status){
              
                $status = 'success';
                 return view('site.index',compact('status'));
                }else{
                $status = 'danger';
                 return view('site.index',compact('status'));
              }

          }

          elseif($request->assunt == "Change-Password"){
            $op3_photonewdocument = $request->file('op3_photonewdocument');
            if($op3_photonewdocument){
              $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
              $file_path = '/forms/image/'.$filename;
              $storage = Storage::disk('spaces2')->put($file_path, $op3_photonewdocument, 'public');
              $file_url = ''.$storage;
              $op3_photonewdocument = $file_url;
            }
            $op3_selfie = $request->file('op3_selfie');
            if($op3_selfie){
              $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
              $file_path = '/forms/image/'.$filename;
              $storage = Storage::disk('spaces2')->put($file_path, $op3_selfie, 'public');
              $file_url = ''.$storage;
              $op3_selfie = $file_url;
            }
          
            $name = $request->name;
            $subname = $request->subname;
            $email = $request->email;
            $phone = $request->phone;
            $subject = $request->assunt;
            $op3_emailregister = $request->op3_emailregister;
            $op3_texto = $request->op3_texto;

              Config::set([
                'mail.from.address' => $request->email,
                'mail.from.name' =>  $request->name,
              ]);

            $status = true;
            Mail::to('')->send(new \App\Mail\Change_Password($name, $subname,
            $email, $phone, $subject, $op3_emailregister,
            $op3_photonewdocument, $op3_selfie, $op3_texto
            ));
            
            if($request && $status){
            
              $status = 'success';
               return view('site.index',compact('status'));
              }else{
              $status = 'danger';
               return view('site.index',compact('status'));
            }

          }

          elseif($request->assunt == "Enable-2fa"){
            
            $op4_photo = $request->file('op4_photo');
            if($op4_photo){
              $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
              $file_path = '/forms/image/'.$filename;
              $storage = Storage::disk('spaces2')->put($file_path, $op4_photo, 'public');
              $file_url = ''.$storage;
              $op4_photo = $file_url;
            }
          
            $name = $request->name;
            $subname = $request->subname;
            $email = $request->email;
            $phone = $request->phone;
            $subject = $request->assunt;
            $op4_texto = $request->op4_texto;

              Config::set([
                'mail.from.address' => $request->email,
                'mail.from.name' =>  $request->name,
              ]);

            $status = true;
            Mail::to('')->send(new \App\Mail\Enable_2FA($name, $subname,
            $email, $phone, $subject, $op4_photo, $op4_texto
            ));
            
            if($request && $status){
            
              $status = 'success';
               return view('site.index',compact('status'));
              }else{
              $status = 'danger';
               return view('site.index',compact('status'));
            }

        }

        elseif($request->assunt == "Disable-2FA"){
          $rules = [
            'op5_selfie' => 'required',
          ];

          if(!$rules)
               return view('site.index',compact('status'));

          $op5_photonewdocument = $request->file('op5_photonewdocument');
          if($op5_photonewdocument){
            $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
            $file_path = '/forms/image/'.$filename;
            $storage = Storage::disk('spaces2')->put($file_path, $op5_photonewdocument, 'public');
            $file_url = ''.$storage;
            $op5_photonewdocument = $file_url;
          }
          $op5_selfie = $request->file('op5_selfie');
          if($op5_selfie){
            $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
            $file_path = '/forms/image/'.$filename;
            $storage = Storage::disk('spaces2')->put($file_path, $op5_selfie, 'public');
            $file_url = ''.$storage;
            $op5_selfie = $file_url;
          }
        
          $name = $request->name;
          $subname = $request->subname;
          $email = $request->email;
          $phone = $request->phone;
          $subject = $request->assunt;
          $op5_emailregister = $request->op5_emailregister;
          $op5_texto = $request->op5_texto;

          Config::set([
            'mail.from.address' => $request->email,
            'mail.from.name' =>  $request->name,
          ]);

          $status = true;
          Mail::to('')->send(new \App\Mail\Disable_2FA($name, $subname,
          $email, $phone, $subject, $op5_emailregister,
          $op5_photonewdocument, $op5_selfie, $op5_texto
          ));
          
          if($request && $status){
          
            $status = 'success';
             return view('site.index',compact('status'));
            }else{
            $status = 'danger';
             return view('site.index',compact('status'));
          }

      }
      elseif($request->assunt == "Other-2FA"){
      
        $op6_photo = $request->file('op6_photo');
        if($op6_photo){
          $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
          $file_path = '/forms/image/'.$filename;
          $storage = Storage::disk('spaces2')->put($file_path, $op6_photo, 'public');
          $file_url = ''.$storage;
          $op6_photo = $file_url;
        }
       
        $name = $request->name;
        $subname = $request->subname;
        $email = $request->email;
        $phone = $request->phone;
        $subject = $request->assunt;
        $op6_texto = $request->op6_texto;

          Config::set([
            'mail.from.address' => $request->email,
            'mail.from.name' =>  $request->name,
          ]);
  
        $status = true;
        Mail::to('')->send(new \App\Mail\Other_2FA($name, $subname,
         $email, $phone, $subject, $op6_photo, $op6_texto
        ));
        
        if($request && $status){
        
          $status = 'success';
            return view('site.index',compact('status'));
          }else{
          $status = 'danger';
            return view('site.index',compact('status'));
        }
  
    }

    elseif($request->assunt == "Problems-plataform"){
      
      $op7_photo = $request->file('op7_photo');
      if($op7_photo){
        $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
        $file_path = '/forms/image/'.$filename;
        $storage = Storage::disk('spaces2')->put($file_path, $op7_photo, 'public');
        $file_url = ''.$storage;
        $op7_photo = $file_url;
      }
     
      $name = $request->name;
      $subname = $request->subname;
      $email = $request->email;
      $phone = $request->phone;
      $op7_emailregister = $request->op7_emailregister;
      $subject = $request->assunt;
      $op7_texto = $request->op7_texto;

          Config::set([
            'mail.from.address' => $request->email,
            'mail.from.name' =>  $request->name,
          ]);

      $status = true;
      Mail::to('')->send(new \App\Mail\Problems_Plataform($name, $subname,
       $email, $phone, $subject,$op7_emailregister, $op7_photo, $op7_texto 
      ));
      
      if($request && $status){
      
        $status = 'success';
          return view('site.index',compact('status'));
        }else{
        $status = 'danger';
          return view('site.index',compact('status'));
      }

  	}

      elseif($request->assunt == "Withdrawals"){
        $name = $request->name;
        $subname = $request->subname;
        $email = $request->email;
        $phone = $request->phone;
        $op8_coin = $request->op8_coin;
        $op8_date = $request->op8_date;
        $op8_quant = $request->op8_quant;
        $subject = $request->assunt;
        $op8_texto = $request->op8_texto;

          Config::set([
            'mail.from.address' => $request->email,
            'mail.from.name' =>  $request->name,
          ]);

          $status = true;
          Mail::to('')->send(new \App\Mail\Withdrawal($name, $subname,
           $email, $phone, $subject, $op8_date, $op8_coin, $op8_quant, $op8_texto
          ));
          
          if($request && $request->status){
          
            $status = 'danger';
             return view('site.index',compact('status'));
            }else{
            $status = 'success';
             return view('site.index',compact('status'));
          }

      }

      elseif($request->assunt == "Deposits"){
        $name = $request->name;
        $subname = $request->subname;
        $email = $request->email;
        $phone = $request->phone;
        $op9_hash = $request->op9_hash;
        $op9_date = $request->op9_date;
        $op9_quant = $request->op9_quant;
        $subject = $request->assunt;
        $op9_texto = $request->op9_texto;
        $op9_coin = $request->op9_coin;

          Config::set([
            'mail.from.address' => $request->email,
            'mail.from.name' =>  $request->name,
          ]);

        // dd($op9_coin);
          $status = true;
          Mail::to('')->send(new \App\Mail\Deposit($name, $subname,
           $email, $phone, $subject, $op9_date, $op9_hash, $op9_quant, $op9_texto, $op9_coin
          ));
          
          if($request && $request->status){
          
            $status = 'danger';
             return view('site.index',compact('status'));
            }else{
            $status = 'success';
             return view('site.index',compact('status'));
          }

      }


      elseif($request->assunt == "Other"){
        $photo = $request->file('op10_photo');

        if($photo){
          $filename = strtoupper(bin2hex(random_bytes(5))).'.png';
          $file_path = '/forms/image/'.$filename;
          $storage = Storage::disk('spaces2')->put($file_path, $photo, 'public');
          $file_url = ''.$storage;
          $photo = $file_url;
        }

        $name = $request->name;
        $subname = $request->subname;
        $email = $request->email;
        $phone = $request->phone;
        $subject = $request->assunt;
        $text_of_the_user = $request->op10_texto;

        // dd($text_of_the_user);

          Config::set([
            'mail.from.address' => $request->email,
            'mail.from.name' =>  $request->name,
          ]);

          //

          $status = true;
          Mail::to('')->send(new \App\Mail\OtherSubject( $name, $subname, $email, $phone, $subject, $photo, $text_of_the_user ));
          
          if($request && $request->status){
          
            $status = 'danger';
             return view('site.index',compact('status'));
            }else{
            $status = 'success';
             return view('site.index',compact('status'));
          }

      }


    }
}
