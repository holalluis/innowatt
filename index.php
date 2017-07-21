<!doctype html><html><head>
	<?php include'imports.php'?>
	<meta charset=utf-8>
	<title>innoWatt</title>
	<style>
		a{
			color:blue;
		}
		#moduls{
			font-size:20px;
			text-align:left;
			font-family:monospace;
		}
		#moduls th{
			font-weight:normal;
		}
		#moduls td{
			color:#666;
			padding-left:50px;
			font-size:14px;
		}
	</style>
</head><body>

<!--titol-->
<h1>ICRA->innoWatt</h1>
<p>Productes</p>

<!--taula moduls-->
<table id=moduls>
	<tr>
		<th>innoWatt-&gt;<a href="smartReader">smartReader</a>
		<td>Llegir la corba de potència (kW) dels comptadors intel·ligents (protocol IEC-60870-5-102)
	</tr>
	<tr>
		<th>innoWatt-&gt;<a href="factura">factura</a>
		<td>Calculadora de factures a partir de la corba de potència (kW)
	</tr>
	<tr>
		<th>innoWatt-&gt;<a href="optimize">optimize</a>
		<td>Servei d'optimització de la potència contractada
	</tr>
	<tr>
		<th>innoWatt-&gt;<a href="cloud">cloud</a>
		<td>Servei integrat de gestió de les dades de potència i factures online
	</tr>
</table>

<!--footer-->
<div id=footer>
	<style>
		#footer{
			margin-top:100px;
			display:flex;
			flex-wrap:wrap;
			justify-content:center;
			font-size:12px;
			color:#666;
		}
	</style>
	<div>
		<a href="///www.icra.cat" target=_blank>icra.cat</a>
	</div>
</div>
