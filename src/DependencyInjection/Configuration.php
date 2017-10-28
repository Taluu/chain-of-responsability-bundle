<?php
namespace ChainOfResponsabilityBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('chain_of_responsability');

        $this->addIdentifierChainNode($rootNode);

        return $treeBuilder;
    }

    private function addIdentifierChainNode(ArrayNodeDefinition $root)
    {
        $root
            ->children()
                ->arrayNode('chain')
                    ->prototype('scalar')->end()
                ->end()
            ->end()
        ;
    }
}