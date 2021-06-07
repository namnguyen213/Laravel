<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('classes')->insert([
                'class_name' => Str::random(10),
                'course_id' => random_int(1, 99),
            ]);
        }
    }
}
