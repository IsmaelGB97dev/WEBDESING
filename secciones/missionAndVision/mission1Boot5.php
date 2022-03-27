<!-- ================ ESTILOS CSS ============== -->
<style>
    #mission1 .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {border: none;}
    #mission1 .nav-tabs {border:none;}
    #mission1 .active.select, #mission1 .select:hover {
        background-color: var(--color1);
        color: white;
    }
    #mission1 .select {
        color: #000;
        background-color: #fff;
        box-shadow: 2px 2px 9px #00000033;
        position: relative;
        cursor: pointer;
    }
    #mission1 .active.select img, #mission1 .select:hover img {filter: invert();}
    #mission1 .active.select { position: relative; z-index: 10;}
    #mission1 .active.select:after {
        content: '';
        position: absolute;
        height: 30px;
        width: 30px;
        background-color: var(--color1);
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%) rotate(45deg);
        z-index: -1 !important;
    }
    @media (max-width: 576px) {
        #mission1 .active.select:after {
            width: 20px;
            height: 20px;
            bottom: -10px;
        }
    }
    #mission1 .active.select p {display: none !important;}
    #mission1 .active.select img {position: absolute; top:50%; transform: translate(-50%, -50%) scale(120%);}
    #mission1 .select:not(.active) img {animation: tada 4s infinite;}
    #mission1 .box-shadow {
        box-shadow: 2px 2px 9px #00000033;
    }
</style>

<!-- ========= CODIGO HTML/PHP ================== -->
<div class="bg-light">
    <div class="container py-5" id="mission1">
        <div class="row">
            <div class="nav nav-tabs mb-3 justify-content-around p-0" id="nav-tab" role="tablist">
                <div class="col-4 col-md-4 col-lg-3 py-4 text-center nav-link select " id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" role="tab" aria-controls="nav-mission" aria-selected="false">
                    <img class="img-fluid" src="src/img/contenido/mission.png" alt="<?php echo $data->negocio;?>" width="70">
                    <p class="h3 fw-bold my-2 d-none d-md-block">Mission</p>
                    <p class="fw-bold my-2 d-block d-md-none">Mission</p>
                    
                </div>
                <div class="col-4 col-md-4 col-lg-3 py-4 text-center nav-link active select" id="nav-why-tab" data-bs-toggle="tab" data-bs-target="#nav-why" role="tab" aria-controls="nav-why" aria-selected="true">
                    <img class="img-fluid" src="src/img/contenido/why.png" alt="<?php echo $data->negocio;?>" width="70">
                    <p class="h3 fw-bold my-2 d-none d-md-block">Why choose?</p>
                    <p class="fw-bold my-2 d-block d-md-none">Why choose us?</p>
                </div>
                <div class="col-4 col-md-4 col-lg-3 py-4 text-center nav-link select" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" role="tab" aria-controls="nav-vision" aria-selected="true">
                    <img class="img-fluid" src="src/img/contenido/vision.png" alt="<?php echo $data->negocio;?>" width="70">
                    <p class="h3 fw-bold my-2 d-none d-md-block">Vision</p>
                    <p class="fw-bold my-2 d-block d-md-none">Vision</p>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="tab-content" id="nav-tabContent">
                <div class="col-lg-10 mx-auto text-center tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                    <h1 class="text-uppercase h3 fw-bold py-2 bg-color1 text-white m-0">Mission</h1>
                    <p class="p-3 bg-white box-shadow">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore sunt, dolores modi ex facilis dicta, consequuntur praesentium maxime odit ipsa natus sit nemo voluptatibus. Quia quisquam accusamus quod alias pariatur.</p>
                </div>
                <div class="col-lg-10 mx-auto text-center tab-pane fade show active" id="nav-why" role="tabpanel" aria-labelledby="nav-why-tab">
                    <h1 class="text-uppercase h3 fw-bold py-2 bg-color1 text-white m-0">Why choose us?</h1>
                    <p class="p-3 bg-white box-shadow">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore sunt, dolores modi ex facilis dicta, consequuntur praesentium maxime odit ipsa natus sit nemo voluptatibus. Quia quisquam accusamus quod alias pariatur.</p>
                </div>
                <div class="col-lg-10 mx-auto text-center tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                    <h1 class="text-uppercase h3 fw-bold py-2 bg-color1 text-white m-0">Vision</h1>
                    <p class="p-3 bg-white box-shadow">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore sunt, dolores modi ex facilis dicta, consequuntur praesentium maxime odit ipsa natus sit nemo voluptatibus. Quia quisquam accusamus quod alias pariatur.</p>
                </div>
            </div>
        </div>
    </div>
</div>
