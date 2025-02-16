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
            ->select(DB::raw('AVG(TIMESTAMPDIFF(MINUTE, created_at, updated_at)) as avg_minutes'))
            ->first();

        $avgMinutes = $averageResolutionTime->avg_minutes ?? 0;

        $days = floor($avgMinutes / 1440);
        $hours = floor(($avgMinutes % 1440) / 60);
        $minutes = $avgMinutes % 60;

        $formattedTime = [
            'days' => $days,
            'hours' => $hours,
            'minutes' => round($minutes)
        ];

        return view('reports', compact('ticketsByStatus', 'formattedTime'));
    }
}