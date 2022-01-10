<main class="main-book">
    <div class="main container">
        <div class="row justify-content-center align-content-center">
          <div id="top-book" class="col-12 col-md-6 col-xl-6">
            <div class="p-2 bg-light rounded">
              <h1 class="text-center font_2 py-2">{{$book->h_title}}</h1>
              <div class="p-2 text_container">
                {!!$book->content!!}
              </div>
            </div>

          </div>

          <div id="amar-book" class="col-12 col-md-4 col-xl-4">
            <div class="image text-center">
              <img src="{{$book->image}}" alt="{{$book->alt_image}}">
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-12 justify-content-center">
                <small class="text-center d-block">نویسنده:</small>
                <h6 class="text-center">{{$book->writer->name}}</h6>

                <small class="text-center d-block">تاریخ:</small>
                <h6 class="text-center">{{$book->created_at->diffForHumans()}}</h6>

                <div class="col-12 justify-content-center text-center">
                  <span class="text-center">بازدید : 45</span>
                </div>

                <div class="col-12 justify-content-center text-center">
                  <a href="#" class="btn rounded_5 btn-outline-dark">دیگر مقالات </a>
                </div>
            </div>

          </div>

          {{-- <div id="book-amar" class="col-12 col-md-5 col-xl-5 d-flex flex-column align-content-center justify-content-center">
            <div class="image text-center">
              <img src="{{$book->image}}" alt="{{$book->alt_image}}">
            </div>
            <div class="row bg-light px1 py-5 text-center justify-content-center d-flex rounded w-100 m-auto">
              <div class="image rounded-circle overflow-hidden h_10 w_10 text-center justify-content-center">
                <img class="max_w_100 m-auto" src="/assets/images/logo.png" alt="توضیح تصویر">
              </div>

                <div class="col-12 mt-3 justify-content-center">
                <small class="text-center d-block">نویسنده:</small>
                <h6 class="text-center">{{$book->writer->name}}</h6>

                <small class="text-center d-block mt-3">تاریخ:</small>
                <h6 class="text-center">{{$book->created_at->diffForHumans()}}</h6>

                <div class="col-12 justify-content-center text-center mt-3">
                  <span class="text-center">بازدید : 45</span>
                </div>

                <div class="col-12 justify-content-center text-center mt-3">
                  <a href="#" class="btn rounded_5 btn-outline-dark">دیگر مقالات </a>
                </div>
              </div>
            </div>

          </div> --}}
        </div>

        <div class="row justify-content-center align-items-center alert-secondary p-3">

          <div class="row p-3 justify-content-center text-right alert-light d-block mb-4 col-12">
            {{-- @foreach (explode('-',$article->keywords) as $key)
               ( <a href="#">{{$key}}</a> )
            @endforeach --}}
          </div>

          <div class="col-12 row justify-content-center form-group">
            <input type="text" class="form-control rounded_5 col-12 col-md-8" placeholder="نام نویسنده نظر">
          </div>
          <div class="col-12 row justify-content-center form-group">
            <h5 class="col-12 text-center">متن نظر:</h5>
            <textarea rows="10" class="form-control rounded shadow col-12 col-md-8 "></textarea>
          </div>

          <div class="col-12 col-md-11 bg-white p-3">
            <div class="row my-2 d-block p-2 rounded shadow-sm border_1 col-11 m-auto shadow">
              <div class="row justify-content-lg-between w-100 m-auto">
                <h6 class="text-right text-success">عباس در تاریخ 99/12/20</h6>
                <span>
                  <i class="fas fa-trash text-danger cursor_pointer_text_shadow mx-2"></i>
                  <i class="fas fa-edit text-success cursor_pointer_text_shadow mx-2"></i>
                </span>
              </div>
              <div class=" w-100 pb-3">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum expedita, exercitationem officia ducimus illo voluptates quasi alias eum minus ut? Ipsam amet similique consectetur obcaecati mollitia earum nihil recusandae cupiditate?</p>
                <button class="btn btn-primary rounded_5 px-3 ">پاسخ</button>
              </div>
              <div class="answer shadow-sm alert-success p-2">
                <h6 class="text-right text-primary">پاسخ</h6>
                <div class="row justify-content-lg-between w-100 m-auto">
                  <h6 class="text-right text-info">عباس در تاریخ 99/12/20</h6>
                  <span>
                    <i class="fas fa-trash text-danger cursor_pointer_text_shadow mx-2"></i>
                    <i class="fas fa-edit text-success cursor_pointer_text_shadow mx-2"></i>
                  </span>
                </div>
                <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi eveniet maiores distinctio ex maxime minus, deleniti nam in. Voluptas nulla neque mollitia harum. Similique, corporis? Quae temporibus cupiditate quo quis!</p>
              </div>
            </div>
          </div>
        </div>
    </div>

</main>
