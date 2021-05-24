<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'      => 'author invalible',
                'email'     => 'author_unknown@g.g',
                'password'  => bcrypt(Str::random(16)),
            ],
            [
                'name'      => 'author',
                'email'     => 'author1@g.g',
                'password'  =>  bcrypt('123123')
            ]
            ];

            DB::table('users')->insert($data);
    }
}
