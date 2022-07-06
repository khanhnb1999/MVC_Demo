<?php
class SinhVienModel extends DB{
    public function GetSV(){
        return "Nguyen Van Teo";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }
    public function getAllProduct(){
        $qr = "SELECT * FROM products";
        $result = mysqli_query($this->con, $qr);
        $products = array();
        while ($row = mysqli_fetch_assoc($result))
        {
            $products[] = $row;
        }
        return $products;
    }

}
?>