<?php

   function projectSearchResults($data) {
      $mainQuery = new WP_Query(array(
         'post_type' => 'project'
      ));

      $results = array(
         'projects' => array(),
      );

      while($mainQuery->have_posts()) {
         $mainQuery->the_post();

         array_push($results['projects'], array(
            'title' => get_the_title(),
            // 'content' => get_the_content(),
            'project_site_url' => get_field('project_site_url'),
            'permalink' => get_the_permalink()
         ));
      }

      return $results;
   }


   function staffSearchResults($data) {
      $mainQuery = new WP_Query(array(
         'post_type' => 'staff',
         's' => sanitize_text_field($data['term'])
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


   function postSearchResults($data) {
      $mainQuery = new WP_Query(array(
         'post_type' => 'post'
      ));

      $results = array(
         'posts' => array(),
      );

      while($mainQuery->have_posts()) {
         $mainQuery->the_post();

         array_push($results['posts'], array(
            'title' => get_the_title(),
            'content' => get_the_content(),
            'permalink' => get_the_permalink()
         ));
      }

      return $results;
   }


?>