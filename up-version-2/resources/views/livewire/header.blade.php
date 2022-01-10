@if(env('APP_URL') == url()->current())
    <header class="header-index">
@else
    <header class="header">
@endif
    <div class="header-nav">
        <div class="container">
            <nav>
                <div class="header-logo">
                    <a href="/">
                        <img src="/assets/images/mylogo.jpg" alt="site-logo">
                    </a>
                </div>
                <ul class="header-menu-list">
                    <li class="category-li">
                        <a>
                        دسته بندی
                        <ul class="category-list">
                            @foreach ($categories as $item)
                            <li class="row-2"><a href="/category/{{$item->title}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                        </a>
                    </li>
                    <li><a href="#">ایرانی</a></li>
                    <li><a href="#">مقالات</a></li>
                    <li><a href="#">تماس با ما</a></li>
                    <li><a href="#">درباره ما</a></li>
                </ul>
                <div class="hamburger-icon">
                    <img src="/assets/images/hamburger_icon.png" id="icon-ham">
                </div>
                <div class="clientarea">
                    @if(auth()->check())
                    <div class="logged-in">
                        <div class="sublayer">
                            <a class="title">{{ auth()->user()->username}}</a>
                            <ul>
                                <li><a href="#">مشاهده حساب کاربری</a></li>
                                <li><a href="#">ویرایش حساب کاربری</a></li>
                                <li><a href="#">تغییر رمز عبور</a></li>
                                <li><a href="/logout">خروج از حساب کاربری</a></li>
                            </ul>
                        </div>
                        <a href="#" class="imglayer"><img src="/assets/images/pubic-profile.png"></a>
                    </div>
                    @else
                    <div class="login-auth">
                        <i class="col-2 fa fa-user-circle-o" aria-hidden="true"></i>
                        <a href="/login" class=" col-3 login-a" style="padding-left: 2px; text-align: left">
                            <span>ورود</span>
                        </a>
                        <a href="/register" class=" col-6 register-a">
                            <span>ثبت نام</span>
                        </a>
                    </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
    <div class="header-content">
        <div class="header-title">
            <div class="container">
                <h1><span>دنبال چه کتابی میگردی؟</span></h1>
                <p><span>به راحتی کتاب مورد نظر خودت رو پیدا کن</span></p>
            </div>
        </div>
    </div>
    {{-- <header class="container-fluid shadow sticky-top py-1 w_100vw header-a-m"> --}}
      {{-- <div class="row m-0 justify-content-between w-100 align-items-center">
        <ul class="d-flex menu_top align-items-center">
          <li class="logo_top animate__animated animate__flip">
            <a href="/">
              <img src="/assets/images/mylogo.jpg" />
            </a>
          </li>

          <li class="mx-3 cursor_pointer_text_shadow font_1_1">
            کتاب ها
            <span></span>
          </li>
          <li class="mx-3 cursor_pointer_text_shadow font_1_1">
            درباره ما
            <span></span>
          </li>
          <li class="d-block d-md-none mx-4">
            <a href="/" class="fas fa-search fa-2x cursor_pointer_text_shadow "></a>
          </li>
        </ul>
        <div class="col-12 col-md-4 form-group search_box  d-none d-md-block">
          <input type="text" class="form-control rounded_5 placeholder_gray shadow-sm" placeholder="دنبال چی می گردی؟"/>
          <a href="/search.html" class="fas fa-search search_btn"></a>
        </div>
        <div class="login-auth">
            <li class="mx-3 cursor_pointer_text_shadow font_1_1">
            <a href="/login" class="login-a">
                ورود
                <span></span>
            </a>
            <a href="/register" class="register-a">
                ثبت نام
                <span></span>
            </a>
          </li>
        </div>
      </div> --}}
</header>
