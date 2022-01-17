<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyRequest;
use App\Models\Media;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Inertia\Response;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request): Response
    {
        $properties = Property::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->with(['landlord.user', 'agent.user', 'tenant.user', 'media'])
            ->paginate()
            ->appends($request->query());

        if ($request->wantsJson()) {
            return $properties;
        }


        return Inertia::render('Property/Index', [
            'properties' => $properties,
            'filters' => $request->only(['search']),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        //check if user is logged in else redirect to login page
        if (Auth::check()) {
            //only allowed to create if user is landlord or agent or admin
            if (Auth::user()->landlord || Auth::user()->agent || Auth::user()->isAdmin) {

                return Inertia::render('Property/Create');
            } else {
                return Redirect::route('properties.index')->with('message', 'You are not authorized to create a property');
            }
        } else {
            return Redirect::to('/login')->with('message', 'You must be logged in and a landlord/agent to create a property');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'type' => 'required|string|max:255',
            'feature' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'period_of_availability' => 'required|numeric',
            'urgency' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'photoIds.*' => [
                Rule::exists('media', 'id')->where(function ($query) use ($request) {
                    $query->where('user_id', $request->user()->id);
                }),
            ],


        ]);


        $property = Property::create([
            //check if landlord or agent or admin
            'landlord_id' => Auth::user()->landlord ? Auth::user()->landlord->id : Auth::user()->agent->id,
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
            'feature' => $request->input('feature'),
            'location' => $request->input('location'),
            'period_of_availability' => $request->input('period_of_availability'),
            'urgency' => $request->input('urgency'),
            'description' => $request->input('description'),



        ]);

        Media::find($request->photoIds)->each->update([
            'model_id' => $property->id,
            'model_type' => Property::class,
        ]);
        return redirect('/properties')->with('message', 'Property created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {

        return Inertia::render('Property/Show', ['property' => $property->load('landlord.user', 'agent.user')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
