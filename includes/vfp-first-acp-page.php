<?php

//if the user enters something on the form, post the data to the server. 
	if ( !empty( $_POST )) {
		gh_vfp_save_form ( $_POST );
	}

//remove slashes to avoid data corruption before sending input data.
	$header = wp_unslash (get_option( 'gh_vfp_header_data' ));
	$footer = wp_unslash (get_option( 'gh_vfp_footer_data' ));
?>

<style>
body {
  font-family: Arial;
}

input[ type=text ], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[ type=submit ] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[ type=submit ]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>

<h3>Header Data</h3>
<p>Here is where you enter the data that will go into the header and footer:</p>

<div class="container" >
  <form action="admin.php?page=very-first-plugin/includes/vfp-first-acp-page.php" method="post">

    <label>Header Data</label>
    <input value="<?php echo esc_attr ($header) ?>" type="text" name="gh_vfp_header_data" id="header_data" placeholder="<!-- This goes in the header -->">

    <label>Footer Data</label>
    <input value="<?php echo esc_attr ($footer) ?>" type="text" name="gh_vfp_footer_data" id="footer_data" placeholder="<!-- This goes in the footer -->">
  
    <input type="submit" value="Submit">
  </form>
</div>	

</body>