
<footer id="<?php echo $id; ?>" class="fp-section fp-auto-height footers footer-2">
    <div class="uk-section">
        <div class="uk-container">
            <div class="content-wrapper">
                <div class="title-wrapper uk-text-<?php echo $settings['section_alignment'] ?>">
                <?php
echo op_heading(
    $contents['section_heading'],
    $settings['heading_type'],
    'uk-heading-primary footer-main-heading uk-margin-medium-bottom uk-text-' . $settings['title_transformation'],
    $title_animation
);
?>
                </div>
                <h2 class="sub-heading uk-text-<?php echo $settings['section_alignment'] ?>"><?php echo $contents['subheading'] ?></h2>
                <div class="footer-icon uk-text-center uk-margin-large-top">
                    <a href="<?php echo $contents['icon_url'] ?>"><span class="<?php echo $contents['footer_media'] ?>"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>