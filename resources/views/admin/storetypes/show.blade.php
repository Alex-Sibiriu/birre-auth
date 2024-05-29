@extends('layouts.admin')

@section('content')
    <h2>Lista clienti per: {{ $store_type->name }}</h2>
    <ul class="list-group">
        @foreach ($store_type->clients as $client)
            <li class="list-group-item">
                <a href="{{ route('admin.clients.show', $client) }}">{{ $client->name }}</a>
            </li>
        @endforeach

    </ul>
@endsection
