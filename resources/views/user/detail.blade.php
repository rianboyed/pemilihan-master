@extends('layouts.frontend')
@section('title','Dashboard Pemilih')
@section('content')
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Seluruh Calon</h4>
        </div>
        
       
        <div class="card-content">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                            <tr>
                                <th>Paslon</th>
                                <th>Foto</th>
                                <th>Jabatan</th>
                                <th>Name</th>
                                <th>Umur</th>
                                <th>Visi </th>
                                <th>Misi</th>
                               
                            </tr>
                        </thead>

                        @foreach($dt as $kt)
                        <tr>
                            <td rowspan="2">{{$kt->id}}</td>
                            <td><img src="{{url('/')}}/{{$kt->ketua->photo}}" style="width: 200px;"></td>
                            <td>{{$kt->ketua->role}}</td>
                            <td>{{$kt->ketua->nama_calon}}</td>
                            <td>{{$kt->ketua->umur}}</td>
                            <td>{{$kt->ketua->visi}}</td>
                            <td>{{$kt->ketua->misi}}</td>
                        </tr>
                        <tr>
                            <td><img src="{{url('/')}}/{{$kt->wakil->photo}}" style="width: 200px;"></td>
                            <td>{{$kt->wakil->role}}</td>
                            <td>{{$kt->wakil->nama_calon}}</td>
                            <td>{{$kt->wakil->umur}}</td>
                            
                            
                            
                        </tr>
                        @endforeach
                        </table>
                         <div class="col text-center">
                <a href="/voting" class="btn btn-primary">Back</a>
            </div>
                    </div>
                </div>
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection