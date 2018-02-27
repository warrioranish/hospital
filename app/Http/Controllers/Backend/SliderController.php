<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\SliderRepository;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{

    /**
     * @var SliderRepository
     */
    private $sliderRepository;

    public function __construct(SliderRepository $sliderRepository)
    {

        $this->sliderRepository = $sliderRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = $this->sliderRepository->getSliders();

        return view('backend.sliders.list', ['sliders' => $sliders]);
    }

    /**
     * Apply changes to multiple items
     */
    public function action(Request $request) {
        $action = $request->action;
        $checked = $request->check;

        switch ($action) {

            case "publish":
                foreach($checked as $k=>$v) {

                    $slider = Slider::find($v);
                    $slider->status = 1;
                    $slider->save();
                }
                return redirect()->route('sliders')->with('status', 'Sliders are successfully set to active');
                break;

            case "unpublish":
                foreach($checked as $k=>$v) {

                    $slider = Slider::find($v);
                    $slider->status = 0;
                    $slider->save();
                }
                return redirect()->route('sliders')->with('status', 'Images are successfully set to inactive');
                break;

            default:
                foreach($checked as $k=>$v) {

                    $slider = Slider::find($v);

                    if(file_exists(public_path().'/uploads/images/sliders/'.$slider->image)){
                        @unlink(public_path().'/uploads/images/sliders/'.$slider->image);
                    }
                    $slider->delete();
                }
                $delete = true;
                return redirect()->route('sliders', ['delete' => $delete])->with('status', 'Images are deleted successfully');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sliders.add');
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
            'caption1' => 'required',
            'caption2' => 'required',
            'image' => 'required',
        ]);

        $sliders = new Slider;
        $sliders->name = $request->name;
        $sliders->caption1 = $request->caption1;
        $sliders->caption2 = $request->caption2;

        if($request->hasFile('image')) {
            if($request->file('image')->isvalid()){
                $file = $request->file('image');
                $filename = str_random(25).'_'.$file->getClientOriginalName();
                $destination_path = public_path(). '/uploads/images/sliders';
                $file->move($destination_path, $filename);
            }
        }

        $sliders->image = $filename;
        $sliders->status = $request->status;
        $sliders->save();

//        return redirect('admin/sliders');

        return redirect()->route('sliders')->with('status', 'Slider added successfully');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $id)
    {

        return view('backend.sliders.edit', ['slider' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slider $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'caption1' => 'required',
            'caption2' => 'required',
        ]);

        $id->name = $request->name;
        $id->caption1 = $request->caption1;
        $id->caption2 = $request->caption2;
        if($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $file = $request->file('image');
                $filename = date('YmdHis').'_'.rand(1,9999999999).$file->getClientOriginalName();
                $destination_path = public_path(). '/uploads/images/sliders';
                $file->move($destination_path, $filename);

                if(file_exists($destination_path.'/'.$id->image)) {
                    @unlink($destination_path.'/'.$id->image);
                }
                $id->image = $filename;
            }
        }
        $id->status = $request->status;
        $id->save();

        return redirect()->route('sliders')->with('status', 'Sliders edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $id)
    {
        $id->delete();

        if(file_exists(public_path().'/uploads/images/sliders/'.$id->image)) {
            @unlink(public_path().'/uploads/images/sliders/'.$id->image);
        }

        $delete = true;
        return redirect()->route('sliders', ['delete' => $delete])->with('status', 'Sliders deleted successfully');
    }
}
