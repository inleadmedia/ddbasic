<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */

print $wrapper_prefix;
  if (!empty($title)):
    print '<div class="event-list-leaf">' . $title . '</div>';
  endif;
  print $list_type_prefix;
    foreach ($rows as $id => $row):
      print '<li class="event-list-item">' . $row . '</li>';
    endforeach;
  print $list_type_suffix;
print $wrapper_suffix;

