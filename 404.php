<?php
/**
 * 404 template updated to 410.
 *
 * @package Neve
 */

// Set the HTTP response header to 410 Gone.
header("HTTP/1.1 410 Gone");

// Add noindex meta tag to prevent search engines from indexing this page and set the page title.
add_action('wp_head', function() {
    echo '<meta name="robots" content="noindex, nofollow">';
    echo '<title>410 Page Permanently Deleted</title>';
});

// WordPress header
get_header();
?>

<div style="text-align: center; margin-top: 50px;">
    <h1>410 Page Permanently Deleted</h1>
    <span>We're sorry, but the page you are looking for has been permanently deleted.<br> 
    You can go back to the <a href="<?php echo esc_url(home_url('/')); ?>">home page</a> or <a href="<?php echo esc_url(home_url('/contact')); ?>">contact us</a> for further assistance.</span>
</div>

<?php
// WordPress footer
get_footer();
?>
