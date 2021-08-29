<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        // And now, let's create a few articles in our database:

        $json = File::get('database/data/users.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            User::create(array(
                'name' => $obj->name,
                'email' => $obj->email,
                'mobile' => $obj->mobile,
                'salary' => $obj->salary,
                'designation' => $obj->designation,
                'password' => $obj->password,
                'is_admin' => $obj->is_admin
            ));
        }
    }
}
