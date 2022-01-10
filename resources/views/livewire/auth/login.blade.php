<main class="main-register">
  <div class="main container">
      <div class="row justify-content-center align-items-center">
              <form action="" class="bg_blur_light p-4 col-12 col-md-6 my-5 shadow ">
                <i class="fas fa-user-check fa-3x d-block text-center my-3"></i>
                <h5 class="text-center">فرم ورود</h5>
                <div class="form-group row justify-content-center">
                  <input type="text" class="form-control login-input rounded_2 col-10 col-md-5 mx-1 shadow" placeholder="ایمیل یا نام کاربری" wire:model="data.field">
                  @error('data.field')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group row justify-content-center">
                  <input type="password" class="form-control rounded_2 col-10 col-md-5 mx-1 shadow" placeholder="گذرواژه" wire:model="data.password">
                  @error('data.password')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group row justify-content-center">
                    <input type="checkbox" class="form-control outline_0 box_shadow_0 h-auto" wire:model="data.remember">
                    مرا بخاطر بسپار
                </div>

                <div class="form-group row justify-content-center">
                  <button type="button" class="btn btn-success rounded_5 px-5 shadow-sm" wire:click="login" >تایید</button>
                </div>
              </form>
      </div>
  </div>

</main>


{{-- <main class="main-login">
  <div class="container main">
    <div class="row justify-content-center align-items-center">
      <form action="" class="bg_blur_light p-4 col-12 col-md-6 my-5 shadow ">
          <h5 class="text-center">فرم ورود</h5>
          <div class="form-group row justify-content-center">
              <input type="text" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="ایمیل یا نام کاربری">
            </div>
            <div class="form-group row justify-content-center">
                <input type="text" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="کلمه عبور">
            </div>
            <div class="form-group row justify-content-center">
                <button class="btn btn-success rounded_5 px-5 shadow-sm">ورود</button>
            </div>
        </form>

    </div>
</div>

</main> --}}




