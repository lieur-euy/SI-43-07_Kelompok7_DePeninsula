<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\admin::insert([
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123'),
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
