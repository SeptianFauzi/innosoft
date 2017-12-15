
<!--=================================
Page
=================================-->
<div class="container">
    <div class="pageContentArea clearfix">
        <main>
            <article class="single-article clearfix">
                <figure>
                    <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $record['artikel_gambar']?>" width="1300" height="620" class="margin:auto" alt=""/>
                </figure>
                <header>
                    <h1><?php echo $record['artikel_judul'] ?></h1>
                </header>
                <div class="article-inner">
                    <p><?php echo $record['artikel_isi'] ?></p>
                  <time>di tulis : <?php echo $record['artikel_terbit'] ?></time>
                  <p>oleh : Tim Lab Innosoft</p>
                </div>
            </article>

        </main><!--main content of current page-->

    </div><!--pageContentArea-->

</div><!--container-->
