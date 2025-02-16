<?php

namespace App\Http\Controllers;

use App\Models\Call;
use Illuminate\Http\Request;

class CallController extends Controller
{
    public function index()
    {
        $calls = call::all();
        return view('call.index', compact('call'));
    }

    public function create()
    {
        return view('call.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'requester' => 'required',
            'status' => 'required|in:opened,in_progress,closed',
        ]);

        $calls = new call($request->all());
        $calls->data_abertura = now();
        $calls->save();

        return redirect()->route('call.index')->with('success', 'Chamado criado com sucesso.');
    }

    public function show(call $calls)
    {
        return view('call.show', compact('call'));
    }

    public function edit(call $calls)
    {
        return view('call.edit', compact('call'));
    }

    public function update(Request $request, call $calls)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'requester' => 'required',
            'status' => 'required|in:opened,in_progress,closed',
        ]);

        $calls->update($request->all());

        return redirect()->route('call.index')->with('success', 'Chamado atualizado com sucesso.');
    }

    public function destroy(call $calls)
    {
        $calls->delete();

        return redirect()->route('call.index')->with('success', 'Chamado excluído com sucesso.');
    }
}
