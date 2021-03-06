<section class="news pt-0">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <div class="row">
                <div class="box-module">
                    <div class="bg-modul">Bất động sản nổi bật</div>
                </div>

                <?php foreach ($ads_center as $key => $value) { ?>

                    <div class="col-md-3 col-sm-6 col-xs-12 top2 item_ads _hot" onclick="updateView('<?php echo $value->id; ?>');" style="padding-right: 1rem !important;padding-top: 1rem !important;">

                        <div class="vip5">
                            <div class="product-thumb">
                                <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                    <img src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="<?php echo $value->title ?>" noloaderror="true" imgerr="3">
                                </a>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title" style="height: 65px;">
                                    <a title="<?php echo $value->title ?>" href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                        <?php echo $value->title ?>***</a>
                                </div>
                                <div class="product-price p-2"><?php echo $value->price ?></div>
                                <div class="product-info p-2">
                                    <i class="mdi mdi-select mdi-24px" style="color: #e40b00"></i>

                                    <?php echo $value->useacreage != '' ? $value->useacreage : 0 ?> m²
                                </div>
                                <div class="product-info">
                                    <i class="mdi mdi-map-marker mdi-24px" style="color: #e40b00"></i>
                                    <a href="javascript:void()" title="<?php echo $value->title ?>">
                                        <?php echo $value->district_name != '' ? $value->district_name : 'update...'; ?>
                                    </a>,
                                    <a href="javascript:void()" title="<?php echo $value->title ?>">
                                        <?php echo $value->province_name != '' ? $value->province_name : 'update...'; ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>
    </div>
</section>

<style>
    .product-thumb img {
        width: 257px;
        height: 147px;
        border-radius: 5px 5px 0 0;
    }

    .home-product-bound .product-price {
        font-weight: 700;
        font-size: 18px;
        line-height: 25px;
        color: #055699;
    }

    .product-info {
        font-size: 14px;
        line-height: 26px;
        color: #777;
    }

    .home-product-bound .product-info a {
        font-weight: normal;
        font-size: 14px;
        color: #777;
    }

    /*.home-product-bound a {*/
    /*    font-weight: 700;*/
    /*    font-size: 16px;*/
    /*    line-height: 22px;*/
    /*    color: #2D373F;*/
    /*    margin-bottom: 7px;*/
    /*    text-transform: inherit;*/
    /*}*/

    /*.home-product-bound .p-title {*/
    /*    height: 65px;*/
    /*    overflow: hidden;*/
    /*}*/

    /*.home-product-bound .product-info a {*/
    /*    font-weight: normal;*/
    /*    font-size: 14px;*/
    /*    color: #777;*/
    /*}*/
</style>