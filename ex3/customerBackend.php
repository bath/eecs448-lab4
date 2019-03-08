<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>You have now checked out - similar to what I do in Physics class.</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="title">
      <h2 id="mainTitle">Hello. You have bought a lot of things. The list is below.</h2>
      <p id="subTitle">No, really. Thats a big bill...</p>
    </div>

    <div class="content">
      <center>
        <table border=1>
          <tr>
            <th class="dd"></th>
            <th class="dd">Quantity</th>
            <th class="dd">Cost Per Item</th>
            <th class="dd">SubTotal</th>
          </tr>
          <tr>
            <th class="dd">Crocs</th>
            <th><?php echo $_POST["q"][0];?></th>
            <th>$50.00</th>
            <th><?php  sub1();?></th>
          </tr>
          <tr>
            <th class="dd">Bed</th>
            <th><?php echo $_POST["q"][1];?></th>
            <th>$100.00</th>
            <th><?php  sub2();?></th>
          </tr>
          <tr>
            <th class="dd">Boat</th>
            <th><?php echo $_POST["q"][2];?></th>
            <th>$36.00</th>
            <th><?php  sub3();?></th>
          </tr>
          <tr>
            <th class="dd">Shipping</th>
            <th><?php type()?></th>
            <th></th>
            <th><?php shipSub();?></th>
          </tr>
          <tr>
            <th class="dd" id="total">Total Cost</th>
            <th></th>
            <th></th>
            <th><?php total()?></th>
          </tr>
        </table>
        <p>Your password is: <?php pass();?></p>
      </center>

    </div>


  </body>
</html>



<?php
function pass()
{
  echo $_POST["pass"];
}


function sub1()
{
  $num = "50";
  $subtotal = $_POST["q"][0]*$num;
  echo "$".$subtotal.".00";
}

function sub2()
{
  $num = "100";
  $subtotal = $_POST["q"][1]*$num;
  echo "$".$subtotal.".00";
}

function sub3()
{
  $num = "36";
  $subtotal = $_POST["q"][2]*$num;
  echo "$".$subtotal.".00";
}

function total()
{
  $num1 = "50";
  $num2 = "100";
  $num3 = "36";

  $subtotal1 = $_POST["q"][0];
  $subtotal2 = $_POST["q"][1];
  $subtotal3 = $_POST["q"][2];

  $total = $subtotal1*$num1+$subtotal2*$num2+$subtotal3*$num3;

  $total = $total+$_POST["sh"];

  echo "$".$total.".00";
}

function type()
{
  if($_POST["sh"] == "50")
  {
    echo "Overnight";
  }
  elseif($_POST["sh"] == "5")
  {
    echo "Three day";
  }
  elseif($_POST["sh"] == "0")
  {
    echo "Free 7 day";
  }
}

function shipSub()
{
  echo "$".$_POST["sh"].".00";
}
 ?>
