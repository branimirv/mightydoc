@extends('layouts.back')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h2>Diseases</h2>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Disease name</th>
                        <th>Disease group</th>
                        <th>Symptoms</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($diseases as $disease)
                        <tr>
                            <td>{{ $disease->id }}</td>
                            <td>{{ $disease->name }}</td>
                            <td>
                                @if( isset($disease->diseaseGroup->name))
                                    {{ $disease->diseaseGroup->name }}
                                @else
                                    Not Defined
                                @endif
                            </td>
                            <td>
                                @foreach($disease->symptoms as $symptom)
                                    {{ $symptom->id }}
                                @endforeach   
                            </td> 
                            <td><a href="{{ route('disease.edit', ['id' => $disease->id]) }}"><i class="fa fa-pencil"></i></a></td>
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