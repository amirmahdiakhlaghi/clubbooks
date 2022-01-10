<div class="profile-page">
    <div class="container">
        <div class="profile-page-content">
            <div class="rightside col-12 col-md-3">
                <aside class="profile-sidebar">
                    <div class="headline">
                        <div class="img-layer">
                            <form action="">
                                <a class="change-img">
                                    <input type="file">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <img src="/assets/images/pubic-profile.png" class="imgAvatar">
                            </form>
                        </div>
                        <h2>کاربر</h2>
                        <a></a>
                    </div>
                    <div class="access-menu">
                        <ul>
                            @if($switchedToEdit == true)
                            <li><a wire:click="switchToShow">مشاهده حساب کاربری</a></li>
                            @else
                            <li><a wire:click="switchToEdit">ویرایش حساب کاربری</a></li>
                            @endif
                            <li><a wire:click="$toggle('switchedToChangePassword')">تغییر رمز عبور</a></li>
                            <li><a href="/mybook" style="color:rgb(15 45 73)">کتاب های مورد علاقه</a></li>
                            <li><a>خروج از حساب کاربری</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="leftside col-12 col-md-9">
                <div class="client-datainfo">
                    <div class="header">
                        @if($switchedToChangePassword == true)
                            <h5>تغییر رمز عبور</h5>
                        @else
                            <h5>مشخصات حساب کاربری</h5>
                        @endif
                    </div>
                    <div class="client-datainfo-content">
                        @if($switchedToChangePassword)
                            <form action="">
                                <div class="form-client">
                                    <div class="col-12 col-md-10">
                                        <label>
                                            <i class="fas fa-user"></i>
                                            پسورد قبلی
                                        </label>
                                        <input type="text" class="" wire:model="oldPassword">
                                        @error('oldPassword')
                                            <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <label>
                                            <i class="fas fa-user"></i>
                                            پسورد جدید
                                        </label>
                                        <input type="text" class="" wire:model="newPassword">
                                        @error('newPassword')
                                            <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <label>
                                            <i class="fas fa-user"></i>
                                           تکرار پسورد جدید
                                        </label>
                                        <input type="text" class="" wire:model="newPasswordConfrim">
                                        @error('newPasswordConfrim')
                                            <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-4 col-md-3 btnback">
                                        <button type="button" class="btn btn-primary" wire:click="$toggle('switchToChangePassword')">بازگشت</button>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <button type="button" class="btn btn-success" wire:click="changePassword">تایید ویرایش</button>
                                    </div>
                                </div>
                            </form>
                        @else
                            @if($switchedToEdit != true)
                            <div class="form-client">
                                <div class="col-12 col-md-6">
                                    <label>
                                        <i class="fas fa-user"></i>
                                        نام
                                    </label>
                                    <input type="text" class="" disabled value="{{$user->userInfo->name}}">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label>
                                        <i class="fas fa-user"></i>
                                        نام خانوادگی
                                    </label>
                                    <input type="text" class="" disabled value="{{$user->userInfo->lastname}}">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label>
                                        <i class="fas fa-user"></i>
                                        نام کاربری
                                    </label>
                                    <input type="text" class="" disabled value="{{$user->username}}">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label>
                                        <i class="fas fa-user"></i>
                                        شماره تلفن همراه
                                    </label>
                                    <input type="text" class="" disabled value="{{$user->phone}}">
                                </div>
                                <div class="col-12">
                                    <label>
                                        <i class="fas fa-comment-alt"></i>
                                        بیوگرافی
                                    </label>
                                    <textarea type="text" class="" disabled>{{$user->userInfo->bio}}</textarea>
                                </div>
                                <div class="col-4 col-md-3">
                                    <button type="button" class="btn btn-success" wire:click="switchToEdit">ویرایش</button>
                                </div>
                            </div>
                            @else
                            <form action="">
                                <div class="form-client">
                                    <div class="col-12 col-md-6">
                                        <label>
                                            <i class="fas fa-user"></i>
                                            نام
                                        </label>
                                        <input type="text" class="" wire:model="dataName">
                                        @error('dataName')
                                            <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>
                                            <i class="fas fa-user"></i>
                                            نام خانوادگی
                                        </label>
                                        <input type="text" class="" wire:model="dataLastname">
                                        @error('dataLastname')
                                            <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>
                                            <i class="fas fa-user"></i>
                                            نام کاربری
                                        </label>
                                        <input type="text" class="" wire:model="dataUsername">
                                        @error('dataUsername')
                                            <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>
                                            <i class="fas fa-user"></i>
                                            شماره تلفن همراه
                                        </label>
                                        <input type="text" class="" wire:model="dataPhone">
                                        @error('dataPhone')
                                            <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label>
                                            <i class="fas fa-comment-alt"></i>
                                            متن پیام
                                        </label>
                                        <textarea type="text" class="" wire:model="dataBio"></textarea>
                                        @error('dataBio')
                                            <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-4 col-md-3 btnback">
                                        <button type="button" class="btn btn-primary" wire:click="switchToShow">بازگشت</button>
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <button type="button" class="btn btn-success" wire:click="editInfo">تایید ویرایش</button>
                                    </div>
                                </div>
                            </form>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
