<?php

session_start();
ob_start();

?>

<?php require("login/login3_iphone.php"); ?> 
<?php require("bsniff.php"); ?>
<?php require("mobile_apps.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Public Health Prototypes | App Lab | Informatics R&D Lab</title>
<link rel="stylesheet" href="styles_iphone.css" type="text/css" />
<link
        rel="stylesheet"
        type="text/css"
        href="styles_iphone_retina.css"
        media="only screen and (-webkit-min-device-pixel-ratio: 2)" />


<link rel="stylesheet" type="text/css" href="comments/css/stylesheet_iphone.css"/>
<script type="text/javascript" src="common.js"></script>



</head>
<meta name="viewport" content="width=320" />
<body onload="MM_preloadImages('images_iphone/download_iphone_hover.png')">


<div id="wrap">



<div id="header">
<a href="http://www.phiresearchlab.org"><img src="images_iphone/banner.png" title="Informatics R&D Laboratory, Public Health Prototypes App Lab, A tool for the Lab, CDC, and its community partners to test and collaborate on innovative mobile apps" alt="Informatics R&D Laboratory, Public Health Prototypes App Lab, A tool for the Lab, CDC, and its community partners to test and collaborate on innovative mobile apps" border="0" width="320px" height"130px" /></a>

</div><!--end of header-->

<div id="back_to_iphone"><span style="color:#0069ac;"><</span> <a href="index_iphone.php">All prototypes</a>
</div><!--end of disclaimer_iphone-->



<div id="other_links_iphone"><a href="mailto:informaticslab@cdc.gov">Contact us ></a><br/>
<a href="https://github.com/informaticslab/respguide">Get source code ></a>

</div>


<div id="iphone_detail_icons"><img src="images/niosh_face_icon.png" alt="NIOSH Facepiece Respirator Guide"/>
</div>



<div id="app_name_iphone">NIOSH Facepiece Respirator Guide</div>

<div id="stats_iphone_2lines">
<strong>Category:</strong> Reference<br/>
    <strong>Released:</strong> <?php echo $respguide_release_date ?><br/>
    <strong>Version:</strong> <?php echo $respguide_version ?><br/>
    <strong>Size:</strong> <?php echo $respguide_size ?><br/>
</div><!--end of stats-->


<div id="download_detail_iphone_2lines"><a id="niosh-face-applab-download" href="<?php echo $respguide_manifest_link ?>"><img src="images_iphone/download_iphone.png" alt="Download app" title="Download app" name="Image4" width="65" height="20" border="0" id="Image4" /></a></div>

<div id="wrap_requirements">
<div id="requirements_iphone">
<strong>Cost:</strong> Free<br/>
<strong>Requirements:</strong>
iPhone, iPod Touch, <br/>
iPad with iOS 4.3 or later
</div>

</div>






<div id="dotted_line3_iphone"></div>

<div id="detail_text_iphone">



<span style="font-size:11px;"><strong>Description:</strong></span>

<p>The goal of this prototype has been to collaborate with the The National Institute for Occupational Safety and Health (NIOSH) to develop a moble app for the iPhone (and eventually other devices) that can serve as a resource for those who want to quickly and easily explore the database of all NIOSH-approved particulate filtering facepice respirators.</p> 



<br/>

<strong>Screenshots:</strong> 
<div id="screen_row_iphone"><img src="images_iphone/face_screen1.png" alt="screenshot of opening screen" title="screenshot of opening screen"/></div> 
<div id="screen_row_iphone"><img src="images_iphone/face_screen2.png" alt="screenshot of respirator classes" title="screenshot of respirator classes"/></div> 
<div id="screen_row_iphone"><img src="images_iphone/face_screen3.png" alt="screenshot of N95 facepiece respirator listings" title="screenshot of N95 facepiece respirator listings"/></div>
<div id="screen_row_iphone"><img src="images_iphone/face_screen4.png" alt="screenshot of details" title="screenshot of details"/></div>





<div id="dotted_line4_iphone"></div>
<br/>
<div id="feedback_iphone">

<?php
$page_id = "respirator_guide";
$reference = "NIOSH Respirator Guide";
$path_to_comments_folder = "comments/";
define ('IN_COMMENTICS', 'true'); //no need to edit this line
require $path_to_comments_folder . "/includes/commentics.php"; //no need to edit this line

?>

</div><!--end of feedback-->
</div><!--end of second_column-->




</div><!--end of detail_text-->


<div id="footer"><span class="footer_text"><img src="images_iphone/footer_iphone.png" border="0" alt="Informatics R&D Lab | An initiative for the public health community, supported by: Public Health Surveillance and Informatics Program Office (proposed) -- Office of Surveillance, Epidemiology, and Laboratory Services -- Centers for Disease Control and Prevention -- Department of Health and Human Services" title="Informatics R&D Lab | An initiative for the public health community, supported by: Public Health Surveillance and Informatics Program Office (proposed) -- Office of Surveillance, Epidemiology, and Laboratory Services -- Centers for Disease Control and Prevention -- Department of Health and Human Services" /></span></div>
<div id="bottom_line"></div>

</div><!--end of wrap-->

</body>
</html>
