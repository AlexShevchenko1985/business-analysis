<?php
$locations = !empty($locations)? $locations : [];
?>
<?php if (!empty($locations)): ?>
    <section class="office-locations">
        <div class="container-lg">
            <div class="locations-block-holder">
                <?php foreach ($locations as $location):
                    $country = !empty($location['country'])? $location['country'] : '';
                    ?>
                    <div class="item" id="<?php echo $country; ?>">
                        <?php if (!empty($location['logo'])): ?>
                            <div class="image">
                                <?php echo wp_get_attachment_image($location['logo'], 'medium_large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="location">
                            <?php if (!empty($location['image'])): ?>
                                <div class="flag">
                                    <?php echo wp_get_attachment_image($location['image']); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($country)): ?>
                                <div class="name"><?php echo $country; ?></div>
                            <?php endif; ?>
                            <?php if (!empty($location['address'])): ?>
                                <div class="address"><?php echo $location['address']; ?></div>
                            <?php endif; ?>
                            <?php if (!empty($location['phone'])): ?>
                                <p><?php echo __('Phone', 'node'); ?>: <a href="tel:<?php echo $location['phone']; ?>"><?php echo $location['phone']; ?></a></p>
                            <?php endif; ?>
                            <?php if (!empty($location['email'])): ?>
                                <p><?php echo __('Email', 'node'); ?>: <a href="mailto:<?php echo $location['email']; ?>"><?php echo $location['email']; ?></a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
<?php endif;
