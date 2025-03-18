@extends('layouts.default')
@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Status</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah Status</h4>
                    </div>
                    <div class="card-body p-0">
                        <form action="{{ route('status.prosesAdd') }}" method="post">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Status</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="description" class="form-control" required></textarea>
                                </div> 
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit"class="btn btn-primary">Tambah</button>
                                <a href="{{ route('status.index')}}" class="btn btn-secondary"> Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </section>
@endsection