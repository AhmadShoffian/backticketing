@extends('layouts.default')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Kategori Topic</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <form action="{{ route('status.prosesEdit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $status->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description">{{ $status->description }}</textarea>
                </div>
                <input type="text" name="id" value="{{ $status->id }}" hidden>
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="{{ route('status.index') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</section>

@endsection
