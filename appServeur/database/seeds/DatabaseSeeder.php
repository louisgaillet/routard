<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.fr',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@user.fr',
            'password' => bcrypt('user'),
        ]);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GuidesTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
