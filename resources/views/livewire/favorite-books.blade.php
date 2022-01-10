<div class="favorite-books-page">
    <div class="container">
        <header class="favorite-books-head">
            <h2>کتاب های مورد علاقه شما</h2>
        </header>
        <div class="favorite-books-main">
            {{-- {{dd(sizeof($books))}} --}}
            @if(sizeof($books) >= 1)
            <ul>
                @foreach ($books as $book)
                {{-- @if($book != null) --}}
                <li class="col-4 col-md-3 book-li">
                    <livewire:category.book-card :book="$book" />
                </li>
                {{-- @else --}}
                {{-- <li class="text-center">شما هنوز کتابی را به علاقه مندی ها وارد نکرده اید </li> --}}
                {{-- @endif --}}
                @endforeach
            </ul>
            @else
                <h4 class="text-center">شما هنوز کتابی را به علاقه مندی ها وارد نکرده اید </h4>
            @endif
        </div>
    </div>
</div>
