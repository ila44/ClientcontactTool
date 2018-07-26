<html>
	<head>
	    <link rel="shortcut icon" type="image/jpg" href="logo.jpg" />	    
		<title>
			 RCM CC
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content= "width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">		
<script>

$(document).ready(function() {
	
	$('#mnemonic').keyup(function() {
		var query = $(this).val();
		if(query != '') {
		  
		  $.ajax({
			 url:"process.php",
			 method:"POST",
			 data:{query:query},
			 cache:false,
			 success:function(data) {
			   $('#countryList').fadeIn();
			   $('#countryList').html(data);
			 }
			 
		  });
		
		}
		
	});
	
	
});
	


</script>
     </head>

  <body>
    <div class="container-fluid">
	   <h2> Cerner</h2>
	     <div class="pull-left">
			<a href="http://www.google.com" >	<img src="cerner_home.jpg" style="height:50px; width:120px; margin-top:-7px;background-color:blue;"></img> </a>
		 </div>
		 <div class="pull-right">
		  <a href="http://www.cerner.com" >	<img src="Icons/home.ico" ></img> </a>
		  <a href="https://www.yahoo.com" >	<img src="Icons/contact.png"></img> </a>
		  <a href="http://www.fb.com" >	    <img src="Icons/mail.png"></img> </a>
		  <a href="http://www.twitter.com"> <img src="Icons/settings.png"></img> </a>
		  <a href="http://www.cricinfo.com"><img src="Icons/logout.jpg"></img> </a>
		 </div>
	   	
	</div>
  
    <div class="container" id="form-input">
 <form class="form" action="validate.php" method="POST" id="form1">
   <div class="form-group">
	<input name="mnemonic" type="text" id="mnemonic" class="form-control" placeholder="Client Mnemonic" 
	>
	<div id="countryList"></div>
	</input>
	
	</div>
<div class="form-group" >
    <select class="form-control" id="team"style="margin-left:80px;height:35px;width:170px;font-size:16px;">
      <option value="0">select</option>
      <option value="1">Ops Job</option>
      <option value="2">HARC</option>
      <option value="3">Suspended Charges</option>
      <option value="4">Encounter Mods</option>
      <option value="5">Cash Posting</option>
      <option value="6">Balancing</option>
    </select>
</div>
<div class="form-group">
  <button type="submit" class="btn btn-default" id="subm" style="font-size:16px;">Submit</button>
</div>
 </form>

</div>
</body>

	 
	 
	 
</html>
