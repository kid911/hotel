@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6">

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name"
                            placeholder="Masukkan nama" name="name" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username"
                            placeholder="Masukkan Username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email"
                            placeholder="Masukkan Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password"
                            placeholder="Masukkan Password" name="password">
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Daftar</button>
                </form>
                <small class="d-block text-center mt-3">
                    Sudah Punya Akun? <a href="/">Login Sekarang!</a>
                </small>
            </main>

        </div>
    </div>
@endsection
