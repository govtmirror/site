<?php
session_start();
ob_start();
?>

<?php require("login/login3_ipad.php"); ?> 
<?php require("bsniff.php"); ?>
<?php require("mobile_apps.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STD Guide, Version 2 | Public Health Prototypes | App Lab | Informatics R&D Lab</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<link rel="stylesheet" type="text/css" href="comments/css/stylesheet.css"/>
<script type="text/javascript" src="common.js"></script>


</head>

<body onload="MM_preloadImages('images/all_prototypes_hover.png','images/download_largest_hover.png')">

<div id="wrap">
<div id="topper">
</div><!--end of topper-->
<div id="line">
</div><!--end of line-->


<div id="header">
<span class="branding"><a href="http://www.phiresearchlab.org"><img src="images/branding.png" title="Informatics R&D Laboratory" alt="Informatics R&D Laboratory" border="0" width="248px" height"60px" /></a></span>
<span class="prototypes"><img src="images/prototypes.png" title="Public Health Prototypes | App Lab" alt="Public Health Prototypes | App Lab" border="0" width="294px" height"60px" /></span>
<span class="flourish"><img src="images/flourish.png" alt="Decorative illustration of email and internet-related icons" border="0" width="206px" height"77px" /></span>

</div><!--end of header-->


<div id="tagline">
<span class="tagtext">
<img src="images/tagline.png" title="A tool for the Lab, CDC, and its community partners to test and collaborate on innovative mobile apps" alt="A tool for the Lab, CDC, and its community partners to test and collaborate on innovative mobile apps" border="0" width="621px" height"17px" />
</span>
</div><!--end of tagline-->
<div id="back_button"><a href="index_ipad.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('all_prototypes','','images/all_prototypes_hover.png',1)"><img src="images/all_prototypes.png" alt="All prototypes" title="All prototypes" name="all_prototypes" width="130" height="27" border="0" id="all_prototypes" /></a></div><!--end of back_button-->

<div id="first_column">
<div id="large_icon">
<img src="images/std2_large_icon.png" alt="STD Guide, Version 2" title="STD Guide, Version 2" />

</div><!--end of large_icon-->
<div id="download_detail_largest"><a id="std2-applab-download" href="<?php echo $std2_manifest_link ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','images/download_largest_hover.png',1)"><img src="images/download_largest.png" alt="Download app" name="Image10" width="119" height="27" border="0" id="Image10" title="Download app" /></a></div><!--end of download_detail-->
<div id="stats">
<strong>Category:</strong> Reference<br/>
    <strong>Released:</strong> <?php echo $std2_release_date ?><br/>
    <strong>Version:</strong> <?php echo $std2_version ?><br/>
    <strong>Size:</strong> <?php echo $std2_size ?><br/>
    <strong>Cost:</strong> Free

</div><!--end of stats-->

<div id="small_line">

</div>

<div id="requirements">
<strong>Requirements:</strong><br/>
iPhone, iPod Touch, <br/>
iPad with iOS 4.3  <br/>
or later<br/>

</div>


</div><!--end of first_column-->



<div id="second_column">
<div id="top_right_links">
<a href="mailto:informaticslab@cdc.gov">Contact us ></a><br/>
<a href="https://github.com/informaticslab/std2">Get source code ></a>
</div><!--end of top_right_links-->

<div id="text_block">
<div id="app_name">STD Guide, Version 2</div>
<div id="subtitle">Description</div> 
<p>The goal of this prototype has been to collaborate with CDC's STD team to design a mobile app for the iPhone
containing the 2010 STD Treatment Guidelines.  This prototype, v2, builds on the first prototype version to have more of a "portal" feel. The application is to serve as a reference for doctors and related parties on the identification of and treatment regimen for STDs.</p>

<p>These guidelines for the treatment of persons who have or are at risk for sexually transmitted diseases (STDs) were updated by CDC after consultation with a group of professionals knowledgeable in the field of STDs who met in Atlanta on April 18–30, 2009. The information in this report updates the 2006 Guidelines for Treatment of Sexually Transmitted Diseases (MMWR 2006;55[No. RR–11]).</p> 
</div><!--end of text_block-->

<div id="screenshots">
<div id="subtitle">Screenshots</div> 
<div id="screen_row"><img src="images/std2_screens_row1.png" alt="screenshots of Home screen and guideline categories" title="screenshots of Home screen and guideline categories"/></div> 
<div id="screen_row2"><img src="images/std2_screens_row2.png" alt="screenshots of Recommended Regimens and photo associated with disease" title="screenshots of Recommended Regimens and photo associated with disease"/></div> 
</div><!--end of screenshots-->


<div id="section_divider">
</div><!--end of section_divider-->

<div id="feedback">
<?php

$page_id = "std2";
$reference = "STD Guide, Version 2";
$path_to_comments_folder = "comments/";
define ('IN_COMMENTICS', 'true'); //no need to edit this line
require $path_to_comments_folder . "includes/commentics.php"; //no need to edit this line

?>

</div><!--end of feedback-->
</div><!--end of second_column-->










<div id="footer"><span class="footer_text"><img src="images/footer.png" border="0" alt="Informatics R&D Lab | An initiative for the public health community, supported by: Public Health Surveillance and Informatics Program Office (proposed) -- Office of Surveillance, Epidemiology, and Laboratory Services -- Centers for Disease Control and Prevention -- Department of Health and Human Services" title="Informatics R&D Lab | An initiative for the public health community, supported by: Public Health Surveillance and Informatics Program Office (proposed) -- Office of Surveillance, Epidemiology, and Laboratory Services -- Centers for Disease Control and Prevention -- Department of Health and Human Services" /></span></div>
<div id="bottom_line"></div>


</div><!--end of wrap-->

</body>
</html>
