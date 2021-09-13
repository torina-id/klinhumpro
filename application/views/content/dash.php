    <section id="profile_banner" aria-label="section" class="text-light"></section>
        
        <div class="container">
                <div class="col-md-12">
                    <div class="d_profile de-flex">
                        <div class="de-flex-col">
                            <div class="profile_avatar">
                                <img src="<?=base_url('assets/images/dash-icon-2.png')?>" alt="">
                                <i class="fa fa-check"></i>
                                <div class="profile_name">
                                    <h4>
                                        DIGITAL ASSET SYSTEM HUMPRO                                                
                                        <span class="profile_username">Konten data foto dan video peliputan dan dokumentasi kegiatan BNN</span>
                                    <span class="profile_username">khususnya Program Pencegahan dan Pemberantasan Penyalahgunaan dan Peredaran Gelap Narkotika (P4GN)</span>
                                        <!-- <button id="btn_copy" title="Copy Text">Copy</button> -->
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="profile_follow de-flex">
                            <!-- <div class="de-flex-col">
                                <div class="profile_follower">500 followers</div>
                            </div> -->
                            <div class="de-flex-col">
                                <a href="https://dash.bnn.go.id" target="_blank" class="btn-main">Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                </div>
        </div>

        <section id="section-collections" class="d_coll no-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="blog-carousel-3" class="owl-carousel">
                        <?php foreach($dash['data'] as $key => $val) { ?>
							<a href=<?=base_url("klin/view/".$val['id'])?>>
                                <div class="nft_coll">
                                    <div class="nft_wrap">
                                        <img src="<?=$val['web_thumbnail']?>" class="lazy img-fluid" alt="">
                                    </div>
                                    <div class="nft_coll_pp">
                                        <img class="lazy" src="<?=base_url('assets/images/dash-icon-3.png')?>" alt="">
                                        <!-- <i class="fa fa-check"></i> -->
                                    </div>
                                    <div class="nft_coll_info">
                                        <h4><?=$val['judul']?></h4>
                                        <span><?=$val['sub_satker']?></span>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
