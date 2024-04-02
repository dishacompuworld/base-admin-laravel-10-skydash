<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servers = Server::all();

        // return $servers;

        return view("pages.server.index", compact('servers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.server.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request;


        $server = new Server;

        $server->name = $request->name;
        $server->shortname = $request->sname;
        $server->mip = $request->ip;
        $server->ip2 = $request->ip2;
        $server->username = $request->susername;
        $server->password = $request->pass;

        if($request->enable){
            $server->enable=1;
        }else{
            $server->enable=0;
        }

        // $server->enable = $request->enable;

        $server->save();

        return redirect()->route('server.index')
        ->with('msg', $server->name . ' added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Server $server)
    {
        $servers = Server::find($server->id);

        // return $servers;

        return view('pages.server.show', compact('servers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Server $server)
    {
        $servers = Server::find($server->id);

        // return $servers;

        return view('pages.server.update', compact('servers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Server $server)
    {


        // return $request;

        $server = Server::find($server->id);

        $server->name = $request->name;
        $server->shortname = $request->sname;
        $server->mip = $request->ip;
        $server->ip2 = $request->ip2;
        $server->username = $request->susername;
        $server->password = $request->pass;

        if($request->enable){
            $server->enable=1;
        }else{
            $server->enable=0;
        }

        // $server->enable = $request->enable;

        $server->save();

        return redirect()->route('server.index')
        ->with('msg', $server->name . ' Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Server $server)
    {
        $server = Server::find($server->id);
        $server->delete();

        return redirect()->route('server.index')
        ->with('msg', 'User Deleted Successfully.');
    }
}
