<?
include ($_SERVER ['DOCUMENT_ROOT']."/clent/phddpdn.php");
include ($_SERVER ['DOCUMENT_ROOT']."/lang/ru.php");
include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_next.php");
$page = "services";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><? minf('nb_pages',$page,$lngg,'title');?></title>
<meta name="description" content="<? minf('nb_pages',$page,$lngg,'dscr');?>" />
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

<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_slider03.php");?>
<!--slider END-->

        <div id="anchdiv01" class="div04">
            <div class="main-ttl-div">
                <div class="main-ttl-box"><span class="main-ttl-bold main-ttl-bold-grey"><? echo lang('iserv-ttl');?></span>
                    <div class="main-ttl"><? minf('nb_pages',$page,$lngg,'htitle');?></div>
                </div>
                <div class="main-ttl-sep"><span></span></div>
            </div>
            <div class="row03 serv-div">
                <div class="serv-block02">
<? pageserv($lngg);?>                     
                </div>
            </div>
        </div>
<!--noindex--><!--googleoff: all-->  
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_gallery.php");?>       
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_sidebar.php");?>
<!--googleon: all--><!--/noindex-->        
       
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_footer.php");?>
        
    </div>    
</div>

<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_modal.php");?>
<script type="text/javascript" src="<? $_SERVER ['DOCUMENT_ROOT'];?>/js/ressite.js"></script>
</body>
</html>