<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\disasterModel;
use App\Models\User;
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
        // \App\Models\User::factory(2)->create();
        $user= User::factory()->create([
            'name'=>'john',
            'email'=>'john@gmail.com'
        ]);
        disasterModel::factory(4)->create([
            'user_id'=>$user->id
        ]);
       
    }
}
