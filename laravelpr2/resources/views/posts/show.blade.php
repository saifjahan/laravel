@extends ('layout')


@section ('content')
<div class="row">
    <div class="col-lg-12">
        <h3>id: {{$post->id}}</h3>
        
        <h2>{{$post->name}}</h2>
        <p>{{$post->detail}}</p>
    </div>
</div>



@endsection