<div class="foreign-page">
    <div class="container">
        <header class="foreign-head">
            <h2>خارجی</h2>
        </header>
        <div class="foreign-main">
            <ul>
                @foreach ($categories as $category)
                    @foreach ($category->books()->get() as $book)
                    <li class="col-4 col-md-2 book-li">
                        <livewire:category.book-card :book="$book" />
                    </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>
