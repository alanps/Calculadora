<!DOCTYPE html>
<html>
<head>

	<title>Calculadora Básica - Agência Dream Up</title>
	<meta name="author" content="Alan Pardini Sant'Ana" />

	<!-- Meta ===================================================== -->
	<meta charset="utf-8" />
	<meta http-equiv="cache-control" content="no-cache"/>
	<meta http-equiv="expires" content="mon, 10 jul 2012 11:12:01 gmt">
	<meta name="description" content="Dream Up - Calculadora Básica, com ela você pode fazer calculos básicos de uma calculadora simples.">
	<meta name="keywords" content="Calculadora Básica, Calculadora, Calculadora Simples, Calc, Alan Pardini Sant'Ana, Alan Pardini, Alan Sant'Ana, Alan PS, Alan P.S., Dream Up - Portfólio Online, Dream Up, Portfólio Online, Dream Up Portfólio, Dream Up - Portfólio, Dream Up Online, Agência Dream Up, Projetos Dream Up, Projetos Agência Dream Up, Projetos Alan Pardini Sant'Ana">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
	<link rel="image_src" type="image/jpeg" href="./images/favicon.ico" />
	<!-- Meta Tags de Visualização ===================================================== -->
    <meta property="fb:app_id" content="285822082304827">
    <meta property="og:title" content="Calculadora Básica - Agência Dream Up">
    <meta property="og:description" content="Dream Up - Calculadora Básica, com ela você pode fazer calculos básicos de uma calculadora simples.">
    <meta property="og:url" content="https://www.agenciadreamup.com.br/calculadora/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.agenciadreamup.com.br/calculadora/share.png">
    <meta property="og:image:height" content="334">
    <meta property="og:image:width" content="329">
    <meta property="og:image:type" content="image/png">
	<!-- visualização mobile ===================================================== -->
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="initial-scale = 1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

	<meta charset="utf-8" />

	<link rel="stylesheet" href="calc.css" />
	<link rel="stylesheet" href="fonts/fonts.css" />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="calc.js"></script>

<script>
	window.homepath = "http://www.agenciadreamup.com.br/calculadora/"; //ftp
</script>

<body class="page-calc">
	<div class="calculadora">
		<div class="rotuloSecao">Calculadora</div>
		<table>
			<tr class="calculadoraResultados">
				<td class="calculadoraResultadosContainer calculadoraNumeros">
					<span class="calculadoraResultadosContainerSpan"></span>
				</td>
			</tr>
			<tr class="calculadoraDados">
				<td class="calculadoraC calculadoraNumeros">C</td>
				<td class="calculadoraInputTd calculadoraNumeros">
					<input class="calculadoraInput calculadoraNumeros" type="text" maxlength="10" value="0">
				</td>
				<td class="calculadoraBackspace calculadoraNumeros"><span class="icon-undo2"></span></td>
			</tr>
			<tr class="calculadoraDados">
				<td class="calculadoraOne calculadoraNumeros">1</td>
				<td class="calculadoraTwo calculadoraNumeros">2</td>
				<td class="calculadoraThree calculadoraNumeros">3</td>
				<td class="calculadoraDivide calculadoraCanto">÷</td>
			</tr>
			<tr class="calculadoraDados">
				<td class="calculadoraFour calculadoraNumeros">4</td>
				<td class="calculadoraFive calculadoraNumeros">5</td>
				<td class="calculadoraSix calculadoraNumeros">6</td>
				<td class="calculadoraMultiply calculadoraCanto">X</td>
			</tr>
			<tr class="calculadoraDados">
				<td class="calculadoraSeven calculadoraNumeros">7</td>
				<td class="calculadoraEight calculadoraNumeros">8</td>
				<td class="calculadoraNine calculadoraNumeros">9</td>
				<td class="calculadoraMinus calculadoraCanto">-</td>
			</tr>
			<tr class="calculadoraDados">
				<td class="calculadoraComma calculadoraNumeros">,</td>
				<td class="calculadoraZero calculadoraNumeros">0</td>
				<td class="calculadoraPercent calculadoraNumeros">%</td>
				<td class="calculadoraMore calculadoraCanto">+</td>
			</tr>
			<tr class="calculadoraDados">
				<td class="calculadoraEqual calculadoraNumeros">=</td>
			</tr>
		</table>
		<div class="copyright"><a href="http://www.agenciadreamup.com.br" target="_blank">www.agenciadreamup.com.br</a></div>
	</div>
</body>

</html>