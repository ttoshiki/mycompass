<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MY_COMPASS
 */

get_header();
?>

	<!DOCTYPE html>
<html lang="ja">

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php wp_head(); ?>
</head>

<body>
  <div class="l-wrapper">
    <div class="l-inner">
      <header class="header" id="header">
        <nav class="header__nav -pc">
          <h1 class="header__logo">
            <a href="#header">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 299.71 38.81">
                <path class="cls-1"
                  d="M29.1.93,19,27.77,9.51.93H2.78L0,38.06H5.73l1.68-27,9.31,27h4L31,10.51l1.56,27.55h5.94L36,.93Zm150.53,0L169.5,27.77,160,.93h-6.73l-2.78,37.13h5.73l1.68-27,9.31,27h4l10.26-27.55L183,38.06H189L186.49.93ZM55.57,16.84,47.27.93H40.36l12,21.66V38.06H58.3V22.67L70.79.93H64Zm53.3,14.64s-4.15,2-11.69.86A10.34,10.34,0,0,1,90,26.12c-1.89-4.25-1.91-10,0-13.27,2.66-4.73,7.26-9.67,19.27-6l.49.15,1.49-5.3-.49-.13C103.44-.33,93.22-.82,86,7.74c-4,4.69-4.93,13-2.31,19.81,2.31,6,6.87,9.72,12.84,10.51a32.69,32.69,0,0,0,4.38.3,27.89,27.89,0,0,0,9.9-1.65l.44-.18-1.86-5.3Zm21-31c-10.39,0-17.37,7.62-17.37,19,0,11.62,7,19.42,17.37,19.42,8.36,0,16.82-6.59,16.82-19.19C146.66,10.77,142.25.43,129.84.43Zm10.69,19.19c0,5.8-3.4,14-11,14C124.34,33.59,118.7,29,118.7,19c0-6.53,4.46-13.8,10.87-13.8C138.22,5.17,140.53,14.25,140.53,19.62ZM216.15,4.31c-6-5.92-19.91-3.48-20.5-3.37l-.41.08V38.07h5.6V23.62A35,35,0,0,0,212,22.37c3-.95,5.78-4.35,6.72-8.26a10,10,0,0,0-2.56-9.8Zm-3.52,7.55a5.41,5.41,0,0,1-1.83,4.31c-2.93,2.55-8.55,2.21-10.15,2V5.5c1.59-.16,7.21-.5,10.14,2.05a5.41,5.41,0,0,1,1.84,4.31ZM228.69.93,215.74,38.06h6.59L226,26.71H237.9l3.76,11.35H248L235.21.93Zm7.47,20.55h-8.49l4.18-13Zm30.27-3.82c-.36-.18-.78-.37-1.23-.58-2.88-1.35-7.24-3.38-8-6.23a4,4,0,0,1,.73-3.42C261,2.68,269.58,6.91,269.67,7l.49.25,1.95-4.92-.45-.19c-3-1.23-10.82-4.48-17.26.91a8.84,8.84,0,0,0-3.34,8.29,11.16,11.16,0,0,0,6.67,8.38c5.4,2.27,8.45,4.59,9.34,7.09a5,5,0,0,1-.42,4.1c-3.8,4.81-14,.45-14.13.4l-.45-.2L249.83,36l.42.22a24.47,24.47,0,0,0,10.36,2.56,14.82,14.82,0,0,0,8.72-2.64c3-3,4.34-6.51,3.78-10a11.84,11.84,0,0,0-6.68-8.46Zm33.16,8.47a11.78,11.78,0,0,0-6.67-8.46c-.36-.18-.78-.37-1.23-.58-2.88-1.35-7.24-3.38-8-6.22a4,4,0,0,1,.73-3.42c3.13-4.75,11.69-.52,11.78-.47l.49.25,2-4.92-.45-.19c-3-1.23-10.82-4.49-17.26.91a8.84,8.84,0,0,0-3.34,8.29,11.16,11.16,0,0,0,6.67,8.38c5.4,2.27,8.45,4.59,9.34,7.09a5,5,0,0,1-.42,4.1c-3.8,4.82-14,.45-14.13.4l-.45-.2L276.32,36l.42.22a24.47,24.47,0,0,0,10.36,2.56,14.82,14.82,0,0,0,8.72-2.64C298.81,33.17,300.15,29.62,299.59,26.13Z" />
              </svg>
            </a>
          </h1>
          <ul class="header__navList">
            <li class="header__navItem">
              <a href="#sec-curriculum" class="header__navLink">カリキュラム</a>
            </li>
            <li class="header__navItem">
              <a href="#sec-voice" class="header__navLink">受講生の紹介</a>
            </li>
            <li class="header__navItem">
              <a href="#sec-get" class="header__navLink">得られること</a>
            </li>
            <li class="header__navItem">
              <a href="#sec-course" class="header__navLink">概要</a>
            </li>
          </ul>
        </nav>
        <nav class="header__nav -sp">
          <h1 class="header__logo">
            <a href="#header">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 299.71 38.81">
                <path class="cls-1"
                  d="M29.1.93,19,27.77,9.51.93H2.78L0,38.06H5.73l1.68-27,9.31,27h4L31,10.51l1.56,27.55h5.94L36,.93Zm150.53,0L169.5,27.77,160,.93h-6.73l-2.78,37.13h5.73l1.68-27,9.31,27h4l10.26-27.55L183,38.06H189L186.49.93ZM55.57,16.84,47.27.93H40.36l12,21.66V38.06H58.3V22.67L70.79.93H64Zm53.3,14.64s-4.15,2-11.69.86A10.34,10.34,0,0,1,90,26.12c-1.89-4.25-1.91-10,0-13.27,2.66-4.73,7.26-9.67,19.27-6l.49.15,1.49-5.3-.49-.13C103.44-.33,93.22-.82,86,7.74c-4,4.69-4.93,13-2.31,19.81,2.31,6,6.87,9.72,12.84,10.51a32.69,32.69,0,0,0,4.38.3,27.89,27.89,0,0,0,9.9-1.65l.44-.18-1.86-5.3Zm21-31c-10.39,0-17.37,7.62-17.37,19,0,11.62,7,19.42,17.37,19.42,8.36,0,16.82-6.59,16.82-19.19C146.66,10.77,142.25.43,129.84.43Zm10.69,19.19c0,5.8-3.4,14-11,14C124.34,33.59,118.7,29,118.7,19c0-6.53,4.46-13.8,10.87-13.8C138.22,5.17,140.53,14.25,140.53,19.62ZM216.15,4.31c-6-5.92-19.91-3.48-20.5-3.37l-.41.08V38.07h5.6V23.62A35,35,0,0,0,212,22.37c3-.95,5.78-4.35,6.72-8.26a10,10,0,0,0-2.56-9.8Zm-3.52,7.55a5.41,5.41,0,0,1-1.83,4.31c-2.93,2.55-8.55,2.21-10.15,2V5.5c1.59-.16,7.21-.5,10.14,2.05a5.41,5.41,0,0,1,1.84,4.31ZM228.69.93,215.74,38.06h6.59L226,26.71H237.9l3.76,11.35H248L235.21.93Zm7.47,20.55h-8.49l4.18-13Zm30.27-3.82c-.36-.18-.78-.37-1.23-.58-2.88-1.35-7.24-3.38-8-6.23a4,4,0,0,1,.73-3.42C261,2.68,269.58,6.91,269.67,7l.49.25,1.95-4.92-.45-.19c-3-1.23-10.82-4.48-17.26.91a8.84,8.84,0,0,0-3.34,8.29,11.16,11.16,0,0,0,6.67,8.38c5.4,2.27,8.45,4.59,9.34,7.09a5,5,0,0,1-.42,4.1c-3.8,4.81-14,.45-14.13.4l-.45-.2L249.83,36l.42.22a24.47,24.47,0,0,0,10.36,2.56,14.82,14.82,0,0,0,8.72-2.64c3-3,4.34-6.51,3.78-10a11.84,11.84,0,0,0-6.68-8.46Zm33.16,8.47a11.78,11.78,0,0,0-6.67-8.46c-.36-.18-.78-.37-1.23-.58-2.88-1.35-7.24-3.38-8-6.22a4,4,0,0,1,.73-3.42c3.13-4.75,11.69-.52,11.78-.47l.49.25,2-4.92-.45-.19c-3-1.23-10.82-4.49-17.26.91a8.84,8.84,0,0,0-3.34,8.29,11.16,11.16,0,0,0,6.67,8.38c5.4,2.27,8.45,4.59,9.34,7.09a5,5,0,0,1-.42,4.1c-3.8,4.82-14,.45-14.13.4l-.45-.2L276.32,36l.42.22a24.47,24.47,0,0,0,10.36,2.56,14.82,14.82,0,0,0,8.72-2.64C298.81,33.17,300.15,29.62,299.59,26.13Z" />
              </svg>
            </a>
          </h1>
          <div class="header__hammenu">
            <span class="header__trigger" href="#">
              <span></span>
              <span></span>
              <span></span>
            </span>
            <div class="header__hammenuWrapper">
              <div class="header__hammenuInner">
                <a href="#sec-curriculum" class="header__hammenuLink hammenuLink">カリキュラム</a>
                <a href="#sec-voice" class="header__hammenuLink hammenuLink">受講生の紹介</a>
                <a href="#sec-get" class="header__hammenuLink hammenuLink">得られること</a>
                <a href="#sec-course" class="header__hammenuLink hammenuLink">概要</a>
                <a href="#sec-form" class="header__hammenuConversion hammenuLink">無料カウンセリング</a>
                <a href="" class="header__hammenuConversion hammenuLink">お申し込み</a>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <aside class="fixedConversionArea">
        <a href="#sec-form" class="fixedConversionArea__link">無料カウンセリング</a><a href="" class="fixedConversionArea__link -secondary">お申し込み</a>
      </aside>
      <main>
        <div class="catch">
          <div class="catch__mainVisual">
            <picture class="catch__mainVisualPicture">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv-sp.webp" media="(max-width: 480px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv.webp" media="(min-width: 481px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv-sp.jpg" media="(max-width: 480px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv.jpg" alt="1人ではたどり着けない私になれる。">
            </picture>
          </div>
          <div class="catch__text">
            <h2 class="catch__copy">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv_catchcopy.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv_catchcopy.png" alt="１人ではたどり着けない 私になれる。">
              </picture>
            </h2>
            <span class="catch__lead">
              仕事もライフイベントも大切にしたい<br>
              女性のためのキャリア構築プログラム
            </span>
            <div class="catch__programNameWrapper">
              <span class="catch__programName">MYコンパス・キャリア</span>
            </div>
          </div>
        </div>
        <section class="overview">
          <div class="overview__lead">
            <strong class="overview__leadStrong">３年で３００名</strong>を超える<br class="-sp">女性たちの
            <div class="handWriting">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifecarrier.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifecarrier.png" alt="ライフキャリア">
              </picture>
            </div><br class="-sp">を変えてきた<br>
            MYコンパス・アカデミーを<br class="-sp">更にアップデート
          </div>
          <div class="overview__graph">
            <div class="overview__chartWrapper">
              <div class="overview__chartCaption -pie">
                <span class="overview__chartSpan">アカデミー参加者</span>
                <span class="overview__chartSpan -primary">満足度</span>
                <span class="overview__chartNum">
                  <strong class="overview__chartStrong">94</strong>
                  <span class="overview__chartUnit">%</span>
                </span>
              </div>
              <picture class="overview__chart -pie">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_circle.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_circle.png" alt="円グラフ">
              </picture>
            </div>
            <div class="overview__chartWrapper">
              <div class="overview__chartCaption -bar">
                <span class="overview__chartSpan">オンライン開催実績</span>
                <span class="overview__chartSpan -primary">３年以上！</span>
                <span class="overview__chartNum">
                  <strong class="overview__chartStrong">300</strong>
                  <span class="overview__chartUnit">名以上</span>
                </span>
              </div>
              <picture class="overview__chart -bar">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_bar_graph.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_bar_graph.png" alt="棒グラフ">
              </picture>
            </div>
          </div>
          <ul class="overview__pointList">
            <li class="overview__pointItem">
              <h3 class="overview__pointHeading">POINT.1</h3>
              <span class="overview__pointSpan">オンライン開催実績<strong class="overview__pointStrong">３年以上！</strong><br></span>
              <span class="overview__pointSpan">参加者<strong class="overview__pointStrong">満足度９４％！</strong></span>
            </li>
            <li class="overview__pointItem">
              <h3 class="overview__pointHeading">POINT.2</h3>
              <span class="overview__pointSpan"><strong class="overview__pointStrong">MYコンパスメソッドが本に！</strong><br></span>
              <span class="overview__pointSpan">時事通信社より発売中！</span>
            </li>
            <li class="overview__pointItem">
              <h3 class="overview__pointHeading">POINT.3</h3>
              <span class="overview__pointSpan">女性誌、WEBメディア、ラジオ他</span>
              <span class="overview__pointSpan"><strong class="overview__pointStrong">メディアでも多数掲載！</strong></span>
            </li>
          </ul>
          <div class="overview__subHeading">
            独自のメソッド、コミュニティ、<br class="-sp">キャリアコンサルティングで<br>
            <div class="handWriting">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_personality.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_personality.png" alt="本来の自分らしさ">
              </picture>
            </div>を取り戻し、<br>
            あなただけの<strong class="overview__subHeadingStrong">個性を活かした<br class="-sp">ライフキャリアをデザイン</strong>する<br>
            新プログラムはじまる。
          </div>
          <picture class="overview__logos">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logos-sp.webp" media="(max-width: 480px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logos.webp" media="(min-width: 481px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logos-sp.png" media="(max-width: 480px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos.png" alt="企業ロゴ" loading="lazy">
          </picture>
          <div class="overview__paragraphWrapper">
            <p class="overview__paragraph">多数のメディアで取り組みが<br class="-sp">紹介されました。</p>
          </div>
        </section>
        <section class="conversionArea">
          <picture class="conversionArea__backimage">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_back01-sp.webp" media="(max-width: 480px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_back01.webp" media="(min-width: 481px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_back01-sp.jpg" media="(max-width: 480px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_back01.jpg" alt="" loading="lazy">
          </picture>
          <h2 class="conversionArea__heading">無料カウンセリング・<br class="-sp">お申し込み</h2>
          <div class="conversionArea__links">
            <a href="" class="conversionArea__link -primary">
              <picture class="conversionArea__icon -pc">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_pc.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_pc.png" alt="無料カウンセリングアイコン">
              </picture>
              <span class="conversionArea__text">無料カウンセリングはこちら</span>
              <picture class="conversionArea__arrow">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.png" alt="矢印">
              </picture>
            </a>
            <a href="" class="conversionArea__link -secondary">
              <picture class="conversionArea__icon -click">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_click.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_click.png" alt="お申し込みアイコン">
              </picture>
              <span class="conversionArea__text">お申し込みはこちら</span>
              <picture class="conversionArea__arrow">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.png" alt="矢印">
              </picture>
            </a>
          </div>
        </section>
        <section class="voice" id="sec-voice">
          <h2 class="sectionHeading">
            これまで<strong class="sectionHeading__strong">300人を超える女性</strong>が<br>自分らしいライフキャリアへと<br class="-sp">シフト！
          </h2>
          <ul class="voice__list">
            <li class="voice__item">
              <div class="voice__person">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/voice_01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice_01.png" alt="白鳥舞" loading="lazy">
                </picture>
                <span class="voice__name">白鳥舞さん</span>
              </div>
              <div class="voice__text">
                <span class="voice__positionBefore">大手飲料メーカー マーケティング担当</span>
                <h3 class="voice__positionAfter">大手人材会社勤務 / 副業：キャリアブランディング、個人ビジネス＆複業サポート</h3>
                <h4 class="voice__profile">30代 / 慶應義塾大学 人間科学科 / アサヒ飲料株式会社　10年</h4>
                <p class="voice__paragraph">
                  初めての育休から希望の部署へ復帰後、協力的な夫や実家のサポートもあるのに、一日中タスクに追われ苦しい日々。「このままは嫌、でもどの道を選んでも大変としか思えず、やりたいことがない」・・・そんな中、プログラムに参加しました。衝撃的だったのは、頭で考える理想と心が感じている理想との大きなギャップ。本当は求めていないことをがんばろうとしていました。次第に、自分の本音を探り行動するようになりました。新しい夢を抱いて転職し、副業もスタート。本業と副業の相乗効果で、充実感にあふれた毎日です。
                </p>
              </div>
            </li>
            <li class="voice__item">
              <div class="voice__person">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/voice_02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice_02.png" alt="遠藤有夏" loading="lazy">
                </picture>
                <span class="voice__name">遠藤有夏さん</span>
              </div>
              <div class="voice__text">
                <span class="voice__positionBefore">中国・上海で駐在妻</span>
                <h3 class="voice__positionAfter">レイクサイドインテリアデザイン事務所代表</h3>
                <h4 class="voice__profile">30代 / お茶の水女子大学大学院 / 建築設備メーカー 設計・デザイン担当 ５年</h4>
                <p class="voice__paragraph">
                  建築業界で働いていましたが、結婚後退職。夫の転勤で海外含め5回の引越しをしました。「家族を支えるだけの人生？今キャリアを積まずに将来社会に復帰できるの？」と不安に駆られ、駐在中の上海からMYコンパスのプログラムに参加しました。プログラムの中で、理想の生活のイメージを膨らませながらワクワクしたのを覚えています。「自然の中で家族と豊かな時間を持ちつつ、やりがいのある仕事をしたい」という想いに気づき、帰国後インテリア・収納の事務所を開設。描いた理想が少しずつ現実に変わりつつある毎日です。
                </p>
              </div>
            </li>
            <li class="voice__item">
              <div class="voice__person">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/voice_03.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice_03.png" alt="柳澤聖子" loading="lazy">
                </picture>
                <span class="voice__name">柳澤聖子さん</span>
              </div>
              <div class="voice__text">
                <span class="voice__positionBefore">大手教育出版社 商品企画開発・編集担当</span>
                <h3 class="voice__positionAfter">フリーランス編集ライター</h3>
                <h4 class="voice__profile">30代 / 大阪大学 理学研究科 宇宙地球科学専攻 修了 / 株式会社ベネッセコーポレーション 編集者、16年</h4>
                <p class="voice__paragraph">
                  私がキャリアに悩みはじめたのは、第一子育休からの復帰後。仕事にやりがいを感じていたけれど、子育てと毎日の生活で精一杯の日々。異動、転職など様々な可能性があるのは分かっていても、こんな私に何ができるんだろう？と数年間悩んでいたとき、プログラムに参加しました。仲間や講師の方々からの励ましや共感の言葉がうれしく、かけがえのない時間でした。卒業後も自分の気持ちを整理し続けた結果、フリーランスの編集ライターになることを決意。今は仕事が好き！という気持ちも取り戻し、子育てと両立しやすいワークスタイルで満足しながら働けています。
                </p>
              </div>
            </li>
            <li class="voice__item">
              <div class="voice__person">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/voice_04.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice_04.png" alt="中西葉子" loading="lazy">
                </picture>
                <span class="voice__name">中西葉子さん</span>
              </div>
              <div class="voice__text">
                <span class="voice__positionBefore">第１子育休復職直後 ワーママ</span>
                <h3 class="voice__positionAfter">育休インターン</h3>
                <h4 class="voice__profile">30代 / 津田塾大学 / 大手電機メーカー・海外営業部　10年</h4>
                <p class="voice__paragraph">
                  第1子育休から復帰し、仕事と育児の両立に精一杯の日々。どちらを頑張っても満たされず、働くことの意味を模索している時に受講しました。1番の気付きは、自分がどれだけ「嫌なこと」に蓋をして過ごしていたか。「嫌」を手放すことで気持ちが軽くなり、ワクワクすることに力を注げるようになりました。今は2人目の育休を活用し、MYコンパス社でインターンをやらせていただきながら、未経験分野のWEBデザインを勉強中です。環境が変われば新たなモヤモヤも生まれますが、学んだ思考法と卒業生とのつながりを利用して前向きに活動しています！
                </p>
              </div>
            </li>
          </ul>
        </section>
        <section class="career">
          <div class="career__inner">
            <h2 class="sectionHeading">卒業生の経歴</h2>
            <ul class="career__list">
              <li class="career__item">大手金融機関から<br class="-pc">海外駐在妻4年を経て、再就職</li>
              <li class="career__item">外資営業キャリアを模索する<br class="-sp">育休中<br class="-pc">アートを学びライターデビュー</li>
              <li class="career__item">大手メーカー事業開発担当、<br class="-pc">育休中に育休コミュニティ立ち上げ</li>
              <li class="career__item">都心の商船会社広報から<br class="-pc">大好きな地元茨城ベンチャーへ転職</li>
              <li class="career__item">マザーハウス退職後、駐在帯同2カ国を経て<br class="-pc">母子帰国、フリー広報へ</li>
              <li class="career__item">マンネリの大手警備会社人事10年目<br>意欲をアピールし国際プロジェクト入り</li>
              <li class="career__item">大手通信会社 法務8年、将来の仕事と<br class="-pc">生活を試行錯誤、淡路島へ親子移住</li>
              <li class="career__item">2人目育休中に働き方を模索、<br class="-pc">芸大卒ピラティスインストラクターとして独立</li>
              <li class="career__item">忙しいだけのワーママ生活を脱し、<br class="-pc">新たな場で医薬研究開発者の道を邁進</li>
            </ul>
          </div>
        </section>
        <picture class="backimage">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_back02-sp.webp" media="(max-width: 480px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_back02.webp" media="(min-width: 481px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_back02-sp.jpg" media="(max-width: 480px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_back02.jpg" alt="" loading="lazy">
        </picture>
        <section class="get" id="sec-get">
          <h2 class="sectionHeading">
            MYコンパスアカデミーで<br>
            <strong class="sectionHeading__strong">得られる３つ</strong>のこと
          </h2>
          <picture class="get__handwriting">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_handwriting-sp.webp" media="(max-width: 480px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_handwriting.webp" media="(min-width: 481px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_handwriting-sp.png" media="(max-width: 480px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_handwriting.png" alt="#書く #話す #つながる">
          </picture>
          <ul class="get__list">
            <li class="get__item">
              <picture class="get__itemHandwriting -pc">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/writing.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/writing.png" alt="書く">
              </picture>
              <picture class="get__itemPicture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_writing-sp.webp" media="(max-width: 480px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_writing.webp" media="(min-width: 481px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_writing-sp.jpg" media="(max-width: 480px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_writing.jpg" alt="書く">
              </picture>
              <picture class="get__itemHandwriting -sp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/writing-sp.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/writing-sp.png" alt="書く">
              </picture>
              <div class="get__text">
                <h3 class="get__heading">テキストカウンセリング</h3>
                <p class="get__paragraph">
                  これまで300名の女性を自分らしいライフキャリアへと導いてきた独自のワークに沿って、抱えている悩みや不安、感情などを書き出すことができます。期間中、何度でも提出・キャリアコンサルタントへの質問ができ、ちょっとしたすきま時間でも取り組めます。書いたことが蓄積されるので、自分の変化を振り返ることも可能です。
                </p>
              </div>
            </li>
            <li class="get__item">
              <picture class="get__itemHandwriting -pc">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/speaking.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/speaking.png" alt="話す" loading="lazy">
              </picture>
              <picture class="get__itemPicture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_speaking-sp.webp" media="(max-width: 480px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_speaking.webp" media="(min-width: 481px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_speaking-sp.jpg" media="(max-width: 480px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_speaking.jpg" alt="話す" loading="lazy">
              </picture>
              <picture class="get__itemHandwriting -sp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/speaking-sp.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/speaking-sp.png" alt="話す" loading="lazy">
              </picture>
              <div class="get__text">
                <h3 class="get__heading">マンツーマンカウンセリング</h3>
                <p class="get__paragraph">
                  言葉にして書き出すのが苦手でも大丈夫。キャリアコンサルタントと1対1で、言語化しにくいモヤモヤとした感情や悩みを話して整理することができます。期間中全６回のマンツーマンカウンセリングを通じて、個性に合わせたサポートを適切なタイミングで受けることができます。
                </p>
              </div>
            </li>
            <li class="get__item">
              <picture class="get__itemHandwriting -pc">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/connecting.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connecting.png" alt="つながる" loading="lazy">
              </picture>
              <picture class="get__itemPicture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_connecting-sp.webp" media="(max-width: 480px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_connecting.webp" media="(min-width: 481px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_connecting-sp.jpg" media="(max-width: 480px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_connecting.jpg" alt="つながる" loading="lazy">
              </picture>
              <picture class="get__itemHandwriting -sp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/connecting-sp.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connecting-sp.png" alt="つながる" loading="lazy">
              </picture>
              <div class="get__text">
                <h3 class="get__heading">コミュニティカウンセリング</h3>
                <p class="get__paragraph">
                  オンラインコミュニティで国内外の仲間とつながりながら、より楽しく、より精度高く、自己理解を深めることができます。心理的安全を確保できる安心の環境にて、N対Nで相互に関わり合って様々な個性に触れることで、自分オリジナルの強みに気付くことができます。
                </p>
              </div>
            </li>
          </ul>
        </section>
        <section class="recommend">
          <h2 class="sectionHeading">こんな方に<strong class="sectionHeading__strong">オススメ</strong>です</h2>
          <ul class="recommend__list">
            <li class="recommend__item">
              <picture class="recommend__icon">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.png" alt="チェックボックスアイコン" loading="lazy">
              </picture>
              <span class="recommend__span">仕事も結婚も出産も、どれも諦めたくない</span>
            </li>
            <li class="recommend__item">
              <picture class="recommend__icon">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.png" alt="チェックボックスアイコン" loading="lazy">
              </picture>
              <span class="recommend__span">自分のやりたいことやキャリアの方向性を明確にしたい</span>
            </li>
            <li class="recommend__item">
              <picture class="recommend__icon">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.png" alt="チェックボックスアイコン" loading="lazy">
              </picture>
              <span class="recommend__span">今の働き方に漠然とした不安や物足りなさを感じている</span>
            </li>
            <li class="recommend__item">
              <picture class="recommend__icon">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.png" alt="チェックボックスアイコン" loading="lazy">
              </picture>
              <span class="recommend__span">自分一人で考えてきたが、煮詰まって進めずにいる方</span>
            </li>
            <li class="recommend__item">
              <picture class="recommend__icon">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_checkbox.png" alt="チェックボックスアイコン" loading="lazy">
              </picture>
              <span class="recommend__span">本来の自分らしさを取り戻し、本音で話せる仲間に出会いたい</span>
            </li>
          </ul>
        </section>
        <section class="loopslider">
          <div class="loopslider__wrapper">
            <div class="loopslider__images">
              <picture class="loopslider__picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider01.jpg" alt="スライダー写真" loading="lazy">
              </picture>
              <picture class="loopslider__picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider02.jpg" alt="スライダー写真" loading="lazy">
              </picture>
              <picture class="loopslider__picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider03.jpg" alt="スライダー写真" loading="lazy">
              </picture>
              <picture class="loopslider__picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider04.jpg" alt="スライダー写真" loading="lazy">
              </picture>
              <picture class="loopslider__picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider05.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider05.jpg" alt="スライダー写真" loading="lazy">
              </picture>
              <picture class="loopslider__picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider06.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider06.jpg" alt="スライダー写真" loading="lazy">
              </picture>
              <picture class="loopslider__picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider07.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider07.jpg" alt="スライダー写真" loading="lazy">
              </picture>
            </div>
          </div>
        </section>
        <!--/#loopslider-->
        <section class="curriculum" id="sec-curriculum">
          <h2 class="sectionHeading">カリキュラムと<strong class="sectionHeading__strong">受講の流れ</strong></h2>
          <div class="curriculum__lead">
            これまで300名の女性を変えてきた<br class="-sp">MYコンパス・アカデミーのカリキュラムを<br class="-sp">更に研ぎ澄ませ、<br>
            効果的に、効率的に
            <div class="handWriting">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/career.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/career.png" alt="キャリア構築" loading="lazy">
              </picture>
            </div>できる<br class="-sp">プログラムをご用意いたしました。
          </div>
          <picture class="curriculum__termHeader">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/3term-sp.webp" media="(max-width: 480px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/3term.webp" media="(min-width: 481px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/3term-sp.png" media="(max-width: 480px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3term.png" alt="受講の流れ" loading="lazy">
          </picture>
          <picture class="curriculum__termHeader">
          </picture>
          <div class="curriculum__term">
            <picture class="curriculum__termArrow -pc">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/term_arrow01.webp" media="(min-width: 481px)" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/term_arrow01.png" alt="" loading="lazy">
            </picture>
            <div class="curriculum__termInner">
              <span class="curriculum__termNum">TERM.1</span>
              <h3 class="curriculum__termHeading">自分を知る、個性を理解する</h3>
              <p class="curriculum__termParagraph">
                無意識のうちに抱えてしまっている思い込みやバイアスを自覚し、漠然とした不安や悩みを紐解いていきます。また、FFS診断（※）を活用して自分の強みや個性を理解し、自分についての理解を深めます。
              </p>
              <div class="curriculum__summary">
                <h4 class="curriculum__summaryHeading">プログラム内容</h4>
                <ul class="curriculum__summaryList">
                  <li class="curriculum__summaryItem">オリエンテーション</li>
                  <li class="curriculum__summaryItem">漠然とした不安や悩みを紐解き課題を明確にする</li>
                  <li class="curriculum__summaryItem">漠然とした不安や悩みを紐解き課題を明確にする</li>
                  <li class="curriculum__summaryItem">FFS診断で自分の強みや個性を理解する</li>
                </ul>
              </div>
              <small class="curriculum__caution">※FFS診断は、モントリオール大学
                国際ストレス研究所で小林恵智博士が「性格とストレス」の研究から生まれた理論で、この理論を活用することで個性や強みを理解することができます。（FFS理論の使用権を有する株式会社ヒューマンロジックと株式会社MYコンパスはパートナー契約を結んでいます。）</small>
            </div>
          </div>
          <div class="curriculum__term">
            <picture class="curriculum__termArrow -pc">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/term_arrow02.webp" media="(min-width: 481px)" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/term_arrow02.png" alt="" loading="lazy">
            </picture>
            <div class="curriculum__termInner">
              <span class="curriculum__termNum">TERM.2</span>
              <h3 class="curriculum__termHeading">ライフキャリアプランをデザインする</h3>
              <p class="curriculum__termParagraph">
                ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト。
              </p>
              <div class="curriculum__summary">
                <h4 class="curriculum__summaryHeading">プログラム内容</h4>
                <ul class="curriculum__summaryList">
                  <li class="curriculum__summaryItem">自分らしさを表現する</li>
                  <li class="curriculum__summaryItem">つくりたい未来を設定する</li>
                  <li class="curriculum__summaryItem">理想のライフスタイルを思い描く</li>
                  <li class="curriculum__summaryItem">MYコンパスを仮決定</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="curriculum__term">
            <picture class="curriculum__termArrow -pc">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/term_arrow03.webp" media="(min-width: 481px)" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/term_arrow03.png" alt="" loading="lazy">
            </picture>
            <div class="curriculum__termInner">
              <span class="curriculum__termNum">TERM.3</span>
              <h3 class="curriculum__termHeading">個性に合うスタイルで自走する</h3>
              <p class="curriculum__termParagraph">
                キャリアコンサルタントに２ヶ月間質問し放題のテキストカウンセリング、そして期間中全６回のマンツーマンカウンセリング、他メンバーの視点を活用できるコミュニティカウンセリングを通じて、自分への理解を徹底的に深め、自分オリジナルのライフキャリア実現に向けて無理なく楽しく行動を進めていきます。
              </p>
              <div class="curriculum__summary">
                <h4 class="curriculum__summaryHeading">修了後のサポート</h4>
                <p class="curriculum__summaryContents">
                  受講期間終了後、ご希望の方には卒業生限定コミュニティ「MYコンパス・ラボ」にご参加いただけます（月額3000円）。MYコンパスラボでは、各分野で活躍するアカデミー卒業生との交流や、ワークをもっと掘り下げて考えたりすることで、行動を加速、継続することができます。
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="developer">
          <div class="developer__text">
            <h2 class="sectionHeading">プログラム開発・監修者</h2>
            <div class="developer__contents">
              <div class="developer__profile">
                <div class="developer__nameWrapper">
                  <span class="developer__position">プログラム開発・監修者</span>
                  <span class="developer__name">岩橋ひかり</span>
                </div>
                <p class="developer__paragraph">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/h-iwahashi.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/h-iwahashi.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/h-iwahashi@2x.jpg 2x" alt="岩橋ひかり" loading="lazy">
            </div>
          </div>
        </section>
        <section class="consultant">
          <h2 class="sectionHeading">キャリアコンサルタント</h2>
          <ul class="consultant__list">
            <li class="consultant__item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-akatani.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/m-akatani.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/m-akatani@2x.jpg 2x" alt="赤谷麻愛"
                class="consultant__photo" loading="lazy">
              <div class="consultant__nameWrapper">
                <span class="consultant__position">キャリア<br>コンサルタント</span>
                <span class="consultant__name">赤谷麻愛</span>
              </div>
              <p class="consultant__paragraph">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </li>
            <li class="consultant__item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-kamata.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/s-kamata.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/s-kamata@2x.jpg 2x" alt="鎌田淑江"
                class="consultant__photo" loading="lazy">
              <div class="consultant__nameWrapper">
                <span class="consultant__position">キャリア<br>コンサルタント</span>
                <span class="consultant__name">鎌田淑江</span>
              </div>
              <p class="consultant__paragraph">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </li>
            <li class="consultant__item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-akatani.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/m-akatani.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/m-akatani@2x.jpg 2x" alt="赤谷麻愛"
                class="consultant__photo" loading="lazy">
              <div class="consultant__nameWrapper">
                <span class="consultant__position">キャリア<br>コンサルタント</span>
                <span class="consultant__name">川口まどか</span>
              </div>
              <p class="consultant__paragraph">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </li>
            <li class="consultant__item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-akatani.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/m-akatani.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/m-akatani@2x.jpg 2x" alt="赤谷麻愛"
                class="consultant__photo" loading="lazy">
              <div class="consultant__nameWrapper">
                <span class="consultant__position">キャリア<br>コンサルタント</span>
                <span class="consultant__name">赤谷麻愛</span>
              </div>
              <p class="consultant__paragraph">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </li>
            <li class="consultant__item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-kamata.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/s-kamata.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/s-kamata@2x.jpg 2x" alt="鎌田淑江"
                class="consultant__photo" loading="lazy">
              <div class="consultant__nameWrapper">
                <span class="consultant__position">キャリア<br>コンサルタント</span>
                <span class="consultant__name">鎌田淑江</span>
              </div>
              <p class="consultant__paragraph">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </li>
            <li class="consultant__item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-akatani.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/m-akatani.jpg, <?php echo get_template_directory_uri(); ?>/assets/img/m-akatani@2x.jpg 2x" alt="赤谷麻愛"
                class="consultant__photo" loading="lazy">
              <div class="consultant__nameWrapper">
                <span class="consultant__position">キャリア<br>コンサルタント</span>
                <span class="consultant__name">川口まどか</span>
              </div>
              <p class="consultant__paragraph">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </li>
          </ul>
        </section>
        <section class="course" id="sec-course">
          <h2 class="sectionHeading">講座のご案内</h2>
          <dl class="course__table">
            <div class="course__row">
              <dt>参加費</dt>
              <dd class="course__price">90,000円（税別）</dd>
            </div>
            <div class="course__row">
              <dt>お支払い方法</dt>
              <dd>銀行振込（一括のみ）もしくはPaypal（一括/2回払い）をお選びいただけます。なお、Paypalでのお支払には、別途手数料がかかります。</dd>
            </div>
            <div class="course__row">
              <dt>内　容</dt>
              <dd>
                <ul class="course__list -content">
                  <li class="course__item -hasStrong"><strong class="course__itemStrong">動画コンテンツ</strong>（全10本／1年間視聴可能）
                  </li>
                  <li class="course__item -hasStrong"><strong
                      class="course__itemStrong">サポートメッセージ</strong>（期間中毎日／メール・LINE）</li>
                  <li class="course__item -hasStrong"><strong
                      class="course__itemStrong">テキストカウンセリング</strong>（2ヶ月間／投稿・質問の回数制限なし）
                  </li>
                  <li class="course__item -hasStrong"><strong
                      class="course__itemStrong">マンツーマンカウンセリング</strong>（1回30分／期間中最大６回）</li>
                  <li class="course__item -hasStrong"><strong class="course__itemStrong">コミュニティカウンセリング</strong>（2ヶ月間）
                  </li>
                  <li class="course__item -hasStrong"><strong class="course__itemStrong">FFS診断受検</strong></li>
                </ul>
              </dd>
            </div>
            <div class="course__row">
              <dt>受講方法</dt>
              <dd>
                <ul class="course__list -content">
                  <li class="course__item">すべてオンラインでの行います</li>
                  <li class="course__item">
                    テキストカウンセリング、コミュニティカウンセリング<br>
                    →Facebookグループで行います（Facebookのアカウントが必要です）
                  </li>
                  <li class="course__item">
                    マンツーマンカウンセリング<br>
                    →ZOOMで行います
                  </li>
                </ul>
              </dd>
            </div>
          </dl>
        </section>
        <section class="flow">
          <h2 class="sectionHeading">受講までの流れ</h2>
          <ol class="flow__list">
            <li class="flow__item">
              <h3 class="flow__itemHeading">無料<br>カウンセリング</h3>
              <p class="flow__paragraph">ご参加にあたり、まず無料カウンセリング（個別相談会）へご参加ください。</p>
            </li>
            <li class="flow__item">
              <h3 class="flow__itemHeading">お申し込み<br>ご入金</h3>
              <p class="flow__paragraph">ご案内に沿ってお支払手続きをお願いいたします。分割払も可能です。</p>
            </li>
            <li class="flow__item">
              <h3 class="flow__itemHeading">事務局より<br>ご連絡</h3>
              <p class="flow__paragraph">ご入金確認後、受講準備についてメールでご案内をお送りします。</p>
            </li>
            <li class="flow__item">
              <h3 class="flow__itemHeading">受講にあたっての<br>準備</h3>
              <p class="flow__paragraph">受講生専用のFacebookコミュニティにて、受講の準備をお願いたします。</p>
            </li>
            <li class="flow__item">
              <h3 class="flow__itemHeading">受講<br>スタート</h3>
              <p class="flow__paragraph">ご自分の生活スタイルに合わせて、動画閲覧やワークを進めて頂きます。</p>
            </li>
          </ol>
        </section>
        <section class="faq">
          <h2 class="sectionHeading">よくあるご質問</h2>
          <ul class="faq__list">
            <li class="faq__item">
              <span class="faq__question"><span class="faq__questionInner">オンライン講座ですが、実際に会って話す機会はありますか？</span></span>
              <span class="faq__answer">
                <span
                  class="faq__answerInner">受講生限定の個別・グループカウンセリング、またオフ会等のイベントにて、岩橋ひかりはじめ、講師、卒業生や他の受講生と実際に会うことができます。これまで自主的に各地でのオフ会や、オンラインでの交流会の開催もあり、受講生同士かなり仲が深まっています。</span>
              </span>
            </li>
            <li class="faq__item">
              <span class="faq__question"><span
                  class="faq__questionInner">自分が何をしたいのか分からないのですが、参加することはできますか？</span></span>
              <span class="faq__answer">
                <span
                  class="faq__answerInner">もちろん大丈夫です。MYコンパスを明らかにしていく中で、自分が何をしたいのか分かるようになりますし、自分が何をしたいのか分からない状態からやりたいことを見つけ、実際に行動を始める方も多数います。ご安心ください。</span>
              </span>
            </li>
            <li class="faq__item">
              <span class="faq__question"><span class="faq__questionInner">週に1回出るワークの提出期限はありますか？</span></span>
              <span class="faq__answer">
                <span class="faq__answerInner">より効果的に受講いただくために、提出期日を設けています。<br>
                  期日に間に合わなかったとしても、開講期間中であればフィードバックは行います。</span>
              </span>
            </li>
            <li class="faq__item">
              <span class="faq__question"><span
                  class="faq__questionInner">子育て中で、仕事もしていて、時間の確保が難しいのですが参加することはできますか？</span></span>
              <span class="faq__answer">
                <span
                  class="faq__answerInner">受講生のほとんどが、仕事や子育てに励む方です。通勤時間中や家事をしながら動画を見る方がほとんどです。たくさん時間をかけることよりも、日常の中で数分でも自分のことを考える時間をつくることが大切です。<br>
                  受講をきっかけに、優先度の低いものや自分がやらなくても良いことを手放すことができたという受講生もいました。「時間を確保すること」からカリキュラムがスタートするので、ご安心ください。</span>
              </span>
            </li>
          </ul>
        </section>
        <section class="form" id="sec-form">
          <h2 class="form__heading">
            まずは、無料カウンセリングから<br class="-pc">はじめましょう。
          </h2>
          <h3 class="form__subHeading">オンライン無料カウンセリング <br class="-sp">予約フォーム</h3>
          <?php echo do_shortcode('[booking_package id=1]'); ?>
        </section>
      </main>


</html>

<?php
get_sidebar();
get_footer();
