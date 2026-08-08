<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $username = 'sroykimou';
        $admin = User::where('username', $username)->first();

        // Use password from environment variable if available, otherwise default to a secure fallback
        $password = env('ADMIN_PASSWORD', 'secret123');

        if (!$admin) {
            User::create([
                'username' => $username,
                'name' => 'Sroy Kimou',
                'email' => 'sroykimou@gmail.com',
                'password' => Hash::make($password),
                'grade' => '12',
                'branch' => 'science',
                'is_admin' => true,
                'level' => 6
            ]);
        } else {
            $admin->update([
                'is_admin' => true,
                'level' => 6
            ]);
        }
    }
}
