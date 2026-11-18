<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengguna')->updateOrInsert(
            ['email' => 'admin@debarrio.id'],
            [
                'nama' => 'Muhammad Fikri Firdaus',
                'password' => Hash::make('password'),
                'peran' => 'admin',
                'status_aktif' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('pengguna')->updateOrInsert(
            ['email' => 'kasir@debarrio.id'],
            [
                'nama' => 'Kasir Warkop',
                'password' => Hash::make('password'),
                'peran' => 'kasir',
                'status_aktif' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
