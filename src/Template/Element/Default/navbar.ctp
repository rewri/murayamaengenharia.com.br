<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <?php echo $this->Html->link(
        $this->Html->image('murayama_logo.svg', array('class' => 'main-logo', 'alt' => 'Logo Murayama Engenharia', 'title' => 'Murayama Engenharia')),
        array(
            'plugin' => null,
            'controller' => 'Pages',
            'action' => 'index'
        ),
        array(
            'class' => 'navbar-brand',
            'escape' => false
        )
    ); ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
                <?php echo $this->Html->link(
                    '<i class="fas fa-home"></i> <span class="d-sm-none pl-1"> Home</span> <span class="sr-only">(current)</span>',
                    'javascript:;',
                    array(
                        'class' => 'nav-link',
                        'escape' => false,
                        'id' => 'navbar-home'
                    )
                ); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link(
                    'Quem somos',
                    'javascript:;',
                    array(
                        'class' => 'nav-link',
                        'escape' => false,
                        'id' => 'navbar-who'
                    )
                ); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link(
                    'Projetos',
                    'javascript:;',
                    array(
                        'class' => 'nav-link',
                        'escape' => false,
                        'id' => 'navbar-projects'
                    )
                ); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link(
                    'Orçamentos',
                    'javascript:;',
                    array(
                        'class' => 'nav-link',
                        'escape' => false,
                        'id' => 'navbar-budget'
                    )
                ); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link(
                    'Equipe',
                    'javascript:;',
                    array(
                        'class' => 'nav-link',
                        'escape' => false,
                        'id' => 'navbar-contributors'
                    )
                ); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link(
                    'Contato',
                    array(
                        'plugin' => null,
                        'controller' => 'pages',
                        'action' => 'contact'
                    ),
                    array(
                        'class' => 'nav-link',
                        'escape' => false
                    )
                ); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link(
                    'Trabalhe conosco',
                    array(
                        'plugin' => null,
                        'controller' => 'pages',
                        'action' => 'contact'
                    ),
                    array(
                        'class' => 'nav-link',
                        'escape' => false
                    )
                ); ?>
            </li>
        </ul>
    </div>
</nav>
