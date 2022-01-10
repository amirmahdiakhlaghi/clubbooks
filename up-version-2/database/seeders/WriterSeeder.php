<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writers = [
            'فئودور داستایوفسکی' => ['description' => 'فئودور داستایوفسکی، خالق آثار جاودانه‌ای چون "ابله" و "جنایت و مکافات"، از جمله مهم‌ترین نویسندگان قرن نوزدهم بود که با کتاب‌هایش تاثیری ژرف بر ادبیات روسیه و جهان گذاشت. او در رمان‌های بزرگ خود راوی دشواری‌های زندگی در جهانی‌ست که بنیان‌های اخلاقی‌ آن سست و لرزان شده است. داستان‌های داستایفسکی بهترین نمونه از تجلیِ افکار و ایده‌های فلسفی در ادبیاتند. او در کتاب‌هایش به واکاوی دقیق تعارضات فکری و عاطفیِ انسان مدرن پرداخته است. داستایفسکی از نخستین متفکرانی بود که به درستی متوجه خطراتِ واقعیتی شد که نیچه از آن به عنوان "مرگ خدا" یاد کرده است. به بیانی، او عواقب سست شدن بنیان‌های اندیشه‌ی متافیزیکی را در آثار خود با وضوحی هولناک گوشزد کرد. از مهمترین آثار او میتوان کتاب های : جنایت و مکافات (1866) , ابله (1869)و جن‌زدگان (1872) و برادران کارامازوف (1880)نام برد.' , 'image' => '/storage/images/writers/'],
            'استفان کینگ' => ['description' => 'استیون کینگ از بهترین داستان نویسان دنیا است که توانسته بیشتر از ۱۰۰ رمان و ۳۰۰ داستان کوتاه را بنویسد. این نویسنده محبوب و دوست داشتنی، جایزه های مختلفی را کسب کرده که مهمترین آن جایزه بنیاد کتاب ملی آمریکاست. استیون ادوین کینگ در سن ۲۶ سالگی اولین رمان خودش را با اسم “کری“ به چاپ رساند. این رمان موفق با استقبال خوب خوانندگان همراه شد و نام کینگ را جهانی کرد و بعد از آن کتاب هایش مرزهای فروش میلیونی را شکستند! استیون کینگ جزو فعال ترین نویسندگانی است که برای نوشتن کتاب هایش از جان و دل مایه می گذاشت و وقت زیادی را صرف آنها می کرد. کتاب «فصول گوناگون» از بهترین آثار استیون است که فیلم های موفق بسیاری را از روی آن ساخته اند. علاوه بر این کتاب، آثار مختلفی هم بصورت فیلم از این نویسنده پخش شده که مهمترین آنها عبارتند از: مسیر سبز، رهایی از شاوشنگ، درخشش، میزری، کری، پنجره مخفی، ناامیدی، با من باش، منطقه مرده، کامیونها، پرنده شب، شکارچی رویا، غبار' , 'image' => '/storage/images/writers/'],
            'جورج اورول' => ['description' => 'جرج اورول (George Orwell)، داستان‌نویس، روزنامه‌نگار، منتقد ادبی و شاعر انگلیسی بود. او را بیشتر برای دو رمان سرشناس و پرفروش مزرعه حیوانات و هزار و نهصد و هشتاد و چهار می‌شناسند. این دو کتاب بر روی هم بیش از هر دو کتاب دیگری از یک نویسندهٔ قرن بیستمی، فروش داشته‌اند. جرج اورول (George Orwell)، نام مستعار اریک آرتور بلر نویسنده، روزنامه‌نگار شهیر انگلیسی است که در کتاب‌های خود سعی کرده تا تصاویری از (پاد) آرمان شهرهای حکومت‌های وقت خود بخصوص روسیه و استالین را به نمایش گذاشته و در اصل این موضوع را بیان دارد که مقصود این حکومت‌ها در اصل "پاد آرمان شهر" می‌باشد. جرج اورول در رمان‌هایش با اتخاذ دیدگاه منتقدانه آینده مطلب رهبران سیاسی و انقلابی را ترسیم نموده. تجربه سیاسی وی بهمراه حضورش در جنگ داخلی اسپانیا و همچنین تجربه جنگ جهانی دوم در شکل گرفتن کتاب‌هایش نقش مهمی را ایفا نموده است.' , 'image' => '/storage/images/writers/'],
            'آنتوان دو سنت اگزوپری' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'لوسی ماد مونتگمری' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'لئو تولستوی' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'مارگارت میچل' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'ویکتور هوگو' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'امیلی جین برونته' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'گابریل گارسیا مارکز' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'اسکات فیتز جرالد' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'گوستاو فلوبر' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'ویلیام فاکنر' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'الکساندر دوما' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'دانیل دفو' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'جان اشتاین بک' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'جین وبستر' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'ژول ورن' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'میگل سروانتس' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'لوییزا می الکات' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'لئو تولستوی' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'ویرجینیا وولف' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'جین آستن' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'شارلوت برونته' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'ارنست همینگوی' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'جاناتان سوییفت' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'جورج الیوت' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'چارلز دیکنز' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'مارک تواین' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'آرتور کانن دویل' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'جیمز کین' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'کنوت هامسون' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'جوزف کنراد' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'جک لندن' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'آنتونی برجس' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'ولادیمیر ناباکوف' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'هربرت جورج ولز' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'ویرجینیا وولف' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'نیکوس کازانتزاکیس' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'مری شلی' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'هرمان ملویل' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'فرانتس کافکا' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'رابرت لویی استیونسن' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'تریسی شوالیه' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'ویلیام شکسپیر' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'گوته' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'سیدنی شلدون' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'کن فالت' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'نو‌آم چامسکی' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'لوبسانگ رامپا' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'مایکل لوسیر' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'دیوید نیون' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'وی. اس. نایپل' => ['description' => '' , 'image' => '/storage/images/writers/'],
            'هارولد رابینز' => ['description' => '' , 'image' => '/storage/images/writers/']
        ];

        foreach ($writers as $name => $value) {
            Writer::create([
                'name' => $name,
                'description' => $value['description'],
                'image' => $value['image'],
            ]);

            $this->command->info('add' . $name . 'wirter to db');
        }
    }

}
