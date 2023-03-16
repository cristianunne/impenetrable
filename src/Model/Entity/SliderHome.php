<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SliderHome Entity
 *
 * @property int $idslider_home
 * @property string $photo
 * @property string $photo_dir
 * @property string $titulo
 * @property string $descripcion
 * @property bool $is_show
 */
class SliderHome extends Entity
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
        'photo' => true,
        'photo_dir' => true,
        'titulo' => true,
        'descripcion' => true,
        'is_show' => true,
    ];
}
