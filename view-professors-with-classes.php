<h1>Professors with classes</h1>
<div class="card-group">
<?php
while ($professor = $professors-> fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $professor['professor_name']; ?></h5>
      <p class="card-text">
<?php
  $classes= selectClassByProfessor($professor['professor_id']);
  while ($class = $classes-> fetch_assoc()){
?>
<?php   
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Class:<?php echo $professor['professor_class'];?></small></p>
    </div>
  </div>
 
<?php
}
?>
</div>
