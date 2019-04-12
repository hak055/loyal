<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *    						добавление данных для входа 
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Masha',
            'email' => 'masha@mail.ru',
            'password' => bcrypt('masha555'),//пороль masha555
        ]);
    }
}
