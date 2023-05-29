<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $students = User::where('role', 0)->get();
    
            return view('co-oopTrainingPlatform.panelPage.admin.students.index', compact('students'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('co-oopTrainingPlatform.panelPage.admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile_number' => 'required',
            'status' => 'required',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile_number = $request->input('mobile_number');
        $user->status = $request->input('status');
        $user->password = bcrypt('password'); // Set the password to 'password'
        $user->role = 0; // Set the role value to 0 for student

        $user->save();

        return redirect()->route('adminPanel.students.index')
            ->with('success', 'Student created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = User::findOrFail($id);

        return view('co-oopTrainingPlatform.panelPage.admin.students.edit', compact('student'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_number' => 'nullable|string|max:20',
            'status' => 'required|in:0,1',
        ]);

        // Find the student by ID
        $student = User::findOrFail($id);

        // Update the student's information
        $student->name = $validatedData['name'];
        $student->email = $validatedData['email'];
        $student->mobile_number = $validatedData['mobile_number'];
        $student->status = $validatedData['status'];

        

        // Save the updated student
        $student->save();

        // Redirect back to the student's edit page with a success message
        return redirect()->back()->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the student record by id
        $student = user::find($id);

        // Delete the student record
        $student->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('adminPanel.students.index')
            ->with('success', 'Student deleted successfully');
        }
}
