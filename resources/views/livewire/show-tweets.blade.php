<div>
    Show Tweets

    <p>{{ $content }}</p><br>

    <form method="post" wire:submit.prevent='create'>
        <input type="text" id='content' name='content' wire:model='content'>
        @error('content')
            {{ $message }}
        @enderror
        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    @foreach($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}
        @if($tweet->likes->count())
            <a href="">Descurtir</a>
        @else
            <a href="">Curtir</a>
        @endif

        <br>
    @endforeach

    <hr>

    <div>
        {{ $tweets->links() }}
    </div>
</div>
