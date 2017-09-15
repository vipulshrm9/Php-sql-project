<?php
include_once 'dbconfig.php';
$query="select * from tbl_uploads";
$res=mysqli_query($conn,$query);
$cou=mysqli_num_rows($res);
?>

<!DOCTYPE html>
<html>
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label><p style="color:#330000"><font face="Georgia">Uploaded Files Database</font></p></label>
</div>

<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
	<tr>
	<th colspan="4">
	<?php
   $a=$cou/5;
   $a=ceil($a);
   echo "Page : ";
   for($b=1;$b<=$a;$b++)
   {
      ?><a href="view.php?page=<?php echo $b;?>" style="text-decoration:none"><?php echo $b." "; ?></a> <?php
	  
   }
	?>
	</th>
    </tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
	
    <?php
	
	if(isset($_GET['page']))
{
	$page=$_GET["page"]; 
   
   if($page=="" || $page=="1")
   {
   $page1=0;
   }
   else
   {
   $page1=($page*5)-5;
   }
   
	$sql="SELECT * FROM tbl_uploads limit $page1,5";
	$result_set=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
}	
	?>	
	
	
    </table>
    
</div>
</body>
</html>