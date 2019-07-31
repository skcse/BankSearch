<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use App\Bank;


class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('branch.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks=Bank::all();
        return view('branch.create',compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auth = request()->validate([
            'branchName' => ['required','min:3'],
            'branchIfsc' => ['required','min:3'],
            'bank_id' => ['required']
        ]);
        $branches =new Branch();
        $branches->create($auth);
//        $branch = new Branch();
//        $branch->branchName = request('branchName');
//        $branch->branchIfsc = request('branchIfsc');
//        $branch->bank_id = request('bank_id');
//        $branch->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
    public function searchByName(Request $request)
    {
        $name = request('searchByName');
        $results =  Branch::where('branchName', 'like', '%'.$name.'%')->get();
        return view('branch.search',compact('results'));
    }
    public function searchByIfsc()
    {
        $name = request('searchByIfsc');
        $results =  Branch::where('branchIfsc', 'like', $name)->get();
        return view('branch.search',compact('results'));
    }
}
