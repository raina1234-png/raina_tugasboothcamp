<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        // Pendaftaran Akun Administrator Utama
        User::create([
            'name'     => '123',
            'email'    => '123@gmail.com',
            'password' => Hash::make('123'), // Enkripsi hashing Bcrypt / Argon2
        ]);
    }
}