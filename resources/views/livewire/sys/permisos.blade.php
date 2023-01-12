@extends('base-card')

@section('title')
<h3 class="title-1">Permisos y roles</h3>
@endsection

@section('buttons')
    <button class="btn btn-primary rounded"><i class="fa-solid fa-circle-plus"></i> Nuevo Rol</button>
@endsection

@section('body')
<table class="table-1">
    <thead>
        <tr>
            <th class="w-1/12"></th>
            <th class="text-left">Roles</th>
            <th class="w-1/12">Usuarios</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr>
                <td><img src="https://ui-avatars.com/api/?name={{ $role->name }}" alt="{{ $role->name }}"
                    class="rounded-full h-8 w-8 object-cover"></td>
                <td>
                    <button class="link-primary" wire:click.prevent="editRole({{$role}})">{{$role->name}}</button>
                </td>
                <td><i class="fa-solid fa-user"></i> <span class="text-xs">{{count(App\Models\User::role($role->name)->get())}}</span></td>
            </tr>
        @endforeach
    </tbody>
</table>

@if($editModal)
    @include('livewire.sys.permisos-edit')
@endif
@endsection
