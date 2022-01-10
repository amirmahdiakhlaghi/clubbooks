<div class="category-page">
    <div class="container">
        <header class="category-head">
            <h2>{{$category->title}}</h2>
        </header>
        <div class="category-main">
            <ul>
                @foreach ($category->books()->get() as $book)
                <li class="col-4 col-md-2 book-li">
                    <livewire:category.book-card :book="$book" />
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
