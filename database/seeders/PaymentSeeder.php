<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('payments')->delete();

        DB::table('payments')->insert([
            'payment' => 'Cash'
        ]);

        DB::table('payments')->insert([
            'payment' => 'Credit card'
        ]);

        DB::table('payments')->insert([
            'payment' => 'Paypal'
        ]);
    }
}
