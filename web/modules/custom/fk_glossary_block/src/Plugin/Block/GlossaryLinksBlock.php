<?php

namespace Drupal\fk_glossary_block\Plugin\Block;

use Drupal\Core\Link;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a glossary links block.
 *
 * @Block(
 *   id = "fk_glossary_links",
 *   admin_label = @Translation("Glossary Links"),
 *   category = @Translation("Custom")
 * )
 */
class GlossaryLinksBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $route_name = \Drupal::routeMatch()->getRouteName();
        $chars = array_merge(range('A', 'Z'), ['0-9', '#']);
        foreach($chars as $char) {
            $items[] = Link::createFromRoute(
                $char, $route_name, [
                'starts-with' => $char,
                ]
            );
        }


        $build = [
        '#theme' => 'item_list',
        '#items' => $items,
        '#cache' => [
        'contexts' => [
          'url.path',
          'url.query_args',
        ],
        ],
        '#attributes' => [
        'class' => [],
        ],
        '#attached' => [
        'library' => [
          'fk_glossary_block/drupal.fk_glossary_block.facet_css',
          'fk_glossary_block/drupal.fk_glossary_block.facet_js'
        ],
        ]
        ];
        return $build;
    }

}
