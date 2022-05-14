<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Class;
use Illuminate\Http\Request;

/**
 * Class ClassController
 * @package App\Http\Controllers
 */
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Clase::paginate();

        return view('class.index', compact('classes'))
            ->with('i', (request()->input('page', 1) - 1) * $classes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = new Clase();
        return view('class.create', compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clase::$rules);

        $class = Clase::create($request->all());

        return redirect()->route('classes.index')
            ->with('success', 'Class created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Clase::find($id);

        return view('class.show', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Clase::find($id);

        return view('class.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Class $class
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clase $class)
    {
        request()->validate(Clase::$rules);

        $class->update($request->all());

        return redirect()->route('classes.index')
            ->with('success', 'Class updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $class = Clase::find($id)->delete();

        return redirect()->route('classes.index')
            ->with('success', 'Class deleted successfully');
    }
}
