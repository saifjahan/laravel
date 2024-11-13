@extends('backend.app')


@section('content')
<h1>Student list</h1>

<a href="" class="btn btn-success float-right">add new</a>


<table class="table table-light">

<thead>
   <tr>
   <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>phone</th>
    <th>address</th>
    <th>action</th>
   </tr>
</thead>
<tbody>
    @foreach ($st as $s)
    <tr>
        <td>{{$s->id}}</td>
        <td>{{$s->name}}</td>
        <td>{{$s->email}}</td>
        <td>{{$s->phone}}</td>
        <td>{{$s->address}}</td>
        <td>Edit | Delete</td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection