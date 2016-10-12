@extends('layouts.back')
@section('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
@stop
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h2>Symptoms</h2>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Symptom name</th>
                        <th>Area</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($symptoms as $symptom)
                        <tr>
                            <td>{{ $symptom->id }}</td>
                            <td>{{ $symptom->name }}</td>
                            <td>
                                @if( isset($symptom->bodyArea->name))
                                    {{ $symptom->bodyArea->name }}
                                @else
                                    Not Defined
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        </div>

    <script>
        $('#example').DataTable();
    </script>
@stop