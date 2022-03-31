<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <title>Notes</title>

</head>
<body>
    <?php
    session_start();
    //session_destroy();
   $arrayN=$_SESSION['Note-List'];
   $arrayT=$_SESSION['Title-List'];
   $arrayTi=$_SESSION['time'];

  
   foreach($arrayN as $index=>$note)
    echo      '<div class="container bg-light mx-auto border-bottom  border-secondary"style="width:50%" id="'. $index .'">
    <div class="row">
        <div class="col-8"> <h1>'.$arrayT[$index].' </h1> </div>
       <div class="col"> <h4> '.$arrayTi[$index].'</h4> </div>
    </div><div class="row" >
        <div class="col-10 note"  >'.$note.'</div> 
    </div>
    </div>';
  
     ?>


=


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>