<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 p-5 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold text-center mb-4">Profile Details</h1>
        <div class="space-y-4">
            <p class="text-lg"><strong>Name:</strong> {{ $user->name }}</p>
            <p class="text-lg"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="text-lg"><strong>Phone:</strong> {{ $user->phone }}</p>
            <p class="text-lg"><strong>Address:</strong> {{ $user->address }}</p>
        </div>
        <div class="mt-5 flex justify-between">
            <a href="{{ route('profile.edit', $user->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Edit Profile</a>
            <form action="{{ route('profile.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg">Delete Profile</button>
            </form>
        </div>
    </div>
</body>
</html>
