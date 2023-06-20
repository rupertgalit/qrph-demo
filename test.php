<html>
<head>
<title>how to get radio button value in php without submit </title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
	h2 {
		text-align: center;
		font-size: -webkit-xxx-large;    
	}
	form {
		text-align: center;
		font-size: 26px;
	}
	h3 {
		text-align: center;
	}
</style>

</head>
<body>

<?php
 
	$gender = 'Male';
	
?>

	<h2>Choose Gender</h2>
		<form action="index.php" method="post">
			<label>Male</label>
				<input type="radio" name="gender" value="Male" />
		   
			<label>Female</label>
				<input type="radio" name="gender" value="Female" />        
			
		</form>
	<H3>Result:- <span class="result"><?php echo $gender; ?></span></h3>
<script>
    $('input[type=radio]').click(function(e) {
		
        var gender = $(this).val(); 
        $('.result').html(gender);
		
    });
	
</script>
</body>
</html>