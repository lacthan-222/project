@extends('layouts.master')
@section('content')
<h1>List Categories</h1>

<table style="width:100%">
    <tr>
        <th>ID</th>
        <th>Name</th>

        <th>Edit</th>

    </tr>
@foreach($cats as $cat)
    <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->name}}</td>

        <td><a href="#"> Edit</td>
        <td>
        <form action="#" method="POST">
        
        {{csrf_field()}}

        </form>
        </td>
    </tr>
@endforeach
</table>






@endsection
