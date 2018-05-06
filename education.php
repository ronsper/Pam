<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
<head>

    <title>Light, Color &amp; Darkness</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <link href="ldc.css" rel="stylesheet" type="text/css">
    <script type="text/JavaScript">
        <!--
        function MM_preloadImages() { //v3.0
            var d = document;
            if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) {
                        d.MM_p[j] = new Image;
                        d.MM_p[j++].src = a[i];
                    }
            }
        }

        function MM_findObj(n, d) { //v4.01
            var p, i, x;
            if (!d) d = document;
            if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document;
                n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n];
            for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n);
            return x;
        }

        function MM_nbGroup(event, grpName) { //v6.0
            var i, img, nbArr, args = MM_nbGroup.arguments;
            if (event == "init" && args.length > 2) {
                if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
                    img.MM_init = true;
                    img.MM_up = args[3];
                    img.MM_dn = img.src;
                    if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
                    nbArr[nbArr.length] = img;
                    for (i = 4; i < args.length - 1; i += 2) if ((img = MM_findObj(args[i])) != null) {
                        if (!img.MM_up) img.MM_up = img.src;
                        img.src = img.MM_dn = args[i + 1];
                        nbArr[nbArr.length] = img;
                    }
                }
            } else if (event == "over") {
                document.MM_nbOver = nbArr = new Array();
                for (i = 1; i < args.length - 1; i += 3) if ((img = MM_findObj(args[i])) != null) {
                    if (!img.MM_up) img.MM_up = img.src;
                    img.src = (img.MM_dn && args[i + 2]) ? args[i + 2] : ((args[i + 1]) ? args[i + 1] : img.MM_up);
                    nbArr[nbArr.length] = img;
                }
            } else if (event == "out") {
                for (i = 0; i < document.MM_nbOver.length; i++) {
                    img = document.MM_nbOver[i];
                    img.src = (img.MM_dn) ? img.MM_dn : img.MM_up;
                }
            } else if (event == "down") {
                nbArr = document[grpName];
                if (nbArr)
                    for (i = 0; i < nbArr.length; i++) {
                        img = nbArr[i];
                        img.src = img.MM_up;
                        img.MM_dn = 0;
                    }
                document[grpName] = nbArr = new Array();
                for (i = 2; i < args.length - 1; i += 2) if ((img = MM_findObj(args[i])) != null) {
                    if (!img.MM_up) img.MM_up = img.src;
                    img.src = img.MM_dn = (args[i + 1]) ? args[i + 1] : img.MM_up;
                    nbArr[nbArr.length] = img;
                }
            }
        }

        //-->
    </script>
</head>
<body leftmargin=0 topmargin=0 rightmargin=0 bottommargin=0
      onLoad="MM_preloadImages('images/lianne.jpg','images/articles_2.jpg','images/reflections_2.jpg','images/education_2.jpg','images/therapy_2.jpg','images/contact_2.jpg')">
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


            <table width=708 height=570 border=0 align=center cellpadding=0 cellspacing=0 bordercolor="#000000"
                   class="border">
                <tr>
                    <td width=708 valign=top bordercolor="#000000" class="body_text">
                        <table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
                            <tr>
                                <td colspan="6">
                                    <div align="center"><a href="home.php"><img src="images/banner.jpg"
                                                                                alt="Light, Darkness &amp; Color"
                                                                                width="688" height="110" border="0"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="liane.php" target="_top"
                                       onClick="MM_nbGroup('down','group1','lianne1','',1)"
                                       onMouseOver="MM_nbGroup('over','lianne1','images/lianne.jpg','',1)"
                                       onMouseOut="MM_nbGroup('out')"><img src="images/lianne_1.jpg"
                                                                           alt="Lianne Collot d'Herbois" name="lianne1"
                                                                           width="98" height="55" border="0"></a></td>
                                <td><a href="articles.php" target="_top"
                                       onClick="MM_nbGroup('down','group1','articles1','',1)"
                                       onMouseOver="MM_nbGroup('over','articles1','images/articles_2.jpg','',1)"
                                       onMouseOut="MM_nbGroup('out')"><img src="images/articles_1.jpg" alt="Articles"
                                                                           name="articles1" width="98" height="55"
                                                                           border="0"></a></td>
                                <td><a href="reflections.php" target="_top"
                                       onClick="MM_nbGroup('down','group1','reflections1','',1)"
                                       onMouseOver="MM_nbGroup('over','reflections1','images/reflections_2.jpg','',1)"
                                       onMouseOut="MM_nbGroup('out')"><img src="images/reflections_1.jpg"
                                                                           alt="Personal Reflections"
                                                                           name="reflections1" width="98" height="55"
                                                                           border="0"></a></td>
                                <td><a href="education.php" target="_top"
                                       onClick="MM_nbGroup('down','group1','education1','',1)"
                                       onMouseOver="MM_nbGroup('over','education1','images/education_2.jpg','',1)"
                                       onMouseOut="MM_nbGroup('out')"><img src="images/education_1.jpg"
                                                                           name="education1" width="98" height="55"
                                                                           border="0"></a></td>
                                <td><a href="therapy.php" target="_top"
                                       onClick="MM_nbGroup('down','group1','therapy1','',1)"
                                       onMouseOver="MM_nbGroup('over','therapy1','images/therapy_2.jpg','',1)"
                                       onMouseOut="MM_nbGroup('out')"><img src="images/therapy_1.jpg"
                                                                           alt="Painting Therapy" name="therapy1"
                                                                           width="98" height="55" border="0"></a></td>
                                <td><a href="contact.php" target="_top"
                                       onClick="MM_nbGroup('down','group1','contact1','',1)"
                                       onMouseOver="MM_nbGroup('over','contact1','images/contact_2.jpg','',1)"
                                       onMouseOut="MM_nbGroup('out')"><img src="images/contact_1.jpg" alt="Contact"
                                                                           name="contact1" width="98" height="55"
                                                                           border="0"></a></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="body_text"><p style="text-align:center"><img width="417"
                                                                                                    height="67"
                                                                                                    src="images/lcdinnabanner.jpg"
                                                                                                    hspace="12"
                                                                                                    vspace="12"
                                                                                                    alt="Light, Color and Darkness in North America ">
                                    </p>
                                    <p><span style="padding:40 px">A series of up to four six-day intensive FoundationCcourses in Light, Color and Darkness, and the study of the healthy human being took place twice a year beginning in 2009 in three locations: Denver, CO, Fair Oaks, CA, and Spring Valley, NY. They were created both as a preparation for those potentially interested in studying therapeutic painting and also as a path of self- development. Credit from these courses is recognized at any of the established schools for Painting Therapy (see listing on Education Page).</span>
                                    </p>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="8">
                                        <tr></tr>
                                    </table>
                                    <hr>
                                    <p><strong>New Courses:</strong></p>
                                    <p><a href="pdf/StruggleGratitude.pdf" target="_blank"><img
                                                    src="images/images/StruggleGratitude-page1.jpg" alt="workshop" width="680"
                                                    height="" class="image_frame_left"/></a></p>
                                    <table width="100%" border="0">
                                        <tr>
                                            <td><img src="images/images/charcoal2.jpg" alt="charcoal" width="235"
                                                     height="310" class="image_frame_left"/></td>
                                            <td><img src="images/veil-painting.jpg"
                                                     alt="veil painting by Marielle Levin" width="235" height="310"
                                                     class="image_frame_right"></td>
                                        </tr>
                                    </table>
                                    <p align="center">&nbsp;</p>
                                    <hr>
                                    <p align="left"><strong>Window To The Spirit, Color Space Workshops<br>
                                        </strong>Classes in Grass Valley, Fair Oaks &amp; Sacramento, CA</p>
                                    <p align="left"><strong><br>
                                        </strong></p>
                                    <div>
                                        <img src="https://ci6.googleusercontent.com/proxy/0hpu8TyjbcDs3lfmgj6bB_c-pnX1E7742ivBxDeLw_2Yo6g0TMrksMf1o55Ldw_tzXddaL9zJrJ-wiUAPOyanh6lF35KAUviQbXbkAr90xQ9H0jD=s0-d-e1-ft#http://ih.constantcontact.com/fs146/1103272366329/img/1106.jpg"
                                             alt="" name="14ada9c51c27b023_ACCOUNT.IMAGE.1106" width="469" height="281"
                                             hspace="5" vspace="5" border="0" tabindex="0">
                                        <div dir="ltr">
                                            <div id=":11a" role="button" tabindex="0" aria-label="Download attachment "
                                                 data-tooltip-class="a1V" data-tooltip="Download">
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>
                                    <p align="left"><strong>Watercolor Veil Painting</strong><br>
                                        One Saturday per month from 10:00-4:00<br>
                                        Sacramento, CA </p>
                                    <p align="left">For information contact Pam at <a
                                                href="mailto:pamwhitman@yahoo.com">pamwhitman@yahoo.com</a> or at
                                        530-477-7794</p>
                                    <hr>
                                    <p align="center"><strong>Faculty:</strong></p>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><img src="images/images/PamWhitman.jpg" alt="Pam Whitman" width="150"
                                                     align="top" class="image_frame_left"></td>
                                            <td><u>Pamela Whitman</u><br>
                                                Pamela Whitman, M.A., is a graduate of M.I.T. and the Emerald Foundation
                                                in The Hague, Holland. She was part of the second international group to
                                                complete the training in Painting Therapy based on the work of Liane
                                                Collot d&rsquo;Herbois.&nbsp; Pamela has a private practice as a
                                                painting therapist in Grass Valley, California, and offers group classes
                                                for adults. She is a part time faculty member at the Emerald Foundation
                                                in Holland and an adjunct faculty member at the Rudolf Steiner College
                                                in Fair Oaks, California.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <p><strong><a name="schools"></a>Contact information regarding training in Painting
                                            Therapy:</strong></p>
                                    <p><strong>Light Color and Darkness in North America (USA) </strong><br>
                                        Courses are taught in English.<br>
                                        Contact Pamela Whitman, Ph: 530-477-7794, E-mail: pamwhitman@yahoo.com<br>
                                        Contact Marielle Levin, Ph: 303-698-0530, E-mail: mariellevin@comcast.net<br>
                                        <a href="index.html">www.LightColorAndDarkness.org</a></p>
                                    <p><strong>Emerald Foundation (The Netherlands) </strong><br>
                                        4- Year Certified Training in Collot d'Herbois Painting Therapy (2 sessions per
                                        year).
                                        <br>
                                        Courses are taught in English with German translation.<br>
                                        Josine &amp; Paul Hutchison<br>
                                        Nassau Dillenburgstraat 13<br>
                                        2596 AB The Hague<br>
                                        The Netherlands<br>
                                        011-31-70 324 7709<br>
                                        011-31-70 324 3726 Fax<br>
                                        email: stg.emerald@xs4all.nl<br>
                                        <a href="http://www.emeraldfoundation.nl">www.EmeraldFoundation.nl</a></p>
                                    <p><strong>Lumiere, Tenebres, Couleur (France) </strong><br>
                                        4- Year Certified Training in Collot d'Herbois Painting Therapy <br>
                                        Courses are taught in French.
                                        <br>
                                        Chantal Bernard et Janny Mager<br>
                                        Les Ateliers du Pr&eacute;sent 17bis<br>
                                        avenue d&rsquo;Aligre F78400 Chatou<br>
                                        France<br>
                                        00 33 (0) 1 39 52 89 78 <br>
                                        colour@orange.nl or luteco@club-internet.fr <br>
                                        <a href="http://www.lumiere-tenebres-couleur.fr">www.lumiere-tenebres-couleur.fr</a>
                                    </p>
                                    <p><strong>Associazione Il Ramo In Firoe</strong><br>
                                        4- Year Training in Collot d'Herbois Painting Therapy <br>
                                        Courses are taught in Italian.<br>
                                        Christina Bimbi<br>
                                        Via Nardo di Cione, 9<br>
                                        Italy
                                        <br>
                                        Phone: (39) 055 8547980<br>
                                        Phone: (39) 333 6461387<br>
                                        Email: cristina.bimbi@libero.it<br>
                                        <a href="http://www.lucecoloretenebra.it">www.lucecoloretenebra.it</a></p>
                                    <p><strong>The Sienna Academy (Australia) </strong><br>
                                        4- Year Training in Collot d'Herbois Painting Therapy <br>
                                        Courses are taught in English.<br>
                                        Sally Martin
                                        <br>
                                        27 Deodar Court,<br>
                                        Mapleton, QLD 4560<br>
                                        Australia<br>
                                        Phone: (07) 5478 6260<br>
                                        Phone: + 61 (0) 7 5478 6260<br>
                                        Email: sallymartin@aanet.com.au<br>
                                        <a href="http://www.siennaacademy.com.au/">www.SiennaAcademy.com.au</a></p>
                                    <hr>
                                    <p><strong>Contact information regarding general classes in light, color &amp;
                                            darkness:</strong></p>
                                    <p>California, Grass Valley:<br>
                                        Pamela Whitman - pamwhitman@yahoo.com <br>
                                        Website: <a href="index.html">www.lightcoloranddarkness.org</a></p>
                                    <p>Hawaii, Maui:<br>
                                        Iris Sullivan -ameris@pacbell.net<br>
                                        Website: <a href="http://www.movingthesoulwithcolor.com">www.movingthesoulwithcolor.com</a>
                                    </p>
                                    <p>Mexico, San Antonio Tlayacapan:<br>
                                        Lois Schroff - lois.schroff@gmail.com</p>

                                    <p>Montana, Sidney:<br>
                                        Sarah Parsons -
                                        sparsons@midrivers.com, 406-488-7881<br>
                                        Sarah Parsons, B.F.A. (RISD in 1984), was part of the fourth international group
                                        to complete the training in painting therapy based on the work of Liane Collot
                                        d'Herbois at the Emerald Foundation in the Hague, Holland, and received her
                                        diploma in 2015. She resides in eastern Montana with her husband and children.
                                    </p>
                                    <p>New Hampshire, Temple:<br>
                                        Sheila Bay-Harvey, CCE - <a href="mailto:sheilabay@yahoo.com">sheilabay@yahoo.com</a>,
                                        603-831-8896<br>
                                        Sheila has lived and worked for years in Europe and the USA teaching children
                                        and adults with disabilities in Camphill Communities and Anthroposophic Life
                                        Sharing Communities. She has her Curative Education (Special Ed) diploma from
                                        The Netherlands. She completed the 4-year training as a Light, Color and
                                        Darkness Painting Therapist at the Emerald Foundation in Den Haag, The
                                        Netherlands. She has a private therapy practice in Temple, New Hampshire and
                                        offers workshops in Light, Color and Darkness at various locations. </p>
                                    <p>Vermont, Burlington:<br>
                                        Martha Loving Orgain - martha@lovingcolor.org<br>
                                        Website: <a href="http://www.lovingcolor.org">www.lovingcolor.org</a>,
                                        434-865-5330</p></td>
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
