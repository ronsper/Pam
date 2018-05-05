<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
<head>

		<title>Light, Darkness &amp; Color</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	    <link href="ldc.css" rel="stylesheet" type="text/css">
	    <script type="text/JavaScript">
<!--
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

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
</head>								
	<body leftmargin=0 topmargin=0 rightmargin=0 bottommargin=0 onLoad="MM_preloadImages('images/lianne.jpg','images/articles_2.jpg','images/reflections_2.jpg','images/education_2.jpg','images/therapy_2.jpg','images/contact_2.jpg')">
	<table cellspacing=0 cellpadding=0 width=100% height=100% border=0>

        <tr height=75>
          <td bgcolor=#403d3c>&nbsp;</td>
          <td width=230 bgcolor=#403d3c>&nbsp;</td>
          <td width=478>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr height=570>   
          <td bgcolor=403d3c>&nbsp;</td>
          <td colspan=2 valign=top height=570>



             <table width=708 height=570 border=0 align=center cellpadding=0 cellspacing=0 bordercolor="#000000" class="border">
             <tr>
               <td width=708 valign=top bordercolor="#000000" class="body_text"><table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
                 <tr>
                   <td colspan="6"><div align="center"><a href="http://www.lightcoloranddarkness.org/home.php"><img src="images/banner.jpg" alt="Light, Darkness &amp; Color" width="688" height="110" border="0"></a></div></td>
                 </tr>
                 <tr>
                   <td><a href="/liane.php" target="_top" onClick="MM_nbGroup('down','group1','lianne1','',1)" onMouseOver="MM_nbGroup('over','lianne1','images/lianne.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/lianne_1.jpg" alt="Lianne Collot d'Herbois" name="lianne1" width="98" height="55" border="0"></a></td>
                   <td><a href="/articles.php" target="_top" onClick="MM_nbGroup('down','group1','articles1','',1)" onMouseOver="MM_nbGroup('over','articles1','images/articles_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/articles_1.jpg" alt="Articles" name="articles1" width="98" height="55" border="0"></a></td>
                   <td><a href="/reflections.php" target="_top" onClick="MM_nbGroup('down','group1','reflections1','',1)" onMouseOver="MM_nbGroup('over','reflections1','images/reflections_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/reflections_1.jpg" alt="Personal Reflections" name="reflections1" width="98" height="55" border="0"></a></td>
                   <td><a href="/education.php" target="_top" onClick="MM_nbGroup('down','group1','education1','',1)" onMouseOver="MM_nbGroup('over','education1','images/education_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/education_1.jpg" name="education1" width="98" height="55" border="0"></a></td>
                   <td><a href="/therapy.php" target="_top" onClick="MM_nbGroup('down','group1','therapy1','',1)" onMouseOver="MM_nbGroup('over','therapy1','images/therapy_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/therapy_1.jpg" alt="Painting Therapy" name="therapy1" width="98" height="55" border="0"></a></td>
                   <td><a href="/contact.php" target="_top" onClick="MM_nbGroup('down','group1','contact1','',1)" onMouseOver="MM_nbGroup('over','contact1','images/contact_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/contact_1.jpg" alt="Contact" name="contact1" width="98" height="55" border="0"></a></td>
                 </tr>
                 <tr>
                   <td colspan="6" class="body_text"><p>Pamela Whitman, M.A., is a graduate of the Emerald Foundation in The Hague, Holland. She was part of the second international group to complete the training in Painting Therapy. Pamela has a private practice as a painting therapist in Grass Valley, California, and offers group classes for adults. She is a part time faculty member at the Emerald Foundation in Holland and an adjunct faculty member at the Rudolf Steiner College in Fair Oaks, California. </p>
                     <p> Pamela is certified in Painting Therapy by the Section for Anthroposophic Medicine of the School for Spiritual Science, Dornach, Switzerland. </p>
                     <p>Feel free to contact Pamela with any questions or contributions:</p>
                     <p><a href="mailto:pamwhitman@yahoo.com">Pamela Whitman</a><br>
                       +1.530.477.7794<br>
                   pamwhitman@yahoo.com                   </p></td>
                 </tr>
               </table>
                  <?php
				 include 'http://www.lightcoloranddarkness.org/footer.php';
				 ?></td>
             </tr>
            </table>


          </td>
          <td>&nbsp;</td>
          </td>

        </tr>
        <tr>
          <td bgcolor=#403d3c>&nbsp;</td>
          <td width=230 height="50" valign=top bgcolor=#403d3c></td>
          <td width=413>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
    </table>						
</body>

</html>


<p class="footer" style="text-align:left;padding-left:0px">
	
		
</p>
