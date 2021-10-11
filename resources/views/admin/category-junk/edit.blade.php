@extends('layouts.admin.main')

@section('content')
<div class="card">
  <div class="card-header">
      <div class="pull-left mb-5">
          <h5>Ubah Data Kategori Barang Baru</h5>
      </div>
  </div>
  <div class="card-body">
    <form class="form theme-form" action="{{ route('category-junk.update', $data->id) }}" method="post">
        @method('patch')
        @csrf
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama Kategori</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="category_name" value="{{ $data->category_name }}">
              </div>
            </div>
        </div>
      </div>
      <div class="col-sm-9 offset-sm-3">
        <button class="btn btn-pill btn-primary" type="submit">Submit</button>
        <input class="btn btn-pill btn-light" type="reset" value="Cancel">
      </div>
    </form>
  </div>
</div>
@endsection
