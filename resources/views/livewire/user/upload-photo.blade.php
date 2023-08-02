<div>
    <h1>Atualizar Foto do Perfil</h1>

    <hr>

    @error("photo") {{ $message }} @enderror

    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo"><br>
        <button type="submit">Atualizar Foto</button>
    </form>
</div>
