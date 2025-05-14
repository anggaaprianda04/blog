<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:titleBrowser>Page Blog</x-slot:titleBrowser>
    @foreach ($posts as $post )
        <x-article linkHref="/posts/{{ $post->slug }}" titleCard="{{ $post->title }}" authorCard="{{ $post->author->name }}" categorySlug="{{ $post->category->slug }}" categoryCard="{{ $post->category->name }}" authorId="{{ $post->author->username }}" contentCard="{{ $post['body'] }}" timeArticle="{{ $post->created_at->diffForHumans() }}"></x-article>
    @endforeach
</x-layout>
