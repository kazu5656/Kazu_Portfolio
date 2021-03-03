<?php
require_once('common_config.php');
require_once('common_functions.php');
session_start();



$pdo = connectDb();


?>

<!DOCTYPE html>
<html lang="ja">
<head>

		<title><?php echo SERVICE_NAME; ?></title>

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

			.写真{
				border: 2px solid #00cc00;
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

			#slide_explanation{
				font-size: 19px;
			}




		}
		/*ipad 横幅*/
		@media screen and (max-width: 1024px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			.feature-desc{
				font-size: 12px;
			}

			#slide_explanation{
				font-size: 14px;
			}

		}

		/*ipad 縦幅*/
		@media screen and (max-width: 768px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			.feature-desc{
				font-size: 10px;
			}

			.title{
				font-size: 17px;
			}

			#slide_explanation{
				font-size: 14px;
			}

		}

		/*iphone 縦幅(横)*/
		@media screen and (max-width: 736px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			.feature-desc{
				font-size: 14px;
			}

			.title{
				font-size: 17px;
			}

			#slide_explanation{
				font-size: 14px;
			}

		}

		/*iphone 横幅(短)*/
		@media screen and (max-width: 414px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:block; }


			.title{
				font-size: 21px;
			}

			#slide_explanation{
				font-size: 14px;
			}

			h3{
				font-size: 18px;
			}


		}

		</style>

</head>


<body>



	<?php include("./common_header_kazu_portfolio.php"); ?>




	<br><br><br><br>



	<!-- start slideshow-->
	<div class="container-fluid full-screen">
			<div class="row slider-fade">
					<div class="owl-carousel owl-theme width-100">
							<div class="text-center item bg-img" data-overlay-dark="7" data-background="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/slider/see1.JPG">
									<div class="absolute-middle-center caption">
											<div class="overflow-hidden">

													<h1 class="text-white"><span style="color:gold">Kazu Portfolio</span></h1>
													<p id="slide_explanation">プログラミング、<br class="br-携帯短" />パーソナルトレーニング、<br class="br-携帯短" />サッカースクール。<br>
														3つの活動で多くの人に貢献することを<br class="br-携帯短" />目標とする 佐竹和明 のポートフォリオです。</p>
													<a href="<?php echo SITE_URL; ?>#MYWORKS" class="butn medium theme">
															<span class="alt-font">3つの活動の詳細を見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
													</a>
											</div>
									</div>
							</div>

							<div class="text-center item bg-img" data-overlay-dark="6" data-background="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/slider/see2.JPG">
									<div class="absolute-middle-center caption">
											<div class="overflow-hidden">
													<h3 class="alt-font font-size32 sm-font-size18 text-white no-margin">My policy</h3>
													<h1 class="text-white">Challenge</h1>
													<p id="slide_explanation">謙虚な気持ちと<br class="br-携帯短" />チャレンジャー精神で<br class="br-携帯短" />努力し続けます。</p>
													<a href="<?php echo SITE_URL; ?>#プロフィール" class="butn medium theme">
															<span class="alt-font">プロフィールを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
													</a>
											</div>
									</div>
							</div>
							<div class="text-center item bg-img" data-overlay-dark="6" data-background="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/slider/see3.JPG">
									<div class="absolute-middle-center caption">
											<div class="overflow-hidden">
													<h3 class="alt-font font-size32 sm-font-size18 text-white no-margin">My policy</h3>
													<h1 class="text-white">Passion</h1>
													<p id="slide_explanation">強い情熱を持って<br class="br-携帯短" />全力で仕事に取り組みます。</p>
													<a href="<?php echo SITE_URL; ?>#プロフィール" class="butn medium theme">
															<span class="alt-font">プロフィールを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
													</a>
											</div>
									</div>
							</div>


							<div class="text-center item bg-img" data-overlay-dark="6" data-background="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/slider/see6.JPG">
									<div class="absolute-middle-center caption">
											<div class="overflow-hidden">
													<h3 class="alt-font font-size32 sm-font-size18 text-white no-margin">My policy</h3>
													<h1 class="text-white">Contribution</h1>
													<p id="slide_explanation">あなたの目標達成に<br class="br-携帯短" />少しでも貢献できたら嬉しいです。</p>
													<a href="<?php echo SITE_URL; ?>#プロフィール" class="butn medium theme">
															<span class="alt-font">プロフィールを見る</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
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
<section class="bg-light-gray" id="プロフィール">
		<div class="container">

			<div class="section-heading">
					<h3 class="text-uppercase">Profile</h3>
					<p class="width-55 sm-width-75 xs-width-95 center-col">
						このサイト、「<strong>Kazu Portfolio</strong>」の作者、<strong>佐竹和明</strong>のプロフィールです。

					</p>
			</div>

				<div class="row">

						<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
							<div class="owl-carousel owl-theme text-center">
									<div class="item"><img class="写真"src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/IMG_9101.JPG" alt="" /></div>
							</div>
						</div>



						<div class="col-lg-7 col-md-12">
								<div class="padding-70px-left md-padding-50px-left sm-no-padding">
										<div class="display-table-cell vertical-align-middle width-100">
												<h6>やりがいのある仕事で<br class="br-携帯短" />多くの人に貢献したい！！</h6>

												<p class="sm-width-85 xs-width-90">
													はじめまして！！<br>このポートフォリオの制作者の<br class="br-携帯短" /><strong>佐竹和明</strong>です。
													<br>私は2003年から<br class="br-携帯短" /><a href="https://www.s-re.jp/fukuoka-ohashi/"target="_blank">スポーツクラブルネサンス大橋</a>で<br>
													<strong>パーソナルトレーナー</strong>として<br class="br-携帯短" />活動しており<br>
													週末は自ら立ち上げた<br class="br-携帯短" /><strong>サッカースクール</strong>を運営しております。<br>
													そして2018年より<br class="br-携帯短" />自分のスキルの幅を広げ、<br class="br-携帯短" />様々な可能性を生み出し<br>
													<a href="">叶えたい目標</a>を達成するため<br class="br-携帯短" /><strong>プログラミング</strong>を学び始めました。<br>
													どうせプログラミングを学ぶなら<br class="br-携帯短" />幅広い実践的スキルを持つ<br>
													「<strong><a href="index.php#フルスタックエンジニアとは？">フルスタックエンジニア</a></strong>」を<br class="br-携帯短" />目指したいと思い<br>
													<strong>SENSE SHARE</strong> さんの<br class="br-携帯短" />オンラインスクールで
													<br><a href="https://senseshare.jp"target="_blank"><strong>フルスタックエンジニアマスター講座</strong></a>を<br class="br-携帯短" />受講してスキルを高めました。

												</p>

												<div class="width-65 xs-width-85">
														<ul class="list-style-5 margin-25px-bottom xs-margin-20px-bottom">
																<li>プログラミング</li>
																<li>パーソナルトレーニング</li>
																<li>サッカースクール</li>
														</ul>
												</div>

												<p class="sm-width-85 xs-width-90">
													2021年よりこの<strong>３つの活動で多くの人に貢献しながら自分自身も成長していきたい</strong>と思っています。
													各活動に興味がある方は<strong><a href="<?php echo SITE_URL; ?>#MYWORKS">MY WORKS</a></strong>の各詳細ページへのリンクからご覧ください。
												</p>



										</div>
								</div>
						</div>
				</div>
		</div>
</section>
<!-- end about our passion section -->




	<!-- start about us section -->
	<section class="padding-40px-bottom sm-padding-20px-bottom"id="MYWORKS">

			<div class="container" >

					<div class="section-heading">
							<h3 class="text-uppercase">MY WORKS</h3>
					</div>

					<div class="row">


						<!--start item-->
						<div class="col-md-4">
								<div class="feature-box-02">
										<div class="img-box"><img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/programming2.jpg" alt="" /></div>
										<div class="feature-textbox padding-25px-all sm-padding-20px-tb sm-padding-15px-lr text-center bg-light-gray">
												<h4 class="title font-size22 sm-font-size20 font-weight-600 alt-font margin-10px-bottom">Programming</h4>
												<p class="feature-desc sm-font-size14 sm-line-height-26 sm-margin-15px-bottom">
													プログラミング歴 2年<br>活動エリア 全国（リモートのみ）<br>対象 HPやWebサービスが必要な方<br>料金 案件内容によります。<br>
													PHP・HTML・CSS・JavaScript・SQL<br>クラウドサーバー構築(AWS)<br>Cronによる自動化<br>レスポンシブデザイン対応
												</p>

												<a href="programming_index.php" class="butn medium theme">
														<span class="alt-font">詳細ページへ</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
												</a>

										</div>
								</div>
						</div>
						<!--end item-->



							<!--start item-->
							<div class="col-md-4">
									<div class="feature-box-02">
											<div class="img-box"><img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/IMG_6612_2.jpg" alt="" /></div>
											<div class="feature-textbox padding-25px-all sm-padding-20px-tb sm-padding-15px-lr text-center bg-light-gray">
													<h4 class="title font-size22 sm-font-size20 font-weight-600 alt-font margin-10px-bottom">Personal Training</h4>
													<p class="feature-desc sm-font-size14 sm-line-height-26 sm-margin-15px-bottom">
														パーソナルトレーナー歴 16年<br>活動エリア 福岡市南区<br>対象 安全・確実に身体を変えたい方<br>料金 60分:6600円<br>
														身体作り×機能改善<br>一般の方からアスリートまで対応<br>担当セッション数6000本以上<br>10年以上のリピーター多数
													</p>

													<a href="personal_training_index.php" class="butn medium theme">
															<span class="alt-font">詳細ページへ</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
													</a>

											</div>
									</div>
							</div>
							<!--end item-->





							<!--start item-->
							<div class="col-md-4">
									<div class="feature-box-02">
											<div class="img-box"><img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/football_school2.jpg" alt="" /></div>
											<div class="feature-textbox padding-25px-all sm-padding-20px-tb sm-padding-15px-lr text-center bg-light-gray">
													<h4 class="title font-size22 sm-font-size20 font-weight-600 alt-font margin-10px-bottom">Soccer School</h4>
													<p class="feature-desc sm-font-size14 sm-line-height-26 sm-margin-15px-bottom">
														サッカーコーチ歴 16年<br>活動エリア 福岡市南区<br>対象 サッカーが好きな幼児・小学生<br>料金 週2回:3000-4500円<br>
													　練習日 土日の午前中<br>コンセプト 楽しくてうまくなる<br>実戦的トレーニング×少人数制×映像<br>試合で活躍できる選手を育成
													</p>

													<a href="king_of_football_index.php" class="butn medium theme">
															<span class="alt-font">詳細ページへ</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
													</a>

											</div>
									</div>
							</div>
							<!--end item-->





					</div>

			</div>
	</section>
	<!-- end about us section -->


	<section id="フルスタックエンジニアとは？">

			<div class="container">
					<div class="section-heading">
							<h3>フルスタックエンジニアとは？</h3>
							<p class="width-55 sm-width-75 xs-width-95">企画から運営までを一人でこなし<br>作りたいアプリやWebサービスを<br>自由に作ることができる<br class="br-携帯短" />エンジニアのことです。</p>
					</div>
			</div>

			<div class="container">
					<div class="row">

							<div class="gallery text-center width-100">

									<div class="col-lg-3 col-md-6">
											<div class="project-grid">
													<div class="project-grid-img"><img alt="img" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/hullstack1.jpg">
													</div>
													<p>企画</p>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="project-grid">
													<div class="project-grid-img"><img alt="img" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/hullstack2.jpg">
													</div>
													<p>設計</p>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="project-grid">
													<div class="project-grid-img"><img alt="img" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/hullstack3.jpg">
													</div>
													<p>デザイン</p>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="project-grid">
													<div class="project-grid-img"><img alt="img" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/hullstack4.jpg">
													</div>
													<p>プログラミング</p>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="project-grid">
													<div class="project-grid-img"><img alt="img" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/hullstack5.jpg">
													</div>
													<p>テスト</p>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="project-grid">
													<div class="project-grid-img"><img alt="img" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/hullstack6.jpg">
													</div>
													<p>セキュリティ対策</p>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="project-grid">
													<div class="project-grid-img"><img alt="img" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/hullstack7.jpg">
													</div>
													<p>サーバー構築</p>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="project-grid">
													<div class="project-grid-img"><img alt="img" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/hullstack8.jpg">
													</div>
													<p>サービスの運営</p>
											</div>
									</div>
							</div>
					</div>
			</div>

	</section>


<?php include("./common_footer.php"); ?>



    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

   <?php include("./common_script.php"); ?>

</body>
</html>
