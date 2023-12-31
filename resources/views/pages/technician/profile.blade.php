<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 @extends('layouts.app')

 @section('title', 'IKET - Technician Dashboard')
 
 @section('content')
 <div class="content">
    <div class="container-fluid container-dashboard">
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <form action="{{ route('technician.storeprofile')}}" method="post" class="form-profil" data-toggle="validator" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="alert alert-info alert-dismissible" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-lg-2 control-label">Nama</label>
                        <div class="col-lg-6">
                            <input type="text" name="name" class="form-control" id="name" required autofocus value="{{ $profil->name ?? '' }}">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-lg-2 control-label">Profil</label>
                        <div class="col-lg-4">
                            <input type="file" name="foto" class="form-control" id="foto"
                                onchange="loadFile(event)">
                            <span class="help-block with-errors"></span>
                            <br>
                            <div class="tampil-foto">
                                <img src="" width="200">
                                <img src="{{ url($profil->foto_profil ?? '/') }}" width="200" id="foto_profil">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="old_password" class="col-lg-2 control-label">Password Lama</label>
                        <div class="col-lg-6">
                            <input type="password" name="old_password" id="old_password" class="form-control" 
                            >
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-6">
                            <input type="password" name="password" id="password" class="form-control" 
                            minlength="6">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-lg-2 control-label">Konfirmasi Password</label>
                        <div class="col-lg-6">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" 
                                data-match="#password">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-lg-2 control-label">Nomor Ponsel</label>
                        <label for="no_hp" class="control-label">+62</label>
                        <div class="col-lg-6">
                            <input type="no_hp" name="no_hp" id="no_hp" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
 </div>
<script>
    let loadFile = function (event) {
        let image = document.getElementById("foto_profil");
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endsection

@push('scripts')

<script>
    $(function () {
        $('#old_password').on('keyup', function () {
            if ($(this).val() != "") $('#password, #password_confirmation').attr('required', true);
            else $('#password, #password_confirmation').attr('required', false);
        });
    });

    // $('.form-profil').validator().on('submit', function (e) {
    //         if (! e.preventDefault()) {
    //             $.ajax({
    //                 url: $('.form-profil').attr('action'),
    //                 type: $('.form-profil').attr('method'),
    //                 data: new FormData($('.form-profil')[0]),
    //                 async: false,
    //                 processData: false,
    //                 contentType: false
    //             })
    //             .done(response => {
    //                 $('[name=name]').val(response.name);
    //                 $('.tampil-foto').html(`<img src="{{ url('/') }}${response.foto}" width="200">`);
    //                 $('.img-profil').attr('src', `{{ url('/') }}/${response.foto}`);

    //                 $('.alert').fadeIn();
    //                 setTimeout(() => {
    //                     $('.alert').fadeOut();
    //                 }, 3000);
    //             })
    //             .fail(errors => {
    //                 if (errors.status == 422) {
    //                     alert(errors.responseJSON); 
    //                 } else {
    //                     alert('Tidak dapat menyimpan data');
    //                 }
    //                 return;
    //             });
    //         }
    //     });
</script>
@endpush