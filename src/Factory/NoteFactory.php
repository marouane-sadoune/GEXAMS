<?php

namespace App\Factory;

use App\Entity\Note;
use App\Repository\NoteRepository;
use Doctrine\ORM\EntityRepository;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Persistence\ProxyRepositoryDecorator;

/**
 * @extends PersistentProxyObjectFactory<Note>
 *
 * @method        Note|Proxy create(array|callable $attributes = [])
 * @method static Note|Proxy createOne(array $attributes = [])
 * @method static Note|Proxy find(object|array|mixed $criteria)
 * @method static Note|Proxy findOrCreate(array $attributes)
 * @method static Note|Proxy first(string $sortedField = 'id')
 * @method static Note|Proxy last(string $sortedField = 'id')
 * @method static Note|Proxy random(array $attributes = [])
 * @method static Note|Proxy randomOrCreate(array $attributes = [])
 * @method static NoteRepository|ProxyRepositoryDecorator repository()
 * @method static Note[]|Proxy[] all()
 * @method static Note[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Note[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Note[]|Proxy[] findBy(array $attributes)
 * @method static Note[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Note[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class NoteFactory extends PersistentProxyObjectFactory{
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
        return Note::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'etudiants' => SemestreFactory::new(),
            'module' => null, // TODO add App\Entity\module type manually
            'note' => self::faker()->randomFloat(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Note $note): void {})
        ;
    }
}
