<?php
if($_POST) {

    $to = "laura@lauraphippen.com";
    $name = $_POST['name'];
    if (!ctype_xdigit($name)) {
        $from = "From: " . $_POST['email'];
        $phone = $_POST['phone'];
        $subject = "Website Contact";
        $message = $_POST['message'] . "\n\n" . $name . "\n" . $phone;
        if(mail($to, $subject, $message, $from)) {
        	header('Location: /#contact');
    	}else{
    		header('Location: /?failed#contact');
    
    	}
    } else {
        header('Location: /?failed#contact');
    }
}

?>
