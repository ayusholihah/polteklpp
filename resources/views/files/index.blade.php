@extends('layouts.adm-main')

@section('content')
<div class="container">
    <br><br><br><br><br>
    <h2>Daftar File (Admin)</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('files.create') }}" class="btn btn-md btn-success mb-2">UPLOAD FILE</a>

    <form method="GET" action="{{ route('files.index') }}" class="form-inline my-2 my-lg-0">
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Cari file..." value="{{ request()->input('keyword') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA FILE</th>
                <th>TIPE FILE</th>
                <th>UKURAN (KB)</th>
                <th>TANGGAL DITAMBAHKAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rsetFiles as $index => $file)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $file->title }}</td>
                    <td>{{ strtoupper($file->file_type) }}</td>
                    <td>{{ number_format($file->file_size / 1024, 2) }}</td>
                    <td>{{ $file->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('files.download', $file->id) }}" class="btn btn-sm btn-dark">Download</a>
                        <form action="{{ route('files.destroy', $file->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $rsetFiles->links('pagination::bootstrap-5') !!}
</div>
@endsection
