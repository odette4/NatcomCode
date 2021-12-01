<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N@t SHOP</title>
</head>
<body>
    <center>
    <fieldset style ="width:30%; background-color:silver;">
    <legend>NATSHOP</legend>
<form method="POST" acttion="#">
    
      
    <label>Customer name:</label>
    <input type="text" name="name" placeholder="enter name of customer"><br><br>
   
    <label >products:</label>
    
    <select name="productname" id="p">
        <option >....plz select any product you want.......</option>
        <option >DVDs</option>
        <option >CDs</option>
        <option >LAPTOPS</option>
        <option >HDD</option>
        <option >HDMI</option>
        <option >VGI</option>
        <option >SWITCHES</option>
        <option >ROUTERS</option>
        <option >CAMERA</option>
        <option >IP PHONE</option>
        <option >DSL MODEMS</option>
    </select><br><br>
    <label>number of Items:</label>
    <input type="number" name="item" placeholder="enter number of items"><br><br>
    <label>price:</label>
    <input type="text" name="price" placeholder="price per item"><br><br>
    <input type="submit" value="PRINT INVOICE" name="invoice"><br><br>
    
    </fieldset>
    <br><br><br><br>
    <table border="1">
        <tr>
            <th>products</th>
            <th>buying Price</th>
            <th>selling Price</th>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
        <tr>
            <td>Camera</td>
            <td>2000</td>
            <td>5000</td>
        </tr>
    </table>
</form>

</center>
<?php

$name = $_POST['name'];
$product =$_POST['productname'];
$items = $_POST['item'];
$price = $_POST['price'];
$invoice = $_POST['invoice'];
if($items>=20){
$total=$items*$price;
$reduction=$total*0.5;
$payment=$total-$reduction;
$vat=$total*0.15;

echo"***********BILL************".'<BR>';
echo <<<_END
customer name is:$name<BR>
product is:$product<BR>
number of items :$items<BR>
price per item: $price<BR>
vat paid:$vat<BR>
reduction:$reduction<BR>
Total Payment:$payment<BR>




_END;

}else{

    $total=$items*$price;
    $vat=$total*0.15;
    echo"***********BILL************".'<BR>';
echo <<<_END
customer name is:$name<BR>
product is:$product<BR>
number of items :$items<BR>
price per item: $price<BR>
vat paid:$vat<BR>
Total Payment:$total




_END;

}


?>

</body>
</html>