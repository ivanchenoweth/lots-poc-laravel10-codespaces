<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display the user's dashboard
     */
    public function index(Request $request): View
    {
        $data = User::selectRaw("date_format(created_at, '%Y-%m-%d') as date, count(*) as aggregate")
        ->whereDate('created_at', '>=', now()->subDays(30))
        ->groupBy('date')
        ->get();
        return view('dashboard', compact('data'));
    }

}
