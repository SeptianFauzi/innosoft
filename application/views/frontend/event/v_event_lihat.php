
<!--=================================
Page
=================================-->
<div class="container">
    <div class="pageContentArea clearfix">
        <main>
            <article class="single-article clearfix">
                <figure>
                    <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $record['img_poster_events']?>" width="1300" height="867" alt=""/>
                </figure>
                <header>
                    <h1><?php echo $record['judul_events'] ?></h1>
                </header>
                <div class="article-inner">
                    <p>Status : <?php echo $record['artikel_status'] ?></p>
                    <p>Kegiatan : <?php echo $record['desc_kategori_kegiatan'] ?></p>
                    <p>Grade : <?php echo $record['grade_events'] ?></p>
                    <p>Pemateri : <?php echo $record['id_pemateri'] ?></p>
                    <p>Waktu : <?php echo $record['waktu_events'] ?></p>
                    <p>Kuota Maksimal : <?php echo $record['kuota_max_events'] ?></p>
                    <p>Lokasi : <?php echo $record['lokasi_events'] ?></p>
                    <p>Software : <?php echo $record['software_events'] ?></p>
                    <p>Deskripsi : <?php echo $record['desc_events'] ?></p>
                  <p>oleh : Tim Lab Innosoft</p>
                </div>
            </article>

        </main><!--main content of current page-->

    </div><!--pageContentArea-->

</div><!--container-->
