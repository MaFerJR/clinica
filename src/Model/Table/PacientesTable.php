<?php
namespace App\Model\Table;

use App\Model\Entity\Paciente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pacientes Model
 *
 */
class PacientesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('pacientes');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')            ->allowEmpty('id', 'create');
        $validator
            ->requirePresence('nombre', 'create')            ->notEmpty('nombre');
        $validator
            ->requirePresence('apellidoPaterno', 'create')            ->notEmpty('apellidoPaterno');
        $validator
            ->requirePresence('apellidoMaterno', 'create')            ->notEmpty('apellidoMaterno');
        $validator
            ->integer('edad')            ->requirePresence('edad', 'create')            ->notEmpty('edad');
        $validator
            ->requirePresence('uuid', 'create')            ->notEmpty('uuid');
        return $validator;
    }
}
