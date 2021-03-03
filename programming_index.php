<?php
require_once('common_config.php');
require_once('common_functions.php');
session_start();



$pdo = connectDb();


?>

<!DOCTYPE html>
<html lang="ja">
<head>

		<title>プログラミング | <?php echo SERVICE_NAME; ?></title>

    <?php include("./common_head_meta.php"); ?>

		<style>

		@media screen and (max-width: 3000px) {

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			#name{
				text-align: center;
				margin-top: 20px;
			}

			.list-style-5{
				font-size: 20px;
			}

			.slide_explanation{
				font-size: 15px;
			}

			#詳細ページを見る{
				margin-top: 10px;
				font-size: 12px;
				background-color: ;
			}



		#経歴を見る{
				font-size: 17px;
				background-color: ;
			}

			.video{
				font-size: 17px;
				font-weight: bolder;
			}

			.アプリ・サービス名{
				font-weight: bolder;
			}

			#英語タイトル{
				font-weight: bolder;
				font-size: 20px;
			}



			span.言語{
				color: white;
				font-weight: bold;
				background-color: #75eb7b;
				padding: 5px;
				font-size: 15px;
			}

			#123{
				color: blue;
				font-weight: bold;
				background-color: #75eb7b;
				padding: 5px;
				font-size: 15px;
			}

			.写真{
				border: 2px solid #00cc00;
			}





		}
		/*ipad 横幅*/
		@media screen and (max-width: 1024px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			#英語タイトル{
				font-size: 19px;
			}



		}

		/*ipad 縦幅*/
		@media screen and (max-width: 768px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }


			#英語タイトル{
				font-size: 19px;
			}

		}

		/*iphone 縦幅(横)*/
		@media screen and (max-width: 736px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

		}

		/*iphone 横幅(短)*/
		@media screen and (max-width: 414px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:block; }

			.slide_explanation{
				font-size: 8px;
			}

			#技術{
				font-size: 12px;
			}

			#英語タイトル{
				font-size: 16px;
			}

		}

		</style>

</head>


<body>

<?php include("./common_header_programming.php"); ?>

	<br><br><br><br>

	<!-- start slideshow-->
	<div class="container-fluid full-screen">



			<div class="row slider-fade">
					<div class="owl-carousel owl-theme width-100">
							<div class="text-center item bg-img" data-overlay-dark="7" data-background="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/slider/shutterstock_1449924503_629350657063.JPG">
									<div class="absolute-middle-center caption">
											<div class="overflow-hidden">
												<h3 class="alt-font font-size32 sm-font-size18 text-white no-margin">kazu works</h3>

													<h1 class="text-white" id="タイトル_KINGOFFOOTBALL"><span style="color:gold">PROGRAMMING</span></h1>
													<p id="サブタイトル_楽しくてうまくなるサッカースクール"><strong>ホームページ作成から<br class="br-携帯短" />Webサービス開発まで<br class="br-携帯短" />幅広く承ります。</strong></p>

													<p id="技術">PHP・HTML・CSS・JavaScript・SQL<br>クラウドサーバー構築(AWS)・Cronによる自動化<br>データベース連動のアプリ作成・レスポンシブデザイン</p>




													<a href="programming_index.php#Service_list" class="butn medium theme">
															<span class="alt-font">kazuのWebサービスを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
													</a>

											</div>
									</div>
							</div>









					</div>
			</div>
	</div>
	<!-- end slideshow-->


<br><br><br>

<!-- start about our passion section -->
<section id="プロフィール">
		<div class="container">

			<div class="section-heading">
					<h3 class="text-uppercase">Profile</h3>
					<p class="width-55 sm-width-75 xs-width-95 center-col">
						このサイト、「Kazu Portfolio」の作者、佐竹和明のプロフィールです。
					</p>
			</div>

				<div class="row">

						<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
							<div class="owl-carousel owl-theme text-center">
									<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/IMG_9101.JPG" alt="" /></div>
							</div>
						</div>



						<div class="col-lg-7 col-md-12">
								<div class="padding-70px-left md-padding-50px-left sm-no-padding">
										<div class="display-table-cell vertical-align-middle width-100">
												<h6>身につけたスキルが誰かの役に立てれば最高です。</h6>

												<p class="sm-width-100 xs-width-100">
													<strong>技術</strong><br>
													HTML CSS PHP SQL <br class="br-携帯短" />JavaScript JQuery<br>
													Bootstrap AWS CRON <br class="br-携帯短" />wordpress GitHub<br>
													Google-Analytics
												</p>

												<p class="sm-width-100 xs-width-100">
													<strong>できること</strong><br>
													企画 設計 デザイン <br class="br-携帯短" />プログラミング テスト<br>
													セキュリティ対策 <br class="br-携帯短" />サーバー構築 サービス運営
												</p>

												<p class="sm-width-100 xs-width-100">
													<strong>プログラミング学習</strong><br>
													SENSE SHARE <br class="br-携帯短" /><a href="https://senseshare.jp"target="_blank">フルスタックエンジニアマスター講座</a><br>
													SENSE SHARE <br class="br-携帯短" /><a href="	https://senseshare.jp/lp/?c=x8PC"target="_blank">個別スキルアップ講座</a><br>
													・コーディング／デバッグ編<br>
													・ユーザーインターフェース編<br>
													・データベース編<br>
													・サーバー/セキュリティ編<br>



												</p>


										</div>
								</div>
						</div>
				</div>
		</div>
</section>
<!-- end about our passion section -->

<!-- start about our passion section -->
<section class="bg-light-gray" id="リモートワーク">
		<div class="container">

			<div class="section-heading">
					<h3 class="text-uppercase">remote work</h3>

			</div>

				<div class="row">

						<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
							<div class="owl-carousel owl-theme text-center">
									<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/remote.JPG" alt="" /></div>
							</div>
						</div>


						<div class="col-lg-7 col-md-12">
								<div class="padding-70px-left md-padding-50px-left sm-no-padding">
										<div class="display-table-cell vertical-align-middle width-100">
												<h6>withコロナに対応できる制作スタイルを。</h6>

												<p>
													学習期間に作成した<br>全てのWebアプリやWebサービスは<br>全てリモートで作成しました。<br>
													(メンターの方とのメールのみです。<br>通話やZOOMなども全く使っていません。)<br>
													その経験を生かしてwithコロナに対応した<br>リモートワークにも対応できます。<br>
												</p>

										</div>
								</div>
						</div>
				</div>
		</div>
</section>
<!-- end about our passion section -->



	<!-- start project section -->
        <section id="Service_list">

            <div class="container">
                <div class="section-heading">
                    <h3>MY APPLICATION & SERVICE</h3>
                    <p class="width-55 sm-width-75 xs-width-95">
											オンラインのプログラミングスクールで<br class="br-携帯短" />少しずつスキルを高めながら<br>
											学習目的の簡単なモノから<br class="br-携帯短" />実用的なモノまで<br>
											複数のアプリやサービスを
											<br class="br-携帯短" />全て一人で開発してきました。
											<br>今後も便利なものを<br class="br-携帯短" />どんどん作っていきます。
										</p>
                </div>
            </div>

            <div class="container">

                <div class="row">

                    <!-- Start links -->
                    <div class="filtering col-sm-12 text-center">
                        <span data-filter='*' class="active">All</span>
												<span data-filter='.Webサービス'>Webサービス</span>
												<span data-filter='.Webアプリ'>Webアプリ</span>
                        <span data-filter='.ホームページ'>ホームページ</span>
												<span data-filter='.ランディングページ'>ランディングページ</span>
												<span data-filter='.ブログ'>ブログ</span>
												<span data-filter='.公開中'>公開中</span>
                    </div>
                    <!-- End links -->

                    <div class="gallery text-center width-100">

                        <div class="col-lg-4 col-md-6 margin-30px-bottom items Webサービス 公開中">
                            <div class="project-grid-style2">
                                <div class="project-details">
                                    <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/tabletorder.PNG" alt="" class="写真">
                                    <div class="portfolio-icon">
                                        <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/tabletorder.PNG"><i class="fas fa-search-plus"></i></a>
                                    </div>
                                    <div class="portfolio-post-border"></div>
                                </div>
                                <div class="portfolio-title">
																		<p>Webサービス</p>
																		<h4 class="アプリ・サービス名"id="英語タイトル">TABLET ORDER SYSTEM</h4>
                                </div>
																<a href="project_tablet_oreder_sysytem.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
                            <div class="project-grid-style2">
                                <div class="project-details">
                                    <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/maxtest2.JPG" alt="" class="写真">
                                    <div class="portfolio-icon">
                                        <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/maxtest2.JPG"><i class="fas fa-search-plus"></i></a>
                                    </div>
                                    <div class="portfolio-post-border"></div>
                                </div>
                                <div class="portfolio-title">
                                    <p>Webアプリ</p>
                                    <h4 class="アプリ・サービス名"id="英語タイトル">MAX TEST</h4>
                                </div>
																<a href="project_max_test.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
                            <div class="project-grid-style2">
                                <div class="project-details">
                                    <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/dietnavi.JPG" alt="" class="写真">
                                    <div class="portfolio-icon">
                                        <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/dietnavi.JPG"><i class="fas fa-search-plus"></i></a>
                                    </div>
                                    <div class="portfolio-post-border"></div>
                                </div>
                                <div class="portfolio-title">
                                    <p>Webアプリ</p>
                                    <h4 class="アプリ・サービス名"id="英語タイトル">diet navi</h4>
                                </div>
																<a href="project_diet_navi.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
                            <div class="project-grid-style2">
                                <div class="project-details">
                                    <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/videotag2.JPG" alt="" class="写真">
                                    <div class="portfolio-icon">
                                        <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/videotag2.JPG"><i class="fas fa-search-plus"></i></a>
                                    </div>
                                    <div class="portfolio-post-border"></div>
                                </div>
                                <div class="portfolio-title">
                                    <p>Webアプリ</p>
                                    <h4 class="アプリ・サービス名"id="英語タイトル">VIDEO TAG+</h4>
                                </div>
																<a href="project_video_tag.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margin-30px-bottom items Webサービス 公開中">
                            <div class="project-grid-style2">
                                <div class="project-details">
                                    <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/photosmile.PNG" alt="" class="写真">
                                    <div class="portfolio-icon">
                                        <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/photosmile.PNG"><i class="fas fa-search-plus"></i></a>
                                    </div>
                                    <div class="portfolio-post-border"></div>
                                </div>
                                <div class="portfolio-title">
                                    <p>Webサービス</p>
                                    <h4 class="アプリ・サービス名">動物写真 DE 大喜利王</h4>
                                </div>
																<a href="project_photo_smile.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margin-30px-bottom items ブログ 公開中">
                            <div class="project-grid-style2">
                                <div class="project-details">
                                    <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/powerwords.JPG" alt="" class="写真">
                                    <div class="portfolio-icon">
                                        <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/powerwords.JPG"><i class="fas fa-search-plus"></i></a>
                                    </div>
                                    <div class="portfolio-post-border"></div>
                                </div>
                                <div class="portfolio-title">
                                    <p>ブログ</p>
                                    <h4 class="アプリ・サービス名" id="英語タイトル">POWER WORDS</h4>
                                </div>
																<a href="project_power_words.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
                            <div class="project-grid-style2">
                                <div class="project-details">
                                    <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/24gym.JPG" alt="" class="写真">
                                    <div class="portfolio-icon">
                                        <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/24gym.JPG"><i class="fas fa-search-plus"></i></a>
                                    </div>
                                    <div class="portfolio-post-border"></div>
                                </div>
                                <div class="portfolio-title">
                                    <p>Webアプリ</p>
                                    <h4 class="アプリ・サービス名">24時間GYM予約</h4>
                                </div>
																<a href="project_24gym.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margin-30px-bottom items Webサービス 公開中">
                            <div class="project-grid-style2">
                                <div class="project-details">
                                    <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/4-create2.JPG" alt="" class="写真">
                                    <div class="portfolio-icon">
                                        <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/4-create2.JPG"><i class="fas fa-search-plus"></i></a>
                                    </div>
                                    <div class="portfolio-post-border"></div>
                                </div>
                                <div class="portfolio-title">
                                    <p>Webサービス</p>
                                    <h4 class="アプリ・サービス名">四択問題クリエイト</h4>
                                </div>
																<a href="project_4-create.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
                            </div>
                        </div>

												<div class="col-lg-4 col-md-6 margin-30px-bottom items ランディングページ 公開中">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/king_HP.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/king_HP.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>ランディングページ</p>
																		<h4 class="アプリ・サービス名">サッカースクール LP</h4>
																</div>
																<a href="project_king_hp.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>

												<div class="col-lg-4 col-md-6 margin-30px-bottom items ランディングページ 公開中">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/PT_HP.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/PT_HP.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>ランディングページ</p>
																		<h4 class="アプリ・サービス名">パーソナルトレーニング LP</h4>
																</div>
																<a href="project_pt_hp.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>

												<div class="col-lg-4 col-md-6 margin-30px-bottom items ホームページ 公開中">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/tabletorder_help.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/tabletorder_help.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>ホームページ</p>
																		<h4 class="アプリ・サービス名"id="英語タイトル">HELP SITE</h4>
																</div>
																<a href="project_tablet_help.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>

												<div class="col-lg-4 col-md-6 margin-30px-bottom items ホームページ 公開中">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/KAZU_PORTFOLIO" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/KAZU_PORTFOLIO.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>ホームページ</p>
																		<h4 class="アプリ・サービス名"id="英語タイトル">KAZU PORTFOLIO</h4>
																</div>
																<a href="project_kazu_portfolio.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>

												<div class="col-lg-4 col-md-6 margin-30px-bottom items ブログ 公開中">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/king_blog.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/king_blog.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>ブログ</p>
																		<h4 class="アプリ・サービス名">サッカースクール ブログ</h4>
																</div>
																<a href="project_king_blog.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>



												<div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/king_data_insert.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/king_data_insert.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>Webアプリ</p>
																		<h4 class="アプリ・サービス名">サッカースクール 業務効率アプリ</h4>
																</div>
																<a href="project_king_data.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>

												<div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/contentmaker.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/contentmaker.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>Webアプリ</p>
																		<h4 class="アプリ・サービス名"id="英語タイトル">CONTENTS MAKER AWS</h4>
																</div>
																<a href="project_contentsmaker.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>

												<div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/cl_data.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/cl_data.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>Webアプリ</p>
																		<h4 class="アプリ・サービス名">ＣＬ
																			 データ登録アプリ</h4>
																</div>
																<a href="project_cl_data.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>


												<div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/mykakugen.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/mykakugen.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>Webアプリ</p>
																		<h4 class="アプリ・サービス名">マイ格言</h4>
																</div>
																<a href="project_mykakugen.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>

												<div class="col-lg-4 col-md-6 margin-30px-bottom items Webアプリ">
														<div class="project-grid-style2">
																<div class="project-details">
																		<img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/reminder.JPG" alt="" class="写真">
																		<div class="portfolio-icon">
																				<a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/reminder.JPG"><i class="fas fa-search-plus"></i></a>
																		</div>
																		<div class="portfolio-post-border"></div>
																</div>
																<div class="portfolio-title">
																		<p>Webアプリ</p>
																		<h4 class="アプリ・サービス名">リマインダー</h4>
																</div>
																<a href="project_reminder.php" class="butn medium theme" id="詳細ページを見る">
																		<span class="alt-font">詳細ページを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
																</a>
														</div>
												</div>







                    </div>
                </div>

            </div>

        </section>
        <!-- end project section -->







<?php include("./common_footer.php"); ?>



    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

   <?php include("./common_script.php"); ?>

</body>
</html>
