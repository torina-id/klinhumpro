<section>
            <div class="container">
                    <div class="col-md-12">
                        <div class="d_profile de-flex">
                            <div class="de-flex-col">
                                <div class="profile_avatar">
                                    <img src="<?=base_url('assets/images/debes-icon.png')?>" alt="">
                                    <i class="fa fa-check"></i>
                                    <div class="profile_name">
                                        <h4>
                                            KONTEN DESA BERSINAR                                                
                                            <span class="profile_username">Konten tematik program desa bersinar yang disiapkan untuk didesiminasikan</span>
                                            <span class="profile_username">melalui media sosial dan media online, baik milik lembaga (BNN) maupun</span>
                                            <span class="profile_username">sinergi dengan stake holder lainnya.</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="profile_follow de-flex">
                                <!-- <div class="de-flex-col">
                                    <div class="profile_follower">500 followers</div>
                                </div> -->
                                <div class="de-flex-col">
                                    <a href="https://perpustakaan.bnn.go.id/id/view-bersinar" target="_blank" class="btn-main">Selengkapnya</a>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        <!-- <section id="section-nfts"> -->
            <div class="container">
                <!-- <div class="row wow fadeIn">                        
                    <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12" v-for="giat in datasource" :key="giat.id">
                        <nuxt-link :to="{path: `/dash/${giat.id}`, params:{judul: giat.judul}}" prefetch><debes-card :giat="giat" /></nuxt-link>
                    </div> 
                    <div class="col-md-12 text-center">
                        <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                    </div>      
                </div> -->
                    <div class="row wow fadeIn">                        
                        <!-- nft item begin -->
                        <?php foreach($debes as $key => $val) { ?>
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item">
                                <div class="author_list_pp">
                                        <img class="lazy" src="<?=base_url('assets/images/debes-icon-2.png')?>" alt="">
                                </div>
                                <div class="nft__item_wrap">
                                        <img src="<?=$val['uri']?>" class="lazy " alt="">
                                </div>
                                <div class="nft__item_info">
                                    <a href="<?=$val['view_node']?>" target="_blank">
                                        <h4><?=$val['title']?></h4>
                                    </a>
                                    <!-- <div class="nft__item_price">SUB JUDUL
                                    </div> -->
                                </div> 
                            </div>
                        </div>                 
                        <?php } ?>


                        <div class="col-md-12 text-center">
                            <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                        </div>                                              
                    </div>
            </div>
        <!-- </section> -->
    </section>