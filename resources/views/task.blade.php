
@extends('app')

@section('content')


<div class="container w-25 border p-3 mt-2">
    <form action="{{ route('list')}}" method="POST">
        @csrf
        
        @if (session('success'))
            <div class="alert alert-success alert-dismissible  fade show" data-timeout="10000"role="alert">{{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @error('name')
            <div class="alert alert-danger alert-dismissible" data-timeout="10000">{{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        <div class="mb-3">
            <label for="name">Add a task</label>
            <input name="name" type="text" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text form-text-sm">Write the task you need to complete.</div>
        </div>
        
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-dark">Add task</button>
        </div>

    </form>    

    
    <div class="mt-4">
    
    @foreach ($tasks as $task )
        <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a>{{ $task->name }}</a>
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    
                    <a class="btn btn-secondary btn-sm me-2" href="{{route('edit', ['id'=>$task->id]) }}" role="button">Edit</a>
                   
                    <form action="{{route('destroy',[$task->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection