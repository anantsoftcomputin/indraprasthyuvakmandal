<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function feedback()
    {
        return view('feedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,\App\Services\GoogleSheet $googleSheet)
    {
        $values = [
            [$request->name, $request->phone, $request->test_result, $request->no_tifin, implode(',',$request->time),$request->address,$request->starting_from,$request->ending_to],
        ];
        $savedData = $googleSheet->saveDataToSheet($values);
        $msg="Name: ".$request->name." %0a Phone: ".$request->phone." %0a Test Result : ".$request->test_result." %0a No Of Tifin : ".$request->no_tifin."%0a Time : ".implode(',',$request->time)." %0a Address :".$request->address." %0a Start from : ".$request->starting_from." %0a Ending to :  ".$request->ending_to." %0a";
        return redirect("https://wa.me/918780899424?text=".$msg);
        return redirect()->back();
    }

    public function storeFeedback(Request $request)
    {
        $Feedbacksheet=new \App\Services\GoogleSheet('Feedback');
        $values = [
            [$request->name, $request->phone,$request->number_of_tifin,$request->quality,$request->hygiene,$request->panchuality,$request->remarks],
        ];
        $savedData = $Feedbacksheet->saveDataToSheet($values);
         $msg="Name: ".$request->name." %0a Phone: ".$request->phone." %0a Number Of Tifin : ".$request->number_of_tifin." %0a No Of Rating %0a Quality : ".$request->quality."%0a Hygiene : ".$request->hygiene." %0a Punctuality :".$request->panchuality." %0a Remark : ".$request->remarks." %0a";
         return redirect("https://wa.me/918780899424?text=".$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
