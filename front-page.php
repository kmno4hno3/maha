<?php get_header(); ?>

<div class="home-top">
  <div class="home-top-inner">
    <div class="title-text-wrap">
      <img src="<?php echo get_template_directory_uri(); ?>/img/title.png" alt="" class="title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/event-schedule.png" alt="" class="event-schedule">
      <div class="discription-box">
        <p class="description-first description">
          小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<span>完全版マハーバーラタ</span>の公演が決定！！
        </p>
        <p class="description-second description">
          アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
      </div>
      <a href="<?php echo esc_url(get_field('reserv')); ?>" class="conversion conversion-ticket">チケット予約サイトへ</a>
    </div>
  </div>
</div>

<div class="introduction">
  <div class="introduction-inner">
    <div class="container">
      <div class="heading-wrapper">
        <h2 class="heading">INTRODUCTION</h2>
        <h2 class="why-maha">なぜ今「マハーバーラタ」なのか？</h2>
      </div>
      <div class="text-wrapper">
        <p class="intro-description-first intro-description">
          「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
          それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
          平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
        </p>
        <p class="intro-description-second intro-description">
          現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
          神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。
          非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
        </p>
      </div>
    </div>
  </div>
</div>

<div class="youtube">
  <div class="youtube-inner">
    <div class="container">
      <iframe width="100%" height="450" src="<?php echo esc_url(get_field('youtube')); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>

<div class="news">
  <div class="news-inner">
    <div class="container">
      <div class="heading-wrapper">
        <h2 class="heading">NEWS</h2>
      </div>
      <a href="" class="conversion to-news">ニュース一覧へ</a>
      <div class="news-card-wrapper">

        <div class="news-card-top-warpper wrapper">
          <div class="news-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news-card-1.png" alt="">
            <div class="text-wrapper">
              <time class="post-day">2019.9.30</time>
              <h1 class="news-title">「完全版マハーバーラタ」2020年7月・東京公演！！</h1>
            </div>
          </div>

          <div class="news-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news-card-2.png" alt="">
            <div class="text-wrapper">
              <time class="post-day">2019.9.30</time>
              <h1 class="news-title">ニュースのタイトルが入ります。ニュースのタイトルが入ります。</h1>
            </div>
          </div>

          <div class="news-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news-card-3.png" alt="">
            <div class="text-wrapper">
              <time class="post-day">2019.9.30</time>
              <h1 class="news-title">ニュースのタイトルが入ります。ニュースのタイトルが入ります。</h1>
            </div>
          </div>
        </div>

        <div class="news-card-bottom-wrapper wrapper">
          <div class="news-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news-card-bottom.png" alt="">
            <div class="text-wrapper">
              <time class="post-day">2019.9.30</time>
              <h1 class="news-title">ニュースのタイトルが入ります。</h1>
            </div>
          </div>

          <div class="news-card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news-card-bottom.png" alt="">
            <div class="text-wrapper">
              <time class="post-day">2019.9.30</time>
              <h1 class="news-title">ニュースのタイトルが入ります。</h1>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="story">
  <div class="story-inner">
    <div class="container">
      <div class="heading-wrapper">
        <h2 class="heading">STORY</h2>
      </div>
      <div class="text-wrapper">
        <p class="story-description">
          マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
          世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
        </p>
      </div>
      <a href="" class="conversion more-read">もっと詳しく</a>
    </div>
  </div>
</div>

<div class="comments">
  <div class="comments-inner">
    <div class="container">
      <div class="heading-wrapper">
        <h2 class="heading">COMMENTS</h2>
        <h2 class="sub-text">舞台関係者のみならず各界著名人からコメントが届いています！</h2>
      </div>
      <div class="comments-wrapper">
        <div class="comments-text">
          <h3 class="name">京都佛立ミュージアム館長 <span>長松清潤</span></h3>
          <p class="comment">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
        </div>
      </div>
      <a href="" class="conversion more-read">もっと詳しく</a>
    </div>
  </div>
</div>

<div class="cast">
  <div class="cast-inner">
    <div class="container">
      <div class="heading-wrapper">
        <h2 class="heading">CAST</h2>
      </div>

      <div class="profile-wrapper">
        <div class="profile">
          <div class="profile-img-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/img/profile-image1.png" alt="">
          </div>
          <div class="text-wrapper">
            <p class="roll">作・演出・振付・構成</p>
            <p class="cast-name">小池博史</p>
            <p class="supplement"></p>
            <p class="cast-description">茨城県日立市出身。一橋大学卒業。
              演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。
              1982年「パパ・タラフマラ」設立。
              演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。
              3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。
              著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。</p>
          </div>
        </div>

        <div class="profile">
          <div class="profile-img-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/img/profile-image2.png" alt="">
          </div>
          <div class="text-wrapper">
            <p class="roll">出演</p>
            <p class="cast-name">白井さち子</p>
            <p class="supplement">(バレエ、コンテンポラリーダンス)</p>
            <p class="cast-description">7歳よりクラシックバレエを始める。
              82年より6年間橘バレエ学校に在籍。
              牧阿佐美に師事。
              日本女子体育短期大学舞踊コース卒。
              在籍中、太田順造にパントマイムを師事。
              89年よりパパ・タラフマラに参加。
              以降国内外の公演に出演。
              後身のパフォーマーのダンス指導にもあっている。
              パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。
              これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。
            </p>
          </div>
        </div>

        <div class="profile">
          <div class="profile-img-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/img/profile-image3.png" alt="">
          </div>
          <div class="text-wrapper">
            <p class="roll">出演</p>
            <p class="cast-name">小谷野哲郎</p>
            <p class="supplement">(バリ舞踏)</p>
            <p class="cast-description">東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。
              1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。
              学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。
              2006年、Asian Cultural Councilの助成によりアメリカに滞在。
              パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。</p>
          </div>
        </div>
      </div>

    </div>

    <div class="cast-profile-bg">
      <a href="" class="more-read-btn">もっと見る</a>
    </div>

  </div>
</div>

<div class="schedule">
  <div class="schedule-inner">
    <div class="container">
      <div class="schedule-wrapper">
        <div class="heading-wrapper">
          <h2 class="heading">SCHEDULE</h2>
        </div>
        <div class="text-wrapper">
          <div class="first-schedule schedule-line">
            <p class="schedule-text"><?php echo get_field('schedule1'); ?></p>
            <a href="<?php echo esc_url(get_field('reserv')); ?>">チケット予約受付中</a>
          </div>
          <div class="second-schedule schedule-line">
            <p class="schedule-text"><?php echo get_field('schedule2'); ?></p>
            <a href="<?php echo esc_url(get_field('reserv')); ?>">チケット予約受付中</a>
          </div>
          <div class="third-schedule schedule-line">
            <p class="schedule-text"><?php echo get_field('schedule3'); ?></p>
            <a href="<?php echo esc_url(get_field('reserv')); ?>">チケット予約受付中</a>
          </div>
          <div class="forth-schedule schedule-line">
            <p class="schedule-text"><?php echo get_field('schedule4'); ?></p>
            <a href="<?php echo esc_url(get_field('reserv')); ?>">チケット予約受付中</a>
          </div>
        </div>
      </div>
      <div class="btn-wrapper">
        <!-- <div class="btn-wrapper-inner"> -->
        <a href="" class="contact-btn">お問い合わせはこちら</a>
        <a href="<?php echo get_field('reserv'); ?>" class="conversion conversion-ticket">チケット予約サイトへ</a>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>