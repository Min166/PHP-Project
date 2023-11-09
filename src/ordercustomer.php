<?php
session_start();
require_once '../textcar.php';
require_once '../connection.php';
$classer = new Car();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>order</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION[$_SESSION['user']])) {
            $total_price = 0;
            $total_quantity = 0;
        }
        ?>
        <div id="main"> 
            <?php
            require_once '../layout/header.php';
            ?>
            <?php
            if (isset($_GET['action']) && ($_GET['action'] == 'remove')) {
                foreach ($_SESSION[$_SESSION['user']] as $key => $value) {
                    if ($_GET['id'] == $key) {
                        unset($_SESSION[$_SESSION['user']][$key]);
                    }
                    if (empty($_SESSION[$_SESSION['user']])) {
                        unset($_SESSION[$_SESSION['user']]);
                    }
                }
            }
            if (isset($_GET['action']) && $_GET['action'] == 'emty') {
                unset($_SESSION[$_SESSION['user']][$id]);
            }
            ?>

            <?php
            if (isset($_GET['action']) && ($_GET['action'] == 'up')) {
                $id = $_GET['id'];
                $_SESSION[$_SESSION['user']][$id]['quantity'] += 1;
                $total_quantity += 1;
            } else if (isset($_GET['action']) && ($_GET['action'] == 'down')) {
                $id = $_GET['id'];
                $_SESSION[$_SESSION['user']][$id]['quantity'] -= 1;
                $total_quantity -= 1;
                if ($_SESSION[$_SESSION["user"]][$id]['quantity'] <= 0) {
                    unset($_SESSION[$_SESSION["user"]][$id]);
                }
            }
            ?>
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <p class="qưertyui">Oder</p>
                    </div>
                </div>
                <div class="row">
                    <?php
                        if  (isset($_GET['action']) && ($_GET['action'] == 'order')) {
                            $_SESSION['order'] = $_SESSION[$_SESSION['user']];
                            $id = $_SESSION['infor'][6];
                            $date = date('Y-m-d');
                            $st = 'pending';
                            foreach ($_SESSION['order'] as $item) {
                                $product = $item['name'];
                                $price = $item['price'];
                                $quantity = $item['quantity'];
                                $result = $classer->addOrder($conn, $id, $date, $st);
                                $query = $classer->addOrderDetails($conn, $product, $price, $quantity);
                            }
                            unset($_SESSION[$_SESSION['user']]);
                            echo '<script>alert("Order Successfully")</script>';
                            echo '<script>window.location = "poduct.php"</script>';
                        }
                        ?>
                    <div class="col-lg-12">
                        <table  class="table table-striped">
                                <tr>
                                    <th class="">ID </th>
                                    <th class="">Name Car</th>
                                    <th class="">Image</th>
                                    <th class="">Unit Price</th>
                                    <th class="">Price</th>
                                    <th class="">Quantity</th>
                                    <th class="">Remove</th>
                                </tr>
                                <?php
                                foreach ($_SESSION[$_SESSION['user']] as $item => $value) {
                                    $item_price = $value['quantity'] * $value['price'];
                                    ?>
                                    <tr>
                                        <td name="id"><?php echo $item ?></td>
                                        <td name="name"><?php echo $value['name'] ?></td>
                                        <td name="img"><img src="<?php echo $value['image'] ?>"></td>
                                        <td name="unitPrice"><?php echo $value['price'] ?></td>
                                        <td name="price"><?php echo number_format($item_price, 2) ?></td>
                                        <td name="quantity"><a href="ordercustomer.php?action=up&id=<?php echo $item; ?>"><i class="fas fa-caret-up"></i></a><?php echo $value['quantity'] ?>
                                            <a href="ordercustomer.php?action=down&id=<?php  echo $item; ?>"><i class="fas fa-caret-down"></i></a></td>
                                        <td class="tyui"><a href="ordercustomer.php?action=remove&id=<?php echo $item; ?>"><i class="far fa-trash-alt"></i></a></td>
                                                <?php
                                                $total_quantity += $value['quantity'];
                                                $total_price += ($value['price'] * $value['quantity']);
                                                $_SESSION['total'] = array('total_quantity' => $total_quantity, 'total_price' => $total_price);
                                            }
                                            ?> 
                                </tr>
                                <tr>
                                    <td colspan="2"align="right">Total:</td>
                                    <td align="right"><?php echo $total_quantity; ?></td>
                                    <td align="right" colspan="2"><strong><?php echo number_format($total_price, 2) . "$" ?></strong></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <a href="?action=order" class="btn btn-primary btn-order">ORDER</a>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </body>
</html>
