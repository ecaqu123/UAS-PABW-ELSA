@extends('layouts.dashboard')

@section('title')
    Tambah Informasi Footer
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
             <form action="{{ route('footers.store') }}" method="POST">
                @csrf
                <div class="form-group">
                   <label for="input_about" class="font-weight-bold">
                      Tentang
                   </label>
                   <textarea id="input_about" value="{{ old('about') }}" name="about" type="text"
                      class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="input_address" class="font-weight-bold">
                       Alamat
                    </label>
                    <textarea id="input_address" value="{{ old('address') }}" name="address" type="text"
                       class="form-control"></textarea>
                 </div>
                 <div class="form-group">
                    <label for="input_phone" class="font-weight-bold">
                       No HP
                    </label>
                    <input id="input_phone" value="{{ old('phone') }}" name="phone" type="text"
                       class="form-control"
                       placeholder="No HP" />
                 </div>
                 <div class="form-group">
                    <label for="input_email" class="font-weight-bold">
                       Email
                    </label>
                    <input id="input_email" value="{{ old('email') }}" name="email" type="text"
                       class="form-control"
                       placeholder="Email" />
                 </div>
                <div class="float-right">
                	<a class="btn btn-primary px-4" href="{{ route('footers.index') }}">Kembali</a>
                	<button type="submit" class="btn btn-danger px-4">Simpan</button>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div> 
@endsection