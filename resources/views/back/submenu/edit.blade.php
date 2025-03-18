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
                    <h4>Form Edit Menu</h4>
                </div>
                <div class="card-body p-0">
                    <form action="{{ route('sub-menu.prosesEdit') }}" method="post">
                    @csrf
                        <div class="card-body">
                            <input type="hidden" name="code" value="{{ $submenu->id }}">
                            <div class="form-group">
                                <label for="" class="form-label">Nama Menu</label>
                                <input type="text" name="name" class="form-control" value="{{ $submenu->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Url</label>
                                <input type="text" name="url" class="form-control" value="{{ $submenu->url }}" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Icon</label>
                                <input type="text" name="icon" class="form-control" value="{{ $submenu->icon }}" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Status</label>
                                <div class="form-group">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" class="form-control" required>
                                        @foreach ($enumValues as $value)
                                            <option value="{{ $value }}" {{ old('status', $submenu->status) == $value ? 'selected' : '' }}>
                                                {{ ucfirst($value) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label for="" class="form-label">Code</label>
                                <input type="text" name="code" class="form-control" value="{{ $submenu->code }}" required>
                            </div>
                            <div class="form-group
                            ">
                                <label for="" class="form-label">Sequence</label>
                                <input type="number" name="sequence" class="form-control" value="{{ $submenu->sequence }}" required>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit"class="btn btn-primary mr-1">Edit</button>
                            <a href="{{ route('sub-menu.index')}}" class="btn btn-secondary"> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection