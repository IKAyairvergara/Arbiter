
<!-- saved from url=(0091)file:///Users/yvmechanics/Library/Caches/Save%20For%20Web%20AI/Seleccion_004/Seleccion.html -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Selecci&oacute;n</title>
</head>
<link rel="shortcut icon" href="favicon.png">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	cargar_paises();
	$("#pais").change(function(){dependencia_estado();});
	$("#estado").change(function(){dependencia_ciudad();});
	$("#estado").attr("disabled",true);
	$("#ciudad").attr("disabled",true);
});

function cargar_paises()
{
	$.get("scripts/cargar-paises.php", function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$('#pais').append(resultado);			
		}
	});	
}
function dependencia_estado()
{
	var code = $("#pais").val();
	$.get("scripts/dependencia-estado.php", { code: code },
		function(resultado)
		{
			if(resultado == false)
			{
				alert("Error");
			}
			else
			{
				$("#estado").attr("disabled",false);
				document.getElementById("estado").options.length=1;
				$('#estado').append(resultado);			
			}
		}

	);
}

function dependencia_ciudad()
{
	var code = $("#estado").val();
	$.get("scripts/dependencia-ciudades.php?", { code: code }, function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$("#ciudad").attr("disabled",false);
			document.getElementById("ciudad").options.length=1;
			$('#ciudad').append(resultado);			
		}
	});	
	
}
</script>
	<style type="text/css">
	body
	 {
	     background-image: url(blue.jpg);
	     background-size: 100% 300%;
	     background-repeat: no-repeat;
	 }
	 #p1{position:absolute; left:639px; top:36px; width:161px; height:76px; cursor: pointer;}
	 #p1:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p2{position:absolute; left:832px; top:36px; width:155px; height:76px; cursor: pointer;}
	 #p2:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p3{ position:absolute; left:59px; top:499px; width:108px; height:36px; cursor: pointer;}
	 #p3:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p4{position:absolute; left:196px; top:499px; width:109px; height:36px; cursor: pointer;}
	 #p4:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p5{position:absolute; left:341px; top:499px; width:148px; height:36px; cursor: pointer;}
	 #p5:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 #p6{position:absolute; left:288px; top:683px; width:173px; height:49px;cursor: pointer;}
	 #p6:hover
		{
		opacity: 1.0;
		filter: alpha(opacity=100);
		transform: scale(1.12);
		transition-duration: 0.4s;
		}
	 </style>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="position:absolute; left:10%; top:0px; width:1024px; height:769px;">
	<div style="background-image:url(Seleccion_01.png); position:absolute; left:0px; top:0px; width:1024px; height:36px;" title="">
	</div>
	<div style="background-image:url(Seleccion_02.png); position:absolute; left:0px; top:36px; width:639px; height:106px;" title="">
	</div>
	<div id="p1" style="background-image:url(Seleccion_03.png);" onclick="location.href='../Bienvenido/bienvenido.php';" title="">
	</div>
	<div style="background-image:url(Seleccion_04.png); position:absolute; left:800px; top:36px; width:32px; height:154px;" title="">
	</div>
	<div id="p2" style="background-image:url(Seleccion_05.png);" onclick="location.href='../Bienvenido/bienvenido.php';" title="">
	</div>
	<div style="background-image:url(Seleccion_06.png); position:absolute; left:987px; top:36px; width:37px; height:733px;" title="">
	</div>
	<div style="background-image:url(Seleccion_07.png); position:absolute; left:639px; top:112px; width:161px; height:78px;" title="">
	</div>
	<div style="background-image:url(Seleccion_08.png); position:absolute; left:832px; top:112px; width:155px; height:78px;" title="">
	</div>
	<div style="background-image:url(Seleccion_09.png); position:absolute; left:0px; top:142px; width:269px; height:357px;" title="">
	</div>
	<div style="background-image:url(Seleccion_10.png); position:absolute; left:269px; top:142px; width:211px; height:30px;" title="">
			<input type="text" maxlength="60" name="tituloinforme" onKeyUp="javascript:this.value=this.value.toUpperCase();" style="left:269px; top:142px; width:211px; height:30px;font-family: verdana;" required/>
	</div>
	<div style="background-image:url(Seleccion_11.png); position:absolute; left:480px; top:142px; width:159px; height:133px;" title="">
	</div>
	<div style="background-image:url(Seleccion_12.png); position:absolute; left:269px; top:172px; width:211px; height:103px;" title="">
	</div>
	<div style="background-image:url(Seleccion_13.png); position:absolute; left:639px; top:190px; width:132px; height:579px;" title="">
	</div>
	<div style="background-image:url(Seleccion_14.png); position:absolute; left:771px; top:190px; width:210px; height:31px;" title="">
			<select name="periodicidad" style="left:771px; top:190px; width:210px; height:31px;" required >
						  <option value="Mensual">Mensual</option>
						  <option value="Bimensual">Bimensual</option>
						  <option value="Trimestral">Trimestral</option>
						  <option value="Semestral">Semestral</option>
						  <option value="Anual">Anual</option>
						  <option value="Quinquenio">Quinquenio</option>  
			</select>
	</div>
	<div style="background-image:url(Seleccion_15.png); position:absolute; left:981px; top:190px; width:6px; height:579px;" title="">
	</div>
	<div style="background-image:url(Seleccion_16.png); position:absolute; left:771px; top:221px; width:210px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_17.png); position:absolute; left:771px; top:230px; width:210px; height:30px;" title="">
			<select name="unidadpresentacion" style="left:771px; top:230px; width:210px; height:30px;" required>
						  <option value="miles">Miles</option>
						  <option value="cientos">Cientos</option>
						  <option value="millones">Millones</option>
			</select>
	</div>
	<div style="background-image:url(Seleccion_18.png); position:absolute; left:771px; top:260px; width:210px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_19.png); position:absolute; left:771px; top:269px; width:210px; height:30px;" title="">
			<select style="left:771px; top:269px; width:210px; height:30px;"  name="ritmoventas" required>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="22">22</option>
						  <option value="23">23</option>
						  <option value="24">24</option>
						  <option value="25">25</option>
						  <option value="26">26</option>
						  <option value="27">27</option>
						  <option value="28">28</option>
						  <option value="29">29</option>
						  <option value="30">30</option>
						  <option value="31">31</option>
						  <option value="32">32</option>
						  <option value="33">33</option>
						  <option value="34">34</option>
						  <option value="35">35</option>
						  <option value="36">36</option>
						  <option value="37">37</option>
						  <option value="38">38</option>
						  <option value="39">39</option>
						  <option value="40">40</option>
						  <option value="41">41</option>
						  <option value="42">42</option>
						  <option value="43">43</option>
						  <option value="44">44</option>
						  <option value="45">45</option>
						  <option value="46">46</option>
						  <option value="47">47</option>
						  <option value="48">48</option>
						  <option value="49">49</option>
						  <option value="50">50</option>
						  <option value="51">51</option>
						  <option value="52">52</option>
						  <option value="53">53</option>
						  <option value="54">54</option>
						  <option value="55">55</option>
						  <option value="56">56</option>
						  <option value="57">57</option>
						  <option value="58">58</option>
						  <option value="59">59</option>
						  <option value="60">60</option>
						  <option value="61">61</option>
						  <option value="62">62</option>
						  <option value="63">63</option>
						  <option value="64">64</option>
						  <option value="65">65</option>
						  <option value="66">66</option>
						  <option value="67">67</option>
						  <option value="68">68</option>
						  <option value="69">69</option>
						  <option value="70">70</option>
						  <option value="71">71</option>
						  <option value="72">72</option>
						  <option value="73">73</option>
						  <option value="74">74</option>
						  <option value="75">75</option>
						  <option value="76">76</option>
						  <option value="77">77</option>
						  <option value="78">78</option>
						  <option value="79">79</option>
						  <option value="80">80</option>
						  <option value="81">1</option>
						  <option value="82">82</option>
						  <option value="83">83</option>
						  <option value="84">84</option>
						  <option value="85">85</option>
						  <option value="86">86</option>
						  <option value="87">87</option>
						  <option value="88">88</option>
						  <option value="89">89</option>
						  <option value="90">90</option>
						  <option value="91">91</option>
						  <option value="92">92</option>
						  <option value="93">93</option>
						  <option value="94">94</option>
						  <option value="95">95</option>
						  <option value="96">96</option>
						  <option value="97">97</option>
						  <option value="98">98</option>
						  <option value="99">99</option>
						  <option value="100">100</option>
					</select>
	</div>
	<div style="background-image:url(Seleccion_20.png); position:absolute; left:269px; top:275px; width:2px; height:224px;" title="">
	</div>
	<div style="background-image:url(Seleccion_21.png); position:absolute; left:271px; top:275px; width:211px; height:30px;" title="">
			<select id="pais" name="pais" style="left:271px; top:275px; width:211px; height:30px;">
            	<option value="0">Selecciona Un Indicador...</option>
        	</select>
	</div>
	<div style="background-image:url(Seleccion_22.png); position:absolute; left:482px; top:275px; width:157px; height:224px;" title="">
	</div>
	<div style="background-image:url(Seleccion_23.png); position:absolute; left:771px; top:299px; width:210px; height:10px;" title="">
	</div>
	<div style="background-image:url(Seleccion_24.png); position:absolute; left:271px; top:305px; width:211px; height:12px;" title="">
	</div>
	<div style="background-image:url(Seleccion_25.png); position:absolute; left:771px; top:309px; width:210px; height:30px;" title="">
			<input type="number" name="nuevohogar" step="0.01" maxlength="4" onkeypress="return justNumbers(event);" style="left:771px; top:309px; width:210px; height:30px;" placeholder="Ingrese porcentaje" required />
	</div>
	<div style="background-image:url(Seleccion_26.png); position:absolute; left:271px; top:317px; width:211px; height:30px;" title="">
			<select id="estado" name="estado" style="left:271px; top:317px; width:211px; height:30px;">
            	<option value="0">Selecciona Una Fecha...</option>
        	</select>
	</div>
	<div style="background-image:url(Seleccion_27.png); position:absolute; left:771px; top:339px; width:210px; height:10px;" title="">
	</div>
	<div style="background-image:url(Seleccion_28.png); position:absolute; left:271px; top:347px; width:211px; height:11px;" title="">
	</div>
	<div style="background-image:url(Seleccion_29.png); position:absolute; left:771px; top:349px; width:210px; height:31px;" title="">
			<input type="text" maxlength="4" name="proyecto" onKeyUp="javascript:this.value=this.value.toUpperCase();" onkeypress="return justNumbers(event);" style="left:771px; top:349px; width:210px; height:31px;" required/>
	</div>
	<div style="background-image:url(Seleccion_30.png); position:absolute; left:271px; top:358px; width:211px; height:31px;" title="">
			<select id="ciudad" name="ciudad" style="left:271px; top:358px; width:211px; height:31px;">
            	<option value="0">Selecciona Un Valor...</option>
       		</select>
	</div>
	<div style="background-image:url(Seleccion_31.png); position:absolute; left:771px; top:380px; width:210px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_32.png); position:absolute; left:271px; top:389px; width:211px; height:110px;" title="">
	</div>
	<div style="background-image:url(Seleccion_33.png); position:absolute; left:771px; top:389px; width:210px; height:31px;" title="">
			<input type="text" name="version" maxlength="2" onKeyUp="javascript:this.value=this.value.toUpperCase();" onkeypress="return justNumbers(event);" style="left:771px; top:389px; width:210px; height:31px;" required/>
	</div>
	<div style="background-image:url(Seleccion_34.png); position:absolute; left:771px; top:420px; width:210px; height:63px;" title="">
	</div>
	<div style="background-image:url(Seleccion_35.png); position:absolute; left:771px; top:483px; width:1px; height:286px;" title="">
	</div>
	<div style="background-image:url(Seleccion_36.png); position:absolute; left:772px; top:483px; width:85px; height:30px;" title="">
			<input type="month" name="mes" style="left:772px; top:483px; width:85px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_37.png); position:absolute; left:857px; top:483px; width:39px; height:286px;" title="">
	</div>
	<div style="background-image:url(Seleccion_38.png); position:absolute; left:896px; top:483px; width:85px; height:30px;" title="">
			<input type="month" name="mes" style="left:896px; top:483px; width:85px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_39.png); position:absolute; left:0px; top:499px; width:59px; height:184px;" title="">
	</div>
	<div id="p3" onclick="location.href='../SeleccionProyectos/seleccionProyectos.php';" style="background-image:url(Seleccion_40.png);" title="">
	
	</div>
	<div style="background-image:url(Seleccion_41.png); position:absolute; left:167px; top:499px; width:29px; height:184px;" title="">
	</div>
	<div id="p4" onclick="location.href='../SeleccionModelos/seleccionModelos.php';" style="background-image:url(Seleccion_42.png);" title="">
	
	</div>
	<div style="background-image:url(Seleccion_43.png); position:absolute; left:305px; top:499px; width:36px; height:184px;" title="">
	</div>
	<div id="p5" onclick="location.href='../filtroAvanzado3/filtroAvanzado.php';" style="background-image:url(Seleccion_44.png);" title="">
	
	</div>
	<div style="background-image:url(Seleccion_45.png); position:absolute; left:489px; top:499px; width:150px; height:270px;" title="">
	</div>
	<div style="background-image:url(Seleccion_46.png); position:absolute; left:772px; top:513px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_47.png); position:absolute; left:896px; top:513px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_48.png); position:absolute; left:772px; top:522px; width:85px; height:31px;" title="">
			<input type="month" name="mes" style="left:772px; top:522px; width:85px; height:31px">
	</div>
	<div style="background-image:url(Seleccion_49.png); position:absolute; left:896px; top:522px; width:85px; height:31px;" title="">
			<input type="month" name="mes" style="left:896px; top:522px; width:85px; height:31px;">
	</div>
	<div style="background-image:url(Seleccion_50.png); position:absolute; left:59px; top:535px; width:108px; height:148px;" title="">
	</div>
	<div style="background-image:url(Seleccion_51.png); position:absolute; left:196px; top:535px; width:109px; height:148px;" title="">
	</div>
	<div style="background-image:url(Seleccion_52.png); position:absolute; left:341px; top:535px; width:148px; height:148px;" title="">
	</div>
	<div style="background-image:url(Seleccion_53.png); position:absolute; left:772px; top:553px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_54.png); position:absolute; left:896px; top:553px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_55.png); position:absolute; left:772px; top:562px; width:85px; height:30px;" title="">
			<input type="month" name="mes" style="left:772px; top:562px; width:85px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_56.png); position:absolute; left:896px; top:562px; width:85px; height:30px;" title="">
			<input type="month" name="mes" style="left:896px; top:562px; width:85px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_57.png); position:absolute; left:772px; top:592px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_58.png); position:absolute; left:896px; top:592px; width:85px; height:9px;" title="">
	</div>
	<div style="background-image:url(Seleccion_59.png); position:absolute; left:772px; top:601px; width:85px; height:30px;" title="">
			<input type="month" name="mes" style="left:772px; top:601px; width:85px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_60.png); position:absolute; left:896px; top:601px; width:85px; height:30px;" title="">
			<input type="month" name="mes" style="left:896px; top:601px; width:85px; height:30px;">
	</div>
	<div style="background-image:url(Seleccion_61.png); position:absolute; left:772px; top:631px; width:85px; height:138px;" title="">
	</div>
	<div style="background-image:url(Seleccion_62.png); position:absolute; left:896px; top:631px; width:85px; height:138px;" title="">
	</div>
	<div style="background-image:url(Seleccion_63.png); position:absolute; left:0px; top:683px; width:53px; height:86px;" title="">
	</div>
	<div style="background-image:url(Seleccion_64.png); position:absolute; left:53px; top:683px; width:172px; height:49px;" title="">
	</div>
	<div style="background-image:url(Seleccion_65.png); position:absolute; left:225px; top:683px; width:63px; height:86px;" title="">
	</div>
	<div id="p6" onclick="location.href='../Bienvenido/bienvenido.php';" style="background-image:url(Seleccion_66.png); " title="">
	
	</div>
	<div style="background-image:url(Seleccion_67.png); position:absolute; left:461px; top:683px; width:28px; height:86px;" title="">
	</div>
	<div style="background-image:url(Seleccion_68.png); position:absolute; left:53px; top:732px; width:172px; height:37px;" title="">
	</div>
	<div style="background-image:url(Seleccion_69.png); position:absolute; left:288px; top:732px; width:173px; height:37px;" title="">
	</div>
</div>
</body></html>