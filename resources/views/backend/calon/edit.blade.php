@extends('layouts.backend')
@section('title','Edit Calon')
@section('content')
<div class="row" >
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Calon Ketua</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="/calon/{{$calon->id}}" method="POST" class="form form-vertical">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-body">
                            
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nama Calon</label>
                                            <input name="nama_calon" type="text" id="first-name-vertical" class="form-control" placeholder="Nama Calon" value="{{$calon->nama_calon}}">
                                        </div>

                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="email-id-vertical">Umur</label>
                                            <input type="number" id="email-id-vertical" class="form-control" name="umur" placeholder="Umur" value="{{$calon->umur}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Kelamin</label>
                                        <select name="kelamin" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                     <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Jabatan</label>
                                        <select name="role" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="Ketua">Ketua</option>
                                            <option value="Wakil">Wakil</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                                
                                </div>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

