<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProjectsUser Entity
 *
 * @property string $project_id
 * @property string $user_id
 * @property int $role
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\User $user
 */
class ProjectsUser extends Entity
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
        'role' => true,
        'project' => true,
        'user' => true
    ];
}