@extends('layouts.back')

@section('content')
    <h2>New Disease Group</h2>
    <form method="POST" action="{{ route('diseaseGroup.store') }}">
        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="exampleInputEmail1">Disease group name</label>
            <input type="text" class="form-control" name="name" placeholder="Disease group">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop