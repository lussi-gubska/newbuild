<?
include ($_SERVER ['DOCUMENT_ROOT']."/clent/phddpdn.php");
include ($_SERVER ['DOCUMENT_ROOT']."/lang/ru.php");
include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_next.php");
$page = "contacts";
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

        <div class="div03">
            <div class="main-ttl-div">
                <div class="main-ttl-box"><span class="main-ttl-bold main-ttl-bold-white"><? echo lang('inews-contacts');?></span>
                    <div class="main-ttl"><? minf('nb_pages',$page,$lngg,'htitle');?></div>
                </div>
                <div class="main-ttl-sep"><span></span></div>
                <div class="main-ttl-dscr"><? minf('nb_pages',$page,$lngg,'text');?></div>
            </div>
            <div class="row22 contacts-div">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="cont-block">
                        <div class="cont-mn02 cont-padding">
                            <div class="cont-ico"><img src="/img/ico-cont01.png" alt=""></div><? minf2('nb_contacts','lcode',1111,'ru','phn');?>
                        </div>
                        <div class="cont-mn02 cont-padding"><b style="color:red; font:bold 20px/20px Arial;">МАТЕРИАЛЫ НЕ ПРЕДЛАГАТЬ</b></div>
                        <div class="cont-mn02 cont-padding">
                            <div class="cont-ico"><img src="/img/ico-cont02.png" alt=""></div><? minf2('nb_contacts','lcode',1111,'ru','eml');?>
                        </div>
                        <div class="cont-mn02 cont-padding">
                            <div class="cont-ico"><img src="/img/ico-cont03.png" alt=""></div><? minf2('nb_contacts','lcode',1111,$lngg,'adr');?>
                        </div>


<!--
                        <div class="cont-mn02 cont-padding">
                            <div class="cont-ico"><img src="/img/ico-cont01.png" alt=""></div>+38 095 314 13 01
                        </div>
                        <div class="cont-mn02 cont-padding">
                            <div class="cont-ico"><img src="/img/ico-cont02.png" alt=""></div>Sidorovaok1989@gmail.com
                        </div>
-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form class="form" id="contactform01" action="<?=$_SERVER['REQUEST_URI'];?>" method="post">
                        <div class="sbj"><label for="subject">Subject</label><input name="subject" id="subject" /></div>
                        <div class="dinput2">
                            <label for="title"></label>
                            <input id="title" name="title" class="input-text required" type="text" minlength="2" maxlength="50" placeholder="<? echo lang('form-ttl');?>">
                        </div>
                        <div class="dinput2">
                            <label for="email"></label>
                            <input id="email" name="email" class="input-text required email" type="text" minlength="2" maxlength="100" placeholder="Email">
                        </div>
                        <div class="dinput2">
                            <label for="text"></label>
                            <textarea id="text" name="text" class="input-text text-area required" minlength="2" maxlength="500" placeholder="<? echo lang('form-txt');?>"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dinput3">
                            <input class="input-btn2" type="submit" name="submitzz" value="<? echo lang('form-bttn');?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!--noindex--><!--googleoff: all-->
<? include ($_SERVER ['DOCUMENT_ROOT']."/clent/block_services.php");?>
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
