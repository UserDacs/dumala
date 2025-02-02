<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.requests');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getListSched(Request $request)
    {
        $search = $request->input('search');
        $page = $request->input('page', 1);
        $year = $request->input('year');
        $month = $request->input('month');
        $date_range = $request->input('date_range');
        $perPage = 10; // Items per page

        $query = DB::table('schedule_events_view');
        $id_ = Auth::user()->id;

        if (Auth::user()->role != 'admin' && Auth::user()->role != 'parish_priest') {

            $query->where(function ($q) use ($id_) {
                $q->where('created_by', $id_)
                ->orWhere('assign_to', $id_);
            });  
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('created_by_name', 'like', '%' . $search . '%')
                ->orWhere('role', 'like', '%' . $search . '%')
                ->orWhere(function ($query) use ($search) {
                    $query->whereNotNull('assign_to')
                          ->where('assign_to', $search);
                });
            });
        }


        if ($year) {
            $query->where(function ($q) use ($year) {
                $q->where('year', $year);
            });
        }

        if ($month) {
            $query->where(function ($q) use ($month) {
                $q->where('month', $month);
            });
        }

        if ($date_range) {
            // Split the date range string into start and end dates
            list($start_date, $end_date) = explode(' - ', $date_range);
            
            // Convert the date strings into 'Y-m-d' format (MySQL-compatible)
            $start_date = date('Y-m-d', strtotime($start_date));
            $end_date = date('Y-m-d', strtotime($end_date));
        
            $query->where(function ($q) use ($start_date, $end_date) {
                $q->whereBetween('s_date', [$start_date, $end_date]);
            });
        }

        $total = $query->count(); // Get total count for pagination
        $sched = $query->skip(($page - 1) * $perPage)
                    ->take($perPage)
                    ->get();

        return response()->json([
            'data' => $sched,
            'total' => $total,
            'current_page' => $page,
            'per_page' => $perPage
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
