@extends('admin.layouts.app')
@section('title', 'Edit Profile')
@section('page-title', 'Edit Profile')

@section('content')
<div style="max-width:560px;margin:0 auto;">
<form method="POST" action="{{ route('admin.profile.update') }}">
    @csrf @method('PUT')
    <div class="panel" style="padding:28px;">
        <div style="display:flex;flex-direction:column;gap:20px;">
            <x-admin.input name="name" label="Full Name" :value="auth()->user()->name" required />
            <x-admin.input name="email" type="email" label="Email Address" :value="auth()->user()->email" required />

            <div style="border-top:1px solid var(--border);padding-top:20px;">
                <p style="font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:16px;">Change Password</p>
                <div style="display:flex;flex-direction:column;gap:16px;">
                    <x-admin.input name="current_password" type="password" label="Current Password" />
                    <x-admin.input name="password" type="password" label="New Password" />
                    <x-admin.input name="password_confirmation" type="password" label="Confirm New Password" />
                </div>
            </div>

            <div style="display:flex;align-items:center;gap:12px;padding-top:8px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-check text-xs"></i> Update Profile
                </button>
                <a href="{{ route('admin.dashboard') }}" style="font-size:14px;color:var(--text-tertiary);text-decoration:none;transition:color 0.15s;" onmouseover="this.style.color='var(--text-secondary)'" onmouseout="this.style.color='var(--text-tertiary)'">Cancel</a>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
