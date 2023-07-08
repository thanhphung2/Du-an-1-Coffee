<?php
   require_once('mvc/Model/Base.php'); 
   require_once('mvc/Model/database.php');
   require_once('mvc/Model/pdo.php');
   require_once('mvc/Model/sanpham.php');
   require_once('mvc/Model/danhmuc.php');
   require_once('mvc/view/client/global.php');
   if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
   $spnew=loadall_product_view();
   $dsdm=loadall_danhmuc();
   class CartController {
      public function Addtocart(){
         include 'mvc/view/client/header.php';
         if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
            $id=$_POST['id'];
            $products_name=$_POST['products_name'];
            $image=$_POST['image'];
            $price=$_POST['price'];
            $soluong=$_POST['soluong'];
            $ttien=$soluong * $price;
            $spadd=[$id,$products_name,$image,$price,$soluong,$ttien];
            array_push($_SESSION['mycart'],$spadd);
         }
         require_once('mvc/view/client/cart.php');
         include "mvc/view/client/footer.php";
      }
      public function Delcart(){
         if(isset($_GET['idcart'])){
            array_splice($_SESSION['mycart'],$_GET['idcart'],1);
         }else{
               $_SESSION['mycart']=[];
         }
         include "cart.php";
      }
   }
?>