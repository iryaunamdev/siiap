@extends('base-modal')

@section('modal-body')
    <form class="p-6">
        <div class="grid grid-cols-4">
            <div x-data="{ photoName: null, photoPreview: null }">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden" wire:model="photo" x-ref="photo"
                    x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->usuario->profile_photo_url }}" alt="{{ $this->usuario->name }}"
                        class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                        x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-6 mr-12 mb-6" type="button" x-on:click.prevent="$refs.photo.click()">
                    <i class="fa-regular fa-camera"></i>
                </x-jet-secondary-button>

                @if ($usuario->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>

            <div class="col-span-3">
                <div class="form-floating mt-4">
                    <input type="text"
                        class="form-control input-floating rounded border-gray-300 @error('name') border-red-600 @enderror"
                        placeholder="Nombre de usuario" wire:model='name'>
                    <label class="text-gray-700">Nombre de usuario</label>
                    @error('name')
                        <p class="msg-error">Campo requerido</p>
                    @enderror
                </div>
                <div class="form-floating mt-4">
                    <input type="text"
                        class="form-control input-floating rounded border-gray-300 @error('email') border-red-600 @enderror"
                        placeholder="Correo electrónico" wire:model='email'>
                    <label class="text-gray-700">Correo electrónico</label>
                    @error('email')
                        <p class="msg-error">Campo requerido</p>
                    @enderror
                </div>
            </div>
        </div>



    </form>
@endsection

@section('modal-footer')
    <button class="btn btn-primary rounded-l mr-1">Guardar</button>
    <button class="btn btn-secondary rounded-r" wire:click="$set('editModal', false)">Cerrar</button>
@endsection
