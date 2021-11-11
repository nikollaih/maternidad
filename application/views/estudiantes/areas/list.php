<div class="page-content">
    <div class="container-fluid">
        <div class="row">
        <?php
            if($areas){
                foreach ($areas as $a){
                    ?>
                        <div class="col-md-3">
                            <div class="card custom-radius">
                                <img width="100%" src="<?= base_url() ?>assets/images/botones/areas/<?= $a["icoarea"] ?>" alt="">
                            </div>
                        </div>
                    <?php
                }
            }
        ?>
        </div>
    </div>
    <!-- container-fluid -->
</div>