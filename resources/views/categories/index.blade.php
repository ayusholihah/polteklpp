@extends('layouts.adm-main')

@section('content')
<br><br><br><br><br>
<div class="categories">
    <div class="container">
        <!-- Create Category Button -->
        <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add New Category</a>
        
        <!-- Create File Button -->
        <a href="{{ route('files.create') }}" class="btn btn-primary mb-3">Upload New File</a>
    
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Data Barang</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('barang.index')}}">Barang</a>
                        <a class="collapse-item" href="{{ route('kategori.index')}}">Kategori</a>
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Data Transaksi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('barangmasuk.index')}}">Barang Masuk</a>
                        <a class="collapse-item" href="{{ route('barangkeluar.index')}}">Barang Keluar</a>
                    </div>
                </div>
            </li>
        <div class="sidebar">
            <ul class="categories">
                @foreach ($categories as $category)
                    @include('categories.partials.category', ['category' => $category])
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
