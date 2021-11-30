<?php

namespace App\Http\Controllers;

use App\Mail\PromoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($method){
        if (method_exists($this, $method)){
            return $this->$method();
        }else{
            return abort(404);
        }
    }

    public function send(){

        $mails = [
            "bkworldofficial@gmail.com",
            "li.chenda3@gmail.com",
            "el.sonofly@gmail.com",
            "ldpmotz@gmail.com",
            "maisophy7@gmail.com",
        ];
        $lsitr = [
            "ldpmotz@gmail.com",
        ];
        $cc = [
            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT'],
        ];
        foreach ($cc as $email){
            $mail = new PromoteMail();
            Mail::to($email["email"])
                ->queue(
                    $mail->with([
                        "name" => $email["name"]
                    ])
                );
            echo $email["email"] . "<br/>";
        }

    }
    protected function show(){
        return view("mails.promote");
    }
}
