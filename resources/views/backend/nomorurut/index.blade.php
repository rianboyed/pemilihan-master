@extends('layouts.backend')
@section('title','Nomor Urutan Paslon')
@section('content')
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Pengalaman</h4>
        </div>
        <div class="col text-center">
                <a href="{{url('urutan/create')}}" class="btn btn-primary">Tambah No Urutan Paslon</a>
            </div>
        <div class="card-content">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Paslon</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                            ?>
                            @foreach ($isi as $item)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$item->isi}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                    <form action="{{ url('urutan.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            
                           
                            
                  
                           <a href="/urutan/hapus/{{ $item->id }}" class="btn btn-danger">Hapus</a>
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
@endsection