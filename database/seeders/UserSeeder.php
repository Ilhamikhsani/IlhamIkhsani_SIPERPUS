<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user= User::create([
            'name' => 'pustakawan A',
            'email' => 'pustakawan@gmail.com',
            'password' =>Hash::make('pustakawan')
        ]);
        $user->assignRole('pustakawan');
        $user->givePermisionTo('kelola_buku');

        $user= User::create([
            'name' => 'Mahasiswa B',
            'email' => 'Mahasiswa@gmail.com',
            'password' =>Hash::make('Mahasiswa')
        ]);

        $user->assignRole('member');
        $user->givePermisionTo('lihat_buku');

    }
}
