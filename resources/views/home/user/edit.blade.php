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
                            <h3>Halaman Tambah Data User</h3>
                            <a class="btn btn-primary" href="/">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="/user/{{ $user->id }}/update" method="post">
                        @csrf 
                        <div class="mb-3">
                            <label for="" class="form-label">Name User</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                value="{{ $user->name}}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                name="email"
                                id=""
                                 value="{{ $user->email}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input
                                type="text"
                                class="form-control"
                                name="password"
                                id=""
                                 value="{{ $user->password}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection