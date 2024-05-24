<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Facilitator;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($request->username === 'admin' && $request->password === 'admin123') {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['credentials' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }


    public function dashboard()
    {
        $students = Student::all();
        $facilitators = Facilitator::all();

        return view('admin.dashboard', [
            'students' => $students,
            'facilitators' => $facilitators,
        ]);
    }

    public function showAddStudentForm()
    {
        return view('admin.add_student');
    }

    public function showAddFacilitatorForm()
    {
        return view('admin.add_facilitator');
    }

    public function storeStudent(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'section' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        Student::create($validatedData);

        return redirect()->route('admin.dashboard');
    }

    public function storeFacilitator(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        Facilitator::create($validatedData);

        return redirect()->route('admin.dashboard');
    }

    public function editStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.edit_student', compact('student'));
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'year' => 'required|string',
            'course' => 'required|string',
            'section' => 'required|string',
            'username' => 'required|string',
        ]);

        $student->update($data);
        return redirect()->route('admin.dashboard')->with('success', 'Student updated successfully');
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Student deleted successfully');
    }

    public function editFacilitator($id)
    {
        $facilitator = Facilitator::findOrFail($id);
        return view('admin.edit_facilitator', compact('facilitator'));
    }

    public function updateFacilitator(Request $request, $id)
    {
        $facilitator = Facilitator::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
        ]);

        $facilitator->update([
            'name' => $request->name,
            'username' => $request->username,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Facilitator updated successfully');
    }

    public function deleteFacilitator($id)
    {
        $facilitator = Facilitator::findOrFail($id);
        $facilitator->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Facilitator deleted successfully');
    }
}
