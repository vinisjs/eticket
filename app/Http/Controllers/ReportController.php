<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $ticketsByStatus = Ticket::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->get();

        $averageResolutionTime = Ticket::where('status', 'resolved')
            ->whereNotNull('updated_at')
            ->avg(DB::raw('TIMESTAMPDIFF(DAY, created_at, updated_at)'));

        $averageResolutionTime = $averageResolutionTime ?: 0;

        return view('reports', compact('ticketsByStatus', 'averageResolutionTime'));
    }
}