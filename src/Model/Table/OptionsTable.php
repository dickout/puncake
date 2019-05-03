<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class TemplatesTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('name', 'A name is required');
    }

}