@extends('layouts.backend')
@section('title','Calon')
@section('content')
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Seluruh Calon</h4>
        </div>
        <div class="col text-center">
                <a href="{{url('calon/create')}}" class="btn btn-primary">Tambah Calon</a>
            </div>
        <div class="card-content">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Images</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Jabatan</th>
                                <th>kelamin</th>
                                <th>Status</th>
                                <th>No. Urut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                            ?>
                            @foreach ($calon as $item)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td><img src="{{ $item->photo }}" style="width: 100px;"></td>
                                    <td>{{$item->nama_calon}}</td>
                                    <td>{{$item->umur}}</td>
                                    <th>{{ $item->role}}</th>
                                    <td>{{$item->kelamin}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->urut_id}}</td>
                                    <td>
                                    <form action="{{ url('calon.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            
                            <a href="/calon/{{ $item->id }}/edit" class="btn btn-success btn-sm nav-icon fas fa-pencil ">Edit</a>
                            
                  
                           <a href="/calon/hapus/{{ $item->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"> Hapus</i>
                                    </a>
                        </form>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            ?>
                            @endforeach
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal-->

</div>
@endsection