@extends('base-card')
@section('title')
    <h3 class="title-1">Usuarios</h3>
@endsection
@section('buttons')
@endsection
@section('body')
    <table class="table-1">
        <thead>
            <tr class="text-left">
                <th></th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Permisos</th>
                <th>Último acceso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>
                        <img src="{{ $usuario->profile_photo_url }}" alt="{{ $usuario->name }}"
                            class="rounded-full h-8 w-8 object-cover">
                    </td>
                    <td>
                        <button class="link-primary" wire:click.prevent='editUsuario({{ $usuario }})'>
                            {{ $usuario->name }}
                        </button>
                    </td>
                    <td>{{ $usuario->email }}</td>
                    <td></td>
                    <td class="text-xs">
                        @if ($usuario->last_login_at)
                            <i class="fa-regular fa-calendar-clock"></i> {{ $usuario->last_login_at->format('d/m/Y H:m:i') }}
                        @endif
                        @if ($usuario->last_login_ip)
                            <i class="fa-regular fa-network-wired ml-6"></i> {{ $usuario->last_login_ip }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($editModal)
    @include('livewire.sys.usuarios-edit')
    @endif
@endsection
