<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property int $project_category_id
 * @property string $title
 * @property string $subtitle
 * @property string|null $description
 * @property string $image
 * @property \Cake\I18n\FrozenDate $date
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProjectCategory $project_category
 * @property \App\Model\Entity\ProjectImage[] $project_images
 */
class Project extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'project_category_id' => true,
        'title' => true,
        'subtitle' => true,
        'description' => true,
        'image' => true,
        'date' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'project_category' => true,
        'project_images' => true
    ];
}
