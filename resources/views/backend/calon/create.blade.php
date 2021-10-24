@extends('layouts.backend')
@section('title','Add Calon')
@section('content')
<div class="row" >
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Calon Ketua</h4>
            </div>

            <div class="card-content">
                <div class="card-body">
                    <form action="{{route('calon.store')}}" enctype="multipart/form-data" method="POST" class="form form-vertical">
                        @csrf


                        <div class="form-body">
                            <span id="add">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nama Calon</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="add_calon[0][nama_calon]" placeholder="Nama Calon" required="">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="email-id-vertical">Umur</label>
                                            <input type="number" id="email-id-vertical" class="form-control" name="add_calon[0][umur]" placeholder="Umur" required=" required">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Kelamin</label>
                                        <select name="add_calon[0][kelamin]" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                   <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Jabatan</label>
                                        <select name="add_calon[0][role]" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="Ketua">Ketua</option>
                                            <option value="Wakil">Wakil</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="urut_id">Nomor Urutan</label>
                                      <select id="urut_id" name="urut_id" class="form-control @error('urut_id') is-invalid @enderror select2bs4" required>
                                        <option value="">-- Pilih No Urut --</option>
                                        <option value="9">Semua</option>
                                        @foreach ($urut as $data)
                                          <option value="{{ $data->id }}">{{ $data->isi}}</option>
                                        @endforeach
                                      </select>
                                    </div>


                                    </div>

                                    <form>
                                        <div class="form-group">
                                            <label>Visi</label>
                                            <textarea name="visi" id="first-name-vertical" class="form-control" rows="4" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Misi</label>
                                            <textarea name="misi" id="first-name-vertical" class="form-control" rows="4" required></textarea>
                                        </div>
                                       
                                   </form>

                                     <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="email-id-vertical">Upload Foto</label>
                                            <input type="file" name="photo">
                                        </div>
                                    </div>

                                </span>
                               <div class="form-group row mb-0">
                                      <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                          Submit
                                        </button>
                                    
                                    </div>
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



@section('scripts')
    <script type="text/javascript">
        // Add Form
        var a =0;
        $(document).on('click','#add_form', function (){
            ++a;

            $("#add").append('<span class="removes"><div class="divider col-10"><div class="divider-text">Wakil</div></div><div class="row"><div class="col-lg-5"><div class="form-group"><label for="first-name-vertical">Nama Wakil</label><input type="text" id="first-name-vertical" class="form-control" name="add_calon['+a+'][nama_calon]" placeholder="Nama Calon"></div></div><div class="col-lg-5"><div class="form-group"><label for="email-id-vertical">Umur Wakil</label><input type="number" id="email-id-vertical" class="form-control" name="add_calon['+a+'][umur]" placeholder="Umur"></div></div><div class="col-lg-5"><div class="form-group"><label for="contact-info-vertical">Kelamin</label><select name="add_calon['+a+'][kelamin]" class="form-control"><option value="">Pilih</option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select></div></div><div class="col-lg-5"><div class="form-group"><label>Sebagai</label><input type="text" class="form-control" name="add_calon['+a+'][role]" value="Wakil" readonly></div></div></span> <div class="col-lg-1"><div class="form-group"> <label> Delete</label><input type="button" id="remove-col" class="form-control remove-col" value="-"></div></div><div class="col-lg-12"><button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button><button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button></div> </div>');
        });

        $(document).on('click', '.remove-col', function () {
            $(this).parents('.removes').remove(); 
        });
    </script>
@endsection