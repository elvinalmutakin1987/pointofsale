<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'email' => 'elvinalmutakin@gmail.com',
        ], [
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'administrator'
        ]);

        $data = [
            "username" => "elvin",
            "password" => "123",
            "hak_akses" => "Administrator"
        ];

        DB::table('posusers')->insert($data);
    }
}
