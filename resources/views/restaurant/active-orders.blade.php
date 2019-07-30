@extends('layouts.restaurant-layout')

@section('content')
    <div class="card">
        <div class="card-header card-header-danger">
            <h4 style="font-size: 25px;">Comenzi active</h4>
        </div>
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nume utilizator</th>
                    <th>Numar de telefon</th>
                    <th>Status</th>
                    <th>Adresa</th>
                    <th>Produse</th>
                    <th>Observatii</th>
                    <th>Actiuni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $key => $order)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>{{ $order -> user -> name }}</td>
                        <td>{{ $order -> user -> phone_number }}</td>
                        <td><span class="badge badge-pill badge-success">Platita</span></td>
                        <td>{{ $order -> address }}</td>
                        <td>
                            @foreach ($order -> products as $key => $product)
                                <span class="badge badge-pill badge-danger">{{ $product -> name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $order -> description }}</td>
                        <td class="td-actions text-right">
                            <a href="{{ route('restaurant-complete-order',['order_id' => $order -> id]) }}">
                                <button type="button" rel="tooltip" class="btn btn-success">
                                    <i class="material-icons">done</i> Finalizeaza
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection