<footer class="container-fluid footer-primary py-6">
	<div class="row">
		<div class="col-12 col-md-10 offset-md-1">
			<div class="row">
				<div class="col-8 offset-2 offset-md-0 col-md-6 col-lg-3">
					<div class="w-100 text-center text-md-left py-2">
						<img src="<?php the_field('dark_background_logo', 'option'); ?>" width="150px">
						<?php dynamic_sidebar( 'footer_1' ); ?>
					</div>
				</div>
				<div class="col-8 offset-2 offset-md-0 col-md-6 col-lg-3">
					<div class="w-100 text-center text-md-left py-2">
						<?php dynamic_sidebar( 'footer_2' ); ?>
					</div>
				</div>
				<div class="col-8 offset-2 offset-md-0 col-md-6 col-lg-3">
					<div class="w-100 text-center text-md-left text-white py-2">
						<?php dynamic_sidebar( 'footer_3' ); ?>
						<p class="mb-2"><?php bloginfo('name'); ?><br />
						<?php the_field('address_line_one', 'option'); ?><br />
						<?php the_field('address_line_two', 'option'); ?></p>
						<?php if( have_rows('email', 'option') ): ?>
							<?php while ( have_rows('email', 'option') ) : the_row(); ?>
								<p class="mb-2"><a href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_icon'); ?> &nbsp;<?php the_sub_field('email_address'); ?></a></p>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if( have_rows('phone', 'option') ): ?>
							<?php while ( have_rows('phone', 'option') ) : the_row(); ?>
								<p class="mb-2"><a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_icon'); ?> &nbsp;<?php the_sub_field('phone_number'); ?></a></p>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-8 offset-2 offset-md-0 col-md-6 col-lg-3">
					<div class="w-100 text-center text-lg-left py-2">
						<?php dynamic_sidebar( 'footer_4' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php include("footer-copyright.php"); ?>