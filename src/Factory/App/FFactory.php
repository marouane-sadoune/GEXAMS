<?php

namespace App\Factory\App;

use App\Entity\Ensiegnant;
use App\Repository\EnsiegnantRepository;
use Doctrine\ORM\EntityRepository;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Persistence\ProxyRepositoryDecorator;

/**
 * @extends PersistentProxyObjectFactory<Ensiegnant>
 *
 * @method        Ensiegnant|Proxy create(array|callable $attributes = [])
 * @method static Ensiegnant|Proxy createOne(array $attributes = [])
 * @method static Ensiegnant|Proxy find(object|array|mixed $criteria)
 * @method static Ensiegnant|Proxy findOrCreate(array $attributes)
 * @method static Ensiegnant|Proxy first(string $sortedField = 'id')
 * @method static Ensiegnant|Proxy last(string $sortedField = 'id')
 * @method static Ensiegnant|Proxy random(array $attributes = [])
 * @method static Ensiegnant|Proxy randomOrCreate(array $attributes = [])
 * @method static EnsiegnantRepository|ProxyRepositoryDecorator repository()
 * @method static Ensiegnant[]|Proxy[] all()
 * @method static Ensiegnant[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Ensiegnant[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Ensiegnant[]|Proxy[] findBy(array $attributes)
 * @method static Ensiegnant[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Ensiegnant[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class FFactory extends PersistentProxyObjectFactory{
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
        return Ensiegnant::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'cin' => self::faker()->text(20),
            'nom' => self::faker()->text(50),
            'prenom' => self::faker()->text(50),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Ensiegnant $ensiegnant): void {})
        ;
    }
}
