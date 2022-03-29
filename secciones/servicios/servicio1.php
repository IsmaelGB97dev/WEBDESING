<!-- ============== ESTILOS CSS =============== -->
<style>
.t-services1 .itemx {
    position: relative;
}
.t-services1 .itemx .content p {
    display: none;
}
.t-services1 .itemx img {
    outline: 5px solid #000000ab !important;
}
.t-services1 .itemx .content {
    position: absolute;
    bottom: 0px;
    width: 90%;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    border-radius: 10px 10px 0px 0px;
    background-color: #000000ab;
}
.t-services1 .itemx .content span {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    width: 40px;
    height: 40px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    top: -25px;
    left: 40%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
    background-color: #000000ab;
    border-radius: 50%;
    -webkit-animation: pulse 2s infinite;
            animation: pulse 2s infinite;
}
.t-services1 .itemx:hover .content span {display: none;}
.t-services1 .itemx:hover  img {-webkit-filter: blur(2px);filter: blur(2px);}
.t-services1 .itemx:hover .content p, .t-services1 .itemx:hover .content h1  {
    display: block;
    -webkit-animation: zoomIn 1s;
            animation: zoomIn 1s;
    -webkit-transition: height 4s linear;
    -o-transition: height 4s linear;
    transition: height 4s linear;
}
</style>
<!-- ============== CODIGO HTML/PHP ============== -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row t-services1">
            <?php for($i=1; $i<=3; $i++):?>
            <div class="col-10 col-lg-4 mx-auto mt-3">
                <div class="itemx">
                    <img src='<?php echo SERVICES.'/'.$i;?>.webp' alt='<?php echo $Info->company;?>' class='img-fluid w-100' loading='lazy'>
                    <div class="text-center text-white content pt-3">
                        <span><i class="fas fa-arrow-up"></i></span>
                        <h1 class="h3 d-none d-md-block"><?php echo $Info->getService($i)['title'];?></h1>
                        <h1 class="h4 d-block d-md-none"><?php echo $Info->getService($i)['title'];?></h1>
                        <p class="pt-2"><?php echo $Info->getService($i,12)['content'];?>...</p>
                        <p class="my-4"><a class="font-weight-bold bg-color2 p-2 border text-white" href="<?php echo $Info->getTextItems()['tab_services']; ?>#service-<?php echo $i; ?>">Read More</a></p>
                    </div>
                </div>
            </div>
            <?php endfor;?>
        </div>
    </div>
</div>