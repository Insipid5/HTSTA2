<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body class="ColorW">
   
      <div class="container ColorA ColorC">
         <h2 class="logo ColorA">CLASSCHAIRS</h2>
         <ul class="ColorD">
            <li class="ColorD"><a href="HomeEng.html" class="ColorD">Home</a></li>
            <li class="ColorD"><a href="AboutEng.html" class="ColorD">About</a></li>
            <li class="ColorD"><a href="ContactEng.html" class="ColorD">Contact</a></li>
            <li class="ColorD active"><a href="ProductsEng.html" class="ColorD">Products</a></li>
        </ul>
        <div class="dropdown ColorB ColorD">
            <button class="dropbtn ColorE ColorF">Language</button>
               <div class="dropdown-content ColorE">
                  <a href="ProductsRus.html" class="ColorL" ><img src="RusFlag.jpg"></a>
                  <a href="ProductsSrb.html" class="ColorL"><img src="SrbFlag.jpg"></a>
               </div>
            </div>                                             
      </div>



   <p class="title ColorW ">Products page</p>

   <table>
<tr>
    <th>name </th>
    <th>price</th>
    
  </tr>
    <?php

$handle = fopen("productss.txt", "r") or die("File not found"); 

while (($line = fgets($handle)) !== false) { 
    $piecesarray = explode(";",$line)
?>
   <tr>
    <td><?= $piecesarray[0] ?> </td>
    <td><?= $piecesarray[1] ?></td>
    <td><img src="<?= $piecesarray[2] ?>" height= "200px" width="200px";></td>
  </tr>
<?php
} 

fclose($handle);
    ?>
    </table>

   <div class="row ColorA ColorB">
      <div class="column ColorW ColorC ColorE">
         <a href="https://www.amazon.com/Essentials-Racing-Style-Leather-Gaming/dp/B01MEGHWKN/ref=sr_1_2?dchild=1&keywords=gaming+chairs&qid=1587297139&sr=8-2">
            <img src="chair1.jpg">
            </a>
            <div>
            Mesh back with built-in lumbar support Ergonomic Racing Chair: height adjustable pivot arms
            Adjustable headrest for maximum comfort, made with black nylon and a chrome base infinite back adjustment
            Executive style swivel chair perfect for office and desk</div>
            Price: 120$
      </div>           
   </div>

</body>
</html>