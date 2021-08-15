<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Inertia\Inertia;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Response;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $properties = Property::with(['landlord', 'agent', 'tenant'])->get();

        return Inertia::render('Welcome', [
            'platinumProperties' => $properties->whereIn('class', ['platinum']),
            'goldProperties' => $properties->whereIn('class', ['gold']),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION
        ]);
    }
}
