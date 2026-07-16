<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\ContactMessage;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function storeAppointment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'service_type' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
            'page' => 'nullable|string|max:255',
        ]);

        Appointment::create($validated);

        return redirect()->back()->with('success', 'Your appointment request has been submitted successfully. We will contact you soon!');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string|max:2000',
        ]);

        ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Your message has been sent successfully. We will get back to you soon!');
    }

    public function storeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        Newsletter::updateOrCreate(
            ['email' => $validated['email']],
            ['status' => 'active']
        );

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
