<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $properties = Property::with(['landlord', 'currentTenant'])->get();

        return Inertia::render('Welcome', [
            'platinumProperties' => $properties->whereIn('class', ['platinum']),
            'goldProperties' => $properties->whereIn('class', ['gold'])->take(3),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }
}
