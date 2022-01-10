<div class="search-page">
    <div class="container">
        <div class="search-header">
            <h2>کتاب ها</h2>
            <div>
                <div class="rightside col-6 col-md-7">
                    <div class="search-box">
                        <input type="text" wire:model.debounce.1300ms="char" class="">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="leftside col-6 col-md-4 d-flex justify-content-end">
                    <div class="select-layer col-11">
                        <select wire:model="orderByTop">
                            <option value="date">--مرتب سازی براساس--</option>
                            {{-- <i class="fas fa-check"></i> --}}
                            <option value="date"> مرتب سازی بر اساس تاریخ انتشار </option>
                            <option value="title" @if($orderByTop == "title") selected @endif> مرتب سازی بر اساس عنوان </option>
                            <option value="like" @if($orderByTop == "likd") selected @endif>مرتب سازی بر اساس محبوبیت </option>
                            <option value="price" @if($orderByTop == "price") selected @endif> مرتب سازی بر اساس قیمت </option>
                        </select>
                    </div>
                    {{-- <div class="col-4">
                        <button type="button" class="btn btn-success" wire:click="setOrderBy">اعمال</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="search-main">
            <div class="rightside col-12 col-md-3">
                <aside>
                    <div class="search-data">
                        <div class="header">
                            <span>فیلتر بر منطقه</span>
                        </div>
                        <div class="data-main">
                            <div class="multiple-choice">
                                <div class="item col-4">
                                    <button class="btn @if($setCatRegion['all'] == true) btn-success @endif" wire:click="setCatRegionAll">همه</button>
                                </div>
                                <div class="item col-4">
                                    <button class="btn @if($setCatRegion['irani'] == true) btn-success @endif" wire:click="setCatRegionIrani">ایرانی</button>
                                </div>
                                <div class="item col-4 @if($setCatRegion['other'] == true) btn-success @endif">
                                    <button class="btn" wire:click="setCatRegionOther">خارجی</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="search-data">
                        <div class="header">
                            <span>فیلتر بر اساس دسته بندی</span>
                        </div>
                        <div class="data-main">
                            <ul>
                                <li>
                                    <p wire:click="setAllCategories">
                                        @if($setCat['any'] == false)
                                        <i class="far fa-check-square"></i>
                                        @else
                                        <i class="fas fa-check-square"></i>
                                        @endif
                                        <span>همه دسته بندی ها</span>
                                    </p>
                                </li>
                                @foreach($categories as $category => $value)
                                    <li>
                                        <p>
                                            @if($value == true)<i class="far fa-check-square"></i> @else <i class="fas fa-check-square"></i>@endif
                                            <a @if($value == true) wire:click="unsetCheckCategory({{ App\Models\Category::where('title',$category)->first()->id}})" @else wire:click="setCheckCategory({{ App\Models\Category::where('title',$category)->first()->id}}) " @endif>{{$category}}</a>
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="leftside col-12 col-md-9">
                <div class="search-books">
                    {{-- {{dd(isset($bookNum))}} --}}
                    {{-- @if(isset($booksNum))
                        {{dd(true)}}
                        @endif --}}
                        {{-- @if($char != null && strlen($char) >= 3) --}}
                        @if(isset($booksNum))
                            @foreach ($booksNum as $item)
                                @if(sizeof($item) >= 1)
                                <ul>
                                    @foreach ($item as $book)
                                        <li class="col-6 col-md-4 book-li">
                                            @livewire('category.book-card', ['book' => $book], key($book->id))
                                        </li>
                                    @endforeach
                                </ul>
                                {{$item->links()}}
                                @endif
                            @endforeach
                        {{-- @elseif($char == null || strlen($char) <= 2) --}}
                        @else
                            <ul>
                                @foreach ($books as $book)
                                    <li class="col-6 col-md-4 book-li">
                                        {{-- <p>{{var_dump($book->id)}}</p> --}}
                                        <livewire:category.book-card :book="$book" :wire:key="$book->id" />
                                    </li>
                                @endforeach
                            </ul>
                            @if($setCat['any'] == false)
                            {{$books->links()}}
                            @endif
                            {{-- <li>متاسفانه کتابی با این مشخصات یافت نشد</li> --}}
                        @endif
                    {{-- {{$books->links()}} --}}

                </div>
            </div>
        </div>
    </div>
</div>
