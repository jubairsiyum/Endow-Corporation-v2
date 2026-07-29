<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    public function index(): View
    {
        $messages = ContactMessage::latest()->paginate(20);
        return view('admin.contact-messages.index', compact('messages'));
    }

    public function show(ContactMessage $message): View
    {
        if ($message->status === 'unread') {
            $message->update(['status' => 'read']);
        }
        return view('admin.contact-messages.show', compact('message'));
    }

    public function updateStatus(Request $request, ContactMessage $message): RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:unread,read,replied,archived',
        ]);

        $message->update(['status' => $request->status]);

        return back()->with('success', 'Message status updated.');
    }

    public function destroy(ContactMessage $message): RedirectResponse
    {
        $message->delete();
        return redirect()->route('admin.contact-messages.index')
            ->with('success', 'Message deleted.');
    }
}
