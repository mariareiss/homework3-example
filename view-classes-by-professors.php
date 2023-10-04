<h1>Classes by Professors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th> 
      <th>Semester</th>
      <th>Room</th>
      <th>Day_Time</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($class = $classes-> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $class['class_id']; ?></td>
    <td><?php echo $class['class_number']; ?></td>
    <td><?php echo $class['class_description']; ?></td>
    td><?php echo $class['semester']; ?></td>
    td><?php echo $class['room']; ?></td>
    td><?php echo $class['day_time']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
