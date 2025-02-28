<?php

namespace App\Factory;

use App\Entity\Filier;
use App\Repository\FilierRepository;
use Doctrine\ORM\EntityRepository;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Persistence\ProxyRepositoryDecorator;

/**
 * @extends PersistentProxyObjectFactory<Filier>
 *
 * @method        Filier|Proxy create(array|callable $attributes = [])
 * @method static Filier|Proxy createOne(array $attributes = [])
 * @method static Filier|Proxy find(object|array|mixed $criteria)
 * @method static Filier|Proxy findOrCreate(array $attributes)
 * @method static Filier|Proxy first(string $sortedField = 'id')
 * @method static Filier|Proxy last(string $sortedField = 'id')
 * @method static Filier|Proxy random(array $attributes = [])
 * @method static Filier|Proxy randomOrCreate(array $attributes = [])
 * @method static FilierRepository|ProxyRepositoryDecorator repository()
 * @method static Filier[]|Proxy[] all()
 * @method static Filier[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Filier[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Filier[]|Proxy[] findBy(array $attributes)
 * @method static Filier[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Filier[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class FilierFactory extends PersistentProxyObjectFactory{
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
        return Filier::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'nom' => self::faker()->realText(20),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Filier $filier): void {})
        ;
    }
}
