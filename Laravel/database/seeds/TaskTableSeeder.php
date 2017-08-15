<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('tasks')->insert(
            [
                'name' => 'Task 1',
                'description' => 'newest one',
                'user_id' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        DB::table('tasks')->insert(
            [
                'name' => 'Task 2',
                'description' => 'newer one',
                'user_id' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        DB::table('name')->insert(
            [
                'title' => 'Task 3',
                'description' => 'Aenean varius magna sed mattis posuere.',
                'user_id' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
