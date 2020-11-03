<?php

    require "../class/goc.php";

    class quantritin extends goc{

        function thongtinuser($u, $p)
        {
            $u = $this->db->escape_string($u); // ?
            $p = $this->db->escape_string($p);
            $p = md5($p); // mã hóa pass

            $sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";
            $kq = $this->db->query($sql);
            
            if($kq->num_rows == 0) return FALSE;
            else return $kq->fetch_assoc(); // ?
        }

        function checkLogin()
        {
            if(isset($_SESSION["login_id"]) == FALSE)
            {
                $_SESSION["error"] = "Bạn chưa đăng nhập";
                $_SESSION["back"] = $_SERVER["REQUEST_URI"]; // ?
                header("Location: login.php");
                exit();
            }   elseif($_SESSION["login_level"] != 1)
                {
                    $_SESSION["error"] = "Bạn không có quyền xem trang này";
                    $_SESSION["back"] = $_SERVER["REQUEST_URI"]; // ?
                    header("Location: login.php");
                    exit();
                }
        }

        function checkLogout()
        {
            if(isset($_SESSION["login_id"]) == TRUE)
            {
                unset($_SESSION["login_id"]);
                header("Location: login.php");
                exit();
            }
        }

        // Hàm lấy danh sách thể loại
        function ListTheLoai()
        {
            $sql = "SELECT idTL, TenTL, ThuTu, AnHien, TenTL_KhongDau, lang FROM theloai ORDER BY ThuTu DESC";
            
            $kq = $this->db->query($sql);

            if(!$kq) // nếu ko thực hiện dc truy vấn
            {
                die($this->db->error);
            }

            return $kq;
        }

        // Hàm lưu Loại tin mới
        function TheLoai_Them($TenTL, $TenTL_KD, $ThuTu, $AnHien, $lang)
        {
            $TenTL = $this->db->escape_string(trim(strip_tags($TenTL)));
            $TenTL_KD = $this->db->escape_string(trim(strip_tags($TenTL_KD)));
            if($TenTL_KD == ""){
                $TenTL_KD = $this->changeTitle($TenTL);
            }
            $lang = $this->db->escape_string(trim(strip_tags($lang)));

            settype($ThuTu, "int");
            settype($AnHien, "int");

            $sql = "INSERT INTO theloai SET TenTL='$TenTL', TenTL_KhongDau='$TenTL_KD', ThuTu=$ThuTu, AnHien=$AnHien, lang='$lang'";

            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            }
        }

        function changeTitle($str)
        {
            $str = $this->stripUnicode($str);
            $str = $this->stripSpecial($str);
            $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
            return $str;
        }

        function stripSpecial($str)
        {
            $arr = array(",", "$", "!", "?", "&", "'", '"', "+");
            $str = str_replace($arr,"", $str);
            $str = trim($str);
            while(strpos($str, " ") > 0) $str = str_replace(" ", " ", $str);
            $str = str_replace(" ", "-", $str);
            return $str;
        }

        function stripUnicode($str){ 
            if(!$str) return false;
            $unicode = array('a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
                             'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
                             'd'=>'đ','D'=>'Đ',
                             'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                             'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
                             'i'=>'í|ì|ỉ|ĩ|ị',
                             'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
                             'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                             'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
                             'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                             'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
                             'y'=>'ý|ỳ|ỷ|ỹ|ỵ','Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ');
            foreach($unicode as $khongdau=>$codau) {
                $arr=explode("|",$codau);$str = str_replace($arr,$khongdau,$str);
            }
        return $str;
        }

        function TheLoai_ChiTiet($idTL)
        {
            $sql = "SELECT idTL, TenTL, ThuTu, AnHien, TenTL_KhongDau, lang FROM theloai WHERE idTL=$idTL";

            $kq = $this->db->query($sql);

            if(!$kq)
            {
                die($this->db->error);
            }

            return $kq;
        }

        function TheLoai_Sua($idTL, $TenTL, $TenTL_KD, $ThuTu, $AnHien, $lang)
        {
            settype($idTL, "int");
            $TenTL = $this->db->escape_string(trim(strip_tags($TenTL)));
            $TenTL_KD = $this->db->escape_string(trim(strip_tags($TenTL_KD)));
            if($TenTL_KD == ""){
                $TenTL_KD = $this->changeTitle($TenTL);
            }
            $lang = $this->db->escape_string(trim(strip_tags($lang)));

            settype($ThuTu, "int");
            settype($AnHien, "int");

            $sql = "UPDATE theloai SET TenTL='$TenTL', TenTL_KhongDau='$TenTL_KD', ThuTu=$ThuTu, AnHien=$AnHien, lang='$lang'
            WHERE idTL=$idTL";

            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            }
        }

        function TheLoai_Xoa($idTL)
        {
            settype($idTL, "int");
            $sql = "DELETE FROM theloai WHERE idTL=$idTL";
            $kq = $this->db->query($sql);

            if(!$kq)
            {
                die($this->db->error);
            }
        }

        // Quản trị loại tin
        function ListLoaiTinTheoTL($idTL)
        {
            // $sql = "SELECT idLT, Ten, loaitin.ThuTu, loaitin.AnHien, Ten_KhongDau, loaitin.lang, TenTL
            // FROM loaitin, theloai
            // WHERE loaitin.idTL=theloai.idTL
            // ORDER BY loaitin.ThuTu";
            $sql = "SELECT * FROM loaitin WHERE idTL=$idTL";

            $kq = $this->db->query($sql);
            
            if(!$kq)
            {
                die($this->db->error);
            }

            return $kq;
        }

        function ListLoaiTin()
        {
            $sql = "SELECT idLT, Ten, loaitin.ThuTu, loaitin.AnHien, Ten_KhongDau, loaitin.lang, TenTL
            FROM loaitin, theloai
            WHERE loaitin.idTL=theloai.idTL
            ORDER BY loaitin.ThuTu";

            $kq = $this->db->query($sql);
            
            if(!$kq)
            {
                die($this->db->error);
            }

            return $kq;
        }

        // Hàm lưu loại tin vào db
        function LoaiTin_Them($Ten, $Ten_KD, $ThuTu, $AnHien, $lang, $idTL)
        {
            $Ten = $this->db->escape_string(trim(strip_tags($Ten)));
            $Ten_KD = $this->db->escape_string(trim(strip_tags($Ten_KD)));
            if($Ten_KD == ""){
                $Ten_KD = $this->changeTitle($Ten);
            }
            $lang = $this->db->escape_string(trim(strip_tags($lang)));

            settype($ThuTu, "int");
            settype($AnHien, "int");
            settype($idTL, "int");

            $sql = "INSERT INTO loaitin SET Ten='$Ten', Ten_KhongDau='$Ten_KD', ThuTu=$ThuTu, AnHien=$AnHien, lang='$lang', idTL=$idTL";

            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            }
        }

        function LoaiTin_ChiTiet($idLT)
        {
            $sql = "SELECT idLT, Ten, ThuTu, AnHien, Ten_KhongDau, idTL, lang FROM loaitin WHERE idLT=$idLT";

            $kq = $this->db->query($sql);

            if(!$kq)
            {
                die($this->db->error);
            }

            return $kq;
        }

        function LoaiTin_Sua($Ten, $Ten_KD, $ThuTu, $AnHien, $lang, $idTL, $idLT)
        {
            $Ten = $this->db->escape_string(trim(strip_tags($Ten)));
            $Ten_KD = $this->db->escape_string(trim(strip_tags($Ten_KD)));
            if($Ten_KD == ""){
                $Ten_KD = $this->changeTitle($Ten);
            }
            $lang = $this->db->escape_string(trim(strip_tags($lang)));

            settype($ThuTu, "int");
            settype($AnHien, "int");
            settype($idTL, "int");
            settype($idLT, "int");

            $sql = "UPDATE  loaitin SET Ten='$Ten', Ten_KhongDau='$Ten_KD', ThuTu=$ThuTu, AnHien=$AnHien, lang='$lang', idTL=$idTL
            WHERE idLT=$idLT";

            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            }
        }

        function LoaiTin_Xoa($idLT)
        {
            settype($idLT, "int");
            $sql = "DELETE FROM loaitin WHERE idLT=$idLT";
            $kq = $this->db->query($sql);

            if(!$kq)
            {
                die($this->db->error);
            }
        }

        // Quản trị tin
        function ListTin($idTL, $idLT)
        {

            $sql = "SELECT idTin, TieuDe, TomTat, tin.AnHien, tin.lang, TinNoiBat, Ngay, SoLanXem, TenTL, Ten
            FROM tin, loaitin, theloai 
            WHERE tin.idLT=loaitin.idLT AND loaitin.idTL=theloai.idTL
            -- lọc theo thể loại
            AND ($idTL=-1 OR loaitin.idTL=$idTL)

            -- lọc theo loại tin
            AND ($idLT=-1 OR tin.idLT=$idLT)

            ORDER BY idTin DESC";

            $kq = $this->db->query($sql);

            if(!$kq)
            {
                die($this->db->error);
            }

            return $kq;
        }

        // hiển thị loại tin theo thể loại - thêm tin
        function LoaiTinTrongTheLoai($idTL)
        {
            $sql = "SELECT idLT, Ten FROM loaitin WHERE idTL=$idTL ORDER BY ThuTu";
            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            }

            return $kq;
        }

        // hàm lưu tin mới vào database
        function Tin_Them($TD, $TD_KD, $TT, $Ngay, $AnHien, $TNB, $idTL, $idLT, $urlHinh, $ND, $lang)
        {
            $TD = $this->db->escape_string(trim(strip_tags($TD)));
            $TD_KD = $this->db->escape_string(trim(strip_tags($TD_KD)));
            if($TD_KD == ""){
                $TD_KD = $this->changeTitle($TD);
            }
            $TT = $this->db->escape_string(trim(strip_tags($TT)));
            $ND = $this->db->escape_string($ND);

            //$tags = $this->db->escape_string(trim(strip_tags($tags)));
            $lang = $this->db->escape_string(trim(strip_tags($lang)));
            $urlHinh = $this->db->escape_string($urlHinh);

            $arr = explode("/", $Ngay);
            if(count($arr) == 3)
            {
                $Ngay = $arr[2]."-".$arr[1]."-".$arr[0];
            }   else $Ngay = date("Y-m-d"); // nếu ko nhập ngày thì lấy ngày hiện tại

            $idUser = $_SESSION["login_id"];
            settype($AnHien, "int");
            settype($TNB, "int");
            settype($idTL, "int");
            settype($idLT, "int");

            $sql = "INSERT INTO tin SET  TieuDe='$TD', TieuDe_KhongDau='$TD_KD', TomTat='$TT', lang='$lang',
            urlHinh='$urlHinh', Content='$ND', Ngay='$Ngay', idLT='$idLT', TinNoiBat=$TNB, AnHien=$AnHien, idUser=$idUser";

            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            }     
        }


        // Hàm lấy tin để sửa
        function Tin_ChiTiet($idTin)
        {
            $sql = "SELECT * FROM tin WHERE idTin = $idTin";
            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            } 
            return $kq;
        }

        function LayTheLoaiQuaLoaiTin($idLT)
        {
            $sql = "SELECT TenTL FROM theloai WHERE idTL=$idLT";
            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            } 
            return $kq;
        }

        function Tin_Sua($TD, $TD_KD, $TT, $Ngay, $AnHien, $TNB, $idTL, $idLT, $urlHinh, $ND, $lang, $idTin)
        {
            $TD = $this->db->escape_string(trim(strip_tags($TD)));
            $TD_KD = $this->db->escape_string(trim(strip_tags($TD_KD)));
            if($TD_KD == ""){
                $TD_KD = $this->changeTitle($TD);
            }
            $TT = $this->db->escape_string(trim(strip_tags($TT)));
            $ND = $this->db->escape_string($ND);

            //$tags = $this->db->escape_string(trim(strip_tags($tags)));
            $lang = $this->db->escape_string(trim(strip_tags($lang)));
            $urlHinh = $this->db->escape_string($urlHinh);

            $arr = explode("/", $Ngay);
            if(count($arr) == 3)
            {
                $Ngay = $arr[2]."-".$arr[1]."-".$arr[0];
            }   else $Ngay = date("Y-m-d"); // nếu ko nhập ngày thì lấy ngày hiện tại

            $idUser = $_SESSION["login_id"];
            settype($AnHien, "int");
            settype($TNB, "int");
            settype($idTL, "int");
            settype($idLT, "int");

            $sql = "UPDATE tin SET  TieuDe='$TD', TieuDe_KhongDau='$TD_KD', TomTat='$TT', lang='$lang',
            urlHinh='$urlHinh', Content='$ND', Ngay='$Ngay', idLT='$idLT', TinNoiBat=$TNB, AnHien=$AnHien, idUser=$idUser
            WHERE idTin=$idTin";

            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            }
        }

        function Tin_Xoa($idTin)
        {
            settype($idTin, "int");
            $sql = "DELETE FROM tin WHERE idTin=$idTin";
            $kq = $this->db->query($sql);
            if(!$kq)
            {
                die($this->db->error);
            }
        }

    }   // end class quantritin