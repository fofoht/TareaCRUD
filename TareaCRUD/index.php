<?php 
include './template/Header.php';

?> 
<?php 
include './controllers/getWatches.php';
?>

<div class="container bg-black ">
<div class="container m-5 ">

    <div class ="card bg-black text-white">
    <div class="card-header"> Log-In Watch  </div>
        <form action="./controllers/Register.php" method ="POST">
            <div class="m-4">
                <label>Models</label>
                <input class="form-control" type="text" placeholder="Enter Model" name="inputModel" required >
            </div>
            <div class="m-4">
                <label>Ref.#</label>
                <input class="form-control" type="text" placeholder="Enter Reference #" name="inputRef" required >
            </div>
            <div class="m-4">
                <label>Mm</label>
                <input class="form-control" type="text" placeholder="Enter case size" name="inputMm" required >
            </div>
            <div class="m-4">
                <label>Available</label>
                <input class="form-control" type="text" placeholder="Enter Available #" name="inputAvailable" required >
            </div>
            
            <input type="submit" class="btn btn-primary m-4" value="Register">
            <a class="btn btn-success text-white" href="./Stock.php">View Stock<a/>
            
        </form>
    
</div>
</div>
</div>

   <?php 
   include './template/Footer.php';
  
   

   ?>