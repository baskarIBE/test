<?php
<!--update crackers qty start-->
<table class="table table-bordered text-center mb-5">
<thead class="bg-secondary text-dark">
    <tr>
        <th>Crackers Images Name</th>
        <th>Crackers Name</th>
        <th>Crackers Content</th>
        <th>Crackers Actual Price</th>
        <th>Crackers Discount Price</th>
        <th>Crackers Total Qty</th>
        <th>Crackers Total</th>
        <th>Add Crackers</th>
    </tr>
</thead>
<tbody class="align-middle">
<?php
        echo "
   <tr>
   <form method='post' action='example.php'>
       <td><input class='p-2 border' type='text' name='cnameimg'></td>
       <td><input class='p-2 border' type='text' name='cname'></td>
       <td><input class='p-2 border' type='text' name='ccontent'></td>
       <td><input class='p-2 border' type='text' name='cap'></td>
       <td><input class='p-2 border' type='text' name='cdp'></td>
       <td><input class='p-2 border' type='text' name='cqty'></td>
       <td><input class='p-2 border' type='text' name='ctot'></td>
       <td>
        <input class='btn btn-primary text-center' type='Submit' name='insertbtn' value='Insert'>
        <input class='p-2 border' type='hidden' name='cnameimg'>
        <input class='p-2 border' type='hidden' name='cname'>
        <input class='p-2 border' type='hidden' name='ccontent'>
        <input class='p-2 border' type='hidden' name='cap'>
        <input class='p-2 border' type='hidden' name='cdp'>
        <input class='p-2 border' type='hidden' name='cqty'>
        <input class='p-2 border' type='hidden' name='ctot'>
       </td>
    </form>
   </tr>
        ";

    if(isset($_POST["insertbtn"]))
    {
        $item3=array(
            'cnameimg'=> $_POST['cnameimg'],
            'cname'=> $_POST['cname'],
            'ccontent'=> $_POST['ccontent'],
            'cap'=> $_POST['cap'],
            'cdp'=> $_POST['cdp'],
            'cqty'=> $_POST['cqty'],
            'ctot'=> $_POST['ctot']

        );
        $_SESSION["newinsert"][0]=$item3;
        print_r($_SESSION["newinsert"][0]);
        echo "<script>alert('Product Added..');</script>";

    }
        // $inscnameimg=$_SESSION["newinsert"][0]['cnameimg'];
        // $inscname=$_SESSION["newinsert"][0]['cname'];
        // $insccontent=$_SESSION["newinsert"][0]['ccontent'];
        // $inscap=$_SESSION["newinsert"][0]['cap'];
        // $inscdp=$_SESSION["newinsert"][0]['cdp'];
        // $inscqty=$_SESSION["newinsert"][0]['cqty'];
        // $inscqty1=(int)$inscqty;
        // $insctot=$_SESSION["newinsert"][0]['ctot'];

        // echo "$inscnameimg";

        // $sql="insert into crackerslist (cracker_name,cracker_item,cracker_ac_price,cracker_dc_price,cracker_total,cracker_img,crackers_total_qty) values('$inscname','$insccontent','$inscap','$inscdp','$insctot','$inscnameimg',$inscqty1)";
        // $res=$db->query($sql);

    
    
   ?>
</tbody>
</table> 
<!--update crackers qty End--> 
?>