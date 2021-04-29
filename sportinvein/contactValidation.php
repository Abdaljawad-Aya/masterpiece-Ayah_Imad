<?php
// Name validation
if(empty($name)){
    $nameEmptyErr = '<div class="error">
        Name can not be left blank.
    </div>';
} 

// Allow letters and white space 
else if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
    $nameErr = '<div class="error">
        Only letters and white space allowed.
    </div>';
} else {
    echo $name . '<br>';
}

  if(empty($email)){
    $emailEmptyErr = '<div class="error">
        Email can not be left blank.
    </div>';

} // E-mail format validation
else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
    $emailErr = '<div class="error">
            Email format is not valid.
    </div>';
} else {
    echo $email . '<br>';
}

  // Text-area validation
  if(empty($email_title)){
    $EmailTitleEmptyErr = '<div class="error">
        This field is required.
    </div>';
} else {
    echo $email_title . '<br>';
}


?>