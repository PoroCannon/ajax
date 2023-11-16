<?php
    $id = $_POST['id'];
    $con = mysqli_connect("localhost","root","","pytania");
    $rel = mysqli_query($con,"SELECT * FROM pytania WHERE id = $id");
    $wyn = mysqli_fetch_array($rel);
    echo $wyn[1];
?>