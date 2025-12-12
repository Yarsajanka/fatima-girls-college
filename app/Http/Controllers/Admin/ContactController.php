<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Content::where('type', 'contact')->first();
        return view('admin.contact.index', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        Content::updateOrCreate(
            ['type' => 'contact'],
            ['content' => $request->content, 'is_active' => true]
        );

        return redirect()->route('admin.contact.index')->with('success', 'Contact details updated successfully.');
    }
}
