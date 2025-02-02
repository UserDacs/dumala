<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;

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
        $perPage = 10; // Items per page

        $query = DB::table('schedule_events_view');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('created_by_name', 'like', '%' . $search . '%')
                ->orWhere('role', 'like', '%' . $search . '%');
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
