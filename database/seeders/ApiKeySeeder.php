<?php

namespace Database\Seeders;

use App\Models\ApiKey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApiKey::create([
            'key' => ApiKey::generate(),
            'user' => 'buzasig'
        ]);
    }
}
