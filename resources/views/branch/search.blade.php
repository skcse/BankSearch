@extends('layout')

@section('title')
    Search
    @endsection
@section('content')



            @if (isset($_POST['submit']))
            <table border="1" style="width:100%">
                    <tr>
                        <th>Bank Name</th>
                        <th>Branch Name</th>
                        <th>IFSC</th>
                    </tr>

                @foreach($results as $result)
                        <tr>
                            <td>{{$result->bank->bankName}}</td>
                            <td>{{$result->branchName}}</td>
                            <td>{{$result->branchIfsc}}</td>
                        </tr>
                    @endforeach

            </table>
    @else
        <center>
    <form action="/searchByName" method="post">
        @csrf
        <input type="text" name="searchByName" placeholder="Search By Branch Name">
        <button type="submit" name="submit">Submit</button>
    </form>
        <br>
    <form action="/searchByIfsc" method="post">
        @csrf
        <input type="text" name="searchByIfsc" placeholder="Search By Ifsc">
        <button type="submit" name="submit">Submit</button>
    </form>
        </center>
        @endif

    @endsection