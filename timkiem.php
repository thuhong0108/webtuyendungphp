<?php
include('./partials/header.php');
?>
<style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

<main >
    <form class="form-signin">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Họ tên">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ngành nghề">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mức lương">

        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>
        </ul>
    </form>

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="avt" src="./img/2.jpg" width="140" height="140">
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
                <img class="avt" src="./img/2.jpg" width="140" height="140">
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
                <img class="avt" src="./img/2.jpg" width="140" height="140">
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
</main>



<?php
include './partials/footer.php';
