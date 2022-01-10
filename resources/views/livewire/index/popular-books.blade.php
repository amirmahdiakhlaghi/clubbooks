<div class="new-books-page">
    <div class="container">
        <header class="new-books-head">
            <h2>محبوب ترین ها</h2>
        </header>
        <div class="new-books-main">
            <ul>
                @foreach ($books as $book)
                <li class="col-4 col-md-2 book-li">
                    <livewire:category.book-card :book="$book" />
                </li>
                @endforeach
            </ul>
            {{-- {{$books->links()}} --}}
        </div>
    </div>
</div>
