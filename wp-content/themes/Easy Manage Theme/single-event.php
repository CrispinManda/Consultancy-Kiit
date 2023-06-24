<?php
/**
 * Template Name: Single Event
 * Template Post Type: event
 */

get_header();
?>

<div class="container">
    <h2 class="text-center"><?php the_title(); ?></h2>
    <p class="text-center">Elevate your skills with our most in-demand training programmes</p>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Duration</th>
                <th>Location</th>
                <th>Fees</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php the_title(); ?></td>
                <td><?php echo get_field('event_date'); ?></td>
                <td><?php echo get_field('event_duration'); ?></td>
                <td><?php echo get_field('event_location'); ?></td>
                <td><?php echo get_field('event_fees'); ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php get_footer(); ?>
