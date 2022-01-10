<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\book;
use App\Models\Category;
use App\Models\Writer;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class Create extends Component
{
    use WithFileUploads;

    public $categories;

    public $selectedCategories = [];

    public $region;

    public $size;

    public $message = "";

    public $writers;

    public $selectedWriters;

    public $selectedWriter;

    public $writerSearch;

    public $data = [
        "h_title" => "",
        "top_title" => "",
        "content" => "",
        "price" => "",
        "entesharat" => "",
        "translator" => "",
        "surname" => "",
        "slug" => "",
        "size" => "",
        "categories" => "",
        "alt_image" => "",
        "criticism" => "",
        "region" => "",
        "banner" => "",
    ];

    public $image;

    public $setedImageName = null;

    public function updatedWriterSearch($name){

        $this->selectedWriters = Writer::search($name);
        // dd($this->selectedWriters[0]->name);
    }

    // public function selectCategory($categoryId){
    //     $category = Category::find($categoryId);
    //     $categoryTitle = $category->title;
    //     // dd(array_search($categoryTitle, $this->selectedCategories) , empty(array_search($categoryTitle, $this->selectedCategories)));
    //     if(array_search($categoryTitle, $this->selectedCategories) === false){
    //         array_push($this->selectedCategories,$categoryTitle);
    //     }
    // }

    public function unselectCategory($category){
        // dd($category);
        // $category = Category::find($categoryId);
        // $categoryTitle = $category->title;
        // dd(array_search($category, $this->selectedCategories) , empty(array_search($category, $this->selectedCategories)));
        if(array_search($category, $this->selectedCategories) !== false){
            // dd($category);
            $key = array_search($category, $this->selectedCategories);
            unset($this->selectedCategories[$key]);
        }
    }

    protected $rules = [
        'data.h_title' => ['required'],
        'data.top_title' => ['required'],
        'data.content' => ['required'],
        'data.price' => ['required'],
        'data.entesharat' => ['required'],
        // 'data.translator' => ['required'],
        'data.surname' => ['required'],
        'data.slug' => ['required'],
        'image' => ['required'],
        'selectedCategories' => ['required'],
        /*'data.size' => ['required'],
        'data.alt_image' => ['string'],
        'data.criticism' => ['string'],
        'data.categories' => ['string'],
        'data.region' => ['required'],
        'data.banner' => ['required'],
        */
    ];


    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function updatedImage(){
        if($this->image != null){
            $photo = $this->image->store('public/images/books');
            $imageFileName = explode('/', $photo)['3'];
            $this->setedImageName = '/storage/images/books/' . $imageFileName;
        }

    }

    public function updatedSelectedCategory(){
        if($this->image != null){
            $photo = $this->image->store('public/images/books');
            $imageFileName = explode('/', $photo)['3'];
            $this->setedImageName = '/storage/images/books/' . $imageFileName;
        }

    }

    public function create()
    {
        // dd(request()->all());
        // dd($this->data['content']);
        $writer = Writer::where('name', $this->selectedWriter)->get()->first();
        $writer_id = $writer->id;

        $this->validate();


        if($this->size == 'کوتاه'){
            $size = 'short';
        }
        else{
            $size = 'long';
        }

        // if($this->region == ''){
        //     $size = 'short';
        // }
        // else{
        //     $size = 'long';
        // }

        $book = Book::create([
            'h_title' => $this->data['h_title'],
            'top_title' => $this->data['top_title'],
            'content' => $this->data['content'],
            'writer_id' => $writer_id,
            'price' => $this->data['price'],
            'entesharat' => $this->data['entesharat'],
            'surname' => $this->data['surname'],
            'slug' => $this->data['slug'],
            'image' => $this->setedImageName,
            'region' => $this->region,
            'size' => $size,
        ]);

        foreach ($this->selectedCategories as $value) {
            $categoryId = Category::where('title',$value)->get()->first->id;
            $book->categories()->attach($categoryId);
        }

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Book') ])]);

        $this->reset("data","selectedCategories","region","selectedWriters","writerSearch");
    }

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.admin.book.create')->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Book') ])]);
    }
}