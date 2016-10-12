@extends('layouts.back')

@section('content')
    <h2>New Body Area</h2>
    <form method="POST" action="{{ route('bodyArea.store') }}">
        {!! csrf_field() !!}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="exampleInputEmail1">Body Area Name</label>
            <input type="text" class="form-control" name="name" placeholder="Body area name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop