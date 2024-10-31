<div class="container-fluid clear pms_support_page">
    <!--Start Dashboard Content-->
    <div class="row">
        <div class="col-xl-5 mb-3 mb-xl-0">
            <div class="card text-dark bg-light p-0 m-0">
                <div class="card-header"><?php echo __('Support', 'passwords-manager'); ?> </div>
                <div class="card-body">
                    <div class="ref_lnk">
                        <form id="pwdms_sprt_form" method="post">
                            <?php wp_nonce_field('security_nonce', 'security_nonce'); ?>
                            <ul class="pwdms_fdtype p-0">
                                <li>
                                    <input type="radio" class="pwdms_fdtypes" id="pwdms_fdtype_2" name="pwdms-suggest" value="suggestions" />
                                    <label for="pwdms_fdtype_2">
                                        <i></i>
                                        <span> <?php echo __('I have ideas to improve this plugin', 'passwords-manager'); ?> </span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" class="pwdms_fdtypes" id="pwdms_fdtype_3" name="pwdms-help" value="help-needed" />
                                    <label for="pwdms_fdtype_3">
                                        <i></i>
                                        <span> <?php echo __('I need help with this plugin', 'passwords-manager'); ?> </span>
                                    </label>
                                </li>
                            </ul>
                            <div class="pwdms_fdback_form">
                                <div class="pwdms_field">
                                    <input placeholder=" <?php echo __('Enter your email address.', 'passwords-manager'); ?>" type="email" id="pwdms-feedback-email" class="pwdms-feedback-email" name="pwdms-feedback-email" />
                                </div>
                                <div class="pwdms_field">
                                    <textarea rows="4" id="pwdms-feedback-message" class="pwdms-feedback-message" placeholder=" <?php echo __('Leave plugin developers any feedback here...', 'passwords-manager'); ?>"></textarea>
                                </div>
                                <div class="pwdms_field pwdms_fdb_terms_s">
                                    <input type="checkbox" class="pwdms_fdb_terms" id="pwdms_fdb_terms" name="pwdms_fdb_terms" />
                                    <label for="pwdms_fdb_terms"><?php echo __('I agree that by clicking the send button below my email address and comments will be send to a', 'passwords-manager'); ?> <a href="https://www.hirewebxperts.com">hirewebxperts.com</a></label>
                                </div>
                                <div class="pwdms_field">
                                    <div class="pwdms_sbmt_buttons">
                                        <button class="btn btn-warning text-white" type="submit" id="pwdms-feedback-submit">
                                            <i class="fa fa-send"></i> <?php echo __('Send', 'passwords-manager'); ?>
                                            <img src="<?php echo PWDMS_IMG . 'sms-loading.gif' ?>" height="15px" id="sms_loading" style="display:none">
                                        </button>
                                        <input type="hidden" id="form_type" name="form_type">
                                        <a class="pwdms_fd_cancel btn" id="pwdms_fd_cancel" href="#"><?php echo __('Cancel', 'passwords-manager'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7">
            <div class="colbox p-3 mb-3 pms_carousel">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <h6 class="px-0 mb-3 sec_heading"><?php echo __('How to use Passwords Manager?', 'passwords-manager'); ?></h6>
                        <div class="colbox">

                            <div class="side_review">
                                <iframe src="https://www.youtube.com/embed/B9NvLynWueU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="mb-0 mt-1 p-3 vido"><a href="https://wordpress.org/support/plugin/passwords-manager/reviews/" target="_blank"><?php echo __('Please Review', 'passwords-manager'); ?> <span class="dashicons dashicons-thumbs-up"></span></a></p>
                                <p class="mb-0 mt-1 p-3 vido text-end"><a href="https://www.youtube.com/channel/UClog8CJFaMUqll0X5zknEEQ" class="sub_btn" target="_blank"><?php echo __('SUBSCRIBE', 'passwords-manager'); ?></a>
                                </p>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 mt-3 mt-md-0">
                        <h6 class="px-0 mb-3 sec_heading"><?php echo __('Explore Our Services', 'passwords-manager'); ?></h6>
                        <div class="colbox">
                            <div class="side_review optigif">
                                <a href="https://1.bp.blogspot.com/-Gh_wRgDCnTc/YNxa8JzXTaI/AAAAAAAABlY/Rrbh-3PVYtYh7XWYVeeyJXHIa_wZfRUegCLcBGAsYHQ/s0/optimize-new-min.gif" target="_blank"><img src="<?php echo PWDMS_IMG . 'hirewebxperts.jpg' ?>" /></a>
                                <p class="mb-0 p-3"><a href="https://plugins.hirewebxperts.com/support/" target="_blank"><?php echo __('For WordPress Design & Development | Custom Plugin Services', 'passwords-manager'); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mid-row">
                    <div class="col-12 p-0">
                        <h6 class="px-0 mb-3 sec_heading"><?php echo __('Try Our Other WordPress Plugins', 'passwords-manager'); ?></h6>

                        <div class="owl-carousel owl-theme " id="banners">
                            <div class="item">
                                <div class="side_review colbox">
                                    <a href="https://wordpress.org/plugins/woo-custom-cart-button/" target="_blank"><img src="<?php echo PWDMS_IMG . 'custom-add-to-cart.jpg' ?>" /></a>
                                    <p class="mb-0 p-3 vido55"><a href="https://wordpress.org/plugins/woo-custom-cart-button/" target="_blank"><?php echo __('Custom Add to Cart Button', 'passwords-manager'); ?></a>
                                    </p>
                                    <p class="mb-0 p-3 vido45 text-end"><a href="https://plugins.hirewebxperts.com/custom-add-to-cart-button-and-link-pro/#ctbtnprice" class="sub_btn" target="_blank"><?php echo __('Get Pro', 'passwords-manager'); ?></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side_review colbox">
                                    <a href="https://wordpress.org/plugins/awesome-checkout-templates/" target="_blank"><img src="<?php echo PWDMS_IMG . 'awesome-checkout.jpg' ?>" /></a>
                                    <p class="mb-0 p-3"><a href="https://wordpress.org/plugins/awesome-checkout-templates/" target="_blank"><?php echo __('Awesome Checkout Templates', 'passwords-manager'); ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side_review colbox">
                                    <a href="https://wordpress.org/plugins/text-case-converter/" target="_blank"><img src="<?php echo PWDMS_IMG . 'text-case-converter.jpg' ?>" /></a>
                                    <p class="mb-0 p-3"><a href="https://wordpress.org/plugins/text-case-converter/" target="_blank"><?php echo __('Text Case Converter', 'passwords-manager'); ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side_review colbox">
                                    <a href="https://wordpress.org/plugins/gforms-addon-for-country-and-state-selection" target="_blank"><img src="<?php echo PWDMS_IMG . 'country-state-selection.jpg' ?>" /></a>
                                    <p class="mb-0 p-3"><a href="https://wordpress.org/plugins/gforms-addon-for-country-and-state-selection" target="_blank"><?php echo __('Country and State Selection Addon for Gravity Forms', 'passwords-manager'); ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side_review colbox">
                                    <a href="https://wordpress.org/plugins/digital-warranty-card-generator/" target="_blank"><img src="<?php echo PWDMS_IMG . 'digital-warranty-card.jpg' ?>" /></a>
                                    <p class="mb-0 p-3"><a href="https://wordpress.org/plugins/digital-warranty-card-generator/" target="_blank"><?php echo __('Digital Warranty Card Generator', 'passwords-manager'); ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side_review colbox">
                                    <a href="https://wordpress.org/plugins/horizontal-slider-with-scroll/" target="_blank"><img src="<?php echo PWDMS_IMG . 'horizontal-slider.jpg' ?>" /></a>
                                    <p class="mb-0 p-3"><a href="https://wordpress.org/plugins/horizontal-slider-with-scroll/" target="_blank"><?php echo __('Horizontal Slider with Scroll', 'passwords-manager'); ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side_review colbox">
                                    <a href="https://wordpress.org/plugins/show-state-field-for-woocommerce/" target="_blank"><img src="<?php echo PWDMS_IMG . 'show-state-field-for-woocommerce.jpg' ?>" /></a>
                                    <p class="mb-0 p-3"><a href="https://wordpress.org/plugins/show-state-field-for-woocommerce/" target="_blank"><?php echo __('Show State Field for WooCommerce', 'passwords-manager'); ?></a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mid-row">
                    <div class="col-12 p-0">
                        <h6 class="px-0 mb-3 sec_heading"><?php echo __('Try World Class Hosting Services', 'passwords-manager'); ?></h6>

                        <div class="owl-carousel owl-theme " id="kinsta_banners">
                            <div class="item">
                                <a href="https://kinsta.com/?kaid=NSFASHTZZXQG" target="_blank">
                                    <img src="<?php echo PWDMS_IMG . 'kinsta1.png' ?>" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://kinsta.com/?kaid=NSFASHTZZXQG" target="_blank">
                                    <img src="<?php echo PWDMS_IMG . 'kinsta2.jpg' ?>" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://kinsta.com/?kaid=NSFASHTZZXQG" target="_blank">
                                    <img src="<?php echo PWDMS_IMG . 'kinsta3.png' ?>" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://kinsta.com/?kaid=NSFASHTZZXQG" target="_blank">
                                    <img src="<?php echo PWDMS_IMG . 'kinsta4.png' ?>" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://kinsta.com/?kaid=NSFASHTZZXQG" target="_blank">
                                    <img src="<?php echo PWDMS_IMG . 'kinsta5.png' ?>" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://kinsta.com/?kaid=NSFASHTZZXQG" target="_blank">
                                    <img src="<?php echo PWDMS_IMG . 'kinsta6.jpg' ?>" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://kinsta.com/?kaid=NSFASHTZZXQG" target="_blank">
                                    <img src="<?php echo PWDMS_IMG . 'kinsta7.jpg' ?>" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://kinsta.com/?kaid=NSFASHTZZXQG" target="_blank">
                                    <img src="<?php echo PWDMS_IMG . 'kinsta8.png' ?>" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>