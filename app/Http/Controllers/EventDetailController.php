<?php

namespace App\Http\Controllers;

use App\Models\EventDetail;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventDetailController extends Controller
{
    // Display a listing of the event details
    public function index()
    {
        $eventDetails = EventDetail::all();
        return view('event_details.index', compact('eventDetails'));
    }

    function showAdmCBcourse(){
        return view('admin.cb-course');
    }

    function showAdmCreate(){
        return view('admin.create-cb');
    }

    public function createCb(Request $request)
    {
        // Define custom validation rules
        $validator = Validator::make($request->all(), [
            'e_name' => 'required|string|max:255',
            'e_type' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'open_reg' => 'required|date',
            'close_reg' => 'required|date',
            'report_deadline' => 'required|date',
            'e_desc' => 'required|string',
            'notes' => 'nullable|string',
            'cb_type' => 'required|string',
        ]);

        // Check if the validation failed
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Attempt to create the event
            EventDetail::create($request->all());
            
            // Redirect with success message
            return redirect()->route('admCb_course')->with('success', 'Event Detail created successfully.');
        } catch (QueryException $e) {
            // Catch database-related errors
            return redirect()->back()->with('error', 'There was an error creating the event. Please try again.');
        } catch (\Exception $e) {
            // Catch any other errors
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }


    function showAdmCreate2(){
        return view('admin.create-cb-2');
    }

    function showAdmProject(){
        return view('admin.cb-project');
    }

    function showAdmEdit(){
        return view('admin.edit-cb');
    }

    function showAdmEdit2(){
        return view('admin.edit-cb-2');
    }
}
