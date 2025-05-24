<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'Admin',
    'email' => 'admin@email.com',
    'password' => Hash::make('passwordadmin'),
    'role' => 'ADMIN'
]);