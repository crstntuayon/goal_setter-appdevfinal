@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Edit Goal</h2>

        <form action="{{ route('goals.update', $goal->id) }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    class="form-control" 
                    value="{{ $goal->title }}" 
                    required
                >
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea 
                    name="description" 
                    class="form-control"
                    rows="4"
                >{{ $goal->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Update
            </button>
        </form>
    </div>
@endsection
