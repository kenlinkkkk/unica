@extends('layouts.full')

@section('title'){{ 'Đăng ký - Unica | VANO' }}@endsection

@section('content')
    <section id="contentReg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10" id="wrapReg">
                    <div class="row bg-white rounded">
                        <div class="col-sm-12 col-md-12">
                            <img src="{{ asset('assets/client/images/logo.png') }}" class="img-fluid d-block m-auto">
                        </div>
                        <div class="col-sm-12 col-md-6 mt-md-4">
                            <div class="card bg-light">
                                <div class="card-header" style="background-color: #F48728;">
                                    <h4 class="text-center text-white">GÓI NGÀY (UN)</h4>
                                </div>
                                <div class="card-body">
                                    <h4 class="text-center" style="color: #F48728;">10.000 VNĐ/NGÀY</h4>
                                    <p class="text-justify">
                                        Thuê bao đăng ký có thể chọn học 3 khóa học bất kỳ trong 5 lĩnh vực. Tham gia tối đa 03 khóa học mỗi ngày.
                                    </p>
                                    <p class="text-justify">
                                        <strong>Tặng 300MB data</strong> truy cập Mobile Internet.
                                    </p>

                                    <a href="#" class="btn btn-success rounded vertical-align-custom-50">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mt-md-4">
                            <div class="card bg-light">
                                <div class="card-header" style="background-color: #0975B4;">
                                    <h4 class="text-center text-white">GÓI MUA LẺ (MUA)</h4>
                                </div>
                                <div class="card-body">
                                    <h4 class="text-center" style="color: #0975B4;">15.000 VNĐ/KHÓA HỌC</h4>
                                    <p class="text-justify" style="line-height: 32px">
                                        Thuê bao chọn học 1 khóa học bất kỳ thuộc 5 lĩnh vực. Không giới hạn số lần mua.
                                    </p>
                                    <p class="text-justify">
                                        <strong>Tặng 500MB data</strong> truy cập Mobile Internet.
                                    </p>

                                    <a href="#" class="btn btn-success rounded vertical-align-custom-50">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 text-center mt-2">
                            <p class="text-black-50">Lưu ý: Gói cước sẽ tự động gia hạn nếu không có yêu cầu hủy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
