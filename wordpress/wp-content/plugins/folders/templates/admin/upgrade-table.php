<?php
/**
 * Folders Upgrade to Pro
 *
 * @author  : Premio <contact@premio.io>
 * @license : GPL2
 * */

if (! defined('ABSPATH')) {
    exit;
}
$proURL = "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=";
?>

<div class="modal-upgrade upgrade-block" id="folder-modal">
    <div class="easy-modal-inner">
        <div class="container">
            <div class="pricing-table">
                <div class="price-title"><?php esc_html_e("Unlock All Features", "folders") ?></div>
                <div class="pricing-table-header">
                    <div class="pricing-table-body">
                        <div class="pricing-table-content first active" data-option="1_year">
                            <div class="year-col"><?php esc_html_e("1 Year", "folders") ?></div>
                            <div class="update-col"><?php esc_html_e("Updates & Support", "folders") ?></div>
                            <div class="pricing-discount-col"></div>
                        </div>
                        <div class="pricing-table-content second" data-option="2_year">
                            <div class="year-col"><?php esc_html_e("2 Years", "folders") ?></div>
                            <div class="update-col"><?php esc_html_e("Updates & Support", "folders") ?></div>
                            <div class="pricing-discount-col"><span><?php esc_html_e("32% off", "folders") ?> &#128526;</span></div>
                        </div>
                        <div class="pricing-table-content third" data-option="lifetime">
                            <div class="year-col"><?php esc_html_e("Lifetime", "folders") ?></div>
                            <div class="update-col"><?php esc_html_e("Updates & Support", "folders") ?></div>
                            <div class="pricing-discount-col"><span><?php esc_html_e("63% off", "folders") ?> &#129395;</span></div>
                        </div>
                    </div>
                </div>
                <div class="price-tables">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table basic-feature">
                                <div class="price-table-top">
                                    <div class="price-head">
                                        <div class="plan-name"><?php esc_html_e("Basic", "folders") ?></div>
                                        <div class="plan-price">$49<span><?php esc_html_e("/year", "folders") ?></span></div>
                                    </div>
                                    <div class="plan-center">
                                        <div class="price-permonth">Less than <b>$4.1</b>/mo · <b>Billed Annually</b></div>
                                        <div class="price-offer">Renewals for <b>25% off</b></div>
                                    </div>
                                </div>
                                <div class="price-table-middle">
                                    <ul>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("1 website", "folders") ?> <span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Use Folders on 1 domain", "folders") ?></span></a></li>
                                        <li><a href="javascript:;"><?php esc_html_e("Organize pages, posts, and media files", "folders") ?></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Unlimited subfolders (with multilevel support)", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Create unlimited folders, sub-folders with multi-level support", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip">
                                                <span class="html-tooltip dynamic last">
                                                    <?php esc_html_e("Dynamic Folders", "folders") ?><span class="has-tooltip">*</span>
                                                    <span class="tooltip-text" style="">
                                                        <?php esc_html_e("Automatically filter posts/pages/custom posts/media files based on author, date, file types & more", "folders") ?>
                                                        <img src="<?php echo esc_url(WCP_FOLDER_URL."assets/images/dynamic-folders.gif") ?>">
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Create folders for each post type. I.e. WooCommerce, Elementor", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Use folders with other plugins that have custom post type (e.g. Elementor templates, WooCommerce & more)", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip">
                                                <span class="html-tooltip last">
                                                    <?php esc_html_e("Metadata details on Media Library hover", "folders") ?> <span class="has-tooltip">*</span>
                                                    <span class="tooltip-text " style="">
                                                        <?php esc_html_e("Show useful metadata including title, size, type, date, dimension & more on hover.", "folders") ?>
                                                        <img src="<?php echo esc_url(WCP_FOLDER_URL."assets/images/folders-media.gif") ?>">
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Clean unused media files from your Media Library", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("DMedia Cleaner will first analyze your whole WordPress and show you a list of unused media files for you to go through and delete them", "folders") ?></span></a></li>
                                        <li class="on-screen-pos"><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Directly upload folders with all its content", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Upload a folder (all its content within the folder) directly", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Sort folders based on the date", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Sort folders based on the creation date of the folders", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Replace media for all file types and update file names from WordPress titles", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Replace all types of media files including PDF/SVG/ZIP/DOCX/XSLX & more. While replacing compare the two files side by side", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Advanced Media Replacements", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Replace media files when uploading and update all references in the database, change dates, organize by newer date & more without hurting your SEO", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("User access restriction", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Restrict users within their own folders only (restrict Dynamic Folder access as well)", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Bookmark, lock & duplicate folders", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Bookmark, lock/unlock or duplicate folders for faster & easier access to your favorite folders", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Move files to trash before permanently removing", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Before deleting files permanently, move them to trash to reduce accidental deletion", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Customize folder styles with fonts, custom colors & more", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Customize folders with your preferred colors, font size, font family & more", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Download folders as ZIP", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Download all contents of a folder as a ZIP", "folders") ?></span></a></li>
                                    </ul>
                                </div>
                                <div class="price-table-bottom">
                                    <div class="custom-dd">
                                        <select class="multiple-options">
                                            <option data-per-month="4.1" data-option="1_year" data-header="Renewals for 25% off" data-price="49" value="<?php echo esc_url($proURL) ?>37">Updates &amp; support for 1 year</option>
                                            <option data-per-month="2.9" data-option="2_year" data-header="For 2 years" data-price="69" value="<?php echo esc_url($proURL) ?>38">Updates &amp; support for 2 years</option>
                                            <option data-per-month="0" data-option="lifetime" data-header="For lifetime" data-price="149" value="<?php echo esc_url($proURL) ?>39">Updates &amp; support for lifetime</option>
                                        </select>
                                    </div>
                                    <a class="cart-link" target="_blank" href="<?php echo esc_url($proURL) ?>37"><?php esc_html_e("Buy now", "folders") ?></a>
                                </div>
                                <div class="bottom-position"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table plus-feature">
                                <div class="price-table-top">
                                    <div class="price-head">
                                        <div class="plan-name"><?php esc_html_e("Plus", "folders") ?></div>
                                        <div class="plan-price">$109<span><?php esc_html_e("/year", "folders") ?></span></div>
                                    </div>
                                    <div class="plan-center">
                                        <div class="price-permonth">Less than <b>$9.1</b>/mo · <b>Billed Annually</b></div>
                                        <div class="price-offer">Renewals for <b>25% off</b></div>
                                    </div>
                                </div>
                                <div class="price-table-middle">
                                    <ul>
                                        <li><a href="javascript:;" class="cus-tooltip">5 website <span class="has-tooltip">*</span><span class="tooltip__content">Use Folders on 5 domains</span></a></li>
                                        <li><a href="javascript:;"><?php esc_html_e("Organize pages, posts, and media files", "folders") ?></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Unlimited subfolders (with multilevel support)", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Create unlimited folders, sub-folders with multi-level support", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip">
                                                <span class="html-tooltip dynamic last">
                                                    <?php esc_html_e("Dynamic Folders", "folders") ?><span class="has-tooltip">*</span>
                                                    <span class="tooltip-text top" style="">
                                                        <?php esc_html_e("Automatically filter posts/pages/custom posts/media files based on author, date, file types & more", "folders") ?>
                                                        <img src="<?php echo esc_url(WCP_FOLDER_URL."assets/images/dynamic-folders.gif") ?>">
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Create folders for each post type. I.e. WooCommerce, Elementor", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Use folders with other plugins that have custom post type (e.g. Elementor templates, WooCommerce & more)", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip">
                                                <span class="html-tooltip last">
                                                    <?php esc_html_e("Metadata details on Media Library hover", "folders") ?> <span class="has-tooltip">*</span>
                                                    <span class="tooltip-text" style="">
                                                        <?php esc_html_e("Show useful metadata including title, size, type, date, dimension & more on hover.", "folders") ?>
                                                        <img src="<?php echo esc_url(WCP_FOLDER_URL."assets/images/folders-media.gif") ?>">
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Clean unused media files from your Media Library", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("DMedia Cleaner will first analyze your whole WordPress and show you a list of unused media files for you to go through and delete them", "folders") ?></span></a></li>
                                        <li class="on-screen-pos"><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Directly upload folders with all its content", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Upload a folder (all its content within the folder) directly", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Sort folders based on the date", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Sort folders based on the creation date of the folders", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Replace media for all file types and update file names from WordPress titles", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Replace all types of media files including PDF/SVG/ZIP/DOCX/XSLX & more. While replacing compare the two files side by side", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Advanced Media Replacements", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Replace media files when uploading and update all references in the database, change dates, organize by newer date & more without hurting your SEO", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("User access restriction", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Restrict users within their own folders only (restrict Dynamic Folder access as well)", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Bookmark, lock & duplicate folders", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Bookmark, lock/unlock or duplicate folders for faster & easier access to your favorite folders", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Move files to trash before permanently removing", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Before deleting files permanently, move them to trash to reduce accidental deletion", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Customize folder styles with fonts, custom colors & more", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Customize folders with your preferred colors, font size, font family & more", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Download folders as ZIP", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Download all contents of a folder as a ZIP", "folders") ?></span></a></li>
                                    </ul>
                                </div>
                                <div class="price-table-bottom">
                                    <div class="custom-dd">
                                        <select class="multiple-options">
                                            <option data-per-month="9.1" data-option="1_year" data-header="Renewals for 25% off" data-price="109" value="<?php echo esc_url($proURL) ?>40">Updates &amp; support for 1 year</option>
                                            <option data-per-month="7.1" data-option="2_year" data-header="For 2 years" data-price="169" value="<?php echo esc_url($proURL) ?>41">Updates &amp; support for 2 years</option>
                                            <option data-per-month="" data-option="lifetime" data-header="For lifetime" data-price="279" value="<?php echo esc_url($proURL) ?>42">Updates &amp; support for lifetime</option>
                                        </select>
                                    </div>
                                    <a class="cart-link" target="_blank" href="https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=40"><?php esc_html_e("Buy now", "folders") ?></a>
                                </div>
                                <div class="bottom-position"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table agency-feature">
                                <div class="price-table-top">
                                    <div class="price-head">
                                        <div class="plan-name">Agency</div>
                                        <div class="plan-price">$179<span>/year</span></div>
                                    </div>
                                    <div class="plan-center">
                                        <div class="price-permonth">Less than <b>$15</b>/mo · <b>Billed Annually</b></div>
                                        <div class="price-offer">Renewals for <b>25% off</b></div>
                                    </div>
                                </div>
                                <div class="price-table-middle">
                                    <ul>
                                        <li>
                                            <div class="website-package">
                                                <select class="multiple-web-options">
                                                    <option value="50_websites"><?php esc_html_e("50 websites", "folders") ?></option>
                                                    <option value="500_websites"><?php esc_html_e("500 websites", "folders") ?></option>
                                                    <option value="1000_websites"><?php esc_html_e("1000 websites", "folders") ?></option>
                                                </select>
                                            </div>
                                        </li>
                                        <li><a href="javascript:;"><?php esc_html_e("Organize pages, posts, and media files", "folders") ?></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Unlimited subfolders (with multilevel support)", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Create unlimited folders, sub-folders with multi-level support", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip">
                                                <span class="html-tooltip dynamic last">
                                                    <?php esc_html_e("Dynamic Folders", "folders") ?><span class="has-tooltip">*</span>
                                                    <span class="tooltip-text top" style="">
                                                        <?php esc_html_e("Automatically filter posts/pages/custom posts/media files based on author, date, file types & more", "folders") ?>
                                                        <img src="<?php echo esc_url(WCP_FOLDER_URL."assets/images/dynamic-folders.gif") ?>">
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Create folders for each post type. I.e. WooCommerce, Elementor", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Use folders with other plugins that have custom post type (e.g. Elementor templates, WooCommerce & more)", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip">
                                                <span class="html-tooltip last">
                                                    <?php esc_html_e("Metadata details on Media Library hover", "folders") ?> <span class="has-tooltip">*</span>
                                                    <span class="tooltip-text top" style="">
                                                        <?php esc_html_e("Show useful metadata including title, size, type, date, dimension & more on hover.", "folders") ?>
                                                        <img src="<?php echo esc_url(WCP_FOLDER_URL."assets/images/folders-media.gif") ?>">
                                                    </span>
                                                </span>
                                            </a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Clean unused media files from your Media Library", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("DMedia Cleaner will first analyze your whole WordPress and show you a list of unused media files for you to go through and delete them", "folders") ?></span></a></li>
                                        <li class="on-screen-pos"><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Directly upload folders with all its content", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Upload a folder (all its content within the folder) directly", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Sort folders based on the date", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Sort folders based on the creation date of the folders", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Replace media for all file types and update file names from WordPress titles", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Replace all types of media files including PDF/SVG/ZIP/DOCX/XSLX & more. While replacing compare the two files side by side", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Advanced Media Replacements", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Replace media files when uploading and update all references in the database, change dates, organize by newer date & more without hurting your SEO", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("User access restriction", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Restrict users within their own folders only (restrict Dynamic Folder access as well)", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Bookmark, lock & duplicate folders", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Bookmark, lock/unlock or duplicate folders for faster & easier access to your favorite folders", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Move files to trash before permanently removing", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Before deleting files permanently, move them to trash to reduce accidental deletion", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Customize folder styles with fonts, custom colors & more", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Customize folders with your preferred colors, font size, font family & more", "folders") ?></span></a></li>
                                        <li><a href="javascript:;" class="cus-tooltip"><?php esc_html_e("Download folders as ZIP", "folders") ?><span class="has-tooltip">*</span><span class="tooltip__content"><?php esc_html_e("Download all contents of a folder as a ZIP", "folders") ?></span></a></li>
                                    </ul>
                                </div>
                                <div class="price-table-bottom">
                                    <div class="custom-dd">
                                        <select class="multiple-options has-multiple-websites">
                                            <option data-per-month="15" data-option="1_year" data-header="Renewals for 25% off" data-price="179" value="<?php echo esc_url($proURL) ?>43">Updates &amp; support for 1 year</option>
                                            <option data-per-month="11.7" data-option="2_year" data-header="For 2 years" data-price="279" value="<?php echo esc_url($proURL) ?>44">Updates &amp; support for 2 years</option>
                                            <option data-per-month="" data-option="lifetime" data-header="For lifetime" data-price="479" value="<?php echo esc_url($proURL) ?>45">Updates &amp; support for lifetime</option>
                                        </select>
                                    </div>
                                    <a class="cart-link" target="_blank" href="https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=43"><?php esc_html_e("Buy now", "folders") ?></a>
                                </div>
                                <div class="bottom-position"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="text-center price-after">
                <p class="money-guaranteed"><span class="dashicons dashicons-yes"></span>
                    <?php esc_html_e("30 days money back guaranteed", 'folders'); ?>
                </p>
                <p class="money-guaranteed"><span class="dashicons dashicons-yes"></span>
                    <?php esc_html_e("The plugin will always keep working even if you don't renew your license", 'folders'); ?>
                </p>
                <div class="payments">
                    <img src="<?php echo esc_url(WCP_FOLDER_URL."assets/images/payment.png") ?>" alt="Payment" class="payment-img" />
                </div>
            </div>
            <div class="folder-testimonial-list">
    <div class="folder-testimonial">
        <div class="testimonial-image"> <img src="<?php echo esc_url(WCP_FOLDER_URL."assets/images/client-image.jpg") ?>"> </div>
        <div class="testimonial-data">
            <div class="testimonial-title"><?php esc_html_e("A brilliant solution!", 'folders'); ?></div>
            <div class="testimonial-desc"><?php esc_html_e("I’ve used other folder plug-ins for my WordPress media files, but Folders is better than any of them. An uncluttered interface, intuitive to use, allows drag-and-drop and allows subfolders: exactly what I needed in a media library folder plug-in. I can’t believe it’s free!", 'folders'); ?></div>
            <div class="testimonial-author"><?php esc_html_e("- Trevor Jordan", 'folders'); ?></div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
<script>
    (function (factory) {
        "use strict";
        if (typeof define === 'function' && define.amd) {
            define(['jquery'], factory);
        }
        else if(typeof module !== 'undefined' && module.exports) {
            module.exports = factory(require('jquery'));
        }
        else {
            factory(jQuery);
        }
    }(function ($, undefined) {
        var priceOptions = {
            "50_websites": {
                "1_year": {
                    "price": 179,
                    "per_month":15,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=43"
                },
                "2_year": {
                    "price": 279,
                    "per_month":11.7,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=44"
                },
                "lifetime": {
                    "price": 479,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=45"
                }
            },
            "500_websites": {
                "1_year": {
                    "price": 349,
                    "per_month":29.1,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=46"
                },
                "2_year": {
                    "price": 519,
                    "per_month":21.7,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=47"
                },
                "lifetime": {
                    "price": 869,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=48"
                }
            },
            "1000_websites": {
                "1_year": {
                    "price": 479,
                    "per_month":40,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=49"
                },
                "2_year": {
                    "price": 729,
                    "per_month":30.4,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=50"
                },
                "lifetime": {
                    "price": 1199,
                    "link": "https://go.premio.io/?edd_action=add_to_cart&download_id=687&edd_options[price_id]=51"
                }
            }
        };
        $(document).ready(function(){
            $(document).on("click", ".pricing-table-content", function(){
                if(!$(this).hasClass("active")) {
                    $(".pricing-table-content").removeClass("active");
                    $(this).addClass("active");
                    var datFor = $(this).data("option");
                    $(".multiple-options").each(function(){
                        $(this).find("option").prop("selected", false);
                        $(this).find("option[data-option='"+datFor+"']").prop("selected", true);
                        $(this).trigger("change");
                    })
                }
            });
            $(document).on("mouseover", ".html-tooltip-image.has-image", function(){
                if($(this).hasClass("has-image")) {
                    $(this).removeClass("has-image");
                    var imgURL = $(this).data("image");
                    console.log(imgURL);
                    $(this).find(".tooltip-text").append("<img src='"+imgURL+"' alt='Chaty' />");
                }
            });
            if($(".multiple-options").length) {
                $(".multiple-options").select2({
                    minimumResultsForSearch: -1
                });
            }
            if($(".multiple-web-options").length) {
                $(".multiple-web-options").select2({
                    minimumResultsForSearch: -1
                });
            }
            $(document).on("change", ".multiple-options", function(){
                priceText = $(this).find("option:selected").attr("data-header");
                thisValue = $(this).val();
                thisPrice = $(this).find("option:selected").attr("data-price");
                thisperMonth = $(this).find("option:selected").attr("data-per-month");
                if(!$(this).hasClass("has-multiple-websites")) {
                    $(this).closest(".price-table").find("a.cart-link").attr("href", thisValue);
                    $(this).closest(".price-table").find(".plan-price").text("$" + thisPrice);
                } else {
                    var webOption = $(".multiple-web-options").val();
                    var priceSettings = priceOptions[webOption];
                    var yearPlan = $(".multiple-options.has-multiple-websites option:selected").attr("data-option");
                    if(priceSettings[yearPlan] != undefined) {
                        priceSettings = priceSettings[yearPlan];
                        thisValue = priceSettings.link;
                        thisPrice = priceSettings.price;
                        thisperMonth = priceSettings.per_month;
                    }
                }
                thisOption = $(this).find("option:selected").attr("data-option");
                if(thisOption == "1_year") {
                    thisPrice = thisPrice+"<span>/year</span>";
                    per_month = "Less than <b>$" + thisperMonth + "</b>/mo · <b>Billed Annually</b>";
                    priceText = "Renewals for <b>25% off</b>";
                } else if(thisOption == "2_year") {
                    thisPrice = thisPrice+"<span>/2 years</span>";
                    per_month = "Less than <b>$" + thisperMonth + "</b>/mo · <b>Billed Annually</b>";
                    priceText = "Renewals for <b>25% off</b>";
                } else {
                    thisPrice = thisPrice+"<span>/lifetime</span>";
                    per_month = "<b>Best value</b>";
                    priceText = "For lifetime";
                }
                $(this).closest(".price-table").find("a.cart-link").attr("href", thisValue);
                $(this).closest(".price-table").find(".plan-price").html("$" + thisPrice);
                $(this).closest(".price-table").find(".price-offer").html(priceText);
                $(this).closest(".price-table").find(".price-permonth").html(per_month);
                if ( per_month == '' ) {
                    $(this).closest(".price-table").find(".price-permonth").hide();
                } else {
                    $(this).closest(".price-table").find(".price-permonth").show();
                }
            });

            $(document).on("change", ".multiple-web-options", function(){
                $(".multiple-options.has-multiple-websites").trigger("change");
            });

            if($(".multiple-options.has-multiple-websites").length) {
                $(".multiple-options.has-multiple-websites").trigger("change");
            }

            checkForPricingPos();
        });

        $(window).on("scroll", function(){
            checkForPricingPos();
        });

        $(window).on("resize", function(){
            checkForPricingPos();
        });

        function checkForPricingPos() {
            $(".bottom-position").each(function(){
                if($(this).closest(".price-table").find(".on-screen-pos").length) {
                    var toolPos = $(this).closest(".price-table").find(".on-screen-pos").offset().top - $(window).scrollTop() - $(window).height();
                    if(toolPos < 0) {
                        if ($(this).offset().top - $(window).scrollTop() - $(window).height() < -3) {
                            $(this).closest(".price-table").removeClass("is-fixed");
                            $(this).closest(".price-table").find(".price-table-bottom").prop("style", "");
                        } else {
                            $(this).closest(".price-table").addClass("is-fixed");
                            $(this).closest(".price-table").find(".price-table-bottom").css("top", ($(window).height() - 125) + "px");
                            $(this).closest(".price-table").find(".price-table-bottom").css("left", $(this).offset().left + "px");
                            $(this).closest(".price-table").find(".price-table-bottom").outerWidth($(this).closest(".price-table").width());
                        }
                    } else {
                        $(this).closest(".price-table").removeClass("is-fixed");
                        $(this).closest(".price-table").find(".price-table-bottom").prop("style", "");
                    }
                }
            });
            setTooltipPosition();
        }

        function setTooltipPosition() {
            if($(".html-tooltip:not(.no-position)").length) {
                $(".html-tooltip:not(.no-position)").each(function(){
                    if($(this).offset().top - $(window).scrollTop() > 540) {
                        $(this).addClass("top").removeClass("side").removeClass("bottom");
                        $(this).find(".tooltip-text").attr("style","");
                        $(this).find(".tooltip-text").removeClass("hide-arrow");
                    } else if($(window).height() - ($(this).offset().top - $(window).scrollTop()) > 460) {
                        $(this).addClass("bottom").removeClass("top").removeClass("side");
                        $(this).find(".tooltip-text").attr("style","");
                        $(this).find(".tooltip-text").removeClass("hide-arrow");
                    } else {
                        $(this).addClass("side").removeClass("top").removeClass("bottom");
                        if($(this).find(".tooltip-text").length) {
                            $(this).find(".tooltip-text").attr("style","");
                            $(this).find(".tooltip-text").removeClass("hide-arrow");

                            if($(this).find(".tooltip-text").offset().top - $(window).scrollTop() - 50 < 0) {
                                $(this).find(".tooltip-text").css("margin-top", Math.abs($(this).find(".tooltip-text").offset().top - $(window).scrollTop() - 50)+"px");
                                $(this).find(".tooltip-text").addClass("hide-arrow");
                            } else {
                                $(this).find(".tooltip-text").attr("style","");
                                if(($(this).find(".tooltip-text").offset().top + parseInt($(this).find(".tooltip-text").outerHeight()) - $(window).scrollTop() - $(window).height()) > 0) {
                                    $(this).find(".tooltip-text").css("margin-top", ((-1)*Math.abs($(this).find(".tooltip-text").offset().top + parseInt($(this).find(".tooltip-text").outerHeight()) - $(window).scrollTop() - $(window).height()) - 10)+"px");
                                    $(this).find(".tooltip-text").addClass("hide-arrow");
                                }
                            }
                        }
                    }
                });
            }
        }
    }));
</script>
