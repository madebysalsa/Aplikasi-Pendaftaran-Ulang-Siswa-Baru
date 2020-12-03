 <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Video Pelepasan Tahfidz Qur'an ke Istanbul, Turki 2019. </p>
                    
                    <video width="320" height="240" controls autoplay>
                    <source src="<?= base_url()?>assets/videos/uicci1.mp4" type="video/mp4">
                    </video>
                    <video width="320" height="240" controls autoplay>
                    <source src="<?= base_url()?>assets/videos/uicci2.mp4" type="video/mp4">
                    </video>
                    
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
			<?php foreach($gambar as $g) : ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="<?= base_url()?>upload/img/<?= $g['gambar']?>" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							
						</div>
						<div class="blog-title">
							<h2><a href="#" title=""> <?= $g['kategori']?> </a></h2>
						</div>
						<div class="blog-desc">
							<p><?= $g['keterangan']?> </p>
						</div>
					</div>
                </div>
				<?php endforeach;?><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
