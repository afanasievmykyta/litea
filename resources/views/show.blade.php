@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="col-2 align-self-end"><a href="/" class="btn btn-light btn-sm">Zpět</a></div>

            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">Jméno{{$client->name}}</li>
                <li class="list-group-item">Příjmení: {{$client->last_name}}</li>
                 <li class="list-group-item">Telefonní číslo: {{$client->phone}}</li>
                 <li class="list-group-item">Provolaný čas: {{$client->call_time}}</li>
                <li class="list-group-item">Souhlas: {{$client->agree}}</li>

              </ul>
              <div>
        </div>
    </div>
</div>
@endsection
