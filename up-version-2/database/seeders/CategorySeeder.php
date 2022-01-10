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
            'ادبیات',
            'روانشناسی',
            'تاریخی',
            'داستانی',
            'علمی تخیلی',
            'جنایی',
            'هنر',
            'ترسناک',
            'کسب و کار',
            'ورزشی',
            'تکنولوژی',
            'مستند',
            'کامیک'
        ];

        foreach ($categories as $value) {
            Category::create([
                'title' => $value
            ]);

            $this->command->info('add' . $value . 'category to db');
        }
    }
}
