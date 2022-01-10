<?php

namespace App\Observers;

use App\Models\Book;
use App\Models\Like;

class AddLikesObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\Models\Like  $like
     * @return void
     */
    public function created(Like $like){

    }

}
