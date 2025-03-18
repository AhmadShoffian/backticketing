@extends('layouts.default')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Topik</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Form Tambah Tipe</h4>
            </div>
            <div class="card-body p-0">
              <form action="{{ route('sub_kategori.prosesTambah') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name" class="form-label">Nama Sub Kategori</label>
                    <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                    <div class="form-group">
                        <label for="type" class="form-label">Topik Kategori</label>
                        <select name="topic_id" id="type" class="form-control">
                            <option value="">Pilih Topik Kategori</option>
                            @foreach ($master_topic as $item)
                                <option value="{{ $item->id }}" {{ old('topic_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('topic_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  <a href="" class="btn btn-secondary"> Kembali</a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</section>

@endsection
