<?php
$link = array(
    'controller' => 'projects',
    'action' => 'detail',
    'slug' => $this->Text->slug(mb_strtolower($data['title'])),
    'id' => $data['id']
);
?>
<div class="row project-card">
    <div class="col-md-12">
        <?php
        echo $this->Html->link('<div class="project-image" style="background: url(' . $data['image'] . '); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>',
            $link,
            array(
                'escape' => false,
                'title' => $data['title'],
                'target' => '_blank'
            )
        );
        ?>
    </div>
    <div class="col-md-12">
        <p class="mb-3 mt-3">
        <?php
        echo $this->Html->link($data['title'],
            $link,
            array(
                'class' => 'project-title',
                'escape' => false,
                'title' => $data['title'],
                'target' => '_blank'
            )
        );
        ?>
        </p>
        <p class="mb-2"><?php echo $data['description']; ?></p>
        <p class="pt-0 mt-0">
            <?php
            echo $this->Html->link('
                <button type="button" class="btn btn-outline-light btn-sm project-button">
                    Veja mais <span class="icon-plus pl-1"></span>
                </button>
                ',
                $link,
                array(
                    'escape' => false,
                    'title' => 'Veja mais detalhes',
                    'target' => '_blank'
                )
            );
            ?>
        </p>
    </div>
</div>

<?php //debug($data); ?>

