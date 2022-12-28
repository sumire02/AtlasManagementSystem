<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'over_name' =>'先生',
                'under_name' =>'代表',
                'over_name_kana' =>'センセイ',
                'under_name_kana' =>'ダイヒョウ',
                'mail_address' =>'sennsei@gmail.com',
                'sex' =>1,
                'birth_day' =>'1990-01-01',
                'role' =>1,
                'password' =>bcrypt('password'),
            ],
            [
                'over_name' =>'生徒',
                'under_name' =>'一員',
                'over_name_kana' =>'セイト',
                'under_name_kana' =>'イチイン',
                'mail_address' =>'seito@gmail.com',
                'sex' =>2,
                'birth_day' =>'2000-12-31',
                'role' =>4,
                'password' =>bcrypt('password'),
            ],
        ]);

    }
}
