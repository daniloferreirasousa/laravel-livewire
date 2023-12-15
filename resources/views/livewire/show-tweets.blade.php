<div>
    <h3>O que você está pensando hoje?</h3>

    {{-- Abaixo está um exemplo de Data-Binding, onde o valor que está sendo
        digitado no input é atualizado no parágrafo
    --}}
    <p>{{ $content }}</p><br>

    <form method="post" wire:submit.prevent='create'>
        <input type="text" id='content' name='content' wire:model='content'>
        @error('content')
            {{ $message }}
        @enderror
        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    {{-- Exibição dos Tweet's --}}
    <h2>Feed de Tweet's</h2>

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

    {{-- Links de Páginação --}}
    <div>
        {{ $tweets->links() }}
    </div>
</div>
