<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
   /**
    * Contact Us 
    */

   public function contactForm(){
       return view('contact-us');
   } 
    public function send(Request $request)
    {
        // echo "tets";
        try{

            $validator = Validator::make($request->all(),[

                'name'    => 'required',
                'email'   =>  'required|email',
                'phone'   =>  'required',
                'body'    =>  'required',

            ]);

            if($validator->fails()){ 

                $val =  $validator->messages()->all();
                $meg = implode("|",$val);
               return redirect()->back()->with('message', $meg);
        }

        
            $data = [
                'name'      => $request->name,
                'email'     => $request->email,
                'phone'     => $request->phone,
                'body'      => $request->body,

            ];
            Mail::to("info@layajee.com")->send(new SendMail($data));
            return redirect()->back()->with('message', 'Thanks for your message! We will get back to you soon!');
            }

        catch(\Throwable $th){

            $this->res['Message']    = $th->getMessage();
            return response()->json($this->res);
        }
    }
}
