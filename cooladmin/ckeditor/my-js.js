function adduser()
	{
		  var password = document.forms["user"]["password"].value
		  var cpassword = document.forms["user"]["cpassword"].value
		  
		 		  
		if (cpassword != password)
		  {				
		    document.getElementById('passerror').innerHTML = 'Error: Password Not Match, Please Re-enter Password.';
		    return false;
		  }
	  
		 	  
	}
	