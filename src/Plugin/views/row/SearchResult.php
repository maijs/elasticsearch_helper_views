<?php

namespace Drupal\elasticsearch_helper_views\Plugin\views\row;

use Drupal\views\Plugin\views\row\RowPluginBase;

/**
 * The search result row plugin.
 *
 * This row plugin provides a way to have search results rendered in a template.
 *
 * @ingroup views_row_plugins
 *
 * @ViewsRow(
 *   id = "elasticsearch_search_result",
 *   title = @Translation("Elasticsearch search result"),
 *   help = @Translation("Displays the search result in a template."),
 *   theme = "elasticsearch_search_result",
 *   display_types = {"normal"}
 * )
 */
class SearchResult extends RowPluginBase {

}
