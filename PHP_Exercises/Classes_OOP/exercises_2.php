Viết một lớp PHP đơn giản hiển thị một thông báo giới thiệu như "Xin chào tất cả, tôi là Scott", trong đó "Scott" là một giá trị đối số của phương thức trong lớp.

<?php
    class user_message {
        public $message = 'Hello All, I am ';
        public function introduce($name)
        {
            return $this->message.$name;
        }
    }
    $mymessage = New user_message();
    echo $mymessage->introduce('Scott')."\n";
?>