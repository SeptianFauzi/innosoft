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
                        <time><?php echo $t->artikel_terbit; ?></time>
                        <div class="article_inner clearfix">
                            <figure class="articleVisual">
                                <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $t->artikel_gambar ?>" width="570" height="570" alt=""/>
                            </figure>
                            <h1>
                                <a href="<?php echo base_url();?>artikel_lihat/lihat/<?php echo $t->artikel_slug; ?>">
                                    <?php echo $t->artikel_judul ;?>
                                </a>
                            </h1>
                            <p>
                                <?php echo $t->artikel_isi_ringkas ?>
                            </p>
                            <a class="readMore" href="<?php echo base_url();?>artikel_lihat/lihat/<?php echo $t->artikel_slug; ?>">Baca Lebih Banyak...</a>
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
