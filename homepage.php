<?php 
/*
Template Name: Homepage
*/

    get_header(); 
$page_id = get_queried_object_id();

?>
    <?php 
        if(get_field('banner_enabledisable', $page_id)) :
    ?>
        <section class="hero hero--inverse" style="background: url(<?php the_field('banner_bg') ?>);">
            <div class="contain">
                <div class="hero__content text-left">
                    <h1 class="h6 mb-2 bar bar--bottom"><?php the_field('training_name') ?></h1>
                    <div class="sentence">
                        <h2 class="h2 mb-2">
                            <?php the_field('training_title_first') ?>
                            <div class="words words-1">
                                <?php 
                                    $first = get_field('first_slide');
                                    foreach ( $first as $f_slide ) :
                                ?>
                                <span><?php echo $f_slide['slide_text'] ?></span>
                                <?php endforeach; ?>
                            </div>
                            <br>
                            <?php the_field('training_title_second') ?>
                            <div class="words words-2">
                                <?php 
                                    $second_slide = get_field('training_title_second_slide');
                                    foreach ( $second_slide as $second ) :
                                ?>
                                <span><?php echo $second['slide_text'] ?></span>
                                <?php endforeach; ?>
                            </div>
                        </h2>
                    </div>
                    <a class="button--primary" href="<?php the_field('banner_button_url') ?>" style="cursor: pointer;"><?php the_field('banner_button_text') ?></a>
                </div>
            </div>
        </section>
    <?php endif; ?>

        
        <section class="skills">
            <?php 
                if(get_field('clients_enabledisable', $page_id)):
            ?>
            <div class="contain contain--small text-center">
                <h6><?php the_field('clients_title') ?></h6>
                <div class="partners__business">
                    <?php 
                        $client_logo = get_field('clients_logo');
                        foreach ($client_logo as $c_logo )  :

                    ?>

                    <img class="partners__business--image" src="<?php echo $c_logo['client'] ?>">
                    <?php endforeach; ?>
                </div>
            </div>
            <hr>
            <?php endif; ?>

            <?php 
                if(get_field('skills_enabledisable', $page_id)):
            ?>
            <div class="contain contain--small text-center">
                <h2><?php the_field('skills_title') ?></h2>
                <p><?php the_field('skills_sub_title') ?></p>
                <div class="skills__content">
                    <?php 
                        $skills_i = get_field('skills_item');
                        foreach ($skills_i as $skills) :
                     ?>
                    <div class="skills__column">
                        <h6><?php echo $skills['skills_item_title']; ?></h6>
                        <?php 
                        foreach($skills['skills_items'] as $item){
                            echo '<div class="card skills__card">'. $item['sub_item'] .'</div>';
                        }
                        ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a class="button--primary lg center" href="<?php the_field('skill_button_url') ?>"><?php the_field('skill_button_text') ?></a>
            </div>
            <?php endif; ?>
        </section>
    

    <?php 
        if(get_field('training_enabledisable', $page_id)):
    ?>
        <section class="training bg-gradient-secondary text-center">
            <div class="contain">
                <h2 class="white"><?php the_field('traning_section_title'); ?></h2>
                <div class="training__cards">
                    <?php 
                        $training_it = get_field('training_item');
                        foreach ($training_it as $training) :

                     ?>
                    <a id="ga-d3603c" class="card training__card" href="" style="cursor: pointer;">
                        <div class="icon bg-white">
                            <img alt="Online Training" src="<?php echo $training['icon']; ?>">
                        </div>
                        <div class="training__content">
                            <h3 class="blue text-center"><?php echo $training['title']; ?></h3>
                            <p class="training__content--description"><?php echo $training['content']; ?></p>
                            <ul class="checks text-left">
                                <?php 
                                    foreach($training['training_course'] as $course){
                                        echo '<li>'. $course['trainnig_course_text'] .'</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="text-only text-center cta"><?php echo $training['bottom_text']; ?></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php 
        if(get_field('demo_enabledisable', $page_id)):
    ?>
        <section class="demo" id="demo">
            <div class="contain">
                <h2 class="blue text-center"><?php the_field('demo_section_title'); ?></h2>
                <p class="legible center text-center"><?php the_field('demo_section_content'); ?></p>
                <a id="ga-3e7753" class="card demo__card" href="<?php the_field('demo_item_url'); ?>">
                    <header style="background: url(<?php the_field('demo_item_bg'); ?>) 0 0 no-repeat;">
                        <h4 class="text-center light white"><?php the_field('demo_item_title'); ?></h4>
                    </header>
                    <div class="demo__card--content">
                        <p class="small"><?php the_field('demo_item_content'); ?></p>
                        <p class="text-only mb-0"><?php the_field('demo_item_button_text'); ?><img class="icon-middle" src="https://d125fmws0bore1.cloudfront.net/assets/pages/corporate-training/icon-arrow-right-blue-f57bd88d2c7d3682935cc4768a53ec5aa65f2b4db7e0006f95ed18ee5a9ad25f.svg" alt="Icon arrow right blue"></p>
                    </div>
                </a>
            </div>
        </section>
    <?php endif; ?>

    <?php 
        if(get_field('contact_enabledisable', $page_id)):
    ?>
        <section class="contact bg-gray" id="more-information">
            <div class="contain">
                <h2 class="text-center legible"><?php the_field('contact_section_title') ?></h2>
                <p class="center text-center legible"><?php the_field('contact_section_content') ?></p>
                <div class="contact__content">
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" tabindex="10" ajax="true"]'); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <?php 
        if(get_field('resources_enabledisable', $page_id)):
    ?>
        <section class="resources">
            <div class="contain">
                <h2 class="mb-2 text-center"><?php the_field('resources_section_title') ?></h2>
                <div class="cards_contain">
                    <?php 
                        $resources = get_field('resources_item');
                        foreach ($resources as $res ) :
                     ?>
                    <a id="ga-91b3e1" class="card resources__card" href="<?php echo $res['url'] ?>">
                        <h6 class="mb-half"><?php echo $res['title'] ?></h6>
                        <p class="mb-0"><?php echo $res['content'] ?></p>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php get_footer(); ?>