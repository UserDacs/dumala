<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
          
            'title' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'nullable|date',
            'color' => 'nullable|string|max:7',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $event = new Event;
        $event->schedule_id = $request->schedule_id;
        $event->title = $request->title;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->color = $request->color;
        $event->save();

        return response()->json(['success' => true, 'message' => 'Event saved successfully!', 'event' => $event]);
    }


    public function getEvents()
    {
        $events = Event::all();
    
        // Rename the fields
        $renamedEvents = $events->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start ? date('Y-m-d H:i:s', strtotime($event->start)) : null,
                'end' => $event->end ? date('Y-m-d H:i:s', strtotime($event->end)) : null,
                'color' => $event->color,
                'schedule_id' => $event->schedule_id,
                'start_time' => $event->start ? date('Y-m-d H:i:s', strtotime($event->start)) : null,
                'end_time' => $event->end ? date('Y-m-d H:i:s', strtotime($event->end)) : null,
            ];
        });
    
        return response()->json($renamedEvents);
    }
}
