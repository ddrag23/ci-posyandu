<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foto</li>
        </ol>
    </nav>


    <div class="container background">
        <div class="row baris">
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
            </a>
        </div>
        <div class="row baris">
            <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid rounded">
            </a>
            <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
            </a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>