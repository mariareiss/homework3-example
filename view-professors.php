<h1>Professors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Class</th> 
      </tr>
    </thead>
    <tbody>
<?php
while ($professor = $professors-> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $professor['professor_id']; ?></td>
    <td><?php echo $professor['professor_name']; ?></td>
    <td><?php echo $professor['professor_class']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
