<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Mario',
            'lastname' => 'Garcia',
            'identification' => 1007784144,
            'email' => 'mario@gmail.com',
            'password' => bcrypt('0211')
        ]);

        User::factory()->count(100)->create();
    }
}
