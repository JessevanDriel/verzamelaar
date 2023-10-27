<?php
global $conn;
require('upload.php');
require('connection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body class="bg-gray-700">
<?php include 'navbar.html';?>

</div>
<center>
    
    <div class="form text-slate-400 font-medium mt-10 bg-slate-600 w-80 h-96 rounded-xl ">
        <form class="p-10" method="post" enctype="multipart/form-data" action="index.php">
            <div class="mb-4">
                <label for="title" class="block mb-1">Title</label>
                <input class="rounded-lg  " type="text" name="title" id="title" maxlength="30" >
            </div>
            <div class="mb-4">
                <label for="info" class="block mb-1">Information</label>
                <input class="rounded-lg  " type="text" name="info" id="info" maxlength="200" >
            </div>

            <div class="mb-4">
                <label for="price" class="block mb-1">Prijs</label>
                <input class="rounded-lg  " type="number" name="price" id="price" maxlength="30" >
            </div>
            <label for="file" >File Upload</label>

            <div class="mb-4 border rounded-lg w-64 ">
                <input class="rounded-full py-1 px-2" type="file" name="file" id="file" >
            </div>
            <div>
                <button class=" border rounded-lg py-1 px-2 text-slate-400 " type="submit" name="submit" >Submit</button>
            </div>
        </form>
    </div>
    
</center>

</body>
</html>
