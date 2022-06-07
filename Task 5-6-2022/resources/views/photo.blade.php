<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload</title>
</head>
<body>
    
   <form action="" method="POST" enctype="multipart/form-data">
    @csrf

     <label for="">upload</label> <br>

     <input type="file" name="up">

     <input type="submit" name="upload">


   </form>


</body>
</html>