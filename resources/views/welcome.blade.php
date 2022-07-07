@extends('layout.master')

@section('content')
<div class="container my-3">
    @if (session()->has('succes'))
    <div class="alert alert-success alert-dismissible">To do Saved With Succes</div>
    @endif
    <form action="{{url('/done')}}" method="post">
     {{ csrf_field() }}
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Add a new todo" aria-label="Recipient's username" aria-describedby="button-addon2" name="todobody">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
          </div>

    </form>
</div>
@endsection
