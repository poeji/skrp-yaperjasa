<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {

$Q = mysql_query("UPDATE `page`
SET `page_title` = '$_POST[page_title]',
  `page_content` = '$_POST[page_content]'
WHERE `page_id` = '$_POST[id]'");	

echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=page';</script";

}
?>