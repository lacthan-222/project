@extends('layouts.master')
@section('content')
<h1>List Articles</h1>
<h2><a href="/cats/create">Create</a></h2>

<table style="width:100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>content</th>
        <th>category_id</th>
    </tr>
@foreach($articles as $article)
    <tr>
        <td>{{$article->id}}</td>
        <td id="{{$article->id}}"><a href="/articles/{{article->id}}">{{$article->name}}</a></td>
        <td>{{$article->description}}</td>
        <td>{{$article->content}}</td>
        <td>{{$article->category_id}}</td>
        <td><a href="#"> Edit</td>
        <td>
            <form action="#" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field()}}
            <button type="submit">Delete</button>

            </form>

        </td>
    </tr>
@endforeach
</table>

@endsection
