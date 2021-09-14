        
    </div>


    
<!-- Javascript Files
================================================== -->
<script src="<?=base_url('assets/plugins/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/wow.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery.isotope.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/easing.js')?>"></script>
<script src="<?=base_url('assets/plugins/owl.carousel.js')?>"></script>
<script src="<?=base_url('assets/plugins/validation.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/enquire.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery.plugin.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery.countTo.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery.countdown.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery.lazy.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jquery.lazy.plugins.min.js')?>"></script>

<script language="javascript">
 //tambahan coding sebelum assets/plugins/designesia.js

 
                $.get("<?php echo DASH_URL."rows/12";?>", "",  function(response) {
                   
                    result=response;
                        if(result.success==true)
                        {
                            var tmp='';
                           
                            Object.keys(result.data).forEach(item => {

                                id=result.data[item].id;
                                web_thumbnail=result.data[item].web_thumbnail; 
                                judul=result.data[item].judul; 
                                sub_satker=result.data[item].sub_satker; 
                                         tmp+='<a href="<?=base_url("klin/view/");?>'+id+'">'+
                                        '<div class="nft_coll">'+
                                            '<div class="nft_wrap">'+
                                                '<img src="'+web_thumbnail+'" class="lazy img-fluid" alt="">'+
                                            '</div>'+
                                            '<div class="nft_coll_pp">'+
                                                '<img class="lazy" src="<?=base_url('assets/images/dash-icon-3.png')?>" alt="">'+ 
                                            '</div>'+
                                            '<div class="nft_coll_info">'+
                                                '<h4>'+judul+'</h4>'+
                                                '<span>'+sub_satker+'</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</a>';

                                    

                                

                            });
                            tmp='<div id="blog-carousel-4" class="owl-carousel">'+tmp+'</div>';
                    
                      
                           $("#js_view_4").html(tmp);
                             
                        
                        }
                       
                    }
                )


               
 
</script>

<script src="<?=base_url('assets/plugins/designesia.js')?>"></script>



<script src="<?=base_url('assets/plugins/particles.js')?>"></script>
<script src="<?=base_url('assets/plugins/particles-settings-2.js')?>"></script>



</body>

</html>




        