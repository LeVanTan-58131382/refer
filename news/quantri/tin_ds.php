<?php 
    // phần lọc tin theo thể loại
        // tiếp nhận tham số $idTL trên thanh địa chỉ
    // $idTL = -1;
    // if(isset($_GET["idTL"]) == true)
    // {
    //     $idTL = $_GET["idTL"];
    //     settype($idTL, "int");
    // }
    
    // // phần lọc tin theo loại tin
    // $idLT = -1;
    // if(isset($_GET["idLT"]) == true)
    // {
    //     $idLT = $_GET["idLT"];
    //     settype($idLT, "int");
    // }

     
    $idTL = 0;
    $idLT = 0;
    
?>

<div class="container-fluid">

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                QUẢN TRỊ TIN TỨC
                            </h2>
                            <!-- tạo form lọc tin -->
                            <form method="get" action="" class="bg-info p-t-10 p-b-10 p-1-10">
                                <input type="hidden" name="p" value="tin_ds">
                                <?php  $listTL = $qt->ListTheLoai();  ?>
                                    <select name="idTL" id="idTL" class="btn btn-success" onchange="this.form.submit();">
                                        <?php while($r = $listTL -> fetch_assoc()) { ?>
                                            <!-- hiển thị option vừa mới chọn -->
                                            <?php if($idTL == 0 ) $idTL =  $r["idTL"];  ?>
                                                <option value="<?= $r["idTL"] ?>" <?php
                                                    if(isset($_GET["idTL"] ) && $_GET["idTL"] == $r["idTL"] )
                                                    { echo "selected"; $idTL = $_GET["idTL"];}
                                                ?>><?= $r["TenTL"] ?></option>
                                        <?php } ?> 
                                    </select> 
                            </form>
                            <form method="get" action="" class="bg-info p-t-10 p-b-10 p-1-10">
                                <input type="hidden" name="p" value="tin_ds">
                                <input type="hidden" name="idTL" value="<?= $idTL ?>">
                                
                                <?php  $listLT = $qt->ListLoaiTinTheoTL($idTL);  ?>
                                    <select name="idLT" id="idLT" class="btn btn-primary" onchange="this.form.submit();">
                                        <?php while($r = $listLT -> fetch_assoc()) { ?>
                                            <!-- hiển thị option vừa mới chọn -->
                                            <?php if($idLT == 0) $idLT =  $r["idLT"];?>
                                                <option value="<?= $r["idLT"] ?>"
                                                    <?php if(isset($_GET["idLT"]) && $_GET["idLT"] == $r["idLT"] )
                                                    { echo "selected"; $idLT = $_GET["idLT"];}
                                                    //$idLT = $r["idLT"] ?>
                                                ><?= $r["Ten"] ?></option>
                                        <?php } ?>
                                    </select>
                            </form>

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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Tin/ Ngày</th>
                                            <th>Tiêu đề/ Tóm tắt</th>
                                            <th>Cập nhật/ Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php $kq = $qt->ListTin($idTL, $idLT);
                                         while($rowTin = $kq ->fetch_assoc()) { ?>
                                            <tr>
                                                <td>
                                                    <p>id Tin: <?= str_pad($rowTin["idTin"], 3, "0", STR_PAD_LEFT) ?></p>
                                                    <p><?= date('d/m/Y', strtotime($rowTin["Ngay"])) ?></p>
                                                    <p>Xem: <?= $rowTin["SoLanXem"] ?></p>
                                                </td>
                                                
                                                <td>
                                                    <h4><?= $rowTin["TieuDe"] ?> <span>(
                                                        <?= $rowTin["TenTL"] ?>/<?= $rowTin["Ten"] ?>
                                                        )</span></h4>
                                                    <p><?= $rowTin["TomTat"] ?></p>
                                                </td>
                                                <td>
                                                    <a href="?p=tin_sua&idTin=<?= $rowTin["idTin"] ?>&idTL=<?=$idTL?>" class="btn bg-blue 
                                                    waves-effect">Cập nhật</a> &nbsp

                                                    <a href="tin_xoa.php?idTin=<?= $rowTin["idTin"] ?>" class="btn bg-red 
                                                    waves-effect" onclick="return confirm('Xóa thật hã')">Xóa</a>

                                                    <p><?= ($rowTin["AnHien"] == 1) ? "Đang Hiện" : "Đang Ẩn" ?></p>
                                                    <p><?= ($rowTin["TinNoiBat"] == 1) ? "Tin nổi bật" : "Tin thường" ?></p>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->

            <!-- #END# Exportable Table -->
        </div>
<!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <style>
        div.dataTables_wrapper div.dataTables_filter input.form-control{
            border: 1px solid #999; height:23px;
        }
        div.dataTables_wrapper div.dataTables_length select.form-control{
            border: 1px solid #999; height:23px;
        }
    </style>

