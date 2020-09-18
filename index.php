<!DOCTYPE HTML>
<html lang = "en">
<head>
  <!-- basic.html -->
  <title>We are working</title>
  <meta charset = "UTF-8" />
</head>
<body>
<?php 
include "top.php";
?>
<main>
    <article>
        <section>
  <table>
	<caption><strong> Registar Enrollement </strong></caption>
	<tr>
		<th> Building </th>
		<th> Room</th>
		<th> Day</th>
	</tr>
<?php

$sql = "SELECT  Bldg, Room, Days FROM tblEnrollments";

$statement = $pdo->prepare($sql);
$statement ->execute();
$records = $statement->fetchAll();
foreach ($records as $record){
	print '<tr>';
	print '<td>' . $record['Bldg'] . '</td>';
	print '<td>' . $record['Room'] . '</td>';
	print '<td>' . $record['Days'] . '</td>';
	print '</tr>' . PHP_EOL;
}
?>
      </table>
        </section>
    </article>
</main>
    <?php include 'footer.php';?>
</body>
</html>