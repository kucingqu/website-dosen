@extends('layouts/app')
@section('content')

<form action="{{route('dosen.store')}}" method="POST">
    @csrf
   <div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Dosen Alfea Collage</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>nidn</label>
                    <input type="number" class="form-control" name="nidn" >
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama_dosen" >
                    <label>alamat</label>
                    <textarea class="form-control" name="alamat" ></textarea>
                    <label>usia</label>
                    <input type="number" class="form-control" name="usia" ><br>
                   
                    <label>jenis_kelamin</label>
                     <select name="jenis_kelamin" class="custom-select">
                        <option value="" selected disable hidden>--Piilih Jenis Kelamin--</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
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