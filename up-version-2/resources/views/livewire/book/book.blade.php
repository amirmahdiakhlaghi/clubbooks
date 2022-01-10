<div class="book-page">
    <div class="container">
        <header class="book-page-header row">
            <div class="rightside col-12 col-md-5">
                <h2>
                   <a href="#">{{$book->h_title}}</a>
                </h2>
                <div class="breadcrumb">
                    <ul itemtype="http://schema.org/BreadcrumbList">
                        <li itemtype="http://schema.org/ListItem" itemscope itemprop="itemListElement"><a href="#">باشگاه کتاب</a></li>
                        <li itemtype="http://schema.org/ListItem" itemscope itemprop="itemListElement"><a href="#">{{$book->categories()->first()->title}}</a></li>
                        <li itemtype="http://schema.org/ListItem" itemscope itemprop="itemListElement"><a href="#">{{$book->categories()->first()->region}}</a></li>
                        <li itemtype="http://schema.org/ListItem" itemscope itemprop="itemListElement"><a href="#">{{$book->categories()->first()->size}}</a></li>
                        <li itemtype="http://schema.org/ListItem" itemscope itemprop="itemListElement"><a href="#">{{$book->h_title}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="leftside col-12 col-sm-12 col-md-4">
                <div class="book-shortlink">
                    <span class="title-a">لینک کوتاه</span>
                    <span class="link-a">
                        <?php
                        $shortUrl = '';
                        foreach (explode('/',url()->current()) as $key => $value){
                            if( $key == array_key_last(explode('/',url()->current()))){
                                $shortUrl .= 'test';
                                continue;
                            }

                            $shortUrl .= $value . '/';
                        }
                        echo $shortUrl;
                        ?>
                    </span>
                    <a></a>
                </div>
            </div>
        </header>
        <div class="short-description">
            <div class="rightside col-12 col-sm-12 col-md-8">
                <div class="title-a">
                    <h1>کتاب {{$book->h_title}}</h1>
                </div>
            </div>
            <div class="leftside col-12 col-sm-12 col-md-4">
                <p class="surname"><span></span></p>
                <p class="writer"><span><a href="#">نویسنده : <span>{{$book->writer()->first()->name}}</span></a></span></p>
            </div>
        </div>
        <section class="main-content">
            <div class="main col-12 col-sm-12 col-md-8">
                <div class="main-text">
                    <div class="img-layer">
                        <img src="{{$book->image}}" alt="کتاب {{$book->alt_image}}">
                    </div>
                    <h2>
                        کتاب {{$book->h_title}}
                    </h2>
                    <p class="surname">جزو محبوب ترین کتاب ها</p>
                    <p class="content">{{$book->content}}</p>
                </div>
                <div class="comments-layer">
                    <h2>نظرات کاربران در رابطه با این کتاب</h2>
                    <div class="alert alert-success">
                        <span> لطفا سوالات و نظرات خود را راجع به این کتاب در این بخش مطرح کنید</span>
                    </div>
                    @if(!auth()->check())
                    <div class="alert alert-info">
                        <span> جهت ثبت نظر باید شما در سایت ورود کنید، برای ورود روی این <a href="/login">لینک</a> کلیک کنید !</span>
                    </div>
                    @endif
                    <div class="comments-list-layer">
                        <div class="items">
                            @if(auth()->check())
                            <div class="comment-top">
                                <div class="rightside col-3">
                                    <button type="button" class="btn {{$switchedToEditComment ? 'btn-primary' : 'btn-success'}} replay-comment" @if($switchedToEditComment) wire:click="editComment({{$commentReadyToEdit}})" @else @if($commentReplyedId) wire:click="addReplyComment({{$commentReplyedId}})" @else wire:click="addComment" @endif @endif>{{$switchedToEditComment ? 'ویرایش نظر' : 'ثبت نظر'}}</button>
                                </div>
                                <div class="leftside col-9">
                                    <textarea rows="10" cols="10" @isset($switchedToEditComment) wire:model="comment_text" @else placeholder="نظر و پیشنهاد مورد نظر خود را وارد کنید..." wire:model="comment_text" @endisset></textarea>
                                </div>
                            </div>
                            @endif
                            @foreach ($comments as $item)
                            @if($item->parent_id == null)
                            <div class="comment-item">
                                <div class="rightside col-3">
                                    <img src="/assets/images/pubic-profile.png">
                                </div>
                                <div class="leftside col-12 col-md-9">
                                    <div class="heading">
                                        <h4>{{$item->user()->first()->username}}</h4>
                                        <span>ارسال شده در {{$item->created_at}}</span> </span>
                                        @if(auth()->check())
                                        <button type="button" class="btn btn-success replay-comment" wire:click="switchToReplyComment({{$item->id}})" onclick="scrollToTop()"> ثبت پاسخ </button>
                                        @if($item->user_id == auth()->user()->id)
                                        <i class="fas fa-edit" wire:click="switchToEditComment({{$item->id}})" onclick="scrollToTop()"></i>
                                        <i class="fas fa-trash-alt" wire:click="deleteComment({{$item->id}})"></i>
                                        @endif
                                        @endif
                                    </div>
                                    <div class="comment-text">
                                        <p>{{$item->content}}</p>
                                    </div>
                                    @foreach ($comments as $childItem)
                                        @if($childItem->parent_id !=null && $childItem->parent_id == $item->id)
                                        <div class="comment-item">
                                            <div class="rightside col-sm-12 col-12 col-md-3">
                                                <img src="/assets/images/public-profile2.png">
                                            </div>
                                            <div class="leftside col-sm-12 col-12 col-md-9">
                                                <div class="heading">
                                                    <h4>{{$childItem->user->username}}</h4>
                                                    <span>ارسال شده در {{$childItem->created_at}}</span>
                                                    @if(auth()->check())
                                                    @if($childItem->user_id == auth()->user()->id)
                                                    <i class="fas fa-edit" wire:click="switchToEditComment({{$childItem->id}})" onclick="scrollToTop()"></i>
                                                    <i class="fas fa-trash-alt" wire:click="deleteComment({{$childItem->id}})"></i>
                                                    @endif
                                                    @endif
                                                </div>
                                                <div class="comment-text">
                                                    <p>{{$childItem->content}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-12 col-sm-12 col-md-4">
                <aside class="sidebar-aside">
                    <div class="data">
                        <p> مشخصات</p>
                        <ul>
                            <li>
                                <i class="fa fa-user-circle-o" aria-hidden="true">
                                </i>
                                نویسنده کتاب :
                                <span>داستایوفسکی</span>
                            </li>
                            <li>
                                <i class="fa fa-user-circle-o" aria-hidden="true">
                                </i>
                                آخرین قیمت :
                                <span>46 تومن</span>
                            </li>
                            <li>
                                <i class="fa fa-user-circle-o" aria-hidden="true">
                                </i>
                                انتشارات :
                                <span>زمستان</span>
                            </li>
                            <li><i class="fa fa-user-circle-o" aria-hidden="true">
                                </i>
                                مترجم :
                                <span>رضا ناصری</span>
                            </li>
                            <li>
                                <i class="fa fa-user-circle-o" aria-hidden="true">
                                </i>
                                تعداد بازدید :
                                <span>195</span>
                            </li>
                            <li>
                                <i class="fa fa-user-circle-o" aria-hidden="true">
                                </i>
                                تعداد لایک :
                                <span>{{$book->userLikes()->count()}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="share-socials">
                        <div class="rightside col-6">
                            <span> به اشتراک گذاری</span>
                        </div>
                        <div class="leftside col-6">
                            <ul>
                               <li><a target="_blank" onclick="teleShare('<?= urldecode(trim('')) ?>')"><i class="fab fa-telegram"></i></a></li>
                               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tags-layer">
                        <p><span> برچسب ها : </span></p>
                        <div class="tags">
                            <a href="#">داستانی</a>
                            <a href="#">محبوب</a>
                            <a href="#">معروف</a>
                            <a href="#">درام</a>
                        </div>
                    </div>
                    <div class="like-layer">
                        @if(auth()->check())
                            <div class="rightside col-3">
                                <a wire:click="sendLike" title="پسندیدن">
                                    @if($isLiked)
                                    <i class="fas fa-heart"></i>
                                    @else
                                    <i class="far fa-heart"></i>
                                    @endif
                                </a>
                            </div>
                            <div class="leftside col-8">
                                <div class="add-favorite">
                                    <p wire:click="sendAddFavorite" title="افزدون به علاقه مندی ها">
                                        @if($isFavorite)
                                        <i class="fas fa-bookmark"></i>
                                        <span>افزوده شده به علاقه مندی</span>
                                        @else
                                        <i class="far fa-bookmark"></i>
                                        <span>افزودن به علاقه مندی ها</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        @else
                        <div class="auth-alert col-12">
                            <p class="alert alert-info" style="font-size:14px">برای پسندیدن کتاب ابتدا <a href="/login">وارد</a> سایت شوید</p>
                        </div>
                        @endif
                    </div>
                </aside>
            </div>
        </section>
    </div>
</div>
