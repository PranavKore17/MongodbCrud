<?php

namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\Request;
use MongoDB\Operation\Update;

class User1Controller extends Controller
{
    public function index()
    {
        $user = User1::all();
        return view('user1.index', compact('user'));
    }

    public function create()
    {
        return view('user1.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        User1::create($request->all());
        return redirect()->route('user1.index')->withSuccess('User Added Successfully...!');
    }


    public function show($id)
    {
        $user = User1::findorFail($id);
        return view('user1.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User1::findorFail($id);
        return view('user1.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User1::findorFail($id);
        $user->update($request->all());

        return redirect()->route('user1.index')
            ->withSuccess('Product is updated successfully.');
    }


    public function destroy($id)
    {
        $user = User1::findorFail($id);
        $user->delete();
        return redirect()->route('user1.index')->withSuccess('Product is deleted successfully.');
    }
}
