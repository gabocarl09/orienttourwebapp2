<?php

namespace App\Http\Controllers;

use App\Models\InteractiveMap;
use Illuminate\Http\Request;

/**
 * Class InteractiveMapController
 * @package App\Http\Controllers
 */
class InteractiveMapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interactiveMaps = InteractiveMap::paginate();

        return view('interactive-map.index', compact('interactiveMaps'))
            ->with('i', (request()->input('page', 1) - 1) * $interactiveMaps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interactiveMap = new InteractiveMap();
        return view('interactive-map.create', compact('interactiveMap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InteractiveMap::$rules);

        $interactiveMap = InteractiveMap::create($request->all());

        return redirect()->route('interactive-maps.index')
            ->with('success', 'InteractiveMap created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interactiveMap = InteractiveMap::find($id);

        return view('interactive-map.show', compact('interactiveMap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interactiveMap = InteractiveMap::find($id);

        return view('interactive-map.edit', compact('interactiveMap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InteractiveMap $interactiveMap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InteractiveMap $interactiveMap)
    {
        request()->validate(InteractiveMap::$rules);

        $interactiveMap->update($request->all());

        return redirect()->route('interactive-maps.index')
            ->with('success', 'InteractiveMap updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $interactiveMap = InteractiveMap::find($id)->delete();

        return redirect()->route('interactive-maps.index')
            ->with('success', 'InteractiveMap deleted successfully');
    }
}
