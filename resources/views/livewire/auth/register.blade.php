<main class="main-register">
  <div class="main container">
      <div class="row justify-content-center align-items-center">
          @if(!$sendedCode)
              <form action="" class="bg_blur_light p-4 col-12 col-md-6 my-5 shadow ">
                <i class="fas fa-user-lock fa-3x d-block text-center my-3"></i>
                <h5 class="text-center">فرم ثبت نام</h5>
                <div class="form-group row justify-content-center">
                  <input type="text" class="form-control login-input rounded_2 col-10 col-md-5 mx-1 shadow" placeholder="ایمیل یا تلفن همراه" wire:model="data.field">
                  @error('data.field')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group row justify-content-center">
                  <input type="text" class="form-control rounded_2 col-10 col-md-5 mx-1 shadow" placeholder="نام کاربری" wire:model="data.username">
                  @error('data.username')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group row justify-content-center">
                  <input type="text" class="form-control rounded_2 col-10 col-md-5 mx-1 shadow" wire:model="data.password" placeholder="کلمه عبور">
                  @error('data.password')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group row justify-content-center">
                  <input type="text" class="form-control rounded_2 col-10 col-md-5 mx-1 shadow" wire:model="data.password_confirmation" placeholder="تکرار کلمه عبور">
                  @error('data.password_confirmation')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group row justify-content-center">
                  <input type="checkbox" class="form-control outline_0 box_shadow_0 border-0 h-auto" wire:model="data.policy">
                  <a href="#" class="text-info mx-2">قوانین</a> را مطالعه کرده ام
                </div>
                <div class="form-group row justify-content-center">
                  <button type="button" class="btn btn-success rounded_5 px-5 shadow-sm" wire:click="registerNewUser" @if(!$data['policy']) disabled @endif>ثبت نام</button>
                </div>
              </form>
          @else
              <form action="" class="bg_blur_light p-4 col-12 col-md-6 my-5 shadow ">
                <h5 class="text-center">کد فرستاده شده به ایمیل یا تلفن خود را وارد کنید</h5>
                <div class="form-group row justify-content-center">
                  <input type="text" class="form-control login-input rounded_2 col-10 col-md-5 mx-1 shadow" placeholder="کد شش رقمی" wire:model="verifycode">
                  @error('verifycode')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group row justify-content-center">
                  <input type="checkbox" class="form-control outline_0 box_shadow_0 border-0 h-auto" wire:model="">
                  <a href="#" class="text-info mx-2">قوانین</a> را مطالعه کرده ام
                </div>
                <div class="form-group row justify-content-center">
                  <button type="button" class="btn btn-success rounded_5 px-5 shadow-sm" wire:click="registerVerify({{$user->id}})" >تایید</button>
                </div>
              </form>
          @endif

      </div>
  </div>

</main>
  {{-- <div class="row justify-content-center align-items-center">
    <form action="" class="bg_blur_light p-4 col-12 col-md-8 my-3 shadow ">
      <i class="fas fa-user-lock fa-3x d-block text-center my-3"></i>
      <h5 class="text-center">فرم ثبت نام</h5>
      <div class="form-group row justify-content-center">
        <input type="text" class="form-control rounded_5 col-10 col-md-5 mx-10 shadow" placeholder="ایمیل">
        <input type="text" class="form-control rounded_5 col-10 col-md-5 mx-10">
      </div>
      <div class="form-group row justify-content-center">
        <input type="text" class="form-control rounded_5 col-10 col-md-8  shadow" placeholder="کلمه عبور">
      </div>
      <div class="form-group row justify-content-center">
        <input type="text" class="form-control rounded_5 col-10 col-md-8  shadow" placeholder="تکرار کلمه عبور">
      </div>
      <div class="form-group row justify-content-center">
        <input type="checkbox" class="form-control outline_0 box_shadow_0 border-0 h-auto" >
        <a href="#" class="text-info mx-2">قوانین</a> را مطالعه کرده ام
      </div>
      <div class="form-group row justify-content-center">
        <button class="btn btn-success rounded_5 px-5 shadow-sm">ثبت نام</button>
      </div>
      {{ csrf_field() }}
                        <h3 class="text-center text-info">Register</h3>
                        <div class="form-group rounded_5 col-10 col-md-8">
                            <label for="name" class="text-info">Name:</label><br>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="text-info">Confirm Password:</label><br>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-info">Phone Number:</label><br>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
    </form>


  </div>

  <div id="login">
    <h3 class="text-center text-white pt-5">Register form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="/" method="post">
                        {{ csrf_field() }}
                        <h3 class="text-center text-info">Register</h3>
                        <div class="form-group">
                            <label for="name" class="text-info">Name:</label><br>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="text-info">Confirm Password:</label><br>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-info">Phone Number:</label><br>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div> --}}
