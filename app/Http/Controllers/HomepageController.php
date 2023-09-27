<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

/**
 * Class HomepageController
 * @package App\Http\Controllers
 */
class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepages = Homepage::paginate();

        return view('homepage.index', compact('homepages'))
            ->with('i', (request()->input('page', 1) - 1) * $homepages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homepage = new Homepage();
        return view('homepage.create', compact('homepage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Homepage::$rules);

        $homepage = Homepage::create($request->all());

        return redirect()->route('homepages.index')
            ->with('success', 'Homepage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homepage = Homepage::find($id);

        return view('homepage.show', compact('homepage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homepage = Homepage::find($id);

        return view('homepage.edit', compact('homepage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Homepage $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homepage $homepage)
    {
        request()->validate(Homepage::$rules);

        $homepage->update($request->all());

        return redirect()->route('homepages.index')
            ->with('success', 'Homepage updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $homepage = Homepage::find($id)->delete();

        return redirect()->route('homepages.index')
            ->with('success', 'Homepage deleted successfully');
    }
}
