<div class="col-md-12 col-xs-12">
    <div class="row mb-5">
        <?php foreach ($projectCategories as $category) : ?>
            <?php
                foreach ($projects as $project) {
                    if ($project['project_category_id'] == $category['id']) {
                        $images[$category['id']] = ['id' => $project['id'], 'category_id' => $category['id'], 'image' => $project['image']];
                    }
                }
            ?>
        <?php endforeach; ?>
        <?php foreach ($projectCategories as $category) : ?>
            <?php
            $link = array(
                'controller' => 'projects',
                'action' => 'listByCategory',
                'slug' => $this->Text->slug(mb_strtolower($category['title'])),
                'id' => $category['id']
            );
            ?>
            <div class="col-md-4 col-xs-12 mb-4">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $imageBg = '//murayamaengenharia.com.br/webroot/img/projects/capa-thumb-default.jpg';
                        foreach ($images as $image) {
                            if ($image['category_id'] == $category['id']) {
                                $imageBg = '//murayamaengenharia.com.br/webroot/img/projects/' . $image['id'] . '/capa-thumb.jpg';
                                break;
                            }
                        }
                        echo $this->Html->link('<div style="background: url(' . $imageBg . '); background-size: cover; background-repeat: no-repeat; background-position: center center; width: 100%; height: 250px; border-radius: 7px"></div>',
                            $link,
                            array(
                                'escape' => false,
                                'title' => $category['title'],
                            )
                        );
                        ?>
                    </div>
                    <div class="col-md-12">
                        <p class="mb-0 mt-2">
                            <?php
                            echo $this->Html->link($category['title'],
                                $link,
                                array(
                                    'style' => 'font-size: 1.3em; font-weight: 600; color: #3a5784; text-decoration: none; text-transform: uppercase',
                                    'escape' => false,
                                    'title' => $category['title'],
                                )
                            );
                            ?>
                        </p>
                        <p class="pt-0 mt-1">
                            <?php
                            echo $this->Html->link('
                                <button type="button" class="btn btn-outline-light btn-sm" style="color: #717171; border: 1px solid #b9b9b9;">
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
            </div>
        <?php endforeach; ?>
    </div>
</div>
