<?php
// title animation
$title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';"' : '';

// title animation
$content_animation = ($settings['content_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['content_animation'] . ';"' : '';


?>

<section id="<?php echo $id;?>" class="fp-section features feature-18">
    <div class="uk-section">
        <div class="uk-container">
            <div class="content-wrapper">
                <?php if($contents['section_title']) :;?>
                <div class="section-heading uk-text-<?php echo $settings['title_alignment'];?>">
                    <?php
                        echo op_heading(
                            $contents['section_title'],
                            $settings['heading_type'],
                            'uk-heading-primary uk-text-' . $settings['section_title_transformation'],
                            $title_animation
                        );
                    ?>
                    <p <?php echo $title_animation ? $title_animation . "delay: 400" : "";?>><?php echo $contents['section_desc'] ? $contents['section_desc'] : ''?></p>
                </div>
                <?php endif;?>
                <div <?php echo $settings['content_animation'] ? $content_animation . 'delay: 400' : '';?> class="uk-grid uk-margin-large-top" uk-grid>
                    <?php if($contents['online_courses']): ?>
                        <?php foreach($contents['online_courses'] as $single_course):?>
                            <div class="uk-width-1-3@s uk-height-match">
                                <article class="uk-article">
                                    <div class="img-wrapper">
                                        <a href="<?php echo $single_course['course_link'];?>">
                                            <img src="<?php echo $single_course['image'];?>" alt="<?php echo $single_course['title'];?>">
                                        </a>
                                    </div>
                                    <a href="<?php echo $single_course['course_link'];?>">
                                        <h1 class="uk-article-title uk-margin-remove-bottom uk-text-<?php echo $settings['blog_title_transformation'];?>"><?php echo $single_course['title'];?></h1>
                                    </a>
                                    <p class="uk-article-meta uk-margin-remove-top"><?php echo $single_course['author'];?></p>
                                    <p class="tx-details"><?php echo $single_course['desc']?></p>

                                    
                                    <ul class="meta-list">
                                        <li><?php echo esc_html($single_course['student_num'] > 1 ? $single_course['student_num'] . " Students" : $single_course['student_num'] . " Student") ?></li>
                                        <li><?php echo esc_html($single_course['rating'] . ' Star Rating') ?></li>
                                    </ul>
                                </article>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
                <div class="all-course-btn uk-text-center uk-margin-large-top">
                        <?php echo op_link($contents['courses_link'], 'uk-button uk-button-default');?>
                </div>
            </div>
        </div>
    </div>
</section>