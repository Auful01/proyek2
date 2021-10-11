@extends('layouts.admin.main')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="pull-left mb-5">
            <h5>Data Kategori Barang Loak</h5>
        </div>
        <div class="pull-right mb-5">
            <a href="{{ route('category-junk.create') }}" class="btn btn-primary pull right">Tambah Kategori</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="display dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
                <thead>
                    <tr role="row">
                        <th style="text-align:center" width="20px">No</th>
                        <th style="text-align:center">Name Kategori</th>
                        <th style="text-align:center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $i)
                    <tr role="row" class="even">
                        <td style="text-align:center">{{ $loop->index+1 }}</td>
                        <td style="text-align:center">{{ $i->category_name }}</td>
                        <td>
                            <center>
                                <a href="{{ route('category-junk.edit', $i->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                <form style="display: inline-block;" id="myForm" action="{{ route('category-junk.destroy', $i->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
    
                                    <a href="#" onclick="document.getElementById('myForm').submit();" class="btn btn-sm btn-danger">Hapus</a>
                                </form>
                            </center>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
