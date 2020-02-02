<div class="col-md-12 col-xs-12">
    <div class="row mb-5">
        <?php foreach ($projectCategories as $category) : ?>
            <div class="col-md-4 col-xs-12 mb-4">
                <?php echo $this->Html->link('<button type="button" class="btn btn-outline-secondary btn-block text-uppercase btn-project-categories">' . $category['title'] . '</button>',
                    array(
                        'controller' => 'Projects',
                        'action' => 'listByCategory',
                        'slug' => $this->Text->slug(mb_strtolower($category['title'])),
                        'id' => $category['id']
                    ),
                    array('escape' => false, 'title' => "Veja mais {$category['title']}")
                    );
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
