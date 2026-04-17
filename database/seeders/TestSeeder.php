<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('test')->insert([
                'name' => 'Test User ' . ($i + 1),
                'email' => 'testuser' . ($i + 1) . '@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
