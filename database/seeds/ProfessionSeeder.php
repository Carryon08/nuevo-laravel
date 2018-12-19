<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Profession::create([
            'title' => 'Desarrollador back-end',
        ]);


        \App\Profession::create([
            'title' => 'Desarrollador Front-end',
        ]);
        \App\Profession::create([
            'title' => 'Diseñador web',
        ]);
        //DB::table('professions')->insert([
        //    'title' => 'Desarrollador back-end',
        //]);

        factory(\App\Profession::class)->times(10)->create();

    }
}
