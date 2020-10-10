<html>
	<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title>Payment methods</title>
		<style>
		html { 
  			background: url(bg7.jpeg) no-repeat center center fixed; 
  			-webkit-background-size: cover;
  			-moz-background-size: cover;
  			-o-background-size: cover;
  			background-size: cover;				
			
 		font-family:Optima;
 		color:darkred;

			}	


.buttonz{
    padding-left: 15px;
    width:200px; 
    cursor:pointer;
 
    border-radius: 25px; 
  
    font-family:Optima;
    background-color:white;
    color:darkred;
    font-size:20px;
    border-style:solid;
    border-color:darkred;


}
		.proceed-btn{
			cursor: pointer;
			font-size: 20px;
			width: 100%
			border-color: transparent;
			border-radius: 6px;
			margin-bottom: 10px;
			background: #7dc855;
			left:33%;
			position:absolute;
}
		.proceed-btn a{
			text-decoration: none;
			color: #fff;
}




a:hover{
	background-color:darkred;
	text-decoration: none;
	color:white;
}

a
{
color:darkred;

}

.logo
{

background-color: white;

}

.logo:hover
{
   background-color:darkred;

}		




	</style>
	</head>
	<body>
		<h1 align="center" style="font-size: 65px; top:8%; left: 35%; position: absolute; ">Mode of Payment</h1>
		


<div class="complete" style="top:30%; left: 43%; position: absolute;">
	


	

<div class="cash"  style="background-color: black; width:200px; height: 75px; ">

<img src="cash.png" alt="cash" align="left" title="cash" height= "75" width ="75"/>
<label> 
			
<style>
   	 		#cb_span{color:white;}
			</style>
			<br>
<input type= "radio" id="1" name= "service" required><span id="cb_span"><b>CASH</b></span>
			</label><br>

</div>


		
<br>

<div class="card"  style="background-color: black; width:200px; height: 75px;">
<img src="card1.png" alt="card" align="left" title="card" height= "75" width ="75"/>
			<label> 
			<style>
   	 		#cb_span{color:white;}
			</style> 
			<br>
			<input type= "radio" id="2" name= "service" required><span id="cb_span"><b>CARD</b></span>
			</label><br>
		</div>
		<br>
		


<div class="net banking "  style="background-color: black; width:200px; height: 75px;">
			<img src="netbank.jpeg" alt="net banking " align="left" title="net banking" height= "75" width ="75"/>
			<label> 
			<style>
			<br>
   	 		#cb_span{color:white;}
			</style>
			<input type= "radio" id="3" name= "service" required><span id="cb_span"><b>NET BANKING</b></span>
			</label><br>
		</div>
		<br>
	
	

<div class="paytm"   style="background-color: black; width:200px; height: 75px;">
			<img src="paytm.jpeg" alt="paytm" align="left" title="paytm" height= "75" width ="75"/>
			<label> 
			<style>
   	 		#cb_span{color:white;}
			</style>
			<br>
			<input type= "radio" id="4" name= "service" required><span id="cb_span"><b>PAYTM</b></span>
			</label><br>
		</div>
		<br>
		

		
<input class="proceed-btn" type= "button" onclick=payment(); value="Proceed">
</div>


	<!-------------------------------------------------------------------------------------->
	<a href="homepage1.html"><div class="logo"  style=" height: 85px; width: 100%;top:-1%; position: fixed; font-family:Optima;">
			<p><img align="center" src="PAM_LOGO.jpg" style="height: 70px; width: 70px; top:-3%; left: 40%; position: absolute;"><b style=" font-size: 28px; left:45%; top:16%; position: absolute;">PAM....Pizzas And More</b></p>
		</div></a>



<script>

function payment()
{
 

if (document.getElementById('1').checked) 
{
 location.href="thankyoupage.php";
}
if (document.getElementById('2').checked) 
{
 location.href="card_details.php";
}
if (document.getElementById('3').checked) 
{
 location.href="choosebank.php";
}
if (document.getElementById('4').checked) 
{
 location.href="paytmdetails.php";
}


};




</script>

 
	</body>

</html>