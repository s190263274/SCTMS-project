<?php

namespace App\Http\Controllers\Admin;
use App\Models\Student\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SupervisorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $supervisors = User::where('role', 2)->get();
    
            return view('co-oopTrainingPlatform.panelPage.admin.supervisors.index', compact('supervisors'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('co-oopTrainingPlatform.panelPage.admin.supervisors.create');
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
        $user->role = 2; // Set the role value to 0 for supervisors

        $user->save();

        return redirect()->route('adminPanel.supervisors.index')
            ->with('success', 'Supervisor created successfully.');
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
        $supervisor = User::findOrFail($id);

        return view('co-oopTrainingPlatform.panelPage.admin.supervisors.edit', compact('supervisor'));
    
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

        // Find the supervisor by ID
        $supervisor = User::findOrFail($id);

        // Update the supervisor's information
        $supervisor->name = $validatedData['name'];
        $supervisor->email = $validatedData['email'];
        $supervisor->mobile_number = $validatedData['mobile_number'];
        $supervisor->status = $validatedData['status'];

        

        // Save the updated supervisor
        $supervisor->save();

        // Redirect back to the supervisor's edit page with a success message
        return redirect()->back()->with('success', 'Supervisor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the supervisor record by id
        $supervisor = user::find($id);

        // Delete the supervisor record
        $supervisor->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('adminPanel.supervisors.index')
            ->with('success', 'supervisor deleted successfully');
        }
}
