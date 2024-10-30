@extends('layouts.master')
@section('title.user')
@section('content')
<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data User</h3>
                            <a class="btn btn-primary"href="/user/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-reponsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">email</th>
                                        <th scope="col">password</th>
                                        <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                           <td><a class="btn btn-warning"href="/user/{{$user->id}}/show">Edit</a>
                                                <a class="btn btn-danger"href="/user/{{$user->id}}/delete"
                                                    onclick="return confirm('yakin akan dihapus?')">Delete</a></td>
                                        </tr>
                                        @endforeach
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