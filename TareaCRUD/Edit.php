<?php
 include './template/Header.php';

 include './model/Connection.php';

 $idWatch = $_GET['id'];

 $query = $db->prepare("SELECT * from stock where id = ?");
 $query->execute([$idWatch]);

 $watch = $query->fetch(PDO::FETCH_OBJ);
 
?>
<div class="container m-4">
<div class ="card bg-black text-white">
    <div class="card-header"> Edit Watch  </div>
        <form action="./controllers/Update.php" method ="POST">
            <div class="m-4">
                <label>Models</label>
                <input class="form-control" type="text" placeholder="Enter Model" value="<?php echo $watch->models ?>" name="inputModel" required >
            </div>
            <div class="m-4">
                <label>Ref.#</label>
                <input class="form-control" type="text" placeholder="Enter Reference #" value="<?php echo $watch->ref ?>" name="inputRef" required >
            </div>
            <div class="m-4">
                <label>Mm</label>
                <input class="form-control" type="text" placeholder="Enter case size" value=<?php echo $watch->mm ?> name="inputMm" required >
            </div>
            <div class="m-4">
                <label>Available</label>
                <input class="form-control" type="text" placeholder="Enter Available #" value=<?php echo $watch->available ?> name="inputAvailable" required >
            </div>
            <input type="hidden" class="id" value= "<?php echo $watch->id ?>">
            <input type="submit" class="btn btn-primary m-4" value="Update">
        </form>
    
</div>
</div>
<?php 
include './template/Footer.php';
?>