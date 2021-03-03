<?php
require_once('common_config.php');
require_once('common_functions.php');
session_start();



$pdo = connectDb();





?>

<!DOCTYPE html>
<html lang="ja">
<head>

		<title>福岡市南区のサッカースクール KING OF FOOTBALL | <?php echo SERVICE_NAME; ?></title>

    <?php include("./common_head_meta.php"); ?>

		<style>

		@media screen and (max-width: 3000px) {

			.br-PC { display:block; }
			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			.動画タイトル{
				text-align: center;
				margin-bottom: 0px;
				font-weight: bold;
			}






      #タイトル_KINGOFFOOTBALL{
        margin-bottom: 0px;
				font-size: 60px;
			}

			#サブタイトル_楽しくてうまくなるサッカースクール{
        margin-top: 0px;
        margin-bottom: 20px;
				font-size: 28px;
			}

      #ブタイトル_下の文章{

			}





			.写真{
				border: 2px solid #00cc00;
			}



			.table{
				text-align: center;
				vertical-align:middle;
				border: 3px;
			}





			.表_１行目{
				font-weight: bold;
				background-color: yellow;
				font-size: 18px;
			}

			#テーブル_スケジュール{
				font-size: 20px;
			}


			#テーブル_料金表{
				font-size: 20px;

			}

			#テーブル_料金表_時間{
				width: 30%;
				background-color: white;
				color: black;
				font-size: 20px;
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

			#サブタイトル_楽しくてうまくなるサッカースクール{
				font-size: 27px;
			}

			#video{
				width: 100%;
				height: 200px;
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



			#タイトル_KINGOFFOOTBALL{
        margin-bottom: 0px;
				font-size: 50px;
			}

			#サブタイトル_楽しくてうまくなるサッカースクール{
        margin-top: 0px;
        margin-bottom: 20px;
				font-size: 25px;
			}

      #サブタイトル_下の文章{

			}

			#video{
				width: 100%;
				height: 200px;
			}

		}

		/*iphone 縦幅(横)*/
		@media screen and (max-width: 736px){

			.br-PC { display:none; }
			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			.feature-desc{
				font-size: 14px;
			}

			.title{
				font-size: 17px;
			}

			#テーブル_スケジュール{
				font-size: 14px;
			}

			#タイトル_KINGOFFOOTBALL{
        margin-bottom: 0px;
				font-size: 24px;
			}

			#サブタイトル_楽しくてうまくなるサッカースクール{
				font-size: 14px;
			}

			#サブタイトル_下の文章{
				font-size: 13px;
			}

			#video{
				width: 100%;
				height: 350px;
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

			#タイトル_KINGOFFOOTBALL{
        margin-bottom: 0px;
				font-size: 24px;
			}

			#サブタイトル_楽しくてうまくなるサッカースクール{
				font-size: 14px;
			}

			#サブタイトル_下の文章{
				font-size: 14px;
			}

			#video{
				width: 100%;
			}

			#コンセプト文章{
				font-size: 13px;
			}

			#テーブル_スケジュール{
				font-size: 9px;
			}

			#テーブル_料金表{
				font-size: 15px;
			}

			#テーブル_料金表_時間{
				width: 50%;
				font-size: 15px;
			}

			.表_１行目{
				font-weight: bold;
				background-color: yellow;
				font-size: 15px;
			}





			.大見出し{
				font-size: 18px;
			}





		}

		</style>

</head>

<body>



	<?php include("./common_header_football.php"); ?>

	<br><br><br><br>

	<!-- start slideshow-->
	<div class="container-fluid full-screen">
			<div class="row slider-fade">
					<div class="owl-carousel owl-theme width-100">
							<div class="text-center item bg-img" data-overlay-dark="7" data-background="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/slider/football_kids.JPG">
									<div class="absolute-middle-center caption">
											<div class="overflow-hidden">
												<h3 class="alt-font font-size32 sm-font-size18 text-white no-margin">kazu works</h3>

													<h1 class="text-white" id="タイトル_KINGOFFOOTBALL"><span style="color:gold">KING OF FOOTBALL</span></h1>
													<p id="サブタイトル_楽しくてうまくなるサッカースクール"><strong>〜楽しくてうまくなるサッカースクール〜</strong></p>
                          <p id="サブタイトル_下の文章">独自の育成コンセプトで<br class="br-携帯短" />試合で高いパフォーマンスを<br class="br-携帯短" />発揮できる選手を育成します。
													<br><br>KING OF FOOTBALL は<br class="br-携帯短" />福岡市南区塩原で練習している<br class="br-携帯短" />少人数定員制のサッカースクールです。<br>
													※現在、全クラス定員に達しておりますので、<br class="br-携帯短" />スクール生募集を行っておりません。
													</p>

													<a href="contact_football.php" class="butn medium theme">
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
						<strong>福岡市南区</strong>のサッカースクール<strong><br>KING OF FOOTBALL</strong>のコーチ、</strong><strong> <br class="br-携帯短" />佐竹和明</strong>のプロフィールです。

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
												<h6 class="安全で効果的なパーソナルトレーニングを提供します。">楽しくてうまくなる<br class="br-携帯短" />サッカースクールを提供します。</h6>

												<p class="sm-width-100 xs-width-100"id="資格">
													<strong>資格</strong><br>
                          ・AFEN公認スペインサッカー指導者ライセンス モニトール<br>
                          ・AFEN公認スペインサッカースカウトライセンス<br>
                          ・AFEN公認スペインフットサル指導者ライセンス モニトール<br>
                          ・サッカーのピリオタイゼーション ベーシックコース Level1 <br>
                          ・イタリアサッカー協会認定 フットサルインサッカー<br>
												</p>

												<p class="sm-width-100 xs-width-100">
                          <strong>経歴</strong><br>
                          ・ジュニアサッカーコーチ歴 17年<br>
                          ・パーソナルトレーナー歴 17年
												</p>

                        <p class="sm-width-100 xs-width-100">
                          <strong>指導法</strong><br>
                          最新の戦術・トップレベルの選手を<br class="br-携帯短" />研究しながら<br>
                          欧州や南米のジュニアの育成法を学び<br>
                          実際のジュニア指導で得た経験や<br>
                          パーソナルトレーナーとしての<br class="br-携帯短" />フィジカルの知識と<br>
                          掛け合わせることで<br class="br-携帯短" />ハイレベルな選手の育成を目指します。
												</p>




										</div>
								</div>
						</div>
				</div>
		</div>
</section>
<!-- end about our passion section -->




	<!-- start what we do section -->
	<section id="コンセプト">
	    <div class="container">

				<div class="section-heading">
						<h3 class="text-uppercase">CONCEPT</h3>
				</div>


        <div class="row">

						<div class="col-lg-5 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
							<div class="owl-carousel owl-theme text-center">
									<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/football_boy2.JPG" alt="" /></div>
							</div>
						</div>



						<div class="col-lg-7 col-md-12">
								<div class="padding-70px-left md-padding-50px-left sm-no-padding">
										<div class="display-table-cell vertical-align-middle width-100">
												<h6 class="安全で効果的なパーソナルトレーニングを提供します。">独自のコンセプトで<br class="br-携帯短" />ハイレベルな選手を育成します。</h6>

												<p class="sm-width-100 xs-width-100" id="コンセプト文章">
													<strong>育成目標</strong><br>
                            「試合で高いパフォーマンスを発揮できる選手」<br>
                            「心・技術・体力・頭脳を兼ね備えた選手」
												</p>

												<p class="sm-width-100 xs-width-100" id="コンセプト文章">
                          <strong>スクールコンセプト</strong><br>
                          「楽しくて上手くなるサッカースクール」
												</p>

                        <p class="sm-width-100 xs-width-100" id="コンセプト文章">
                          <strong>育成コンセプト</strong><br>
                          ・試合の状況に近い実戦的な練習を行う。<br>
                          ・少人数の定員制でたくさんプレーする。<br>
                          ・映像を使ったイメトレや戦術指導を行う。<br>
                          ・競争システムで強いメンタルを養う。<br>
                          ・長期的で一貫性のある指導を行う。<br>
                          ・年代やレベルに応じた指導を行う。
												</p>


										</div>
								</div>
						</div>
				</div>


	    </div>
	</section>
	<!-- end what we do section -->







	<!-- start about us section -->
	<section class="bg-light-gray padding-40px-bottom sm-padding-20px-bottom"id="ビデオ">

			<div class="container" >

					<div class="section-heading">
							<h3 class="大見出し">VIDEO</h3>
							<p class="width-55 sm-width-75 xs-width-95">
                スクールの子供たちのプレー動画です。
              </p>
					</div>

					<div class="row">

						<!--start item-->
						<div class="col-md-4">
							<p class="動画タイトル">フェイント</p>
							<iframe id="video" width="350" height="220" src="https://www.youtube.com/embed/lJ1-pTylNpY" alt="フェイントのビデオ" frameborder="0" allow="accelerometer; autoplay; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<!--end item-->


            <!--start item-->
						<div class="col-md-4">
							<p class="動画タイトル">ベストゴール</p>
							<iframe id="video" width="350" height="220" src="https://www.youtube.com/embed/_fh42zfWG7s" alt="ベストゴールのビデオ" frameborder="0" allow="accelerometer; autoplay; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<!--end item-->

            <!--start item-->
						<div class="col-md-4">
							<p class="動画タイトル">パスワーク</p>
							<iframe id="video" width="350" height="220" src="https://www.youtube.com/embed/j0ErcT0igV8" alt="パスワークのビデオ" frameborder="0" allow="accelerometer; autoplay; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<!--end item-->

					</div>

			</div>
	</section>
	<!-- end about us section -->


	<!-- start about us section -->
	<section class="padding-40px-bottom sm-padding-20px-bottom"id="スケジュール">
			<div class="container" >

				<div class="section-heading">
						<h3 class="大見出し">SCHEDULE</h3>
				</div>

						<div class="row">

							<div class="col-md-12">

									<table class="table table-bordered" border="2" id="テーブル_スケジュール">

																<tbody>
																	<thead>
																			<tr class="表_１行目">
																					<th colspan="4">スケジュール</th>
																			</tr>
																	</thead>

																		<tr>
																				<td>土曜1クラス</td>
																				<td>8-12才</td>
																				<td>9:00-11:00</td>
																				<td><a href="https://www.google.co.jp/maps/@33.5658698,130.4228287,17z?hl=ja"target="_blank">塩原中央公園</a></td>
																		</tr>
																		<tr>
																				<td>土曜2クラス</td>
																				<td>5-8才</td>
																				<td>11:00-12:00</td>
																				<td><a href="https://www.google.co.jp/maps/@33.5658698,130.4228287,17z?hl=ja"target="_blank">塩原中央公園</a></td>
																		</tr>
																		<tr>
																				<td>日曜1クラス</td>
																				<td>8-12才</td>
																				<td>8:30-10:30</td>
																				<td><a href="https://www.google.co.jp/maps/@33.5658698,130.4228287,17z?hl=ja"target="_blank">塩原中央公園</a></td>
																		</tr>
																		<tr>
																				<td>日曜2クラス</td>
																				<td>5-8才</td>
																				<td>10:30-11:30</td>
																				<td><a href="https://www.google.co.jp/maps/@33.5658698,130.4228287,17z?hl=ja"target="_blank">塩原中央公園</a></td>
																		</tr>
																</tbody>
														</table>

											</div>

					</div>


			</div>
	</section>
	<!-- end about us section -->



	<!-- start about us section -->
	<section class="padding-40px-bottom sm-padding-20px-bottom"id="システム">
			<div class="container" >

				<div class="section-heading">
						<h3 class="大見出し">SYSTEM</h3>
				</div>

						<div class="row">

							<div class="col-md-12">

						      <table class="table table-bordered" border="2" id="テーブル_料金表">

						                    <tbody>
																	<thead>
																			<tr class="表_１行目">
																					<th colspan="2">料金表</th>
																			</tr>
																	</thead>

						                        <tr>
						                            <td id="テーブル_料金表_時間">入会金</td>
						                            <td>5,000円</td>
						                        </tr>
						                        <tr>
						                            <td id="テーブル_料金表_時間">スポーツ保険</td>
						                            <td>800円</td>
						                        </tr>
						                        <tr>
						                            <td id="テーブル_料金表_時間">幼児-低学年</td>
						                            <td>3,000円</td>
						                        </tr>
																		<tr>
						                            <td id="テーブル_料金表_時間">高学年</td>
						                            <td>4,500円</td>
						                        </tr>
						                    </tbody>
						                </table>

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
