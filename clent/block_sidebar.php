        <div class="div06">
            <div class="cont-row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cont-div">
                    <div class="cont-block">
                        <div class="cont-ttl"><? echo lang('sidebar-ttl');?></div>
                        <div class="cont-dscr"><? echo lang('sidebar-dscr');?></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cont-div">
                    <div class="cont-block">
                        <div class="cont-ttl"><? echo lang('sidebar-cont');?></div>
                        <div class="cont-mn cont-padding">
                            <div class="cont-ico"><img src="/img/ico-cont01.png" alt=""></div><? minf2('nb_contacts','lcode',1111,'ru','phn');?>
                        </div>
                        <div class="cont-mn02 cont-padding"><b style="color:red; font:bold 20px/20px Arial;">МАТЕРИАЛЫ НЕ ПРЕДЛАГАТЬ</b></div>
                        <div class="cont-mn cont-padding">
                            <div class="cont-ico"><img src="/img/ico-cont02.png" alt=""></div><? minf2('nb_contacts','lcode',1111,'ru','eml');?>
                        </div>
                        <div class="cont-mn cont-padding">
                            <div class="cont-ico"><img src="/img/ico-cont03.png" alt=""></div><? minf2('nb_contacts','lcode',1111,$lngg,'adr');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont-map">
                <? minf2('nb_contacts','lcode',1111,'ru','map');?>
            </div>
        </div>
