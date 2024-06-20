<?php
		get_header();
	?>
	<main id="primary" class="site-main">
		<article class="start">
			<section class="bg-start">
				<section class="bg-start-ellipses"">
					<img
						src="wp-content/themes/amirra/assets/images/index/bg_mask.svg?1"
						alt=""
					>
					<img
						src="wp-content/themes/amirra/assets/images/index/bg_mask_el1.svg?1" 
						alt=""
					>
				</section>
				<section class="bg-start-heros">
					<img 
                        src= "<?php echo get_field('start_picture_heros'); ?>"
						alt=""
					>
				</section>
			</section>
			<section class="start-content">
				<h1><?php echo get_field('title')?></h1>
                <div class="start-content-groups">
                    <?php 
                        $tags = get_field('tags');
                        for ($i = 0; $i < sizeof($tags); $i++) {
                            echo '<a class="start-content-groups-el" href="#">';
                            echo $tags[$i]["tag"];
                            echo '</a>';
                        };
                    ?>
                </div>
			</section>
			<button class="singUpButton buttonAnimation">Записаться на приём</button>
		</article>
		<article class="slides">
            <div class="slides-block">
                <div class="swiper-buttons">
                    <div class="swiper-button-prev button-prevSlide">
                        <img src="wp-content/themes/amirra/assets/images/index/swiper/arrow-left.svg" alt="">
                    </div>
                    <div class="swiper-button-next button-nextSlide">
                        <img src="wp-content/themes/amirra/assets/images/index/swiper/arrow-right.svg" alt=""> 
                    </div>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        $content = get_field('swiper-blocks');
                        foreach ($content as $value){
                            echo '<div class="swiper-slide slides-slide"><p>';
                            echo $value["header"] . '</p>';
                            echo '<p>' . $value["description"];
                            echo '</p></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
                    <!--В душе не ебу как сделать такие плавные переходы
                    между точками, потом-->
        </article>       
        <article class="services">
            <div class="services-title">
                <p>Наши услуги</p>
                <p>Мы понимаем, что вы чувствуете,<br>и можем помочь</p>
            </div>
            <div class="services-cards">
                <?php
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => -1,
                        // 'orderby' => 'date',
                        'order' => 'ASC'
                    );
                    $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="services-cards-card">
                        <div class="services-cards-card-title"> 
                            <? echo "<p>" . get_the_title() . "</p>" ?>
                            <a href= <?php echo get_post_permalink(); ?>>больше об услуге</a>
                        </div>
                        <div  class="services-cards-card-problems">
                            <?
                                $problems = get_field("services");
                                foreach ($problems as $problem){
                                    echo '<p>' . $problem["services-problems"] . '</p>';
                                }
                            ?>
                        </div>
                    </div>

                <?php wp_reset_postdata();
                endwhile ?>
                <? endif; ?>
                <div class="services-cards-card">
                    <div class="services-cards-lastCard-content">
                        <div>
                            <p>Запишитесь на бесплатную<br>консультацию</p>
                            <p>Мы поможем, если вы не знаете,<br> какая услуга вам подходит</p>
                        </div>
                        <button class="buttonAnimation">Записаться</button>
                    </div>
                    <div class="services-cards-lastCard-hero">
                        <img 
                            src="wp-content/themes/amirra/assets/images/index/problems/Hero.svg"
                            alt=""
                        >
                    </div>
                </div>
            </div>
        </article>     
        <article class="helpFor">
            <div class="helpFor-title">
                <div class="helpFor-title-people">
                    <img 
                        src="wp-content/themes/amirra/assets/images/index/helpFor/people.svg?1" 
                        alt=""
                    >
                </div>
                <div class="helpFor-title-header">
                    <p>В нашем центре работают<br>
                    специалисты с разными подходами<br>
                    и восприятием, которые помогают:</p>
                </div>
            </div>
            <div class="helpFor-groups">
                <div class="helpFor-groups-ellipsesArea">
                    <?php
                        $arr = get_field("helpforgroups");
                        foreach ($arr as $value){
                            echo '<div class="helpFor-groups-ellipsesArea-ellipse"><p>';
                            echo $value["title"];
                            echo '</p>';
                            echo '<img alt="" src=' . $value["picture"] . '></div>';
                        };
                    ?>
                </div>
                <div class="helpFor-groups-bg"></div>
            </div>
        </article>
        <article class="team">
            <div class="team-bg"></div>
            <div class="team-slogan">
                <?php
                    $teamSlogan = get_field("teamslogan");
                    echo "<p>" . $teamSlogan["preface"] . "</p>";
                ?>
                <div class="team-slogan-content">
                    <?php 
                        echo "<p>" . $teamSlogan["lefttext"] . "</p>";
                        echo '<img alt ="" src=' . $teamSlogan["sloganpicture"] . '>';
                        echo "<p>" . $teamSlogan["righttext"] . "</p>";
                    ?>
                </div>
            </div>
            <div class="team-content">
                <div class="team-content-tagsArea">
                    <p>Мы собрали консультирующих психологов различных 
                        направлений, чтобы каждый человек смог получить 
                        квалифицированную помощь и поддержку</p>
                    <div class="team-tagsArea-tags">
                        <?php
                            $teamTags = get_field("teamtags");
                            foreach ($teamTags as $tags) {
                                echo "<p>" . $tags["teamtag"] . "</p>";
                            }
                        ?>
                    </div>
                </div>  <!--team-content-tagsArea-->
                <div class="team-content-swiperArea">
                    <div class="swiper-buttons team-buttons">
                        <div class="swiper-button-prev button-prevEmployee">
                            <img src="wp-content/themes/amirra/assets/images/index/swiper/arrow-left.svg" alt="">
                        </div>
                        <div class="swiper-button-next button-nextEmployee">
                            <img src="wp-content/themes/amirra/assets/images/index/swiper/arrow-right.svg" alt=""> 
                        </div>
                    </div>
                    <div class="swiper team-employee">
                        <div class="swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'employee',
                                'posts_per_page' => -1,
                                // 'orderby' => 'date',
                                'order' => 'ASC'
                            );
                            $the_query = new WP_Query($args);
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php
                            $employee = get_field("employee");
                            if ($employee) {
                                foreach ($employee as $person) {
                                    ?>
                                    <div class="swiper-slide team-employee-card">
                                        <div class="team-employee-card-content">
                                            <img alt="" src="<?php echo $person["img"]; ?>">
                                            <div class="team-employee-card-content-caption">
                                                <p><?php echo $person['description']; ?></p>
                                                <p class="team-employee-card-content-caption-name"><?php echo get_the_title(); ?></p>
                                                <div class="team-employee-card-content-caption-data">
                                                    <div class="team-employee-card-content-caption-data-keyPairs">
                                                        <p>Стаж: <?php echo $person['experience']; ?></p>
                                                    </div>
                                                    <div class="team-employee-card-content-caption-data-keyPairs">
                                                        <p>Стоимость: <?php echo $person['price']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-employee-card-methodology">
                                            <p>Используемые методики</p>
                                            <div class="team-employee-card-methodology-elements">
                                                <?php foreach ($person['methodology'] as $methodology) { ?>
                                                    <p><?php echo $methodology['methodology_el']; ?>
                                                        <img src="wp-content/themes/amirra/assets/images/index/team/infoIco.svg?1" alt="">
                                                    </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="team-employee-card-popular">
                                            <p>Популярные запросы:</p>
                                            <div class="team-employee-card-popular-requests">
                                                <?php foreach ($person['popular'] as $popular) { ?>
                                                    <p><?php echo $popular['popular_el']; ?></p>
                                                <?php } ?>
                                            </div>
                                            <p>+ <?php echo count($person['popular']); ?> запросов</p>
                                        </div>
                                        <div class="team-employee-card-buttons">
                                            <a class="buttonAnimation" href=<? echo get_post_permalink(); ?> >Больше о специалисте</a>
                                            <button class="buttonAnimation">Записаться</button>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <?php wp_reset_postdata();
                            endwhile ?>
                            <? endif; ?>
                        </div>
                    </div>
                </div> <!--team-content-swiperArea-->
                <a class="team-content-allSpecialists" href="#">все специалисты</a>
            </div> <!--team-content-->
        </article>
        <article class="feedback">
            <div class="feedback-header">
                <p>Спасибо за доверие</p>
                <p>Люди, которым мы помогли найти свой путь и обрести душевное равновесие</p>
            </div>
            <div class="feedback-content">
                <div class="feedback-content-group">
                    <div class="swiper feedback-content-swiper">
                        <div class="swiper-wrapper">
                            <?php
                                $args = array(
                                    'post_type' => 'feedback',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'ASC'
                                );
                                $the_query = new WP_Query($args);
                                ?>

                            <? if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="swiper-slide feedback-content-el">
                                    <div class="feedback-content-el-textArea">
                                        <div class="feedback-content-el-textArea-text">
                                            <p> <?= get_field('username') ?></p>
                                            <p> <?= get_field('feedback') ?></p>
                                        </div>
                                        <div class="feedback-content-el-textArea-gradient"></div>
                                    </div>
                                    <a href=<?= get_post_permalink() ?>>читать отзыв в источнике</a>
                                </div>

                            <?php wp_reset_postdata();
                                endwhile ?>
                                <? endif; ?>
                        </div>
                    </div>
                    <div class="feedback-content-background"></div>
                </div>
                <div class="feedback-content-swiper-buttons">
                    <div class="swiper-button-prev button-prevFeedback">
                        <img src="wp-content/themes/amirra/assets/images/index/swiper/arrow-left.svg" alt="">
                    </div>
                    <div class="swiper-button-next button-nextFeedback">
                        <img src="wp-content/themes/amirra/assets/images/index/swiper/arrow-right.svg" alt=""> 
                    </div>
                </div>
            </div>
        </article>
        <article class="contactUs">
            <?php 
                $title = 'Не позволяйте проблемам взять верх над собой!';
                $text = 'Если вы чувствуете, что не справляетесь с проблемами самостоятельно, обратитесь к нам. Мы поможем найти выход из сложной ситуации и вернуться к полноценной жизни';
                $img = 'wp-content/themes/amirra/assets/images/index/contactUs/Hero.svg?1';
                get_template_part('contactForm',
                null, array('title' => $title, 'text' => $text, 'img' => $img)); 
            ?>
        </article>
        <article class="articles">
            <div class="articles-header">
                <p>Интересно почитать</p>
                <p>Пишем полезные статьи, которые помогут лучше понять себя и окружающих</p>
            </div>
            <div class="swiper articles-swiper">
                <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'articles',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    );
                    $the_query = new WP_Query($args);
                ?>
                <? if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="swiper-slide articles-swiper-element">
                            <p> <?= get_the_title() ?></p>
                            <div class="articles-swiper-element-info">
                                <a href= <?= get_post_permalink() ?> >читать статью</a>
                                <p> <?= get_field('date') ?></p>
                            </div>
                        </div>
                    <?php wp_reset_postdata();
                    endwhile ?>
                    <? endif; ?>
                </div>
            </div>
            <div class="articles-buttons">
                <div class="swiper-button-prev button-prevArticle">
                    <img src="wp-content/themes/amirra/assets/images/index/swiper/arrow-left.svg" alt="">
                </div>
                <div class="swiper-button-next button-nextArticle">
                    <img src="wp-content/themes/amirra/assets/images/index/swiper/arrow-right.svg" alt=""> 
                </div>
            </div>
        </article>
</main>
<?php get_footer(); ?>