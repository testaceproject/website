
<?php
 $ua = $_SERVER['HTTP_USER_AGENT'];
 if(preg_match('/(iPhone|Android.*Mobile|Windows.*Phone)/', $ua)){
    header('Location:index_boots.html');
    exit();
   }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="Ace Project,Contrib,Contribution,ACP Library" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link href="../../style/style_links02.css" rel="stylesheet" style type="text/css" />
<link rel="shortcut icon" href="../../images/favicon.ico" content="image/x-icon"> 
<title>ACE Project</title>

<style type="text/css">
<!--

.header {
	background-image: url(../../images/backgraund_2.png);
	width:100%;
	max-width:930px;
	min-width:900px;
	margin:0 auto;
}

.dropmenu{
  *zoom:1;
	list-style-type: none;
	padding: 0;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: 13px;
	margin: 0px;
	height: auto;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: none;
	border-top-color: #003;
	border-bottom-color: #003;
	font-style: normal;
	clear: both;
	color: #FFF;
}

.container .content .dropmenu .g { 
	background-image: url(../../images/b_cst03_18.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;
	color: #003;
}

.dropmenu:before, .dropmenu:after{
  content: "";
  display: table;
}
.dropmenu:after{
  clear: both;
}
.dropmenu li{
  position: relative;
  float: left;
  margin: 0;
  padding: 0;
  text-align: center;
    color: #FFF;
}
.dropmenu li a{
  display: block;
  line-height: 1;
  text-decoration: none;
   	display: block;
	float: left;
	width: 11em;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #FFFFFF;
	line-height: 35px;
	font-weight: bold;
	clear: none;
	background-image: url(../../images/blue-button-new.png);
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-left-style: solid;
	border-bottom-color: #39F;
	border-left-color: #FFF;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #FFF;
	color:#FFFFFF;

}

.dropmenu li ul{
	  color: #FFF;
  list-style: none;
  position: absolute;
  z-index: 9999;
  top: 100%;
  left: 0;
  margin: 0;
  padding: 0;
}
.dropmenu li ul li{
  width: 100%;
  color: #FFF;
　background-image:url(../../images/blue-button-new.png);
}
.dropmenu li ul li a{
  padding: 0;
  color: #FFF;
  text-align: center;
   
	font-weight: bold;
	background-image:url(../../images/blue-button-new.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;

}
.dropmenu li:hover > a{
 	background-image:url(../../images/blue-button-new.png);
	color: #FFF;
}
.dropmenu li a:hover{
	color: #000033;
	font-weight:bold;
	background-image: url(../../images/b_cst03_18.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;
}


p.menu {
	font-family: "ＭＳ ゴシック", "MS Gothic", "Osaka－等幅", Osaka-mono, monospace;
	margin: 0px;
	height: auto;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: none;
	border-top-color: #006;
	border-bottom-color: #006;
	font-style: normal;
	color: #999;
	clear: both;
	text-align: center;
}
.container .content .menu .d {
	background-image: url(../../images/b_cst03_18_2.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;
	color: #003;
}

p.menu a {
	color: #FFF;
	display: block;
	float: left;
	width: 9em;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #FFFFFF;
	line-height: 35px;
	font-weight: bold;
	clear: none;
	background-image: url(../../images/blue-button-new.png);
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #39F;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #FFF;
	border-top-width: 1px;
	border-top-style: none;
	border-top-color: #006;
	font-size: 12px;
}

p.menu a:hover {
	color: #000033;
	text-align: center;
	background-image: url(../../images/b_cst03_18_2.png);
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-bottom-color: #6CF;
	border-left-color: #FFF;
	text-decoration: none;
	font-size: 12px;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
}

.sitemap {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: x-small;
	color: #000;
}
.subsubtitle {
	font-size: medium;
	color: #000;
}
.text3 {
	color: #000;
	background-position: left;
	text-align: left;
	font-size: small;
}
ul {
list-style-type: disc;
}
-->
</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('../../images/jp_button_on.png','../../images/sitemap_jp_on.png','../../images/sitemap_en_on.png')">

<div class="container">
  <div class="header"><a href="../../../index.html">　<img src="../../images/ace-logo-20131111.png" width="141" height="93" alt="logo" /></a>　 
    <!-- end .header --><img src="../../images/ace-logo-title-ver.4.png" width="557" height="65" alt="title" /><img src="../../images/button_d.png" width="17" height="90" /><a href="../../jp/08_contrib/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../../images/jp_button_on.png',1)"><img src="../../images/jp_button_b.png" name="Image1" width="61" height="90" border="0" id="Image1" /></a> <img src="../../images/button_d.png" width="17" height="90" /><a href="../../sitemap/index_en.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../../images/sitemap_en_on.png',1)"><img src="../../images/sitemap_en_a.png" name="Image2" width="58" height="89" border="0" id="Image2" /></a></div>
  <div class="content">
  <style>
#normal li ul{
  display: none;
}
#normal li:hover ul{
  display: block;
}
</style>
    <p align="left" class="menu">
     <ul id="normal"class="dropmenu">
<li><a href="../../../index.html" class="menu">Home</a></li>
<li><a href="../01_overview/index.html" class="a">Project</a>
    <ul>
       <li><a href="../01_overview/index.html" class="a">Overview</a></li>       
       <li><a href="../02_members/index.html"class="b">Members</a></li>
       <li><a href="../03_publications/index.html"class="e">Publications</a></li>
       <li><a href="../04_links/index.html"class="c">Related Links</a>  </li>
    </ul>
</li>    
<li><a href="../07_document/index.html" class="d">Documents</a></li>
<li><a href="../05_downloads/index.html" class="f">Downloads </a></li>
<li><a href="../09_questions/index.html"class="h">Contact</a>
   <ul>
      <li><a href="../09_questions/index.html"class="h">Questions</a></li>      
      <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php" class="b" target="_blank">Report/Proposal</a></li>
   </ul>
</li>   
<li><a href="index.html" class="g">Contrib </a></li>
</ul>

    </p>
    <table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
  </tr>
</table>
    <p> <!--　 　　 <span class="sitemap"><a href="../../../index.html"> 　 　 　Home</a> > Documents&nbsp;</span>--></p>
    <p>&nbsp;</p>
<p class="content"><span class="content"><span class="content"></span></span>
  <img src="../../images/obi_contrib_en.png" width="886" height="38" /></p> 
    <!--width="900"-->
<p>&nbsp;</p>
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
</table>
    <table width="83%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="54">&nbsp;</td>
      <td width="743" height="16" valign="top"><strong class="subsubtitle">Contribution</strong></tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="17" align="texttop" />　
      </tr>
</table>    
    </td><table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="55">&nbsp;</td>
    <td width="975" height="16">
    </p>
    <p>ACE Project welcomes contributions on  the ACP library.<br />
      Please send the following information  along with the source codes to<img src="../../images/mailinglist.png" width="287" height="26" align="absmiddle" />.<br />
    The contributed codes will be available  on this web site, after some internal checks.</p></td></tr>
</table></p>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="44">&nbsp;</td>
    <td width="821" height="16">  <p><img src="../../images/line_gray_l.png" width="750" height="1" /></p>
    <p>
         <strong>Information of the contributed code:</strong><br />
         <br />
           
        ・Name of the contributor<br />
        ・Date of the contribution<br />
        ・Description about the codes<br />
        ・Usage<br />
        ・Conditions for the usage<br />
        ・Future plans on the codes<br />
        ・E-mail address<br />
   </p>
   <p><img src="../../images/line_gray_l.png" width="750" height="1" /></p>
   &nbsp;</td></tr>
</table>
 <table width="82%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="72">&nbsp;</td>
    <td width="691" height="20"><span class="text3"><ul>
      <li>This project assumes that the contributed source codes are agreed to be public on this site
        by their authors. If the authors do not want the publication, please add comments about it in the E-mail.</li>
        <li>The ACE project and the participating organizations are not responsible for any damages resulting from the use of those software of the contribution.</li>
       <li>On an approval by the authors of the contribution and ACP project, the contribution can be included as a part of ACP library. </li>
    </ul></span>
      
      
    </p></td>
  </tr>
</table>
 </p>
 　　　　<img src="../../images/line_gray_l.png" width="750" height="1" />

 <table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="16">&nbsp;</td></tr>
</table></p>
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="58">&nbsp;</td>
    <td width="835" height="16">&nbsp;</td></tr>
</table></p>
<p>&nbsp;</p>
 <!--<p align="center"> 　　<img src="../../images/line_gray_l.png" width="100%" height="1" align="absbottom" /></p>-->
<p align="center"> 　　</p>
<p align="center">&nbsp;</p>
  <!-- end .content --></div>
  <div class="footer">
   Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved<br />
      <!-- end .footer -->　<br /><script type="text/javascript"><!--
　document.write( "Last update : " , document.lastModified );
// --></script>
</div>
  <!-- end .container --></div>
</body>
</html>
