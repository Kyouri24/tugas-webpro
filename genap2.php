<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<body>
<?php
$requestnumber =$_POST['requestnumber'];
$tanglah =$_POST['tanglah'];
$skill =$_POST['skill'];
$career =$_POST['career'];
$gender =$_POST['gender'];
$note =$_POST['note'];
$status =$_POST['status'];
?>
<table border=1>
<tr>
<td colspan=2 align="center"><b>Input Data Diri</b></td>
</tr>
<tr>
<td>Requestnumber</td><td><?php echo $requestnumber; ?></td>
</tr>
<td>Tanggal Lahir</td><td><?php echo $tanglah; ?></td>
</tr>
<td>Skill</td><td><?php echo $skill; ?></td>
</tr>
<td>Career</td><td><?php echo $career; ?></td>
</tr>
<td>Gender</td><td><?php echo $gender?></td>
</tr>
<td>Note</td><td><?php echo $note; ?></td>
</tr>
<td>Status</td><td><?php echo $status?></td>
</tr>
<a href='genap1.php'>INPUT DATA LAGI</a>
</body>
</html>