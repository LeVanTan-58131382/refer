<?php

    if(isset($_POST["TieuDe"]))
    {
        $TD = $_POST["TieuDe"];
        $TD_KD = $_POST["TieuDe_KhongDau"];
        $TT = $_POST["TomTat"];
        $Ngay = $_POST["Ngay"];
        $AnHien = $_POST["AnHien"];
        $TNB = $_POST["TinNoiBat"];
        $idTL = $_POST["idTL"];
        $idLT = $_POST["idLT"];
        $urlHinh = $_POST["urlHinh"];
        $ND = $_POST["NoiDungTin"];
        //$tags = $_POST["tags"];
        $lang = $_POST["lang"];

        $qt->Tin_Them($TD, $TD_KD, $TT, $Ngay, $AnHien, $TNB, $idTL, $idLT, $urlHinh, $ND, $lang);
        echo "<script>document.location='index.php?p=tin_ds';</script>";

    }
?>

<style>
    .form-group {margin-bottom:15px}
    .form-group .form-line {border-bottom: none;}
    .form-group .form-control{padding:3px; border:1px solid #999}
    .form-group .form-line.abc{padding-top:5px};
    .form-group .form-control{background:#337ab7;
        border-radius: 6px; color:yellow; font-size:14px; letter-spacing:1px
    };
    .form-group .form-control::placeholder {color:white};
    #form_validation .col-md-4 {margin-bottom:0px}

</style>

<div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin:auto; float:none">
                    <div class="card">
                        <div class="header">
                            <h2>THÊM TIN</h2>
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
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="TieuDe" required maxlength="100" minlength="10" placeholder="Tiêu đề tin">
                                        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="TieuDe_KhongDau" required placeholder="Tiêu đề không dấu">
                                       
                                    </div>
                                </div>
                                <!-- Hiện thể loại -->
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="form-line ">
                                            <select class="form-control show-tick" name="idTL" id="idTL">
                                                <option value="0" >--Chọn Thể Loại--</option>
                                                <?php  $listTL = $qt->ListTheLoai();  ?>
                                                <?php while($r = $listTL -> fetch_assoc()) { ?>
                                                    <option value="<?= $r["idTL"] ?>"><?= $r["TenTL"] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="form-line ">
                                            <select class="form-control show-tick" name="idLT" id="idLT">
                                                <option value="0" >--Chọn Loại Tin--</option>
                                                <?php  $listLT = $qt->ListLoaiTin();  ?>
                                                <?php while($r = $listLT -> fetch_assoc()) { ?>
                                                    <option value="<?= $r["idLT"] ?>" selected ><?= $r["Ten"] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group form-float">
                                    <div class="form-line">
                                       <textarea class="form-control" name="TomTat" cols="30" rows="5" no-resize>

                                       </textarea>
                                        
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group form-float">
                                             <input type="radio" name="AnHien" id="AH0" value="0" class="form-control">
                                             <label for="AH0" >Ẩn</label>
                                             <input type="radio" name="AnHien" id="AH1" value="1" checked class="form-control">
                                             <label class="m-1-20" for="AH1" >Hiện</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-float">
                                             <input type="radio" name="TinNoiBat" id="TNB00" value="0" class="form-control">
                                             <label for="TNB0" >Tin Thường</label>
                                             <input type="radio" name="TinNoiBat" id="TNB11" value="1" checked class="form-control">
                                             <label class="m-1-20" for="TNB1" >Tin Nổi Bật</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-float">
                                             <input type="radio" name="lang" id="vi" value="vi" class="form-control">
                                             <label for="vi" >Tiếng Việt</label>
                                             <input type="radio" name="lang" id="en" value="en" checked class="form-control">
                                             <label class="m-1-20" for="en" >English</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <!-- <div class=" col-md-6 ">
                                        <div class="form-group form-float">
                                            <div class="form-line ">
                                                <input type="text" class="form-control" name="tags" placeholder="Tags">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class=" col-md-12 ">
                                        <div class="form-group form-float">
                                            <div class="form-line ">
                                                <input type="text" class="datepicker" name="Ngay" placeholder="Ngày đăng">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea id="NoiDungTin" name="NoiDungTin" cols="30" rows="5" class="form-control" placeholder="Nội dung tin" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" name="urlHinh" id="urlHinh" class="form-control" name="password"
                                    
                                    placeholder="Địa chỉ hình của tin" required>
                                    </div>
                                    <!-- <input type="text" name="urlHinh" id="urlHinh" class="form-control" name="password"
                                    onclick="selectFileWithCKFinder('urlHinh')"
                                    placeholder="Địa chỉ hình của tin" required>
                                    </div> -->
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">THÊM TIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<script>
    $(document).ready(function(e)
    {
        $("#idTL").change(function(){
            //console.log("đã chọn TL");
            var idTL = $(this).val();
            $("#idLT").load("new_layloaitin.php?idTL=" + idTL);
        });

        // code jquery kiểm tra khi user chưa chọn Thể loại  thì báo lỗi
        $("#form_validation").submit(function(){
            if($("#idTL").val() == 0)
            {
                alert("Bạn chưa chọn thể loại nhá, chọn nhanh đi :))"); return false;
            }
            if($("#idLT").val() == 0)
            {
                alert("Bạn chưa chọn loại tin nhá, chọn nhanh đi :))"); return false;
            }
        });
    });
</script>

<!-- Thêm editor -->
<script src="../plugins/ckeditor/ckeditor.js"> </script>
<script>
    $(document).ready(function()
    {
        CKEDITOR.replace("NoiDungTin", {language: "vi", skin:"kama",
            // cấu hình cho phần upload hình
            filebrowserImageBrowseUrl:"plugins/ckfinder/ckfinder.html?Type=Images",
            filebrowserImageUploadUrl:
            "plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
        
        });
        CKEDITOR.config.height = 300;
    });
</script>

<!-- Thêm datepicker -->
    <!-- link datepicker -->
    <link href="../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <!-- Autosize Plugin Js -->
    <script src="../plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function()
        {
            $(".datepicker").bootstrapMaterialDatePicker(
                {
                    format: "D/M/Y",
                    weekStart:1, time:false
                }
            );
        });
    </script>

<!-- upload file với ckfindder -->
<script type="text/javascript" src="plugins/ckfinder/ckfinder.js"></script>


