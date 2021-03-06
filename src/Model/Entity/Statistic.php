<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Statistic Entity.
 *
 * @property int $id
 * @property int $listing_id
 * @property \App\Model\Entity\Listing $listing
 * @property int $type
 * @property float $amount
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Statistic extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
