<?php

namespace App\Http\Controllers;

use App\Models\Craft;
use Illuminate\Http\Request;

/**
 * Class CraftController
 * @package App\Http\Controllers
 */
class CraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crafts = Craft::paginate();

        return view('craft.index', compact('crafts'))
            ->with('i', (request()->input('page', 1) - 1) * $crafts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $craft = new Craft();
        return view('craft.create', compact('craft'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Craft::$rules);

        $craft = Craft::create($request->all());

        return redirect()->route('crafts.index')
            ->with('success', 'Craft created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $craft = Craft::find($id);

        return view('craft.show', compact('craft'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $craft = Craft::find($id);

        return view('craft.edit', compact('craft'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Craft $craft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Craft $craft)
    {
        request()->validate(Craft::$rules);

        $craft->update($request->all());

        return redirect()->route('crafts.index')
            ->with('success', 'Craft updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $craft = Craft::find($id)->delete();

        return redirect()->route('crafts.index')
            ->with('success', 'Craft deleted successfully');
    }
}
