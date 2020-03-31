


<footer id="<?php echo $id;?>" class="fp-section fp-auto-height footers footer-4">
    <div class="uk-section">
        <div class="uk-container uk-margin-auto">
            <div class="uk-grid uk-grid-match uk-margin-auto" uk-grid>
                <div class="uk-width-1-3@s uk-padding-remove">
                    <div class="footer-left">
                        <?php echo op_link($contents['footer_left_text'], 'op-button uk-text-left tg-border-remove'); ?>
                    </div>
                </div>
                <div class="uk-width-1-3@s uk-padding-remove">
                    <div class="footer-center uk-text-center">
                        <p><?php echo $contents['footer_center_text']?></p>
                    </div>
                </div>
                <div class="uk-width-1-3@s uk-padding-remove">
                    <div class="footer-right uk-text-right">
                        <ul class="uk-list tg-list-inline">
                            <?php if($contents['footer_right_label']):?>
                                <li><span class="list-label"><?php echo $contents['footer_right_label']?></span></li>
                            <?php endif;?>
                            <?php if($contents['social_shares']): ?>
                                <?php foreach($contents['social_shares'] as $single_share): ?>
                                    <li><a href="<?php echo $single_share['btn_link']?>"><span class="<?php echo $single_share['social_share']?>"></span></a></li>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>