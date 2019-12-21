<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProjectCategory Entity
 *
 * @property int $id
 * @property string $title
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Project[] $projects
 */
class ProjectCategory extends Entity
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
        'title' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'projects' => true
    ];
}
