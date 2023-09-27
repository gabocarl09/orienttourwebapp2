<?php

namespace App\Http\Controllers;

use App\Models\PremiumPlan;
use Illuminate\Http\Request;

/**
 * Class PremiumPlanController
 * @package App\Http\Controllers
 */
class PremiumPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $premiumPlans = PremiumPlan::paginate();

        return view('premium-plan.index', compact('premiumPlans'))
            ->with('i', (request()->input('page', 1) - 1) * $premiumPlans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $premiumPlan = new PremiumPlan();
        return view('premium-plan.create', compact('premiumPlan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PremiumPlan::$rules);

        $premiumPlan = PremiumPlan::create($request->all());

        return redirect()->route('premium-plans.index')
            ->with('success', 'PremiumPlan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $premiumPlan = PremiumPlan::find($id);

        return view('premium-plan.show', compact('premiumPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $premiumPlan = PremiumPlan::find($id);

        return view('premium-plan.edit', compact('premiumPlan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PremiumPlan $premiumPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PremiumPlan $premiumPlan)
    {
        request()->validate(PremiumPlan::$rules);

        $premiumPlan->update($request->all());

        return redirect()->route('premium-plans.index')
            ->with('success', 'PremiumPlan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $premiumPlan = PremiumPlan::find($id)->delete();

        return redirect()->route('premium-plans.index')
            ->with('success', 'PremiumPlan deleted successfully');
    }
}
