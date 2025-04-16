<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aitech
 */

get_header();
?>
<?php if (have_posts()): ?>
    <div class="breadcrumbs">
        <div class="container-lg">
            <div class="breadcrumbs-holder">
                <a href="<?php echo home_url('/'); ?>"><?php echo __('Home', 'node'); ?></a>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
                <span><?php echo get_the_title(); ?></span>
            </div>
        </div>
    </div>
    <div class="blog-page">
        <div class="container-lg">
            <h1><?php echo get_the_title(); ?></h1>
            <div class="blog-items-grid">

                <?php while (have_posts()):
                    the_post();
                    the_content(); ?>

                    <div class="item">
                        <a href="/">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/blog-img1.webp"
                                     alt="Image">
                            </div>
                            <div class="content">
                                <div class="text-holder">
                                    <div class="title">How to Hire the Best React Developers</div>
                                    <p>From startups building MVPs to Fortune 500 companies modernizing legacy systems,
                                        React plays a central role in frontend development. But as demand for React
                                        developers continues to skyrocket, finding the right talent isn’t as simple as
                                        posting a job description and waiting. The key is to approach hiring
                                        strategically, with a deep understanding of the technical skills, collaboration
                                        dynamics, and the challenges.</p>
                                </div>
                                <div class="btn-holder">
                                    <a href="" class="arrow-btn">Read more <img
                                                src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-r.svg"
                                                alt="Arrow"></a>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
            </div>
            <div class="navigation">
                <a class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" viewBox="0 0 11 16">
                        <path d="M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z"></path>
                    </svg>
                </a>
                <a class="active">1</a>
                <a>2</a>
                <a>3</a>
                <a class="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" viewBox="0 0 11 16">
                        <path d="M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
get_footer();
