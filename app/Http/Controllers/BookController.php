<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Inertia\Inertia;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::query()->paginate(20);
        return Inertia::render('books',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        Validator::make($request->all(), [
            'title' => 'required',
            'author' => 'required'
        ])->validate();

        Book::create($request->all());
        $this->processImage($request);
        return redirect()->back()
            ->with('message', 'Book created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        Validator::make($request->all(), [
            'title' => 'required',
            'author' => 'required'
        ])->validate();

        $book->update($request->all());
        $this->processImage($request);
        return redirect()->back()
            ->with('message', 'Book updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()
            ->with('message', 'Book deleted');
    }
    public function upload(Request $request){
        if($request->hasFile('imageFilePond')){
            return $request->files('imageFilePond')->store('uploads/books','public');

        }
        return '';
    }
    public function processImage(Request $request){
        if($image = $request->get('image')){
            $path = storage_path('app/public/' . $image);
            if(file_exists($path)){
                unlink($path);
            }
        }
    }
    public function uploadRevert(Request $request){
        if($image = $request->get('image')){
            $path = storage_path('app/public/' . $image);
            if(file_exists($path)){
                copy($path,public_path($image));
                unlink($path);
            }
        }
    }
}
