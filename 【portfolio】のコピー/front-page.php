<?php get_header(); ?>

<main>

    <!-- MV -->
    <section class="mv container">

        <!-- 左側 -->
        <div class="mv-left">
            <video autoplay muted loop playsinline preload="auto" class="mv-video">
                <source src="<?php echo get_template_directory_uri(); ?>/img/movie.mov">
            </video>
        </div>

        <!-- 右側 -->
        <div class="mv-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/MV.png"alt="メイン">
        </div>

    </section>

    <!-- Concept -->

    <section class="concept container">

        <h1 class="section-title">Concept</h1>

        <div class="concept-wrapper">

            <article class="concept-card">

                <h2>Compassion<br>
                    寄り添うこと
                </h2>


                <p>クライアント様の想いや課題に寄り添い<br>
                    安心して相談できる関係作りを<br>
                    大切にしております。
                </p>

            </article>

            <article class="concept-card">

                <h2>Careful<br>
                    丁寧さ
                </h2>


                <p>細やかなコミュニケーションや<br>
                    迅速な対応を心がけ<br>
                    ひとつひとつ丁寧に制作します。
                </p>

            </article>


            <article class="concept-card">

                <h2>Creativity<br>
                    創造性
                </h2>

                <p>見る人に伝わりやすく<br>
                    印象に残るデザインを<br>
                    目指します。
                </p>
            </article>

        </div>

    </section>
    <!-- ABOUT -->

    <section class="about container">

        <h1 class="section-title">About</h1>

        <div class="about-wrapper">

            <div class="about-image">

                <img src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="ワタナベアヤカ">

            </div>

            <div class="about-text">

                <h2>Piyo / ワタナベアヤカ</h2>

                <p>1992年7月生まれ。徳島県徳島市出身。<br>
                    専門学校・短大を卒業後、地元を離れて就職。<br>
                    保育士やキャラクター雑貨の販売員、事務職と様々な経験を通して培った<br>
                    「気配り」「丁寧な対応」を活かし、Web制作に取り組んでおります。<br>
                    相手の想いを大切にしながら、伝わるデザインを目指します。
                </p>

                <div class="about-buttons">
                    <a href="#more" class="about-btn sub">More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="projects container" id="project">

        <h1 class="section-title">Projects</h1>

        <div class="projects-wrapper">

            <article class="project-card">

                <img src="<?php echo get_template_directory_uri(); ?>/img/original.PNG" alt="架空のフォトスタジオ">

                <h3>架空のフォトスタジオ</h3>

                <a href="#" class="detail-btn">詳細を見る</a>

            </article>

            <article class="project-card">

                <img src="<?php echo get_template_directory_uri(); ?>/img/GR.PNG" alt="TOYOTAイベント">

                <h3>TOYOTA GRヤリスカーイベント</h3>

                <a href="#" class="detail-btn">詳細を見る</a>

            </article>

            <article class="project-card">

                <img src="<?php echo get_template_directory_uri(); ?>/img/English.PNG"alt="親子英会話教室のHP">

                <h3>親子英会話教室のHP</h3>

                <a href="#" class="detail-btn">詳細を見る</a>

            </article>

        </div>

    </section>

    <section class="contact container" id="contact">

        <h1 class="section-title">Contact</h1>

        <p class="contact-text">
            ご覧いただきありがとうございます！<br>
            「こんなこと聞いていいのかな？」という段階でも、
            遠慮なくご相談ください☺︎
        </p>

        <a href="#" class="line-btn">
            公式LINEはこちら
        </a>

    </section>
</main>

<?php get_footer(); ?>