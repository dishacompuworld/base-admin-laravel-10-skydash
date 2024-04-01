<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\Server;

class servers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Json File
        $json = File::get(path:'database/json/server.json');
        $servers=collect(json_decode($json));


        $servers->each(function($server){
            Server::create([
                'name' => $server->name,
                'mip' => $server->mip,
                'ip2' => $server->ip2,
                'shortname' => $server->shortname,
                'username' => $server->username,
                'password' => $server->password,
                'enable' => $server->enable



            ]);

        });
    }
}
