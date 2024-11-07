@extends('layouts.adm-main')

@section('content')
<div class="container">
    <br><br><br><br><br>
    <h1>File Downloads</h1>

    <a href="{{ route('files.index') }}" class="btn btn-success mb-3">Upload File</a>

    @foreach($rsetFiles as $file)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $file->title }}</h5>
            <p>Type: {{ strtoupper($file->file_type) }} | Size: {{ number_format($file->file_size / 1024, 2) }} KB</p>
            <a href="{{ route('files.download', $file->id) }}" class="btn btn-primary">Download</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
