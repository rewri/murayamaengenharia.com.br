<div class="container" id="testimonials">
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
                    <p class="card-text text-left">
                        <span class="fa fa-quote-left pr-1 quote"></span>
                            <?php echo $row['description']; ?>
                        <span class="fa fa-quote-right pl-1 quote"></span>
                    </p>
                    <p class="p-0 m-0 name"><?php echo $row['name']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
