<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Category;
use App\Models\Writer;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $char;
    public $booksNum;
    public $writerId;
    public $categories = [];
    public $orderByTop;
    public $ascDesc;
    // public $setCatAll;
    // public $setCatAny;

    public $setCatRegion = [
        'all' => true,
        'irani' => false,
        'other' => false,
    ];

    public $setCat = [
        'all' => true,
        'any' => false
    ];

    public function mount(){
        $this->char = '';
        //orderBySetDefult
        $this->orderByTop = 'created_at';
        $this->ascDesc = 'desc';
        //category Item Selcet Set Defualt All categories or Set Any Categories for searching
        // $this->setCatAll = true;
        // $this->setCatAny = false;

        $categories = Category::all();
        foreach ($categories as $key => $value) {
            $this->categories[$value->title] = false;
        }


    }


    public function updatedOrderByTop(){
        // dd($this->orderByTop);
        if($this->orderByTop == 'date' || $this->orderByTop == 'created_at'){
            $this->orderByTop = 'created_at';
            $this->ascDesc = 'desc';
        }
        elseif($this->orderByTop == 'title'){
            $this->orderByTop = 'h_title';
            $this->ascDesc = 'asc';
        }
        elseif($this->orderByTop == 'like'){
            $this->orderByTop = 'likes';
            $this->ascDesc = 'desc';
        }
        elseif($this->orderByTop == 'price'){
            $this->orderByTop = 'price';
            $this->ascDesc = 'desc';
        }
        // if($this->orderbyTop == 'title'){
        //     $books = Book::where('id' , '!=' , null)->orderBy('h_title' , 'asc')->paginate(8);
        //     return view('livewire.search',['books' => $books]);
        // }
        // else{
        //     dd($this->orderbyTop);
        // }

    }

    public function setCatRegionAll(){
        $this->setCatRegion['all'] = true;
        $this->setCatRegion['irani'] = false;
        $this->setCatRegion['other'] = false;
    }
    public function setCatRegionIrani(){
        $this->setCatRegion['all'] = false;
        $this->setCatRegion['irani'] = true;
        $this->setCatRegion['other'] = false;
    }
    public function setCatRegionOther(){
        $this->setCatRegion['all'] = false;
        $this->setCatRegion['irani'] = false;
        $this->setCatRegion['other'] = true;
    }


    public function setCheckCategory($id){
        $category = Category::find($id)->title;
        $this->categories[$category] = true;
        // dd($this->categories);
    }

    public function setAllCategories(){
        foreach ($this->categories as $category => $value) {
            $this->categories[$category] = false;
        }
        $this->setCat['all'] = true;
        $this->setCat['any'] = false;
    }

    public function unsetCheckCategory($id){
        $category = Category::find($id)->title;
        $this->categories[$category] = false;

    }

    public function render()
    {
        if(strlen($this->char) >= 1){
            // dd(isset($this->char) , strlen($this->char));
            $booksNum = [];
            // dd($this->orderByTop);
            // if($this->orderbyTop == 'date'){

                // dd('aaa');
            $booksNum[0] = Book::where('h_title', 'like', '%' . $this->char . '%')->orderby($this->orderByTop , $this->ascDesc)->paginate(9);
            $booksNum[1] = Book::where('top_title', 'like', '%' . $this->char . '%')->orderby($this->orderByTop , $this->ascDesc)->paginate(9);
            $writer = Writer::where('name' , 'like' , '%' . $this->char . '%')->get()->first();
            if($writer != null){
                $writerId = $writer->id;
                $booksNum[2] = Book::where('writer_id', $writerId)->orderby($this->orderByTop , $this->ascDesc)->paginate(9);
                // dd($booksNum[2][0]->slug , $writerId);
                $booksNum[3] = Book::where('entesharat', 'like', '%' . $this->char . '%')->orderby($this->orderByTop , $this->ascDesc)->paginate(9);
            }
            else{
                $booksNum[2] = Book::where('entesharat', 'like', '%' . $this->char . '%')->orderby($this->orderByTop , $this->ascDesc)->paginate(9);
            }

            $this->booksNum = $booksNum;
            return view('livewire.search',['booksNum' => $booksNum]);
        }
        else{
            // $books = Book::all();
            $selectedCategories = [];
            $querySelectedCategories = new Category;
            $booksFromCategories = [];
            $books = collect([]);
            if(isset($this->booksNum)){
                $this->booksNum = null;
            }
            foreach ($this->categories as $category => $value) {
                if($value == true){
                    $this->setCat['all'] = false;
                    $this->setCat['any'] = true;
                    if($category == 'ادبیات'){
                        $querySelectedCategories = $querySelectedCategories->where('title' , $category);
                        // dd('f');
                    }
                    $querySelectedCategories = $querySelectedCategories->orWhere('title' , $category);
                    // array_push($booksFromCategories,$key);
                }
            }
            if($this->setCat['any'] == true){
                $booksNum = [];
                if($this->setCatRegion['irani'] == true){
                    $books = Book::where('region','irani')->orderBy($this->orderByTop , $this->ascDesc)->paginate(9);
                }
                elseif($this->setCatRegion['other'] == true){
                    $books = Book::where('region','other')->orderBy($this->orderByTop , $this->ascDesc)->paginate(9);
                }
                else{
                    $querySelectedCategories = $querySelectedCategories->get();
                    foreach ($querySelectedCategories as $key => $category) {
                        $booksFromCategories[$key] = $category->books()->get();
                    }
                    // $booksFromCategories = Category::where()
                    foreach($booksFromCategories as $key => $categoryBooks) {
                        foreach ($categoryBooks as $book) {
                            $books = $books->push($book);
                            // array_push($books,$book);
                        }
                    }

                    // $books = Book::where('id' , '!=' , null)->orderBy($this->orderByTop , $this->ascDesc)->paginate(9);
                }
            }
            else{

                $this->setCat['all'] = true;

                if($this->setCatRegion['irani'] == true){
                    $books = Book::where('region','irani')->orderBy($this->orderByTop , $this->ascDesc)->paginate(9);
                }
                elseif($this->setCatRegion['other'] == true){
                    $books = Book::where('region','other')->orderBy($this->orderByTop , $this->ascDesc)->paginate(9);
                }
                else{
                    $books = Book::where('id' , '!=' , null)->orderBy($this->orderByTop , $this->ascDesc)->paginate(9);
                }
            }

            return view('livewire.search',['books' => $books]);
        }
    }

}