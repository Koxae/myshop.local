<?php
//about theme info

function hover_boards_dashboard_menu() {
    add_menu_page(
        esc_html__( 'Hover Boards', 'hover-boards' ), // Page title
        esc_html__( 'Hover Boards', 'hover-boards' ), // Menu title
        'manage_options',                                             // Capability
        'hover-boards-info',                                  // Menu slug (same)
        'hover_boards_theme_page_display',                    // Callback
         get_template_directory_uri() . '/images/menu-icon.svg', // Image icon
        59                                           // Position
    );
}
add_action( 'admin_menu', 'hover_boards_dashboard_menu' );

// Add a Custom CSS file to WP Admin Area
function hover_boards_admin_theme_style() {
	wp_enqueue_style('hover-boards-custom-admin-style', esc_url(get_template_directory_uri()) . '/css/admin-style.css');
	wp_enqueue_script('hover-boards-tabs', esc_url(get_template_directory_uri()) . '/inc/core/js/tab.js');
}
add_action('admin_enqueue_scripts', 'hover_boards_admin_theme_style');

//guidline for about theme
function hover_boards_theme_page_display() { 
	//custom function about theme customizer
	$hover_boards_return = add_query_arg( array()) ;
	$hover_boards_theme = wp_get_theme( 'hover-boards' );
?>

<div class="wrapper-info">
	<div class="tab-sec">
    	
    	<div class="tab">
			<button class="tablinks" onclick="hover_boards_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Free Setup', 'hover-boards' ); ?></button>
			<button class="tablinks" onclick="hover_boards_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'hover-boards' ); ?></button>
  			<button class="tablinks" onclick="hover_boards_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'hover-boards' ); ?></button>
  			<button class="tablinks" onclick="hover_boards_open_tab(event, 'get_bundle')"><?php esc_html_e( 'WP Theme Bundle', 'hover-boards' ); ?></button>
		</div>

		<?php 
			$hover_boards_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$hover_boards_plugin_custom_css ='display: block';
			}
		?>

		<div id="lite_theme" class="tabcontent open">
			<div class="lite-theme-tab">
				<h3><?php esc_html_e( 'Hover Boards', 'hover-boards' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('Hover Boards is a responsive theme built with structured layouts and flexible customization options for product-centered websites. The design includes homepage banners, product grids, category sections, customizable headers, and organized navigation menus. The theme supports mobile-friendly layouts to maintain usability across different screen sizes and devices. It also includes widget-ready areas, typography settings, color management controls, and customizable footer sections. Hover Boards features SEO-conscious coding practices, optimized page layouts, and compatibility with commonly used plugins. The theme supports image galleries, featured product sections, blog integration, and social media connectivity for content management and presentation. Additional functionality includes translation readiness, browser compatibility, and easy customization through built-in settings. The layout focuses on clean spacing and structured content placement to support organized product display and simplified navigation. Hover Boards also provides flexible section arrangements that can be adjusted according to branding and content requirements.','hover-boards'); ?></p>
			  	<div class="col-left-inner">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site', 'hover-boards'); ?></a>
						<a href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site', 'hover-boards'); ?></a>
					</div>
					<div class="support-forum-col-section">
						<div class="support-forum-col">
							<h4><?php esc_html_e('Having Trouble, Need Support?', 'hover-boards'); ?></h4>
							<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'hover-boards'); ?></p>
							<div class="info-link">
								<a href="<?php echo esc_url( HOVER_BOARDS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'hover-boards'); ?></a>
							</div>
						</div>
						<div class="support-forum-col">
							<h4><?php esc_html_e('Reviews & Testimonials', 'hover-boards'); ?></h4>
							<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'hover-boards'); ?>  </p>
							<div class="info-link">
								<a href="<?php echo esc_url( HOVER_BOARDS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'hover-boards'); ?></a>
							</div>
						</div>
						<div class="support-forum-col">
							<h4><?php esc_html_e('Theme Documentation', 'hover-boards'); ?></h4>
							<p> <?php esc_html_e('If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'hover-boards'); ?>  </p>
							<div class="info-link">
								<a href="<?php echo esc_url( HOVER_BOARDS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Free Theme Documentation', 'hover-boards'); ?></a>
							</div>
						</div>
					</div>
			  	</div>
			</div>
		</div>

		<div id="theme_pro" class="tabcontent">		  	
			<div class="pro-info">
				<div class="col-left-pro">
					<h3><?php esc_html_e( 'Premium Theme Information', 'hover-boards' ); ?></h3>
					<hr class="h3hr">
			    	<p><?php esc_html_e('Hoverboards WordPress Theme is designed with a responsive and structured layout for product-centered websites that require organized content presentation and flexible customization options. The theme includes homepage banner sections, product showcase layouts, customizable headers, category displays, and widget-ready areas for arranging content efficiently. It supports responsive design to maintain usability across desktops, tablets, and mobile devices. Built-in customization settings include typography controls, color management, footer customization, and flexible layout options through the customizer. Hoverboards WordPress Theme also supports SEO-friendly coding practices, social media integration, translation readiness, and compatibility with widely used plugins. Additional features include product galleries, blog integration, featured sections, and organized navigation menus to improve content accessibility. The layout structure focuses on maintaining clean spacing and consistent presentation while supporting content adjustments according to branding and display requirements.','hover-boards'); ?></p>
			    	<div class="pro-links">
				    	<a href="<?php echo esc_url( HOVER_BOARDS_LIVE_DEMO ); ?>" target="_blank" class="demo-btn"><?php esc_html_e('Live Demo', 'hover-boards'); ?></a>
						<a href="<?php echo esc_url( HOVER_BOARDS_BUY_NOW ); ?>" target="_blank" class="prem-btn"><?php esc_html_e('Buy Premium', 'hover-boards'); ?></a>
						<a href="<?php echo esc_url( HOVER_BOARDS_PRO_DOC ); ?>" target="_blank" class="doc-btn"><?php esc_html_e('Documentation', 'hover-boards'); ?></a>
					</div>
			    </div>
			    <div class="col-right-pro scroll-image-wrapper">
			    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/premium-image.jpg" alt="" class="pro-img" />		    	
			    </div>
			</div>		    
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'hover-boards' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th><?php esc_html_e('Features', 'hover-boards'); ?></th>
								<th><?php esc_html_e('Free Themes', 'hover-boards'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'hover-boards'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Easy Setup', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('SEO Friendly', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Banner Settings', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'hover-boards'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'hover-boards'); ?></td>
								<td class="table-img"><?php esc_html_e('14', 'hover-boards'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'hover-boards'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'hover-boards'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'hover-boards'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'hover-boards'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'hover-boards'); ?></td>
								<td class="table-img"><?php esc_html_e('12', 'hover-boards'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'hover-boards'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'hover-boards'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'hover-boards'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'hover-boards'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Reordering', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Demo Importer', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('WordPress 6.4 or later', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('PHP 8.2 or 8.3', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('MySQL 5.6 (or greater) | MariaDB 10.0 (or greater)', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Influence Registration', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Detailed Influencer Portfolio', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Pricing Plan', 'hover-boards'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
							<td></td>
							<td class="table-img"></td>
							<td class="update-link"><a href="<?php echo esc_url( HOVER_BOARDS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'hover-boards'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">	
			<div class="bundle-info">
				<div class="col-left-pro">
			   		<h3><?php esc_html_e( 'WP Theme Bundle', 'hover-boards' ); ?></h3>
			   		<hr class="h3hr">
			    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 500+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','hover-boards'); ?></p>
			    	<div class="feature">
			    		<h4><?php esc_html_e( 'Features:', 'hover-boards' ); ?></h4>
			    		<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/tick.png" alt="" /><?php esc_html_e('500+ Premium Themes & 5+ Plugins.', 'hover-boards'); ?></p>
			    		<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/tick.png" alt="" /><?php esc_html_e('Seamless Integration.', 'hover-boards'); ?></p>
			    		<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/tick.png" alt="" /><?php esc_html_e('Customization Flexibility.', 'hover-boards'); ?></p>
			    		<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/tick.png" alt="" /><?php esc_html_e('Regular Updates.', 'hover-boards'); ?></p>
			    		<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/tick.png" alt="" /><?php esc_html_e('Dedicated Support.', 'hover-boards'); ?></p>
			    	</div>
			    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $119!', 'hover-boards'); ?></p>
			    	<div class="pro-links">
						<a href="<?php echo esc_url( HOVER_BOARDS_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank" class="bundle-buy"><?php esc_html_e('Get Bundle', 'hover-boards'); ?></a>
						<a href="<?php echo esc_url( HOVER_BOARDS_THEME_BUNDLE_DOC ); ?>" target="_blank" class="bundle-doc"><?php esc_html_e('Documentation', 'hover-boards'); ?></a>
					</div>
			   	</div>
			   	<div class="col-right-pro scroll-image-wrapper">
			    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bundle.jpg" alt="" />
			   	</div>
			</div>	  	
		</div>
	</div>
	<div class="coupen-code-section">
		<div class="sshot-section">
			<div class="sshot-inner">
				<h2><?php esc_html_e( 'Welcome To Hover Boards,', 'hover-boards' ); ?> </h2>
				<div class="on-pro">
					<span class="version"><?php esc_html_e( 'Version', 'hover-boards' ); ?>: <?php echo esc_html($hover_boards_theme['Version']);?></span>
					<span class="coupon-code"><?php esc_html_e('Get 20% Of On Pro Theme-Use Code: ','hover-boards'); ?><span class="code-highlight"><?php esc_html_e('VWPRO20','hover-boards'); ?></span>
				</div>
		    	<p><?php esc_html_e('All Our WordPress Themes Are Modern, Minimalist, 100% Responsive, Seo-Friendly,Feature-Rich, And Multipurpose That Best Suit Designers, Bloggers And Other Professionals Who Are Working In The Creative Fields.','hover-boards'); ?></p>
		    	<div class="btn-section">
			    	<div class="proo-links">
				    	<a href="<?php echo esc_url( HOVER_BOARDS_LIVE_DEMO ); ?>" target="_blank" class="demo-btn"><?php esc_html_e('Live Demo', 'hover-boards'); ?></a>
						<a href="<?php echo esc_url( HOVER_BOARDS_BUY_NOW ); ?>" target="_blank" class="prem-btn"><?php esc_html_e('Buy Premium', 'hover-boards'); ?></a>
						<a href="<?php echo esc_url( HOVER_BOARDS_PRO_DOC ); ?>" target="_blank" class="doc-btn"><?php esc_html_e('Documentation', 'hover-boards'); ?></a>						
					</div>
			    	
			    </div>
			</div>
	    	<div class="bundle-banner">
	    		<div class="bundle-img">
	    			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bundle-notice.png" alt="" />
	    		</div>
	    		<div class="bundle-text">
		  			<h2><?php esc_html_e('WP THEME BUNDLE','hover-boards'); ?></h2>
					<h4><?php esc_html_e('Get Access to 500+ Premium WordPress Themes At Just $119','hover-boards'); ?></h4>
					<div class="bundle-button">
			  			<a href="<?php echo esc_url( 'https://www.vwthemes.com/discount/FREEBREF?redirect=/products/wp-theme-bundle'); ?>" target="_blank"><?php esc_html_e('Get 20% OFF On Bundle', 'hover-boards'); ?></a>
			  		</div>
		  		</div>
	    	</div>
	    </div>
	    <div class="coupen-section">
	    	<div class="logo-section">
			  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		  	</div>
		  	<div class="logo-right">	
		  		<div class="logo-text">
		  			<h2><?php esc_html_e('GET PRO','hover-boards'); ?></h2>
					<h4><?php esc_html_e('20% Off','hover-boards'); ?></h4>
		  		</div>						
			</div>
	    </div>
	</div>
</div>

<?php } ?>