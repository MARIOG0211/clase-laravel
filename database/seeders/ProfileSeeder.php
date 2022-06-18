<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profiles')->delete();

        DB::table('profiles')->insert([
            'fkuser' => 1,
            'fkrol' => 1
        ]);

        // Profile::factory()->count(100)->create();
    }
}
