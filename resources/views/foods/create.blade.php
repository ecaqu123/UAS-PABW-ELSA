@extends('layouts.dashboard')

@section('title')
    Tambah Makanan
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
             <form action="{{ route('foods.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                   <label for="input_title" class="font-weight-bold">
                      Nama Makanan
                   </label>
                   <input id="input_title" value="{{ old('title') }}" name="title" type="text"
                      class="form-control" placeholder="Nama Makanan" />
                </div>
                <div class="form-group">
                    <label for="input_thumb" class="font-weight-bold">
                       Gambar Makanan
                    </label>
                    <input type="file" id="input_thumb" value="{{ old('thumb') }}" accept="image/png, image/gif, image/jpeg" name="thumb"
                       class="form-control" style="padding: 3px" />
                 </div>
                 <div class="form-group">
                    <label for="input_price" class="font-weight-bold">
                       Harga
                    </label>
                    <input id="input_price" value="{{ old('price') }}" name="price" type="number"
                       class="form-control"
                       placeholder="Harga" />
                 </div>
                <div class="float-right">
                	<a class="btn btn-primary px-4" href="{{ route('foods.index') }}">Kembali</a>
                	<button type="submit" class="btn btn-danger px-4">Simpan</button>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div> 
@endsection