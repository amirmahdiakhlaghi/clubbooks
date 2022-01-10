<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Book')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded" style="background-color: #e9ecef!important;">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Book')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('book')->create)
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.book.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Book') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('book')->searchable())
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" @if(config('easy_panel.lazy_mode')) wire:model.lazy="search" @else wire:model="search" @endif placeholder="{{ __('Search') }}" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-default">
                                        <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                        <a wire:loading wire:target="search"><i class="fas fa-spinner fa-spin" ></i></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td style='cursor: pointer' wire:click="sort('h_title')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'h_title') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'h_title') fa-sort-amount-up ml-2 @endif'></i> {{ __('H_title') }} </td>
                        <td style='cursor: pointer' wire:click="sort('top_title')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'top_title') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'top_title') fa-sort-amount-up ml-2 @endif'></i> {{ __('Top_title') }} </td>
                        <td style='cursor: pointer' wire:click="sort('content')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'content') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'content') fa-sort-amount-up ml-2 @endif'></i> {{ __('Content') }} </td>
                        <td style='cursor: pointer' wire:click="sort('price')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'price') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'price') fa-sort-amount-up ml-2 @endif'></i> {{ __('Price') }} </td>
                        <td style='cursor: pointer' wire:click="sort('entesharat')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'entesharat') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'entesharat') fa-sort-amount-up ml-2 @endif'></i> {{ __('Entesharat') }} </td>
                        <td style='cursor: pointer' wire:click="sort('translator')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'translator') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'translator') fa-sort-amount-up ml-2 @endif'></i> {{ __('Translator') }} </td>
                        <td style='cursor: pointer' wire:click="sort('slug')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'slug') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'slug') fa-sort-amount-up ml-2 @endif'></i> {{ __('Slug') }} </td>
                        <td style='cursor: pointer' wire:click="sort('image')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'image') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'image') fa-sort-amount-up ml-2 @endif'></i> {{ __('Image') }} </td>
                        <td style='cursor: pointer' wire:click="sort('t_image')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 't_image') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 't_image') fa-sort-amount-up ml-2 @endif'></i> {{ __('T_image') }} </td>
                        <td style='cursor: pointer' wire:click="sort('banner')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'banner') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'banner') fa-sort-amount-up ml-2 @endif'></i> {{ __('Banner') }} </td>
                        <td style='cursor: pointer' wire:click="sort('alt_image')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'alt_image') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'alt_image') fa-sort-amount-up ml-2 @endif'></i> {{ __('Alt_image') }} </td>
                        <td style='cursor: pointer' wire:click="sort('criticism')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'criticism') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'criticism') fa-sort-amount-up ml-2 @endif'></i> {{ __('Criticism') }} </td>
                        
                        @if(getCrudConfig('book')->delete or getCrudConfig('book')->update)
                            <td>{{ __('Action') }}</td>
                        @endif
                    </tr>

                    @foreach($books as $book)
                        @livewire('admin.book.single', ['book' => $book], key($book->id))
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $books->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>
