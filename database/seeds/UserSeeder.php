<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$professions = DB::select('SELECT id FROM professions WHERE title = ?',['Desarrollador back-end']);
        $professionId = Profession::where('title','Desarrollador back-end')->value('id');
       // dd($profession->id);professions[0]

        User::create([
            'name' => 'Roberto Carreon',
            'email' => 'roberto.carreon@cceo.com.mx',
            'password' => bcrypt('admin'),
            'profession_id' =>$professionId,

        ]);
    }
}
