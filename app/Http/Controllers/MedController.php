<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MedicoRequest;
use App\Medico;
use Input;

class MedController extends Controller
{
    public function index(Request $request)
    {
        $medicos = Medico::searchFilter($request->query('filter'), $request->query('search'))->paginate(8);

        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(MedicoRequest $request)
    {
        Medico::create($request->validated());

        return redirect()->route('medicos.index');
    }

    public function show(Medico $medico)
    {
        return view('medicos.show', compact('medico'));
    }

    public function edit(Medico $medico)
    {
        return view('medicos.edit', compact('medico'));
    }

    public function update(MedicoRequest $request, Medico $medico)
    {
        $medico->fill($request->validated())->save();

        return redirect()->route('medicos.index');
    }

    public function destroy(Medico $medico)
    {
        $medico->delete();

        return redirect()->route('medicos.index');
    }
}
