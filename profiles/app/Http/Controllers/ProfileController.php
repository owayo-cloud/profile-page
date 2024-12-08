namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // Show the profile
    public function show()
    {
        $user = auth()->user();  // Get the currently authenticated user
        return view('profile.show', compact('user'));
    }

    // Edit the profile
    public function edit()
    {
        $user = auth()->user();  // Get the currently authenticated user
        return view('profile.edit', compact('user'));
    }

    // Update the profile
    public function update(Request $request)
    {
        $user = auth()->user();  // Get the currently authenticated user

        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        // Update the user's profile
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }

    // Delete the profile
    public function destroy()
    {
        $user = auth()->user();  // Get the currently authenticated user
        $user->delete();  // Delete the user

        return redirect()->route('home');  // Redirect to home after deletion
    }
}
