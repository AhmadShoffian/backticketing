@extends('layouts.default')
@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Unit</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit Unit</h4>
                    </div>
                    <div class="card-body p-0">
                        <form action="{{ route('peran.prosesEdit') }}" method="post">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Unit</label>
                                    <input type="text" name="name" class="form-control" value="{{ $unit->name }}" required>
                                </div>
                                <input type="text" name="id" value="{{ $unit->id }}" hidden>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit"class="btn btn-primary">Ubah</button>
                                <a href="{{ route('peran.index')}}" class="btn btn-secondary"> Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection