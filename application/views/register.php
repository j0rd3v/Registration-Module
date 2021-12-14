<!DOCTYPE html>
<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!-- Register page lets the user save information to database by filling up the form or input fields -->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #FDFEFE;
		background: #113d62;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #FDFEFE;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #FDFEFE;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #FDFEFE;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
       
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	} 
</style>
</head>
<body>
<div class="signup-form">
    
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>

		               <!-- Displays form -->

		               <?php

	                    echo validation_errors();
	                    echo form_open('register/verify');

	                    echo '<div class="form-group">';
	                    echo form_input('txtfname', '', 'id="txtfname" class="form-control" placeholder="First Name"');
	                    echo '</div>';

	                    echo '<div class="form-group">';
	                    echo form_input('txtmname', '', 'id="txtmname" class="form-control" placeholder="Middle Name"');
                      echo '</div>';
	                    
	                    echo '<div class="form-group">';
	                    echo form_input('txtlname','', 'id="txtlname" class="form-control" placeholder="Last Name"').'<br>';
                      echo '</div>';

                      echo form_label('Gender: ', 'txtgender');
                      echo '<div class="form-group">'; 
	                    echo form_radio('txtgender', 'Male', TRUE, 'id="txtgendermale" class="checkbox-inline"');
	                    echo form_label('Male', 'txtgendermale').' ';
	
	                    echo form_radio('txtgender', 'Female', FALSE, 'id="txtgenderfemale class="checkbox-inline"');
	                    echo form_label('Female', 'txtgenderfemale').'<br>';
                      echo '</div>';
                        
                      echo '<div class="form-group">'; 
	                    echo form_label('Birthday: ', 'txtbday').'<br>';     
	                    echo '<input type="date" id="txtbday" name="txtbday">';
	                    echo '<br>';
                      echo '</div>'; 

	                    echo form_label('Country: ', 'txtcountry');
	                    echo '<div class="form-group">'; 
	                    $options = array(
		                    'ph' => 'Philippines',
												'de' => 'Germany',
		                    'us' => 'United States',
		                    'jp' => 'Japan',
												'hk' => 'HongKong',
												'au' => 'Australia'
	                    );

	                    echo form_dropdown('txtcountry', $options, 'id="txtcountry class="select-dropdown"');
	                    echo '</div>';
                        
	                    echo '<div class="form-group">'; 
	                    echo form_input('txthouse_no', '', 'id="txthouse_no " class="form-control" placeholder="Floor/Dept/Building/House No"');
                      echo '</div>';

                      echo '<div class="form-group">'; 

	                    echo form_input('txtstreet', '', 'id="txtstreet" class="form-control" placeholder="Street"');
	                    echo '</div>';

	                    echo '<div class="form-group">'; 
	                    echo form_input('txtarea', '', 'id ="txtarea" class="form-control" placeholder="Area/Subdivision/Brgy/District"');
	                    echo '</div>';

	                    echo '<div class="form-group">'; 
	                    echo form_input('txtcity_province', '', 'id="txtcity_province" class="form-control" placeholder="City/Province"');
	                    echo '</div>';

	                    echo '<div class="form-group">'; 
	                    echo form_input('txtpostal_code', '', 'id="txtpostal_code" class="form-control" placeholder="Postal Code"');
	                    echo '</div>';

	                    echo '<div class="form-group">'; 
	                    echo form_input('txtphone', '', 'id ="txtphone" class="form-control" placeholder="Phone"');
	                    echo '</div>';

	                    echo '<div class="form-group">'; 
	                    echo form_input('txtemail', '', 'id="txtemail" class="form-control" placeholder="Email Address"');
	                    echo '</div>';

	                    echo '<div class="form-group">'; 
	                    echo form_input('txtuser', '', 'id="txtuser" class="form-control" placeholder="Username"');
	                    echo '</div>';

	                    echo '<div class="form-group">'; 
	                    echo form_password('txtpass', '', 'id="txtpass" class="form-control" placeholder="Password"');
	                    echo '</div>';

	                    echo '<div class="form-group">'; 
	                    echo form_password('txtrepass', '', 'id="txtrepass" class="form-control" placeholder="Re-Type Password"');
	                    echo '</div>';

                      echo '<div class="form-group">';
	                    echo form_submit('btnRegister', 'REGISTER', 'class="btn btn-success btn-lg btn-block"');
                      echo '</div>';

	                    echo form_close();

	                    ?>
	    
</div>
</body>
</html>                            