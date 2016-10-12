@extends('layouts.back')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h2>Disease Groups</h2>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Disease group name</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($diseaseGroups as $diseaseGroup)
                        <tr>
                            <td>{{ $diseaseGroup->id }}</td>
                            <td>{{ $diseaseGroup->name }}</td>
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