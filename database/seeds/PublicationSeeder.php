<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert([
            'title' => 'Plomero',
            'text' => "Necesito trabajo, soy plomero",
            'image' => '',
            'telephone' => 3515317312,
            'occupation_id' => 2,
            'type_id' => 1,
            'user_id' => 1

        ]);
    }
}
