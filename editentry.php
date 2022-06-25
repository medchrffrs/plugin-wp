<!-- <h1>Edit Entry</h1> -->

<?php

global $wpdb;
$tablename = $wpdb->prefix."application_form";

?>

<h1>Edit Entry</h1>

<?php
if (isset($_GET['edit'])) {
  $upt_id = $_GET['edit'];
  $result = $wpdb->get_results("SELECT * FROM $tablename WHERE id='$upt_id'");
  
  foreach($result as $print) {
    // $name = $print->name;
    // $email = $print->email;

    // Select records
  echo "
  <table class='wp-list-table widefat striped'>
    <thead>
      <tr>
        <th width='25%'>User ID</th>
        <th width='25%'>Name</th>
        <th width='25%'>Email Address</th>
        <th width='25%'>Actions</th>
      </tr>
    </thead>
    <tbody>
      <form action='' method='post'>
        <tr>
          <td width='25%'>$print->id <input type='hidden' id='uptid' name='uptid' value='$print->id'></td>
          <td width='25%'><input type='text' id='uptname' name='uptname' value='$print->name'></td>
          <td width='25%'><input type='text' id='uptemail' name='uptemail' value='$print->email'></td>
          <td width='25%'>
            <button id='uptsubmit' name='uptsubmit' type='submit'>UPDATE</button> 
            <a href='admin.php?page=allentries'><button type='button'>CANCEL</button></a>
          </td>
        </tr>
      </form>
    </tbody>
  </table>";
  }
}

if (isset($_POST['uptsubmit'])) {
  $id = $_POST['uptid'];
  $name = $_POST['uptname'];
  $email = $_POST['uptemail'];
  $wpdb->query("UPDATE $tablename SET name='$name',email='$email' WHERE id='$id'");
  
  echo "<script>location.replace('admin.php?page=allentries');</script>";
}
?>



</table>
