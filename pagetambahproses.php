<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {

$q = mysql_query("INSERT INTO `page`
            (`page_title`,
             `page_content`)
VALUES ('$_POST[page_title]',
        '$_POST[page_content]')");


echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=page';</script";

}
?>