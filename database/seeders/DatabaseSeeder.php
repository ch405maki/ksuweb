<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Create admin user
        $adminUser = new User([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin@123')
        ]);

        // Save admin user to database
        DB::transaction(function () use ($adminUser) {
            $adminUser->save();
        });
    }
}

