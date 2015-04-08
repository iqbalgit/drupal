<?php
/**
 * @file
 * template.php
 */
function bootstrap_zuperp_preprocess_page(&$vars) {
  if (module_exists('disqus')) {
    $identifier = $_GET['q'];
    if (strstr($identifier, 'news-view')) {
      $domain = variable_get('disqus_domain', 'localhostdrupal'); // A.K.A. short name
      $url = url($_GET['q'], array('absolute' => true));
      $title = drupal_get_title();
      drupal_add_js(drupal_get_path('module', 'disqus') . '/disqus.js');
      drupal_add_js(array('disqus' => array('domain' => $domain, 'url' => $url, 'title' => $title, 'identifier' => $identifier)), 'setting'); // Add to the Drupal.settings for the script above to be able to pick it up.
      // Add the div to the page for the Disqus embed script to be able to drop in the comments code dynamically.
      //dpm($vars);
      dpm($vars);
      $vars['page']['content']['system_main']['main']['#markup'] .= '<div id="disqus_thread"></div>';
      //drupal_add_js($js, 'inline');
      //$vars['page']['content']['system_main']['main']['#markup'] .= '<iframe id="dsq-3" data-disqus-uid="2" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" width="100%" src="http://disqus.com/embed/comments/?base=default&amp;disqus_version=366531e3&amp;f=drupal&amp;t_i=news-view&amp;t_u=http%3A%2F%2Flocalhost%2Fdrupal%2Fnews-view&amp;t_e=News%20View&amp;t_d=News%20View%20%7C%20localhost&amp;t_t=News%20View&amp;s_o=default#2" style="width: 100% !important; border: none !important; overflow: hidden !important; height: 559px !important;" horizontalscrolling="no" verticalscrolling="no"></iframe>';
      //$vars['page']['content']['system_main']['main']['#markup'] .= '</div>';
      //dpm($vars);
    }
  }
}
