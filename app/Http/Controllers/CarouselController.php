<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get carousels
        $carousels = Carousel::latest()->paginate(5);

        //render view with carousels
        return view('back-end.carousel.index', compact('carousels'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('back-end.carousel.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/carousels', $image->hashName());

        //create carousel
        Carousel::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('carousels.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * edit
     *
     * @param  mixed $carousel
     * @return void
     */
    public function edit(Carousel $carousel)
    {
        return view('back-end.carousel.edit', compact('carousel'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $carousel
     * @return void
     */
    public function update(Request $request, Carousel $carousel)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/carousels', $image->hashName());

            //delete old image
            Storage::delete('public/carousels/'.$carousel->image);

            //update carousel with new image
            $carousel->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            //update carousel without image
            $carousel->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('carousels.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    /**
     * destroy
     *
     * @param  mixed $carousel
     * @return void
     */
    public function destroy(Carousel $carousel)
    {
        //delete image
        Storage::delete('public/carousels/'. $carousel->image);

        //delete carousel
        $carousel->delete();

        //redirect to index
        return redirect()->route('carousels.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}