<?php

namespace App\Http\Controllers\Backend;

use App\Gallery;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{

    /**
     * @var GalleryRepository
     */
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepository)
    {

        $this->galleryRepository = $galleryRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = $this->galleryRepository->get_gallery();
        return view('backend.gallery.gallery_list', compact('gallery'));
    }

    /**
     * Apply changes to multiple items
     */
    public function action(Request $request)
    {

        $action = $request->action;
        $checked = $request->check;

        switch ($action) {

            case "publish":
                foreach($checked as $k=>$v) {

                    $gallery = Gallery::find($v);
                    $gallery->status = 1;
                    $gallery->save();
                }
                return redirect()->route('gallery')->with('status', 'Gallery are successfully set to active');
                break;

            case "unpublish":
                foreach($checked as $k=>$v) {

                    $gallery = Gallery::find($v);
                    $gallery->status = 0;
                    $gallery->save();
                }
                return redirect()->route('gallery')->with('status', 'Gallery are successfully set to inactive');
                break;

            default:
                foreach($checked as $k=>$v) {

                    $gallery = Gallery::find($v);

                    $images = $gallery->images;

                    if($images) {
                        foreach($images as $i) {

                            if(file_exists(public_path().'/uploads/images/gallery/'.$i->image)){
                                @unlink(public_path().'/uploads/images/gallery/'.$i->image);
                            }
                            $i->delete();
                        }
                    }

                    $gallery->delete();
                }
                $delete = true;
                return redirect()->route('gallery', ['delete' => $delete])->with('status', 'Gallery are deleted successfully');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.add_gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        Gallery::create($request->all());

        return redirect()->route('gallery')->with('status', 'Gallery added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $id)
    {
        return view('backend.gallery.edit_gallery', ['gallery' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Gallery $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $input = $request->all();
        $id->slug=null;
        $id->update($input);

        return redirect()->route('gallery')->with('status', 'Gallery edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $id)
    {
        $gallery_images = Gallery::find($id->id)->images;

        if($gallery_images) {
            foreach($gallery_images as $img) {

                if(file_exists(public_path().'/uploads/images/gallery/'.$img->image)){
                    @unlink(public_path().'/uploads/images/gallery/'.$img->image);
                }
                $img->delete();
            }
        }

        $id->delete();

        $delete = true;

        return redirect()->route('gallery', ['delete' => $delete])->with('status', 'Gallery deleted successfully');
    }
}
