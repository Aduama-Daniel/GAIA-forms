<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership; 
use App\Models\Group;
use Illuminate\Support\Facades\Session;

class MembershipController extends Controller
{

    public function showForm()
{
    $groups = Group::whereRaw('total_members > (SELECT COUNT(*) FROM memberships WHERE memberships.group_id = groups.id)')
        ->get();
       
    return view('membership.form', ['groups' => $groups]);
}




    public function submitForm(Request $request)
{
   

    $validatedData = $request->validate([
        'group_id' => 'required|exists:groups,id',
        'english_spoken' => 'required',
        'english_written' => 'required',
        'french_spoken' => 'required',
        'french_written' => 'required',
        'surname' => 'required',
        'given_names' => 'required',
        'university_name' => 'required',
        'faculty_department' => 'required',
        'degree_program' => 'required',
        'year_of_study' => 'required',
        'university_id_number' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'phone_number' => 'required',
        'experience_digital_technologies' => 'required',
        'interest_earth_observation' => 'required',
        'why_join_gaia_club' => 'required',
        'personal_and_professional_goals' => 'required',
        'technical_skills' => 'required',
        'non_technical_skills' => 'required',
        'preferred_group_role' => 'required',
        'additional_information' => 'required',
        'declaration' => 'required',
        'date' => 'required|date',
    ]);

    $selectedGroup = Group::find($request->input('group_id'));
   
    $englishSpoken = $request->input('english_spoken');
    $englishWritten = $request->input('english_written');
    $frenchSpoken = $request->input('french_spoken');
    $frenchWritten = $request->input('french_written');

   

    // Ensure the group is not full
   
        // Store the form data in the database
        $membership = Membership::create([
            'surname' => $request->surname,
            'given_names' => $request->given_names,
            'university_name' => $request->university_name,
            'faculty_department' => $request->faculty_department,
            'degree_program' => $request->degree_program,
            'year_of_study' => $request->year_of_study,
            'university_id_number' => $request->university_id_number,
            'age' => $request->age,
            'gender' => $request->gender,
            'email' => $request-> email,
            'phone_number' => $request->phone_number,
            'english_spoken' => $englishSpoken,
        'english_written' => $englishWritten,
        'french_spoken' => $frenchSpoken,
        'french_written' => $frenchWritten,
            
            'experience_digital_technologies' => $request->experience_digital_technologies,
            'interest_earth_observation' => $request->interest_earth_observation,
            'why_join_gaia_club' => $request->why_join_gaia_club,
            'personal_and_professional_goals' => $request->personal_and_professional_goals,
            'technical_skills' => $request->technical_skills,
            'non_technical_skills' => $request->non_technical_skills,
            'preferred_group_role' => $request->preferred_group_role,
            'additional_information' => $request->additional_information,
            'declaration' => $request->declaration,
            'date' => $request->date,
             'group_id' => $selectedGroup->id,
        ]);

        //$selectedGroup = Group::find($request->input('group_name'));

        // Ensure the group is not full
       // Store the form data in the database
       $membership = new Membership($request->all());
       $selectedGroup->memberships()->save($membership);
       

       $request->session()->flash('success', 'User registered successfully!');


       
       return redirect()->route('groups.store');

    
}




    

public function showMemberships()
{
    $memberships = Membership::all();
    return view('membership.memberships', compact('memberships'));
}

    
}



