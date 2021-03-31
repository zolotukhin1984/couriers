@extends('layouts.layout')

@section('content')
    <p>
        <a class="btn btn-sm btn-outline-secondary" href="{{ route(('couriers.create')) }}">Add new courier</a>
    </p>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Courier List</h1>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 g-3">

                @foreach($couriers as $courier)
                <div class="col" style="background: gray">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="{{ route('couriers.show', ['courier' => $courier->id]) }}">{{ $courier->name . ' ' . $courier->surname }}</a>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('couriers.edit', ['courier' => $courier->id]) }}">
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="color: white; background: red;">
                                        Delete
                                    </button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <ul>
        <li>
            <a href="{{ route('couriers.show', ['courier' => 1]) }}">Jack</a> |
            <a href="{{ route('couriers.edit', ['courier' => 1]) }}">edit</a> |
            <form action="{{ route('couriers.destroy' , ['courier' => 1]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        <li>
            <a href="{{ route('couriers.show', ['courier' => 2]) }}">John</a> |
            <a href="{{ route('couriers.edit', ['courier' => 2]) }}">edit</a> |
            <form action="{{ route('couriers.destroy' , ['courier' => 2]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </li>
        <li>
            <a href="{{ route('couriers.show', ['courier' => 3]) }}">Harry</a> |
            <a href="{{ route('couriers.edit', ['courier' => 3]) }}">edit</a> |
            <form action="{{ route('couriers.destroy' , ['courier' => 3]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </li>
    </ul>
@endsection
