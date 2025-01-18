<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Event;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.schedules');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $event_id = '';
        if ($request->input('sched_type') == 'own_sched') {
            $validated = $request->validate([
                // 'date' => 'required|date',
                // 'time_from' => 'required|date_format:H:i',
                // 'time_to' => 'required|date_format:H:i|after:time_from',
                'venue' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'purpose' => 'required|string|max:255',
                'others' => 'nullable|string|max:255',
            ]);

            $time_from_24 = date('H:i:s', strtotime($request->input('time_from')));
            $time_to_24 = date('H:i:s', strtotime($request->input('time_to')));
            $date_now = $request->input('date');

        
            $validated['date'] = $date_now;
            $validated['time_from'] = $time_from_24;
            $validated['time_to'] = $time_to_24;
          
            $validated['sched_type'] = $request->input('sched_type');
            $validated['created_by'] = Auth::user()->id;
            $prefix = Auth::user()->prefix ?? ''; // Null coalescing operator
            $validated['created_by_name'] = empty($prefix) 
                ? '' 
                : "{$prefix}. " . Auth::user()->firstname . " " . Auth::user()->lastname;
            $validated['assign_to'] =  $request->input('assign_to');
            $validated['assign_by'] =  Auth::user()->id;
            $validated['status'] = '1';
            $validated['is_assign'] = '1';


            // Insert the schedule
            $schedule = Schedule::create($validated);

            $event = new Event;
            $event->schedule_id = $schedule->id;
            $event->title =  $request->input('purpose');
            $event->start = $date_now .' '.$time_from_24;
            $event->end =  $date_now .' '.$time_to_24;
            $event->color = '#348fe2';
            $event->save();


        }else{

            // #348fe2
            $time_from_24 = date('H:i:s', strtotime($request->input('time_from')));
            $time_to_24 = date('H:i:s', strtotime($request->input('time_to')));
            $date_now = $request->input('date');

            $user_name = User::where('id',$request->input('assign_to'))->first();


            $validated['purpose'] = 'Mass Schedule';

            $validated['date'] = $date_now;
            $validated['time_from'] = $time_from_24;
            $validated['time_to'] = $time_to_24;
          
            $validated['sched_type'] = $request->input('sched_type');
            $validated['created_by'] = Auth::user()->id;
            $prefix = Auth::user()->prefix ?? ''; // Null coalescing operator
            $validated['created_by_name'] = empty($prefix) 
                ? '' 
                : "{$prefix}. " . Auth::user()->firstname . " " . Auth::user()->lastname;
            $validated['assign_to'] =  $request->input('assign_to');
            $validated['assign_to_name'] =  Auth::user()->id;
            $validated['assign_by'] =  Auth::user()->id;
            $validated['status'] = '1';
            $validated['is_assign'] = '1';
            $validated['assign_to_name'] = ($user_name->prefix=='')? '' : $user_name->prefix.'.'.' '.$user_name->firstname.' '.$user_name->lastname;


            // Insert the schedule
            $schedule = Schedule::create($validated);

            $event = new Event;
            $event->schedule_id = $schedule->id;
            $event->title =  'Mass Schedule';
            $event->start = $date_now .' '.$time_from_24;
            $event->end =  $date_now .' '.$time_to_24;
            $event->color = '#348fe2';
            $event->save();


        }
       

        return response()->json(['message' => 'Schedule created successfully!'], 200);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
