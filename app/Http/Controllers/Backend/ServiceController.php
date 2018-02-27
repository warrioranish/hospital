<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\serviceRequest;
use App\Repositories\ServiceRepositories;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{

    /**
     * @var ServiceRepositories
     */
    private $serviceRepositories;

    public function __construct(ServiceRepositories $serviceRepositories)
    {

        $this->serviceRepositories = $serviceRepositories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = $this->serviceRepositories->getServices();

        return view('backend.services.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(serviceRequest $request)
    {
//        $this->validate($request, [
//            'title' => 'required',
//            'icon' => 'required',
//            'caption' => 'required',
//            'image' => 'required',
//            'service_description' => 'required'
//        ]);


        $service = new Service;
        $service->title = $request->title;

        if($request->hasFile('icon')) {
            if($request->file('icon')->isValid()){
                $file = $request->file('icon');
                $filename = str_random(25).'_'.$file->getClientOriginalName();
                $icon = Image::make($file);
                $icon->fit(72)->save(public_path().'/uploads/images/services/icon/'.$filename);
                $service->icons = $filename;
            }
        }

        $service->caption = $request->caption;

        if($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $file =$request->file('image');
                $filename = str_random(25).'_'.$file->getClientOriginalName();
                $image = Image::make($file);
                $image->resize(1170, null, function ($constraints){
                   $constraints->aspectRatio();
                    $constraints->upsize();
                })->save(public_path().'/uploads/images/services/image/'.$filename);

                $service->image = $filename;

                $thumbnail_name = str_random(25).'_thumb_'.$file->getClientOriginalName();
                $thumb = Image::make($file);
                $thumb->resize(250, null, function ($constraints){
                    $constraints->aspectRatio();
                    $constraints->upsize();
                })->save(public_path().'/uploads/images/services/image/thumbnail/'.$thumbnail_name, 100);

                $service->thumbnail = $thumbnail_name;
            }
         }

        $service->description = $request->service_description;
        $service->status = $request->status;
        $service->slug = str_slug($request->title, '-');
        $service->save();

        return redirect()->route('services')->with('status', 'Service added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $id)
    {
        return view('backend.services.edit', ['service' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(serviceRequest $request,Service $id)
    {
        $id->title = $request->title;

        if($request->hasFile('icon')) {
            if($request->file('icon')->isValid()){
                $file = $request->file('icon');
                $filename = str_random(25).'_'.$file->getClientOriginalName();

                $icon_path = public_path().'/uploads/images/services/icon/';
                $icon = Image::make($file);
                $icon->fit(72)->save($icon_path.$filename);

                if(file_exists($icon_path.$id->icons)){
                    @unlink($icon_path.$id->icons);
                }
                $id->icons = $filename;
            }
        }

        $id->caption = $request->caption;

        if($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $file =$request->file('image');
                $filename = str_random(25).'_'.$file->getClientOriginalName();
                $path = public_path().'/uploads/images/services/image/';
                $image = Image::make($file);
                $image->resize(1170, null, function ($constraints){
                    $constraints->aspectRatio();
                    $constraints->upsize();
                })->save($path.$filename);

                if(file_exists($path.$id->image)){
                    @unlink($path.$id->image);
                }

                $id->image = $filename;

                $thumbnail_name = str_random(25).'_thumb_'.$file->getClientOriginalName();
                $thumb = Image::make($file);
                $thumb->resize(250, null, function ($constraints){
                    $constraints->aspectRatio();
                    $constraints->upsize();
                })->save($path.'thumbnail/'.$thumbnail_name, 100);

                if(file_exists($path.'thumbnail/'.$id->thumbnail)){
                    @unlink($path.'thumbnail/'.$id->thumbnail);
                }

                $id->thumbnail = $thumbnail_name;
            }
        }

        $id->description = $request->service_description;
        $id->status = $request->status;
        $id->slug = str_slug($request->title, '-');
        $id->save();

        return redirect()->route('services')->with('status', 'Service edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $id)
    {
        if(file_exists(public_path().'/uploads/images/services/icon/'.$id->icons))
            @unlink(public_path().'/uploads/images/services/icon/'.$id->icons);

        if(file_exists(public_path().'/uploads/images/services/image/'.$id->image))
            @unlink(public_path().'/uploads/images/services/image/'.$id->image);

        if(file_exists(public_path().'/uploads/images/services/image/thumbnail/'.$id->thumbnail))
            @unlink(public_path().'/uploads/images/services/image/thumbnail/'.$id->thumbnail);


        $id->delete();
        $delete = true;

        return redirect()->route('services', ['delete' => $delete])->with('status', 'Service deleted successfully');
    }
}
