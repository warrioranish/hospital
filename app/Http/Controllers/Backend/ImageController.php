<?php

namespace App\Http\Controllers\Backend;

use App\Gallery;
use App\Image;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{

    /**
     * @var ImageRepository
     */
    private $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {

        $this->imageRepository = $imageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Gallery $id)
    {

        $images = $this->imageRepository->get_images(false, $id->id);

        return view('backend.gallery.list', ['gallery' => $id, 'images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Gallery $id)
    {
        return view('backend.gallery.add', ['gallery' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gallery $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $image = new Image;
        $image->gallery_id = $id->id;

        $image->title =  $request->title;
        if($request->hasFile('image')) {
            if($request->file('image')->isValid()){
                $file = $request->file('image');
                $filename = date('ymdHis').'_'. rand(1, 9999999999) . $file->getClientOriginalName();
                $destination_path = public_path() . '/uploads/images/gallery';
                $file->move($destination_path, $filename);
            }
        }
        $image->image = $filename;
        $image->description = $request->description;
        $image->status = $request->status;
        $image->save();

        return redirect()->route('images', ['id' => $id->id])->with('status', 'Image successfully added to '.$id->name);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $id)
    {
        $galleryNameandId = $this->imageRepository->GalleryNameAndId($id->id);
        $galleryName = $galleryNameandId['name'];
        $galleryId = $galleryNameandId['id'];
        return view('backend.gallery.edit', ['image' => $id, 'galleryName' => $galleryName, 'galleryId' => $galleryId]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Image $id)
    {
        $gallery = $this->imageRepository->GalleryNameAndId($id->id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $id->title = $request->title;
        if($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $file = $request->file('image');
                $filename = date('ymdHis').'_'.rand(1, 99999999).$file->getClientOriginalName();
                $destination_path = public_path().'/uploads/images/gallery';
                $file->move($destination_path, $filename);

                if(file_exists($destination_path.'/'.$id->image)) {
                    @unlink($destination_path.'/'.$id->image);
                }
                $id->image = $filename;
            }
        }
        $id->description = $request->description;
        $id->status = $request->status;
        $id->save();

        return redirect()->route('images', ['id' => $gallery['id']])->with('status', 'Images edited successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $id)
    {
        $gallery = $this->imageRepository->GalleryNameAndId($id->id);

        $id->delete();

        if(file_exists(public_path().'/uploads/images/gallery/'.$id->image)){
            @unlink(public_path().'/uploads/images/gallery/'.$id->image);
        }

        $delete = true;

        return redirect()->route('images', ['id'=> $gallery['id'], 'delete' => $delete])->with('status', 'Images Deleted Successfully');

    }
}
