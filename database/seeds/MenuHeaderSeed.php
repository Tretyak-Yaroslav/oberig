<?php

use Illuminate\Database\Seeder;

class MenuHeaderSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         \App\Models\MenuHeader::insert([
             "parent_id" => null,
             "lft" => 1,
             "rgt" => 98,
             "depth" => 0,
             "title" => "Меню",
             'url' => '',
             'url_external' => '',
         ]);
    }
}
