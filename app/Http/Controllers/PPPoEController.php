<?php

namespace App\Http\Controllers;

use App\Models\RouterosAPI;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Server;

class PPPoEController extends Controller
{
    public function secret()
    {
        // $ip = session()->get('ip');
        // $user = session()->get('user');
        // $password = session()->get('password');
        // $API = new RouterosAPI();
        // $API->debug = false;

        // if ($API->connect($ip, $user, $password)) {

        //     $secret = $API->comm('/ppp/secret/print');
        //     $profile = $API->comm('/ppp/profile/print');

        //     $data = [
        //         'menu' => 'PPPoE',
        //         'totalsecret' => count($secret),
        //         'secret' => $secret,
        //         'profile' => $profile,
        //     ];

        //     // dd($data);
        //     return view('pppoe.secret', $data);
        // } else {

        //     return redirect('failed');
        // }
    }

    public function payment_management()
    {
        // $ip = session()->get('ip');
        // $user = session()->get('user');
        // $password = session()->get('password');
        // $API = new RouterosAPI();
        // $API->debug = false;

        // if ($API->connect($ip, $user, $password)) {

        //     $secret = $API->comm('/ppp/secret/print');
        //     $profile = $API->comm('/ppp/profile/print');

        //     $data = [
        //         'menu' => 'PPPoE',
        //         'totalsecret' => count($secret),
        //         'secret' => $secret,
        //         'profile' => $profile,
        //     ];

        //     // dd($data);
        //     return view('pppoe.payment_management', $data);
        // } else {

        //     return redirect('failed');
        // }
    }



    public function add(Request $request)
	{
		// $ip = session()->get('ip');
		// $user = session()->get('user');
		// $password = session()->get('password');
		// $API = new RouterosAPI();
		// $API->debug = false;

		// if ($API->connect($ip, $user, $password)) {

		// 	$API->comm('/ppp/secret/add', [
		// 		'name' => $request['user'],
		// 		'password' => $request['password'],
		// 		'service' => $request['service'] == '' ? 'any' : $request['service'],
		// 		'profile' => $request['profile'] == '' ? 'default' : $request['profile'],
		// 		'local-address' => $request['localaddress'] == '' ? '0.0.0.0' : $request['localaddress'],
		// 		'remote-address' => $request['remoteaddress'] == '' ? '0.0.0.0' : $request['remoteaddress'],
		// 		'comment' => $request['comment'] == '' ? '' : $request['comment'],
		// 	]);

		// 	// dd($request->all());

		// 	// Alert::success('Success', 'Selamat anda Berhasil menambhakan secret PPPoE');
		// 	return redirect('pppoe/secret');
		// } else {

		// 	return redirect('failed');
		// }
	}

    public function set_lunas(Request $request, $id)
    {
        // $ip = session()->get('ip');
        // $user = session()->get('user');
        // $password = session()->get('password');
        // $API = new RouterosAPI();
        // $API->debug = false;

        // if ($API->connect($ip, $user, $password)) {
        //     try {
        //         // Set the comment to 'LUNAS'
        //         $API->comm("/ppp/secret/set", [
        //             ".id" => $id,
        //             'profile' => $request['profile'] == '' ? $request['profile'] : $request['profile'],
        //             'comment' => 'LUNAS',
        //         ]);

        //         $get_id =  $API->comm("/ppp/active/print", [
        //             "?name" => $request['name'],
        //         ]);



        //         $API->comm("/ppp/active/remove", [
        //             ".id" => $get_id[0]['.id'],
        //         ]);

        //         // Disconnect from RouterOS
        //         // $API->disconnect();

        //         // Send JSON response
        //         return response()->json(['success' => true]);
        //     } catch (\Exception $e) {
        //         // Handle exceptions (log or return an error response)
        //         return response()->json(['success' => false, 'error' => $e->getMessage()]);
        //     }
        // } else {
        //     // Failed to connect to RouterOS
        //     return response()->json(['success' => false, 'error' => 'Failed to connect to RouterOS']);
        // }
    }



    public function edit($id)
	{
		// $ip = session()->get('ip');
		// $user = session()->get('user');
		// $password = session()->get('password');
		// $API = new RouterosAPI();
		// $API->debug = false;

		// if ($API->connect($ip, $user, $password)) {

		// 	$getuser = $API->comm('/ppp/secret/print', [
		// 		"?.id" => '*' . $id,
		// 	]);

		// 	$secret = $API->comm('/ppp/secret/print');
		// 	$profile = $API->comm('/ppp/profile/print');

		// 	$data = [
		// 		'user' => $getuser[0],
		// 		'secret' => $secret,
		// 		'profile' => $profile,
		// 	];

		// 	// dd($data);

		// 	return view('pppoe.edit', $data);
		// } else {

		// 	return redirect('failed');
		// }
	}



    public function update(Request $request)
	{

		// $ip = session()->get('ip');
		// $user = session()->get('user');
		// $password = session()->get('password');
		// $API = new RouterosAPI();
		// $API->debug = false;

		// $API->connect($ip, $user, $password);

		// $API->comm("/ppp/secret/set", [
		// 	".id" => $request['id'],
		// 	'name' => $request['user'] == '' ? $request['user'] : $request['user'],
		// 	'password' => $request['password'] == '' ? $request['password'] : $request['password'],
		// 	'service' => $request['service'] == '' ? $request['service'] : $request['service'],
		// 	'profile' => $request['profile'] == '' ? $request['profile'] : $request['profile'],
		// 	'disabled' => $request['disabled'] == '' ? $request['disabled'] : $request['disabled'],
		// 	'local-address' => $request['localaddress'] == '' ? $request['localaddress'] : $request['localaddress'],
		// 	'remote-address' => $request['remoteaddress'] == '' ? $request['remoteaddress'] : $request['remoteaddress'],
		// 	'comment' => $request['comment'] == '' ? $request['comment'] : $request['comment'],
		// ]);


		// // Alert::success('Success', 'Selamat anda Berhasil mengupdate secret PPPoE');
		// return redirect()->route('pppoe.secret');
	}

    public function delete(Request $request)
	{

        // echo  $request->id . ' '. $request->sid;

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

                // $activeu = $API->comm('/ppp/active/print');

                $API->comm('/ppp/secret/remove', [
                    '.id' => $request->id
                ],);

                // return $request->id;
                
                // return view('pages.PPPoE.active', compact('servers','activeu','iid'))
                //     ->with('msg', 'User Deleted Successfully');

            }else{

                // return view('pages.PPPoE.active', compact('servers','activeu','iid'))
                // ->with('msg', 'User not deleted');
            }
            
        }else{
            // return view('pages.PPPoE.active', compact('servers','activeu','iid'));
        }
	}

    // public function callserver(){

    //     $servers = Server::where('enable','1')->get();
    //     $activeu=[];
    //     $iid=0;

    //     // return view('pages.PPPoE.active', compact('servers'));
    //     return view('pages.PPPoE.active', compact('servers','activeu','iid'));
    // }



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
