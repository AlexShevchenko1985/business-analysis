<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package main-theme
 */

?>



</div>

<!-- Back to top button -->
<button type="button" class="btn btn-floating btn-sd" id="btn-back-to-top">
    <i class="fa-arrow-up"></i>
</button>
</main>

</div>
</div>

<footer class="footer footer--primary" role="contentinfo">

    <div class="container">
        <div class="footer-holder">
            <div class="left-side">
                <div class="logo">
                    <img src="/wp-content/themes/business-analysis/src/images/footer-logo1.svg" alt="Logo">
                </div>
                <div class="socials">
                    <p>Follow Us</p>
                    <div class="social-links">
                        <a href="" target="_blank" title="Linkedin">
                            <img src="/wp-content/themes/business-analysis/src/images/linkedin.svg" alt="Icon">
                        </a>
                        <a href="" target="_blank" title="Twitter">
                            <img src="/wp-content/themes/business-analysis/src/images/x.svg" alt="Icon">
                        </a>
                        <a href="" target="_blank" title="Facebook">
                            <img src="/wp-content/themes/business-analysis/src/images/facebook.svg" alt="Icon">
                        </a>
                        <a href="" target="_blank" title="Instagram">
                            <img src="/wp-content/themes/business-analysis/src/images/instagram.svg" alt="Icon">
                        </a>
                        <a href="" target="_blank" title="Drupal">
                            <img src="/wp-content/themes/business-analysis/src/images/drupal-soc.svg" alt="Icon">
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <div class="column">
                    <h4>Featured Solutions</h4>
                    <ul>
                        <li>
                            <a href="" title="">Services</a>
                        </li>
                        <li>
                            <a href="" title="">BA Outstaffing</a>
                        </li>
                        <li>
                            <a href="" title="">Case Studies</a>
                        </li>
                        <li>
                            <a href="" title="">Insights</a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Information</h4>
                    <ul>
                        <li>
                            <a href="" title="">About us</a>
                        </li>
                        <li>
                            <a href="" title="">Cookies</a>
                        </li>
                        <li>
                            <a href="" title="">Policy</a>
                        </li>
                        <li>
                            <a href="" title="">Terms of Use</a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Get in Touch</h4>
                    <ul>
                        <li>
                            <a href="" title=""><img src="/wp-content/themes/business-analysis/src/images/ca-3x4.svg" alt="Icon"> Canada</a>
                        </li>
                        <li>
                            <a href="" title=""><img src="/wp-content/themes/business-analysis/src/images/it-3x4.svg" alt="Icon"> Italy</a>
                        </li>
                        <li>
                            <a href="" title=""><img src="/wp-content/themes/business-analysis/src/images/ro-3x4.svg" alt="Icon"> Romania</a>
                        </li>
                        <li>
                            <a href="" title=""><img src="/wp-content/themes/business-analysis/src/images/pl-3x4.svg" alt="Icon"> Poland</a>
                        </li>
                        <li>
                            <a href="" title=""><img src="/wp-content/themes/business-analysis/src/images/ua-3x4.svg" alt="Icon"> Ukraine</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

</div>

<?php
/**
 * Form popup
 */
get_template_part('template-parts/form-popup');
?>

<?php
/**
 * Thanks popup
 */
get_template_part('template-parts/thanks-popup');
?>

<?php wp_footer(); ?>

</body>
</html>
