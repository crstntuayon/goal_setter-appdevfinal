@extends('layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">My Goals</h1>
<a href="{{ route('goals.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Goal</a>

<form id="searchForm" action="{{ route('goals.index') }}" method="GET" class="mb-4 flex gap-2">
    <input 
        type="text" 
        name="search" 
        id="searchInput"
        placeholder="Search your goals..." 
        value="{{ request('search') }}" 
        class="border rounded p-2 w-full"
    >
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
</form>

<script>
    const searchInput = document.getElementById('searchInput');
    const searchForm = document.getElementById('searchForm');

    searchInput.addEventListener('input', function () {
        if (this.value === '') {
            searchForm.submit(); // auto-submit when input is cleared
        }
    });
</script>

@if(session('success'))
    <div 
        id="successMessage" 
        class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4"
    >
        {{ session('success') }}
    </div>

    <script>
        setTimeout(function() {
            const message = document.getElementById('successMessage');
            if (message) {
                message.style.transition = 'opacity 0.5s ease';
                message.style.opacity = '0';
                setTimeout(() => message.remove(), 500);
            }
        }, 3000); // vanish after 3 seconds
    </script>
@endif


@if($goals->count())
    
@else
    <p>No goals found.</p>
@endif


@foreach ($goals as $goal)
    <div class="row mb-4 p-4 bg-white shadow rounded">
        
        <h2 class="text-xl font-semibold">{{ $goal->title }}</h2>
        <p>{{ $goal->description }}</p>
        <div class="bg-gray-200 h-6 rounded overflow-hidden mt-2">
            <div class="bg-green-500 h-full text-white text-xs text-center" style="width: {{ ($goal->progress / $goal->target) * 100 }}%">
                {{ round(($goal->progress / $goal->target) * 100) }}%
            </div>
        </div>
        
        <form action="{{ route('goals.update', $goal) }}" method="POST" class="mt-2">
            @csrf @method('PUT')
            <input type="number" name="progress" value="{{ $goal->progress }}" min="0" max="{{ $goal->target }}" class="border p-1 w-24">
            <button type="submit" class="bg-yellow-500 text-white px-3 py-1 rounded">Update Progress</button>
        </form>   
        

       
    <br>


     <a class="bg-green-600 text-white px-3 py-1 rounded" href="{{ route('goals.edit', $goal->id) }}">Edit Goal</a>
        
        @if ($goal->progress >= $goal->target)
            <form action="{{ route('goals.destroy', $goal) }}" method="POST" class="inline-block ml-2">
                @csrf
                @method('DELETE')
               
               <button type="submit" onclick="return confirm('Are you sure you want to delete this goal?')"
                    class="bg-red-600 text-white px-3 py-1 rounded">
                    Delete Goal
                </button>
            </form>
             <br>
            <span class="text-green-600">Goal Completed!</span>
        @else
            
            <br>
            <span class="text-red-600">Goal In Progress</span>  
        @endif
        <br>
        <span class="text-gray-500 text-sm">Created at: {{ $goal->created_at->format('Y-m-d H:i') }}</span>
        <span class="text-gray-500 text-sm">Updated at: {{ $goal->updated_at->format('Y-m-d H:i') }}</span>
    </div>
@endforeach
@endsection