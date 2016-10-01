<?php
/**
 * The footer file contains the closing of the "site-content" div and all content after.
 */?>




	<?php wp_footer(); ?>
	<?php
	 
	  //response generation function
	  $response = "";
	 
	  //function to generate response
	  function my_contact_form_generate_response($type, $message){
	 
	    global $response;
	 
	    if($type == "success") $response = "<div class='success'>{$message}</div>";
	    else $response = "<div class='error'>{$message}</div>";
	 
	  }
	
		//php mailer variables
		$to = get_option('admin_email');
		$subject = "Someone sent a message from ".get_bloginfo('name');
		$headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";
	 ?>
</body>
</html>