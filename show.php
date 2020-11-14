<html>
<head>
<title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab-itf17.mysql.database.azure.com', 'Aphatsara@lab-itf17', 'Po0926245419', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
  <table class="table" width="500" border="5" bordercolor="white">
      <thead class="thead-dark">
        <tr>
          <th 40%> <div align="center">Name</div></th>
          <th width=40%> <div align="center">Comment </div></th>
          <th width=20%> <div align="center">Actions </div></th>
        </tr>
</div>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr bgcolor="#BEBEBE">
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td>
      <a href="form.html?id=<?php echo $fetch['Name']; ?>">Edite</a>
      echo "<td><a href='UserDelete.php?name=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">Delete</a></td> ";
      echo "</tr>";
    </td>
  </tr>
<?php
}
?>
</table>
  <center><input type="button" value="Insert" onclick=form.html></center>
<?php
mysqli_close($conn);
?>
</body>
</html>
