@extends('layouts.app')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Topik</h1>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Form Edit Topic</h4>
          </div>
          <div class="card-body p-0">
            <form action="#" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $topic->id ?? '' }}">
          
              <div class="form-group">
                  <label for="" class="form-label">Nama Topik</label>
                  <input type="text" class="form-control" name="name" value="{{ $topic->name ?? '' }}" required>
              </div>
          
              <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                  <a href="{{ route('topic.index') }}" class="btn btn-secondary"> Kembali</a>
              </div>
          </form>
          
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
