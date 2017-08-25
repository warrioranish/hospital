<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\ServiceRepositories;
use App\Service;
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'icon' => 'required',
            'caption' => 'required',
            'image' => 'required',
            'service_description' => 'required'
        ]);


        $service = new Service;
        $service->title = $request->title;

        if($request->hasFile('icon')) {
            if($request->file('icon')->isValid()){
                $file = $request->file('icon');
                $filename = str_random(25).'_'.$file->getClientOriginalName();
                $icon = Image::make($file);
                $icon->resize(72, null, function ($constraints) {
                    $constraints->aspectRatio();
                    $constraints->upsize();
                })->save(public_path().'/uploads/images/services/icon/'.$filename);

            }
        }

        $service->icons = $filename;
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

                $thumbnail_name = str_random(25).'_thumb_'.$file->getClientOriginalName();
                $thumb = Image::make($file);
                $thumb->resize(250, null, function ($constraints){
                    $constraints->aspectRatio();
                    $constraints->upsize();
                })->save(public_path().'/uploads/images/services/image/thumbnail/'.$thumbnail_name, 100);

            }
         }
        $service->thumbnail = $thumbnail_name;
        $service->image = $filename;
        $service->description = $request->service_description;
        $service->status = $request->status;
        $service->save();

        return redirect()->route('services')->with('status', 'Service added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
