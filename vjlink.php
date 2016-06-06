	<style type="text/css">
	.start {
	position:fixed;
	right:10%;
	top:60px;
	z-index: 99999;
	}
	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 9999999;
		text-align:center;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		display: none;
		pointer-events: none;
	}
	.modalDialog:target {
		display: block;
		pointer-events: auto;
	}
	.modalDialog > div {
		width: 400px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #f1f1f1;
	}
	#za{
		font-family: Tahoma;
		font-size: 16px;
	}
	.buter{
		font-family: Helvetica;
		padding: 10px;
		font-size: 16px;
		border:none;
		border-radius:3px;
	}
	.buter{
		cursor:pointer;
	}
	#solevarnya{
		background:black;
		color:white;
	}
	#papich{
		color:white;
		background: #31659E;
		padding-left:25px;
		padding-right:25px;
	}
	.close {
		background: #31659E;
		color: black !important;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}
	.vjlink{
		 background-color: transparent;
		 border: none;
		 text-decoration: underline;
		 color: blue;
	}
	.vjlink:hover{
		cursor:pointer;
	}
	.close:hover { background: black;
		color:white !important;
		}
	</style>
	<a class=start href=#openModal>
<svg width="45px" height="45px" viewBox="0 0 256 193" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>Версия для слабовидящих</title>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <path d="M58,185 C85.6142375,185 108,162.614237 108,135 C108,107.385763 85.6142375,85 58,85 C30.3857625,85 8,107.385763 8,135 C8,162.614237 30.3857625,185 58,185 Z" id="Oval-1" stroke="#000000" stroke-width="15"></path>
        <circle id="Oval-1-Copy" stroke="#000000" stroke-width="15" cx="198" cy="135" r="50"></circle>
        <path d="M108,129 C108,129 114.206897,120 128,120 C141.793103,120 148,129 148,129" id="Line" stroke="#000000" stroke-width="10" stroke-linecap="square"></path>
        <path d="M21.0679066,135.548641 C21.0679066,135.548641 18.3540513,21.1015819 19.0679066,15.5486407 C20.1251355,10.0584446 25.0679066,7.54864073 25.0679066,7.54864073" id="Line" stroke="#000000" stroke-width="10" stroke-linecap="square" transform="translate(22.067907, 71.548641) rotate(10.000000) translate(-22.067907, -71.548641) "></path>
        <path d="M233.067907,135.548641 C233.067907,135.548641 230.354051,21.1015819 231.067907,15.5486407 C232.125136,10.0584446 237.067907,7.54864073 237.067907,7.54864073" id="Line-Copy-2" stroke="#000000" stroke-width="10" stroke-linecap="square" transform="translate(234.067907, 71.548641) scale(-1, 1) rotate(10.000000) translate(-234.067907, -71.548641) "></path>
    </g>
</svg>
	</a>
	<div id="openModal" class="modalDialog">
		<div>
		<a href="#close" title="Закрыть" class="close">X</a>
		<font id="za">Выбор шрифта</font>:
		<form method="post">
		<input type="submit" name="1" class="vjlink" style="font-size:13px" value="Обычный шрифт">
		<input type="submit" name="15" class="vjlink" style="font-size:15px" value="A">
		<input type="submit" name="20" class="vjlink" style="font-size:20px" value="A">
		<input type="submit" name="25" class="vjlink" style="font-size:25px" value="A">
		</form>
		<br/>
		<form method="post">
		<input type="submit" class="buter" id="papich" name="Rejim" value="Обычная версия сайта">
		<input type="submit" class="buter" id="solevarnya" name="Rejim" value="Версия для слабовидящих">
		</form>
		</div>
	</div>
	<?php
	/*  Copyright 2016  Guppy  (email: igor87111@gmail.com)

	    This program is free software; you can redistribute it and/or modify
	    it under the terms of the GNU General Public License as published by
	    the Free Software Foundation; either version 2 of the License, or
	    (at your option) any later version.

	    This program is distributed in the hope that it will be useful,
	    but WITHOUT ANY WARRANTY; without even the implied warranty of
	    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	    GNU General Public License for more details.

	    You should have received a copy of the GNU General Public License
	    along with this program; if not, write to the Free Software
	    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	*/
	
	/*			
				***Design by Ilya "Pasha" Pashkov***
				***Code by Igor  "Guppy"  Murzaev***
					26.05.16
	*/
	if(isset($_POST['15']))
	{
		$_SESSION['ssize']=1;
	}
	if(isset($_POST['20']))
	{
		$_SESSION['ssize']=2;
	}
	if(isset($_POST['25']))
	{
		$_SESSION['ssize']=3;
	}
	if(isset($_POST['1']))
	{
		$_SESSION['ssize']=4;
	}
if(isset($_SESSION['ssize'])){
		
		if($_SESSION['ssize']==1){
		echo "<style>
		body{
		font-size:15px !important;
		}
		#date{
			font-size:15px !important;
		}
		.home{
			font-size:15px !important;
		}
		.entry-meta{
		 font-size:15px !important;
		}
		span{
			font-size:15px !important;
		}
		#access .menu li a{
		font-size:15px !important;
		}
		#cap_navi div li a{
		font-size:14px !important;
		}
		#explanation{
		font-size:15px !important;
		}
		article{
		font-size:15px !important;
		}
		.advanced_recent_posts_widget *{
		font-size:15px !important;
		}
		#side-navi li{
		 font-size:15px !important;
		}
		#side-navi a{
		font-size:15px !important;
		}
		</style>";
		}
		
		if($_SESSION['ssize']==2){
		echo "<style>
		body{
		font-size:17px !important;
		}
		#date{
			font-size:16px !important;
		}
		.entry-meta{
		 font-size:18px !important;
		}
		.home{
			font-size:18px !important;
		}
		header .logo{
		display:none !important;
		}
		#access .menu li a{
		font-size:20px !important;
		}
		#cap_navi div li a{
		font-size:18px !important;
		}
		#explanation{
		font-size:20px !important;
		}
		article{
		font-size:20px !important;
		}
		.advanced_recent_posts_widget *{
		font-size:20px !important;
		}
		#side-navi li{
		 font-size:20px !important;
		}
		#side-navi a{
		font-size:20px !important;
		}
		span{
			font-size:18px !important;
		}
		</style>";
		}
		
		if($_SESSION['ssize']==3){
			echo "<style>
		body{
		font-size:19px !important;
		}
		.home{
			font-size:20px !important;
		}
		#date{
			font-size:17px !important;
		}
		.entry-meta{
		 font-size:20px !important;
		}
		#explanation{
		font-size:22px !important;
		}
		footer .logo{
		display:none !important;
		}
		header .logo{
		display:none !important;
		}
		#access .menu li a{
		font-size:25px !important;
		}
		#cap_navi div li a{
		font-size:22px !important;
		}
		#slogan{
		display:none;
		}
		article{
		font-size:23px !important;
		}
		.advanced_recent_posts_widget *{
		font-size:25px !important;
		}
		#side-navi li{
		 font-size:25px !important;
		}
		#side-navi a{
		font-size:25px !important;
		}
		span{
			font-size:20px !important;
		}
		</style>";
		}
		if($_SESSION['ssize']==4){
			
		}
	}
	if (isset($_POST['Rejim'])) {
	if($_POST['Rejim']=="Версия для слабовидящих"){
		$_SESSION['template'] = 2;
	}
	if($_POST['Rejim']=="Обычная версия сайта"){
		$_SESSION['template'] = 1;
	}
	}
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$css = array(
	'header-background' => array(
	2 => 'img{filter: grayscale(100%);
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	-ms-filter: grayscale(100%);
	-o-filter: grayscale(100%);
	filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
	}
		/*Так же здесь окрашивать элементы в серый цвет*/
	footer .logo{
	grayscale(100%);
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	-ms-filter: grayscale(100%);
	-o-filter: grayscale(100%);
	filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
	filter: grayscale(100%);
	}
	#icon_fold{
 	grayscale(100%);
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	-ms-filter: grayscale(100%);
	-o-filter: grayscale(100%);
	filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
	}
	header .logo{
	grayscale(100%);
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	-ms-filter: grayscale(100%);
	-o-filter: grayscale(100%);
	filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
	filter: grayscale(100%);
	}
	#tape-wrap{
	background: none !important;
	}
	#site-title{
	display:none !important;
	}
	.breadcrumb span a{
		color: black;
	}
	#site-description{
	display:none !important;
	}
	.comp-e{
		background: grey !important;
	}
	.comp-d{
		background: grey !important;
	}
	 .comp-a{
	 	background: grey !important;
	 }
	 .comp-f{
	 	background: grey !important;
	 }
	.home .widget-title{
		background: grey !important;
	}
	.slide-callout .more{
		background: grey !important;
	}
	 .page .advanced_recent_posts_widget{
	 	border-top: 4px solid #000000;
	 }
	 a.rollover:hover{
		 background:url(http://www.akvt.ru/wp-content/uploads/2014/10/22.png) !important;
	 }
	 a.rollover2:hover{
		 background:url(http://www.akvt.ru/wp-content/uploads/2014/10/12.png) !important;
	 }
	 a.rollover3:hover{ 
	 background:url(http://www.akvt.ru/wp-content/uploads/2014/10/32.png) !important;
	 }
	 a.rollover4:hover{
		 background:url(http://www.akvt.ru/wp-content/uploads/2014/10/52.png) !important;
	 }
	 a.rollover5:hover{
		 background:url(http://www.akvt.ru/wp-content/uploads/2014/10/42.png) !important;
	 }
	 #content_page, #content_single{
		 border-top: 4px solid #000000;
	 }
	 #side-navi .current_page_item{
		 background: none;
	 }
	 #side-navi .current_page_item a{
		 color:black;
		 -webkit-box-shadow: none !important;
	 }
	 #side-navi .current_page_item{
		 box-shadow: none !important;
	 }
	 #side-navi div{
		 border-top: 4px solid #000000;
	 }
	 a{
	 	color:black;
	 }
	 #access ul ul :hover > a, #access a:focus{
		 background: black !important;
		 color: #fff !important;
	 }
	 #access ul ul a{
		 color:black !important;
	 }
	 #access .menu a{
		 	grayscale(100%);
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	-ms-filter: grayscale(100%);
	-o-filter: grayscale(100%);
	filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
	filter: grayscale(100%);
	 }
	',
	1 => '',
	));
	echo '<style>';
	
	echo $css['header-background'][$_SESSION['template']];
	
	echo '</style>';
	?>