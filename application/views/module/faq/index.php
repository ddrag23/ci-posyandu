<!-- breadcrumb start -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
    </ol>
</nav>
<!-- breadcrumb end -->
<!-- Accordion start -->
<div class="row">
    <div class="col-md-6">
        <div id="accordion">
            <div class="card shadow">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Frequently Ask Question
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Tentang Kami
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vel repellat voluptates esse dolorum assumenda libero blanditiis, iusto quam molestiae provident amet, atque officiis cum a voluptatum illum obcaecati saepe?</p>
                        <a href="https://wa.me/628561333111" class="btn btn-success"><i class="fab fa-whatsapp"></i>&nbsp;&nbsp; Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Versi Aplikasi
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Accordion end -->
    <!-- contact us star -->
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h5 class="font-weight-bold text-primary">Kontak Kami</h5>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip01">First name</label>
                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip01">Last name</label>
                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip01">Username</label>
                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip01">Telepon</label>
                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">

                            <button type="submit" class="btn btn-primary float-right" style="display:inline-block;">Kirim <i class="far fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- contact us end -->

</div>