<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewsletterController extends Controller
{
    public function index(): View
    {
        $subscribers = Newsletter::latest()->paginate(30);
        return view('admin.newsletters.index', compact('subscribers'));
    }

    public function destroy(Newsletter $newsletter): RedirectResponse
    {
        $newsletter->delete();
        return redirect()->route('admin.newsletters.index')
            ->with('success', 'Subscriber removed.');
    }
}
