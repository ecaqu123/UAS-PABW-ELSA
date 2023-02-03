@extends('layouts.dashboard')

@section('title')
    Dashboard Makanan
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="section-header">
            <a href="{{ route('foods.create') }}" class="btn btn-danger float-right" role="button">
                Tambah
                <i class="fas fa-plus-square"></i>
             </a>
         </div>
    </div>
</div>
<table class="table my-2">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Url Gambar</th>
        <th scope="col">Harga</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($foods as $key => $item)
     <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $item->title }}</td>
        <td>{{ $item->thumb }}</td>
        <td>{{ "$ " . number_format($item->price,2,',','.') }}</td>
        <td>
            <a href="{{ route('foods.edit', ['food' => $item]) }}" class="btn btn-sm btn-info" role="button">
               <i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('foods.destroy', ['food' => $item]) }}" class="d-inline" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-sm btn-danger">
                <i class="fas fa-trash"></i>
                </button>
            </form>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
@endsection