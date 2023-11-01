
 



<?php
  <html>
    <head>bill</head>
    <body>
        <form align="center" action="bill.php" method="post">
            <h3> Supermarket</h3>
            <table align="center" border="1">
                <th>Item no</th>
                <th>item</th>
                <th>Qty</th>
                <th>Price</th>
                
                <tr>
                    <td><input type="text" id="c1r1"></td>
                    <td><input type="text" id="c1r2"></td>
                    <td><input type="text" id="c1r3"></td>
                    <td><input type="text" id="c1r4"></td>
                </tr>
                <tr>
                    <td><input type="text" id="c2r1"></td>
                    <td><input type="text" id="c2r2"></td>
                    <td><input type="text" id="c2r3"></td>
                    <td><input type="text" id="c2r4"></td>
                </tr>
                
                
                
                
            </table>
            <h5>Total<?php echo number_format($total, 2); ?></h5>
            <button id="b1">submit</button>
            
        </form>
       
    </body>
</html>

$c1r1=$_REQUEST['c1r1'];
$c1r2=$_REQUEST['c1r2'];
$c1r3=$_REQUEST['c1r3'];
$c1r4=$_REQUEST['c1r4'];

$item1t=$c1r3*$c1r4;
$item1t=$c2r3*$c2r4;
$total=$c1r4+$c2r4;


    
}

 


?>
