<section class="nav-secondary container-fluid">
    <div class="d-flex  flex-row-reverse mr-2">
        <?php if( have_rows('email', 'option') ): ?>
            <?php while ( have_rows('email', 'option') ) : the_row(); ?>
                <a class="mb-0 py-2 px-4 text-white sec-head-highlight" href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_icon'); ?><span class="d-none d-sm-inline-block"> &nbsp; <?php the_sub_field('email_address'); ?></span></a>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if( have_rows('phone', 'option') ): ?>
            <?php while ( have_rows('phone', 'option') ) : the_row(); ?>
                <a class="mb-0 py-2 px-4 text-white background-dark" href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_icon'); ?><span class="d-none d-sm-inline-block"> &nbsp; <?php the_sub_field('phone_number'); ?></span></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>