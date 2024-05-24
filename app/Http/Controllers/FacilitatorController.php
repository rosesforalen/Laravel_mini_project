<?php

// FacilitatorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facilitator;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class FacilitatorController extends Controller
{
    public function showLoginForm()
    {
        return view('facilitator.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $facilitator = Facilitator::where('username', $credentials['username'])
                          ->where('password', $credentials['password']) // Consider using hashed passwords for security
                          ->first();

        if ($facilitator) {
            session(['facilitator' => $facilitator->id]);
            return redirect()->route('facilitator.dashboard');
        }

        return back()->withErrors(['credentials' => 'Invalid credentials']);
    }


    public function dashboard()
    {
        // Fetch attendance data for students
        $attendanceData = Student::all(); // Fetch all attendance data

        // Pass the $attendanceData to the view
        return view('facilitator.dashboard', ['attendanceData' => $attendanceData]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
