<?php 
    //creamos la sesion 
session_start(); 
    //validamos si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion nos regresará a login.php 
if(!isset($_SESSION['user_id']))  
{ 
	header('Location: ../../index.php');  
	exit(); 
}  
?>
<html>
<head>
	<title>Consulta</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Consulta</title>
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/datagrid-detailview.js"></script>
	<script type="text/javascript" src="table/js/jquery.tablesorter.js"></script> 
	<script type="text/javascript" src="stupidtable.js"></script>
	<script type="text/javascript" src="stupidtable.min.js"></script>
	
	<script type="text/javascript">
		$("#dg").stupidtable();
	</script>
	
	
	
	<script type="text/javascript">

		$(function(){
			
			$('#dg').datagrid({
				view: detailview,
				detailFormatter:function(index,row){
					return '<div style="padding:2px"><table id="ddv-' + index + '"></table></div>';
				},
				onExpandRow: function(index,row){
					
					$('#ddv-'+index).datagrid({
						url:'datagrid22_getdetail.php?itemid='+row.CONS_ID,
						fitColumns:true,
						singleSelect:true,
						rownumbers:true,
						sortname: 'COD',
						sortorder: 'desc',
						subgrid:true,
						loadMsg:'Cargando...',
						viewrecords:true,
						height:'auto',
						rowNum:10,
						rowList:[10,20,30,40,50],
						columns:[[
						{field:'COD',   title:'COD',   width:100,align:'left'},
						{field:'NOMBRE',title:'NOMBRE',width:200,align:'left'},
						{field:'MODELO',title:'MODELO',width:100,align:'left'},
						{field:'ETAPA', title:'ETAPA', width:100,align:'left'}
						]],
						onResize:function(){
							$('#dg').datagrid('fixDetailRowHeight',index);
						},
						onLoadSuccess:function(){
							setTimeout(function(){
								$('#dg').datagrid('fixDetailRowHeight',index);
							},0);
						}
					});
					$('#dg').datagrid('fixDetailRowHeight',index);
				}
			});
			$("table").tablesorter(); 
			$('#dg').tablesorter();
			
			
		});
	</script>
</head>
<link rel="shortcut icon" href="favicon.png">
<script type="text/javascript" src="http://www.jeasyui.com/easyui/datagrid-detailview.js"></script>
<style type="text/css">
	body
	{
		background-image: url(blue.jpg);
		background-size: 100% 300%;
		background-repeat: no-repeat;
	}
	#p{position:absolute; left:813px; top:33px; width:175px; height:76px;cursor:pointer}
	#p:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
	#p1{position:absolute; left:597px; top:33px; width:179px; height:76px;cursor:pointer;}
	#p1:hover
	{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
	}
</style>
<div style="position:absolute; left:10%; top:0px; width:1024px; height:768px;">
	<div style="background-image:url(Untitled-22_01.png); position:absolute; left:0px; top:0px; width:1024px; height:27px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_02.png); position:absolute; left:0px; top:27px; width:36px; height:741px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_03.png); position:absolute; left:36px; top:27px; width:75px; height:75px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_04.png); position:absolute; left:111px; top:27px; width:913px; height:6px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_05.png); position:absolute; left:111px; top:33px; width:702px; height:1px;" title="">
	</div>
	<div id="p" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(Untitled-22_06.png);" title="">
	</div>
	<div style="background-image:url(Untitled-22_07.png); position:absolute; left:988px; top:33px; width:36px; height:735px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_08.png); position:absolute; left:111px; top:34px; width:27px; height:734px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_09.png); position:absolute; left:138px; top:34px; width:296px; height:62px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_10.png); position:absolute; left:434px; top:34px; width:379px; height:734px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_11.png); position:absolute; left:138px; top:96px; width:296px; height:672px;" title="">
	</div>
	<div id="p1" onclick="location.href='../Bienvenido/ABT-T010-bienvenido.php';" style="background-image:url(14.png); " title="">
	</div>
	
	<div style="background-image:url(Untitled-22_12.png); position:absolute; left:36px; top:102px; width:75px; height:666px;" title="">
	</div>
	<div style="background-image:url(Untitled-22_13.png); position:absolute; left:813px; top:109px; width:175px; height:659px;" title="">
	</div>
	<div style="background-image:url(12.png); position:absolute; left:36px; top:158px; width:954px; height:494px;" title="">
		
		<table id="dg" style="width:954px;height:494px"
		url="datagrid22_getdata.php" 
		title="Consulta "
		singleSelect="true" 
		fitcolumns="true" 
		sortable="true"
		sortname="CONS_ID"
		pagination="true"
		>
		<thead>
			<tr>
				<th field="CONS_ID"          sortable="true" width="70" >CONSOLIDADO</th>
				<th field="CONS_DESCRIPCION" sortable="true" width="100">NOMBRE</th>
				<th field="CONS_FEC_GEN_DES" sortable="true" align="left" width="110">FECHA GENERACION DESDE</th>
				<th field="CONS_FEC_GEN_HAS" sortable="true" align="left" width="110">FECHA GENERACION HASTA</th>
				<th field="CONS_PER"         sortable="true" width="70">PERIODICIDAD</th>
				<th field="CONS_UNI_PRE"     sortable="true" width="100" align="left">UNIDAD PRESENTACION</th>
			</tr>
		</thead>
	</table>
	
</div>
</div>
</body>
</html>