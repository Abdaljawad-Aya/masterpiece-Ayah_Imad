<?php
($con = mysqli_connect('localhost', 'root', '', 'sportinveins')) or
    die(mysqli_error($con));


  
    if (isset($_POST['save'])) {
        $uID = $con->real_escape_string($_POST['uID']);
        $ratedIndex = $con->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;
        
        if (!$uID) {
        $con->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
        $sql = $con->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
        $uData = $sql->fetch_assoc();
        $uID = $uData['id'];
        } else
        $con->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");
        
        exit(json_encode(array('id' => $uID)));
        }
        
        $sql = $con->query("SELECT id FROM stars");
        $numR = $sql->num_rows;
        
        $sql = $con->query("SELECT SUM(rateIndex) AS total FROM stars");
        $rData = $sql->fetch_array();
        $total = $rData['total'];
        
        $avg = fmod($total, $numR) ;
?>
