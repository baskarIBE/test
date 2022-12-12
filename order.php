<?php
class OrderInsert
{
    private $author_name;
    private $author_email;
 
    public function __construct()
    {
       
    }
 
    public function Insertfun()
    {
        $db = mysqli_connect('localhost','root','root123users','crackers');
        $total=0;
        foreach($_SESSION["cart"] as $keys=>$values)
        {
            

            $array_count=count($_SESSION['cart']);
            for($i = 0; $i < $array_count; $i++) {

                $productid[$i]=$_SESSION['cart'][$i]['crackers_id'];
                $pimg1[$i]=$_SESSION['cart'][$i]['pimg1'];
                $productname[$i]=$_SESSION['cart'][$i]['pname'];
                $productqty[$i]=$_SESSION['cart'][$i]['qty'];
                $productprice[$i]=$_SESSION['cart'][$i]['price'];
                $amt[$i]=$productqty[$i]*$productprice[$i];
                $toaqty[$i]=$_SESSION['cart'][$i]['qtytot1'];
                $cusemail=$_SESSION['email'];
                $ordate=date('Y-m-d');
                $order_stus = 'Booked';
            
            }
            
        }
        
        $array_count=count($_SESSION['cart']);
        print_r($array_count);
        for($i = 0; $i < $array_count; $i++) 
        {
            // $invalu = "insert into creakersorder(order_name,order_qty,order_price,order_total,cusemail,orderdate) values('$productname[$i]',$productqty[$i],$productprice[$i],$amt[$i],'$cusemail','$ordate')";
            $invalu = "insert into creakersorder(product_order_id,order_img,order_name,order_qty,order_price,order_total,cusemail,orderdate,order_stus) values($productid[$i],'$pimg1[$i]','$productname[$i]',$productqty[$i],$productprice[$i],$amt[$i],'$cusemail','$ordate','$order_stus')";
            $result = mysqli_query($db,$invalu);
            // print_r($productid[$i]);
            // print_r($toaqty[$i]);
            // print_r($productqty[$i]);
            $qt[$i]=$toaqty[$i]-$productqty[$i];
            // echo $qt;
            $qtyupdate = "UPDATE crackerslist SET crackers_total_qty = $qt[$i] WHERE crackers_id=$productid[$i]";
            // print_r($qtyupdate);
            $result = mysqli_query($db,$qtyupdate);
            // print_r($qtyupdate);
        }
        
        
    } 
}

                
?>