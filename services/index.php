<?
include ($_SERVER ['DOCUMENT_ROOT']."/clent/phddpdn.php");
include ($_SERVER ['DOCUMENT_ROOT']."/lang/ru.php");
include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_next.php");
$page = "services";

$ControllerUri = explode ('/', $_SERVER ['REQUEST_URI']);
if (empty($ControllerUri[2])) {} else {$id = trim ($ControllerUri[2]); $id = htmlspecialchars ($id, ENT_QUOTES);}

$sql = "SELECT * FROM nb_services WHERE (code='".$id."' OR id='".$id."') AND lang='$lngg' AND swtch='1' ";
$result = mysqli_query ($db, $sql);
if (!$result) {(header("Location: /index.php"));}
if (mysqli_num_rows($result) > 0) {$myrow88 = mysqli_fetch_array($result);}
else {header("HTTP/1.1 301 Moved Permanently"); header("Location: /index.php");}
$id = $myrow88['id'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><? echo $myrow88['title'];?></title>
<meta name="description" content="<? echo $myrow88['dscr'];?>" />
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/lnk.php");?>
</head>

<body>
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/cntr.php");?>

<!--header-->
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_header.php");?>
<!--header END-->


<div class="mainwrap container-fluid">
    <div class="row mainrow">

<!--slider-->

<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_slider02.php");?>
<!--slider END-->

        <div class="div22">
            <div class="main-ttl-div">
                <div class="main-ttl-box">
                    <div class="main-ttl02"><? echo $myrow88['htitleAB'];?></div>
                </div>
                <div class="main-ttl-sep"><span></span></div>
                <div class="main-ttl-dscr"><? echo $myrow88['dscrAB'];?></div>
            </div>
            
<? pageservblock($myrow88['lcode'],$lngg);?>
            
        </div>
<!--noindex--><!--googleoff: all-->
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_gallery.php");?>       
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_coop.php");?>       
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_step.php");?>       
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_sidebar.php");?>
<!--googleon: all--><!--/noindex-->

<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_footer.php");?>
    </div>    
</div>

<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_modal.php");?>
<script type="text/javascript" src="<? $_SERVER ['DOCUMENT_ROOT'];?>/js/ressite.js"></script>
</body>
</html>