<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Admin dashboard with summary counts.
     */
    public function index(): View
    {
        $counts = [
            'posts'            => Post::count(),
            'categories'       => Category::count(),
            'users'            => User::count(),
            'appointments'     => Appointment::count(),
            'pending_appts'    => Appointment::where('status', 'pending')->count(),
            'contact_messages' => ContactMessage::count(),
            'unread_messages'  => ContactMessage::where('status', 'unread')->count(),
            'newsletters'      => Newsletter::count(),
        ];

        $recentPosts = Post::latest()->take(5)->get();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact('counts', 'recentPosts', 'recentMessages'));
    }
}
