@extends('layout')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-2 align-self-end"><a href="/" class="btn btn-light btn-sm">Zpět</a></div>
                <div class="card-body">
                    <form action="{{action('FormsController@store')}}" method="POST">
                         <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="name">Jméno</label>
                            <input type="text" class="form-control" id="Name" name="name" placeholder="Jméno" required="required">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Příjmení</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Příjmení" required="required">
                        </div>
                        <div class="form-group">
                                <label for="phone">Telefonní číslo</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefonní číslo" required="required">

                               {{--  <div class="form-row">
                                    <div class="col-xs-3">
                                        <span class="input-group-text" id="inputGroupPrepend2">+420</span>
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="tel" name="phone" class="form-control" value="" size="3" maxlength="3" required="required">
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="tel" name="phone" class="form-control" value="" size="3" maxlength="3" required="required">
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="tel" name="phone" class="form-control" value="" size="3" maxlength="3" required="required">
                                    </div>
                                </div> --}}
                        </div>
                        <div class="form-group">
                            <label for="call_time">Provolaný čas</label>
                            <input type="num" class="form-control" id="call_time" name="call_time" placeholder="Provolaný čas" required="required">
                        </div>
                        <div>
                            <div class="form-group">
                            <label for="agree">Souhlas s nabídkou</label>
                            <div class="form-row">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="agree" id="agree" value="áno">
                            <label class="form-check-label" for="agree">áno</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="agree" id="agree" value="ne">
                            <label class="form-check-label" for="agree">ne</label>
                        </div>
                         </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
