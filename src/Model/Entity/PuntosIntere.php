<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PuntosIntere Entity
 *
 * @property int $idpuntos_interes
 * @property int $localidad
 * @property int $id_punto
 * @property string|null $description
 * @property string|null $resumen
 * @property string $name
 * @property string $name_localidad
 * @property int|null $categorias_idcategorias
 * @property int|null $tipo_idtipo
 * @property int|null $subtipo_idsubtipo
 * @property string|null $photo
 * @property string|null $folder
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Tipo $tipo
 * @property \App\Model\Entity\Subtipo $subtipo
 */
class PuntosIntere extends Entity
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
        'localidad' => true,
        'id_punto' => true,
        'description' => true,
        'resumen' => true,
        'name' => true,
        'name_localidad' => true,
        'categorias_idcategorias' => true,
        'tipo_idtipo' => true,
        'subtipo_idsubtipo' => true,
        'photo' => true,
        'folder' => true,
        'categoria' => true,
        'tipo' => true,
        'subtipo' => true,
    ];
}
