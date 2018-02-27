<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\TestimonialsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class TestimonialController extends Controller
{

    /**
     * @var TestimonialsRepository
     */
    private $testimonialsRepository;

    public function __construct(TestimonialsRepository $testimonialsRepository)
    {
        $this->testimonialsRepository = $testimonialsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = $this->testimonialsRepository->getTestimonial();

//        $testimonials = DB::table('testimonials')->orderBy('created_at', 'DESC')->paginate(5);

        return view('backend.testimonials.list', compact('testimonials'));
    }

    /**
     * Apply changes to multiple items
     */
    public function action(Request $request){
        $action = $request->action;
        $checked = $request->check;

        switch($action) {
            case "publish":
                foreach($checked as $k=>$v){
                    $testimonial = Testimonial::find($v);
                    $testimonial->status = 1;
                    $testimonial->save();
                }
                return redirect()->route('testimonials')->with('status', 'Testimonials are successfully set to active');
                break;

            case "unpublish":
                foreach($checked as $k=>$v) {
                    $testimonial = Testimonial::find($v);
                    $testimonial->status = 0;
                    $testimonial->save();
                }
                return redirect()->route('testimonials')->with('status', 'Testimonials are successfully set to inactive');
                break;

            default:
                foreach($checked as $k=>$v) {
                    $testimonial = Testimonial::find($v);
                    $testimonial->delete();
                }
                $delete = true;
                return redirect()->route('testimonials', ['delete' => $delete])->with('status', 'Testimonials are deleted successfully');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('backend.testimonials.add');
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
            'position' => 'required',
            'testimonial' => 'required',
        ]);

        Testimonial::create($request->all());

        return redirect()->route('testimonials')->with('status', 'Testimonial added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $id)
    {
        return view('backend.testimonials.edit', ['testimonial' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Testimonial $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'testimonial' => 'required',
        ]);

        $input = $request->all();

        $id->update($input);

        return redirect()->route('testimonials')->with('status', 'Testimonial edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $id)
    {

        $id->delete();
        $delete = true;
        return redirect()->route('testimonials', ['delete' => $delete])->with('status', 'Testimonial deleted successfully');
    }
}
