@extends('layout')

@section('title')
    Create Banks
    @endsection

@section('content')
    <center>
    <p>Create New Bank </p>
        <br>
    <form action="/banks" method="post">
        @csrf
        <input type="text" placeholder="Bank Name" name="bankName">
        <button type="submit" value="Submit">Submit</button>
    </form>
    </center>
    @endsection