@extends('layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Create a New Goal</h1>
<form action="{{ route('goals.store') }}" method="POST" class="space-y-4">
    @csrf
    <input type="text" name="title" placeholder="Title" class="border p-2 w-full" required>
    <textarea name="description" placeholder="Description" class="border p-2 w-full"></textarea>
    <input type="number" name="target" placeholder="Target value" class="border p-2 w-full" required>
    

    <div class="d-flex gap-2">
    <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded">Save Goal</button>
    <a href="{{ route('goals.index') }}" class="bg-yellow-500 text-white px-3 py-2 rounded">Back to Goals</a>
</div>
    <div class="text-red-500">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</form>
@endsection