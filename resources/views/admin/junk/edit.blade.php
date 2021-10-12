@extends('layouts.admin.main')

@section('content')
<div class="card">
  <div class="card-header">
      <div class="pull-left mb-5">
          <h5>Tambah Data Barang Baru</h5>
      </div>
  </div>
  <div class="card-body">
    <form class="form theme-form" action="{{ route('junk.update', $data->id) }}" method="post">
    @method('patch')
    @csrf
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama Barang</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="junk_name" value="{{ $data->junk_name }}">
              </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kategori Barang</label>
                <div class="col-sm-9">
                    {{ Form::select('category_junk_id', $category, $data->category_junk_id, ['class' => 'form-control digits']) }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Berat</label>
                <div class="col-sm-9">
                    <div class="input-group pill-input-group">
                        <input class="form-control" type="text" name="weight" value="{{ $data->weight }}">
                        <div class="input-group-append"><span class="input-group-text">Kg</span></div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-9">
                    <div class="input-group pill-input-group">
                        <input class="form-control" type="text" name="price" value="{{ $data->price }}">
                        <div class="input-group-append"><span class="input-group-text">Rp</span></div>
                    </div>
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
