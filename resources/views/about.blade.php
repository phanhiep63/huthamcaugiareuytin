@extends('layouts.customer')

@section('content')
    
    <div class="row" style="background-color: rgb(196, 228, 196);">
        <div class="container pt-5 pb-5 popular-img">
            <ul class="d-flex p-0" style="list-style-type: none;">
                <li class="p-2"><img src="{{ asset('images/thumbnail_01.jpg') }}" alt=""></li>
                <li class="p-2"><img src="{{ asset('images/thumbnail_02.jpg') }}" alt=""></li>
            </ul>
        </div>
    </div>
    <div class="container pt-5 pb-5 bg-white">
        <div class="row">
            <div class="col-12 title-index text-center text-success mb-5">
                <h2>GIÁ CHO HÚT HẦM CẦU, THÔNG CỐNG NGHẸT, THÔNG BỒN CẦU LÀ BAO NHIÊU?</h2><b class="title-line"></b>
            </div>
            <div class="col-md-12 col-12">
                <ul>
                    <li class="text-justify mb-2">
                        <p>Toàn Cầu với đơn giá thông cống nghẹt và các tỉnh thành
                            trên toàn quốc vô cùng ưu đãi. Bảng giá thông tắc cống được chia thành 2 bộ bảng
                            giá
                            khách nhau đó là nhà dân đơn lẻ và các tập thể là xí nghiệp, công ty đặc biệt
                            các
                            tòa nhà chung cư …</p>
                    </li>
                    <li class="text-justify mb-2">
                        <p>Hút hầm cầu cho các tổ chức có số lượng lớn trên 1000
                            khối đơn giá chỉ thầm cầu cho các cá nhân nhà dân mức giá chỉ từ 200k/ khối.</p>
                    </li>
                    <li class="text-justify mb-2">
                        <p>Đối với thông tắc các loại như bồn cầu, bể phốt và đường
                            cống giá chỉ 99k/met.</p>
                    </li>
                    <li class="text-justify mb-2">
                        <p>Các loại máy thông tắc cống với công nghệ tiên tiến và mới
                            nhất</p>
                    </li>
                    <li class="text-justify mb-2">
                        <p>Xe hút bể phốt chuyên dụng đủ chủng loại từ nhỏ đến lớn
                            0,8 – 30 khối.</p>
                    </li>
                    <li class="text-justify mb-2">
                        <p>Số lượng lớn các kỹ thuật viên được thực tiễn về môi
                            trường nhiều năm.</p>
                    </li>
                </ul>
                <div class="col-12 text-center">
                    <a href="tel:0976150170" class="btn btn-success font-weight-bold p-2">GỌI TÔI ĐỂ NHẬN BÁO
                        GIÁ</a>
                </div>
            </div>
        </div>
    </div>
@endsection
