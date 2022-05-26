<?php
    include('./partials/header.php');
    ?>
        <main>
            <div class="py-5 text-center">

                <h2>ĐĂNG KÝ</h2>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">THÔNG TIN ĐĂNG NHẬP</h4>
                <form>

                    <div class="col-12">
                        <label for="email" class="form-label">Email:<span class="text-muted"></span></label>
                        <input type="email" class="form-control" id="email" placeholder="nguyenvana@gmail.com">
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Mật Khẩu:</label>
                        <input type="password" class="form-control" id="password" placeholder="password">
                    </div>
                    <div class="col-12">
                        <label for="repassword" class="form-label">Nhập lại mật khẩu:</label>
                        <input type="repassword" class="form-control" id="repassword" placeholder="repassword">
                    </div>


                    <h4 class="mb-3">THÔNG TIN CÁ NHÂN</h4>

                    <div class="col-12">
                        <label for="username" class="form-label">Họ và Tên:</label>
                        <input type="text" class="form-control" id="username" placeholder="Nguyen Van A" required>
                    </div>

                    <div class="col-12">
                        <label for="birthday" class="form-label">Ngày sinh:</label>
                        <input type="text" class="form-control" id="birthday" placeholder="24/02/2002" required>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Địa chỉ:</label>
                        <input type="text" class="form-control" id="address" placeholder="56 An Dương Vương" required>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Giới tính:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
              Nữ
            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
              Nam
            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
              Khác
            </label>
                        </div>


                    </div>
                    <div class="col-12">
                        <label for="phone" class="form-label">Số điện thoại:</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                    <div>
                        <hr style="margin-left: 200px; width: 623px;" class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" style="margin-left: 200px;" type="submit">Đăng ký</button>
                    </div>
                </form>
            </div>
    </div>

    </main>

    

    <script src="./assets/js/form-validation.js"></script>

<?php
    include './partials/footer.php';