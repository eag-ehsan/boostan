// JavaScript Document
		
function setTokkenlogin()
{
	var checkgoon = 1;
	var vllgusername = document.getElementById('llgusername');
	var vlgusername = document.getElementById('lgusername');
	var vllgpassword = document.getElementById('llgpassword');
	var vlgpassword = document.getElementById('lgpassword');
	if(vlgusername.value == "")
	{
		vllgusername.style.color = "red";
		vllgusername.innerHTML = "Username Please:";
		checkgoon = 0;
	}
	else
	{
		vllgusername.style.color = "black";
		vllgusername.innerHTML = "Username:";
	}
	if(vlgpassword.value == "")
	{
		vllgpassword.style.color = "red";
		vllgpassword.innerHTML = "Password Please:";
		checkgoon = 0;
	}
	else
	{
		vllgpassword.style.color = "black";
		vllgpassword.innerHTML = "Password:";
	}
	if(checkgoon==1)
	{
		var ttok1 = "<?php $_SESSION['ttoken2'] =  bin2hex(random_bytes(8));
		echo $_SESSION['ttoken2'];?>";
		document.contact.timtoken.value = ttok1;
		document.forms["contact"].submit();	
	}
}
function showllg()
{
	document.getElementById('learnitorLogin1').style.display='block';
}
			
function showerrorssu(whichone)
{
	var lvsupusername = document.getElementById('lsupusername');
	var lvsupemail = document.getElementById('lsupemail');
	if(whichone==101)
	{
		lvsupusername.style.color = "red";
		lvsupusername.innerHTML = "Username not allowed:";
	}
	else if(whichone==102)
	{
		lvsupemail.style.color = "red";
		lvsupemail.innerHTML = "Email not allowed:";
	}
				
}
			
function showsuccesssu()
{
	var vllgusername = document.getElementById('llgusername');
	var vlgusername = document.getElementById('lgusername');
	vllgusername.style.color = "green";
	vllgusername.innerHTML = "Now you can login:";
	vlgusername.value = "<?php echo $_POST['username']; ?>";
}
			
function showerrorlg(whichone)
{
	var vllgusername = document.getElementById('llgusername');
	var vlgusername = document.getElementById('lgusername');
	var vllgpassword = document.getElementById('llgpassword');
	if(whichone==201)
	{
		vllgusername.style.color = "red";
		vllgusername.innerHTML = "Invalid Username";
		vlgusername.value = "<?php echo $_POST['username']; ?>";
	}
	else if(whichone==202)
	{
		vllgpassword.style.color = "red";
		vllgpassword.innerHTML = "Invalid Password";
		vlgusername.value = "<?php echo $_POST['username']; ?>";
	}
				

}

function logoutfunc()
{
	document.contact.timtoken.value = "logout";
	document.forms["contact"].submit();	
}	
