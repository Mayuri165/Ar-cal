
<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
			function calcMe(){
				document.getElementById("al").value=(parseFloat(document.getElementById("1").value)+parseFloat(document.getElementById("2").value))/2;
document.getElementById("ab").value=(parseFloat(document.getElementById("3").value)+parseFloat(document.getElementById("4").value))/2;
document.getElementById("lb").value=((parseFloat(document.getElementById("1").value)+parseFloat(document.getElementById("2").value))/2) * ((parseFloat(document.getElementById("3").value)+parseFloat(document.getElementById("4").value))/2);
document.getElementById("acre").value=(((parseFloat(document.getElementById("1").value)+parseFloat(document.getElementById("2").value))/2) * ((parseFloat(document.getElementById("3").value)+parseFloat(document.getElementById("4").value))/2))/1089;
			}
			
		</script>
<style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
</head>
<body>

<table style="width:100%" >
  <tr align=center>
    <th><h3>Length1: </h3><input type="text" id="1" onkeyup="calcMe()" value="0" /></th>
   <th><h3>Length2: </h3><input type="text" id="2" onkeyup="calcMe()" value="0" /></th>
   <th><h3>Avg Length: </h3><input type="text" id="al" value="0" />  
  </tr>

  <tr align=center>
    <td><h3>Width1: </h3><input type="text" id="3" onkeyup="calcMe()" value="0" /></td>
<td><h3>Width 2: </h3><input type="text" id="4" onkeyup="calcMe()" value="0" /></td>
<td><h3>Avg Width: </h3><input type="text" id="ab" value="0" /></td>
    
  </tr>
  <tr align=center>
    <td><h3>Area: </h3><input type="text" id="lb" onkeyup="calcMe()" value="0" /></td>
  </tr>
  <tr align=center>
   <td><h3>Area in AR: </h3><input type="text" id="acre" onkeyup="calcMe()" value="0" /></td>
  </tr>
</table>


</body>
</html>
