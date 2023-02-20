<script type="text/javascript">
	function validasi() {
		var a = document.getElementById("a").value;
		var b = document.getElementById("b").value;
		
		if (a != "" && b!="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>

<form class="user" action="cek_login.php?op=in" method="post" onSubmit="validasi()">
<center>
<h1><img src="images/gembok.png" height="150px" width="150px"></h1>
<table style="background:url(images/login2.jpg); height:250px; width:400px;">
	<tr>
		<td style="color:#000000;">USERNAME </td>
		<td>:</td>
		<td><input type="text" name="username" id="a">
	</td>
	</tr>


	<tr>
		<td style="color:#000000;">PASSWORD </td>
		<td>:</td>
		<td><input type="password" name="password" id="b">
	</td>
	</tr>
	<tr>
		<td colspan="3" align="center"><a href="<?php echo"?hal=form_login";?>"  style="color:#0000CC; font-weight:400;">Lupa Password?</a>
	</td>
	</tr>
	
	<tr>
		<td><input type="submit" name="simpan" value="LOGIN" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:100px; color:#000; '></td>
	</tr>
</table>
</form>

</center>
<br />
<br />
<br />
<br />
