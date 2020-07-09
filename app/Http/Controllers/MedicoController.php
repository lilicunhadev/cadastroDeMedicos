<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;

class MedicoController extends Controller
{
    private $array = ['error'=>'', 'result'=>[]];

    public function all() {
        $medicos = Medico::all();

        foreach($medicos as $medico) {
            $this->array['result'][] = [
                'id' => $medico->id,
                'nome' => $medico->nome,
                'crm' => $medico->crm,
                'telefone' => $medico->telefone,
                'especialidade1' => $medico->especialidade1,
                'especialidade2' => $medico->especialidade2,
            ];

            if ($medico->especialidade3) {
                $this->array['result'][] = [
                    'id' => $medico->id,
                    'nome' => $medico->nome,
                    'crm' => $medico->crm,
                    'telefone' => $medico->telefone,
                    'especialidade1' => $medico->especialidade1,
                    'especialidade2' => $medico->especialidade2,
                    'especialidade3' => $medico->especialidade3,
                ];
            }
        }

        return $this->array;
    }

    public function one ($id) {
        $medico = Medico::find($id);

        if($medico) {
            $this->array['result'] = $medico;
        } else {
            $this->array['error'] = 'ID não encontrado';
        }

        return $this->array;
    }

    public function new (Request $request) {
        $nome = $request->input('nome');
        $crm = $request->input('crm');
        $telefone = $request->input('telefone');
        $especialidade1 = $request->input('especialidade1');
        $especialidade2 = $request->input('especialidade2');
        $especialidade3 = $request->input('especialidade3');

        if ($nome && $crm && $telefone && $especialidade1 && $especialidade2 && $especialidade3) {
            $medico = new Medico();
            $medico->nome = $nome;
            $medico->crm = $crm;
            $medico->telefone = $telefone;
            $medico->especialidade1 = $especialidade1;
            $medico->especialidade2 = $especialidade2;
            $medico->especialidade3 = $especialidade3;
            $medico->save();

            $this->array['result'] = [
                'id' => $medico->id,
                'nome' => $nome,
                'crm' => $crm,
                'telefone' => $telefone,
                'especialidade1' => $especialidade1,
                'especialidade2' => $especialidade2,
                'especialidade3' => $especialidade3
            ];

        } else if ($nome && $crm && $telefone && $especialidade1 && $especialidade2) {
            $medico = new Medico();
            $medico->nome = $nome;
            $medico->crm = $crm;
            $medico->telefone = $telefone;
            $medico->especialidade1 = $especialidade1;
            $medico->especialidade2 = $especialidade2;
            $medico->save();

            $this->array['result'] = [
                'id' => $medico->id,
                'nome' => $nome,
                'crm' => $crm,
                'telefone' => $telefone,
                'especialidade1' => $especialidade1,
                'especialidade2' => $especialidade2
            ];

        } else {
            $this->array['error'] = 'Campos não enviados';
        }

        return $this->array;
    }

    public function edit(Request $request, $id) {
        $nome = $request->input('nome');
        $crm = $request->input('crm');
        $telefone = $request->input('telefone');
        $especialidade1 = $request->input('especialidade1');
        $especialidade2 = $request->input('especialidade2');
        $especialidade3 = $request->input('especialidade3');

        if ($nome && $crm && $telefone && $especialidade1 && $especialidade2 && $especialidade3) {
            $medico = Medico::find($id);
            if ($medico) {
                $medico->nome = $nome;
                $medico->crm = $crm;
                $medico->telefone = $telefone;
                $medico->especialidade1 = $especialidade1;
                $medico->especialidade2 = $especialidade2;
                $medico->especialidade3 = $especialidade3;

                $medico->save();

                $this->array['result'] = [
                    'id' => $id,
                    'nome' => $nome,
                    'crm' => $crm,
                    'telefone' => $telefone,
                    'especialidade1' => $especialidade1,
                    'especialidade2' => $especialidade2,
                    'especialidade3' => $especialidade3
                ];

            } else {
                $this->array['error'] = 'ID não encontrado';
            }


        } else if ($nome && $crm && $telefone && $especialidade1 && $especialidade2) {
            $medico = Medico::find($id);
            if ($medico) {
                $medico->nome = $nome;
                $medico->crm = $crm;
                $medico->telefone = $telefone;
                $medico->especialidade1 = $especialidade1;
                $medico->especialidade2 = $especialidade2;

                $medico->save();

                $this->array['result'] = [
                    'id' => $id,
                    'nome' => $nome,
                    'crm' => $crm,
                    'telefone' => $telefone,
                    'especialidade1' => $especialidade1,
                    'especialidade2' => $especialidade2
                ];

            } else {
                $this->array['error'] = 'ID não encontrado';
            }

        } else {
            $this->array['error'] = 'Campos não enviados';
        }

        return $this->array;
    }

    public function delete($id) {

        $medico = Medico::find($id);

        if ($medico) {
            $medico->delete();
        } else {
            $this->array['error'] = 'ID não encontrado';
        }

        return $this->array;        
    }
}
