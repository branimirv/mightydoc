@extends('layouts.back')

@section('content')
    <h2>Edit Disease</h2>
    <form method="POST" action="{{ route('disease.update', ['id' => $disease->id]) }}">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PATCH">

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="exampleInputEmail1">Disease name</label>
            <input type="text" class="form-control" name="name" placeholder="Disease" value="{{ $disease->name }}">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="disease_group">Disease Group</label>
            <select name="disease_group" class="form-control">
                @foreach($diseaseGroups as $diseaseGroup)
                    <option value="{{ $diseaseGroup->id }}"
                    @if($disease->diseaseGroup == $diseaseGroup)
                        selected
                    @endif
                        >{{ $diseaseGroup->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="symptoms[]">Symptoms</label>
            <select name="symptoms[]" class="form-control" multiple id="multiple-select">
                @foreach($symptoms as $symptom)
                    <option value="{{ $symptom->id }}"
                        @if( $disease->symptoms->contains($symptom))
                            selected
                        @endif
                    >{{ $symptom->name }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <script>
        $('#multiple-select').select2();
    </script>
@stop