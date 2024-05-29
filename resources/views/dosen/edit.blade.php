@extends('layouts.app')


@section('content')
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif
<form action="{{url('dosen/'.$data->nidn)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   <div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Form Edit Dosen</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>nidn</label>
                    <input type="number" class="form-control" name="nidn" value="{{$data->nidn}}" >
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama_dosen" value="{{$data->nama_dosen}}" >
                    <label>alamat</label>
                    <textarea class="form-control" name="alamat" > {{$data->alamat}}</textarea>
                    <label>usia</label>
                    <input type="number" class="form-control" name="usia" value="{{$data->usia}}" ><br>
                   
                    <label>jenis_kelamin</label>
                     <select name="jenis_kelamin" class="custom-select" >
                        <option value="" selected disabled hidden>--Pilih Jenis Kelamin--</option>

                        <option value="Pria" {{ $data->jenis_kelamin == 'Pria' ? 'selected' : '' }}>
                            Pria</option>
                        <option value="Wanita" {{ $data->jenis_kelamin == 'Wanita' ? 'selected' : '' }}>Wanita</option>
</select><br>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">simpan</button>
            </div>
        </div>
    </div>
   </div>
</form>

@endsection
