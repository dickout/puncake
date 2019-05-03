<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Image extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => true,
        'name' => true
    ];
}