<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Authors Model
 *
 * @method \App\Model\Entity\Author newEmptyEntity()
 * @method \App\Model\Entity\Author newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Author> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Author get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Author findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Author patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Author> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Author|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Author saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Author>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Author>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Author>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Author> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Author>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Author>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Author>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Author> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AuthorsTable extends Table
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

        $this->setTable('authors');
        $this->setDisplayField('firstname');
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
            ->scalar('firstname')
            ->maxLength('firstname', 50)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 50)
            ->requirePresence('lastname', 'create')
            ->notEmptyString('lastname');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 15)
            ->allowEmptyString('mobile');

        $validator
            ->scalar('status')
            ->notEmptyString('status');

        return $validator;
    }
}
