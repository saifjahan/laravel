@extends('backend.app')

@section ('content')

<form action="{{route('students.store)}}" class="parsley-examples" method="post">
    @csrf
    <div class="form-group">
        <label for="Name">Name<span class="text-danger">*</span></label>
        <input type="text" name="name" parsley-trigger="change" required
            placeholder="Enter  name" class="form-control" id="Name">
    </div>
    <div class="form-group">
        <label for="email">Email<span class="text-danger">*</span></label>
        <input type="email" name="email" parsley-trigger="change" required
            placeholder="Enter email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pass1">phone<span class="text-danger">*</span></label>
        <input id="pass1" type="text" name="phone" placeholder="phone" required
            class="form-control">
    </div>
    <div class="form-group">
        <label for="passWord"> Address <span class="text-danger">*</span></label>
        <textarea name="address" id="" placeholder="address"></textarea>
    </div>
    

    </div>

    <div class="form-group text-right mb-0">
        <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
            Submit
        </button>
        <button type="reset" class="btn btn-light waves-effect">
            Cancel
        </button>
    </div>

</form>

@endsection