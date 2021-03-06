@extends('layouts.app')

@section('content')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form action="/surat/simpan" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-3">
                                    <main class="form-signin">
                                        <form>
                                            <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Buat Surat</h1>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="tujuan_surat" id="floatingInput">
                                            <label for="floatingInput">Tujuan Surat</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="nama_mitra" id="floatingInput">
                                            <label for="floatingInput">Nama Mitra</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="alamat_mitra" id="floatingInput">
                                            <label for="floatingInput">Alamat Mitra</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="keterangan" id="floatingInput">
                                            <label for="floatingInput">Keterangan</label>
                                            </div>

                                            <div class="dropdown mb-3">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Pilih Surat
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="/surat/tambahtugas">Surat Tugas</a></li>
                                                <li><a class="dropdown-item" href="/surat/tambahpersonalia">Surat Personalia</a></li>
                                                <li><a class="dropdown-item" href="/surat/tambahketerangan">Surat Keterangan</a></li>
                                            </ul>
                                            </div>

                                            <button class="w-100 btn btn-lg btn-primary btn-success text-dark" type="submit" value="Simpan">Kirim</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


