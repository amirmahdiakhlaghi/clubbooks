<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'amir@morales.com' => ['username' => 'amir' , 'password' => Hash::make('amir123456') , 'type' => User::TYPE_SUPERADMIN ,'is_superuser' => 1, 'verified_at' => now()],
            'mahdi@mahdi.com' => ['username' => 'mahdi' , 'password' => Hash::make('mahdi123456') , 'type' => User::TYPE_ADMIN ,'is_superuser' => 0, 'verified_at' => now()],
            'mohammad@mohammad.com' => ['username' => 'mohammad' , 'password' => Hash::make('123456') , 'type' => User::TYPE_USER ,'is_superuser' => 0, 'verified_at' => now()],
        ];

        foreach ($users as $email => $value) {
            $user = User::create([
                'email' => $email,
                'username' => $value['username'],
                'password' => $value['password'],
                'type' => $value['type'],
                'is_superuser' => $value['is_superuser'],
                'verified_at' => $value['verified_at']
            ]);

            UserInfo::create([
            'user_id' => $user->id,
            'name' => explode('@',$user->email)[0],
            ]);

            $this->command->info('added user ' . $value['username'] . ' to db');
        }
    }
}
