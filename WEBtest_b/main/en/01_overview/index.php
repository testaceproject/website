
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
<meta name="keywords" content="ACE Project,ACP Lirary,Exa-scale computers," />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link href="../../style/style_overview02.css" rel="stylesheet" style type="text/css" />
<link rel="shortcut icon" href="../../images/favicon.ico" content="image/x-icon"  />
 
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

.container .content .dropmenu .a { 
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
	font-weight: bold;
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
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: 12px;
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

p.menu a {
	font-size: 12px;
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
	border-bottom-color: #3CF;
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #FFF;
	border-top-width: 1px;
	border-top-style: none;
	border-top-color: #006;
}
.container .content .menu .a {
	font-size: 12px;
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

p.menu a:hover {
	color: #000033;
	font-size: 12px;
	text-align: center;
	background-image: url(../../images/b_cst03_18_2.png);
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #66CCFF;
	border-right-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-left-style: solid;
	border-right-color: #FFF;
	border-left-color: #FFF;
	text-decoration: none;
}
.sitemap {
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: x-small;
	color: #000;
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

<body onload="MM_preloadImages('../images/jp_button_on.png','../images/sitemap_en_on.png','../../images/jp_button_on1.png','../../images/sitemap_en_on.png')">

<div class="container">
 <div class="header"><a href="../index.html"> </a><a name="pagetop" id="pagetop"></a>　<a href="../../../index.html"><img src="../../images/ace-logo-20131111.png" width="141" height="93" alt="logo" /> 　</a><img src="../../images/ace-logo-title-ver.4.png" width="557" height="65" alt="title" /><img src="../../images/button_d.png" width="17" height="90" /><a href="../../jp/01_overview/index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../../images/jp_button_on1.png',1)"><img src="../../images/jp_button_b.png" name="Image1" width="61" height="90" border="0" id="Image1" /></a> <img src="../../images/button_d.png" width="17" height="90" /><a href="../../sitemap/index_en.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../../images/sitemap_en_on.png',1)"><img src="../../images/sitemap_en_a.png" name="Image2" width="58" height="89" border="0" id="Image2" /></a></div>

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
<li> <a href="../../../index.html" class="menu">Home</a></li>
<li><a href="index.html" class="a">Project</a>
    <ul>
        <li><a href="index.html" class="a">Overview	</a></li>
        <li> <a href="../02_members/index.html"class="b">Members	</a></li>
        <li><a href="../03_publications/index.html"class="c">Publications</a></li>
        <li><a href="../04_links/index.html"class="c">Related Links</a></li>
    </ul>
</li> 
<li><a href="../07_document/index.html" class="f">Documents</a></li>
<li><a href="../05_downloads/index.html" class="d">Downloads</a></li>
<li><a href="../09_questions/index.html"class="h">Contact</a>
   <ul>
      <li><a href="../09_questions/index.html"class="h">Questions</a></li>
      <li><a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php" class="c" target="_blank">Report/Proposal</a></li>
   </ul>
</li>
  <li><a href="../08_contrib/index.html" class="g">Contrib</a></li>
</ul>     
   <p><span class="sitemap"> <a href="index.html"><u> Project</u></a> ＞ <u><a href="index.html">Overview</a></u></span>　</p>
    <p>&nbsp;</p>
    <p><img src="../../images/obi_overview_en.png" width="99%" height="38" /></p>
     <br />
       <table width="83%" height="10"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="50">&nbsp;</td>
        <td width="747" height="15" valign="top"><img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <a href="#p01" class="midashi"><u>Background</u></a><br />
            <img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <a href="#p02" class="midashi"><u>Targets</u></a><br /> 
             <img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <a href="#p04" class="midashi"><u>Research Documents</u></a><br />         
            <img src="../../images/arrow06-002.gif" width="16" height="16" align="absmiddle" /> <a href="#p03" class="midashi"><u>Schedule and History</u></a>　　
      </tr>
    </table><p/>    
<br />
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
    </table>
    <table width="83%" height="10"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="47">&nbsp;</td>
        <td width="750" height="5" valign="top"><span class="subtitle"><a name="p01" id="p01"></a>Background</span>　
      </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="15" align="texttop" />　
      </tr>
    </table>    
    
    
<table width="85%" height="500" border="0" cellspacing="0" cellpadding="0"><!--table width="825" -->
  <tr>
    <td width="37">&nbsp;</td>
    <td width="779" height="600" class="text1">　
      <p>Currently, there have been various discussions about possible designs of Exa-scale computers.
        Most of those designs predict that the number of nodes and the number of cores will be significantly increased, 
        and the interconnect topology will be more complicated.
        On such systems, communication libraries should be re-designed to fullfil the requirements of scalability.
        Especially, memory usage and performance tuning will become the key issues.</p>
      <p>As for memory usage, in the existing communication ilbraries, each process prepares 
        some amount of receive buffer for each of other processors.
        This works efficiently up to hundreds of thousands of processes.
        However, when the number of processes becomes over 100 million, the total amount of memory for the buffer will be more than 100GB/process, even when the amount of each receive buffer is 1KB.
        At the same time, 
        the available amount of memory per process is predicted to be the same level or reduced on Exa-scale computers. 
        Therefore, communication libraries on such systems must be based on memory saved protocols.</p>
        <p>On the other hand, as for performance tuning, static and manual methods are applied on the existing communication libraries.
          For example, the thresholds for changing algorithms of collective communications are decided by using some benchmark programs at the installation of the library. 
          As the number of processes increases, and the interconnect topology becomes complicated, the search space of the optimization will be increased explosively.
          In addition to that, because of the complexed toplogy, it becomes quite difficult to predict performance statically.
          Therefore, some automatic and dynamic method will be needed for tuning communication libraries.</p>
        <p>Another important point for performance tuning is the information of the programs.
          Existing communication libraries can only achieve information about parameters that have been specified at the invokation of communication functions.
          Therefore, libraries cannot analyze how those functions are used in the programs.
          For example, if the library can detect that the invoked function will be repeatedly invoked for many times,
          it can pay some overhead to apply more aggresive optimization at runtime.
          Or, there can be special approaches for implementing some popular patterns of computation and communication.<br />
        </p>
        <p> </p>        <p>&nbsp;</p></td>
  </tr>
</table>
<p>　
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
    </table>
    <table width="83%"  height="16"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="47">&nbsp;</td>
      <td width="750" height="16" ><span class="subtitle"><a name="p02" id="p02"></a>Targets</span>　        </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="15" align="texttop" />　
      </tr>
    </table>    
    
<table width="87%" height="16" border="0" cellspacing="0" cellpadding="0"><!--table width="871" -->
  <tr>
    <td width="37">&nbsp;</td>
    <td width="798" height="16"class="text1"><p><img src="../../images/c16_gy6.gif" width="10" height="10" /> <em><strong>Advanced Communication Primitives (ACP)  Library</strong></em></p>
      </td></table>      
 <table width="85%" height="400" border="0" cellspacing="0" cellpadding="0"><!--table width="871" -->
  <tr>
    <td width="49">&nbsp;</td>
    <td width="742" height="400" class="text1"><p><img src="../../images/point040_10.gif" width="10" height="10" />
      A communication library designed to achieve sustained scalability towards exa-scale computing environments.To minimize the requirements of memory consumption at the initialization, ACP provides RDMA model as the basic communication layer. </p>
      <p>On interconnect networks where RDMA is supported as a fundamental facility, this layer can be implemented with minimal memory consumption and overhead.Since programming with RDMA needs detailed operations such as memory registrations, address exchanges and synchronizations, ACP also prepares some sets of programmer-friendly interfaces as the middle layer. 
      <p> To enable the library to consume just-enough amount of memory, each interface of the middle layer requires explicit allocation of the memory region before using it. This region can be explicitly de-allocated so that the memory region can be reused for other purposes.Each of the interfaces of this middle layer is primitive and independent.       
      <p>For example, the channel interface in this layer only supports one-directional and in-order data transfer between a pair of processes. This helps to minimize the memory consumption and overhead in the implementation. Also, the independent interfaces enable precise control of the allocation and de-allocation of memory regions for them. At this point, interfaces of channels, vectors, lists and memory allocation are defined in ACP. There are plans for other interfaces such as group communications, deques, maps, sets and counters.
     </td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="777">&nbsp;</td>
    <td width="164"> 　　 <span class="text2"><a href="#pagetop">Page Top</a></span><span class="text1"> <img src="../../images/yajirushi_blue03.jpg" width="11" height="12" /></span></td>
  </tr>
</table>
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
    </table>
    <table width="83%"  height="16"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="47">&nbsp;</td>
      <td width="750" height="16" ><span class="subtitle"><a name="p04" id="p04"></a>Research Documents</span>　        </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="15" align="texttop" />　
      </tr>
    </table>    
    
    <table width="90%" height="16" border="0" cellspacing="0" cellpadding="0"><!--table width="871" -->
  <tr>
    <td width="43">&nbsp;</td>
    <td width="865" height="16"class="text1">
    <p><img src="../../images/c17_gy8.gif" width="16" height="16" /><strong> <a href="http://www.isc-events.com/isc15_ap/sessiondetails.htm?t=session&amp;o=206&amp;a=select" target="_blank"><em>ISC High Performance 2015 </em></a></strong>Birds-of-a-Feather(BoF) session；<br /> 
    　<a href="ISC2015_BoF.pdf" target="_blank"><u>How to Achieve Memory-Efficient Communication towards Exascale HPC</u></a><img src="../../images/pdficon_small.png" width="16" height="16" /></p>
    
    　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
    </td></table>      
 
<p>&nbsp;</p>
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td width="891"><img src="../../images/line_gray_l.png" width="99%" height="1" align="top" />　
      </tr>
    </table>
    <table width="83%"  height="16"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="47">&nbsp;</td>
        <td width="750" height="15" valign="top"><span class="subtitle"><a name="p03" id="p03"></a>Schedule and History</span>　
      </tr>
    </table>    
<table width="97%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30" >&nbsp;</td>
        <td width="901"><img src="../../images/line.blue4.png" width="100%" height="15" align="texttop" />　
      </tr>
    </table>    
    
<table width="80%" height="30" border="0" cellspacing="0" cellpadding="0"><!--table width="871" -->
  <tr>
    <td width="37">&nbsp;</td>
    <td width="731" height="30">
    <p><img src="../../images/point040_10.gif" width="10" height="10" align="absmiddle" />　2015-2016 :  Evaluation and feedback.</p>
      <p>            　　　　　　　　 <a href="../05_downloads/index.html" target="_blank"><u>ACP-1.2</u></a> has been released on November 13. 2015.</p> 
     <p>            　　　　　　　　 <u>ACP-1.1.1.</u> has been released on July 13. 2015.</p> 
    <p>            　　　　　　　　 ACP-1.1 has been released on May 11. 2015.</p> 
    <!--<p> 　　　　　　　　                <a href="../07_document/index.html" target="_blank"><u>Specification of ACP-1.1</u></a> is available on May 8. 2015.</p>-->
    <p> 　　 　　　　　　<a href="http://ace-project.kyushu-u.ac.jp/mantis/login_page.php" target="_blank"><u>Mantis BTS</u></a> is available on February 9. 2015.</p> 
    <p><img src="../../images/point040_10.gif" width="10" height="10" align="absmiddle" />　2013-2015 :  Design, implement and publish ACE library.</p>
     <p> 　　　　　　　　 <a href="../../../tutorial.html" target="_blank"><u>Hands-on Tutorial of ACP at SC14.</u></a></p> 
      <p> 　　 　　　　　　<!---a href="../05_downloads/index.html" target="_blank"><u>ACP-1.0</u></a>-->ACP-1.0 has been released on September 1. 2014.</p> 
    <p> 　　　　　　　　<!-- <a href="../07_document/index.html" target="_blank"><u>Specification of ACP-1.0</u></a>--> Specification of ACP-1.0 is available on September 1. 2014.</p>
    <p> <img src="../../images/point040_10.gif" width="10" height="10" align="absmiddle" />　2012-2014 :  Research and develop individual technologies.</p>
    <p><img src="../../images/point040_10.gif" width="10" height="10" align="absmiddle" />　2011 : Start of the project.</p>
</td>
  </tr>
</table>
<p>&nbsp;</p>

<p>&nbsp;</p>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="777">&nbsp;</td>
    <td width="164"> 　　 <span class="text2"><a href="#pagetop">Page Top</a></span><span class="text1"> <img src="../../images/yajirushi_blue03.jpg" width="11" height="12" /></span></td>
  </tr>
</table>
  </div>
  <div class="footer">
   <p>Copyright &copy; 2012 - <script type="text/javascript">var d = new Date();document.write(d.getFullYear());</script> ACE PROJECT. All Right Reserved</p>
  　<script type="text/javascript">
　<!--
　document.write( "Last update : " , document.lastModified );
// --></script>

    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
