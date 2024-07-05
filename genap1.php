<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  
<title></title>
<body>
<form action="genap2.php" method="post">
<b>Input Data Diri</b>
<br>
<pre> 
RequestNumber  : <input type='text' name='requestnumber'>

Tanggal Lahir  : <input type='date' name='tanglah'>

Skill          : <select name='skill'>
    <option value="">Select a Skill</option>
    <option value='HTML'>HTML
    <option value='Javascript'>Javascript
    <option value='MySQL'>MySQL
</select> 
<p>
Career         : <select name='career'>
<option value="">Select a Career</option>
    <option value=' D3'>D3
    <option value='S1'>S1
    <option value='S2'>S2
    <option value='S3'>S3
</select>
<p>
Gender         : <input type='radio' name='gender' value='Man'>Man <input type='radio' name='gender' value='Woman'>Woman
<p>
Note           : <textarea name='note' rows='4' cols='40'></textarea>
<p>
Status         : <select name='status'>
<option value="">Select a Status</option>
    <option value='SD'>SD
    <option value='SMP'>SMP
    <option value='SMK'>SMK
</select>
<p>
<input type="submit" value="Submit"><input type="reset" value="Cancel">
</body>
</html>