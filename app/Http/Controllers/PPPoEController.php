<?php

namespace App\Http\Controllers;

use App\Models\RouterosAPI;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Server;

class PPPoEController extends Controller
{

    public function delete(Request $request)
	{

        // echo  $request->id . ' '. $request->sid;

        $iid = $request->get('server');
        $servers = Server::where('enable','1')->get();
        $activeu=[];
        $msg='';

        if($iid){

            $serveriid = Server::find($iid);

            $ip = $serveriid->mip;
            $user = $serveriid->username;
            $password = $serveriid->password;

            $API = new RouterosAPI();
            $API->debug = false;

            if ($API->connect($ip, $user, $password)) {

                // $activeu = $API->comm('/ppp/active/print');

                $API->comm('/ppp/active/remove', [
                    '.id' => $request->id
                ],);

                $msg = 'User Deleted Successfully';

            }else{

                $msg = 'User not deleted';

            }


            if ($API->connect($ip, $user, $password)) {

                $activeu = $API->comm('/ppp/active/print');

                // return $msg;


                return view('pages.PPPoE.active', compact('servers','activeu','iid'));
                    // ->with('msg',$msg);

            }
        }
	}


    public function active(Request $request)
	{

        $iid = $request->get('server');
        $servers = Server::where('enable','1')->get();
        $activeu=[];

        if($iid){

            $serveriid = Server::find($iid);

            $ip = $serveriid->mip;
            $user = $serveriid->username;
            $password = $serveriid->password;

            $API = new RouterosAPI();
            $API->debug = false;

            if ($API->connect($ip, $user, $password)) {

                $activeu = $API->comm('/ppp/active/print');

                return view('pages.PPPoE.active', compact('servers','activeu','iid'));

            }
        }else{
            return view('pages.PPPoE.active', compact('servers','activeu','iid'));
        }
	}
}

// error_reporting(0);
