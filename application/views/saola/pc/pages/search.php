<section class="contact">
    <div class="container pl-0 pr-0">
        <!--        <div class="title-section"><h2>Kết quả tìm kiếm</h2></div>-->

<!--        --><?php //$this->load->view($this->_template_f . 'home/form_search') ?>

        <div class="col-xs-12  left12 catland_page" style="margin-bottom: 100px;">

            <!--Begin land_box-->
            <div class="_box">
                <div class="box-module mt-2">
                    <div class="bg-modul">Kết quả tìm kiếm</div>
                </div>

                <div class="listland_box pt_hotLand_home row12">

                    <?php foreach ($lstSearch as $key => $value) { ?>

                        <div class="col-md-4 col-sm-6 col-xs-12 top2 item_ads _hot dcccccc" onclick="updateView('<?php echo $value->id; ?>');" style="padding-right: 1rem !important;padding-top: 1rem !important;max-height: 259px;">

                            <div class="vip5">
                                <div class="product-thumb">
                                    <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                        <img style="width: 272px; height: 170px;" src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="<?php echo $value->title ?>" noloaderror="true" imgerr="3">
                                    </a>
                                </div>
                                <div class="home-product-bound">
                                    <div class="p-title" style="height: 44px;">
                                        <a title="<?php echo $value->title ?>" href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                            <?php echo $value->title ?>***</a>
                                    </div>
                                    <div class="product-price p-2"><?php echo $value->price ?></div>
                                    <div class="product-info p-2">
                                        <i class="mdi mdi-select mdi-24px" style="color: #e40b00"></i>

                                        <?php echo $value->acreage != '' ? $value->acreage : 0 ?> m²
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

                    <div class="clearfix"></div>

                </div>
            </div>
            <!--End detail_land-->

        </div>

    </div>

</section>

<style>
    .code_row {
        background: rgba(255, 255, 255, .8);
        position: absolute;
        top: 5px;
        right: 5px;
        font-size: 11px;
        line-height: 18px;
        padding: 0 5px;
        font-weight: 600;
    }

    .pt_hotLand_home .item > a {
        display: block;
        height: 170px;
        background: #ddd;
    }

    .pt_hotLand_home .item > a img {
        width: 100%;
        height: 100%;
    }

    .pt_hotLand_home .item h3 {
        height: 40px;
        overflow: hidden;
        margin: 10px 0;
    }

    .pt_hotLand_home .item h3 a {
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        line-height: 20px;
        color: #000;
    }

    .pt_hotLand_home .item > p {
        line-height: 18px;
        height: 72px;
        overflow: hidden;
    }

    .pt_hotLand_home .item .area {
        font-weight: 600;
        font-size: 12px;
        margin: 10px 0;
    }

    .pt_hotLand_home .item {
        /*width: 19%;*/
        /*margin-right: 1.25%;*/
        margin-bottom: 20px;
        position: relative;
        border: 2px solid #eee;
        padding: 5px;
    }
</style>