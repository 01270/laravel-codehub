<?php

namespace Database\Seeders;
use App\Models\Code;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '123ya123'
        ]);

        Code::create( [
            'user_id' => $user->id,
            'title' => 'Print Hi Python',
            'tags' => 'python, noobs',
            'telegram' => '0I1270',
            'code' => 'print("hi")'
        ]);

        Code::create([
            'user_id' => $user->id,
            'title' => 'Print x = 5 Python',
            'tags' => 'python, noobs',
            'telegram' => '0I1270',
            'code' => 'print(5)'
        ]);
    }
}
