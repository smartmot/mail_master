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
        $contact = [
            ['email'=>'houtkimmeng@tanchonggroup.com','name'=>'Mr Huot Kimmeng'],
            ['email'=>'wisemac1998@hotmail.com','name'=>'Mr. Ng Hui'],
            ['email'=>'khorwohock@gmail.com','name'=>'Khor Woh Hock'],
            ['email'=>'koh.hao.jie@u-pay.com','name'=>'Koh Hao Jie'],
            ['email'=>'jean@vdb-loi.com','name'=>'iss Jean Loi Jin Choo'],
            ['email'=>'jeff@visionoutdoor.com.kh','name'=>'Jeff Cheah'],
            ['email'=>'michael@virtuecap.net','name'=>'Michael Lim'],
            ['email'=>'mohan@khmertimeskh.com','name'=>'Mr Mohan Tirugmanasam Bandam'],
            ['email'=>'simon@westecmedia','name'=>'Mr Simon Choo Chee Yen'],
            ['email'=>'ldpmotz@gmail.com','name'=>'EL Final'],
        ];
        $cc = [
            [
                "email" => "sheimberg@heimberbarr.com",
                "name" => "Steven Heimberg"
            ],
            [
                "email" => "lyelmot@gmail.com",
                "name" => "EL MOT"
            ]
        ];
        foreach ($contact as $email){
            $mail = new PromoteMail();
           if (Mail::to($email["email"])
               ->queue(
                   $mail->with([
                       "name" => $email["name"]
                   ])
               )){
               echo $email["email"] . "__success_<br/>";
           }else{
               echo $email["email"] . "_error_<br/>";
           }

        }

    }
    protected function show(){
        return view("mails.promote");
    }
}
