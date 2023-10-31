@extends('rentcarr.index_master')
@section('content')
<main id="main">
    <section class="login-register h-100 gradient-form" style="background-color: #eee;">
        <div class="wrap h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-12">
                    <div class="card text-black">
                        <!-- <div class="row g-0"> -->
                        <div class="row">
                            <div class="col-lg-6 left">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="section-header">
                                        <h2>Masuk</h2>
                                    </div>
                                    <!-- <div class="text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                          </div> -->

                                    <form>
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis
                                                lorem
                                                ut libero malesuada feugiat.</p>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Username</label>
                                            <input type="email" id="form2Example11" class="form-control"
                                                placeholder="" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" id="form2Example22" class="form-control" />
                                        </div>
                                        <div class="login-register-button">
                                            <button class="btn-login-register"
                                                onclick="window.location.href = 'detailkendaraan.html';">Masuk</button>
                                        </div>

                                        <div class="lupa-password d-flex align-items-center pb-4">
                                            <p class="mb-0 me-2">Lupa password? <span>Klik disini</span></p>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 right d-flex  gradient-custom-2">
                                <div class="text-white p-md-5 mx-md-4">
                                    <div class="section-header">
                                        <h2>Daftar Sekarang</h2>
                                    </div>
                                    <form>
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis
                                                lorem
                                                ut libero malesuada feugiat.</p>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example11">Nama
                                                        Depan</label>
                                                    <input type="email" id="form2Example11" class="form-control"
                                                        placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example11">Nama
                                                        Belakang</label>
                                                    <input type="email" id="form2Example11" class="form-control"
                                                        placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example11">Email</label>
                                                    <input type="email" id="form2Example11" class="form-control"
                                                        placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <div class="form-outline mb-4">
                                                        <label class="form-label" for="form2Example11">No.
                                                            Telepon/Whatsapp</label>
                                                        <input type="email" id="form2Example11" class="form-control"
                                                            placeholder="" />
                                                    </div> -->
                                                    <label class="form-label" for="form2Example11">Telepon/Whatsapp</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-default">+62</span>
                                                    <input type="text" class="form-control"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example11">Password</label>
                                                    <input type="email" id="form2Example11" class="form-control"
                                                        placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example11">Konfirmasi
                                                        Passsword</label>
                                                    <input type="email" id="form2Example11" class="form-control"
                                                        placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="login-register-button">
                                            <button class="btn-login-register"
                                                onclick="window.location.href = 'detailkendaraan.html';">Daftar</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="login-register" class="login-register">
            <div class="container-fluid">
                <div class="login-register">
                    <div class="split left">
                        <div class="konten">
                            <div class="section-header">
                                <h2>Masuk</h2>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. </p>
                            </div>
                        </div>
                    </div>

                    <div class="split right">
                        <div class="konten">
                            <div class="section-header">
                                <h2>Daftar Sekarang</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
</main>
@endsection
