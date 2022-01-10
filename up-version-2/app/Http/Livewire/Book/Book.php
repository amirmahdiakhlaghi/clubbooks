<?php

namespace App\Http\Livewire\Book;

use App\Models\Book as ModelsBook;
use App\Models\Comment;
use Livewire\Component;

class Book extends Component
{
    public $book;
    public $user;
    public $isLiked;
    public $isFavorite;
    public $comment_text = "";
    public $switchedToEditComment = false;
    public $commentReadyToEdit = null;
    public $commentReplyedId = null;

    public function getIp(){
        $this->emit('getIpJs');
    }

    public function sendLike() {
        if($this->isLiked == true){
            $this->book->userLikes()->detach($this->user->id);
            $this->isLiked = false;
        }
        elseif ($this->isLiked == false) {
            $this->book->userLikes()->attach($this->user->id);
            $this->isLiked = true;
        }

    }

    public function sendAddFavorite() {
        if($this->isFavorite == false){
            $this->book->userFavorites()->attach($this->user->id);
            $this->isFavorite = true;
        }
        elseif($this->isFavorite ==true){
            $this->book->userFavorites()->detach($this->user->id);
            $this->isFavorite = false;
        }
    }

    public function addComment(){

        // $this->validate(['comment_text' => 'required|string|regex:/^[ا-یa-zA-Z0-9@$#^%*!]+$/u']);
        $comment = new Comment;
        $comment->user_id = $this->user->id;
        $comment->book_id = $this->book->id;
        $comment->content = $this->comment_text;
        $comment->parent_id = null;
        $comment->save();

        $this->comment_text = "";
        $this->emit('showAlertAddComment' , "نظر شما با موفقیت ثبت شد");
    }

    public function switchToEditComment($commentId){
        $this->switchedToEditComment = true;
        $this->comment_text = Comment::find($commentId)->content;
        $this->commentReadyToEdit = $commentId;
    }

    public function editComment($commentId){
        // $this->validate(['comment_text' => 'required|string|regex:/^[ا-یa-zA-Z0-9@$#^%*!]+$/u']);
        $comment = Comment::find($commentId);
        $comment->user_id = $this->user->id;
        $comment->book_id = $this->book->id;
        $comment->content = $this->comment_text;
        $comment->save();

        $this->comment_text = "";
        $this->commentReadyToEdit = null;
        $this->switchedToEditComment = false;
        $this->emit('showAlertAddComment' , "نظر شما با موفقیت ویرایش شد");

    }

    public function deleteComment($commentId){
        $comment = Comment::find($commentId)->delete();
        $this->emit('showAlertAddComment' , "نظر شما با موفقیت پاک شد");
    }

    public function switchToReplyComment($commentId){
        $this->commentReplyedId = $commentId;
        $this->comment_text= "";
    }

    public function addReplyComment($commentReplyedId){
        $comment = new Comment;
        $comment->user_id = $this->user->id;
        $comment->book_id = $this->book->id;
        $comment->content = $this->comment_text;
        $comment->parent_id = $commentReplyedId;
        $comment->save();

        $this->comment_text = "";
        $this->commentReplyedId = "";
        $this->emit('showAlertAddComment' , "نظر شما با موفقیت  ثبت شد");
    }

    public function mount($slug){
        $book = ModelsBook::where('slug', $slug)->get()->first();
        $this->book = $book;
        if(auth()->check()){
            $user=auth()->user();
            $this->user = $user;

            if($book->userLikes()->where('user_id', $user->id)->first()){
                $this->isLiked = true;
            }
            else{
                $this->isLiked = false;
            }

            if($book->userFavorites()->where('user_id', $user->id)->first()){
                $this->isFavorite = true;
            }
            else{
                $this->isFavorite = false;
            }
        }
    }

    public function render()
    {
        $comments = Comment::where('book_id' , $this->book->id)->get();
        // $parentComments = Comment::where(['book_id' => $this->book->id , 'parent_id' => 0])->get();
        // $childComments = Comment::where(['book_id' => $this->book->id , 'parent_id' => !0])->get();
        $switchedToEditComment = $this->switchedToEditComment;
        $commentReadyToEdit = $this->commentReadyToEdit;
        $commentReplyedId = $this->commentReplyedId;
        $isLiked = $this->isLiked;
        $isFavorite = $this->isFavorite;
        $book = $this->book;
        return view('livewire.book.book', ['book' => $book ,'isliked' => $isLiked , 'isFavorite' => $isFavorite , 'comments' => $comments , 'switchedToEdit' => $switchedToEditComment , 'commentReadyToEdit' => $commentReadyToEdit , 'commentReplyedId' => $commentReplyedId]);
    }
}
