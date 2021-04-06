<?php
   function staffSearchResults($data) {
      $mainQuery = new WP_Query(array(
         'post_type' => 'staff'
      ));

      $results = array(
         'staffs' => array(),
      );

      while($mainQuery->have_posts()) {
         $mainQuery->the_post();

         array_push($results['staffs'], array(
            'title' => get_the_title(),
            'content' => get_the_content(),
            'staff_site_url' => get_field('staff_site_url'),
            'permalink' => get_the_permalink()
         ));
      }

      return $results;
   }





?>