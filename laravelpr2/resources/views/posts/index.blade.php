@extends ('layout')

@section('content')
@if(session('success'))
<div class="alert alert-success" >{{session('success')}}</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <h1>post list</h1>

        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>


        @endif
        <a href="{{route('posts.create')}}" class="btn btn-success float-right">new post</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>sn</th>
                    <th>name</th>
                    <th>image</th>
                    <th>details</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php $i = 1 ?>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$post->name}}</td>
                    <td><img src="/images/{{$post->image}}" width="100px"></a></td>
                    <td>{{$post->details}}</td>
                    <td>edit |
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                        @csrf 
                        @method('delete')
                        <button type="submit" class="btn btn-danger">delete</button>


                    </form>    
                    
                    delete</td>
                </tr>

                @endforeach
            </tbody>


        </table>
    </div>

</div>
@endsection