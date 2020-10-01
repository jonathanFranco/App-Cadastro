<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index()
    {
        return Cadastro::all();
    }

    public function store(Request $request)
    {
        Cadastro::create($request->all());
    }

    public function show($id)
    {
        return Cadastro::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cadastro = Cadastro::findOrFail($id);
        $cadastro->update($request->all());
    }

    public function destroy($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        $cadastro->delete();
    }
}
