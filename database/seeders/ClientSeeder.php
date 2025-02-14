<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => 'Pedro',
            'email' => 'pedro@example.com',
            'password' => Hash::make('root'),
            'role' => 'admin',
        ]);

        Client::create([
            'name' => 'Vinicius',
            'email' => 'vinicius@example.com',
            'password' => Hash::make('123456'),
            'role' => 'user',
        ]);
    }
}
