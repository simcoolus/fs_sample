<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadStausesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'status' => 'not started'],
            ['id' => 2, 'status' => 'started'],
            ['id' => 3, 'status' => 'finished'],
            ['id' => 4, 'status' => 'retired'],
        ];

        DB::table('read_statuses')->insert($data);
    }
}
