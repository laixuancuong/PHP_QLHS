<?php require "layouts/header-hs.php"; 
?>
<div class="main">
        <div class="wrap-main">
            <div class="content-main">
                <div class="topnav">
                    <a class="active" href="index.php">Trang chủ</a>
                    <a href="#about">Hướng dẫn</a>
                    <a href="#contact">Đóng góp ý kiến</a>
                </div>
                <!--end--topnav-->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="/qlhs/hs/lophoc.php" target>
                                <div class="item-thumb">
                                    <span class="item-icon"><img style="width: 100px;height: 100px;"
                                            src="img/lop_hoc.png" /></span>
                                    <div class="item-title">
                                        <h1>Lớp học</h1>
                                    </div>
                                    <div class="overlay">Truy cập</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="/qlhs/hs/monhoc.php" target>
                                <div class="item-thumb">
                                    <span class="item-icon"><img style="width: 100px;height: 100px;"
                                            src="img/mon_hoc.png" /></span>
                                    <div class="item-title">
                                        <h1>Môn học</h1>
                                    </div>
                                    <div class="overlay">Truy cập</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="/qlhs/hs/lichhoc.php" target>
                                <div class="item-thumb">
                                    <span class="item-icon"><img style="width: 100px;height: 100px;"
                                            src="img/lich_hoc.png" /></span>
                                    <div class="item-title">
                                        <h1>Lịch học</h1>
                                    </div>
                                    <div class="overlay">Truy cập</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="/qlhs/hs/baitap.php" target>
                                <div class="item-thumb">
                                    <span class="item-icon"><img style="width: 100px;height: 100px;"
                                            src="img/bai_tap.png" /></span>
                                    <div class="item-title">
                                        <h1>Bài tập</h1>
                                    </div>
                                    <div class="overlay">Truy cập</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end--row-->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="/qlhs/hs/hoclieu.php" target>
                                <div class="item-thumb">
                                    <span class="item-icon"><img style="width: 100px;height: 100px;"
                                            src="img/hoc_lieu.png" /></span>
                                    <div class="item-title">
                                        <h1>Học liệu</h1>
                                    </div>
                                    <div class="overlay">Truy cập</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="/qlhs/hs/diem.php" target>
                                <div class="item-thumb">
                                    <span class="item-icon"><img style="width: 100px;height: 100px;"
                                            src="img/diem.png" /></span>
                                    <div class="item-title">
                                        <h1>Điểm</h1>
                                    </div>
                                    <div class="overlay">Truy cập</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="/qlhs/hs/thongbao.php" target>
                                <div class="item-thumb">
                                    <span class="item-icon"><img style="width: 100px;height: 100px;"
                                            src="img/thong_bao.png" /></span>
                                    <div class="item-title">
                                        <h1>Thông báo</h1>
                                    </div>
                                    <div class="overlay">Truy cập</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item">
                            <a href="/qlhs/hs/tinnhan.php" target>
                                <div class="item-thumb">
                                    <span class="item-icon"><img style="width: 100px;height: 100px;"
                                            src="img/tin_nhan.png" /></span>
                                    <div class="item-title">
                                        <h1>Tin nhắn</h1>
                                    </div>
                                    <div class="overlay">Truy cập</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end--row-->
            </div>
            <!--end--content-main-->
            <?php require "layouts/news-hs.php";
            ?>
            <!--end--news-main-->
        </div>
        <!--end--warp-main-->
    </div>
    <!--end--main-->
<?php require "layouts/footer.php"; ?>