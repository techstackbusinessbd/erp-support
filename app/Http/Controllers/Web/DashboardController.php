<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTickets = 150; // Hardcoded for now, will connect to DB later
        $pendingTickets = 53;
        $resolvedTickets = 97;
        $usersCount = \App\Models\User::count();

        $recentTickets = [
            (object)['id' => 1, 'issue' => 'Network issue in 2nd floor', 'status' => 'Pending', 'assignee' => 'John Doe'],
            (object)['id' => 2, 'issue' => 'Printer not working', 'status' => 'Resolved', 'assignee' => 'Jane Smith'],
        ];

        return view('dashboard', compact('totalTickets', 'pendingTickets', 'resolvedTickets', 'usersCount', 'recentTickets'));
    }
}
