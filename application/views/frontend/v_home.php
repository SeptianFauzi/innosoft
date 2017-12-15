<!--=================================
Slider Area
=================================-->
<section class="xv-owl-slider default">
	<div class="container">
    	<div class="xv-owl-wrap">
        <?php
        foreach ($slider->result() as $slider) {
        ?>
            <figure>
                <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $slider->artikel_gambar; ?>" alt="" width="1200" height="570"/>
                <figcaption><h1><a href="<?php echo base_url(); ?>artikel_lihat/lihat/<?php echo $slider->artikel_slug; ?>"><?php echo $slider->artikel_isi_ringkas; ?></a></h1>
                <span class="cat"><?php echo $slider->artikel_katagori; ?></span></figcaption>
            </figure>
        <?php
        }
        ?>
        </div>
    </div>
</section>

<!--=================================
Page
=================================-->

<div class="mainWrapper">
    <div class="container">
	   <div class="pageContentArea clearfix">
            <main>
                <h2 class="mb-20">Berita Disematkan</h2>

                <h5 class="mb-20">Aktifitas RPL</h5>

                <article>
                    <figure>
                        <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $sematrpl['artikel_gambar'];?>" width="720" height="420" alt=""/>
                    </figure>
                    <header>
                        <h1><a href="artikel_lihat/lihat/<?php echo $sematrpl['artikel_slug'];?>"><?php echo $sematrpl['artikel_judul'];?> </a></h1>
                        <time><?php echo $sematrpl['artikel_terbit'];?></time>
                    </header>
                    <p><?php echo $sematrpl['artikel_isi_ringkas'];?></p>
                </article>

                <h5 class="mb-20">Aktifitas TI</h5>

                <article>
                    <figure>
                        <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $sematti['artikel_gambar'];?>" width="420" height="420" alt=""/>
                    </figure>
                    <header>
                        <h1><a href="artikel_lihat/lihat/<?php echo $sematti['artikel_slug'];?>"><?php echo $sematti['artikel_judul'];?> </a></h1>
                        <time><?php echo $sematti['artikel_terbit'];?></time>
                    </header>
                    <p><?php echo $sematti['artikel_isi_ringkas'];?></p>
                </article>

                <h5 class="mb-20">Aktifitas UIKA</h5>

                <article>
                    <figure>
                        <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $sematuika['artikel_gambar'];?>" width="420" height="420" alt=""/>
                    </figure>
                    <header>
                        <h1><a href="artikel_lihat/lihat/<?php echo $sematuika['artikel_slug'];?>"><?php echo $sematuika['artikel_judul'];?> </a></h1>
                        <time><?php echo $sematuika['artikel_terbit'];?></time>
                    </header>
                    <p><?php echo $sematuika['artikel_isi_ringkas'];?></p>
                </article>

                <h5 class="mb-20">Aktifitas Event</h5>

                <article>
                    <figure>
                        <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $sematevent['artikel_gambar'];?>" width="420" height="420" alt=""/>
                    </figure>
                    <header>
                        <h1><a href="artikel_lihat/lihat/<?php echo $sematevent['artikel_slug'];?>"><?php echo $sematevent['artikel_judul'];?> </a></h1>
                        <time><?php echo $sematevent['artikel_terbit'];?></time>
                    </header>
                    <p><?php echo $sematevent['artikel_isi_ringkas'];?></p>
                </article>


            </main><!--main content of current page-->

            <aside class="sidebar">
                <header>
                    <h3>Yang Baru!</h3>
                    <time><?php echo date('jS F Y'); ?></time>
                </header>
                <div class="widget widget_timeline">
                    <div class="timeline-wrap">

                        <?php
                        foreach ($timeline->result() as $t) {
                            ?>
                            <article>
                            <figure>
                                <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $t->artikel_gambar ?>" width="420" height="320" alt=""/>
                            </figure>
                            <header>
                                <h3><a href="<?php echo base_url();?>/artikel_lihat/lihat/<?php echo $t->artikel_slug; ?>"><?php echo $t->artikel_judul ;?></a></h3>
                                <time><?php echo $t->artikel_terbit ?></time>
                            </header>
                            <p><?php echo $t->artikel_isi_ringkas ?></p>
                        </article>
                        <?php
                        }
                        ?>

                        <a href="<?php echo base_url(); ?>Aktifitas" class="loadTimeline">Kunjungi timeline</a>
                    </div><!--timeline-wrap-->
                </div>
            </aside><!--sidebar-->
        </div><!--pageContentArea-->
    </div>
</div>
</div><!--container-->
