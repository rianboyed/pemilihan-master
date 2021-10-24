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
                    <form action="/urutan/{{$urut->id}}" method="POST" class="form form-vertical">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-body">
                            
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nomor Urut</label>
                                            <input name="isi" type="text" id="first-name-vertical" class="form-control" placeholder="isi" value="{{$urut->ketua->isi}}">
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

