<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RouterosAPI;
use App\Models\Server;

class ServerStats extends Controller
{
    public function index(Request $request)
    {

        $iid = $request->get('server');
        $servers = Server::where('enable','1')->get();
        $data=[];

        if($iid){

            $serveriid = Server::find($iid);

            $ip = $serveriid->mip;
            $user = $serveriid->username;
            $password = $serveriid->password;

            $API = new RouterosAPI();
            $API->debug = false;

            if ($API->connect($ip, $user, $password)) {

                $hotspotactive = $API->comm('/ip/hotspot/active/print');
                $resource = $API->comm('/system/resource/print');
                $secret = $API->comm('/ppp/secret/print');
                $active = $API->comm('/ppp/active/print');
                // $interface = $API->comm('/interface/ethernet/print');
                $routerboard = $API->comm('/system/routerboard/print');
                $identity = $API->comm('/system/identity/print');


                $data = [
                    'totalsecret' => count($secret),
                    'totalhotspot' => count($hotspotactive),
                    'hotspotactive' => count($hotspotactive),
                    'active' => count($active),
                    'cpu' => $resource[0]['cpu-load'],
                    'uptime' => $resource[0]['uptime'],
                    'version' => $resource[0]['version'],
                    'boardname' => $resource[0]['board-name'],
                    'freememory' => $resource[0]['free-memory'],
                    'freehdd' => $resource[0]['free-hdd-space'],
                    'model' => $routerboard[0]['model'],
                    'identity' => $identity[0]['name'],
                ];

                // return $data;

                return view('pages.stats.index', compact('servers','iid','data'));
            } else {

                return redirect('failed');
            }
        }

        return view('pages.stats.index', compact('servers','iid','data'));
    }


    public function show(Request $request)
    {


    }

}
