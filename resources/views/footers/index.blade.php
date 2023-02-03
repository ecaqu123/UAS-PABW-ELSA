@extends('layouts.dashboard')

@section('title')
    Dashboard Informasi Footer
@endsection

@section('content')
@if ($footers->count() < 1)
<div class="section-header">
    <a href="{{ route('footers.create') }}" class="btn btn-danger float-right" role="button">
        Tambah
        <i class="fas fa-plus-square"></i>
     </a>
 </div>
@endif
 <div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
                @foreach ($footers as $footer)
                <div class="form-group">
                    <label for="input_about" class="font-weight-bold">
                       Tentang
                    </label>
                    <textarea id="input_about" name="about" type="text"
                       class="form-control" readonly>{{ $footer->about }}</textarea>
                 </div>
                 <div class="form-group">
                     <label for="input_address" class="font-weight-bold">
                        Alamat
                     </label>
                     <textarea id="input_address" name="address" type="text"
                        class="form-control" readonly>{{ $footer->address }}</textarea>
                  </div>
                  <div class="form-group">
                     <label for="input_phone" class="font-weight-bold">
                        No HP
                     </label>
                     <input id="input_phone" value="{{ $footer->phone }}" name="phone" type="text"
                        class="form-control" readonly
                        placeholder="No HP" />
                  </div>
                  <div class="form-group">
                     <label for="input_email" class="font-weight-bold">
                        Email
                     </label>
                     <input id="input_email" value="{{ $footer->email }}" name="email" type="text"
                        class="form-control" readonly
                        placeholder="Email" />
                  </div>
                 <div class="float-right">
                     <a class="btn btn-primary px-4" href="{{ route('footers.edit', ['footer' => $footer]) }}">Update</a>
                     <form action="{{ route('footers.destroy', ['footer' => $footer]) }}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE') 
                        <button type="submit" class="btn btn-danger px-4">Hapus</button>
                     </form>
                 </div>
                @endforeach
          </div>
       </div>
    </div>
 </div> 
@endsection