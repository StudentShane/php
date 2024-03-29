<?php
include 'config/dbConfig.php';
include 'partials/header.php';
include 'partials/footer.php';

// querying the tables to return information about the student and the course that they are enrolled on
 $students = $conn->prepare('SELECT
  s.student_id,
  s.student_name,
  s.dob,
  e.enrolment_date,
  c.course_id,
  c.course_name
  FROM enrolment e
 -- joining all the tables (relationships)
  INNER JOIN student s ON e.fk_student = s.student_id
  INNER JOIN course c ON e.fk_course = c.course_id;
 ');
$students->execute();
$students->store_result();
$students->bind_result($studentId, $studentName, $dob, $enrolDate, $courseId, $course);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Enrolled On</th>
      <th scope="col">Course Name</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($students->fetch()): ?>
    <tr>
      <td><?= $studentId ?></td>
      <td><?= $studentName ?></td>
      <td><?= $dob ?></td>
      <td><?= $enrolDate ?></td>
      <td><?= $course ?></td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>

<?php
include 'partials/footer.php';
?>