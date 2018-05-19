<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $cliente = Cliente::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('documento', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('endereco', 'LIKE', "%$keyword%")
                ->orWhere('telefone', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cliente = Cliente::latest()->paginate($perPage);
        }

        return view('admin.cliente.index', compact('cliente'));
    }


    public function create()
    {
        return view('admin.cliente.create');
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();

        $this->validate($request,Cliente::$rules);
        Cliente::create($requestData);

        return redirect('admin/cliente')->with('flash_message', 'Cliente cadastrado!');
    }


    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('admin.cliente.show', compact('cliente'));
    }


    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('admin.cliente.edit', compact('cliente'));
    }


    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $cliente = Cliente::findOrFail($id);
        $cliente->update($requestData);

        return redirect('admin/cliente')->with('flash_message', 'Cliente atualizado!');
    }


    public function destroy($id)
    {
        Cliente::destroy($id);

        return redirect('admin/cliente')->with('flash_message', 'Cliente excluido!');
    }
}
