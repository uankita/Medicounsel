<?php
include("connection.php");
$query="select * from tbl_pat order by pat_id ";
$res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<table align="center" border="1">
<tr>
<th>s.no</th>
<th>name</th>
<th>fname</th>
<th>mobile</th>
<th>email</th>
<th>password</th>
<th>age</th>
<th>gender</th>
<th>dob</th>
<th>edit</th>
<th>delete</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><a href="pat_edit.php?pat_id=<?php echo $row['pat_id'];?>">edit</a></td>
<td><a href="pat_delete.php?pat_id=<?php echo $row['pat_id'];?>">delete</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</body>
</html>