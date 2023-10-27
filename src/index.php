<?php
global $conn;
require('upload.php');
require('connection.php');
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
  <link href="./style.css" rel="stylesheet">
  <title>Verzamelaar</title>

</head>
<body class="bg-gray-700">

<?php include 'navbar.html';?>
<center>
    <div class="w-[100vw]">
     <div class=" mt-10 mx-[60px] font-bold text-gray-300 w-[60vw] min-[640px]:w-[40vw] text-center" >
        <h1 class="text-xl " >Verzamelaar</h1>
        <p class=" mt-5 " >Welkom op de verzamelaars pagina van Jesse van Driel, op deze pagina vind je verschillende model auto's die je kan bekijken en bestellen.</p>
    </div>
    <div >
        <img class="w-[40rem] relative top-0 left-0 " src="media/autos.png" alt="">
    </div>
</div>
</center>

   

<!-- main -->
<div class=" grid grid-cols-2 min-[640px]:grid-cols-2 lg:grid-cols-4 md:grid-cols-3 bg-slate-500 rounded-md min-[640px]:mx-[60px] mx-[20px] mt-10">

    <?php

    $listSql = "SELECT ID, title, info, price, image FROM fileup";
    $listResult = mysqli_query($conn, $listSql);

    if ($listResult && mysqli_num_rows($listResult) > 0) {

        $i = 0;

        while ($row = mysqli_fetch_assoc($listResult)) {
            $fileId = $row['ID'];
            $title = $row['title'];
            $info = $row['info'];
            $price = $row['price'];
            $imagePath = 'media/' . $row['image'];
            ?>
            <center>
                <div class=" bg-slate-600 h-64 m-5 min-[640px]:m-10 flex items-center justify-center flex-col rounded-xl shadow-2xl gridimg " >
                     <img class=" max-w-80 max-h-32 rounded-2xl bg-transparent" src="<?= $imagePath ?>" alt="">
                    <div class=" font-bold text-xl drop-shadow-sm" ><?= $title ?></div>
                     <button class="flex flex-row">
                    <div class="font-medium text-base " > € <?= $price ?>,00 </div>
                </button>
                 <a class=" border border-[#424242] rounded-3xl pl-2 pr-2 pt-1 pb-1 shadow-xl bg-gray-600 " href="info.php?id=<?=$row["ID"]?>"><h2>Meer Info</h2></a>
                </div>             
            </center>
            <?php
            $i++;
        }
    } else {
        echo "  No files found.";

    }
    ?>
  <script src="./js/script.js"></script>
</body>
</html>