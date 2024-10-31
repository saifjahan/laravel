<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

@if (session('msg'))
    <div class="alert">
        {{ session('msg')}}
    </div>
    @endif
    <h1>student list</h1>
    <!-- @foreach($students as $item)
    {{$item->name}}
    @endforeach -->

    <ul>
    @foreach($students as $student)
    <li>Name:{{$student->name}} Email:{{$student->email}} Phone:{{$student->phone}}</li>
    @endforeach
    </ul>

</body>

</html>