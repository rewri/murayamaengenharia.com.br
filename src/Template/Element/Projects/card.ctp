<?php
$link = array(
    'controller' => 'projects',
    'action' => 'view',
    'slug' => $this->Text->slug(mb_strtolower($data['title'])),
    'id' => $data['id']
);
?>
<div class="row project-card">
    <div class="col-md-12">
        <?php if (!empty($data['project_category']['title'])) : ?>
            <p class="mb-1">
                <?php echo $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . $data['project_category']['title'],
                    array(
                        'controller' => 'Projects',
                        'action' => 'listByCategory',
                        'slug' => $this->Text->slug(mb_strtolower($data['project_category']['title'])),
                        'id' => $data['project_category']['id']
                    ),
                    array('escape' => false, 'style' => 'color: #3c5a99', 'title' => "Veja mais {$data['project_category']['title']}")
                    );
                ?>
            </p>
        <?php endif; ?>
        <?php
        echo $this->Html->link('<div class="project-image" style="background: url(//murayamaengenharia.com.br/webroot/img/projects/' . $data['id']  . '/' . $data['image'] . '); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>',
            $link,
            array(
                'escape' => false,
                'title' => $data['title'],
            )
        );
        ?>
    </div>
    <div class="col-md-12">
        <p class="mb-0 mt-3">
        <?php
        echo $this->Html->link($data['title'],
            $link,
            array(
                'class' => 'project-title',
                'escape' => false,
                'title' => $data['title'],
            )
        );
        ?>
        </p>
        <?php if (!empty($data['subtitle'])) : ?>
            <p class="mb-2"><?php echo $data['subtitle']; ?></p>
        <?php endif; ?>
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
                )
            );
            ?>
        </p>
    </div>
</div>
