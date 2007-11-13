<?php
/*
 Copyright 2001 - 2007 Ampache.org
 All Rights Reserved

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License v2
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/

/* Create some variables we are going to need */
$web_path = Config::get('web_path');
$base_url = Config::get('ajax_url') . '?action=set_rating&amp;rating_type=' . $rating->type . '&amp;object_id=' . $rating->id;
?>

<div class="star-rating">
  <ul>
    <?php
    // decide width of rating (5 stars -> 20% per star)
    $width = $rating->rating*20;
    if ($width < 0) $width = 0;
    
    //set the current rating background
    echo "<li class=\"current-rating\" style=\"width:${width}%\" >Current rating: ";
    if ($rating->rating <= 0) {
        echo "not rated yet </li>\n";
    }
    else echo "$rating->rating of 5</li>\n";
    
    for ($i=1; $i<6; $i++)
    {
    ?>
      <li>
        <span class="star<?php echo $i; ?>" title="<?php echo $i.' '._('out of'); ?> 5"><?php echo $i; ?></span>
      </li>
    <?php
    }
    ?>
  </ul>
</div>
