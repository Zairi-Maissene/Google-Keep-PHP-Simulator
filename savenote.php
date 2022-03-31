<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();


      var_dump($_SESSION);
    $title = empty($_POST["title"]) ? "No Title":$_POST["title"];
    $note = empty($_POST["note"]) ? "Empty Note":$_POST["note"];
    if(!isset($_SESSION['time']))
    $_SESSION['time']=array(date("h:i"));
    else array_push($_SESSION['time'],date("h:i"));
    
   
if(!isset($_SESSION['Note-List']))
{
    $_SESSION['Note-List']= array($note);
} 
else { 
  array_push($_SESSION['Note-List'],$note);
}
if(!isset($_SESSION['Title-List']))
{
    $_SESSION['Title-List']= array($title);
} 
else { 
  array_push($_SESSION['Title-List'],$title);
}
header("location:index.html")
   ?>

   

</body>
</html>


