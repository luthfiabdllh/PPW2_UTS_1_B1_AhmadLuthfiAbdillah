@extends('layout.layout')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Number</th>
            <th>ID</th>
            <th>Player Name</th>
            <th>Back Number</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_pemain as $data_pemain)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data_pemain->id }}</td>
                <td>{{ $data_pemain->nama_pemain }}</td>
                <td>{{ $data_pemain->nomor_punggung }}</td>
                <td>{{ $data_pemain->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
