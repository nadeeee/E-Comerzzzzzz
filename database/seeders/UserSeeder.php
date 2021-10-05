<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name' => 'Mamat',
            'email' => 'mamat@gmail.com',
            'password' => Hash::make('12345678'),
            'address' => 'Jalan Teuboga',
            'phone' =>'0856789903',
        ]);

        
    }
}
