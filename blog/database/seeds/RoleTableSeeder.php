<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $role = new Role();
        // $role->name = "admin";

        Role::create([
            "name" => "admin"
        ]);

        Role::create([
            "name" => "user"
        ]);

        // Hoặc khai báo trong DatabaseSeeder hoặc chạy lệnh
        // php artisan db:seed --class=RoleTableSeeder
    }
}
