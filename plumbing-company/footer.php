<?php
/**
 * The template for displaying the footer.
 */
global $logo_footer, $logo_text;
					if (get_custom_option('show_top_page') == 'yes' && get_custom_option('show_sidebar_top') == 'yes') {

						stopWrapper(); //<!-- </aside#tabBlog> -->

						global $THEMEREX_CURRENT_SIDEBAR;
						$THEMEREX_CURRENT_SIDEBAR = 'top';
						do_action( 'before_sidebar' );
						if ( ! dynamic_sidebar( get_custom_option('sidebar_top') ) ) {
							// Put here html if user no set widgets in sidebar
						}
					}

					stopWrapper(); //<!-- </div.content> -->

					// Show main sidebar
					get_sidebar();

					if (get_custom_option('body_style')!='fullscreen' && (!is_singular() || get_custom_option('single_style')!='single-portfolio-fullscreen')) {
						stopWrapper();	//<!-- </div.main> -->
					}
				?>
				</div> <!-- /.mainWrap -->

			<?php if (get_custom_option('show_sidebar_top') == 'yes') { ?>
			</div>	<!-- /.widgetTabs -->
			<?php } ?>

			<?php
			$show_user_footer = get_custom_option('show_user_footer');
			if (!empty($show_user_footer) && $show_user_footer != 'none') {
				$user_footer = themerex_strclear(get_custom_option('user_footer_content'), 'p');
				if (!empty($user_footer)) {
					$user_footer = substituteAll($user_footer);
					?>
					<div class="userFooterSection <?php echo esc_attr($show_user_footer); ?>">
						<?php
						echo balanceTags($user_footer);
						?>
					</div>
					<?php
				}
			}
			?>

			<?php
			// ---------------- Footer Twitter stream ----------------
			if (get_custom_option('show_twitter_in_footer') == 'yes'  ) {
				$twitter = do_shortcode('[trx_twitter class="main"]');
				if ($twitter) {
					?>
					<div class="twitBlockWrap"><?php echo balanceTags($twitter); ?></div>
					<?php
				}
			}
			?>

			<div class="footerContentWrap">
				<?php
				// ---------------- Footer contacts ----------------------
				if (($contact_style = get_custom_option('show_contacts_in_footer')) != 'no'  ) {
					$address_1 = get_theme_option('contact_address_1');
					$address_2 = get_theme_option('contact_address_2');
					$phone = get_theme_option('contact_phone');
					$fax = get_theme_option('contact_fax');
					if ($contact_style=='yes') $contact_style = 'dark';
				?>
				<?php
				if(get_locale()=='uk'){
					$linkAlfa = 'http://turbinka.com.ua/ua/alfa-romeo-ua/';
					$linkAudi = 'http://turbinka.com.ua/ua/audi/';
					$linkBmw = 'http://turbinka.com.ua/ua/bmv-ua/';
					$linkChevrolet = 'http://turbinka.com.ua/ua/shevrole-ua/';
					$linkChrysler = 'http://turbinka.com.ua/ua/krajsler-ua/';
					$linkCitroen = 'http://turbinka.com.ua/ua/sitroen-ua/';
					$linkDodge = 'http://turbinka.com.ua/ua/dodzh-ua/';
					$linkFiat = 'http://turbinka.com.ua/ua/fiat-ua/';
					$linkFord = 'http://turbinka.com.ua/ua/ford-ua/';
					$linkHonda = 'http://turbinka.com.ua/ua/honda-ua/';
					$linkHyndai = 'http://turbinka.com.ua/ua/hyundai-ua/';
					$linkIsuzu = 'http://turbinka.com.ua/ua/isuzu-ua/';
					$linkIveco = 'http://turbinka.com.ua/ua/iveko-ua/';
					$linkJeep = 'http://turbinka.com.ua/ua/jeep-ua/';
					$linkKia = 'http://turbinka.com.ua/ua/kia-ua/';
					$linkLancia = 'http://turbinka.com.ua/ua/lyancha-ua/';
					$linkLand = 'http://turbinka.com.ua/ua/lend-rover/';
					$linkLdv = 'http://turbinka.com.ua/ua/ldv-ua/';
					$linkLotus = 'http://turbinka.com.ua/ua/lotus-ua/';
					$linkMazda = 'http://turbinka.com.ua/ua/mazda-ua/';
					$linkMersedes = 'http://turbinka.com.ua/ua/mersedes-ua/';
					$linkMini = 'http://turbinka.com.ua/ua/mini-ua/';
					$linkMitsh = 'http://turbinka.com.ua/ua/mitsubishi-ua/';
					$linkNissan = 'http://turbinka.com.ua/ua/nissan/';
					$linkPeugeot = 'http://turbinka.com.ua/ua/pezho-ua/';
					$linkPorsche = 'http://turbinka.com.ua/ua/porshe-ua/';
					$linkRange = 'http://turbinka.com.ua/ua/rendzh-rover-ua/';
					$linkRenault = 'http://turbinka.com.ua/ua/reno-ua/';
					$linkSaab = 'http://turbinka.com.ua/ua/saab-ua/';
					$linkSeat = 'http://turbinka.com.ua/ua/seat-ua/';
					$linkSkoda = 'http://turbinka.com.ua/ua/shkoda-ua/';
					$linkSang = 'http://turbinka.com.ua/ua/sang-jong-ua/';
					$linkSubaru = 'http://turbinka.com.ua/ua/subaru-ua/';
					$linkSuzuki = 'http://turbinka.com.ua/ua/suzuki-ua/';
					$linkW = 'https://turbinka.com.ua/ua/volksvagen-ua/';
					$linkVolvo = 'https://turbinka.com.ua/ua/volvo-ua/';
                                        $linkOpel = 'https://turbinka.com.ua/ua/opel-ua/';
                                        $linkVauxhall ='https://turbinka.com.ua/ua/vauxhall-ua/';
                                        $linkSmart = 'https://turbinka.com.ua/ua/smart-ua/';
				}else{
					$linkAlfa = 'http://turbinka.com.ua/alfa-romeo/';
					$linkAudi = 'http://turbinka.com.ua/audi-ru/';
					$linkBmw = 'http://turbinka.com.ua/bmv/';
					$linkChevrolet = 'http://turbinka.com.ua/shevrole/';
					$linkChrysler = 'http://turbinka.com.ua/krajsler/';
					$linkCitroen = 'http://turbinka.com.ua/sitroen/';
					$linkDodge = 'http://turbinka.com.ua/dodzh/';
					$linkFiat = 'http://turbinka.com.ua/fiat/';
					$linkFord = 'http://turbinka.com.ua/ford/';
					$linkHonda = 'http://turbinka.com.ua/honda/';
					$linkHyndai = 'http://turbinka.com.ua/hyundai/';
					$linkIsuzu = 'http://turbinka.com.ua/isuzu/';
					$linkIveco = 'http://turbinka.com.ua/iveko/';
					$linkJeep = 'http://turbinka.com.ua/jeep/';
					$linkKia = 'http://turbinka.com.ua/kia/';
					$linkLancia = 'http://turbinka.com.ua/lyancha/';
					$linkLand = 'http://turbinka.com.ua/land-rover/';
					$linkLdv = 'http://turbinka.com.ua/ldv/';
					$linkLotus = 'http://turbinka.com.ua/lotus/';
					$linkMazda = 'http://turbinka.com.ua/mazda/';
					$linkMersedes = 'http://turbinka.com.ua/mersedes/';
					$linkMini = 'http://turbinka.com.ua/mini/';
					$linkMitsh = 'http://turbinka.com.ua/mitsubishi/';
					$linkNissan = 'http://turbinka.com.ua/nisan/';
					$linkPeugeot = 'http://turbinka.com.ua/pezho/';
					$linkPorsche = 'http://turbinka.com.ua/porshe/';
					$linkRange = 'http://turbinka.com.ua/rendzh-rover/';
					$linkRenault = 'http://turbinka.com.ua/reno/';
					$linkSaab = 'http://turbinka.com.ua/saab/';
					$linkSeat = 'http://turbinka.com.ua/seat/';
					$linkSkoda = 'http://turbinka.com.ua/shkoda/';
					$linkC = 'http://turbinka.com.ua/mini/';
					$linkSang = 'http://turbinka.com.ua/sang-jong/';
					$linkSubaru = 'http://turbinka.com.ua/subaru/';
					$linkSuzuki = 'http://turbinka.com.ua/suzuki/';
					$linkW = 'http://turbinka.com.ua/volksvagen/';
					$linkVolvo = 'http://turbinka.com.ua/volvo/';
                                        $linkOpel = 'https://turbinka.com.ua/opel/';
                                        $linkVauxhall ='https://turbinka.com.ua/vauxhall/';
                                        $linkSmart ='https://turbinka.com.ua/smart/';
				}
				?>
                    <footer class="footerWrap footerStyle<?php echo themerex_strtoproper($contact_style); ?> contactFooterWrap">
                        <div class="main contactFooter">
                            <section>
                                <div class="contactAddress">
									<address class="show-767">
										<div class="custmar">
                                        <div class="footer-title">
                                        <?php pll_e('Номери телефонів'); ?>
										</div>
										<?php pll_e('Перший номер');//echo __('Phone:', 'themerex') . ' ' . esc_html($phone); ?><br>
                                        <?php pll_e('Другий номер');//echo __('Fax:', 'themerex') . ' ' . esc_html($fax); ?>
										</div>
                                        <div class="custmar">
                                        <div class="footer-title">
                                        <?php pll_e('E-mail - заголовок'); ?>
										</div>
										<?php pll_e('e-mail'); ?><br>
										</div>
                                        
                                        <div class="clear"></div>
                                        <div class="footer-title">
                                        <?php pll_e('Соцмережі - заголовок'); ?>
										</div>
										<div class="social-footer">
										<a href="https://www.facebook.com/turbinka.com.ua/"><img src="/wp-content/themes/plumbing-company/images/socials/fb_icon.png"/></a>
										<a href="https://www.instagram.com/turbinka_ua/"><img src="/wp-content/themes/plumbing-company/images/socials/insta_icon.png"/></a>
										</div>
									</address>
                                    
                                    
                                    <div class="addressLeft width-75 width-100-mob">
										
                                        <a href="<?php echo $linkAlfa; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/alfa-romeo.jpg"></a>
										<a href="<?php echo $linkAudi; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/audi.jpg"></a>
										<a href="<?php echo $linkBmw; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/bmw.jpg"></a>
										<a href="<?php echo $linkChevrolet; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/chevrolet.jpg"></a>
										<a href="<?php echo $linkChrysler; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/chrysler.jpg"></a>
										<a href="<?php echo $linkCitroen; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/citroen.jpg"></a>
										<a href="<?php echo $linkDodge; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/dodge.jpg"></a>
										<a href="<?php echo $linkFiat; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/fiat.jpg"></a>
										<a href="<?php echo $linkFord; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/ford.jpg"></a>
										<a href="<?php echo $linkHonda; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/honda.jpg"></a>
										<a href="<?php echo $linkHyndai; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/hyundai.jpg"></a>
										<a href="<?php echo $linkIsuzu; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/isuzi.jpg"></a>
										<a href="<?php echo $linkIveco; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/iveco.jpg"></a>
										<a href="<?php echo $linkJeep; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/jeep.jpg"></a>
										<a href="<?php echo $linkKia; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/kia.jpg"></a>
										<a href="<?php echo $linkLancia; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/lancia.jpg"></a>
										<a href="<?php echo $linkLand; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/land-rover.jpg"></a>
										<a href="<?php echo $linkLdv; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/ldv.jpg"></a>
										<a href="<?php echo $linkLotus; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/lotus.jpg"></a>
										<a href="<?php echo $linkMazda; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/mazda.jpg"></a>
										<a href="<?php echo $linkMersedes; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/mercedes.jpg"></a>
										<a href="<?php echo $linkMini; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/mini.jpg"></a>
										<a href="<?php echo $linkMitsh; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/mitsubishi.jpg"></a>
										<a href="<?php echo $linkNissan; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/nissan.jpg"></a>
										<a href="<?php echo $linkPeugeot; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/peugeot.jpg"></a>
										<a href="<?php echo $linkPorsche; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/porsche.jpg"></a>
										<a href="<?php echo $linkRange; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/range-rover.jpg"></a>
										<a href="<?php echo $linkRenault; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/renault.jpg"></a>
										<a href="<?php echo $linkSaab; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/saab.jpg"></a>
										<a href="<?php echo $linkSeat; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/seat.jpg"></a>
										<a href="<?php echo $linkSkoda; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/skoda.jpg"></a>
										<a href="<?php echo $linkSmart; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/smart.jpg"></a>
										<a href="<?php echo $linkSang; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/ssangyong.jpg"></a>
										<a href="<?php echo $linkSubaru; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/subaru.jpg"></a>
										<a href="<?php echo $linkSuzuki; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/suzuki.jpg"></a>
										<a href="<?php echo $linkVauxhall; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/vauxhall.jpg"></a>
										<a href="<?php echo $linkW; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/volkswagen.jpg"></a>
										<a href="<?php echo $linkVolvo; ?>"><img src="http://turbinka.com.ua/wp-content/uploads/2016/08/volvo.jpg"></a>
<a href="<?php echo $linkOpel; ?>"><img src="https://turbinka.com.ua/wp-content/uploads/2017/07/opel.jpg"></a>


								
                                </div>
                                    <address class="addressRight width-25 hide-767">
										<div class="footer-title">
                                        <?php pll_e('Номери телефонів'); ?>
										</div>
										<?php pll_e('Перший номер');//echo __('Phone:', 'themerex') . ' ' . esc_html($phone); ?><br>
                                        <?php pll_e('Другий номер');//echo __('Fax:', 'themerex') . ' ' . esc_html($fax); ?>
										<div class="footer-title">
                                        <?php pll_e('E-mail - заголовок'); ?>
										</div>
										<?php pll_e('e-mail'); ?><br>
										<div class="footer-title">
                                        <?php pll_e('Соцмережі - заголовок'); ?>
										</div>
										<div class="social-footer">
										<a href="https://www.facebook.com/turbinka.com.ua/"><img src="/wp-content/themes/plumbing-company/images/socials/fb_icon.png"/></a>
										<a href="https://www.instagram.com/turbinka_ua/"><img src="/wp-content/themes/plumbing-company/images/socials/insta_icon.png"/></a>
										</div>
									</address>
                                </div>
                                <div class="contactShare">
                                    <ul>
                                        <?php
                                            $socials = get_theme_option('social_icons');
                                            foreach ($socials as $s) {
                                                if (empty($s['url'])) continue;
                                                $name = basename($s['icon']);
                                                ?>
                                                <li><a class="social_icons <?php echo esc_attr($name); ?>" target="_blank" href="<?php echo esc_url($s['url']); ?>"></a></li>
                                            <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </footer>
				<?php } ?>

				<?php
				// ----------------- Google map -----------------------
				if ( get_custom_option('googlemap_show')=='yes' ) {
					$map_address = get_custom_option('googlemap_address');
					$map_latlng = get_custom_option('googlemap_latlng');
					$map_zoom = get_custom_option('googlemap_zoom');
					$map_style = get_custom_option('googlemap_style');
					$map_height = get_custom_option('googlemap_height');
					if (!empty($map_address) || !empty($map_latlng)) {
						echo do_shortcode('[trx_googlemap'
							. (!empty($map_address) ? ' address="'.$map_address.'"' : '')
							. (!empty($map_latlng) ? ' latlng="'.$map_latlng.'"' : '')
							. (!empty($map_style) ? ' style="'.$map_style.'"' : '')
							. (!empty($map_zoom) ? ' zoom="'.$map_zoom.'"' : '')
							. (!empty($map_height) ? ' height="'.$map_height.'"' : '')
							. ']');
					}
				}
				?>

				<?php
				// ---------------- Footer sidebar ----------------------
				if (get_custom_option('show_sidebar_footer') == 'yes'  ) {
					global $THEMEREX_CURRENT_SIDEBAR;
					$THEMEREX_CURRENT_SIDEBAR = 'footer';
					$style = get_custom_option('sidebar_footer_style');
				?>
				<footer class="footerWrap footerStyle<?php echo themerex_strtoproper($style); ?>">
					<div class="main footerWidget widget_area">
						<?php
						do_action( 'before_sidebar' );
						if ( ! dynamic_sidebar( get_custom_option('sidebar_footer') ) ) {
							// Put here html if user no set widgets in sidebar
						}
						?>
					</div>
				</footer><!-- ./blackStyle -->
				<?php } ?>

				<?php if (get_custom_option('show_copyright_area_in_footer')=='yes') { ?>
				<div class="copyWrap">
					<div class="copy main">
						<div class="copyright"><?php echo get_theme_option('footer_copyright'); ?>
							<p><a style="color: #fff; font-weight: 300;" href="https://icyeast.org/"><img style="height: 30px; margin-right: 10px;" src="https://www.icyeast.org/wp-content/uploads/2015/04/logo-white-web.png" data-pagespeed-url-hash="2822369751" /> Panem – розробка та просування сайтів</a></p>
						<?php
						$terms_link = get_theme_option('footer_terms_link');
						$terms_text = get_theme_option('footer_terms_text');
						if ($terms_link) {
							?>
							<a href="<?php echo esc_url($terms_link); ?>"><?php echo esc_html($terms_text); ?></a>
							<?php
						}
						$policy_link = get_theme_option('footer_policy_link');
						$policy_text = get_theme_option('footer_policy_text');
						if ($terms_link && $policy_link) {
							_e('and', 'themerex');
						}
						if ($policy_link) {
							?>
							<a href="<?php echo esc_url($policy_link); ?>"><?php echo esc_html($policy_text); ?></a>
							<?php
						}
						?>
						</div>
						<div class="copy_socials socPage">
							<ul>
							<?php
							/* $socials = get_theme_option('social_icons');
							foreach ($socials as $s) {
								if (empty($s['url'])) continue;
								$sn = basename($s['icon']);
								?>
								<li><a class="social_icons <?php echo esc_attr($sn); ?>" target="_blank" href="<?php echo esc_url($s['url']); ?>"></a></li>
								<?php
							} */
							?>
							</ul>
						</div>
					</div>
				</div>
				<?php } ?>

			</div><!-- /.footerContentWrap -->

		</div><!-- ./boxedWrap -->

	</div><!-- ./main_content -->

<?php
get_template_part('templates/page-part-login');

get_template_part('templates/page-part-js-messages');

if (get_custom_option('show_right_panel')=='yes') {
	get_template_part('templates/page-part-customizer');
}
?>

<div class="upToScroll">
	<a href="#" class="scrollToTop icon-up-open-big" title="<?php _e('Back to top', 'themerex'); ?>"></a>
</div>

<div class="customHtmlSection">
<?php echo get_custom_option('custom_code'); ?>
</div>


<?php
if (($img = get_custom_option('fixed_banner_image')) != '') {
	echo '<div class="fixed_banner">';
	if (($link = get_custom_option('fixed_banner_link')) != '') {
		echo '<a href="' . $link . '" target="_blank"><img src="' . $img . '" alt="" /></a>';
	} else {
		echo '<img src="' . $img . '" alt="" />';
	}
	echo '</div>';
}
?>


<?php echo get_custom_option('gtm_code2'); ?>

<?php wp_footer(); ?>
<!-- Start FastcallAgent code {literal} -->
<script type="text/javascript">
var fca_code = '5210d4443574b8291626703aab72cfdf';
(function() {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.charset = 'utf-8';
    po.src = '//ua.cdn.fastcallagent.com/fca.min.js?_='+Date.now();
    var s = document.getElementsByTagName('script')[0];
    if (s) { s.parentNode.insertBefore(po, s); }
    else { s = document.getElementsByTagName('head')[0]; s.appendChild(po); }
})();



jQuery(".popup-serv").click(function(){
jQuery(this).removeClass("active");
});
jQuery(".close_popup_serv").click(function(){
jQuery(this).closest('.popup-serv').removeClass("active");
});



</script>
<!-- {/literal} End FastcallAgent code -->
</body>
</html>