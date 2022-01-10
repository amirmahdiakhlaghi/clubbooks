<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'محبوب',
            'داستانی',
            'ماجراجویی',
            'هیجان_انگیز',
            'رمان',
            'تاریخی',
            'جنایات_و_مکافات',
            'ادبیات',
            'روانشناسی',
            'تاریخی',
            'داستانی',
            'علمی تخیلی',
            'هنر',
            'کسب و کار',
            'ورزشی',
            'تکنولوژی',
            'مستند',
            'کامیک',
            'جنایی',
            'درام',
            'ترسناک',

        ];

        foreach ($tags as $value) {
            Tag::create([
                'title' => $value
            ]);

            $this->command->info('add' . $value . 'tag to db');
        }


    }
}
