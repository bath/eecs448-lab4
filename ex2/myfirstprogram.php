<?php
  #getting users location data based on IP address
  function get_client_ip() {
          $ipaddress = '';
          if (isset($_SERVER['HTTP_CLIENT_IP']))
              $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
          else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
              $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
          else if(isset($_SERVER['HTTP_X_FORWARDED']))
              $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
          else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
              $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
          else if(isset($_SERVER['HTTP_FORWARDED']))
              $ipaddress = $_SERVER['HTTP_FORWARDED'];
          else if(isset($_SERVER['REMOTE_ADDR']))
              $ipaddress = $_SERVER['REMOTE_ADDR'];
          else
              $ipaddress = 'UNKNOWN';
          return $ipaddress;
      }
   $PublicIP = get_client_ip();
   $json  = file_get_contents("http://ipinfo.io/$PublicIP/geo");
   $json  =  json_decode($json ,true);
   $country =  $json['country'];
   $region= $json['region'];
   $city = $json['city'];

   function locationDataNotFoundHandler()
   {
     if($city == NULL)
     {
       $saying = "KU severs are obfuscating the clients IP. Hosting on another server would alliviate the lack of location info. You are not safe.";
       return($saying);
     }
     else {
       $goodInfo = $country.",".$city;
       return($goodInfo);
     }

   }
   $loc = locationDataNotFoundHandler();



 ?>
