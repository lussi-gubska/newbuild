        <div class="div01 sldrbg">
            <div class="sldrbg-serv" style="background:url(<? if ($myrow88["photo"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$myrow88['photo']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto-s.jpg";}?>) center center no-repeat; background-size:cover;"></div>
            <div class="sldrdiv">
                <a class="sldrlogo" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/index.php"></a>
                <div class="sldrsep"><span></span></div>
                <div class="sldr-ttl"><span class="sldr-ln01 sldr-ln011"><? echo lang('ipage-h01');?></span></div>
                <h1 class="sldr-ln02"><? echo $myrow88['htitle'];?></h1>
                <div class="sldr-dscr"><? echo $myrow88['hdscr'];?></div>
                <div class="sldr-preim">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 sldr-preim-div">
                        <div class="row sldr-preim-row">
                            <div class="sldr-preim-block">
                                <div class="sldrico"><img class="img-responsive" src="/img/ico-servpreim01.png" alt=""></div>
                                <div class="sldrblock-ttl"><? echo $myrow88['preima'];?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 sldr-preim-div">
                        <div class="row sldr-preim-row">
                            <div class="sldr-preim-block">
                                <div class="sldrico"><img class="img-responsive" src="/img/ico-servpreim02.png" alt=""></div>
                                <div class="sldrblock-ttl"><? echo $myrow88['preimb'];?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 sldr-preim-div">
                        <div class="row sldr-preim-row">
                            <div class="sldr-preim-block">
                                <div class="sldrico"><img class="img-responsive" src="/img/ico-servpreim03.png" alt=""></div>
                                <div class="sldrblock-ttl"><? echo $myrow88['preimc'];?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 sldr-preim-div">
                        <div class="row sldr-preim-row">
                            <div class="sldr-preim-block">
                                <div class="sldrico"><img class="img-responsive" src="/img/ico-servpreim04.png" alt=""></div>
                                <div class="sldrblock-ttl"><? echo $myrow88['preimd'];?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sldr-block-bttn02">
                    <a class="sldr-bttn sldr-bttn-rght" data-toggle="modal" data-target="#mymodal-form01"><? echo lang('main-button03');?></a>
                </div>
                <div class="sldr-block-bttn02" style="display:none;">
                    <a class="sldr-bttn sldr-bttn-mddl sldr-bttn-w2" data-toggle="modal" data-target="#mymodal-form03"><? echo lang('main-button06');?></a>
                </div>
            </div>
        </div>