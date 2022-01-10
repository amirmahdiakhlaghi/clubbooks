<tr x-data="{ modalIsOpen : false }">
    <td> {{ $book->h_title }} </td>
    <td> {{ $book->top_title }} </td>
    <td> {{ $book->content }} </td>
    <td> {{ $book->price }} </td>
    <td> {{ $book->entesharat }} </td>
    <td> {{ $book->translator }} </td>
    <td> {{ $book->slug }} </td>
    <td><a target="_blank" href="{{ asset($book->image) }}"><img class="rounded-circle img-fluid" width="50" height="50" src="{{ asset($book->image) }}" alt="image"></a></td>
    <td> {{ $book->t_image }} </td>
    <td><a target="_blank" href="{{ asset($book->banner) }}"><img class="rounded-circle img-fluid" width="50" height="50" src="{{ asset($book->banner) }}" alt="banner"></a></td>
    <td> {{ $book->alt_image }} </td>
    <td> {{ $book->criticism }} </td>    
    @if(getCrudConfig('book')->delete or getCrudConfig('book')->update)
        <td>

            @if(getCrudConfig('book')->update)
                <a href="@route(getRouteName().'.book.update', ['book' => $book->id])" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('book')->delete)
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Book') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Book') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
