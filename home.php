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
                   <td colspan="6" align="left" class="body_text"><p><img src="images/images/lcd_pinkrose.jpg" alt="by Liane Collot d'Herbois" width="220" height="270" class="image_frame_right"></p>
                    <br><br><hr> <p>Welcome to <a href="index.html">www.lightcoloranddarkness.org</a>, a networking website created to further the artistic and therapeutic work of Liane Collot d&rsquo;Herbois. <br>
                     </p>
                     <p>Our goal is to help develop awareness of this extraordinary and innovative work and to provide information on opportunities for practice and further study. We will present educational articles related to the study of Light, Color and Darkness, as well as Painting Therapy, and are open to contributions from others. Our outreach efforts include courses in the study of Light, Color &amp; Darkness and their relationship to the human being, artistic and therapeutic charcoal drawing and veil painting.                     </p>
                      <hr>
                     <p align="center"><span class="style2">New Courses</span>                     </p>
                     <p align="left"><strong>Grass Valley, Fair Oaks, Sacramento  &amp; San Rafael, California &amp; Portland, Oregon</strong><br>
                       
                      
                       Veil painting in Sacramento one Saturday a month.<br>
                       Upcoming classes in Grass Valley.                     </p>
<p align="left"><em><a href="education.php">Click on the Education tab for details on courses, registration and dates. </a></em></p>
<p><a href="pdf/BACWTT-evening.pdf" target="_blank"><img src="images/images/BACWTT-evening.jpg" alt="workshop" width="680" height="" class="image_frame_left" /></a></p>
<p><a href="http://steinercollege.edu/veilpainting/" target="_blank"><img src="images/images/fair-oaks-veil-painting-class.jpg" alt="workshop" width="680" height="" class="image_frame_left" /></a></p>                    
<p><a href="pdf/Portland-VP-flier.pdf" target="_blank"><img src="images/images/Portland-VP-flier.jpg" alt="workshop" width="680" height="" class="image_frame_left" /></a></p>
<p><a href="pdf/BACWTT.pdf" target="_blank"><img src="images/images/BACWTT-Living-in-Color.jpg" alt="workshop" width="680" height="" class="image_frame_left" /></a></p>
<p>The time for the evening presentation has been changed to 5:00 pm from 7:00 pm.</p>
                     <hr>
                     <p><span style="text-align:center;"></span></p>
                     <span style="text-align:center;"><p>The following poem is a synthesis of a participant's experience at a  workshop for teachers.</p>
                    <p>&nbsp;</p>
                  <p><strong>FROM DUST TO LIGHT</strong></p>
                    <p>The creative will of our thinking<br>
                      ignites the heart&rsquo;s receptivity,<br>
                      like color arising from the play<br>
                      of light and dark.</p>
                    <p>The darkness has sympathy <br>
                      for the light.<br>
                      It says,<br>
                      &ldquo;I will step aside and make way for the light!&rdquo;</p>
                    <p>                      Between black and white<br>
                      our living is a grey living<br>
                      but not a colorless one.</p>
                    <p>But what is the color of smoke?<br>
                      It depends on our point of view<br>
                      for color forms where light and darkness <br>
                      meet.</p>
                    <p>Just look&hellip;<br>
                      The colors we see<br>
                      depend upon our relationship<br>
                      to the light.<br>
                      Like love?<br>
                      Color is a changing thing.<br>
                      Like life?<br>
                      We are born into magenta;<br>
                      violet at death;<br>
                      indigo in between.</p>
                    <p>The gift of our epoch:<br>
                      when the will receives<br>
                      heart&rsquo;s thinking <br>
                      and pure light emerges!<br>
                      Viridian chakra!<br>
                      Divine fulcrum of freedom!</p>
                    <p>~ George Hoffecker</p>
                    
                    <p>&nbsp;</p>
                    </span>
                     <hr>
              
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
