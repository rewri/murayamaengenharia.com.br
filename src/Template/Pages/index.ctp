<?php
echo $this->element('Home/carousel');
echo $this->element('Home/about');
echo $this->element('Home/services');
if (!empty($projects)) {
    echo $this->element('Home/projects');
}
echo $this->element('Home/project_types');
echo $this->element('Default/numbers');
echo $this->element('Home/budget');
if (!empty($testimonials)) {
    echo $this->element('Home/testimonials');
}
echo $this->element('Home/video');
if (!empty($contributors)) {
    echo $this->element('Home/contributors');
}
echo $this->element('Default/contact');
?>
