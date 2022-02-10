<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'rohit',
            'email' => 'rohit@gmail.com',
            'address' => 'gunderdehi',
        ]);

        DB::table('students')->insert([
            'name' => 'kamlesh',
            'email' => 'kamlesh@gmail.com',
            'address' => 'gunderdehi',
        ]);

        DB::table('students')->insert([
            'name' => 'sanju',
            'email' => 'sanju@gmail.com',
            'address' => 'gunderdehi',
        ]);

        DB::table('students')->insert([
            'name' => 'prem',
            'email' => 'prem@gmail.com',
            'address' => 'gunderdehi',
        ]);

        DB::table('students')->insert([
            'name' => 'demo1',
            'email' => 'demo1@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo2',
            'email' => 'demo2@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo3',
            'email' => 'demo3@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo4',
            'email' => 'demo4@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo5',
            'email' => 'demo5@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo6',
            'email' => 'demo6@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo7',
            'email' => 'demo7@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo8',
            'email' => 'demo8@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo9',
            'email' => 'demo9@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo10',
            'email' => 'demo10@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => 'demo11',
            'email' => 'demo11@gmail.com',
            'address' => 'gunderdehi',
        ]);
        DB::table('students')->insert([
            'name' => '12',
            'email' => '12@gmail.com',
            'address' => 'gunderdehi',
        ]);

    }
}
