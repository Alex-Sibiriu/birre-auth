@extends('layouts.admin')

@section('content')
    <h2>Cliente: {{ $client->name }}</h2>
    <a href="{{ route('admin.store_types.show', $client->store_type) }}"><span
            class="badge text-bg-primary">{{ $client->store_type->name }}</span></a>
    <div>{{ $client->city }}</div>
    <div>{{ $client->address }}</div>
@endsection
