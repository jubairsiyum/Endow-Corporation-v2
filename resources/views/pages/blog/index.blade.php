@extends('layouts.app')

@section('title', 'Blog – Endow Corporation')
@section('meta_title', 'Blog & Insights – Endow Corporation')
@section('meta_description', 'Read the latest insights, news, and articles from Endow Corporation. Expert perspectives on travel, education, technology, and global business solutions.')

@section('content')

{{-- Hero --}}
<section class="section-gap-hero" style="background-color: var(--color-dark); position: relative; overflow: hidden;">
    <div class="absolute top-[10%] right-[5%] w-[300px] h-[300px] rounded-full opacity-15" style="background: var(--color-primary); filter: blur(65px);"></div>
    <div class="absolute bottom-[10%] left-[8%] w-[250px] h-[250px] rounded-full opacity-10" style="background: #ff6b6b; filter: blur(60px);"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 py-16">
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm" style="color: #a9b8b8;">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="text-white font-medium">Blog</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl lg:text-[56px] font-medium text-white" style="letter-spacing: -0.03em; line-height: 1.135;">
            Blog & <span class="gradient-text">Insights</span>
        </h1>
        <p class="text-lg mt-5 max-w-xl leading-relaxed" style="color: rgba(255,255,255,0.5);">
            Expert perspectives on travel, education, technology, and global business solutions.
        </p>
    </div>
</section>

{{-- Blog Grid --}}
<section class="section-gap" style="background-color: var(--color-body-bg);">
    <div class="max-w-7xl mx-auto px-6">

        @if($posts->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]" data-animate>
                @foreach($posts as $post)
                    <article class="service-card group overflow-hidden p-0">
                        <a href="{{ route('blog.show', $post->slug) }}" class="block">
                            {{-- Featured Image --}}
                            <div class="relative overflow-hidden" style="aspect-ratio: 16/10;">
                                @if($post->featured_image)
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full flex flex-col items-center justify-center" style="background: linear-gradient(135deg, var(--color-dark) 0%, var(--color-dark-2) 100%);">
                                        <i class="fa-solid fa-newspaper text-4xl mb-3" style="color: var(--color-primary); opacity: 0.4;"></i>
                                        <span class="text-xs font-medium" style="color: rgba(255,255,255,0.3);">No Image</span>
                                    </div>
                                @endif
                                {{-- Category Badge --}}
                                <div class="absolute top-4 left-4">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-wider text-white" style="background: var(--color-primary);">
                                        <i class="fa-solid fa-tag text-[9px]"></i>
                                        {{ $post->category }}
                                    </span>
                                </div>
                            </div>

                            {{-- Content --}}
                            <div class="p-7">
                                <h2 class="text-xl font-semibold mb-3 leading-snug transition-colors" style="color: var(--color-text-heading);" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-heading)'">
                                    {{ $post->title }}
                                </h2>
                                <p class="text-sm leading-relaxed mb-5 line-clamp-3" style="color: var(--color-text);">
                                    {{ $post->excerpt }}
                                </p>

                                {{-- Meta --}}
                                <div class="flex items-center justify-between pt-5" style="border-top: 1px dashed var(--color-border-dashed);">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background: rgba(212,32,44,0.08);">
                                            <i class="fa-solid fa-user text-[11px]" style="color: var(--color-primary);"></i>
                                        </div>
                                        <div>
                                            <p class="text-xs font-semibold" style="color: var(--color-text-heading);">{{ $post->author }}</p>
                                            <p class="text-[11px]" style="color: var(--color-text-muted);">{{ $post->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <span class="text-sm font-semibold flex items-center gap-1.5 transition-all" style="color: var(--color-primary);">
                                        Read More
                                        <i class="fa-solid fa-arrow-right text-[11px] transition-transform group-hover:translate-x-1"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            {{-- Pagination --}}
            @if($posts->hasPages())
                <div class="mt-16 flex justify-center" data-animate>
                    {{ $posts->links() }}
                </div>
            @endif
        @else
            <div class="text-center py-20" data-animate>
                <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6" style="background: rgba(212,32,44,0.08);">
                    <i class="fa-solid fa-newspaper text-3xl" style="color: var(--color-primary); opacity: 0.5;"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-3" style="color: var(--color-text-heading);">No Posts Yet</h3>
                <p class="text-base" style="color: var(--color-text-muted);">We're working on great content. Check back soon!</p>
            </div>
        @endif

    </div>
</section>

@endsection
