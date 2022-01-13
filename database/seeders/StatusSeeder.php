<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::factory()->create([
            'name' => 'open'
        ]);
        Status::factory()->create([
            'name' => 'in progress'
        ]);

        Status::factory()->create([
            'name' => 'cancelled'
        ]);

        Status::factory()->create([
            'name' => 'completed'
        ]);

        Status::factory()->create([
            'name' => 'blocked'
        ]);
    }
}
