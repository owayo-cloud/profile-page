@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Profile</h2>
        
        <div class="mb-4">
            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
            <p class="mt-1 text-gray-900">{{ $user->name }}</p>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
            <p class="mt-1 text-gray-900">{{ $user->email }}</p>
        </div>

        <div class="mt-6 flex space-x-4">
            <a href="{{ route('profile.edit') }}" class="text-blue-600">Edit Profile</a>
            <form action="{{ route('profile.destroy') }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600">Delete Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
