<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StatisticsController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $weekStart = Carbon::now()->startOfWeek();
        $monthStart = Carbon::now()->startOfMonth();
        $yearStart = Carbon::now()->startOfYear();

        $data = [
            'users' => [
                'total' => User::count(),
                'today' => User::whereDate('created_at', $today)->count(),
                'week' => User::whereBetween('created_at', [$weekStart, $today])->count(),
                'month' => User::whereBetween('created_at', [$monthStart, $today])->count(),
                'year' => User::whereBetween('created_at', [$yearStart, $today])->count(),
            ],
            'teachers' => [
                'total' => Teacher::count(),
                'today' => Teacher::whereDate('created_at', $today)->count(),
                'week' => Teacher::whereBetween('created_at', [$weekStart, $today])->count(),
                'month' => Teacher::whereBetween('created_at', [$monthStart, $today])->count(),
                'year' => Teacher::whereBetween('created_at', [$yearStart, $today])->count(),
            ]
        ];

        return view('pannel.dashboard', ['data' => $data]);
    }
}
