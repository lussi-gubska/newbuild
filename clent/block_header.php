<!-- navigation -->
<div class="nav-div">
    <div class="nav-button">
        <button id="trigger-overlay" class="nav-a nav-mnu" type="button"></button>
        <button data-toggle="modal" data-target="#mymodal-form01" class="nav-a nav-phn" type="button"></button>
        <button data-toggle="modal" data-target="#mymodal-form02" class="nav-a nav-eml" type="button"></button>
        <a class="nav-a nav-a-bg nav-face" target="_blank" href="https://www.facebook.com/BuildingExpertGroup/"></a>
        <a class="nav-a nav-a-bg nav-inst" target="_blank" href="https://www.instagram.com/building_expertgroup/"></a>
        <a class="nav-a nav-a-bg nav-yout" target="_blank" href="https://www.youtube.com/channel/UC-njIijzcLjuqWS0pVK5O3A"></a>
        <button class="nav-a nav-bt-top" type="button"  style="display:none;"></button>
		<div class="nav-lang-div" style="display:none;">
            <div class="nav-lang-sep"></div>
            <a class="nav-lang-lnk" href="">RU</a>
            <a class="nav-lang-lnk" href="">EN</a>
        </div>
    </div>
</div>
<div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close">Закрыть</button>
    <nav>
        <div><a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? minf2('nb_pages','code','index',$lngg,'code');?>.php"><? minf2('nb_pages','code','index',$lngg,'menu');?></a></div>
        <div><a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? minf2('nb_pages','code','services',$lngg,'code');?>.php"><? minf2('nb_pages','code','services',$lngg,'menu');?></a></div>
<? navserv($lngg);?>        
        <div><a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? minf2('nb_pages','code','gallery',$lngg,'code');?>.php"><? minf2('nb_pages','code','gallery',$lngg,'menu');?></a></div>
        <div><a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? minf2('nb_pages','code','news',$lngg,'code');?>.php"><? minf2('nb_pages','code','news',$lngg,'menu');?></a></div>
        <div><a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? minf2('nb_pages','code','contacts',$lngg,'code');?>.php"><? minf2('nb_pages','code','contacts',$lngg,'menu');?></a></div>
<? // mnav($lngg);?>
    </nav>
</div>
<!-- navigation END -->