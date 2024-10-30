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
                            <h3>Halaman Tambah Data Produk</h3>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="/produk/simpan" method="post">
                        @csrf 
                        <div class="mb-3">
                            <label for="" class="form-label">Gambar</label>
                            <input
                                type="file"
                                class="form-control"
                                name="gambar"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Produk</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_produk"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input
                                type="text"
                                class="form-control"
                                name="harga"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Stok</label>
                            <input
                                type="text"
                                class="form-control"
                                name="stok"
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