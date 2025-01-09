<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Announcement;
use App\Models\Marriage;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function report_priest()
    {
        return view('pages.report_priest');
    }
    public function report_total()
    {
        return view('pages.report_total');
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
    public function storeDonor(Request $request)
    {
        $short = 1;
        $parent = 1;
    
        // Get the last parent number from the Announcement model
        $data = Announcement::where('announcement_type', $request->announcement_type)
            ->orderBy('parent', 'desc')
            ->first();
    
        if ($data) {
            $parent = (int)$data->parent + 1;
        }
    
        $donorEntries = []; // Array to hold donor entries for announcement content
    
        foreach ($request->donors as $donor) {
            // Create the Donor entry
            Donor::create([
                'announcement_type' => $request->announcement_type,
                'project_name' => $request->project_name,
                'donor_name' => $donor['donor_name'],
                'donated_amount' => $donor['donated_amount'],
                'parent' => $parent,
                'short' => $short++,
                'status' => 'is_pending',
            ]);
    
            // Add to donorEntries for announcement content
            $donorEntries[] = '<li><strong>Donor name:</strong> ' . $donor['donor_name'] . ' -  ₱ ' . number_format($donor['donated_amount'], 2) . '</li>';
        }
    
        // Create an Announcement entry with the donor info
        Announcement::create([
            'title' => $request->project_name,
            'content' => '<ul>' . implode('', $donorEntries) . '</ul>', // Convert array to unordered list
            'parent' => $parent,
            'announcement_type' => $request->announcement_type,
            'status' => 'is_pending',
        ]);
    
        return response()->json(['message' => 'Donors and announcements saved successfully!']);
    }
    public function storeMarriage(Request $request)
    {

        $data = Announcement::where('announcement_type', $request->announcement_type)
        ->orderBy('parent', 'desc')
        ->first();
        $parent = 1;
        if ($data) {
            $parent = (int)$data->parent + 1;
        }

        Marriage::create([
            'announcement_type' => $request->announcement_type,
            'marriage_bann' => $request->marriage_bann,
            'groom_name' => $request->groom_name,
            'bride_name' => $request->bride_name,
            'groom_age' => $request->groom_age,
            'bride_age' => $request->bride_age,
            'groom_address' => $request->groom_address,
            'bride_address' => $request->bride_address,
            'groom_parents' => $request->groom_parents,
            'bride_parents' => $request->bride_parents,
            'parent' => $parent,
            'status' => 'is_pending',
        ]);

        
        $marriageEntries = '<table style="width: 100%; border-collapse: collapse;">';
        $marriageEntries .= '<tr>';
        $marriageEntries .= '<td style="width: 50%; vertical-align: top;">';
        $marriageEntries .= '<h4>Groom Information</h4>';
        $marriageEntries .= '<strong>Groom name:</strong> '. $request->groom_name .'<br>';
        $marriageEntries .= '<strong>Groom age:</strong> '. $request->groom_age .'<br>';
        $marriageEntries .= '<strong>Groom address:</strong> '. $request->groom_address .'<br>';
        $marriageEntries .= '<strong>Groom parents name:</strong> '. $request->groom_parents .'<br>';
        $marriageEntries .= '</td>'; // Close groom's info cell
        
        $marriageEntries .= '<td style="width: 50%; vertical-align: top;">';
        $marriageEntries .= '<h4>Bride Information</h4>';
        $marriageEntries .= '<strong>Bride name:</strong> '. $request->bride_name .'<br>';
        $marriageEntries .= '<strong>Bride age:</strong> '. $request->bride_age .'<br>';
        $marriageEntries .= '<strong>Bride address:</strong> '. $request->bride_address .'<br>';
        $marriageEntries .= '<strong>Bride parents name:</strong> '. $request->bride_parents .'<br>';
        $marriageEntries .= '</td>'; // Close bride's info cell
        $marriageEntries .= '</tr>'; // Close row
        $marriageEntries .= '</table>'; // Close table

        Announcement::create([
            'title' => $request->marriage_bann,
            'content' => $marriageEntries, 
            'parent' => $parent,
            'announcement_type' => $request->announcement_type,
            'status' => 'is_pending',
        ]);

        return response()->json(['success' => 'Announcement saved successfully!']);
    }


    public function storePublic(Request $request)
    {
        $data = Announcement::where('announcement_type', $request->announcement_type)
        ->orderBy('parent', 'desc')
        ->first();
        $parent = 1;
        if ($data) {
            $parent = (int)$data->parent + 1;
        }
        // Create a new announcement
        Announcement::create([
            'title' => $request->title,
            'content' => $request->content,
            'announcement_type' => $request->announcement_type,
            'parent' => $parent,
            'status' => 'is_pending',
        ]);

        return response()->json(['success' => true]);
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
