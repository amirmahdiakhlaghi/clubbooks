<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'ادبیات' => ['slug' => 'ادبیات'],
            'روانشناسی' => ['slug' => 'روانشناسی'],
            'تاریخی' => ['slug' => 'تاریخی'],
            'داستانی' => ['slug' => 'داستانی'],
            'علمی تخیلی' => ['slug' => 'علمی_تخیلی'],
            'جنایی' => ['slug' => 'جنایی'],
            'هنر' => ['slug' => 'هنر'],
            'ترسناک' => ['slug' => 'ترسناک'],
            'کسب و کار' => ['slug' => 'کسب_و_کار'],
            'ورزشی' => ['slug' => 'ورزشی'],
            'تکنولوژی' => ['slug' => 'تکنولوژی'],
            'مستند' => ['slug' => 'مستند'],
            'کامیک' => ['slug' => 'کامیک']
        ];

        foreach ($categories as $title => $value) {
            Category::create([
                'title' => $title,
                'slug' => $value['slug']
            ]);

            $this->command->info('add' . $title . 'category to db');
        }
    }
}
