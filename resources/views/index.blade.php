@extends('layouts.customer')

@section('content')
    <div class="container bg-white">
        <div class="row pb-5">
            <div id="demo" class="carousel slide w-100" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li style="color:blue;" data-target="#demo" data-slide-to="0" class="active"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('images/1111.jpg') }}" alt="Los Angeles">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="row pb-5 pt-5">
            <div class="col-md-12">
                <h2 class="text-uppercase font-weight-bold text-center">Quy trình hút hầm cầu đạt chuẩn</h2>
            </div>
            <div class="d-flex flex-column justify-content-between" style="align-items: center;">
                <div class="rounded p-5 bg-rounded m-5 w-50" style="background-color: #cef2d8;">
                    <h3 class="text-success pb-1 text-center">1. Tiếp nhận thông tin của khách hàng</h3>
                    <ul>
                        <li>
                            <p class="mb-0">Khi có nhu cầu thông hút hầm cầu, quý khách vui lòng liên hệ
                                hotline: <a style="font-size: 120%;" class="d-inline" href="tel:0976150170">0976
                                    150
                                    170</a>.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">Sau khi tiếp nhận, chúng tôi sẽ cử đội ngũ nhân viên đến trực tiếp
                                để khảo sát và
                                trao
                                đổi với quý khách.</p>
                        </li>
                    </ul>
                </div>
                <div><img src="{{ asset('images/arrow.png') }}" alt=""></div>
                <div class="rounded p-5 bg-rounded m-5 w-50" style="background-color: #cef2d8;">
                    <h3 class="text-success pb-1 text-center">2. Tiến hành khảo sát thực tế</h3>
                    <ul>
                        <li>
                            <p class="mb-0">Nhân viên của chúng tôi sẽ đến trực tiếp để khảo sát.</p>
                        </li>
                        <li>
                            <p class="mb-0">Ngoài ra, sau khi khảo sát, chúng tôi cũng sẽ báo giá chi tiết cho
                                khách hàng.
                                Nếu quý
                                khách
                                đồng ý với mức giá đưa ra, cả hai bên sẽ ký kết hợp đồng và triển khai dịch vụ.
                            </p>
                        </li>
                    </ul>
                </div>
                <div><img src="{{ asset('images/arrow.png') }}" alt=""></div>
                <div class="rounded p-5 bg-rounded m-5 w-50" style="background-color: #cef2d8;">
                    <h3 class="text-success pb-1 text-center">3. Thi công hút hầm cầu</h3>
                    <ul>
                        <li>
                            <p>Tô Nguyễn sẽ điều động nhân viên và trang thiết bị máy móc đến tận nơi để tiến
                                hành thi
                                công dưới sự giám sát của khách hàng.</p>
                        </li>
                    </ul>
                </div>
                <div><img src="{{ asset('images/arrow.png') }}" alt=""></div>
                <div class="rounded p-5 bg-rounded m-5 w-50" style="background-color: #cef2d8;">
                    <h3 class="text-success pb-1 text-center">4. Nghiệm thu kết quả</h3>
                    <p>Sau khi thi công hút hầm cầu, khách hàng sẽ tiến hành nghiệm thu, đánh giá chất lượng.
                        Chúng
                        tôi sẽ thực hiện thông tắc cho đến khi quý khách cảm thấy hài lòng.
                    </p>
                </div>
                <div><img src="{{ asset('images/arrow.png') }}" alt=""></div>
                <div class="rounded p-5 bg-rounded m-5 w-50" style="background-color: #cef2d8;">
                    <h3 class="text-success pb-1 text-center">5. Bàn giao và thanh toán</h3>
                    <p> Cuối cùng, chúng tôi sẽ bàn giao công trình cho khách hàng đồng thời ghi hóa đơn và
                        phiếu
                        bảo hành dịch vụ. Khách hàng tiến hành thanh toán theo đúng báo giá ban đầu.
                    </p>
                </div>
            </div>
        </div>
    </div>
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
            <!-- <div class="col-md-6 col-12">
                            <img class=" img-fluid" src="./images/price.jpg" alt="">
                        </div> -->
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
