<?="HELLO"?>


<?php
$detil = $detail['data'];

foreach($detil as $key=>$value){
    $p = explode(',', $value['nama_petugas']);
    $tgl = substr($value['tanggal'], -2);
    $bln = $this->api_data->bulan(substr($value['tanggal'],5,2));
?>
<div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <section id="subheader" class="text-light" style="background: url(<?=base_url('assets/images/background/subheader.jpg')?>) center top / cover;">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1><?=$value['judul']?></h1>
									<p><?=$value['detil']?></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>

            <section aria-label="section">
                <div class="container">
					<div id="gallery" class="row">

                    <?php foreach($value['aset'] as $key => $aset) { ?>
                        <div class="col-md-3 mb30 item">
							<div class="de-image-hover rounded">
								<a href="<?=$aset['file']?>" class="image-popup">								
									<!-- <span class="dih-title-wrap">
										<span class="dih-title">{{detil[0].judul}}</span>
									</span> -->
									<span class="dih-overlay"></span>
									<img src="<?=$aset['thumbnail']?>" class="lazy" alt="">
								</a>
							</div>
						</div>
                    <?php } ?>


                    </div>
                </div>
            </section>

        <!-- <div v-for="aset in giats" :key="aset.id_metadata" style="display:flex;">
            <a :href="aset.file"><img :src="aset.thumbnail"></a>
        </div> -->

        </div>
        <?php
} ?>