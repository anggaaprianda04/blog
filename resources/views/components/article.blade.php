<article class="max-w-screen-md py-8 border-b border-gray-300">
    <a href="{{ $linkHref }}" class="hover:underline hover:duration-150">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $titleCard }}</h2>
    </a>
    <div class="text-base text-gray-500">
        <a href="#">{{ $authorCard }}</a> | 1 Mei 2025
    </div>
    <p class="my-4 font-light">{{ Str::limit( $contentCard, 100) }}</p>
    <a href="{{ $linkHref }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
</article>
