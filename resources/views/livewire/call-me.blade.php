<div class="call-me-page">
    <div class="container">
        <div class="call-me-content">
            <div class="rightside col-12 col-md-4">
                <div class="topside">
                    <h4>
                        <i class="fas fa-phone"></i>
                        شماره تماس و ایمیل
                    </h4>
                    <p>021 - *********</p>
                    <p>info@amirmahdiakhlaghi.ir</p>
                </div>
                <div class="bottomside">
                    <h4>
                        <i class="fas fa-mobile-alt"></i>
                        شماره موبایل
                    </h4>

                    <p>09221987867</p>
                </div>
            </div>
            <div class="leftside col-12 col-md-7">
                <form action="" class="call-me-form">
                    <div class="form-header">
                        <h6>فرم تماس با ما</h6>
                    </div>
                    <div class="form-main">
                        <div class="col-12 col-md-6">
                            <label>
                                <i class="fas fa-user"></i>
                                نام و نام خانوادگی
                            </label>
                            <input type="text" class="" wire:model="name">
                            @error('name')
                                <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label>
                                <i class="fas fa-envelope"></i>
                                ایمیل
                            </label>
                            <input type="text" class="" wire:model="email">
                            @error('email')
                                <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-12 col-md-12">
                            <label>
                                <i class="fas fa-comment-alt"></i>
                                موضوع
                            </label>
                            <input type="text" class="" wire:model="subject">
                            @error('subject')
                                <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-12 col-md-12">
                            <label>
                                <i class="fas fa-comment-alt"></i>
                                متن پیام
                            </label>
                            <textarea type="text" class="" wire:model="text"></textarea>
                            @error('text')
                                <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-12 col-md-12">
                            <button class="btn btn-success" wire:click="send">ثبت پیام</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
