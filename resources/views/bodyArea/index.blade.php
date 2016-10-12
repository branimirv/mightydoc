@extends('layouts.back')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h2>Body Areas</h2>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Body Area Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bodyAreas as $bodyArea)
                        <tr>
                            <td>{{ $bodyArea->id }}</td>
                            <td>{{ $bodyArea->name }}</td>
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