<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use App\Models\Transaction;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $weddings = Wedding::all();
        $revenue = Transaction::where('id_service', 1)->where('status', '<>', 'pending')->where('status', '<>', 'rejeced')->where('status', '<>', 'refund')->sum('total');
        $unpaid = Transaction::where('id_service', 1)->where('status', '=', 'pending')->sum('total');

        return view('dashboard.admin.weddings', compact('weddings', 'revenue', 'unpaid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function show(Wedding $wedding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function edit(Wedding $wedding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wedding $wedding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wedding $wedding)
    {
        //
    }
}
