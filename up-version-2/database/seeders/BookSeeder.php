<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            "جنایت و مکافات" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => 'داستان کتاب: مرد جوانی با نام «رادیون رومانویچ راسکلنیکف»، بخاطر فقر و بی پولی خود مجبور به ترک تحصیل و دانشگاه خود شده است. در این دوران او به فکر کشتن پیرزنی نزول خوار است که در قبال گرفتن اموال گرویی مردم، مقدار کمی پول به آنها می دهد. راسکولنیکف این کار را به خاطر پول انجام نمی دهد و هدف اصلی او از این قتل، پاسداری از اصولی است که برای خود تعیین کرده. کتاب جنایات و مکافات، شرایط روحی این جوان را به زیبایی هرچه تمام تر روایت می کند.','top_title' => 'جنایات و مکافات از معروف ترین رمان های جهان' , 'slug' => 'جنایات-و-مکافات' , 'image'=> '/storage/images/books/جنایات-و-مکافات.jpg' , 'category' => 'داستانی'],
            "مسیر سبز" => ['writer_id' => $this->findWriterId('استفان کینگ') , 'content' => 'پیرمردی با نام «پل اجکام» دوران پیری خود را در خانه سالمندان می گذارند. او برای فرار از روزمرگی و فرسودگی های این دوران، قصد دارد تا خاطرات دورانی جوانی خود در زندان «کلد مانتین» را بنویسد. این زندان محل نگهداری افراد محکوم به اعدام بود و آنها را با نوعی صندلی برقی با نام «اولد اسپارکی» مجازات می کردند. پل در دوران جوانی خود، سرپرست بند A این زندان بود و در خاطرات خود از مرد قوی هیکل سیاه پوستی به نام «جان کافی» حرف می زند که به اتهام قتل دو دختر بچه، محکوم به اعدام با اولد اسپارکی شده بود. اما جان کافی در اصل بی گناه است و پل قصد دارد تا بی گناهی او را ثابت کند.' , 'top_title' => 'مسیر سبز، از بهترین رمان های جهان' , 'slug' => 'مسیر-سبز' , 'image'=> '/storage/images/books/مسیر-سبز.jpg' , 'category' => 'داستانی'],
            "قلعه حیوانات" => ['writer_id' => $this->findWriterId('جورج اورول') , 'content' => '«مِیجر» خوکی پیر است که شبی در خواب، تمامی حیوانات مزرعه را آزاد و رها می بیند. در خواب او دیگر اثری از کار کردن بی وقفه حیوانات و کشتار آنها به خاطر ظلم و ستم انسان ها نیست. روز بعد میجر تمام حیوانات مزرعه را دور خود جمع کرده و در سخنرانی خود از ظلم بی پایان انسان ها سخن گفته و آنها را به شورش علیه مالک مزرعه دعوت می کند. چندی بعد حیوانات شورش کرده و آقای جونز، مالک مزرعه و همسرش را از مزرعه خود بیرون می کنند. پس از این ماجرا خوک ها اداره مزرعه را بدست گرفته و …' , 'top_title' => 'قلعه حیوانات، از معروف ترین رمان های جهان' , 'slug' => 'قلعه-حیوانات' , 'image'=> '/storage/images/books/قلعه-حیوانات.jpg' , 'category' => 'داستانی'],
            "شازده کوچولو" => ['writer_id' => $this->findWriterId('آنتوان دو سنت اگزوپری') , 'content' => 'خلبانی که هواپیمایش در صحراهای بی پایان آفریقا دچار نقص فنی شده و مجبور به فرود اضطراری و تعمیر موتور هواپیما می شود. روزی در دل صحرا خلبان، پسر بچه ای با موهای طلایی را می بیند و از او می خواهد تا بره ای برایش نقاشی کند. این پسر بچه در اصل همان «شازده کوچولو» است که از سیارکی کوچک بنام سیارک ب ۶۱۲، به زمین سفر کرده. سیارک شازده کوچولو به  اندازه خودش و گل سرخ اوست. این سیارک  دو کوه آتشفشان هم دارد که ارتفاع آن تا زانوی شازده کوچولو می رسد. شازده کوچولو برای خلبان از سفرش می گوید و از روباهی که اهلی کرده و …' , 'top_title' => 'شازده کوچولو' , 'slug' => 'شازده-کوچولو' , 'image'=> '/storage/images/books/شازده-کوچولو.jpg' , 'category' => 'داستانی'],
            "آنی شرلی در گرین گیبلز" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "آنا کارنینا" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "بر باد رفته" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "بینوایان" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "بلندی های بادگیر" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "صد سال تنهایی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "گتسبی بزرگ" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "مادام بواری" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "خشم و هیاهو" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "سه تفنگدار" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "رابینسون کروزوئه" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "خوشه های خشم" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "عشق در زمان وبا" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "بابا لنگ دراز" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "دور دنیا در هشتاد روز" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "کتاب معروف ۱۹۸۴" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "دن کیشوت" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "زنان کوچک" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "جنگ و صلح" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "برادران کارامازوف" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "به سوی فانوس دریایی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "غرور و تعصب" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "جین ایر" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "پیرمرد و دریا" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "سفرهای گالیور" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "میدل مارچ" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "خانه قانون زده" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "ماجراهای هاکلبری فین" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "اولیور توئیست" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "درنده باسکرویل" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "پستچی همیشه دو بار زنگ میزند" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "گرسنه" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "آرزوهای بزرگ" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "دل تاریکی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "آوای وحش" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "پرتقال کوکی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "ابله" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "لولیتا" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "مرد نامرئی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "خانم دالووی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "زوربای یونانی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "فرانکنشتاین" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "موبی دیک" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "مسخ" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "جزیره گنج" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],
            "دختری با گوشواره مروارید" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '' , 'category' => ''],

        ];


        foreach ($books as $h_title => $value) {
            $book = Book::create([
                'h_title' => $h_title,
                'writer_id' => $value['writer_id'],
                'content' => $value['content'],
                'top_title' => $value['top_title'],
                'slug' => $value['slug'],
                'image' => $value['image']
            ]);
            if($category = $value['category']){
                $categoryId = Category::where('title',$category)->get()->first->id;
                $book->categories()->attach($categoryId);
            }
            $this->command->info('add ' . $h_title . 'to db');
        }
    }

    protected function findWriterId($witerName){
        $writerName = $witerName;
        $writer = Writer::where('name', $writerName)->get()->first();
        return $writer->id;
    }
}
