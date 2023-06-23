<!--noindex--><!--googleoff: all-->
<div id="mymodal-form01" class="mddv2 modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modaloth modal-body" style="overflow:hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-box">
                    <h5><? echo lang('modl-ttl02');?></h5>
                    <div class="modal-box-sep"></div>
                    <div class="box-phone">
                        <? // minf2('nb_contacts','lcode',1111,'ru','phn');?>

                        <?
                            $sqlph = "SELECT * FROM nb_contacts WHERE lcode='1111' AND lang='ru'";
                            $resph = mysqli_query ($db, $sqlph);
                            if (!$resph) { echo "";}
                            $myph = mysqli_fetch_array($resph);
                            $myph01 = str_replace("<br>","",$myph['phn']);
                            $myph01 = explode("+", $myph01);
                        ?>
                        <a href="tel:<? echo preg_replace('/[^+\d]+/ism', '',$myph01[1]);?>" class="contacts-lnk"><? echo $myph01[1];?></a>
                        <a href="tel:<? echo preg_replace('/[^+\d]+/ism', '',$myph01[2]);?>" class="contacts-lnk"><? echo $myph01[2];?></a>
                        <div class="cont-mn02"><b style="color:red; font:bold 20px/20px Arial;">МАТЕРИАЛЫ НЕ ПРЕДЛАГАТЬ</b></div>
                    </div>
                    <div class="modal-box-sep"></div>
                    <h6><? echo lang('modl-ttl03');?></h6>
                    <form class="form" id="contactform02" action="<?=$_SERVER['REQUEST_URI'];?>" method="post">
                        <div class="sbj"><label for="subject">Subject</label><input name="subject" id="subject" /></div>
                        <div class="dinput2">
                            <label for="title" class="formlbl"></label>
                            <input id="title" name="title" class="input-text required" type="text" minlength="2" maxlength="100" placeholder="<? echo lang('form-ttl');?>">
                        </div>
                        <div class="dinput2">
                            <label for="phone" class="formlbl"></label>
                            <input id="phone" name="phone" class="input-text required" type="text" minlength="2" maxlength="100" placeholder="<? echo lang('form-phn');?>">
                        </div>
                        <div class="sbject"><label for="Questions">Questions</label><input name="questions" id="questions" /></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dinput3">
                            <input class="input-btn2 button-grad" type="submit" name="submit02" value="<? echo lang('form-bttn');?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mymodal-form02" class="mddv2 modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modaloth modal-body" style="overflow:hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-box">
                    <h5><? echo lang('modl-ttl01');?></h5>
                    <form class="form" id="contactform22" action="<?=$_SERVER['REQUEST_URI'];?>" method="post">
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
                        <div class="sbject"><label for="Questions">Questions</label><input name="questions" id="questions" /></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dinput3">
                            <input class="input-btn2" type="submit" name="submitzz" value="<? echo lang('form-bttn');?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mymodal-form03" class="mddv2 modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modaloth modal-body" style="overflow:hidden">
                <div class="modal-box-bg"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-box">
                    <h5 class="modal-box-ttl2">Акция - 7 у.е./ м2 за дизайн интерьера!</h5>
                    <div class="modal-box-sep"></div>
                    <p>В стоимость входит:</p>
                    <ul>
                        <li>выезд на объект и замеры;</li>
                        <li>обмерный план помещения;</li>
                        <li>обмерный план помещения;</li>
                        <li>план расстановки мебели с размерами;</li>
                        <li>план монтажа розеток и выключателей;</li>
                        <li>план расположения сантехники;</li>
                        <li>план освещения;</li>
                        <li>схема напольных покрытий;</li>
                        <li>коллажи двух помещений на выбор (стилистический и цветовой подбор);</li>
                    </ul>
                    <p>Смета на ремонтные работы -в подарок!</p>
                    <div style="margin-bottom:15px;"><b>Акция действует до 31.12.2018г.</b></div>
                    <div class="box-phone">
                        <? minf2('nb_contacts','lcode',1111,'ru','phn');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php if(isset($hasError)) { ?>
<div id="modal" class="mddv2 modal fade">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modaloth modal-body" style="overflow:hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-box">
                    <div class="modal-ttl04"><? echo lang('contacts-er');?></div>
                    <div class="modal-ttl03"><? echo lang('contacts-er01');?></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-button-main" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<script>
    someTimeout = 3000;
    window.setTimeout("document.location = '<?=$_SERVER['REQUEST_URI'];?>';", someTimeout);
</script>
<?php } ?>
<?php if(isset($hasError2)) { ?>
<div id="modal" class="mddv2 modal fade">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modaloth modal-body" style="overflow:hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-box">
                    <div class="modal-ttl04"><? echo lang('contacts-er');?></div>
                    <div class="modal-ttl03"><? echo lang('contacts-er02');?></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-button-main" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<script>
    someTimeout = 3000;
    window.setTimeout("document.location = '<?=$_SERVER['REQUEST_URI'];?>';", someTimeout);
</script>
<?php } ?>
<?php if(isset($hasError4)) { ?>
<div id="modal" class="mddv2 modal fade">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modaloth modal-body" style="overflow:hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-box">
                    <div class="modal-ttl04"><? echo lang('contacts-er');?></div>
                    <div class="modal-ttl03"><? echo lang('contacts-er03');?></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-button-main" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<script>
    someTimeout = 3000;
    window.setTimeout("document.location = '<?=$_SERVER['REQUEST_URI'];?>';", someTimeout);
</script>
<?php } ?>
<?php if(isset($hasError5)) { ?>
<div id="modal" class="mddv2 modal fade">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modaloth modal-body" style="overflow:hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-box">
                    <div class="modal-ttl04">Ошибка!!!</div>
                    <div class="modal-ttl03">Вы не ввели номер телефона!</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-button-main" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<script>
    someTimeout = 3000;
    window.setTimeout("document.location = '<?=$_SERVER['REQUEST_URI'];?>';", someTimeout);
</script>
<?php } ?>
<?php if(isset($emailSent) && $emailSent == true) { ?>

<div id="modal" class="mddv2 modal fade">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modaloth modal-body" style="overflow:hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-box">
                    <div class="modal-ttl04">Спасибо!!!</div>
                    <div class="modal-ttl03">Ваше сообщение успешно отправлено! Мы с Вами свяжемся в ближайшее время.</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-button-main" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<script>
    someTimeout = 4000;
    window.setTimeout("document.location = '<?=$_SERVER['REQUEST_URI'];?>';", someTimeout);
</script>
<?php } ?>
<?php if(isset($emailSent2) && $emailSent2 == true) { ?>
<div id="modal" class="mddv2 modal fade">
    <div class="modal-dialog modal-lg modal-dialog-white">
        <div class="modal-content modal-content-white">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modaloth modal-body" style="overflow:hidden">
                <div class="modal-ttl04"><? echo lang('contacts-ok');?></div>
                <div class="modal-ttl03"><? echo lang('contacts-ok01');?></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-button-main" data-dismiss="modal"><? echo lang('bttn-close');?></button>
            </div>
        </div>
    </div>
</div>
<script>
    someTimeout = 4000;
    window.setTimeout("document.location = '<?=$_SERVER['REQUEST_URI'];?>';", someTimeout);
</script>
<?php } ?>
<!--googleon: all--><!--/noindex-->
