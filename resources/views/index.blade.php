@extends('layout')

@section('content')
    <div class="row">
        <div class="col-9 mt-5 text-center">
            <h1>Seznam klientů</h1>
        </div>
        <div class="col-3 mt-5 mb-5">
            <h6><a href="/create">Nový klient</a></h6>
        </div>
    </div>
    <div class="container">
        @if(count($clients)>0)
        <div class="row font-weight-bold ">
            <div class="col">
                    Jméno
            </div>
            <div class="col">
                    Příjmení
            </div>
            <div class="col">
                    Telefonní číslo
            </div>
            <div class="col">
                    Provolaný čas
            </div>
            <div class="col">
                    Souhlas
            </div>
            <div class="col">
                    Stahnout data
            </div>
        </div>
        @foreach($clients as $client)
        <div class="row mt-1">
                <div class="col">
                    {{$client->name}}
                </div>
                <div class="col">
                    {{$client->last_name}}
                </div>
                <div class="col">
                    {{$client->phone}}
                </div>
                <div class="col">
                    {{$client->call_time}}
                </div>
                <div class="col">
                    {{$client->agree}}
                </div>
                <div class="col">
                    <a href="download/{{$client->name}}" download="{{$client->name}}"><button type="button" class="btn btn-primary">Download</button></a>
                </div>
            </div>
            @endforeach
        @else
            <p>Seznam je prázdny</p>
        @endif
    </div>

@endsection
