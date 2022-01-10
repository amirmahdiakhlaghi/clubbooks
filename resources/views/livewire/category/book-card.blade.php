<div class="main-book-card">
    <a href="/book/{{$book->slug}}">
      <div class="p-0 over_hidden card-header h_15 d-flex align-items-center justify-content-center">
        <img src="{{$book->image}}" alt="{{$book->alt_image}}" class="h-100" width="90%">
      </div>
      <div class="card-body px-1 py-2">
        <h5 class="text-center text-primary">{{$book->h_title}}</h5>
        <p class="text-justify text-right font_0_9 text-secondary h_50px">
          {{$book->top_title}}
        </p>
      </div>
    </a>
</div>
