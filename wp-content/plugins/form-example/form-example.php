<?php
/**
 * Plugin Name: Form Example Process Submit
 * Plugin URI: http://developermanda.epizy.com
 * Description: This plugin collects information from a custom form submission.
 * Version: 1.0
 * Author: Crispin Manda
 * Author URI: http://developermanda.epizy.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: custom-form-submission-plugin
 */


 function custom_form_include() {
  // Create variable to hold HTML info
  $content = '';

  $content .= '<div class="container mt-5">';
  $content .= '<h1 class="mb-3">Fill Form To Register</h1>';
  $content .= '<form method="post" action="' . plugin_dir_url(__FILE__) . 'process/">';

  $content .= '<input type="hidden" name="action" value="custom_form_submission">';

  $content .= '<div class="form-group">';
  $content .= '<label for="name">Name</label>';
  $content .= '<input type="text" name="name" id="name" class="form-control" required>';
  $content .= '</div>';

  $content .= '<div class="form-group">';
  $content .= '<label for="email">Email</label>';
  $content .= '<input type="email" name="email" id="email" class="form-control" required>';
  $content .= '</div>';

  $content .= '<div class="form-group">';
  $content .= '<label for="phone">Phone</label>';
  $content .= '<input type="tel" name="phone" id="phone" class="form-control" required>';
  $content .= '</div>';

  $content .= '<div class="form-group">';
  $content .= '<label for="event">Event</label>';
  $content .= '<select id="event" name="event" class="form-control" required>';
  $content .= '<option value="">Select Event</option>';
  $content .= '<option value="project-management">The roles of Project Management skills in 21st century economic growth</option>';
  $content .= '<option value="meal-strategy">The Roles of Monitoring Evaluation Accountability and Learning (MEAL) as a Strategy for project success</option>';
  $content .= '<option value="hrm-success">Human Resource Management strategic success in Medium sized and big Projects</option>';
  $content .= '<option value="theory-of-change">Theory of Change as a tool for Project Managers</option>';
  $content .= '<option value="procurement-management">Procurement management in Project Management</option>';
  $content .= '<option value="service-quality">Service Quality and Customer Satisfaction</option>';
  $content .= '<option value="agile-project-management">How can agile project management be used to achieve project success/objectives in the 21st century</option>';
  $content .= '<option value="school-administration">School Administration’s Monitoring and Evaluation Procedures.</option>';
  $content .= '<option value="winning-business-case">Developing a winning business case individuals and companies dealing with tenders.</option>';
  $content .= '<option value="entrepreneurs-roles">Roles of Entrepreneurs in project management.</option>';
  $content .= '<option value="accountability-transparency">Importance of Accountability and Transparency as a Sustainability Strategy for Complex Community Based Programs.</option>';
  $content .= '<option value="performance-management">Unlocking the potential in performance management by Small and International projects</option>';
  $content .= '<option value="data-software">Influence of data and software in projects of the 21st century and beyond.</option>';
  $content .= '</select>';
  $content .= '</div>';

  $content .= '<button type="submit" name="form_example_contact_submit" class="btn btn-primary mb-5">Register</button>';

  $content .= '</form>';
  $content .= '</h3>';

  return $content;
}
add_shortcode('custom_form_example', 'custom_form_include');
