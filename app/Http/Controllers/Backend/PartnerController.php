<?php

namespace App\Http\Controllers\Backend;

use App\Partner;
use App\Repositories\PartnersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{

    /**
     * @var PartnersRepository
     */
    private $partnersRepository;

    public function __construct(PartnersRepository $partnersRepository)
    {
        $this->partnersRepository = $partnersRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = $this->partnersRepository->getPartners();
        return view('backend.partners.list', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partners.add');
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
            'image' => 'required'
        ]);

        $partners = new Partner;
        $partners->name = $request->name;

        if($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $file = $request->file('image');
                $filename = date('ymdHis') . '_' . rand(1, 9999999999) . $file->getClientOriginalName();
                $destination_path = public_path() . '/uploads/images/partners';
                $file->move($destination_path, $filename);
            }
        }
        $partners->image = $filename;
        $partners->url =($request->url == '') ? 'javascript:void(0)' : $request->url;
        $partners->status = $request->status;
        $partners->save();

        return redirect()->route('partners')->with('status', 'partners added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $id)
    {
        return view('backend.partners.edit', ['partner' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Partner $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $id->name = $request->name;
        
        if($request->hasFile('image')) {
            if($request->file('image')->isvalid()) {
                $file = $request->file('image');
                $filename = date('ymdHis') . '_' . rand(1, 9999999999) . $file->getClientOriginalName();
                $destination_path = public_path() . '/uploads/images/partners';
                $file->move($destination_path, $filename);

                if(file_exists($destination_path.'/'.$id->image)) {
                    @unlink($destination_path.'/'.$id->image);
                }
                $id->image = $filename;
            }
        }
        $id->url = ($request->url == '') ? 'javascript:void(0)' : $request->url;
        $id->status = $request->status;
        $id->save();

        return redirect()->route('partners')->with('status', 'Partners edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $id)
    {

        $id->delete();

        if(file_exists(public_path().'/uploads/images/partners/'.$id->image)) {
            @unlink(public_path().'/uploads/images/partners/'.$id->image);
        }

        $delete = true;

        return redirect()->route('partners', ['delete' => $delete])->with('status', 'Partner deleted successfully');
    }
}
