@extends('layouts.default')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Menu</h1>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Menu</h4>
                </div>
                <div class="card-body p-0">
                    <form action="{{ route('menu.prosesAdd') }}" method="post">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="" class="form-label">Nama Menu</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Url</label>
                                <input type="text" name="url" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Icon</label>
                                <input type="text" name="icon" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="">-- Pilih Status --</option>
                                    @foreach ($enumValues as $value)
                                        <option value="{{ $value }}">{{ ucfirst($value) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Code</label>
                                <input type="text" name="code" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Sequence</label>
                                <input type="number" name="sequence" class="form-control" required>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit"class="btn btn-primary">Tambah</button>
                            <a href="{{ route('menu.index')}}" class="btn btn-secondary"> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection