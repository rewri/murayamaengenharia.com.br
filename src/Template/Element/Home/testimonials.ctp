<div class="container" id="testimonials">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center" >
            <h2 class="area-title pb-0">Depoimentos</h2>
            <p class="area-subtitle">Transparência, honestidade, competitividade e inovação</p>
        </div>
    </div>
    <div class="row">
        <?php foreach ($testimonials as $row) : ?>
        <div class="col-md-4 col-xs-12 text-center">
            <div class="card p-3">
                <div class="card-body">
                    <p>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                    </p>
                    <p class="pb-2 m-0 name"><?php echo $row['name']; ?></p>
                    <p class="card-text text-left">
                        <span class="fa fa-quote-left pr-1 quote"></span>
                            <?php echo $row['description']; ?>
                        <span class="fa fa-quote-right pl-1 quote"></span>
                    </p>

                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
