<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: john'; 
    $to = 'deman@et.esiea.fr'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>message envoye</p>';
	} else { 
	    echo '<p>erreur!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>faux!</p>';
    }
?>