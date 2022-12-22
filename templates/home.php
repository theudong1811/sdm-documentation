<?php $this->layout('theme::layout/00_layout') ?>

<?php $this->start('classes') ?>w-100 h-100 theme-light<?php $this->stop() ?>

<div id="app">
    <nav id="navbar1" class="navbar position-fixed fixed-top navbar-expand-lg">
        <div class="container">
            <a href="/" aria-current="page" class="navbar-brand router-link-exact-active router-link-active" aria-label="Home" target="_self">
                <h1 class="primary-logo">SDM</h1>
            </a>
            <button aria-label="Menu" type="button" class="btn d-lg-none rounded-full btn-secondary collapsed" aria-expanded="false" aria-controls="nav-collapse" style="overflow-anchor: none">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="when-closed svg-inline--fa fa-bars fa-w-14">
                    <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path>
                </svg>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" class="when-opened svg-inline--fa fa-times fa-w-11">
                    <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path>
                </svg>
            </button>
            <div id="nav-collapse" class="navbar-collapse collapse" style="display: none">
                <ul class="navbar-nav ml-auto">
                    <?php
                    foreach ($page['entry_page'] as $key => $node) {
                        echo '<li class="nav-item mr-lg-2"><a target="_self" href="' . $node . '" class="nav-link">' . str_replace("__VIEW_DOCUMENTATION__", "Documentation", $key) . '</a></li>';
                    }
                    ?>
                    <li class="nav-item mr-lg-2">
                        <a href="#" target="_self" class="nav-link">
                            Changelog
                        </a>
                    </li>
                    <li class="nav-item b-nav-dropdown dropdown mr-lg-2" id="__BVID__16">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="__BVID__16__BV_toggle_"><span>Ngôn ngữ</span></a>
                        <div class="dropdown">
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Vietnam</a>
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- <a
                    href="#"
                    class="btn mt-2 mt-lg-0 px-4 py-2 btn-secondary"
                    target="_self"
                >
                    Use online
                </a> -->
            </div>
        </div>
    </nav>
    <div class="wrapper flex-grow-1">
        <div class="home-container">
            <div class="home-wrapper">
                <div class="text-center container">
                    <div class="home-title">
                        Software Development Manager
                    </div>
                    <div class="home-description">
                        Công cụ quản lý tài nguyên phát triển phần mềm.
                        <br />
                        Là một công cụ hoàn toàn miễn phí.
                    </div>
                    <div class="mt-2">
                        <span class="badge text-bg-success">
                            New
                        </span>
                        <strong>
                            Tương thích với phiên bản PHP 8!
                        </strong>
                    </div>
                    <div class="row home-actions justify-content-center">
                        <div class="mx-2 col-5 text-end">
                            <a href="/tool" class="btn px-4 py-3 btn-secondary btn-lg" target="_self"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rocket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2 svg-inline--fa fa-rocket fa-w-16">
                                    <path fill="currentColor" d="M505.12019,19.09375c-1.18945-5.53125-6.65819-11-12.207-12.1875C460.716,0,435.507,0,410.40747,0,307.17523,0,245.26909,55.20312,199.05238,128H94.83772c-16.34763.01562-35.55658,11.875-42.88664,26.48438L2.51562,253.29688A28.4,28.4,0,0,0,0,264a24.00867,24.00867,0,0,0,24.00582,24H127.81618l-22.47457,22.46875c-11.36521,11.36133-12.99607,32.25781,0,45.25L156.24582,406.625c11.15623,11.1875,32.15619,13.15625,45.27726,0l22.47457-22.46875V488a24.00867,24.00867,0,0,0,24.00581,24,28.55934,28.55934,0,0,0,10.707-2.51562l98.72834-49.39063c14.62888-7.29687,26.50776-26.5,26.50776-42.85937V312.79688c72.59753-46.3125,128.03493-108.40626,128.03493-211.09376C512.07526,76.5,512.07526,51.29688,505.12019,19.09375ZM384.04033,168A40,40,0,1,1,424.05,128,40.02322,40.02322,0,0,1,384.04033,168Z" class=""></path>
                                </svg>
                                Đọc tài liệu
                            </a>
                        </div>
                        <div class="mx-2 col-5 text-start">
                            <a href="/docs#/en/command-line" target="_self" class="btn px-4 py-3 btn-secondary btn-lg"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="terminal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="mr-2 svg-inline--fa fa-terminal fa-w-20">
                                    <path fill="currentColor" d="M257.981 272.971L63.638 467.314c-9.373 9.373-24.569 9.373-33.941 0L7.029 444.647c-9.357-9.357-9.375-24.522-.04-33.901L161.011 256 6.99 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L257.981 239.03c9.373 9.372 9.373 24.568 0 33.941zM640 456v-32c0-13.255-10.745-24-24-24H312c-13.255 0-24 10.745-24 24v32c0 13.255 10.745 24 24 24h304c13.255 0 24-10.745 24-24z" class=""></path>
                                </svg>
                                Cài đặt ngay
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <svg viewBox="0 0 1428 174" xmlns="http://www.w3.org/2000/svg" class="home-waves">
                    <g fill="0">
                        <path d="M-2 44c90.728.928 147.91 27.188 291.91 59.912 95.998 21.816 251.69 29.423 467.09 22.821-289.66 73.522-542.66 70.935-759-7.76" opacity=".3"></path>
                        <path d="M98 148.71c177.41-32.474 326.15-52.184 446.2-59.13 120.06-6.946 264.32-3.78 432.8 9.495-47.93 1.049-168.7 19.771-362.3 56.17-193.6 36.397-365.84 34.218-516.7-6.535z" opacity=".3"></path>
                        <path d="M1044 95.652c84.83-22.323 233.08-34.044 393-11.486V164c-167.83-42.056-298.83-64.839-393-68.348z" opacity=".4"></path>
                        <path d="M-3.543 110.035c56.629 19.163 97.751 31.774 123.36 37.83 57.632 13.63 110.47 18.425 148.21 21.594 39.322 3.3 124.6 2.342 188.99-1.796 25.735-1.653 57.702-5.291 95.901-10.911 38.821-6.156 65.446-10.744 79.873-13.761 27.114-5.667 75.702-17.488 90.806-20.863 52.865-11.811 91.234-23.596 128.72-30.224 66.365-11.735 99.352-13.382 154.86-15.472 49.52 1.045 86.205 2.697 110.05 4.955 40.467 3.832 87.385 12.434 114.16 16.917 50.455 8.444 118.95 25.128 205.49 50.05l.305 31.998-1440.1-.321-.664-69.996z"></path>
                    </g>
                </svg>
            </div>
            <div class="home-features" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                <div>
                    <div class="container">

                        <!-- <div class="pt-5 text-center">
                        <h3>Hướng dẫn cài đặt</h3>
                        <div class="row mt-3">
                            <div class="mt-2 col-md">
                                <p class="mb-2">step 1</p>
                                <div class="video-wrapper mx-auto">
                                    <img style="border-radius: 10px" src="<?php echo $config->getImage()[0]; ?>" />
                                </div>
                            </div>
                            <div class="mt-2 col-md">
                                <p class="mb-2">step 2</p>
                                <div class="video-wrapper mx-auto">
                                    <img style="border-radius: 10px" src="<?php echo $config->getImage()[0]; ?>" />
                                </div>
                            </div>
                        </div>
                    </div> -->
                        <!-- <h2 class="pt-5 text-center">
                        Bạn đang lo lắng về ...
                    </h2>
                    <ol class="list-group list-group-flush list-group-numbered">
                        <li class="list-group-item">Bạn không phải một developer những vẫn muốn quản lý tài nguyên của dự án.</li>
                        <li class="list-group-item">Các công cụ khác phí sử dụng quá cao.</li>
                        <li class="list-group-item">Các công cụ khác quá phức tạp.</li>
                    </ol>
                    <h2 class="pt-5 text-center">
                        Với SDM bạn sẽ không phải lo về những vấn đề này
                    </h2> -->
                        <div class="row pt-5 pb-5">
                            <div class="d-flex justify-content-center justify-content-lg-start col-lg-6 order-lg-2">
                                <div class="home-features-img-wrapper">
                                    <img alt="Modularity" src="<?php echo $config->getImage()[1]; ?>" class="rounded shadow" />
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center text-center text-lg-right mt-3 mt-lg-0 col-lg-6 order-lg-1">
                                <h3>Một công cụ hoàn toàn miễn phí</h3>
                                <p>
                                    SDM là một công cụ mã nguồn mở hoàn toàn miễn phí. Bạn chỉ cần tải về và cài đặt là có thể sử dụng.
                                </p>
                            </div>
                        </div>
                        <div class="row pt-5 pb-5">
                            <div class="d-flex justify-content-center justify-content-lg-end col-lg-6">
                                <div class="home-features-img-wrapper">
                                    <img alt="A complete documentation" src="<?php echo $config->getImage()[1]; ?>" class="rounded shadow" />
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center text-center text-lg-left mt-3 mt-lg-0 col-lg-6">
                                <h3>Tập chung thời gian, công việc và con người vào một luồng thời gian</h3>
                                <p>
                                    SDM có thể giúp bạn tập chung con người và thời gian vào một công việc.
                                    <br /><br />Giúp bạn tiết kiệm thời gian và có thể hoàn thành nhiều công việc hơn.
                                </p>
                            </div>
                        </div>
                        <div class="row pt-5 pb-5">
                            <div class="d-flex justify-content-center justify-content-lg-start col-lg-6 order-lg-2">
                                <div class="home-features-img-wrapper">
                                    <img alt="Modularity" src="<?php echo $config->getImage()[1]; ?>" class="rounded shadow" />
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center text-center text-lg-right mt-3 mt-lg-0 col-lg-6 order-lg-1">
                                <h3>Đơn giản hóa công việc của bạn</h3>
                                <p>
                                    SDM sẽ chia công việc của bạn thành nhiều phần. Từ đó có thể quản lý công việc tốt hơn.
                                </p>
                            </div>
                        </div>
                        <div class="row pt-5 pb-5">
                            <div class="d-flex justify-content-center justify-content-lg-end col-lg-6">
                                <div class="home-features-img-wrapper">
                                    <img alt="A complete documentation" src="<?php echo $config->getImage()[1]; ?>" class="rounded shadow" />
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center text-center text-lg-left mt-3 mt-lg-0 col-lg-6">
                                <h3>Giao tiếp với thành viên trong nhóm một cách dễ dàng</h3>
                                <p>
                                    Với chức năng chat từ SDM có thể giúp bạn và thành viên trong nhóm của bạn có thể giao tiếp với nhau một cách nhanh chóng
                                    <!-- <br /><br />Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. -->
                                </p>
                            </div>
                        </div>
                        <div class="row pt-5 pb-5">
                            <div class="d-flex justify-content-center justify-content-lg-start col-lg-6 order-lg-2">
                                <div class="home-features-img-wrapper">
                                    <img alt="Modularity" src="<?php echo $config->getImage()[1]; ?>" class="rounded shadow" />
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center text-center text-lg-right mt-3 mt-lg-0 col-lg-6 order-lg-1">
                                <h3>Upload file dưới nhiều dạng khác nhau</h3>
                                <p>
                                    Bạn có thể upload file dưới nhiều dạng khác nhau trên SDM
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-ready">
                    <div class="container">
                        <h2 class="pt-5 text-center">
                            Các tính năng trong SDM
                        </h2>
                        <div class="row pt-3 pb-5">
                            <div class="my-2 col-4">
                                <div class="card h-100">
                                    <div class="card-body home-features d-flex justify-content-between flex-column">
                                        <h4 class="card-title mb-4">
                                            Quản lý Note
                                        </h4>
                                        <p class="card-text">
                                            Đây là nơi sẽ bắt đầu quy trình quản lý công việc của bạn. Có thể import file ảnh, file pdf, file word hoặc file excel.
                                            <br>
                                            Ngoài ra ở đây bạn có thể import file từ google drive
                                        </p>
                                        <p class="card-text text-right mt-2">
                                            <a href="/docs#/en/command-line" target="_self" class="btn py-2 px-4 btn-secondary" style="background-color: #f8f8f8 !important;">
                                                Install Now
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2 col-4">
                                <div class="card h-100">
                                    <div class="card-body home-features d-flex justify-content-between flex-column">
                                        <h4 class="card-title mb-4">
                                            Quản lý MileStone
                                        </h4>
                                        <p class="card-text">
                                            Tạo ra các cột mốc thời gian giúp bạn có thể chia công việc thành nhiều cột mốc thời gian và hoàn thành theo từng giai đoạn.
                                        </p>
                                        <p class="card-text text-right mt-2">
                                            <a href="#" class="btn py-2 px-4 btn-secondary" style="background-color: #f8f8f8 !important;" target="_self">
                                                Install Now
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2 col-4">
                                <div class="card h-100">
                                    <div class="card-body home-features d-flex justify-content-between flex-column">
                                        <h4 class="card-title mb-4">
                                            Quản lý Version
                                        </h4>
                                        <p class="card-text">
                                            Bạn có thể quản lý các phiên bản của ứng dụng bạn đang phát triển, ngày phát hành của ứng dụng quản lý các feedback của version trước.
                                        </p>
                                        <p class="card-text text-right mt-2">
                                            <a href="#" target="_self" class="btn py-2 px-4 btn-secondary" style="background-color: #f8f8f8 !important;">
                                                Install Now
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2 col-4">
                                <div class="card h-100">
                                    <div class="card-body home-features d-flex justify-content-between flex-column">
                                        <h4 class="card-title mb-4">
                                            Quản lý Request
                                        </h4>
                                        <p class="card-text">
                                            Trong Milestone bạn có thể tạo Request, bạn có thể quản lý các request của mình một cách dễ dàng
                                        </p>
                                        <p class="card-text text-right mt-2">
                                            <a href="#" target="_self" class="btn py-2 px-4 btn-secondary" style="background-color: #f8f8f8 !important;">
                                                Install Now
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2 col-4">
                                <div class="card h-100">
                                    <div class="card-body home-features d-flex justify-content-between flex-column">
                                        <h4 class="card-title mb-4">
                                            Chi tiết Request
                                        </h4>
                                        <p class="card-text">
                                            Đây chính là nơi dùng để quản lý các request một cách chi tiết với các công cụ mạnh mẽ, bạn có thể thêm các Note có liên quan vào trong mục Relate Note.
                                            <br>
                                            Document là nơi để lưu tài liệu của request. Tại đây bạn cũng có thể chat với những người trong team của bạn
                                            
                                            
                                        </p>
                                        <p class="card-text text-right mt-2">
                                            <a href="#" target="_self" class="btn py-2 px-4 btn-secondary" style="background-color: #f8f8f8 !important;">
                                                Install Now
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2 col-4">
                                <div class="card h-100">
                                    <div class="card-body home-features d-flex justify-content-between flex-column">
                                        <h4 class="card-title mb-4">
                                            Chi tiết Request
                                        </h4>
                                        <p class="card-text">
                                            Task là nơi tạo ra các log công việc của bạn, bạn có thể dán URL của ứng dụng bên thứ 3 vào để sử dụng
                                            <br>
                                            Version sẽ tạo ra các change log của request và được tổng hợp lại để hiển thị ra những thay đổi có trong Version của bạn
                                        </p>
                                        <p class="card-text text-right mt-2">
                                            <a href="#" target="_self" class="btn py-2 px-4 btn-secondary" style="background-color: #f8f8f8 !important;">
                                                Install Now
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="container">
                        <h2 class="pt-5 text-center">
                            Các tính năng cập nhật trong tương lai gần
                        </h2>
                        <div class="row pt-3 pb-5">
                            <div class="my-2 col-6">
                                <div class="card h-100">
                                    <div class="card-body d-flex justify-content-between flex-column">
                                        <h4 class="card-title mb-4">
                                            Quản lý Note
                                        </h4>
                                        <p class="card-text">
                                            Cho phép upload file từ những cloud drive khác như Amazone S3, MS Azure, ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2 col-6">
                                <div class="card h-100">
                                    <div class="card-body d-flex justify-content-between flex-column">
                                        <h4 class="card-title mb-4">
                                            Quản lý Task
                                        </h4>
                                        <p class="card-text">
                                            Tích hợp quản lý task từ bên thứ 3 như Odoo, cho phép hiển thị các thông tin của task lên giao diện.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-ready">
                <div class="container">
                    <div class="container">
                        <div class="row pt-5 pb-5">
                            <div class="text-center col">
                                <h3>Bạn gặp vấn đề khi sử dụng SDM?</h3>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Donec
                                    porta leo quis pellentesque sodales.
                                </p>
                                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                                    <a href="#" class="btn mr-lg-1 py-2 px-4 btn-primary" target="_self">
                                        Gửi ticket
                                    </a>
                                    <a href="#" target="_self" class="btn mt-2 mt-lg-0 ml-lg-1 py-2 px-4 btn-secondary">
                                        Liên hệ hỗ trợ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-5 pb-3">
        <div class="container">
            <a class="footer-logo" href="#">
                <h4>Software Development Manager</h4>
            </a>
            <p class="small">
                Version 0.0.1
                <br />
                2022-04-28 22:41
            </p>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p class="text-uppercase font-weight-bold">
                        Resources
                    </p>
                    <ul>
                        <li class="mt-2">
                            <a href="#" rel="noopener" target="_blank" class="btn p-0 border-0 text-left btn-link">
                                Hướng dẫn
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#" rel="noopener" target="_blank" class="btn p-0 border-0 text-left btn-link">
                                Thảo luận
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-6">
                    <p class="text-uppercase font-weight-bold">
                        Tài liệu
                    </p>
                    <ul>
                        <?php
                        foreach ($page['entry_page'] as $key => $node) {
                            echo '<li class="mt-2"><a target="_blank" href="' . $node . '" class="btn p-0 border-0 text-left btn-link">' . str_replace("__VIEW_DOCUMENTATION__", "Documentation", $key) . '</a></li>';
                        }
                        ?>
                        <li class="mt-2">
                            <a href="#" rel="noopener" target="_blank" class="btn p-0 border-0 text-left btn-link">
                                Release notes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-6">
                    <p class="text-uppercase font-weight-bold">
                        Công ty
                    </p>
                    <ul>
                        <li class="mt-2">
                            <a href="#" class="btn p-0 border-0 text-left btn-link" target="_self">
                                Trang chủ
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="btn p-0 border-0 text-left btn-link" target="_self">
                                Github
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright mt-4" style="text-align: center">
            &copy; Copyright 2022, SDM, Kim Giang Technology Development
            JSC
        </div>
    </footer>
</div>