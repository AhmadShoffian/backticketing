@extends('layouts.default')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Topik</h1>
    </div>

    <div class="row">
      {{-- <div class="col-lg-5 col-md-12 col-12 col-sm-12">
        <form method="post" class="needs-validation" novalidate="">
          <div class="card">
            <div class="card-header">
              <h4>Quick Draft</h4>
            </div>
            <div class="card-body pb-0">
              <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
                <div class="invalid-feedback">
                  Please fill in the title
                </div>
              </div>
              <div class="form-group">
                <label>Content</label>
                <textarea class="summernote-simple"></textarea>
              </div>
            </div>
            <div class="card-footer pt-0">
              <button class="btn btn-primary">Save Draft</button>
            </div>
          </div>
        </form>
      </div> --}}
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Form Tambah Topic</h4>
          </div>
          <div class="card-body p-0">
            <form action="{{ route('topic.prosesTambah') }}" method="post">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="" class="form-label">Nama Topik</label>
                    <input type="text" name="nama_topik" class="form-control" required>
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>               
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('topic.index')}}" class="btn btn-secondary"> Kembali</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection