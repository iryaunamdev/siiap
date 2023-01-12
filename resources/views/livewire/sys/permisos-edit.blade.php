@extends('base-modal')

@section('modal-body')
<form class="p-6">
    <div class="form-floating mt-4">
        <input type="text"
            class="form-control input-floating rounded border-gray-300 @error('name') border-red-600 @enderror"
            placeholder="Nombre del rol" wire:model='name'>
        <label class="text-gray-700">Nombre del rol</label>
        @error('name')
            <p class="msg-error">Campo requerido</p>
        @enderror
    </div>
</form>
@endsection

@section('modal-footer')
    <button class="btn btn-primary rounded-l mr-1" wire:click.prevent="storeRole()">Guardar</button>
    <button class="btn btn-danger mr-1">Eliminar</button>
    <button class="btn btn-secondary rounded-r" wire:click="$set('editModal', false)">Cerrar</button>
@endsection
