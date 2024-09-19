@extends('layouts.app')

@section('title', 'Clustering')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"></h1>
        <div>
            <a href="{{ route('clustering.create') }}" class="btn btn-outline-success">Tambah Data</a>
            <button onclick="printTable()" class="btn btn-outline-warning">Print</button>
        </div>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="clusteringTable" class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th class="align-middle">No.</th>
                <th class="align-middle">Distance C1</th>
                <th class="align-middle">Distance C2</th>
                <th class="align-middle">Distance C3</th>
                <th class="align-middle">Min. Distance</th>
                <th class="align-middle">Cluster</th>
                <th class="align-middle">Actions</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($clusterings as $clustering)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ number_format($clustering->distance_c1, 8) }}</td>
                        <td>{{ number_format($clustering->distance_c2, 8) }}</td>
                        <td>{{ number_format($clustering->distance_c3, 8) }}</td>
                        <td>{{ number_format($clustering->min_distance, 8) }}</td>
                        <td>{{ $clustering->cluster }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('clustering.show', $clustering->id) }}" type="button"
                                    class="btn btn-outline-secondary">Detail</a>
                                <a href="{{ route('clustering.edit', $clustering->id) }}" type="button"
                                    class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route('clustering.destroy', $clustering->id) }}" method="POST" type="button"
                                    class="btn btn-outline-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <script>
        function printTable() {
            var divToPrint = document.getElementById('clusteringTable').cloneNode(true);
            var actionsHeader = divToPrint.querySelector('th:nth-child(7)');
            actionsHeader.parentNode.removeChild(actionsHeader);

            var rows = divToPrint.querySelectorAll('tr');
            rows.forEach(function(row) {
                var actionCell = row.querySelector('td:nth-child(7)');
                if (actionCell) {
                    actionCell.parentNode.removeChild(actionCell);
                }
            });

            var newWin = window.open('', '_blank');
            newWin.document.open();
            newWin.document.write('<html><head><title>Print</title>');
            newWin.document.write('<style>');
            newWin.document.write('table { border-collapse: collapse; width: 100%; }');
            newWin.document.write('table, th, td { border: 1px solid black; }');
            newWin.document.write('th, td { padding: 8px; text-align: left; }');
            newWin.document.write('</style>');
            newWin.document.write('</head><body>');
            newWin.document.write('<h1>Clustering</h1>');
            newWin.document.write(divToPrint.outerHTML);
            newWin.document.write('</body></html>');
            newWin.document.close();
            newWin.print();
        }
    </script>
@endsection
