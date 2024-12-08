<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Profile</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 p-5 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold text-center mb-4">Delete Profile</h1>
        <p class="text-lg text-center">Are you sure you want to delete your profile? This action cannot be undone.</p>
        <div class="mt-5 text-center">
            <form action="{{ route('profile.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg">Yes, Delete My Profile</button>
            </form>
            <a href="{{ route('profile.show', $user->id) }}" class="mt-3 inline-block px-4 py-2 bg-gray-500 text-white rounded-lg">Cancel</a>
        </div>
    </div>
</body>
</html>
