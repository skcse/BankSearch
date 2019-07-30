@extends('layout')

@section('title')
    Banks
    @endsection

@section('content')
    <h3>List of available banks</h3>
    <table border="1" style="width:80%">
        <tr>
        <th>S.no</th>
        <th>Bank Name</th>
        <th>Edit Link</th>
        </tr>
        @foreach ($results as $key=>$res)
            <tr>
            <td>{{ ($results->currentpage()-1) * $results->perpage() + $key + 1 }}</td>
        <td>{{$res->bankName}}</td>
            <td><a href="/banks/{{$res->id}}">Edit</a></td>
            </tr>
    @endforeach
    </table>
    <a href="{{$results->previousPageUrl()}}">Prev page</a>
    <a href="{{$results->nextPageUrl()}}">Next page</a>
    @endsection