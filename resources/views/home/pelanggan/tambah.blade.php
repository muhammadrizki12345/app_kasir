@extends('layouts.master');
@section('title','user');
@section('content')

<div class="content-wrapper">
    <section class="contet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Pelanggan</h3>
                            <a class="btn btn-primary" href="/pelanggan/tambah">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="/pelanggan/simpan" method="post">
                        @csrf 
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Pelanggan</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_pelanggan"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input
                                type="text"
                                class="form-control"
                                name="alamat"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">No Telepon</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nomer_telepon"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection