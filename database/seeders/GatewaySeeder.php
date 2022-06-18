<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gateways')->delete();

        DB::table('gateways')->insert([
            'gateway' => 'One'
        ]);

        DB::table('gateways')->insert([
            'gateway' => 'Two'
        ]);
    }
}
