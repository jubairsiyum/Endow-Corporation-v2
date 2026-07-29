@extends('admin.layouts.guest')
@section('title', 'Admin Login')

@section('content')
<div class="w-full max-w-[400px]">
    {{-- Logo --}}
    <div class="text-center mb-10">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center mx-auto mb-5 shadow-xl" style="box-shadow:0 8px 32px rgba(239,68,68,0.3);">
            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
        </div>
        <h1 class="text-[22px] font-bold text-white tracking-tight" style="letter-spacing:-0.02em;">Endow Corporation</h1>
        <p class="text-[13px] mt-1.5 font-medium" style="color:#64748B;">Administrator Portal</p>
    </div>

    {{-- Card --}}
    <div style="background:#151A21;border:1px solid rgba(255,255,255,0.06);border-radius:20px;padding:28px;box-shadow:0 12px 40px rgba(0,0,0,0.4);">
        @if($errors->any())
        <div style="display:flex;align-items:center;gap:10px;padding:12px 16px;border-radius:12px;background:rgba(239,68,68,0.08);border:1px solid rgba(239,68,68,0.12);color:#FCA5A5;font-size:13px;margin-bottom:20px;">
            <i class="fa-solid fa-circle-exclamation flex-shrink-0"></i>
            <span>{{ $errors->first() }}</span>
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div style="display:flex;flex-direction:column;gap:16px;">
                <div>
                    <label for="email" style="display:block;font-size:11px;font-weight:600;color:#64748B;text-transform:uppercase;letter-spacing:1.5px;margin-bottom:8px;">Email Address</label>
                    <div style="position:relative;">
                        <i class="fa-solid fa-envelope" style="position:absolute;left:14px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,0.15);font-size:13px;"></i>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                               style="width:100%;background:#1D232D;border:1px solid rgba(255,255,255,0.06);border-radius:12px;padding:11px 14px 11px 40px;font-size:14px;color:#F1F5F9;outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;box-sizing:border-box;"
                               placeholder="admin@endowcorporation.com"
                               onfocus="this.style.borderColor='rgba(239,68,68,0.4)';this.style.boxShadow='0 0 0 3px rgba(239,68,68,0.08)'"
                               onblur="this.style.borderColor='rgba(255,255,255,0.06)';this.style.boxShadow='none'">
                    </div>
                </div>

                <div x-data="{ show: false }">
                    <label for="password" style="display:block;font-size:11px;font-weight:600;color:#64748B;text-transform:uppercase;letter-spacing:1.5px;margin-bottom:8px;">Password</label>
                    <div style="position:relative;">
                        <i class="fa-solid fa-lock" style="position:absolute;left:14px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,0.15);font-size:13px;"></i>
                        <input :type="show ? 'text' : 'password'" name="password" id="password" required
                               style="width:100%;background:#1D232D;border:1px solid rgba(255,255,255,0.06);border-radius:12px;padding:11px 42px 11px 40px;font-size:14px;color:#F1F5F9;outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;box-sizing:border-box;"
                               placeholder="········"
                               onfocus="this.style.borderColor='rgba(239,68,68,0.4)';this.style.boxShadow='0 0 0 3px rgba(239,68,68,0.08)'"
                               onblur="this.style.borderColor='rgba(255,255,255,0.06)';this.style.boxShadow='none'">
                        <button type="button" @click="show = !show" style="position:absolute;right:14px;top:50%;transform:translateY(-50%);background:none;border:none;color:rgba(255,255,255,0.15);cursor:pointer;transition:color 0.15s;" onmouseover="this.style.color='rgba(255,255,255,0.4)'" onmouseout="this.style.color='rgba(255,255,255,0.15)'">
                            <i :class="show ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'" style="font-size:13px;"></i>
                        </button>
                    </div>
                </div>

                <label style="display:flex;align-items:center;gap:10px;cursor:pointer;user-select:none;">
                    <input type="checkbox" name="remember" style="width:16px;height:16px;border-radius:6px;accent-color:#EF4444;cursor:pointer;">
                    <span style="font-size:12px;color:#64748B;">Keep me signed in</span>
                </label>
            </div>

            <button type="submit" style="width:100%;margin-top:24px;background:linear-gradient(135deg,#EF4444,#DC2626);color:white;font-weight:600;font-size:14px;padding:12px;border-radius:12px;border:none;cursor:pointer;transition:all 0.2s;box-shadow:0 4px 16px rgba(239,68,68,0.25);font-family:'Inter',system-ui,sans-serif;"
                    onmouseover="this.style.transform='translateY(-1px)';this.style.boxShadow='0 6px 24px rgba(239,68,68,0.35)'"
                    onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 16px rgba(239,68,68,0.25)'"
                    onmousedown="this.style.transform='scale(0.98)'"
                    onmouseup="this.style.transform='scale(1)'">
                <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i> Sign In
            </button>
        </form>
    </div>

    <p style="text-align:center;font-size:11px;color:rgba(255,255,255,0.12);margin-top:24px;">&copy; {{ date('Y') }} Endow Corporation. All rights reserved.</p>
</div>
@endsection

