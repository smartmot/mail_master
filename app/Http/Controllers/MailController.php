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
            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT1'],

            ['email'=>'johnhel@herbalife.com','name'=>'John Hellmann'],
            ['email'=>'james.padden@hkland.com','name'=>'James Padden'],
            ['email'=>'gm@hotelcambodiana.com.kh','name'=>'Stefan Willimann'],
            ['email'=>'chiv.wong@hunghiepgroup.com','name'=>'Chiv WONG'],
            ['email'=>'herman.kemp@hyatt.com','name'=>'Herman Kemp'],
            ['email'=>'joseph@iao-asia.com','name'=>'Joseph Lovell'],
            ['email'=>'sreng.mao@idp.com','name'=>'Sreng MAO'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT2'],
            ['email'=>'sutieng@infinity.com.kh','name'=>'SU TIENG TECK'],
            ['email'=>'seavmeng.ing@dpc-group.com','name'=>'Seav Meng Ing'],
            ['email'=>'info@cambodiachiropractic.com','name'=>'Christophe Savoure'],
            ['email'=>'garethjones@ispp.edu.kh','name'=>'Gareth Jones'],
            ['email'=>'pedro.bernardo@kcpartnership.com','name'=>'Pedro Jose Bernardo'],
            ['email'=>'info@khmer-organic.com','name'=>'Sovann Pisey Thlang'],
            ['email'=>'shinichi.tsuda@kwe.com','name'=>'SHINICHI TSUDA'],
            ['email'=>'jonathan.baxter@kh.knightfrank.com','name'=>'Jonathan Baxter'],
            ['email'=>'somanitasim@kpmg.com.kh','name'=>'Sim Somanita'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT3'],
            ['email'=>'eam@cda-wines.com','name'=>'Pich SITHA'],
            ['email'=>'thomas_lim@lnlcambodia.com','name'=>'Hay Lim'],
            ['email'=>'criskirby2016@gmail.com','name'=>'Crispin Kirby'],
            ['email'=>'oudomboth.nou@mayflower-group.com','name'=>'Oudomboth Nou'],
            ['email'=>'sereileakhenapho@gmail.com','name'=>'Tay Teng Yew'],
            ['email'=>'mike.duggan@maersk.com','name'=>'Mike Duggan'],
            ['email'=>'contact@malis-dental.com','name'=>'Motomi Minemura'],
            ['email'=>'sallah_essa@hotmail.com','name'=>'Salah Essa'],
            ['email'=>'chris@mangotango.asia','name'=>'Christopher McCarthy'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT4'],
            ['email'=>'larry.kao@manhattansez.com','name'=>'Larry Jer-Hsiung Kao,'],
            ['email'=>'justin_helferich@manulife.com','name'=>'Justin Helferich'],
            ['email'=>'darren@maxkgroup.com','name'=>'Darren Phaen'],
            ['email'=>'kiri.chhoeung@milvik.se','name'=>'Kiriroath Chhoeung'],
            ['email'=>'thyda@modestore.asia','name'=>'Pytouputthyda Kheng'],
            ['email'=>'thuy.vu@nike.com','name'=>'Thuy VU'],
            ['email'=>'richard_vaughan@nisc.edu.kh','name'=>'Richard VAUGHAN'],
            ['email'=>'md@novacambodia.com','name'=>'Vannak NORNG'],
            ['email'=>'demian.jung@oakwood.com','name'=>'Demian Jung'],
            ['email'=>'a.durke@oborcapital.com','name'=>'Andrew Durke'],
            ['email'=>'marty@ymrtrading.com','name'=>'Marty Yang'],
            ['email'=>'kkheng@pactworld.org','name'=>'Khunny KHENG'],
            ['email'=>'v.te@parbury.com.kh','name'=>'Vong Chhay Te'],
            ['email'=>'isarun@pfd.org','name'=>'Sarun Im'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT5'],
            ['email'=>'steven.path@pathmazing.com','name'=>'Steven Path'],
            ['email'=>'jeff@peoplenpartners.com','name'=>'Jeffrey Whittaker'],
            ['email'=>'daren.ong@pernod-ricard.com','name'=>'Ong Daren'],
            ['email'=>'charles-henri.chevet@sofitel.com','name'=>'Charles Henri Chevet'],
            ['email'=>'generalinfo@psi.org.kh','name'=>'Socheat Chi'],
            ['email'=>'lim.kuy@kh.pwc.com','name'=>'Lim Kuy'],
            ['email'=>'sunny.huot@prudential.com.kh','name'=>'Sunny HUOT'],
            ['email'=>'sophia.altamirano@raffles.com','name'=>'Sophia Altamirano'],
            ['email'=>'zoe@raintreecambodia.com','name'=>'Zoe NG'],
            ['email'=>'tom.osullivan@realestate.com.kh','name'=>'Tom Osullivan'],
            ['email'=>'gregory@regiotels.com','name'=>'Gregory Tugendhat'],
            ['email'=>'saing.ngorn@rmagroup.net','name'=>'Saing NGORN'],
            ['email'=>'tith@roomchang.com','name'=>'Hong Yoeu TITH'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT6'],
            ['email'=>'daniel.simon@rosewoodhotels.com','name'=>'Daniel Simon'],
            ['email'=>'bjessen@samaritan.org','name'=>'Barry Jessen'],
            ['email'=>'sebkoh1118@gmail.com','name'=>'Sebastian Koh'],
            ['email'=>'channarith.sunsreng@yahoo.com','name'=>'Channarith SUN SRENG'],
            ['email'=>'dk@secureparking.com.kh','name'=>'David Knight'],
            ['email'=>'nir@selapepper.com','name'=>'Nir Sela'],
            ['email'=>'sok.vanseka@sethalay.com','name'=>'Vanseka Sok'],
            ['email'=>'anselmchu@sim.edu.sg','name'=>'Anselm CHU'],
            ['email'=>'contact@sithisak-lawoffice.com','name'=>'Sokeng Son'],
            ['email'=>'andries@slash.co','name'=>'Andries DE VOS'],
            ['email'=>'matthew.rendall@zicolaw.com','name'=>'Rendall Matthew'],
            ['email'=>'anthony@searasports.com','name'=>'Anthony Gaglardi'],
            ['email'=>'yuni@ezecomcorp.com','name'=>'Yuni Lee Heathcote'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT7'],
            ['email'=>'arnauddarc@thaliashospitality.com','name'=>'Arnaud DARC'],
            ['email'=>'meloney.lindberg@asiafoundation.org','name'=>'Meloney LINDBERG'],
            ['email'=>'gabriel@thecapacityspecialists.com','name'=>'Gabriel Helmy'],
            ['email'=>'thegivingtreeoffice@gmail.com','name'=>'Anna Glazkova'],
            ['email'=>'veasna@ligeracademy.org','name'=>'Veasna Pum'],
            ['email'=>'andrew@presentationclinic.net','name'=>'Andrew BARNES'],
            ['email'=>'hillaryvance@email.arizona.edu','name'=>'Hillary VANCE'],
            ['email'=>'john.k@tilleke.com','name'=>'John KING'],
            ['email'=>'dcarden@fedex.com','name'=>'David Carden'],
            ['email'=>'corbett@urbanlivingsolutions.com','name'=>'Corbett Hix'],
            ['email'=>'higginsl@state.gov','name'=>'Higgins Lauren'],
            ['email'=>'gm@modernityholding.com','name'=>'Samuel Clayton'],
            ['email'=>'abigail.chong@theatomvattanac.com','name'=>'Abigail Chong'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT7'],
            ['email'=>'alex.larkin@vdb-loi.com','name'=>'Alex LARKIN'],
            ['email'=>'mchum@visa.com','name'=>'Monika CHUM'],
            ['email'=>'yann@voltramotors.com','name'=>'VAUDIN YANN'],
            ['email'=>'evans@wengeworks.com.sg','name'=>'Evans Lee'],
            ['email'=>'gauntlett@wildlifealliance.org','name'=>'Suwanna Gauntlett'],
            ['email'=>'manu.rajan@wingmoney.com','name'=>'Manu Rajan'],
            ['email'=>'rithy_sear@worldbridge.com.kh','name'=>'Rithy SEAR'],
            ['email'=>'kim@3plefarm.com','name'=>'Ng Fun Kim'],
            ['email'=>'raytjcheah@gmail.com','name'=>'Mr. Ray cheah Teik Jin'],
            ['email'=>'jbenjee@yahoo.com','name'=>'Benjamin Jerome'],
            ['email'=>'km.tan@bakertilly.com.kh','name'=>'Mr. Tan Khee Meng'],
            ['email'=>'sslim@bdo.my','name'=>'Mr Lim Seng Siew'],
            ['email'=>'bgacambodia@gmail.com','name'=>'Mr. Billy Kang'],
            ['email'=>'bsagaiyaraj@gmail.com','name'=>'Bernard Sagaiyaraj'],
            ['email'=>'wongtf@cab.com.kh','name'=>'Mr. Wong Tow Fock'],
            ['email'=>'stc@cambodiandts.com','name'=>'Mr. Soo Too Cheong'],
            ['email'=>'ongmt@campubank.com.kh','name'=>'Ong Ming Teck'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT8'],
            ['email'=>'soh.jiunhong@campulonpac.com.kh','name'=>'Mr. Soh Jiun Hong'],
            ['email'=>'pichma.keo@cimb.com.kh','name'=>'Keo Pichma'],
            ['email'=>'gregc33@gmail.com','name'=>'Mr Gregory Chai'],
            ['email'=>'chinmon@covenant.com.kh','name'=>'Ms Cheah Chin Mon'],
            ['email'=>'kienhoe.onn@crowe.my','name'=>'Mr. Onn Kien Hoe'],
            ['email'=>'richard.chung@dragonfly.com.kh','name'=>'Mr. Richard Chung Lee Chek'],
            ['email'=>'kokmeng.l@etiqa.com.my','name'=>'Clarence Lit Kok Meng'],
            ['email'=>'yeezent.ng@kh.gt.com','name'=>'Mr Ng Yee Zent'],
            ['email'=>'errenceteoh@hlbkh.hongleong.com','name'=>'Mr. Terrence Teoh'],
            ['email'=>'alexphoon@itgdn.com','name'=>'Mr. Alex Phoon Wing Kit'],
            ['email'=>'datojackyap@jmestate.com','name'=>"Dato' Jack Yap"],
            ['email'=>'stephanie.tang@kfc.com.kh','name'=>'Ms Stephanie Tang Mei Ling'],
            ['email'=>'sunny.soo@keystone.com.kh','name'=>'Sunny Soo'],
            ['email'=>'khengfong.law@kh.knightfrank.com','name'=>'Mr Law Kheng Fong'],
            ['email'=>'teowhin.lin@leaderenergy.net','name'=>'Mr. Lim Teow Hin'],
            ['email'=>'bemardmakkwankit@gmail.com','name'=>' Bernard Mak'],
            ['email'=>'mbb@maybank.com.kh','name'=>"Dato' Mohd Hanif Suadi"],
            ['email'=>'kelvin@kelvintan.net','name'=>'Mr. Kelvin Tan'],
            ['email'=>'mmbbakery@gmail.com','name'=>"Dato' Mohamed Mashooth"],
            ['email'=>'bizdev@minconsult.com','name'=>'Mr Gainovry A. Djafar'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT9'],
            ['email'=>'anton@mpacambodia.com','name'=>'Mr. Anton Durairaj'],
            ['email'=>'my@online.com.kh','name'=>'Mr. Ng Ching Poo'],
            ['email'=>'pernchen@nagaworld.com','name'=>'Mr. Pern Chen'],
            ['email'=>'chinseng.k@national6a.com','name'=>'Mr Kam Chin Seng'],
            ['email'=>'phanyt@orientalbank.com.kh','name'=>'Datuk Phan Ying Tong'],
            ['email'=>'chaisy@panpages.com','name'=>'Ms Chaisy Sook Yee'],
            ['email'=>'vincentghtok@yahoo.com','name'=>'Mr. Vincent Tok Gee Hock'],
            ['email'=>'ngyenchao@pcd.lion.com.my','name'=>'Mr. Ng Yen Chao'],
            ['email'=>'choong@quality.com.kh','name'=>'Mr. Choong Wei Piau'],
            ['email'=>'wong.kee.poh@rhbgroup.com','name'=>'Wong Kee Poh'],
            ['email'=>'azmeer.syed@gmail.com','name'=>'Mr. Syed Azmee'],
            ['email'=>'sl.intl.1@online.com.kh','name'=>'Mr. Kenneth Kee'],

            ['email'=>'ldpmotz@gmail.com','name'=>'EL MOT10'],
            ['email'=>'airports.aeropatrick.chan@cambodia','name'=>'Mr. Patrick Chan'],
            ['email'=>'anthony.thong@softlinegroup.com','name'=>'Mr Anthony Thong'],
            ['email'=>'daron.wong@zicolaw.com','name'=>'Mr Daron Wong'],
            ['email'=>'business@speedpayplc.com','name'=>'Mr Lee Kok Yang'],
            ['email'=>'ssm.e@online.com.kh','name'=>'Ir. E.K.CHEW'],
            ['email'=>'thiangyh@sunwayhotels.com','name'=>'Mr Thiang Yang Hian'],
            ['email'=>'benjamin@t2interavtive.com','name'=>'Mr. Benjamin Chong'],
            ['email'=>'houtkimmeng@tanchonggroup.com','name'=>'Mr Huot Kimmeng'],
            ['email'=>'wisemac1998@hotmail.com','name'=>'Mr. Ng Hui'],
            ['email'=>'khorwohock@gmail.com','name'=>'Khor Woh Hock'],
            ['email'=>'koh.hao.jie@u-pay.com','name'=>'Koh Hao Jie'],
            ['email'=>'jean@vdb-loi.com','name'=>'iss Jean Loi Jin Choo'],
            ['email'=>'jeff@visionoutdoor.com.kh','name'=>'Jeff Cheah'],
            ['email'=>'michael@virtuecap.net','name'=>'Michael Lim'],
            ['email'=>'mohan@khmertimeskh.com','name'=>'Mr Mohan Tirugmanasam Bandam'],
            ['email'=>'simon@westecmedia','name'=>'Mr Simon Choo Chee Yen'],
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
        foreach ($cc as $email){
            $mail = new PromoteMail();
           if ( Mail::to($email["email"])
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
