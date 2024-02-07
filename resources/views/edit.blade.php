@extends('app')

@section('content')


<div class="container w-25 border p-3 mt-2">
    <form method="POST" action="{{ route('update', ['id' => $task->id]) }}">
        @method('PATCH')
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
            <label for="name">Update a task</label>
            <input name="name" type="text" value="{{ $task->name}}" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text form-text-sm">.</div>
        </div>
        
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-dark">Update task</button>
        </div>

    </form>    
</div>
@endsection