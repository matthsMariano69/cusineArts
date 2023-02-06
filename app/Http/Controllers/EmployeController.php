<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function create()
    {
        return view ('employe.create');
    }

    public function store(Request $request)
    {
        try{
            $check = Employe::where('document', $request['document'])->first();
            if ($check) {
              return redirect()->back()->with('error','Já existe um cadastro com esse CPF/CNPJ');
            }
            $check2 = Employe::where('rg', $request['rg'])->first();
            if ($check2) {
              return redirect()->back()->with('error','Já existe um cadastro com esse RG');
            }
            
            DB::beginTransaction();

            $employe = $request->all();

            $remuneration = str_replace('.', '', $employe['remuneration']);
            $remuneration = str_replace(',', '.', $remuneration);

            $data = [
                'name'          => $employe['name'],
                'document'      => $employe['document'],
                'marital'       => $employe['marital'],
                'birth'         => $employe['birth'],
                'rg'            => $employe['rg'],
                'address'       => $employe['address'],
                'neighborhood'  => $employe['neighborhood'],
                'city'          => $employe['city'],
                'remuneration'  => $remuneration,
                'office'        => $employe['office'],
                'rule'          => $employe['rule'],
                'start'         => $employe['start']
            ];
            Employe::create($data);

           DB::commit();
           return redirect()->back()->with('success','Cadastro realizado com sucesso');
        } catch (Exception $e) {
            DB::rollBack();
           return redirect()->back()->with('error','Houve um erro interno');
        }
    }

    public function edit($id)
    {
        $employe = Employe::findOrFail($id);

        return view('employe.edit')->with(compact('employe'));
    }

    public function update(Request $request, $id)
    {
        try{
            DB::beginTransaction();
            $emReq = Employe::findOrFail($id);
            $employe = $request->all();

            $remuneration = str_replace('.', '', $employe['remuneration']);
            $remuneration = str_replace(',', '.', $remuneration);

            $data = [
                'name'          => $employe['name'],
                'document'      => $employe['document'],
                'marital'       => $employe['marital'],
                'birth'         => $employe['birth'],
                'rg'            => $employe['rg'],
                'address'       => $employe['address'],
                'neighborhood'  => $employe['neighborhood'],
                'city'          => $employe['city'],
                'remuneration'  => $remuneration,
                'office'        => $employe['office'],
                'rule'          => $employe['rule'],
                'start'         => $employe['start']
            ];

            $emReq->update($data);

            DB::commit();
            return redirect()->back()->with('success','Cadastro Atualizado com sucesso');

        }catch (Exception $e) {
            DB::rollBack();
           return redirect()->back()->with('error','Houve um erro interno');
        }
    }

    public function destroy($id)
    {
        try{
            DB::beginTransaction();

            $employe = Employe::findOrFail($id);
            $employe->delete();

            DB::commit();
            return redirect()->back()->with('success','Cadastro deletado com sucesso');
        }catch (Exception $e) {
            DB::rollBack();
           return redirect()->back()->with('error','Houve um erro interno');
        }
    }

}
