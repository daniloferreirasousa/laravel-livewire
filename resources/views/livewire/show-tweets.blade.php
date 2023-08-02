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
    <div class="flex">
        <div class="w-2/8">
            @if($tweet->user->photo)
                <img src='{{ url("storage/{$tweet->user->poto}") }}' alt="{{ $tweet->user->name }}" class="rounded-full h-8 w-8">
            @else
                <img src='{{ url("imgs/no-photo.png") }}' alt="{{ $tweet->user->name }}" class="rounded-full h-8 w-8">
            @endif
        </div>
        <div class="w-6/8">
            {{ $tweet->user->name }} - {{ $tweet->content }}
            @if($tweet->likes->count())
                <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
            @else
                <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
            @endif
        </div>
    </div>
        


        

        <br>
    @endforeach

    <hr>

    <div>
        {{ $tweets->links() }}
    </div>
</div>
