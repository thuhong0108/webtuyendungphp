    <?php
    include('./partials/header.php');
    ?>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bg-container"><img src="./img/hinh-anh.jpg" alt="" width="100%" height="100%"></div>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Chào mừng bạn </h1>
                            <p>Bạn đang cần một công việc thích hợp hãy tìm kiếm </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-container"><img src="./img/hinh-anh.jpg" alt="" width="100%" height="100%"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Tạo hồ sơ </h1>
                            <p>Để nhà tuyển dụng có thể nhìn thấy bạn </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-container"><img src="./img/hinh-anh.jpg" alt="" width="100%" height="100%"></div>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Đăng Nhập</h1>
                            <p>Để tìm hiểu nhiều vấn đề mà bạn đang thắc mắc </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="avt" src="./img/2.jpg"  width="140" height="140">
                    <h2> </h2>
                    <p>Họ tên: Nguyễn Văn A</p>
                    <p>Năm sinh: 10/02/2000</p>
                    <p>Giới tính: Nam</p>
                    <p>Địa chỉ: 01 An Dương Vương</p>
                    <p>Sdt: 012345678</p>
                    <p><a class="btn btn-secondary" href="chitietnguoidung.php">Xem chi tiết &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="avt" src="./img/2.jpg"  width="140" height="140">
                    <h2> </h2>
                    <p>Họ tên: Nguyễn Văn A</p>
                    <p>Năm sinh: 10/02/2000</p>
                    <p>Giới tính: Nam</p>
                    <p>Địa chỉ: 01 An Dương Vương</p>
                    <p>Sdt: 012345678</p>
                    <p><a class="btn btn-secondary" href="#">Xem chi tiết &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="avt" src="./img/2.jpg"  width="140" height="140">
                    <h2> </h2>
                    <p>Họ tên: Nguyễn Văn A</p>
                    <p>Năm sinh: 10/02/2000</p>
                    <p>Giới tính: Nam</p>
                    <p>Địa chỉ: 01 An Dương Vương</p>
                    <p>Sdt: 012345678</p>
                    <p><a class="btn btn-secondary" href="#">Xem chi tiết &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Bạn đang cần </h2>
                    <p class="lead">Công việc phù hợp với lối sống nhù cầu hiện tại</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Ngành nghề <span class="text-muted">Đang hot</span></h2>
                    <p class="lead">Được nhiều bạn trẻ đón nhận đông đảo</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>
        <!-- /.container -->


<?php
    include './partials/footer.php';