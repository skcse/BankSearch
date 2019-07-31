@extends('layout')

@section('title')
    Create Banks
    @endsection

@section('content')
    <center>
    <h3>Create New Bank </h3>
        <br>
    <form action="/banks" method="post">
        @csrf
        <input type="text" placeholder="Bank Name" name="bankName">
        <button type="submit" value="Submit">Submit</button>
    </form>
    </center>
    @endsection