<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 p-5 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold text-center mb-4">Edit Profile</h1>
        <form action="{{ route('profile.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div>
                    <label for="name" class="block font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div>
                    <label for="email" class="block font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div>
                    <label for="phone" class="block font-medium text-gray-700">Phone</label>
                    <input type="tel" name="phone" id="phone" value="{{ $user->phone }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div>
                    <label for="address" class="block font-medium text-gray-700">Address</label>
                    <textarea name="address" id="address" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg" required>{{ $user->address }}</textarea>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg">Save Changes</button>
                <a href="{{ route('profile.show', $user->id) }}" class="ml-4 px-4 py-2 bg-gray-500 text-white rounded-lg">Back to Profile</a>
            </div>
        </form>
    </div>
</body>
</html>
