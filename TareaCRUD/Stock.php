<?php 
include './template/Header.php';


include './controllers/getWatches.php';
?>

<div class="container m-5 ">
    <a class="btn btn-success text-white" href="./index.php ">Log New Watch</a>
    </div>
    
<div class="container">
<div class="row ">
<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Models</th>
      <th scope="col">Ref.#</th>
      <th scope="col">mm</th>
      <th scope="col">Available</th>
      <th scope="col">Options</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
    
    foreach($watch as $data){
    ?>
    <tr>
      <th scope="row"><?php echo $data->id ?></th>
      <td><?php echo $data->models ?></td>
      <td><?php echo $data->ref ?></td>
      <td><?php echo $data->mm ?></td>
      <td><?php echo $data->available ?></td>
      <td><a class="btn btn-primary" href="./Edit.php?id=<?php echo $data->id ?> ">Edit</a>
    <a class="btn btn-danger" href="./controllers/Delete.php?id=<?php echo $data->id ?> ">Delete</a>
    
</td>

    </tr>
    
    <?php 
    }
    
    ?>
  
  </tbody>
</table>
    </div>
    </div>
<?php 
include './template/Footer.php'
?>