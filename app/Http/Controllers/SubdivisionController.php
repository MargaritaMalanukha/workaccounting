<?php

namespace App\Http\Controllers;

use App\Models\Subdivision;
use App\Models\User;
use Illuminate\Http\Request;

class SubdivisionController extends Controller
{

    public function index(Request $request)
    {
        if (!User::isAuthorized($request)) return redirect('/login');
        $subdivisions = Subdivision::findAll($request);
        return view('subdivisions.subdivisions')->with('subdivisions', $subdivisions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subdivisions.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     */
    public function store(Request $request)
    {
        Subdivision::create($request);
        return redirect()->route('subdivisions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param $subdivisionID
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($subdivisionID)
    {
        $subdivision = Subdivision::findById($subdivisionID);
        return view('subdivisions.edit')->with('subdivision', $subdivision);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Subdivision $subdivision
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $subdivisionID)
    {
        Subdivision::updateS($request, $subdivisionID);
        return redirect()->route('subdivisions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($subdivisionID)
    {
        Subdivision::deleteS($subdivisionID);
        return redirect()->route('subdivisions.index');
    }
}
