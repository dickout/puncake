<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Option extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => true,
        'name' => true
    ];
}