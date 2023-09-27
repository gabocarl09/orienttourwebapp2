<?php

namespace App\Http\Controllers;

use App\Models\PlacesSection;
use Illuminate\Http\Request;

/**
 * Class PlacesSectionController
 * @package App\Http\Controllers
 */
class PlacesSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placesSections = PlacesSection::paginate();

        return view('places-section.index', compact('placesSections'))
            ->with('i', (request()->input('page', 1) - 1) * $placesSections->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placesSection = new PlacesSection();
        return view('places-section.create', compact('placesSection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PlacesSection::$rules);

        $placesSection = PlacesSection::create($request->all());

        return redirect()->route('places-sections.index')
            ->with('success', 'PlacesSection created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $placesSection = PlacesSection::find($id);

        return view('places-section.show', compact('placesSection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $placesSection = PlacesSection::find($id);

        return view('places-section.edit', compact('placesSection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PlacesSection $placesSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlacesSection $placesSection)
    {
        request()->validate(PlacesSection::$rules);

        $placesSection->update($request->all());

        return redirect()->route('places-sections.index')
            ->with('success', 'PlacesSection updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $placesSection = PlacesSection::find($id)->delete();

        return redirect()->route('places-sections.index')
            ->with('success', 'PlacesSection deleted successfully');
    }
}
