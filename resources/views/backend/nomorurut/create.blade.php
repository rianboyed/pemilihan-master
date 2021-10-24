@extends('layouts.backend')
@section('title','Add Nomor Urutan Paslon')
@section('content')
<div class="row" >
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Nomor Paslon</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{route('urutan.store')}}" method="POST" class="form form-vertical">
                        @csrf
                        <div class="form-body">
                            <span id="add">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="first-name-vertical">No Urutan Paslon</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="isi" placeholder="Pengalaman" required="">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row mb-0">
                                      <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                          Submit
                                        </button>
                                    
                                        
                                </span>
                               
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