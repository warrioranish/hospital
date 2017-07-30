<?php

namespace App\Http\Controllers\Backend;

use App\Faq;
use App\Repositories\FaqRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{

    /**
     * @var FaqRepository
     */
    private $faqRepository;

    public function __construct(FaqRepository $faqRepository)
    {

        $this->faqRepository = $faqRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $faq = $this->faqRepository->getFaq();

        return view('backend.faq.list', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.faq.add');
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
           'question' => 'required',
            'answer' => 'required'
        ]);

        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->status = $request->status;
        $faq->save();

        return redirect()->route('faq')->with('status', 'Faq added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $id)
    {

        return view('backend.faq.edit', ['faq' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Faq $id)
    {
        $this->validate($request, [
           'question' => 'required',
            'answer' => 'required'
        ]);

        $id->question = $request->question;
        $id->answer = $request->answer;
        $id->status = $request->status;
        $id->save();

        return redirect()->route('faq')->with('status', 'FAQ edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $id)
    {
        $id->delete();

        $delete = true;

        return redirect()->route('faq', ['delete' => $delete])->with('status', 'FAQ deleted successfully');
    }
}
