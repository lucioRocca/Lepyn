<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
          'name' => 'Lucio',
          'email' => 'lucio@gmail.com',
          'password' => Hash::make('123'),
          'created_at' => Carbon::now(),
      ]);

       DB::table('users')->insert([
        'name' => 'Lucio2',
        'email' => 'lucio2@gmail.com',
        'password' => Hash::make('123'),
        'created_at' => Carbon::now(),
    ]);

    }
}
