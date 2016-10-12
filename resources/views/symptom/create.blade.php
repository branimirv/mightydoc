@extends('layouts.back')

@section('content')
    <h2>New Symptom</h2>
    <form method="POST" action="{{ route('symptom.store') }}">
        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="exampleInputEmail1">Symptom name</label>
            <input type="text" class="form-control" name="name" placeholder="Symptom">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="body_area">Body Area</label>
            <select name="body_area" class="form-control">
                @foreach($bodyAreas as $bodyArea)
                    <option value="{{ $bodyArea->id }}">{{ $bodyArea->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop