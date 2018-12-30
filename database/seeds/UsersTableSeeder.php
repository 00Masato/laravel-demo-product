<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => 'a',
            'email' => 'masato.kato@gmail.com',
            'password' => 'a'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'b',
            'email' => 'masato.kato@outlook.jp',
            'password' => 'b'
        ];

        DB::table('users')->insert($param);

        $param = [
            'name' => 'c',
            'email' => 'masato.kato0604@i.softbank.jp',
            'password' => 'c'
        ];
        DB::table('users')->insert($param);


    }
}
