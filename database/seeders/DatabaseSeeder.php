<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'AdminUbsi',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0812345678901',
            'password' => bcrypt('P@55word'),
        ]);

        User::create([
            'nama' => 'Fzwalldin',
            'email' => 'fzwalldin6@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '081234567892',
            'password' => bcrypt('P@55word'),
        ]);

        #data kategori
        Kategori::create([
            'nama_kategori' => 'Baju Alucard Pedang Api',
        ]);
        Kategori::create([
            'nama_kategori' => 'Baju Free Fire',
        ]);
        Kategori::create([
            'nama_kategori' => 'Baju Hayato Love Kelly',
        ]);
        Kategori::create([
            'nama_kategori' => 'Baju Keren Alox',
        ]);
        Kategori::create([
            'nama_kategori' => 'Baju Zilong',
        ]);
    }
}
