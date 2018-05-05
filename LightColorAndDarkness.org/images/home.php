<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
<head>

		<title>Light, Color &amp; Darkness</title>
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
.style2 {
	font-size: 18pt;
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
                   <td colspan="6"><div align="center"><a href="home.php"><img src="images/banner.jpg" alt="Light, Darkness &amp; Color" width="688" height="110" border="0"></a></div></td>
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
                   <td colspan="6" class="body_text"><p><img src="images/images/lcd_pinkrose.jpg" alt="by Liane Collot d'Herbois" width="220" height="270" class="image_frame_right"></p>
                     <p>Welcome to <a href="index.html">www.lightcoloranddarkness.org</a>, a networking website created to further the artistic and therapeutic work of Liane Collot d&rsquo;Herbois. <br>
                     </p>
                     <p>Our goal is to help develop awareness of this extraordinary and innovative work and to provide information on opportunities for practice and further study. We will present educational articles related to the study of Light, Color and Darkness, as well as Painting Therapy, and are open to contributions from others. Our outreach efforts include the goal of working toward the creation of a school for the study of Light, Color and Darkness and Painting Therapy in the US and to foster connections to the medical and therapeutic communities. </p>
                     <p>&nbsp;</p>
                     <p>&nbsp;</p>
                     <table width="100%" border="0" cellspacing="0" cellpadding="8">
                       <tr>
                         <td width="38%"><img src="images/crystals.png" alt="Veil Painting" width="100%" align="top"></td>
                         <td colspan="2"><p align="center"><span class="style2">New Foundation Courses in<br>
&nbsp;Light, Color and Darkness </span><br>
                           <span class="body_text">according to the work of Liane Collot d&rsquo;Herbois, <br>
                           based on anthroposophical insights</span></p>
                           <ul type="disc">
                             <li class="body_text">Charcoal exercises and      watercolor painting of the interaction of Light, Color and Darkness based on cosmic laws</li>
                           </ul>
                           <ul type="disc">
                             <li class="body_text">Presentations and studies of      the activities of Light, Color and Darkness in connection with the human being</li>
                           </ul>                           <ul type="disc">
                             <li class="body_text">Options of date and location      for intensive 6-day courses</li>
                         </ul></td>
                       </tr>
                       <tr>
                         <td colspan="3"><p class="body_text">These courses are suitable for mature adults with any level of art experience and provide an excellent preparation for the study of therapeutic painting. They can also be followed independently as a path of self-development.</p>
                           <p class="body_text"><strong>Denver, Colorado</strong><br>
  Feb. 16-21, 2009 &ndash; Light, Color &amp; Darkness and three-foldness of the human being<br>
  July 6-11, 2009 &ndash; Light, Color &amp; Darkness and four-foldness of the human being<br>
  Feb. 15-20, 2010 &ndash; Light, Color &amp; Darkness and seven-foldness of the human being<br>
  <strong>Teachers:</strong> Marielle Levin 303-698-0530, Pamela Whitman 530-477-7794, Deborah Lothrop 207-610-9449<br>
  <strong>Presentation:</strong> Adam Blanning, M.D.</p>
                           <p class="body_text"><strong>Fair Oaks, California</strong><br>
  March 23-28, 2009 &ndash; Light, Color &amp; Darkness and three-foldness of the human being<br>
  November 2-7, 2009 &ndash; Light, Color &amp; Darkness  and four-foldness of the human being<br>
  Spring 2010 &ndash; Light, Color &amp; Darkness and seven-foldness of the human being<br>
  <strong>Teachers:</strong> Pamela Whitman, 530-477-7794, Sarah Parsons <br>
  <strong>Presentation:</strong> M. Kelly Sutton, M.D.</p>
                           <p class="body_text"><strong>Spring Valley, New York</strong><br>
                             April 20-25, 2009 &ndash; Light, Color &amp; Darkness and three-foldness of the human being<br>
October 26-31, 2009 &ndash; Light, Color &amp; Darkness  and four-foldness of the human being<br>
April 12-17, 2010 &ndash; Light, Color &amp; Darkness and seven-foldness of the human being<br>
<strong>Teachers:</strong> Marielle Levin, 303-698-0530, Deborah Lothrop 207-610-944<br>
<strong>Presentation:</strong> Gerald Karnow, M.D. </p>
                         <p class="body_text"><em><a href="education.php">Click on the Education tab for details on courses and registration information. </a></em></p></td>
                       </tr>
                     </table>
                     <p><strong><img src="images/images/liane2.jpg" alt="Liane Collot d'Herbois" width="230" height="210" class="image_frame_right">Liane Collot d&rsquo;Herbois,</strong> Artist and Originator of Painting Therapy out of Light, Color and Darkness<u></u><br>
Liane Collot d&rsquo;Herbois (1907-1999) built upon the color work of Goethe and Rudolf Steiner, emphasizing the creative forces of light and darkness in painting, both artistically and therapeutically. She showed how the result of the dynamic meeting of light and darkness is movement that manifests as visible color in a transparent color space. Through using the resulting laws of Light, Color and Darkness one can move beyond subjectivity into a world of greater objective significance. Her early work with people of all ages showed her tremendous talent for seeing how constitution, temperament and illness can be revealed in one&rsquo;s paintings. By working closely with Ita Wegman and other physicians, she developed her insights into a Painting Therapy based on the foundation of Anthroposophy, demonstrating the direct connection and healing possibilities of Light, Color and Darkness to the human being on all levels. Her therapeutic insights and transformative paintings have inspired doctors, therapists, artists, and those seeking a connection with spirit all over the world. </p>
                     <p><img src="images/images/lcd_grnred.jpg" alt="Painting by Liane Collot d'Herbois" width="215" height="274" class="image_frame_left"> <img src="images/images/lcd_soul.jpg" alt="Painting by LianeCollot d'Herbois" width="215" height="274" class="image_frame_right"></p>
                     <p><em>(Please click on the <a href="liane.php">Liane Collot d&rsquo;Herbois</a> tab to read more.)</em></p></td>
                 </tr>
               </table>
                  <?php
				 include 'footer.php';
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
