<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 2,
            'name' => "Gene Bitara",
            'email' => "genebitara@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'isAdmin' => true
        ]);
    }
}
