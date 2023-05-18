@foreach ($posts as $post)
<div class="card mb-2"> 
    <div class="card-body">{{ $post->id }} 
        <h5 class="card-title">{{ $post->title }}</h5>
        {!! $post->body !!}
        <a href="https://r6.tracker.network/profile/id/03c6082a-f3a4-49ce-9bc8-0f2e9d8d09a2">link text</a>
    </div>
</div>
@endforeach