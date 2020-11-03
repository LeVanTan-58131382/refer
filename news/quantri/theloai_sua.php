<?php

    $row = null;
    $idTL = $_GET["idTL"]; settype($idTL, "int");
    $kq = $qt->TheLoai_ChiTiet($idTL);
    
    if($kq)
    {
        $row = $kq -> fetch_assoc();
    } 

    if(isset($_POST["TenTL"]))
    {
        $TenTL = $_POST["TenTL"];
        $TenTL_KD = $_POST["TenTL_KhongDau"];
        $ThuTu = $_POST["ThuTu"];
        $AnHien = $_POST["AnHien"];
        $lang = $_POST["lang"];

        $qt->TheLoai_Sua($idTL, $TenTL, $TenTL_KD, $ThuTu, $AnHien, $lang);
        echo "<script>document.location='index.php?p=theloai_ds';</script>";
    }

?>


<div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block " style="float:none">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Chỉnh Sửa Thể Loại
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="TenTL">Tên Thể Loại</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="TenTL" name="TenTL" value=<?= $row["TenTL"] ?> class="form-control" maxlength="20" minlength="3" required placeholder="Nhập tên thể loại">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="TenTL_KhongDau">Tên Thể Loại Không Dấu</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="TenTL_KhongDau" name="TenTL_KhongDau" value=<?= $row["TenTL_KhongDau"] ?> class="form-control" placeholder="Nhập Tên TL Không Dấu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ThuTu">Thứ Tự</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="ThuTu" name="ThuTu" value=<?= $row["ThuTu"] ?> class="form-control" placeholder="Nhập thứ tự"
                                                required min="1" max="1000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ThuTu">Ẩn Hiện</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="radio" id="AH1" name="AnHien" <?= ($row["AnHien"] == 1) ? "checked" : "" ?> value="1">
                                                <label for="AH1" >Hiện</label>
                                                <input type="radio" id="AH0" name="AnHien" <?= ($row["AnHien"] == 0) ? "checked" : "" ?> checked="checked" value="0">
                                                <label for="AH0" >Ẩn</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ThuTu">Ngôn ngữ</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="radio" id="vi" name="lang" <?= ($row["lang"] == "vi") ? "checked" : "" ?> value="vi">
                                                <label for="vi" >Tiếng Viêt</label>
                                                <input type="radio" id="en" name="lang" <?= ($row["lang"] == "en") ? "checked" : "" ?> value="en">
                                                <label for="en" >English</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Cập nhật Thể Loại</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<style>
    .form-group .form-line { border-bottom: none;}
    .form-group .form-control { padding: 3px; border: 1px solid #999}
    .form-group .form-line.abc {padding-top: 5px;}
</style>