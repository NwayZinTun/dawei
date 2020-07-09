<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        
        // $admin = User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make ('123456789')
        // ]);
        // $admin -> assignRole('admin');
        // $this->call(UsersTableSeeder::class);
    }
}
