@extends('layout')

@section('title')
    Create branch
    @endsection

@section('content')
    <center>
        <h3>Create New Branch for selected Bank </h3>
        <br>
        <form action="/branch" method="post">
            @csrf
            <select name="bank_id">
                @foreach($banks as $bank)
                <option value="{{$bank->id}}">{{$bank->bankName}}</option>
                    @endforeach
            </select>
            <input type="text" placeholder="Branch Name" name="branchName">
            <input type="text" placeholder="Branch Ifsc" name="branchIfsc">
            <button type="submit" value="Submit">Submit</button>
        </form>
    </center>
    @endsection