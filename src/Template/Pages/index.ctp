<?php
echo $this->Html->css('home', array('block' => 'cssTop'));
echo $this->element('Default/topbar');
echo $this->element('Default/navbar');
echo $this->element('Home/carousel');
echo $this->element('Home/about');
echo $this->element('Home/services');
echo $this->element('Home/project_types');
echo $this->element('Default/numbers');
if (!empty($projects)) {
    echo $this->element('Home/projects');
}
echo $this->element('Home/budget');
if (!empty($testimonials)) {
    echo $this->element('Home/testimonials');
}
echo $this->element('Home/video');
if (!empty($contributors) && !$this->request->is('mobile')) {
    echo $this->element('Home/contributors');
}
echo $this->element('Default/footer');
?>
<div id="whatsButton"></div>
