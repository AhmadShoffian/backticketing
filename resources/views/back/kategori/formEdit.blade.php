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
            <div class="card-body p-0">
                <form action="{{ route('topic.prosesEdit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $topic->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $topic->description }}">
                    </div>
                    <input type="text" name="id" value="{{ $topic->id }}" hidden>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="{{ route('topic.index') }}" class="btn btn-danger">Kembali</a>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection