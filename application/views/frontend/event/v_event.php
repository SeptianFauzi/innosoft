<!--=================================
Page
=================================-->
<div class="container">
	<div class="pageContentArea archive-content">
        <main>
            <header>
            	<ul class="breadcrumb">
                	<li><a href="#"><i class="icon-home"></i></a></li>
                    <li><span><?=$caption?></span></li>
                </ul>
            </header>
            
            	<div class="timeline-wrap">

                    <?php
                    foreach ($timeline->result() as $t) {
                    ?>
                    <article>
                        <time><?php echo $t->waktu_events; ?></time>
                        <div class="article_inner clearfix">
                            <figure class="articleVisual">
                                <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $t->img_poster_events ?>" width="570" height="570" alt=""/>
                            </figure>
                            <h1>
                                <a href="<?php echo base_url();?>event/lihat/<?php echo $t->id_events; ?>">
                                    <?php echo $t->judul_events ;?>
                                </a>
                            </h1>
                            <p>
                                kuotanya adalah <?php echo $t->kuota_events ?> orang dan berlokasi di
                                <?php echo $t->lokasi_events ?>.
                            </p>
                            <a class="readMore" href="<?php echo base_url();?>event/lihat/<?php echo $t->id_events ?>">Baca Lebih Banyak...</a>
                        </div>    
                    </article>
                    <?php
                    }
                    ?>
                    
                   
                    <a href="#" class="loadTimeline">Lebih Banyak</a>
                </div><!--timeline-wrap-->
           
        </main><!--main content of current page-->
    </div><!--pageContentArea-->
        
</div><!--container-->
