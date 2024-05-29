@extends('layouts.admin')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Gradi</th>
                <th scope="col">Quantità</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Clienti</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beers as $beer)
                <tr>
                    <td>{{ $beer->id }}</td>
                    <td>{{ $beer->name }}</td>
                    <td>{{ $beer->volume }}%</td>

                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <form action="{{ route('admin.modify-pieces', $beer) }}" method="POST" class="me-2">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="increment" value="0">
                                <button class="btn btn-primary btn-sm" type="submit"><i
                                        class="fa-solid fa-minus"></i></button>
                            </form>
                            {{ $beer->pieces }}
                            <form action="{{ route('admin.modify-pieces', $beer) }}" method="POST" class="ms-2">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="increment" value="1">
                                <button class="btn btn-primary btn-sm" type="submit"><i
                                        class="fa-solid fa-plus"></i></button>
                            </form>
                        </div>

                    </td>

                    <td>&euro;{{ $beer->price }}</td>
                    <td><a href="{{ route('admin.category.filter', $beer->category) }}">{{ $beer->category->name }}</a></td>
                    <td>
                        @forelse ($beer->clients as $client)
                            <a href="{{ route('admin.clients.show', $client) }}">
                                <span class="badge text-bg-primary">{{ $client->name }}</span></a>

                        @empty
                            -
                        @endforelse

                    </td>
                    <td>Otto</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
