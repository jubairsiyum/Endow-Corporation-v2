@extends('layouts.app')

@section('title', $post->title . ' – Endow Corporation')
@section('meta_title', $post->title . ' – Endow Corporation')
@section('meta_description', Str::limit(strip_tags($post->excerpt), 160))
@section('og_title', $post->title)
@section('og_description', Str::limit(strip_tags($post->excerpt), 160))
@if($post->featured_image)
@section('og_image', asset('storage/' . $post->featured_image))
@endif

@section('content')

{{-- Hero --}}
<section class="section-gap-hero" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-[10%] left-[5%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li><a href="{{ route('blog') }}" class="hover:text-white transition-colors">Blog</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium truncate max-w-[200px]">{{ $post->title }}</li>
            </ol>
        </nav>

        <div class="mb-5">
            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-wider text-white" style="background: var(--color-primary);">
                <i class="fa-solid fa-tag text-[9px]"></i>
                {{ $post->category }}
            </span>
        </div>

        <h1 class="text-3xl md:text-4xl lg:text-[48px] font-medium text-white max-w-3xl" style="letter-spacing: -0.03em; line-height: 1.15;">
            {{ $post->title }}
        </h1>

        <div class="flex items-center gap-4 mt-6">
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 rounded-full flex items-center justify-center" style="background: rgba(212,32,44,0.15);">
                    <i class="fa-solid fa-user text-xs" style="color: var(--color-primary-light);"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-white">{{ $post->author }}</p>
                    <p class="text-xs" style="color: rgba(255,255,255,0.45);">{{ $post->created_at->format('F d, Y') }}</p>
                </div>
            </div>
            <div class="w-px h-6" style="background: rgba(255,255,255,0.15);"></div>
            <span class="text-xs" style="color: rgba(255,255,255,0.45);">
                <i class="fa-regular fa-clock mr-1"></i>
                {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
            </span>
        </div>
    </div>
</section>

{{-- Content --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-4xl mx-auto px-6">

        {{-- Featured Image --}}
        @if($post->featured_image)
            <div class="mb-12 rounded-xl overflow-hidden" style="box-shadow: 0 10px 40px rgba(0,0,0,0.08);" data-animate>
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full" style="max-height: 500px; object-fit: cover;">
            </div>
        @endif

        {{-- Article Content --}}
        <article class="prose-content" data-animate>
            <div class="text-base md:text-lg leading-relaxed" style="color: var(--color-text);">
                {!! $post->content !!}
            </div>
        </article>

        {{-- Share & Back --}}
        <div class="mt-12 pt-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6" style="border-top: 1px dashed var(--color-border-dashed);" data-animate>
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors" style="color: var(--color-primary);">
                <i class="fa-solid fa-arrow-left text-[11px]"></i>
                Back to Blog
            </a>

            <div class="flex items-center gap-3">
                <span class="text-sm font-medium" style="color: var(--color-text-muted);">Share:</span>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer"
                   class="w-9 h-9 rounded-lg flex items-center justify-center transition-all"
                   style="background: rgba(212,32,44,0.06); color: var(--color-text-muted);"
                   onmouseover="this.style.background='var(--color-primary)'; this.style.color='white';"
                   onmouseout="this.style.background='rgba(212,32,44,0.06)'; this.style.color='var(--color-text-muted)';">
                    <i class="fa-brands fa-facebook-f text-sm"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer"
                   class="w-9 h-9 rounded-lg flex items-center justify-center transition-all"
                   style="background: rgba(212,32,44,0.06); color: var(--color-text-muted);"
                   onmouseover="this.style.background='var(--color-primary)'; this.style.color='white';"
                   onmouseout="this.style.background='rgba(212,32,44,0.06)'; this.style.color='var(--color-text-muted)';">
                    <i class="fa-brands fa-x-twitter text-sm"></i>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer"
                   class="w-9 h-9 rounded-lg flex items-center justify-center transition-all"
                   style="background: rgba(212,32,44,0.06); color: var(--color-text-muted);"
                   onmouseover="this.style.background='var(--color-primary)'; this.style.color='white';"
                   onmouseout="this.style.background='rgba(212,32,44,0.06)'; this.style.color='var(--color-text-muted)';">
                    <i class="fa-brands fa-linkedin-in text-sm"></i>
                </a>
                <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . url()->current()) }}" target="_blank" rel="noopener noreferrer"
                   class="w-9 h-9 rounded-lg flex items-center justify-center transition-all"
                   style="background: rgba(212,32,44,0.06); color: var(--color-text-muted);"
                   onmouseover="this.style.background='var(--color-primary)'; this.style.color='white';"
                   onmouseout="this.style.background='rgba(212,32,44,0.06)'; this.style.color='var(--color-text-muted)';">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Related Posts --}}
@if($relatedPosts->count())
<section class="section-gap" style="background-color: var(--color-section-alt);">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-[52px]" data-animate>
            <div class="section-subtitle justify-center" style="color: var(--color-primary);">
                <i class="fa-solid fa-newspaper"></i>
                Latest Articles
            </div>
            <h2 class="section-heading">Related <span style="color: var(--color-primary);">Posts</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]" data-animate>
            @foreach($relatedPosts as $related)
                <article class="service-card group overflow-hidden p-0">
                    <a href="{{ route('blog.show', $related->slug) }}" class="block">
                        <div class="relative overflow-hidden" style="aspect-ratio: 16/10;">
                            @if($related->featured_image)
                                <img src="{{ asset('storage/' . $related->featured_image) }}" alt="{{ $related->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center" style="background: linear-gradient(135deg, var(--color-dark) 0%, var(--color-dark-2) 100%);">
                                    <i class="fa-solid fa-newspaper text-3xl mb-2" style="color: var(--color-primary); opacity: 0.4;"></i>
                                    <span class="text-[11px] font-medium" style="color: rgba(255,255,255,0.3);">No Image</span>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-wider text-white" style="background: var(--color-primary);">
                                    <i class="fa-solid fa-tag text-[9px]"></i>
                                    {{ $related->category }}
                                </span>
                            </div>
                        </div>

                        <div class="p-7">
                            <h3 class="text-lg font-semibold mb-3 leading-snug transition-colors" style="color: var(--color-text-heading);" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-heading)'">
                                {{ $related->title }}
                            </h3>
                            <p class="text-sm leading-relaxed mb-5 line-clamp-2" style="color: var(--color-text);">
                                {{ $related->excerpt }}
                            </p>
                            <div class="flex items-center justify-between pt-5" style="border-top: 1px dashed var(--color-border-dashed);">
                                <div class="flex items-center gap-2">
                                    <div class="w-7 h-7 rounded-full flex items-center justify-center" style="background: rgba(212,32,44,0.08);">
                                        <i class="fa-solid fa-user text-[10px]" style="color: var(--color-primary);"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold" style="color: var(--color-text-heading);">{{ $related->author }}</p>
                                        <p class="text-[11px]" style="color: var(--color-text-muted);">{{ $related->created_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                                <i class="fa-solid fa-arrow-right text-sm transition-transform group-hover:translate-x-1" style="color: var(--color-primary);"></i>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
