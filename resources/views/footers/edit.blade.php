@extends('layouts.dashboard')

@section('title')
    Edit Informasi Footer
@endsection

@section('content')
 <div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
             <form action="{{ route('footers.update', ['footer' => $footer]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="input_about" class="font-weight-bold">
                       Tentang
                    </label>
                    <textarea id="input_about" name="about" type="text"
                       class="form-control">{{ $footer->about }}</textarea>
                 </div>
                 <div class="form-group">
                     <label for="input_address" class="font-weight-bold">
                        Alamat
                     </label>
                     <textarea id="input_address" name="address" type="text"
                        class="form-control">{{ $footer->address }}</textarea>
                  </div>
                  <div class="form-group">
                     <label for="input_phone" class="font-weight-bold">
                        No HP
                     </label>
                     <input id="input_phone" value="{{ $footer->phone }}" name="phone" type="text"
                        class="form-control" 
                        placeholder="No HP" />
                  </div>
                  <div class="form-group">
                     <label for="input_email" class="font-weight-bold">
                        Email
                     </label>
                     <input id="input_email" value="{{ $footer->email }}" name="email" type="text"
                        class="form-control"
                        placeholder="Email" />
                  </div>
                 <div class="float-right">
                     <button type="submit" class="btn btn-primary px-4">Update</button>
                 </div>
             </form>
          </div>
       </div>
    </div>
 </div> 
@endsection