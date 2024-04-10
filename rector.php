<?php

declare(strict_types = 1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Symfony\Set\SensiolabsSetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/config',
        __DIR__.'/public',
        __DIR__.'/src',
        __DIR__.'/tests',
                ])
    // uncomment to reach your current PHP version
    ->withPhpSets()
    ->withRules([
        AddVoidReturnTypeWhereNoReturnRector::class,
        InlineConstructorDefaultToPropertyRector::class
                ])
    ->withSets([
        DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
        LevelSetList::UP_TO_PHP_82,
        SensiolabsSetList::ANNOTATIONS_TO_ATTRIBUTES,
        SymfonySetList::SYMFONY_64,
        SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES,
        SymfonySetList::SYMFONY_CODE_QUALITY,
        SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION,
               ]);
