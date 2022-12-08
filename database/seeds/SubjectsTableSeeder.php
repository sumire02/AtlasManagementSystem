<?php

use Illuminate\Database\Seeder;
use App\Models\Users\Subjects;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 国語、数学、英語を追加

        DB::table('subjects')->insert([
            [
            'id' =>'1',
            'Subject' =>'国語',
            'created_at' =>date('Y-m-d H:i:s'),
            ],
            [
            'id' =>'2',
            'Subject' =>'数学',
            'created_at' =>date('Y-m-d H:i:s'),
            ],
            [
            'id' =>'3',
            'Subject' =>'英語',
            'created_at' =>date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
