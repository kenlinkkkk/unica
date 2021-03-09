@extends('layouts.full')

@section('title'){{ 'Đăng nhập - Unica | VANO' }}@endsection

@section('content')
    <section id="contentReg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6" id="wrapReg">
                    <div class="row bg-white rounded">
                        <div class="col-sm-12 col-md-12">
                            <img src="{{ asset('assets/client/images/logo.png') }}" class="img-fluid d-block m-auto">
                            <h4 class="text-center mt-2">ĐĂNG NHẬP</h4>
                        </div>
                        <div class="col-sm-12 col-md-12 text-center mt-2">
                            <form method="POST" action="#">
                                @csrf
                                <div class="form-group">
                                    <input type="username" class="form-control" id="username" placeholder="Nhập số điện thoại" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="username" placeholder="Nhập mật khẩu" required>
                                </div>
                                <button type="submit" class="btn btn-primary d-block mt-4 w-100">Đăng nhập</button>
                                <p>Bạn chưa có tài khoản <span><a href="{{ route('home.register') }}" class="text-color-primary pt-4">Đăng ký ngay</a></span></p>
                                <a href="#" class="text-danger">Quên mật khẩu?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
