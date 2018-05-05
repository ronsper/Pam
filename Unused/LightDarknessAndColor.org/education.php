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
        <style type="text/css">
<!--
.style2 {	font-size: 18pt;
	font-weight: bold;
}
-->
        </style>
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
                   <td colspan="6"><div align="center"><a href="http://www.lightdarknessandcolor.org/home.php"><img src="images/banner.jpg" alt="Light, Darkness &amp; Color" width="688" height="110" border="0"></a></div></td>
                 </tr>
                 <tr>
                   <td><a href="liane.php" target="_top" onClick="MM_nbGroup('down','group1','lianne1','',1)" onMouseOver="MM_nbGroup('over','lianne1','images/lianne.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/lianne_1.jpg" alt="Lianne Collot d'Herbois" name="lianne1" width="98" height="55" border="0"></a></td>
                   <td><a href="articles.php" target="_top" onClick="MM_nbGroup('down','group1','articles1','',1)" onMouseOver="MM_nbGroup('over','articles1','images/articles_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/articles_1.jpg" alt="Articles" name="articles1" width="98" height="55" border="0"></a></td>
                   <td><a href="reflections.php" target="_top" onClick="MM_nbGroup('down','group1','reflections1','',1)" onMouseOver="MM_nbGroup('over','reflections1','images/reflections_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/reflections_1.jpg" alt="Personal Reflections" name="reflections1" width="98" height="55" border="0"></a></td>
                   <td><a href="education.php" target="_top" onClick="MM_nbGroup('down','group1','education1','',1)" onMouseOver="MM_nbGroup('over','education1','images/education_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/education_1.jpg" name="education1" width="98" height="55" border="0"></a></td>
                   <td><a href="therapy.php" target="_top" onClick="MM_nbGroup('down','group1','therapy1','',1)" onMouseOver="MM_nbGroup('over','therapy1','images/therapy_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/therapy_1.jpg" alt="Painting Therapy" name="therapy1" width="98" height="55" border="0"></a></td>
                   <td><a href="contact.php" target="_top" onClick="MM_nbGroup('down','group1','contact1','',1)" onMouseOver="MM_nbGroup('over','contact1','images/contact_2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/contact_1.jpg" alt="Contact" name="contact1" width="98" height="55" border="0"></a></td>
                 </tr>
                 <tr>
                   <td colspan="6" class="body_text"><p><strong>Announcement of New Initiative</strong></p>
                     <p>Painting Therapists Pamela Whitman, from California, and Marielle Levin, from Colorado, have announced a new initiative for furthering the work of Liane Collot d&rsquo;Herbois in North America. Their goal is to create a school where individuals in the U.S. and Canada can experience and study her insights into Light, Darkness and Color, and training in Painting Therapy, while at the same time fostering an awareness of this therapeutic approach among Anthroposophic physicians and the non-anthroposophic medical world. This pioneering effort is supported by extensive collaboration and on-going research.</p>
                     <p><strong>Introductory Workshops:<br>
                     Light, Darkness and Color,<br>
                     according to the work of Liane Collot d&rsquo;Herbois</strong></p>
                     <p>Studies of Light, Darkness and Color in the approach of Liane Collot d&rsquo;Herbois are presented in workshops by different teachers in several locations across the US. These workshops can be taken as introduction, and can lead to further foundation studies and formal education in Light, Darkness and Color and Therapeutic Painting. Information about the workshops is included below.</p>
                     <table width="100%" border="0" cellspacing="0" cellpadding="8">
                       <tr>
                         <td width="38%"><img src="http://www.lightdarknessandcolor.org/images/charcoal.png" alt="Charcoal" width="100%"></td>
                         <td colspan="2"><p align="center"><span class="style2">New Foundation Courses in<br>
                           &nbsp;Light, Darkness and Color </span><br>
                           according to the work of Liane Collot d&rsquo;Herbois, <br>
                           based on anthroposophical insights</p>
                             <ul type="disc">
                               <li class="body_text">Charcoal exercises and      watercolor paintingof the interaction of Light, Darkness and Color based on cosmic laws.</li>
                             </ul>
                           <ul type="disc">
                               <li class="body_text">Presentations and studies of      the activities of Light, Darkness and Color in connection with the human being.</li>
                           </ul>
                           <ul type="disc">
                               <li class="body_text">Options of date and location      for intensive 6-day courses.</li>
                           </ul></td>
                       </tr>
                       <tr>
                         <td colspan="2"><p class="body_text">These courses are suitable for mature adults with any level of art experience. The exercises help us to connect with our will, clarify our feelings, develop our perception and strengthen our thinking. The courses provide an excellent preparation for the study of therapeutic painting or can be followed independently as a path of self-development, leading to a deeper experience of spirit, soul and matter in us and the world around us.</p>
                             <p class="body_text"><strong>Denver, Colorado</strong><br>
                               Feb. 16-21, 2009 &ndash; L, D &amp; C &amp; three-foldness of the human being<br>
                               July 6-11, 2009 &ndash; L, D &amp; C &amp; four-foldness of the human being<br>
                               <strong>Medical presentation:</strong> Adam Blanning, M.D.<br>
                               <strong>Teacher:</strong> Marielle Levin, 303-698-0530 </p>
                           <p class="body_text"><strong>Fair Oaks, California</strong><br>
                             March 23-28, 2009 &ndash; L,D&amp;C &amp; three-foldness of the human being<br>
                             Fall 2009 &ndash; L, D &amp; C &amp; four-foldness of the human being<br>
                             <strong>Medical presentation:</strong> M. Kelly Sutton, M.D.<br>
                             <strong>Teacher:</strong> Pamela Whitman, 530-477-7794</p>
                           <p class="body_text"><strong>Spring Valley, New York</strong><br>
                             Information on possible courses here will be available soon.</p>
                           <p class="body_text"><em>Details on courses and registration information will be available on this website as soon as arrangements have been finalized.  Please check back soon. </em></p></td>
                         <td width="42%"><img src="images/crystals.png" alt="Veil Painting" width="100%" align="top"></td>
                       </tr>
                     </table>
                     <p>For more information please contact:</p>
                     <p>California, Grass Valley:<br>
                       Pamela Whitman &lt;pamwhitman@yahoo.com&gt;<br>
                       Website: <a href="http://www.lightdarknessandcolor.com">www.lightdarknessandcolor.com</a></p>
                     <p>Colorado, Denver:<br>
                       Marielle Levin mariellevin@comcast.net<br>
                       <a href="Marielle_class_flier.pdf">Click here for class flyer.</a> <br>
                       Website: <a href="http://www.ldcdenver.org">www.ldcdenver.org</a></p>
                     <p>Mexico, San Antonio Tlayacapan,<br>
                     Lois Schroff &lt;lois.schroff@gmail.com&gt;</p>
                     <p>New York, Buffalo:<br>
                       Mary Fisher &lt;mfaf52@earthlink.net&gt;</p>
                     <p>New York, New York:<br>
                       Kate Temple &lt;katetemple@earthlink.net&gt;</p>
                     <p>Virginia, Alberta:<br>
                       Martha Loving Orgain &lt;lovingcolor@earthlink.net&gt;<br>
                       Website: <a href="http://www.lovingcolor.org">www.lovingcolor.org</a></p>
                     <p>Michigan, Ann Arbor:<br>
                       Ayesha Mall &lt;aymall@comcast.net&gt;</p>
                     <p>&nbsp;</p>
                     <p><strong>Contact information regarding training in Painting Therapy:</strong></p>
                     <p>For information about progress towards a schooling in Light, Darkness and Color and Painting Therapy based in the United States, please contact Marielle Levin &lt;mariellevin@comcast.net&gt; or Pamela Whitman &lt;pamwhitman@yahoo.com&gt;. Information on introductory and foundational workshops will also be posted on www.lightdarknessandcolor.org.</p>
                     <p>Emerald Foundation <br>
                       4- Year Training in Painting Therapy (2 sessions per year).<br>
                       Currently the only officially recognized &amp; certified training in Collot Painting <br>
                       Therapy.<br>
                       Courses are taught in English with German translation.<br>
                       New training begins in Spring 2008!<br>
                       Mesdagstraat 118<br>
                       2596 XZ The Hague<br>
                       The Netherlands<br>
                       011-31-70 324 7709<br>
                       011-31-70 324 3726 Fax<br>
                   email: stg.emerald@xs4all.nl</p></td>
                 </tr>
               </table>
                 <p align="center" class="copyright">&copy; 2007 - by Pamela Whitman &amp; Marielle Levin, Light, Darkness &amp; Color. All rights reserved. </p></td>
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
