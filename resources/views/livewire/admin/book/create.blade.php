<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Book') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded" style="background-color: #e9ecef!important;">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.book.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Book')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="create">
        <div class="card-body create-panel-form">
            <div class="form-client">
                <div class="col-12 col-md-6">
                    <label>
                        <i class="fas fa-comment-alt"></i>
                        عنوان کتاب
                    </label>
                    <input type="text" wire:model="data.h_title" name="h_title">
                    @error('data.h_title')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label>
                        <i class="fas fa-comment-alt"></i>
                        معرفی کوتاه کتاب
                    </label>
                    <input type="text" wire:model="data.top_title">
                    @error('data.top_title')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 col-md-2">
                    <label>
                        <i class="fas fa-comment-alt"></i>
                        قیمت کتاب
                    </label>
                    <input type="number" wire:model="data.price">
                    @error('data.price')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 col-md-3">
                    <label>
                        <i class="fas fa-comment-alt"></i>
                        لینک کوتاه
                    </label>
                    <input type="text" wire:model="data.slug">
                    @error('data.slug')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 col-md-3">
                    <label>
                        <i class="fas fa-comment-alt"></i>
                        نام انتشارات
                    </label>
                    <input type="text" wire:model="data.entesharat">
                    @error('data.entesharat')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 col-md-4">
                    <label>
                        <i class="fas fa-comment-alt"></i>
                        لقب اختصار
                    </label>
                    <input type="text" wire:model="data.surname">
                    @error('data.surname')
                    <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-12 col-md-6 insert-img">
                    <div class="col-12 col-md-3">
                        <label>
                            <i class="fas fa-edit"></i>
                            انتخاب عکس
                        </label>
                        <input type="file" wire:model="image">
                        @error('image')
                        <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-9">
                        @if($setedImageName != null)
                        <img src="{{$setedImageName}}">
                        @else
                        <img src="/assets/images/public-profile2.png">
                        @endif
                    </div>
                </div>
                <div class="col-12 col-md-6 select-box">
                    <div class="col-12 col-md-7">
                        <label>
                            <i class="fas fa-comment-alt"></i>
                            دسته بندی
                        </label>
                        @if(!empty($selectedCategories))
                        <p><span style="display: block;text-align: center;">انتخاب دسته بندی</span><small style="display: block;text-align: left;">انتخاب شده</small></p>
                        @else
                        <p>انتخاب دسته بندی</p>
                        @endif
                        <ul id="category" wire:ignore.self>

                            <small>انتخاب شده</small>
                            @if(empty($selectedCategories))
                            <li>خالی است</li>
                            @else
                            @foreach ($selectedCategories as $category)
                            <li><span>{{$category}}</span><i class="fas fa-trash-alt" wire:click="unselectCategory({{ "'" . $category . "'"}})"></i></li>
                            @endforeach
                            @endif
                            <hr>
                            {{-- {{ dd($categories->diff(['ادبیات']))}} --}}
                            @foreach ($categories as $category)
                            @if(array_search($category->title, $selectedCategories) === false)
                            <li>
                                <label for="{{$category->title}}">{{$category->title}}</label>
                                <input type="checkbox" value="{{$category->title}}" id="{{$category->title}}" wire:model="selectedCategories">
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        @error('selectedCategories')
                        <small class="d-block text-danger w-100 text-center">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-md-7">
                        <label>
                            <i class="fas fa-comment-alt"></i>
                            منطقه
                        </label>
                        @if(!empty($region))
                        <p><span style="display: block;text-align: center;">انتخاب منطقه</span><small style="display: block;text-align: left;">انتخاب شده</small></p>
                        @else
                        <p>انتخاب منطقه</p>
                        @endif
                        <ul id="region">
                            <small>انتخاب شده</small>
                            @if(empty($region))
                            <li>خالی است</li>
                            @else
                                @if($region == 'irani')
                                <li>ایرانی</li>
                                @else
                                <li>خارجی</li>
                                @endif
                            @endif
                            <hr>
                            <li>
                                <label for="irani">ایرانی</label>
                                <input type="radio" value="irani" id="irani" wire:model="region">
                            </li>
                            <li>
                                <label for="other">خارجی</label>
                                <input type="radio" value="other" id="other" wire:model="region">
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-7">
                        <label>
                            <i class="fas fa-comment-alt"></i>
                            نویسنده
                        </label>
                        @if(!empty($selectedWriters))
                        <p><span style="display: block;text-align: center;"></span>انتخاب نویسنده</span><small style="display: block;text-align: left;">انتخاب شده</small></p>
                        @else
                        <p>انتخاب نویسنده</p>
                        @endif
                        <ul id="region" wire:ignore.self>
                            <small>انتخاب شده</small>
                            <input type="text" wire:model.debounce.1300ms="writerSearch">
                            @if(empty($selectedWriter))
                            <li>خالی است</li>
                            @else
                            <li>{{ $selectedWriter }}</li>
                            @endif
                            <hr>
                            @if(!empty($writerSearch))
                            @foreach ($selectedWriters as $writer)
                            <li>
                                <label for="selectedWriter">{{$writer->name}}</label>
                                <input type="radio" value="{{$writer->name}}" id="selectedWriter" wire:model="selectedWriter">
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="col-12 col-md-7">
                        <label>
                            <i class="fas fa-comment-alt"></i>
                            اندازه کتاب
                        </label>
                        <p>انتخاب دسته بندی</p>
                        <ul id="size">
                            <small>انتخاب شده</small>
                            @if(empty($size))
                            <li>خالی است</li>
                            @else
                                @if($size == 'کوتاه')
                                <li>کوتاه</li>
                                @else
                                <li>طولانی</li>
                                @endif
                            @endif
                            <hr>
                            <li>
                                <label for="tiny">کوتاه</label>
                                <input type="radio" value=tiny" id="tiny" wire:model="size">
                            </li>
                            <li>
                                <label for="long">طولانی</label>
                                <input type="radio" value="long" id="long" wire:model="size">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <label>
                        <i class="fas fa-comment-alt"></i>
                        متن معرفی کتاب
                    </label>
                    {{-- <div wire:ignore class="form-group row">
                        <x-label class="col-md-3 col-form-label" for="message" :value="__('Compose message')" />
                        <div class="col-md-9">
                            <textarea wire:model="message" class="form-control required" name="message" id="message"></textarea>
                            <x-error-message :value="__('message')" />
                        </div>
                    </div> --}}
                    {{-- <div wire:ignore class="form-group row">
                        <x-label class="col-md-3 col-form-label" for="message" :value="__('Compose message')" />
                        <div class="col-md-9">
                            <textarea wire:model="data.content" class="form-control required" name="message" id="message"></textarea>
                            <x-error-message :value="__('message')" />
                        </div>
                    </div> --}}
                    <textarea wire:model="data.content" class="form-control required" rows="10" cols="5"></textarea>
        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.book.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>

