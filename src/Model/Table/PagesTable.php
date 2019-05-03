<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PagesTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('slug', 'A slug is required');
    }

}