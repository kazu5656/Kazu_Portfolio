<?php
require_once('common_config.php');
require_once('common_functions.php');
session_start();



$pdo = connectDb();





?>

<!DOCTYPE html>
<html lang="ja">
<head>

		<title>福岡市南区で活動する佐竹のパーソナルトレーニング | <?php echo SERVICE_NAME; ?></title>

    <?php include("./common_head_meta.php"); ?>

		<!-- Webページの概要（要約）を示すテキスト情報 -->
		<meta name="description" content="パーソナルトレーナー歴16年、通算セッション数6000本以上、福岡市南区のパーソナルトレーナー佐竹のホームページ。">

		<style>

		@media screen and (max-width: 3000px) {

			.br-PC { display:block; }
			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			#name{
				text-align: center;
				margin-top: 20px;
			}

			.list-style-5{
				font-size: 20px;
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

      .PT_内容{
        margin-top: 15px;
      }

      .PT_内容_タイトル{
        font-size: 11px;
      }

			.強み{
        font-size: 17px;
      }

			.悪い姿勢が痛みやパフォーマンスの低下を引き起こす。{
				text-align: center;
				font-size: 13px;
			}

			.写真{
				border: 2px solid #00cc00;
			}

			#スタビリティとモビリティの説明{
				text-align: left;
			}

			#筋バランス説明1{
				margin-bottom: 10px;
			}

			#原則＿列1{
				width: 30%;
			}

			#原則＿列2{
					width: 70%;
			}

			.table{
				text-align: center;
				vertical-align:middle;
			}

			#原則2ブロック目{
				margin-top: 10px;
			}

			.機能改善と身体作り{
				font-size: 13px;
			}

			.トレーニングの効果を出すためには守るべき原則がある。{
				text-align: center;
				font-size: 13px;
			}

			#表_原則名{
				width: 25%;
			}

			#表_原則の内容{
				width: 75%;
				vertical-align:middle;
			}

			#表_原則の内容2{
				vertical-align:middle;
			}

			#身体作りの三大要素の説明{
				font-size: 17px;
			}

			.原則名{
				width: 18%;

			}

			#原則名2{
				vertical-align:middle;
				width: 25%;
				font-weight: bold;
				font-size: 18px;
				background-color: gray;
				color: white;
			}

			.表_１行目{
				font-weight: bold;
				background-color: yellow;
				font-size: 18px;
			}

			.表_２行目{
				background-color: #f2f2c7;
				font-size: 18px;
			}

			#原則の説明{
				text-align: left;
			}


			#テーブル_料金表{
				font-size: 20px;
			}

			#テーブル_料金表_時間{
				width: 30%;
				background-color: gray;
				font-weight: bold;
				color: white;
			}

			#パーソナルトレーニング受講希望の方はこちら{
				font-weight: bold;
			}









		}
		/*ipad 横幅*/
		@media screen and (max-width: 1024px){

			.br-PC { display:none; }
			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			.feature-desc{
				font-size: 12px;
			}

			#slide_explanation{
				font-size: 14px;
			}

			.安全で効果的なパーソナルトレーニングを提供します。{
				font-size: 18px;
			}





		}

		/*ipad 縦幅*/
		@media screen and (max-width: 768px){

			.br-PC { display:none; }
			.br-携帯長 { display:none; }
			.br-携帯短 { display:block; }




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

			.br-PC { display:none; }
			.br-携帯長 { display:none; }
			.br-携帯短 { display:block;; }

			.feature-desc{
				font-size: 14px;
			}

			.title{
				font-size: 17px;
			}

			#slide_explanation{
				font-size: 14px;
			}

			.PT_内容_タイトル{
				font-size: 15px;
			}

		}

		/*iphone 横幅(短)*/
		@media screen and (max-width: 414px){

			.br-PC { display:none; }
			.br-携帯長 { display:none; }
			.br-携帯短 { display:block; }


			.title{
				font-size: 21px;
			}

			#slide_explanation{
				font-size: 14px;
			}

			.強み{
        font-size: 13px;
      }

			.大見出し{
				font-size: 18px;
			}

			.機能改善と身体作り{
				font-size: 14px;
			}

			.PT_内容_タイトル{
				font-size: 15px;
			}

			.表_２行目{
				background-color: #f2f2c7;
				font-size: 13px;
			}

			#パーソナルトレーニング受講希望の方はこちら{
				font-weight: bold;
				font-size: 12px;
			}



		}

		</style>

</head>

<body>



	<?php include("./common_header_PT.php"); ?>

	<br><br><br><br>

	<!-- start slideshow-->
	<div class="container-fluid full-screen">
			<div class="row slider-fade">
					<div class="owl-carousel owl-theme width-100">
							<div class="text-center item bg-img" data-overlay-dark="7" data-background="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/slider/Armcurl.JPG">
									<div class="absolute-middle-center caption">
											<div class="overflow-hidden">
												<h3 class="alt-font font-size32 sm-font-size18 text-white no-margin">kazu works</h3>

													<h1 class="text-white"><span style="color:gold">PERSONAL TRAINING</span></h1>
													<p id="slide_explanation"><strong>安全</strong>で<strong>効果的</strong>な<strong>パーソナルトレーニング</strong>で<br>
														お客様の<span style="color:yellow;">機能改善</span>と<span style="color:yellow;">身体作り</span>を<strong><br class="br-携帯短" />確実</strong>に<strong>成功</strong>に導きます。</p>
														<a href="contact_PT.php" class="butn medium theme">
																<span class="alt-font">お問い合わせ</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
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
						<strong>福岡市南区</strong>で活動する<strong><br>パーソナルトレーナー</strong><strong> 佐竹和明</strong>の<br class="br-携帯短" />プロフィールです。

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
												<h6 class="安全で効果的なパーソナルトレーニングを提供します。">安全で効果的な<br class="br-携帯短" />パーソナルトレーニングを<br class="br-携帯短" />提供します。</h6>

												<p class="sm-width-100 xs-width-100">
													私のトレーナーとしての強みは<br>
													<strong class="強み"><strong>機能改善</strong>と<strong>身体作り</strong>を成功させる専門知識</strong>と<br>
													<strong class="強み">パーソナルトレーナー歴16年の経験</strong>です。<br>
													<span class="機能改善と身体作り">（<strong>機能改善</strong>→<strong>姿勢</strong>・<strong>動き</strong>）<br>
													（<strong>身体作り</strong>→<strong>ダイエット</strong>、<strong>筋量アップ</strong>）<br></span>
												</p>

												<p class="sm-width-100 xs-width-100">
													私には16年の経験で<br>
													<strong class="強み">担当セッション数6000本以上</strong><br>
													<strong class="強み">10年以上のリピーター多数</strong>という<br class="br-携帯短" />実績があります。<br>
												</p>

												<p class="sm-width-100 xs-width-100">
													私が10年以上のリピーターを<br>多数抱えることができているのは<br>
													<strong class="強み">日々、変化していくお客様の<br>身体の状態やメンタル面の変化に対応し</strong><br>
													<strong class="強み">安全・確実に効果を出すことができる</strong><br class="br-携帯短" />からです。<br>
												</p>

												<p class="sm-width-100 xs-width-100">
													実際のセッションでは<br>
													<strong class="強み">下記の<a href="<?php echo SITE_URL; ?>personal_training_index.php#CONTENTS">CONTENTS</a>のような内容を<br>
													お客様の目的や体力レベル、<br class="br-携帯短" />身体の状態をもとに<br>
													個別にカスタマイズして実施します。</strong><br>
												</p>


										</div>
								</div>
						</div>
				</div>
		</div>
</section>
<!-- end about our passion section -->




	<!-- start what we do section -->
	<section id="受講までの流れ">
	    <div class="container">

				<div class="section-heading">
						<h3 class="text-uppercase">受講までの流れ</h3>
				</div>

	        <div class="row feature-boxes-container">

	            <div class="col-lg-4 col-md-12 sm-margin-20px-bottom feature-box-04">
	                <div class="feature-box-inner">
	                    <i class="font-size50 md-font-size46 sm-font-size40 xs-font-size38"></i>
	                    <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">
												場所を決める
											</h4>
	                    <div class="sepratar"></div>
	                    <p>佐竹がメインに活動している<strong>福岡市南区</strong>の<strong><a href=" https://www.s-re.jp/fukuoka-ohashi/"target="_blank">スポーツクラブルネサンス福岡大橋</a></strong>か<strong>近隣のレンタルジム</strong>でセッションを行います。</p>
	                </div>
	            </div>



	            <div class="col-lg-4 col-md-12 sm-margin-20px-bottom feature-box-04">
	                <div class="feature-box-inner">
	                    <i class="font-size50 md-font-size46 sm-font-size40 xs-font-size38"></i>
	                    <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">
												カウンセリング
											</h4>
	                    <div class="sepratar"></div>
	                    <p>カウンセリング専用フォームを使ってお客様の運動の目的や目標設定、身体の状態などをお伺いします。</p>
	                </div>

	            </div>



							<div class="col-lg-4 col-md-12 feature-box-04">
	                <div class="feature-box-inner">
	                    <i class="font-size50 md-font-size46 sm-font-size40 xs-font-size38"></i>
	                    <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">
												セッション
											</h4>
	                    <div class="sepratar"></div>
	                    <p>日時を決めてセッションを行います。<br>あなたの身体作りを全力でサポートさせていただきます。</p>
	                </div>
	            </div>

	        </div>

					<br>

					<a href="contact_PT_start.php"><input type="" value="パーソナルトレーニング受講希望の方はこちら" class="btn btn-primary btn-block" id="パーソナルトレーニング受講希望の方はこちら"></a>

					<a href="contact_PT.php"><input type="" value="お問い合わせはこちら" id="" class="btn btn-info btn-block"></a>

	    </div>
	</section>
	<!-- end what we do section -->



<!-- start project section -->
<section id="CONTENTS">

    <div class="container">
        <div class="section-heading">
            <h3>CONTENTS</h3>
            <p class="width-55 sm-width-75 xs-width-95">パーソナルトレーニングの内容です。
							<br>内容はお客様の目的や体力レベル、<br class="br-携帯短" />身体の状態をもとに<br>個別にカスタマイズ致します。
						</p>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <!-- Start links -->
            <div class="filtering col-sm-12 text-center">
                <span data-filter='*' class="active">All</span>
								<span data-filter='.ビギナー'>ビギナー</span>
                <span data-filter='.減量'>減量</span>
                <span data-filter='.筋量アップ'>筋量アップ</span>
                <span data-filter='.姿勢改善'>姿勢改善</span>
                <span data-filter='.動き改善'>動き改善</span>
								<span data-filter='.パワー養成'>パワー養成</span>
								<span data-filter='.疲労回復'>疲労回復</span>
								<span data-filter='.高齢者'>高齢者</span>
            </div>
            <!-- End links -->

            <div class="gallery text-center width-100">

              <div class="col-lg-2 col-md-6 margin-30px-bottom items 減量 筋量アップ パワー養成 高齢者 ビギナー">
                  <div class="project-grid-style2">
                      <div class="project-details">
                          <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Training plan.PNG" alt="">
                          <div class="portfolio-icon">
                              <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Training plan.PNG"><i class="fas fa-search-plus"></i></a>
                          </div>
                          <div class="portfolio-post-border"></div>
                      </div>
                      <div class="PT_内容">
                          <h4 class="PT_内容_タイトル">トレーニング計画</h4>
                      </div>
                  </div>
              </div>

                <div class="col-lg-2 col-md-6 margin-30px-bottom items 減量 筋量アップ 姿勢改善 動き改善 パワー養成 高齢者 ビギナー">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/menu.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/menu.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">メニュー作成</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 margin-30px-bottom items 減量 筋量アップ パワー養成 疲労回復 高齢者 ビギナー">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Nutrition.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Nutrition.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">栄養アドバイス</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 margin-30px-bottom items 減量 筋量アップ 姿勢改善 動き改善 パワー養成">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Squat.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Squat.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">フリーウエイト</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 margin-30px-bottom items 減量 筋量アップ 姿勢改善 動き改善 パワー養成 高齢者 ビギナー">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Lat pulldown.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Lat pulldown.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">マシントレーニング</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 margin-30px-bottom items 姿勢改善 動き改善 高齢者">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Own weight.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Own weight.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">自体重トレーニング</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 margin-30px-bottom items 姿勢改善 動き改善 パワー養成 高齢者">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/posture.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/posture.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">姿勢チェック</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 margin-30px-bottom items 動き改善 パワー養成 高齢者">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Running form.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Running form.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">動きチェック</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 margin-30px-bottom items 姿勢改善 動き改善 高齢者">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Pelvic movement.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Pelvic movement.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">骨盤運動</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 margin-30px-bottom items 姿勢改善 疲労回復 高齢者">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/pairstretch.JPG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/pairstretch.JPG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">ペアストレッチ</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 margin-30px-bottom items 姿勢改善 疲労回復 高齢者 ビギナー">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Self stretch.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Self stretch.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">セルフストレッチ</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 margin-30px-bottom items 姿勢改善 疲労回復 高齢者">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Fascia release.PNG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Fascia release.PNG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">筋膜リリース</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 margin-30px-bottom items 動き改善 パワー養成">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/SAQ.JPG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/SAQ.JPG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">スピード・敏捷性</h4>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-md-6 margin-30px-bottom items 減量 疲労回復 高齢者 ビギナー">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/aerobic exercise.JPG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/aerobic exercise.JPG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">有酸素運動</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 margin-30px-bottom items 動き改善 パワー養成">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Plyometrics.JPG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Plyometrics.JPG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">プライオメトリクス</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 margin-30px-bottom items 姿勢改善 疲労回復 高齢者">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Stretch pole.JPG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Stretch pole.JPG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">ストレッチポール</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 margin-30px-bottom items 動き改善 パワー養成 高齢者 ビギナー">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Dynamic stretch.JPG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Dynamic stretch.JPG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">動的ストレッチ</h4>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-md-6 margin-30px-bottom items 高齢者">
                    <div class="project-grid-style2">
                        <div class="project-details">
                            <img src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Fall prevention.JPG" alt="">
                            <div class="portfolio-icon">
                                <a class="popimg" href="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/training/Fall prevention.JPG"><i class="fas fa-search-plus"></i></a>
                            </div>
                            <div class="portfolio-post-border"></div>
                        </div>
                        <div class="PT_内容">
                            <h4 class="PT_内容_タイトル">転倒予防</h4>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>

</section>
<!-- end project section -->





	<!-- start about us section -->
	<section class="bg-light-gray padding-40px-bottom sm-padding-20px-bottom"id="身体作りの三大要素">

			<div class="container" >

					<div class="section-heading">
							<h3 class="大見出し">身体作りの三大要素</h3>
							<p class="width-55 sm-width-75 xs-width-95">効率の良い身体作りには、<br class="br-携帯短" />運動、栄養、休養の<br class="br-携帯短" />三大要素全てが必要です。
								<br>どれか一つでも欠けると<br class="br-携帯短" />身体作りは成功しません。</p>
					</div>

					<div class="row">


						<!--start item-->
						<div class="col-md-4">
								<div class="feature-box-02">
										<div class="img-box"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/woman_Arm_curl2.JPG" alt="" /></div>
										<div class="feature-textbox padding-25px-all sm-padding-20px-tb sm-padding-15px-lr text-center bg-light-gray">
												<h4 class="title font-size22 sm-font-size20 font-weight-600 alt-font margin-10px-bottom">運動</h4>
												<p class="feature-desc sm-font-size14 sm-line-height-26 sm-margin-15px-bottom" id="身体作りの三大要素の説明">
													筋力トレーニング<br>ストレッチ<br>有酸素運動<br>プライオメトリクス<br>SAQトレーニング<br><br>
												</p>
										</div>
								</div>
						</div>
						<!--end item-->



							<!--start item-->
							<div class="col-md-4">
									<div class="feature-box-02">
											<div class="img-box"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/Nutrition.PNG" alt="" /></div>
											<div class="feature-textbox padding-25px-all sm-padding-20px-tb sm-padding-15px-lr text-center bg-light-gray">
													<h4 class="title font-size22 sm-font-size20 font-weight-600 alt-font margin-10px-bottom">栄養</h4>
													<p class="feature-desc sm-font-size14 sm-line-height-26 sm-margin-15px-bottom" id="身体作りの三大要素の説明">
														カロリー設定<br>PFCバランス<br>食事の回数<br>食事の時間<br>何を食べるか？<br>サプリメント
													</p>
											</div>
									</div>
							</div>
							<!--end item-->





							<!--start item-->
							<div class="col-md-4">
									<div class="feature-box-02">
											<div class="img-box"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/projects/pairstretch.JPG" alt="" /></div>
											<div class="feature-textbox padding-25px-all sm-padding-20px-tb sm-padding-15px-lr text-center bg-light-gray">
													<h4 class="title font-size22 sm-font-size20 font-weight-600 alt-font margin-10px-bottom">休養</h4>
													<p class="feature-desc sm-font-size14 sm-line-height-26 sm-margin-15px-bottom" id="身体作りの三大要素の説明">
														睡眠<br>入浴<br>クールダウン<br>アイシング<br>アクティブレスト<br><br>
													</p>
											</div>
									</div>
							</div>
							<!--end item-->





					</div>

			</div>
	</section>
	<!-- end about us section -->

	<!-- start about us section -->
	<section class="padding-40px-bottom sm-padding-20px-bottom"id="姿勢と筋バランス">

			<div class="container" >
					<div class="section-heading">
							<h3 class="大見出し">姿勢と筋バランス</h3>
							<p class="width-55 sm-width-75 xs-width-95">
								悪い姿勢は肩こりや腰痛、<br class="br-携帯短" />膝痛などの痛みの原因となり<br>
								日常動作やスポーツ、ビジネスの<br class="br-携帯短" />パフォーマンスの低下を引き起こします。<br>
								悪い姿勢を修正するには<strong class="強み"><br class="br-携帯短" />筋バランスの改善</strong>が不可欠です。
							</p>
					</div>

					<div class="row">

							<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
								<div class="owl-carousel owl-theme text-center">
										<div class="item"><img class="写真"src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/Low back pain.PNG" alt="" /></div>
										<div class="item"><img class="写真"src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/Knee pain.PNG" alt="" /></div>
										<div class="item"><img class="写真"src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/headache.JPG" alt="" /></div>
								</div>
								<p class="悪い姿勢が痛みやパフォーマンスの低下を引き起こす。">
									悪い姿勢が痛みやパフォーマンスの<br class="br-携帯短" />低下を引き起こす。
								</p>
							</div>




							<div class="col-lg-7 col-md-12">
									<div class="padding-70px-left md-padding-50px-left sm-no-padding">
											<div class="display-table-cell vertical-align-middle width-100">
													<h6 class="安全で効果的なパーソナルトレーニングを提供します。">短縮筋と伸張筋への<br class="br-携帯短" />適切なアプローチが鍵。</h6>
													<p class="sm-width-85 xs-width-90">
														筋バランスとは<strong class="強み"><br class="br-携帯短" />拮抗する２つの筋肉のバランス</strong>の<br class="br-携帯短" />ことです。
													</p>

													<div class="row" id="筋バランス説明1">
														<div class="col-lg-6">
															<img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/Muscle balance 1.JPG" alt="" />
														</div><br>
														<div class="col-lg-6">
															<p class="sm-width-85 xs-width-90">
																①の図のように拮抗する<br>筋肉のバランスが良ければ<br>
																姿勢は良くなります.
															</p>
														</div>
													</div>

													<div class="row">

														<div class="col-lg-6">
															<img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/Muscle balance 2.JPG" alt="" />
														</div>
														<div class="col-lg-6">
															<p class="sm-width-85 xs-width-90">
																②の図のように拮抗する２つの筋肉の<br class="br-携帯短" />
																片側が<strong>短縮（ショート）</strong>し<br class="br-携帯短" />
																もう片側が<strong>伸張（ロング）</strong>していると<br class="br-携帯短" />
																その筋肉に関わる骨格に歪みが生じ<br class="br-携帯短" />
																姿勢が悪くなります。<br class="br-携帯短" />
																<strong>短縮側は強くて硬い、<br class="br-携帯短" />伸張側は弱くて柔らかい</strong><br class="br-携帯短" />のが
																一般的です。
															</p>
														</div>
													</div>
													<br>
													<p class="sm-width-85 xs-width-90">
														<strong>短縮側にはストレッチや筋膜リリース、<br>伸張側には筋力トレーニング</strong>を<br class="br-携帯短" />行うことが<br>
														筋バランスを改善し、<br>良い姿勢を獲得するために必要です。
													</p>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- end about us section -->

	<!-- start about us section -->
	<section class="bg-light-gray padding-40px-bottom sm-padding-20px-bottom"id="モビリティとスタビリティ">
			<div class="container" >
					<div class="section-heading">
							<h3 class="大見出し">スタビリティとモビリティ</h3>
							<p class="width-55 sm-width-75 xs-width-95">
								各関節が必要とされるスタビリティと<br class="br-携帯短" />モビリティを発揮することで<br>
								身体は高いパフォーマンスを発揮し<br class="br-携帯短" />ケガを予防できます。
							</p>
							<br><br>

							<div class="row">

									<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
										<div class="owl-carousel owl-theme text-center">
												<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/Mobility and stability2.JPG" alt="" /></div>
										</div>
									</div>



									<div class="col-lg-7 col-md-12">
											<div class="padding-70px-left md-padding-50px-left sm-no-padding">
													<div class="display-table-cell vertical-align-middle width-100">
															<h6 class="安全で効果的なパーソナルトレーニングを提供します。">Joint by Joint 理論</h6>
															<p class="sm-width-85 xs-width-90" id="スタビリティとモビリティの説明">
																<strong>スタビリティは安定性、<br class="br-携帯短" />モビリティは可動性</strong>のことです。<br>
																日常動作やスポーツ動作の中で<br>
																各関節が求められるスタビリティや<br class="br-携帯短" />モビリティを発揮することで<br>
																スムーズかつダイナミックな動作を<br class="br-携帯短" />行うことができ<br>
																怪我のリスクも低くなります。<br>
																この考え方を <br class="br-携帯短" /><strong>Joint by Joint 理論</strong> と言います。<br><br>

																スタビリティが求められるのは<br><strong>頸椎、肩甲骨、腰椎、膝関節、肘、手</strong><br>
																モビリティが求められるのは<br><strong>胸椎、肩関節、股関節、足関節、手関節</strong>
																です。<br><br>
																もしスタビリティやモビリティが<br class="br-携帯短" />欠けている関節があると<br>
																他の関節に影響を及ぼします。<br>
																例えば、<br class="br-携帯短" />腰椎にスタビリティがない場合、<br>
																股関節や胸椎のモビリティを<br class="br-携帯短" />発揮しづらくなります。<br><br>
																<strong>スタビリティやモビリティを高める<br class="br-携帯短" />シンプルなエクササイズや<br>
																フリーウエイトやマシンの筋トレを<br class="br-携帯短" />継続的に行う</strong>ことが重要です。<br>
																また<strong><a href="<?php echo SITE_URL; ?>personal_training_index.php#姿勢と筋バランス">筋バランス</a></strong>が<br class="br-携帯短" />スタビリティ・モビリティに<br class="br-携帯短" />大きな影響を<br>
																及ぼすので<strong>前後左右の<br class="br-携帯短" /><a href="<?php echo SITE_URL; ?>personal_training_index.php#姿勢と筋バランス">筋バランス</a>を整える</strong>ことも大切です。

															</p>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- end about us section -->

	<!-- start about us section -->
	<section class="padding-40px-bottom sm-padding-20px-bottom"id="トレーニングの原則">
			<div class="container" >
					<div class="section-heading">
							<h3 class="大見出し">トレーニングの原理・原則</h3>
							<p class="width-55 sm-width-75 xs-width-95">効率よく安全に運動の効果を出すためには<br>
							トレーニングの３原理・５原則を<br class="br-携帯短" />考慮する必要があります。</p>
					</div>
                <table class="table table-bordered">
                    <thead>
                        <tr class="表_１行目">
                            <th colspan="2">トレーニングの３原理</th>
                        </tr>
                    </thead>
                    <tbody>
												<tr class="表_２行目">
														<td colspan="2">トレーニングで効果を出すための<br class="br-携帯短" />根本的かつ基礎的な法則</td>
												</tr>
                        <tr>
                            <td id="原則名2">過負荷の原理</td>
                            <td id="原則の説明">身体に対して一定以上の運動負荷を与えることで機能が向上するという原理。<br class="br-PC" />いつも同じ刺激にならないように常に少しきついくらいのトレーニングを行うことが重要。</td>
                        </tr>
                        <tr>
                            <td id="原則名2">特異性の原理</td>
                            <td id="原則の説明">あるトレーニングを行った場合、そのトレーニングに対しての効果しか高めることができないということ。<br class="br-PC" />どんな効果を出したいかを明確にして、最適なトレーニングを行わなければならない。</td>
                        </tr>
                        <tr>
                            <td id="原則名2">可逆性の原理</td>
                            <td id="原則の説明">トレーニングで得られた効果は、トレーニングをやめてしまうと徐々に失われていくという原理。<br class="br-PC" />トレーニングを継続することが大切。</td>
                        </tr>
                    </tbody>
                </table>
								<br>
                <table class="table table-bordered">
                    <thead>
                        <tr class="表_１行目">
														<th colspan="2">トレーニングの5原則</th>
                        </tr>
                    </thead>
                    <tbody>
												<tr class="表_２行目">
														<td colspan="2">原理を基とした上でトレーニングを<br class="br-携帯短" />実施するときのルール</td>
												</tr>
                        <tr>
                            <td id="原則名2">全面性の原則</td>
                            <td id="原則の説明">全ての筋肉、全ての体力要素（持久力、筋力、パワー、柔軟性など）をバランス良く鍛えることでケガを予防し<br class="br-PC" />パフォーマンスを高めることができるという原則。</td>
                        </tr>
                        <tr>
                            <td id="原則名2">個別性の原則</td>
                            <td id="原則の説明">個々の目的や体力レベル、ケガ・病気の有無、姿勢、動きなど<br class="br-PC" />様々な要素を考慮してトレーニングを行うことの重要性を示す原則。</td>
                        </tr>
                        <tr>
                            <td id="原則名2">意識性の原則</td>
                            <td id="原則の説明">トレーニングの目的や鍛えている体力要素、筋肉を意識して行ったほうが<br class="br-PC" />モチベーションも高まり、効果も出やすいという原則。</td>
                        </tr>
												<tr>
                            <td id="原則名2">漸進性の原則</td>
                            <td id="原則の説明">トレーニングの強度や難度、量などを焦らず長期的に少しずつ高めていくことで<br class="br-PC" />安全に効果を出すことができるという原則。</td>
                        </tr>
												<tr>
                            <td id="原則名2">反復性の原則</td>
                            <td id="原則の説明">どんな素晴らしいトレーニングも長期的に継続・反復しなければ<br class="br-PC" />効果が出ないという原則。継続は力なり。</td>
                        </tr>
                    </tbody>
                </table>
			</div>
	</section>
	<!-- end about us section -->

	<!-- start about our passion section -->
	<section class="bg-light-gray" id="アスリート">
			<div class="container">

				<div class="section-heading">
						<h3 class="大見出し">アスリート</h3>
						<p class="width-55 sm-width-75 xs-width-95 center-col">
							<strong>怪我の予防</strong>と<strong>ハイレベルな<br class="br-携帯短" />パフォーマンス発揮</strong>を可能にする<br>パーソナルトレーニング</strong>を提供します。
						</p>
				</div>

					<div class="row">

							<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
								<div class="owl-carousel owl-theme text-center">
										<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/tennis2.JPG" alt="" /></div>
										<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/golf.JPG" alt="" /></div>
										<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/run.JPG" alt="" /></div>
								</div>
							</div>



							<div class="col-lg-7 col-md-12">
									<div class="padding-70px-left md-padding-50px-left sm-no-padding">
											<div class="display-table-cell vertical-align-middle width-100">
													<h6 class="安全で効果的なパーソナルトレーニングを提供します。">
														最高のトレーニングで<br class="br-携帯短" />ワンランク上を目指す。
													</h6>

													<p class="sm-width-100 xs-width-100">
														スポーツで怪我をせずに<br>
														ハイレベルなパフォーマンスを<br class="br-携帯短" />発揮するためには<br>
														<strong>機能改善(姿勢・動き)</strong>と<strong>身体作り</strong>の<br class="br-携帯短" />両方が不可欠です。<br>
														<strong>筋バランス</strong>と<strong>スタビリティ＆モビリティ</strong>を<br class="br-携帯短" />獲得することで<br>
														<strong>機能改善</strong>を実現。<br>
														<strong>身体作り</strong>はどんなアスリートにも<br>
														最低限必要な<strong>基礎筋力</strong>を高め、怪我を予防し<br>
														そこから競技に特化した<br class="br-携帯短" /><strong>専門的筋力</strong>を高めることで<br>
														競技パフォーマンスを発揮できる<br class="br-携帯短" />身体に変化させていきます。<br>
													</p>
													<img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/pyramid2.JPG" alt="" />
													<p class="sm-width-100 xs-width-100">競技パフォーマンスのピラミッド</p>




											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- end about our passion section -->

	<!-- start about us section -->
	<section class="padding-40px-bottom sm-padding-20px-bottom"id="ダイエット">

			<div class="container" >
					<div class="section-heading">
							<h3 class="大見出し">ダイエット</h3>
							<p class="width-55 sm-width-75 xs-width-95">
								<strong>無理なく確実に</strong><strong>ダイエット</strong>を<br class="br-携帯短" />成功させるためには、<br>まず<strong>食事改善</strong>を適切に行い<br>
								<strong>筋力トレーニング</strong>で<strong>代謝アップ</strong>、<br><strong>有酸素運動</strong>で<strong>脂肪燃焼</strong>していく<br class="br-携帯短" />ことが大切です。<br>
							</p>
					</div>

					<div class="row">

							<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
								<div class="owl-carousel owl-theme text-center">
										<div class="item"><img class="写真"src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/diet1.jpg" alt="" /></div>
										<div class="item"><img class="写真"src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/diet2.jpg" alt="" /></div>
								</div>
							</div>




							<div class="col-lg-7 col-md-12">
									<div class="padding-70px-left md-padding-50px-left sm-no-padding">
											<div class="display-table-cell vertical-align-middle width-100">
													<h6 class="安全で効果的なパーソナルトレーニングを提供します。">食事改善がダイエットの鍵。</h6>
													<p class="sm-width-85 xs-width-90">
														食事改善といっても、<br class="br-携帯短" />ただ炭水化物を抜いたり<br>
														何も食べなければいいという<br class="br-携帯短" />わけではありません。<br>
														ダイエットのための<br class="br-携帯短" />食事改善のポイントは<br>
														・<strong>カロリー</strong><br>
														・<strong>PFCバランス</strong><br>
														・<strong>食事の回数</strong><br>
														・<strong>食事の時間</strong><br>
														・<strong>何を食べるか</strong> の5点です。<br>
														パーソナルトレーニングでは<br class="br-携帯短" />この5点をしっかり指導し<br>
														それにプラスして運動を<br class="br-携帯短" />実施することによって<br>
														無理なく確実にダイエットを<br>
														成功させることが可能です。<br>
													</p>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- end about us section -->

	<!-- start about our passion section -->
	<section class="bg-light-gray" id="アンチエイジング">
			<div class="container">

				<div class="section-heading">
						<h3 class="大見出し">アンチエイジング</h3>
						<p class="width-55 sm-width-75 xs-width-95 center-col">
							長年の動きの癖や怪我、筋力の衰えにより<br>シニア世代の身体は<br class="br-携帯短" />様々な機能低下が起きています。<br>
							機能低下を改善し<br class="br-携帯短" />様々な病気や怪我を予防することは<br>
							寝たきりの高齢者や介護者を<br class="br-携帯短" />減らすために非常に重要です。
						</p>
				</div>

					<div class="row">

							<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
								<div class="owl-carousel owl-theme text-center">
										<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/Anti-Aging1.PNG" alt="" /></div>
										<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/Anti-Aging2.JPG" alt="" /></div>
										<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/Anti-Aging3.JPG" alt="" /></div>
								</div>
							</div>



							<div class="col-lg-7 col-md-12">
									<div class="padding-70px-left md-padding-50px-left sm-no-padding">
											<div class="display-table-cell vertical-align-middle width-100">
													<h6 class="安全で効果的なパーソナルトレーニングを提供します。">
														身体の状態や体力レベルに応じた<br class="br-携帯短" />アプローチが必要。
													</h6>

													<p class="sm-width-100 xs-width-100">
														<strong>シニア年代のアンチエイジング</strong>こそ<br>
														<strong>最もパーソナルトレーニングが<br class="br-携帯短" />必要な分野</strong>です。<br>
														長年の動きの癖や怪我などにより<br>
														<strong>極端に柔軟性や筋力が<br class="br-携帯短" />低下している筋肉がある</strong>ため<br>
														その状態でご自分で運動しても<br class="br-携帯短" />効果が出るどころか<br>
														<strong>歪みや痛みが大きくなってしまう</strong>ことが<br class="br-携帯短" />多いからです。<br>
														それを予防するためには<br class="br-携帯短" />パーソナルトレーニングで<br>
														お客様の<strong>身体の状態や体力レベルに応じた<br class="br-携帯短" />アプローチ</strong>を行い<br>
														適切な<strong>筋力トレーニング</strong>と<strong>栄養摂取</strong>を<br class="br-携帯短" />行うことが必要不可欠です。<br>
														<strong>寝たきり</strong>の大きな原因になる<br class="br-携帯短" /><strong>転倒を予防するためのトレーニング</strong>や<br>
														栄養摂取と筋トレで<strong>内臓</strong>をしっかり働かせ<br class="br-携帯短" /><strong>免疫機能を高める</strong>ことも<br>
														シニア世代には大変重要です。<br>
														パーソナルトレーニングで<br class="br-携帯短" /><strong>ゆっくり無理なく確実に</strong><br>
														機能改善を成功させてシニア年代を<br>
														<strong>楽しめる健康で強い身体</strong>を作りましょう。<br>
													</p>





											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- end about our passion section -->

	<!-- start about us section -->
	<section class="padding-40px-bottom sm-padding-20px-bottom"id="システム">
			<div class="container" >
					<div class="section-heading">
							<h3 class="大見出し">SYSTEM</h3>
							<p class="width-55 sm-width-75 xs-width-95">料金は全て税込です。<br>スポーツクラブで受講される場合は別途で入会金や月会費などが必要です。</p>
					</div>

						<div class="row">

							<div class="col-md-1">
							</div>

							<div class="col-md-10">

						      <table class="table table-bordered" id="テーブル_料金表">
																<thead>
																		<tr class="表_１行目">
																				<th colspan="2">パーソナルトレーニング料金表</th>
																		</tr>
																</thead>
						                    <tbody>
						                        <tr>
						                            <td id="テーブル_料金表_時間">30分</td>
						                            <td>3300円</td>
						                        </tr>
						                        <tr>
						                            <td id="テーブル_料金表_時間">45分</td>
						                            <td>4950円</td>
						                        </tr>
						                        <tr>
						                            <td id="テーブル_料金表_時間">60分</td>
						                            <td>6600円</td>
						                        </tr>
																		<tr>
						                            <td id="テーブル_料金表_時間">75分</td>
						                            <td>8250円</td>
						                        </tr>
																		<tr>
						                            <td id="テーブル_料金表_時間">90分</td>
						                            <td>9900円</td>
						                        </tr>
						                    </tbody>
						                </table>

											</div>

											<div class="col-md-1">
											</div>


					</div>


			</div>
	</section>
	<!-- end about us section -->


<?php include("./common_footer.php"); ?>



    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

   <?php include("./common_script.php"); ?>

</body>
</html>
