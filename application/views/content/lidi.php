        <!-- <section id="profile_banner" aria-label="section" class="text-light" data-bgcolor="#F7F4FD"></section> -->
        <section data-bgcolor="#F7F4FD">
        <div class="container">
                <div class="col-md-12">
                    <div class="d_profile de-flex">
                        <div class="de-flex-col">
                            <div class="profile_avatar">
                                <img src="<?=base_url('assets/images/lidi-icon.png')?>" alt="">
                                <i class="fa fa-check"></i>
                                <div class="profile_name">
                                    <h4>
                                        LITERASI DIGITAL                                                
                                        <span class="profile_username">Konten Literasi Digital tematik desa bersinar yang berisi literasi</span>
                                        <span class="profile_username">dan konten dengan muatan tematik Desa Bersinar yang memberikan</span>
                                        <span class="profile_username">informasi lebih detail mengenai program desa bersinar</span>
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
                                <a href="https://perpustakaan.bnn.go.id/id/library" target="_blank" class="btn-main">Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        </section>
        <section id="section-collections" data-bgcolor="#F7F4FD" class="d_coll no-top">
            <div class="container">
                <div class="row">
                    <div id="collection-carousel" class="owl-carousel">
                        <?php foreach($lidi as $key => $val) { ?>

                            <div class="nft_coll">
                                <div class="nft_wrap">
                                        <a href="<?=$val['view_node']?>"><img src="<?=$val['uri']?>" class="lazy img-fluid" alt=""></a>
                                    </div>
                                    <div class="nft_coll_pp">
                                        <a href=""><img class="lazy" src="<?=base_url('assets/images/lidi-icon-2.png')?>" alt=""></a>
                                        <!-- <i class="fa fa-check"></i> -->
                                    </div>
                                    <div class="nft_coll_info">
                                        <a :href="<?=$val['view_node']?>"><h4><?=$val['title']?></h4></a>
                                        <!-- <span>SUB JUDUL</span> -->
                                    </div>
                            </div>
                        
                            <?php } ?>
                    </div>
                </div>
            </div>
        </section>
