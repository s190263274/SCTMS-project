<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MentorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $mentors = User::where('role', 1)->get();
    
            return view('co-oopTrainingPlatform.panelPage.admin.mentors.index', compact('mentors'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('co-oopTrainingPlatform.panelPage.admin.mentors.create');
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
        $user->role = 1; // Set the role value to 0 for mentors

        $user->save();

        return redirect()->route('adminPanel.mentors.index')
            ->with('success', 'Mentor created successfully.');
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
        $mentor = User::findOrFail($id);

        return view('co-oopTrainingPlatform.panelPage.admin.mentors.edit', compact('mentor'));
    
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

        // Find the mentors by ID
        $mentor = User::findOrFail($id);

        // Update the mentors's information
        $mentor->name = $validatedData['name'];
        $mentor->email = $validatedData['email'];
        $mentor->mobile_number = $validatedData['mobile_number'];
        $mentor->status = $validatedData['status'];

        

        // Save the updated mentors
        $mentor->save();

        // Redirect back to the mentors's edit page with a success message
        return redirect()->back()->with('success', 'Mentors updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the student record by id
        $mentor = user::find($id);

        // Delete the student record
        $mentor->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('adminPanel.mentors.index')
            ->with('success', 'mentors deleted successfully');
        }
}
