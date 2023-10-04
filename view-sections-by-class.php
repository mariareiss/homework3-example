<h1>Sections by class</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Number</th>
        <th>Description</th> 
        <th>Semester</th>
        <th>Room</th>
        <th>Day/Time</th> 
      </tr>
    </thead>
    <tbody>
      <?php
      while ($section = $Sections->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $section['class_id']; ?></td>
          <td><?php echo $section['class_number']; ?></td>
          <td><?php echo $section['class_description']; ?></td>
          <td><?php echo $section['semester']; ?></td>
          <td><?php echo $section['room']; ?></td>
          <td><?php echo $section['day_time']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
