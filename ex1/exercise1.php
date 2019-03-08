<?php
  echo "<p>Hello, World!</p>";
  echo "<br><br><br>";

  echo "<table>";

  $rows = 100;
  $cols = 100;

  for ($r =1; $r <= $rows; $r++){ #outer for loop
      if($r == 0)
      {
      }
      else {
        echo "<tr>";
      }

      #inner for loop
      for ($c = 0; $c <= $cols; $c++)
      {
        if($c == 0)
        {

        }
        else {
          echo "<td>" .$c*$r. "</td>";
        }
      }
      if($r == 0)
      {
      }
      else {
        echo "<tr>";
      }
  }
  echo "</table>";
 ?>
