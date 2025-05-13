<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:titleBrowser>Page Blog</x-slot:titleBrowser>
    @foreach ($posts as $post )
        <x-article linkHref="/posts/{{ $post->slug }}" titleCard="{{ $post->title }}" authorCard="{{ $post->author }}" contentCard="{{ $post['body'] }}" timeArticle="{{ $post->created_at->diffForHumans() }}"></x-article>
    @endforeach
</x-layout>
