<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      $conn = mysqli_connect("localhost","root","","crud") or die("Not connected");

      $sql = "SELECT * FROM student JOIN student_class WHERE student.class = student_class.cid";
      $result = mysqli_query($conn,$sql) or die("Not connected");

        if(mysqli_num_rows($result)>0){

     ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while ($row = mysqli_fetch_assoc($result)) {

           ?>

            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['cname'];?></td>
                <td><?php  echo $row['Phone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['ID']; ?> '>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['ID']; ?> '>Delete</a>
                </td>
            </tr>
          <?php }
      // else
      // { echo "string";}
      //   mysqli_close($conn);
          ?>

        </tbody>
    </table>
  <?php } ?>
</div>
</div>
</body>
</html>
