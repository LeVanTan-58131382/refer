<?php
class Singleton
{
    public static function getInstance()
    {
        // Biến static $ instance không bị xóa khi hàm kết thúc
        static $instance;
        // Lệnh gọi thứ hai đến hàm này sẽ không vào câu lệnh if,
        // Vì một instance của Singleton hiện được lưu trữ trong  $instance

        if (!$instance) {
            // First call to this function will reach this line,
            // because the $instance has only been declared, not initialized
            $instance = new Singleton();
        }
        return $instance;
    }
}
$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

// Comparing objects with the '===' operator checks whether they are
// the same instance. Will print 'true', because the static $instance
// variable in the getInstance() method is persisted through multiple calls
var_dump($instance1 === $instance2);
