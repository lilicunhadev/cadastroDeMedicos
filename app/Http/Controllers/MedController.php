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
    public function index() {
        $medicos = Medico::paginate(8);

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

    public function update(Request $request, $id)
    {
        $medico = Medico::find($id);

        if ($medico) {

            $data = $request->only([
                'nome',
                'crm',
                'telefone',
                'especialidade1',
                'especialidade2',
                'especialidade3'
            ]);

            $medico->nome = $data['nome'];
            $medico->crm = $data['crm'];
            $medico->telefone = $data['telefone'];
            $medico->especialidade1 = $data['especialidade1'];
            $medico->especialidade2 = $data['especialidade2'];
            $medico->especialidade3 = $data['especialidade3'];

            $medico -> save();
        }

        return redirect()->route('medicos.index');
    }

    public function destroy($id)
    {
        $medico = Medico::find($id);
        $medico->delete();

        return redirect()->route('medicos.index');
    }

    public function search(Request $request)
    {
        if ($request->input('busca', 'nome'))
        {
            $busca = $request->input('busca', 'nome');
            $medicos = Medico::where($request->busca, 'like',  '%' . $request->nome .'%')
                ->orderBy($busca)
                ->paginate(8);
        }

        else if ($request->input('busca', 'crm'))
        {
            $busca = $request->input('busca', 'crm');
            $medicos = Medico::where($request->busca, 'like',  '%' . $request->crm .'%')
                ->orderBy($busca)
                ->paginate(8);
        }

        else if ($request->input('busca', 'especialidade1'))
        {
            $busca = $request->input('busca', 'especialidade1');
            $medicos = Medico::where($request->busca, 'like',  '%' . $request->especialidade1 .'%')
                ->orderBy($busca)
                ->paginate(8);
        }
            
        return view('medicos.index')
            ->with('medicos', $medicos);
    }

}
