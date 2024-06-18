<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

