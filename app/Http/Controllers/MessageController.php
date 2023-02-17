<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Response;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();

        return view('welcome', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'subject' => 'required|min:3|max:50',
            'message' => 'required|min:10|max:255',
        ]);

        $message = Message::create($request->all());

        return redirect(route('form.index'))->with('message', 'Message was sent!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);

        return view('show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $message = Message::findOrFail($id);

        return view('edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'subject' => 'required|min:3|max:50',
            'message' => 'required|min:10|max:255',
        ]);

        $message = Message::findOrFail($id);

        $message->update($request->all());

        return redirect(route('form.index'))->with('message', 'Message was successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);

        $message->delete();

        return redirect(route('form.index'))->with('message', 'Message was successfully deleted!');
    }
}
