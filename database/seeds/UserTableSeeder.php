<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->truncate();
       foreach (range(1,100) as $i){
       User::create([
       	'name'=>'Rafael strey',
       	'email'=>'rafaelstrey'.$i.'@hotmail.com',
        'password' => bcrypt('senha'.$i)
       	]);
     }

    }
}
