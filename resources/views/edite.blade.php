@extends('layout.master')

@section('content')
@parent
    @foreach ($datafor as $item)
        <div class="container my-4">
            <form action="{{ url('/up/' . $item->id_todo) }}" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input type="hidden" name="_method" value="PUT" />
                    <input value="{{ $item-> body }}" type="text" class="form-control" placeholder="Add a new todo"
                        aria-label="Recipient's username" aria-describedby="button-addon2" name="uptodo">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Update</button>
                </div>
            </form>
        </div>  
    @endforeach
@endsection
