<!-- ================= ESTILOS CSS ======================== -->
<style>
    #mission1 .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active,
    #mission1 .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link:hover
    { border: none;}
    #mission1 .nav-tabs { border: none;}
    #mission1 .select {
        background-color: #fff;
        box-shadow: 2px 2px 12px #00000063;
        position: relative;
        z-index: 2;
        cursor: pointer;
    }
    #mission1 .active.select, #mission1 .select:hover {
        background-color: var(--bg-color1);
        color: #fff !important;
    }
    #mission1 .active.select h1, #mission1 .active.select h2 {
        display: none !important;
        padding: 0px;
    }
    #mission1 .active.select img, #mission1 .select:hover img {filter: invert();}
    #mission1 .select:not(.active) img  {animation: tada 4s infinite; }
    #mission1 .active.select { position: relative;}
    #mission1 .active.select img { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); }
    #mission1 .active.select:after {
        content: '';
        position: absolute;
        height: 30px;
        width: 30px;
        background-color: var(--bg-color1);
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%) rotate(45deg);
        z-index: -1;
    }
    .shadown-box {
        box-shadow: 2px 2px 12px #00000063;
    }
</style>

<!--  ================ CODIGO HTML/PHP =================== -->
<div class="bg-light py-5">
    <div class="container my-5" id="mission1">
        <div class="row">
            <div class="nav nav-tabs justify-content-around col-12 text-center" id="nav-tab" role="tablist">
                <div class="nav-link d-block col-4 col-lg-3 select" href="#nav-mission" id="nav-mission-tab" data-toggle="tab" role="tab" aria-controls="nav-mission" aria-selected="true">
                    <img src='<?php echo ELEMENTS.'/mission'?>.webp' alt='<?php echo $Info->company;?>' class='img-fluid' loading='lazy' width="85" height="85">
                    <h1 class="h3 pt-2 d-none d-xl-block"><?php echo $Info->mission[0];?></h1>
                    <h2 class="h5 pt-2 d-block d-xl-none"><?php echo $Info->mission[0];?></h2>
                </div>
                <div class="nav-link d-block col-4 col-lg-3 active select" href="#nav-why" id="nav-why-tab" data-toggle="tab" role="tab" aria-controls="nav-why" aria-selected="false">
                    <img src='<?php echo ELEMENTS.'/why'?>.webp' alt='<?php echo $Info->company;?>' class='img-fluid' loading='lazy' width="85" height="85">
                    <h1 class="h3 pt-2 d-none d-xl-block"><?php echo $Info->why[0]; ?></h1>
                    <h2 class="h5 pt-2 d-block d-xl-none"><?php echo $Info->why[0]; ?></h2>
                </div>
                <div class="nav-link d-block col-4 col-lg-3 select" href="#nav-vision" id="nav-vision-tab" data-toggle="tab" role="tab" aria-controls="nav-vision" aria-selected="false">
                    <img src='<?php echo ELEMENTS.'/vision'?>.webp' alt='<?php echo $Info->company;?>' class='img-fluid' loading='lazy' width="85" height="85">
                    <h1 class="h3 pt-2 d-none d-xl-block"><?php echo $Info->vision[0]; ?></h1>
                    <h2 class="h5 pt-2 d-block d-xl-none"><?php echo $Info->vision[0]; ?></h2>
                </div>
            </div>
        </div>
        <div class="row my-5 text-center">
            <div class="tab-content col-lg-9 mx-auto" id="nav-tab-content">
                <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                    <h1 class="h3 text-uppercase py-1 text-white bg-color1 mb-0"><?php echo $Info->mission[0]; ?></h1>
                    <p class="p-3 bg-white shadown-box"><?php echo $Info->mission[1];?></p>
                </div>  
                <div class="tab-pane fade show active" id="nav-why" role="tabpanel" aria-labelledby="nav-why-tab">
                    <h1 class="h3 text-uppercase py-1 text-white bg-color1 mb-0"><?php echo $Info->why[0]; ?></h1>
                    <p class="p-3 bg-white shadown-box"><?php echo $Info->why[1];?></p>
                </div>
                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                    <h1 class="h3 text-uppercase py-1 text-white bg-color1 mb-0"><?php echo $Info->vision[0]; ?></h1>
                    <p class="p-3 bg-white shadown-box"><?php echo $Info->vision[1];?></p>
                </div>
            </div>
        </div>
    </div>
</div>
