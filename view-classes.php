<h1>Classes</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th> 
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($class = $Classes-> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $class['class_id']; ?></td>
    <td><?php echo $class['class_number']; ?></td>
    <td><?php echo $class['class_description']; ?></td>
    <td>
       <form method="post" action="sections-by-class.php>
         <input type="hidden" name="sid" value="<?php echo $class['class_id']; ?>">
         <button type="submit" class="btn btn-primary">Sections</button>
       </form>  
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
