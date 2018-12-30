<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
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
            'book' => 'laravel',
            'category' => 'technology',
            'pageNumber' => '200',
            'icon' => 'reading',
            'user_id' => '1'
        ];
        DB::table('books')->insert($param);

        $param = [
            'book' => 'laravel',
            'category' => 'technology',
            'pageNumber' => '200',
            'icon' => 'read',
            'user_id' => '1'
        ];
        DB::table('books')->insert($param);

        $param = [
            'book' => 'laravel',
            'category' => 'technology',
            'pageNumber' => '200',
            'icon' => 'reading',
            'user_id' => '2'
        ];
        DB::table('books')->insert($param);
    }

}
