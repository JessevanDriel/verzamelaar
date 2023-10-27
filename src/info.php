<?php
global $conn;

require('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">

</head>
<body class="bg-gray-700">
    <?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM fileup WHERE id = $id";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0 ) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $info = $row['info'];
        $price = $row['price'];
        $imagePath = 'media/' . $row['image'];
    }
    
    ?>

<?php include 'navbar.html';?>
<div class="w-[100vw] flex justify-center content-center">
    <div class=" bg-slate-600 w-[300px] rounded-xl mt-20  sm:w-[600px] md:w-[700px] lg:w-[950px] xl:w-[1050px] text-gray-400 shadow-2xl p-2 "> 
        <div class="border-2 border-white p-10 rounded-xl grid grid-cols-2 ">
            <img class="sm:w-[300px] md:w-[350px] lg:w-[450px] xl:w-[500] " src="<?= $imagePath ?>" alt="">
            <div>
                <div class="font-bold" >Information:</div>
                <div class="font-medium" ><?= $info ?> </div>
            </div>
            
            <div class="font-bold text-[2rem] text-center"> <h1><?= $title ?></h1></div>
            <div>
                <div class="font-bold">Price</div>
                <div class="font-medium " > € <?= $price ?>,00 </div>
                <a class=" border border-[#424242] rounded-3xl pl-2 pr-2 pt-1 pb-1 shadow-xl bg-gray-600" href="bestellen.php?id=<?=$id?>">Bestel nu</a></div>
        </div>          
 
    </div>             
</div>
                

<script src="./js/script.js"></script>

</body>
</html>