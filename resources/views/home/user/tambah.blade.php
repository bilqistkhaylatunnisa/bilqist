@extends('layouts.master')
@section('title.user')
@section('content')
<div class="content-wrapper">
    <section class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman tambah data user</h3>
                            <a class="btn btn-primary"href="/user">kembali</a>
                        </div>
                            <div class="card-body">
                                <form action="/user/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                       
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">email</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="email"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                       
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">password</label>
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                       
                                    </div>
                                    <button type="submit" class="btn btn-primary">simpan</button>
                                </form>
                            
                            
                            </div>
                    </div>
                </div>
            </div>       
        </div>
    </section>
</div>
@endsection