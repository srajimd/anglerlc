<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Publishers Model
 *
 * @method \App\Model\Entity\Publisher newEmptyEntity()
 * @method \App\Model\Entity\Publisher newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Publisher> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Publisher get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Publisher findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Publisher patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Publisher> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Publisher|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Publisher saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Publisher>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Publisher>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Publisher>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Publisher> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Publisher>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Publisher>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Publisher>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Publisher> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PublishersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('publishers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('publisher_name')
            ->maxLength('publisher_name', 50)
            ->requirePresence('publisher_name', 'create')
            ->notEmptyString('publisher_name');

        $validator
            ->scalar('address1')
            ->maxLength('address1', 100)
            ->requirePresence('address1', 'create')
            ->notEmptyString('address1');

        $validator
            ->scalar('address2')
            ->maxLength('address2', 100)
            ->requirePresence('address2', 'create')
            ->notEmptyString('address2');

        $validator
            ->scalar('city')
            ->maxLength('city', 50)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 50)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('pincode')
            ->maxLength('pincode', 50)
            ->requirePresence('pincode', 'create')
            ->notEmptyString('pincode');

        $validator
            ->scalar('status')
            ->notEmptyString('status');

        return $validator;
    }
}
