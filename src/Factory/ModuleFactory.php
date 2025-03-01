<?php

namespace App\Factory;

use App\Entity\Module;
use App\Factory\App\FFactory;
use App\Repository\ModuleRepository;
use Doctrine\ORM\EntityRepository;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Persistence\ProxyRepositoryDecorator;

/**
 * @extends PersistentProxyObjectFactory<Module>
 *
 * @method        Module|Proxy create(array|callable $attributes = [])
 * @method static Module|Proxy createOne(array $attributes = [])
 * @method static Module|Proxy find(object|array|mixed $criteria)
 * @method static Module|Proxy findOrCreate(array $attributes)
 * @method static Module|Proxy first(string $sortedField = 'id')
 * @method static Module|Proxy last(string $sortedField = 'id')
 * @method static Module|Proxy random(array $attributes = [])
 * @method static Module|Proxy randomOrCreate(array $attributes = [])
 * @method static ModuleRepository|ProxyRepositoryDecorator repository()
 * @method static Module[]|Proxy[] all()
 * @method static Module[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Module[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Module[]|Proxy[] findBy(array $attributes)
 * @method static Module[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Module[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ModuleFactory extends PersistentProxyObjectFactory{
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
        return Module::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'ensiegnant' => EnsiegnantFactory::randomElement(EnsiegnantFactory::all()),
            'filier' => FilierFactory::randomOrCreate(),
            'module' => self::faker()->text(60),
            'filier' => SemestreFactory::randomOrCreate(), // TODO add App\Entity\semestre type manually
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Module $module): void {})
        ;
    }
}
