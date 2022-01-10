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
            "آنی شرلی در گرین گیبلز" => ['writer_id' => $this->findWriterId('لوسی ماد مونتگمری') , 'content' => 'آن شرلی دختر بچه ای ۱۱ ساله است که در زمان نوزادی، والدینش را از دست داده و پس از آن زندگی پرماجرایی در نوانخانه ها و خانه های پرجمعیت داشته است. زندگی دخترک در نوانخانه ادامه داشت تا این که به او خبر می دهند که خواهر و برادری میانسال، او را به فرزند خواندگی خود پذیرفته اند. حال دیگر آنی شرلی باید وسایل ناچیز خود را جمع کرده و به گرین گیبلز، نزد «ماریلا» و «متیو کاتبرت» برود. آن شرلی با ذوق و شوق کودکانه خود به گرین گیبلز می رود و در کمال ناباوری متوجه می شود که ماریلا و ماتیو کاتبرت قصد داشتند پسر بچه ای را به فرزندی خود بپذیرند و در این بین اشتباهی صورت گرفته است. به همین دلیل آن شرلی باید دوباره به نوانخانه غمزده بازگردد و …' , 'top_title' => 'آنی شرلی در گرین گیبلز' , 'slug' => 'آنی-شرلی-در-گرین-گیبلز' , 'image'=> '/storage/images/books/آنه-شرلی.jpg' , 'category' => 'روانشناسی'],
            "آنا کارنینا" => ['writer_id' => $this->findWriterId('لئو تولستوی') , 'content' => 'اویلانوسکی و دالی، زن و شوهری هستند که زندگی نا به سامانی دارند. دالی دل در گرو معلمی فرانسوی به نام «ابلانسکی» دارد و نامه ای عاشقانه به او می نویسد. شوهرش اویلانوسکی، نامه را پیدا کرده و بین زن و شوهر اختلافات و دعوای شدیدی رخ می دهد. در این بین «آنا کارنینا» به عنوان خواهر اویلانوسکی، برای حل اختلاف زن و شوهر از سن پترزبورگ به مسکو می آید و…' , 'top_title' => 'آنا کارنینا' , 'slug' => 'آنا-کارنینا' , 'image'=> '/storage/images/books/آنا-کارنینا.jpg' , 'category' => 'داستانی'],
            "بر باد رفته" => ['writer_id' => $this->findWriterId('مارگارت میچل') , 'content' => 'داستان کتاب: اسکارلت اوهارا دختری زیبا و جذاب از خانواده ای متمول و زمین دار در جنوب آمریکاست. اسکارلت زیبا خواستگاران زیادی دارد؛ ولی او دل در گرو عشق اشلی نجیب زاده بسته. اما اشلی کوچکترین توجه و علاقه ای به اسکارلت نشان نمی دهد و با دختری به نام ملانی ازدواج می کند. پس از ازدواج ملانی و اشلی، اسکارلت که سرخورده و عصبی شده، باعث جدایی چارلز (برادر اشلی) از نامزدش می شود و با او ازدواج می کند.' , 'top_title' => 'بر باد رفته' , 'slug' => 'بر-باد-رفته' , 'image'=> '/storage/images/books/برباد-رفته.jpg' , 'category' => 'داستانی'],
            "بینوایان" => ['writer_id' => $this->findWriterId('ویکتور هوگو') , 'content' => 'داستان کتاب: ژان والژان مرد فقیری است که از سر گرسنگی قرصی نان می دزدد و به ۵ سال حبس با اعمال شاقه محکوم می شود.این ۵ سال حبس او بخاطر فرارهای پی در پی ژان والژان، به ۱۹ سال افزایش می یابد. پس از ۱۹ سال، ژان والژان از زندان آزاد شده و در خیابان سرگردان است که به اسقف مایرل برمی خورد. مایرل ژان والژان را به منزلش برده و به او غذا و جای خواب می دهد. نیمه های شب ژان ظروف نقره اسقف مایرل را دزدیده و فرار می کند. در راه فرار پلیس او را دستگیر کرده و برای روشن شدن قضیه، ظروف نقره نزد اسقف آورده می شود. ولی اسقف می گوید…' , 'top_title' => 'بینوایان' , 'slug' => 'بینوایان' , 'image'=> '/storage/images/books/بینوایان.jpg' , 'category' => 'داستانی'],
            "بلندی های بادگیر" => ['writer_id' => $this->findWriterId('امیلی جین برونته') , 'content' => 'داستان کتاب: راوی داستان خدمتکاری به نام «آلم دین» است که ماجرای زندگی شخصی به نام «هیت کلیف» را برای مستاجر او بازگو می کند. داستان اینگونه است که کلیف در کودکی پسر بچه ای یتیم و بی سرپرست بوده که توسط آقای «ارنشاو» تحت سرپرستی قرار می گیرد. پسر بچه کم کم با دختر آقای ارنشاو روابط دوستانه برقرار کرده و عشق آتشینی بین آن دو به وجود می آید. عشقی که با مخالفت اطرافیان سرکوب شده و…' , 'top_title' => 'بلندی های بادگیر' , 'slug' => 'بلندی-های-بادگیر' , 'image'=> '/storage/images/books/بلندی-های-بادگیر.jpg' , 'category' => 'داستانی'],
            "صد سال تنهایی" => ['writer_id' => $this->findWriterId('گابریل گارسیا مارکز') , 'content' => 'داستان کتاب: سرهنگ «آئورلیانو بوئندیا» به اعدام محکوم شده و هنگامی که او را مقابل جوخه اعدام قرار می دهند، تمام خاطرات زندگیش، از زمان کودکی تا به حال در نظرش مجسم می شود. آئورلیانو به زمان کودکی و چگونگی بوجود آمدن روستای ماکاندرو بازمی گردد؛ زمانی که در تمام دهکده تنها ۲۰ خانه خشت و گلی وجود داشت و…' , 'top_title' => 'صد سال تنهایی' , 'slug' => 'صد-سال-تنهایی' , 'image'=> '/storage/images/books/صدسال-تنهایی.jpg' , 'category' => 'داستانی'],
            "گتسبی بزرگ" => ['writer_id' => $this->findWriterId('اسکات فیتز جرالد') , 'content' => 'گتسبی بزرگ لقب مرد جوان بسیار ثروتمندی است که دائماً در خانه خود، مهمانی های بزرگ برگزار می کند و هر کسی اجازه شرکت در این  مهمانی های گتسبی را دارد. هیچکس به درستی گتسبی را نمی شناسد و مردم درباره او و چگونگی بدست آمدن ثروت بی پایانش، شایعاتی بر زبان ها میرانند. «نیک» که همسایه گتسبی است، در نهایت متوجه می شود که گتسبی از خانواده بسیار فقیری بوده که عاشق دختری ثروتمند بنام «دیزی» می شود. او برای خدمت نظام وظیفه و بدست آوردن پول و سرمایه، از دِیزی دور می شود؛ ولی چندی بعد با خبر می شود که دیزی ازدواج کرده و…' , 'top_title' => 'گتسبی بزرگ' , 'slug' => 'گتسبی-بزرگ' , 'image'=> '/storage/images/books/گتسبی-بزرگ.jpg' , 'category' => 'داستانی'],
            "مادام بواری" => ['writer_id' => $this->findWriterId('گوستاو فلوبر') , 'content' => 'داستان کتاب: اِما دختر جوانی است که با پدر پیرش زندگی می کند. پدر اِما بر اثر حادثه ای دچار شکستگی از ناحیه پا شده و این شکستگی موجب آشنایی اِما با دکتر شارل بواری می گردد. کم کم هر دو به همدیگر علاقمند می شوند و رابطه ای عاشقانه بین این دو به وجود میاد. اما دکتر بواری زن داشت و همسر او بیوه ای مستبد بود که مادر شارل آن را برای ازدواج با پسرش انتخاب کرده بود. با فوت کردن همسر دکتر، شرایط ازدواج شارل و اِما فراهم می شود و این دو با یکدیگر ازدواج می کنند. مدتی که از زندگی مشترک این دو گذشت، اِما عشقی که به شارل داشته بود را از دست داده و با لئون آشنا می شود و…' , 'top_title' => 'مادام بواری، رمان خارجی عاشقانه معروف' , 'slug' => 'مادام-بوواری' , 'image'=> '/storage/images/books/مادام-بوواری.jpg' , 'category' => 'داستانی'],
            "خشم و هیاهو" => ['writer_id' => $this->findWriterId('ویلیام فاکنر') , 'content' => 'داستان کتاب: کتاب خشم و هیاهو، سرگذشت خانواده کامپسون را روایت می کند. آقای کامپسون مزرعه دار بزرگ و ثروتمندی است و چهار فرزند دارد که سه پسر و یک دختر هستند. خانم کامپسن مادر خانواده تنها به پسر کوچک خود «کوانتین»، که پسری باهوش و با احساس است علاقه دارد. «کدی» تنها دختر خانواده، پیش از ازدواج باردار می شود و…' , 'top_title' => 'خشم و هیاهو' , 'slug' => 'خشم-و-هیاهو' , 'image'=> '/storage/images/books/خشم-و-هیاهو.jpg' , 'category' => 'داستانی'],
            "سه تفنگدار" => ['writer_id' => $this->findWriterId('الکساندر دوما') , 'content' => 'داستان کتاب: داستان این کتاب درباره دلاوری ها و رشادت های سه سرباز از سپاه تفنگدار لویی سیزدهم با نام های آتوس، پورتوس و آرامیس، و یک جوان دلیر دیگر از تفنگداران سلطنتی با نام دارتن یان است. این چهار مرد جوان با هم پیمان دوستی و برادری بسته و تحت هر شرایطی در کنار یکدیگر می مانند و…' , 'top_title' => 'سه تفنگدار' , 'slug' => 'سه-تفنگدار' , 'image'=> '/storage/images/books/سه-تفنگدار.jpg' , 'category' => 'داستانی'],
            "رابینسون کروزوئه" => ['writer_id' => $this->findWriterId('دانیل دفو') , 'content' => 'داستان کتاب: رابینسون کروزوئه نام یک جوان بریتانیایی ثروتمند است که به دنبال ماجراجویی های خود، زندگی آرام و راحتش را رها کرده و برای مسافرت در دریا سوار کشتی می شود. در اواسط سفر کشتی دچار شکستگی شده و تمام مسافرین و خدمه آن غرق می شوند و تنها رابینسون با چنگ زدن به تخته های شکسته کشتی، خود را به ساحل یک جزیره ای می رساند؛ به این امید که به زودی نجات پیدا کند. ولی این امیدی واهی است و رابینسون ۲۸ سال از عمر خود را در جزیره ای خالی از سکنه به سختی و تنهایی سپری می کند و…' , 'top_title' => 'رابینسون کروزوئه' , 'slug' => 'رابینسون-کروزوئه' , 'image'=> '/storage/images/books/رابینسون-کروزو.jpg' , 'category' => 'داستانی'],
            "خوشه های خشم" => ['writer_id' => $this->findWriterId('جان اشتاین بک') , 'content' => 'داستان کتاب: تام جاد پسر خانواده ای متوسط و کشاورز است که در یک دعوا با بیل مردی را به قتل رسانده و راهی زندان می شود. پس از سه سال به او مرخصی می دهند تا به دیدن خانواده اش برود. تام در راه با مردی بنام «کیزی» که در گذشته کشیش بوده آشنا می شود و پس از رسیدن به منزل متوجه می شود که با فراگیر شدن صنعت و تکنولوژی و کشاورزی ماشینی، زندگی خانواده او نابود شده و آنها به خاطر فقر و تنگدستی چاره ای جز مهاجرت به کالیفرنیا ندارند و…' , 'top_title' => 'خوشه های خشم' , 'slug' => 'خوشه-های-خشم' , 'image'=> '/storage/images/books/خوشه-های-خشم.jpg' , 'category' => 'داستانی'],
            "عشق در زمان وبا" => ['writer_id' => $this->findWriterId('گابریل گارسیا مارکز') , 'content' => 'فلورنتینو آریزو فرزند نامشروع فردی ثروتمند و صاحب یک کارخانه کشتیرانی است. او با مادرش که مدیر یک مغازه خرازی است، زندگی کرده و وضع اقتصادی متوسطی دارند. فلورنتینو مسئول تلگراف است و برای رساندن تلگراف وارد خانه ای شده و با دختری به نام «فرمینا» آشنا می شود. در همان ابتدای امر او عاشق فرمینا می شود. اما فرمینا از خانواده ثروتمندی است و پدرش علاقمند است که او با یکی از پسران اشراف و نجیب زاده ازدواج کند و…' , 'top_title' => 'عشق در زمان وبا' , 'slug' => 'عشق-در-زمان-وبا' , 'image'=> '/storage/images/books/عشق-در-زمان-وبا.jpg' , 'category' => 'داستانی'],
            "بابا لنگ دراز" => ['writer_id' => $this->findWriterId('جین وبستر') , 'content' => 'داستان کتاب: جودی آبوت دختر یتیمی است که تا نوجوانی در نوانخانه زندگی کرده و در آنجا از کودکان و شیرخواران نوانخانه مراقبت می کرد. در سن ۱۶ سالگی مردی ثروتمند به نام آقای «جان اسمیت»، هزینه تحصیل و زندگی جودی را بر عهده می گیرد. آقای اسمیت قیم جودی شده و نام او را در بهترین کالج دخترانه، ثبت نام می کند. جودی از آقای اسمیت فقط سایه مردی با کلاه و عصا و کت و شلوار به خاطر داشت و هرگز او را ندیده بود. او در کالج با سالی و جولیا هم اتاقی شده و روزهای خوبی را در کنار هم سپری می کنند. جودی به آقای اسمیت لقب بابا لنگ دراز رو داده و تصمیم دارد تا برای قدردانی از آقای او، به سختی درس خوانده و روزی یک نامه برای جان اسمیت بنویسد و…' , 'top_title' => 'بابا لنگ دراز، بهترین رمان های عاشقانه جهان' , 'slug' => 'بابا-لنگ-دراز' , 'image'=> '/storage/images/books/بابا-لنگ-دراز.jpg' , 'category' => 'داستانی'],
            "دور دنیا در هشتاد روز" => ['writer_id' => $this->findWriterId('ژول ورن') , 'content' => 'داستان کتاب: آقای فیلاس فوگ یک نجیب زاده انگلیسی است که با دوستان خود شرط بسته که در ۸۰ روز دنیا را دور بزند و به خانه برگردد. او به همراه خدمتکار وفادار خود ژان، که به پاسپارتو شهرت دارد، سفر خود به دور دنیا را آغاز می کند. در این بین یک پلیس بخاطر سرقت از بانک به آقای فوگ مظنون شده و در طی سفر سایه به سایه او می رود و…' , 'top_title' => 'دور دنیا در هشتاد روز' , 'slug' => 'دور-دنیا-در-هشتاد-روز' , 'image'=> '/storage/images/books/دور-دنیا-در-هشتاد-روز.jpg' , 'category' => 'داستانی'],
            "۱۹۸۴" => ['writer_id' => $this->findWriterId('جورج اورول') , 'content' => 'داستان کتاب: در سال ۱۹۸۴ جهان به سه بخش تقسیم شده و اعضای جامعه به سه طبقه کارگر، اعضای عادی حزب و اعضای رده بالای حزب تقسیم شده اند. وینستن اسمیت به عنوان شخصیت اصلی کتاب، عضو طبقه اعضای عادی حزب است. او روزی دفترچه ای تهیه کرده و افکار و اندیشه های خود را درون دفترچه می نویسد. طبق شرایط داستان، این کار خلاف مقررات بوده و وینستن برای نوشتن افکار خود در درون دفترچه، باید به نقاطی می رفت که خارج از دید صفحات سخنگو (نوعی دوربین مداربسته) باشد. سرانجام….' , 'top_title' => 'کتاب معروف ۱۹۸۴' , 'slug' => '۱۹۸۴' , 'image'=> '/storage/images/books/1984.jpg' , 'category' => 'داستانی'],
            "دن کیشوت" => ['writer_id' => $this->findWriterId('میگل سروانتس') , 'content' => 'داستان کتاب: “آلونسو کیخانو” نجیب زاده ای است که پس از خواندن کتاب های بیشمار درباره زندگی و افسانه شوالیه ها (که در آن زمان جزء ممنوعیات بشمار میرفته)، تحت تاثیر دلاوری و رشادت های آنها قرار می گیرد. او در عالم رویا و توهم، خود را شوالیه ای تصور می کند و نام “دن کیشوت مانچا” را برای خود برمی گزیند. دن کیشوت متوهم و رویایی سوار بر اسب بارکش خود راهی می شود تا به سراسر اسپانیا سفر کند و ظلم و پلیدی را در کشور خود ریشه کن کند و…' , 'top_title' => 'دن کیشوت' , 'slug' => 'دن-کیشوت' , 'image'=> '/storage/images/books/دن-کیشوت.jpg' , 'category' => 'داستانی'],
            "زنان کوچک" => ['writer_id' => $this->findWriterId('لوییزا می الکات') , 'content' => 'داستان کتاب: زنان کوچک ماجرای زندگی خانواده مارچ شامل خانم مارچ و چهار دخترش مِگ، جو، بت و اِیمی است و آقای مارچ پدر خانواده، به جنگ رفته است. خانواده مارچ در گذشته خانواده ای ثروتمندی بودند که با آغاز جنگ و رکود اقتصادی، زندگیشان دستخوش تغییراتی نه چندان خوشایند شده و الان مجبورند به تنهایی از پس مخارج خود برآیند. خانم مارچ در کنار کار برای امرار معاش، کارهای خیرخواهانه زیادی انجام داده و به نیازمندان کمک می کند. شخصیت اصلی داستان جو، دختر این خانواده، از محدودیت بیزار است و به یکباره تصمیم می گیرد که موهای خود را کوتاه کرده و خود را به شکل یک پسر درآورد تا…' , 'top_title' => 'زنان کوچک، یکی از بهترین رمان های خارجی' , 'slug' => 'زنان-کوچک' , 'image'=> '/storage/images/books/زنان-کوچک.jpg' , 'category' => 'داستانی'],
            "جنگ و صلح" => ['writer_id' => $this->findWriterId('لئو تولستوی') , 'content' => 'داستان کتاب: این کتاب به زندگی اشراف روسیه در زمان حمله ناپلئون بناپارت به روسیه می پردازد. ارتش ناپلئون بیش از نیمی از اروپا را فتح کرده و این موضوع موجب نگرانی مردم روسیه شده است. اتریش در حال جنگ با ارتش ناپلئون است و روسیه برای کمک به آنها، ارتش خود را به این کشور می فرستد. شخصیت های اصلی داستان دو مرد جوان با نام های «پییر بزوخوف» و «شاهزاده آندرِی بالکونسکی» هستند که هر دو عاشق دختر زیبای کنت روستوف، ناتاشا می شوند و…' , 'top_title' => 'جنگ و صلح' , 'slug' => 'جنگ-و-صلح' , 'image'=> '/storage/images/books/جنگ-و-صلح.jpg' , 'category' => 'داستانی'],
            "برادران کارامازوف" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => 'میتیا، ایوان، اسمردیاکوف و آلیوشا چهار پسر پیرمردی فاسد و ثروتمند با نام «فئودور کارامازوف» هستند. این چهار برادر از نظر اخلاقی و شخصیتی تفاوت های بسیاری با هم دارند و از ۳ زن مختلف متولد شده اند و تنها نکته مشترک در مورد آنها، نفرت بی پایانی بود که نسبت به پدرشان فئودور کارامازوف، داشتند. به همین دلیل چهار برادر نقشه قتل آقای کارامازوف را در ذهن دارند و…' , 'top_title' => 'برادران کارامازوف، بیست و چهارمین رمان معروف دنیا' , 'slug' => 'برادران-کارامازوف' , 'image'=> '/storage/images/books/برادران-کارامازوف.jpg' , 'category' => 'داستانی'],
            "به سوی فانوس دریایی" => ['writer_id' => $this->findWriterId('ویرجینیا وولف') , 'content' => 'داستان کتاب: داستان کتاب زندگی خانواده “رمزی” را در سه برهه متفاوت از زمان نشان می دهد. در بخش اول که پنجره نام دارد، یک روز از زندگی خانواده رمزی به همراه مهمانان آنها از زبان خودشان روایت می گردد. در این بخش تک تک شخصیت های زندگیشان را از زبان و دیدگاه خود تعریف می کنند. بخش دوم کتاب، زندگی این خانواده را پس از مرگ مادر خانواده، خانم رمزی، به تصویر می کشد و چگونگی از هم پاشیدن این خانواده را پس از ۱۰ سال روایت می کند. و…' , 'top_title' => 'به سوی فانوس دریایی، بیست و پنجمین رمان معروف دنیا' , 'slug' => 'به-سوی-فانوس-دریایی' , 'image'=> '/storage/images/books/به-سوی-فانوس-دریایی.jpg' , 'category' => 'داستانی'],
            "غرور و تعصب" => ['writer_id' => $this->findWriterId('جین آستن') , 'content' => 'داستان کتاب: خانواده “بِنِت” صاحب پنج دختر هستند و دو دختر بزرگتر آنها (جین و الیزابت)، به سن ازدواج رسیده اند. در همسایگی خانواده بنت، مرد جوان و ثروتمندی بنام آقای “بینگلی” زندگی می کند و خانم بنت تمایل زیادی برای آشنا شدن آقای بینگلی با یکی از دخترانش و ازدواج با آنها از خود نشان می دهد. آقای بینگلی یک مهمانی شبانه ترتیب داده و خانواده بنت را هم دعوت می کند. در این مهمانی آقای دارسی، دوست صمیمی آقای بینگلی که جوانی ثروتمند و خوش قیافه است، حضور دارد. آقای بینگلی در طی مهمانی با جین، دختر بزرگ خانواده آشنا شده و چند دور با او می رقصد. اما زمانی که میخواهد آقای دارسی را با الیزابت آشنا کند، آقای دارسی می گوید: این دختر آنقدر زیبا نیست که مرا وسوسه کند. سپس…' , 'top_title' => 'غرور و تعصب' , 'slug' => 'غرور-و-تعصب' , 'image'=> '/storage/images/books/غرور-و-تعصب.jpg' , 'category' => 'داستانی'],
            "جین ایر" => ['writer_id' => $this->findWriterId('شارلوت برونته') , 'content' => 'داستان کتاب: جین ایر داستان دختری است که در کودکی پدر و مادرش را از دست داده است. او برای ادامه زندگی، نزد دایی و زن دایی اش خانم “رید” می رود، ولی خانم رید و فرزندانش رفتار درستی با جین نداشته و مدام او را آزار می دهند. پس از مدتی جین به پرورشگاه «لوود» سپرده شده و در محیط خشک و نا امید کننده این پرورشگاه بزرگ می شود. جین پس از پایان تحصیلات خود، به عنوان معلم به منزل آقای “روچستر” که مردی ثروتمند و اشراف زاده است، می رود. آقای روچستر به جین علاقمند شده و…' , 'top_title' => 'جین ایر، از رمان های خوب جهان' , 'slug' => 'جین-ایر' , 'image'=> '/storage/images/books/جین-ایر.jpg' , 'category' => 'داستانی'],
            "پیرمرد و دریا" => ['writer_id' => $this->findWriterId('ارنست همینگوی') , 'content' => 'داستان کتاب: سانتیاگو پیرمرد ماهیگیر و فقیری است که در طول ۸۴ روز، حتی یک ماهی کوچک هم صید نکرده و تصمیم دارد تا برای صید ماهی به دوردست ها برود. صبح روز بعد پیرمرد با قایق خود راهی دریا شده و حدود ظهر به اواسط دریا می رسد. او طعمه های خود را در آب رها کرده و به انتظار ماهی می نشیند. مدتی بعد ماهی بسیار بزرگی طعمه را می بلعد؛ ولی سانتیاگو قادر به بالا کشیدن ماهی نیست! ولی ماهی که بسیار قوی و بزرگ است به مدت دو روز قایق پیرمرد را به دنبال خود در دریا می کشد و در این میان هیچ کدام دست از تقلا برنمی دارند. روز سوم کم کم ماهی توان خود را از دست داده و دیگر قادر به حرکت قایق نیست؛ پیرمرد ماهی را به کنار قایق کشیده و نیزه خود را در بدن ماهی فرو می کند و ماهی را از پا در می آورد و…' , 'top_title' => 'پیرمرد و دریا' , 'slug' => 'پیرمرد-و-دریا' , 'image'=> '/storage/images/books/پیرمرد-و-دریا.jpg' , 'category' => 'داستانی'],
            "سفرهای گالیور" => ['writer_id' => $this->findWriterId('جاناتان سوییفت') , 'content' => 'داستان کتاب: این کتاب داستان سفر دریانورد ماجراجو، ناخدا “لموئل گالیور”، را در چهار سفر پر‌حادثه و عجیب بازگو می کند. طوفان دریایی بزرگی کشتی ناخدا گالیور را در هم شکسته و گالیور سوار بر موج ها به ساحل برده می شود. زمانی که به هوش میاد، خود را در سرزمینی به نام لیلیپوت با مردمی به بزرگی کف دست آدمیزاد، اسیر می بیند و…' , 'top_title' => 'سفرهای گالیور' , 'slug' => 'سفرهای-گالیور' , 'image'=> '/storage/images/books/سفر-های-گالیور.jpg' , 'category' => 'داستانی'],
            "میدل مارچ" => ['writer_id' => $this->findWriterId('جورج الیوت') , 'content' => 'میدل مارچ اسم شهرستانی است که ماجراهای کتاب در آن رخ می دهد. قهرمان داستان دختر جوان و خیال پردازی به نام “دورتا” است که با وجود خصوصیات بی نظیر و شایسته، با کشیش علیل و بیماری که بیست و چند سال از او بزرگتر بوده و به نوعی جای پدرش است، ازدواج می کند. پس از مرگ کشیش دوروتا تصمیم می گیرد…' , 'top_title' => 'میدل مارچ، رمان معروف دنیا' , 'slug' => 'میدل-مارچ' , 'image'=> '/storage/images/books/میدل-مارچ.jpg' , 'category' => 'داستانی'],


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


///////////////// comments ///////////////////////
    //other dream books //
    // "خانه قانون زده" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "ماجراهای هاکلبری فین" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "اولیور توئیست" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "درنده باسکرویل" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "پستچی همیشه دو بار زنگ میزند" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "گرسنه" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "آرزوهای بزرگ" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "دل تاریکی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "آوای وحش" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "پرتقال کوکی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "ابله" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "لولیتا" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "مرد نامرئی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "خانم دالووی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "زوربای یونانی" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "فرانکنشتاین" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "موبی دیک" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "مسخ" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "جزیره گنج" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    // "دختری با گوشواره مروارید" => ['writer_id' => $this->findWriterId('فئودور داستایوفسکی') , 'content' => '' , 'top_title' => '' , 'slug' => '' , 'image'=> '/storage/images/books/.jpg' , 'category' => 'داستانی'],
    ////////////
//////////////endcomments/////////////////////