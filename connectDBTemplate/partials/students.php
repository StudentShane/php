<?php
// // querying the tables to return information about the student and the course that they are enrolled on
$students = $conn->prepare('SELECT
    student_id,
    student_name,
    dob,
    address,
    tel
    FROM student
');
$students->execute();/* runs query */
$students->store_result();/*storing info*/
$students->bind_result($studentId, $studentName, $dob, $address, $tel);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">Tel Number</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($students->fetch()): ?>
    <tr>
      <td><?= $studentId ?></td>
      <td><?= $studentName ?></td>
      <td><?= $dob ?></td>
      <td><?= $address ?></td>
      <td><?= $tel ?></td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>