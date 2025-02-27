<?php

namespace App\Factory;

use App\Entity\Etudiants;
use App\Repository\EtudiantsRepository;
use Doctrine\ORM\EntityRepository;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Persistence\ProxyRepositoryDecorator;

/**
 * @extends PersistentProxyObjectFactory<Etudiants>
 *
 * @method        Etudiants|Proxy create(array|callable $attributes = [])
 * @method static Etudiants|Proxy createOne(array $attributes = [])
 * @method static Etudiants|Proxy find(object|array|mixed $criteria)
 * @method static Etudiants|Proxy findOrCreate(array $attributes)
 * @method static Etudiants|Proxy first(string $sortedField = 'id')
 * @method static Etudiants|Proxy last(string $sortedField = 'id')
 * @method static Etudiants|Proxy random(array $attributes = [])
 * @method static Etudiants|Proxy randomOrCreate(array $attributes = [])
 * @method static EtudiantsRepository|ProxyRepositoryDecorator repository()
 * @method static Etudiants[]|Proxy[] all()
 * @method static Etudiants[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Etudiants[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Etudiants[]|Proxy[] findBy(array $attributes)
 * @method static Etudiants[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Etudiants[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class UserFactory extends PersistentProxyObjectFactory{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Etudiants::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'email' => 'admin@SupMTI.ma',
            'roles' => ['ROLE_ADMIN'],
            'password' => '$2y$13$w7usfxJhm1MP8qjT8TDNzOq.UuYWFuZszfwqX/agMwG8JeqWgacZ.',
            'username' => 'Admin',
        ]; 
    }
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Etudiants $etudiants): void {})
        ;
    }
}
