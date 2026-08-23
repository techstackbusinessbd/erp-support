@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Total Tickets -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-primary">
            <div class="inner">
                <h3>{{ $totalTickets }}</h3>
                <p>Total Tickets</p>
            </div>
            <i class="small-box-icon bi bi-ticket"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
        </div>
    </div>
    <!-- Pending Tickets -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-warning">
            <div class="inner">
                <h3>{{ $pendingTickets }}</h3>
                <p>Pending Tickets</p>
            </div>
            <i class="small-box-icon bi bi-hourglass-split"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
        </div>
    </div>
    <!-- Resolved Tickets -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-success">
            <div class="inner">
                <h3>{{ $resolvedTickets }}</h3>
                <p>Resolved Tickets</p>
            </div>
            <i class="small-box-icon bi bi-check-circle"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
        </div>
    </div>
    <!-- Users -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-danger">
            <div class="inner">
                <h3>{{ $usersCount }}</h3>
                <p>Users</p>
            </div>
            <i class="small-box-icon bi bi-people"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Recent Tickets</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Issue</th>
                            <th>Status</th>
                            <th style="width: 40px">Assignee</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentTickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}.</td>
                            <td>{{ $ticket->issue }}</td>
                            <td>
                                @if($ticket->status === 'Pending')
                                    <span class="badge text-bg-warning">{{ $ticket->status }}</span>
                                @else
                                    <span class="badge text-bg-success">{{ $ticket->status }}</span>
                                @endif
                            </td>
                            <td>{{ $ticket->assignee }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No recent tickets</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
