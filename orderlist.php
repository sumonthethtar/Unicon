<!DOCTYPE html>
<html>
<head>
  <title>Unicon</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">

</head>
<body>
<div id="header">
    <img src="images/unicon.png" >

       
</div><!--End of header-->



<div id="itemcontent" style="margin-left: 1%;width: 100%;">
  <h2 style="text-align: center;color:#4166a2;margin-top: 0;">All Order Item List</h2>
    <table class="table" width="100%" cellpadding="2" cellspacing="2" style="text-align: center;font-size: 17px;">
      <thead style="background-color:#63f536;color:black;">
        <th style="width: 10%;">Name</th>
        <th style="width: 10%;">Contact</th>
        <th style="width: 10%;">Address</th>
        <th style="width: 10%;">Item</th>
        <th style="width: 10%;">Amount</th>
        <th style="width: 10%;">OrderDate</th>
      </thead>
      <tbody>
  <?php
    include("database.php");
    $result = mysql_query("SELECT * FROM unicon.order");
        ?>
    <?php while($row = mysql_fetch_assoc($result)): ?>

         <tr style="background-color: lightgray;">
          <td style="width: 10%;"><?php echo $row['name']; ?></td>
          <td style="width: 10%;"><?php echo $row['contact']; ?></td>
          <td style="width: 10%;"><?php echo $row['address']; ?></td>
          <td style="width: 10%;"><?php echo $row['item']; ?></td>
          <td style="width: 10%;"><?php echo $row['amount']; ?></td>
          <td style="width: 10%;"><?php echo $row['dateordered']; ?></td>
      </tr>
      </tbody>
        <?php endwhile; ?> 

    </table>
  
    <a href="cpanel.php"><input type="submit" style="background-color: #0df9eb;font-family: georgia;padding: 12px;border-radius: 5px;margin-top: 2%;"  value="Back to Main"  class="form-control"></a>
</div><!--Body Content End-->

</body>
</html>