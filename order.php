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
        $db = mysqli_connect('database-1.cocjutaea22j.ap-south-1.rds.amazonaws.com','admin','1234saran','crackers');
        $total=0;
        foreach($_SESSION["cart"] as $keys=>$values)
        {
            

            $array_count=count($_SESSION['cart']);
            for($i = 0; $i < $array_count; $i++) {

                $productname[$i]=$_SESSION['cart'][$i]['pname'];
                $productqty[$i]=$_SESSION['cart'][$i]['qty'];
                $productprice[$i]=$_SESSION['cart'][$i]['price'];
                $cusemail=$_SESSION['email'];
                $amt[$i]=$productqty[$i]*$productprice[$i];
                $ordate=date('Y-m-d H:i:s');
            
            }
            
        }
        
        $array_count=count($_SESSION['cart']);
        print_r($array_count);
        for($i = 0; $i < $array_count; $i++) 
        {
            $invalu = "insert into creakersorder(order_name,order_qty,order_price,order_total,cusemail,orderdate) values('$productname[$i]',$productqty[$i],$productprice[$i],$amt[$i],'$cusemail','$ordate')";
            $result = mysqli_query($db,$invalu);
        }
        
        
    } 
}

                
?>