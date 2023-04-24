<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ModeloParent;

class parentController extends Controller
{
    public function index()
    {
        $parents = Parents::where('user_id', Auth::id())
            ->where('active', 1)
            ->select('name', 'genre')
            ->get();

        return view('parents.index', compact('parents'));
    }

    public function create()
    {
        return view('parents.create');
    }

    public function store(Request $request)
    {
        Parents::create([
            'user_id'=> Auth::id(),
            'name' => $request->name,
            'genre' => $request->genre,
        ]);

        return redirect()->route('parents.index');
    }

    public function show(string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
            ->where('activate', 1)
            ->where('id', $id)
            ->select('id', 'name', 'genre')
            ->firstorFail();
            return view('parents.show', compact('parent'));
    }

    public function edit(string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('activate', 1)
        ->where('id', $id)
        ->select('id', 'name', 'genre')
        ->firstorFail();

        return view('parents.edit', compact(parent)); 
    }

    public function update(Request $request, string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('activate', 1)
        ->where('id', $id)
        ->select('id', 'name', 'genre')
        ->firstorFail();

        $parent->update([
            'name' => $request->name,
            'genre' => $request->genre

        ]);
        return redirect()->route('parents.show',$id); 
    }

    public function destroy(string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('activate', 1)
        ->where('id', $id)
        ->select('id', 'name', 'genre')
        ->firstorFail();
        $parent->update([
            'active' => false
           

        ]);
        return redirect()->route('parents.index');
    }
}
