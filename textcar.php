<?php

class Car {

    public function showProduct($conn) {
        $sql = "select * from product where id < 8";
        $result = $conn->query($sql);
        $product = array();
        while ($row = $result->fetch_assoc()) {
            $product[] = $row;
        }
        return $product;
    }

    public function showMenu($conn, $iddm) {
        if ($iddm == 0) {
            $sql = "select * from specifications";
        } else if ($iddm > 0 && $iddm <= 4) {
            $sql = "select * from specifications where iddm = $iddm";
        }
        $result = $conn->query($sql);
        $menu = array();
        while ($row = $result->fetch_assoc()) {
            $menu[] = $row;
        }
        return $menu;
    }

    public function showDetails($conn, $id) {
        $sql = "select * from specifications where idCt = $id";
        $result = $conn->query($sql);
        return $result;
    }

    public function showDiscover($conn, $id) {
        $sql = "select * from description where idtt = $id";
        $result = $conn->query($sql);
        return $result;
    }

    public function showDescription($conn, $id) {
        $sql = "select * from description where idtt = $id";
        $result = $conn->query($sql);
        $dics = array();
        while ($row = $result->fetch_assoc()) {
            $dics = $row;
        }
        return $dics;
    }

    public function showfeatured($conn, $id) {
        $sql = "select * from description,specifications where description.idtt = specifications.iddm and description.idtt = $id";
        $result = $conn->query($sql);
        return $result;
    }

    public function login($conn, $username, $pw) {
        $sql = "select * from user where username= '" . $username . "' and pw= '" . $pw . "'";
        $result = $conn->query($sql);
        return $result;
    }

    public function showproductAdmin($conn, $key) {
        if ($key != "" && $key != 1) {
            $sql = "select * from specifications where NameCar like '%" . $key . "%'";
        } else if ($key == "" || $key == 1) {
            $sql = "select * from specifications";
        }
        $result = $conn->query($sql);
        return $result;
    }

    public function deleteproductAdmin($conn, $id) {
        $sql = "delete from specifications where IDCt = $id";
        $result = $conn->query($sql);
        return $result;
    }

    public function showcustomerAdmin($conn, $key) {
        if ($key != "" && $key != 1) {
            $sql = "select * from user where role = 2 and name like  '%" . $key . "%'";
        } else if ($key == "" || $key == 1) {
            $sql = "select * from user where role = 2";
        }
        $result = $conn->query($sql);
        return $result;
    }

    public function deletecustomerAdmin($conn, $id) {
        $sql = "delete from user where id = $id";
        $result = $conn->query($sql);
        return $result;
    }

    public function message($conn) {
        $sql = "select * from message";
        $result = $conn->query($sql);
        return $result;
    }

    public function Order($conn) {
        $sql = "select * from oder";
        $result = $conn->query($sql);
        return $result;
    }

    public function addproduct($conn, $name, $wattage, $maximum_torque, $acceleration, $max_speed, $fuel_consumption, $price, $img) {
        $sql = "insert into specifications (NameCar,Wattage,Maximumtorque,Acceleration,Maxspeed,Fuelconsumption,Standardprice,img) VALUES ('$name','$wattage','$maximum_torque','$acceleration','$max_speed','$fuel_consumption','$price','$img')";
        $result = $conn->query($sql);
        return $result;
    }

    public function addcustomer($conn, $username, $name, $pw, $email, $address, $phone) {
        $sql = "insert into user (username,name,pw,email,address,phone,role) VALUES ( '$username', '$name' , '$pw','$email','$address','$phone','2')";
        $result = $conn->query($sql);
        return $result;
    }

    public function addemp($conn, $username, $name, $pw, $email, $address, $phone) {
        $sql = "insert into user (username,name,pw,email,address,phone,role) VALUES ( '$username', '$name' , '$pw','$email','$address','$phone','1')";
        $result = $conn->query($sql);
        return $result;
    }

    public function addemployee($conn, $username, $name, $pw, $email, $address, $phone) {
        $sql = "update user set username= '$username', name= '$name',email='$email',pw='$pw',address='$address',phone='$phone',role=1 where username = '$username'";
        $result = $conn->query($sql);
        return $result;
    }

    public function showProductbyId($conn, $id) {
        $sql = "select * from specifications where IDCt='$id'";
        $result = $conn->query($sql);
        return $result;
    }

    public function editProduct($conn, $id, $name, $wattage, $maximum, $acceleration, $max, $fuel, $price, $img) {
        $sql = "update specifications set NameCar='$name',Wattage='$wattage',Maximumtorque='$maximum',Acceleration='$acceleration',Maxspeed='$max',Fuelconsumption='$fuel',Standardprice='$price',img='$img' where IDCt='$id'";
        $result = $conn->query($sql);
        return $result;
    }

    public function editcus($conn, $username, $name, $email, $address, $phone) {
        $sql = "update user set  name= '$name',email='$email',address='$address',phone='$phone',role=2 where username = '$username'";
        $result = $conn->query($sql);
        return $result;
    }

    public function findProduct($conn, $id) {
        $sql = "select * from specifications where IDCt ='$id'";
        $result = $conn->query($sql);
        return $result;
    }
    public function addOrder($conn,$id, $date, $st) {
        $sql = "insert into oders(iduser,date,st) values('$id','$date','$st')";
        $result = $conn->query($sql);
        return $result;
    }
    
    public function addOrderDetails($conn,$product,$price,$quantity) {
        $last = mysqli_insert_id($conn);
        $sql = "insert into oder_detail (id,carName,price,quantity) values ('$last','$product','$price','$quantity')";
        $result = $conn->query($sql);
        return $result;
    }
      public function addcontact($conn,$name,$phone,$message) {
        $sql = "insert into contact (name,phone,message) VALUES('$name','$phone','$message')";
        $result = $conn->query($sql);
        return $result;
    }
    
    public function showOrderPending($conn,$st) {
        $sql = "select oders.id,user.name,user.phone,user.email,oders.date,oders.st from oders,user where oders.iduser = user.id and oders.st = '$st'";
        $result = $conn->query($sql);
        return $result;
    }
    
    public function updateStatus($conn,$st,$id) {
        $sql = "update oders set st = '$st' where id = '$id'";
        $result = $conn->query($sql);
        return $result;
    }
    
    public function updateStatusRefuse($conn,$st,$id) {
        $sql = "update oders set st = '$st' where id = '$id'";
        $result = $conn->query($sql);
        return $result;
    }
     public function contact($conn) {
        $sql = "select * from contact";
        $result = $conn->query($sql);
        return $result;
    }
}
