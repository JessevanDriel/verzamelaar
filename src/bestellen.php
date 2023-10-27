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
    <div class=" bg-slate-600 w-[300px] rounded-xl mt-20  sm:w-[600px] md:w-[700px] lg:w-[950px] xl:w-[1050px] text-gray-400 shadow-2xl p-2 h-fit "> 
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
        </div>          
 
    </div>             
</div>
                

<div class="flex items-center justify-center p-12" id="contact">
      <div class="mx-auto w-full max-w-[550px]">
        <form method="post" action="mail.php">
          <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-gray-400"> Full Name</label>
            <input type="text" name="name" id="name" placeholder="Full Name" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-700 focus:shadow-md"/>
          </div>
          <div class="mb-5">
            <label  for="email" class="mb-3 block text-base font-medium text-gray-400">Email Address</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-700 focus:shadow-md"/>
          </div>
          <div class="mb-5">
            <label for="adress" class="mb-3 block text-base font-medium text-gray-400">Adress</label>
            <input type="text" name="adress" id="adress" placeholder="Enter your adress" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-700 focus:shadow-md"/>
          </div>
          <div class="mb-5">
            <label for="street" class="mb-3 block text-base font-medium text-gray-400">Street</label>
            <input type="text" name="street" id="street" placeholder="Enter your street name" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-700 focus:shadow-md"/>
          </div>
          <center>
            <div>
              <button class="hover:shadow-form rounded-md bg-gray-600 hover:bg-gray-500 py-3 px-8 text-base font-semibold text-white outline-none">Submit</button>
            </div>
          </center>
       
        </form>
      </div>
    </div>


<script src="./js/script.js"></script>

</body>
</html>