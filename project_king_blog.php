<?php
require_once('common_config.php');
require_once('common_functions.php');
session_start();





?>

<!DOCTYPE html>
<html lang="ja">
<head>

		<title>制作物 | <?php echo SERVICE_NAME; ?></title>

    <?php include("./common_head_meta.php"); ?>

		<style>

		@media screen and (max-width: 3000px) {

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

			#前ページに戻る{
				font-weight: bolder;
			}


      .写真{
				border: 2px solid #00cc00;
			}

      #サービス名{
        font-size: 24px;
        font-weight: bold;
        background-color: #aef5c1;
			}

      #URL{
        text-align: left;
			}


      #テーブル2{
        width:100%;
			}


      #機能{
        text-align: left;
			}

      #技術{
        width:30%;
			}


			.list-style-5{
				font-size: 20px;
			}

			.slide_explanation{
				font-size: 15px;
			}

      span.言語{
				color: white;
				font-weight: bold;
				background-color: #75eb7b;
				padding: 5px;
				font-size: 15px;
			}



		}
		/*ipad 横幅*/
		@media screen and (max-width: 1024px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

		}

		/*ipad 縦幅*/
		@media screen and (max-width: 768px){

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }

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

      #サービス名{
        font-size: 18px;
        font-weight: bold;
        text-align: center;
			}

      #URL{
        text-align: center;
        font-size: 13px;
			}



			.slide_explanation{
				font-size: 8px;
			}

		}

		</style>

</head>


<body>

	<?php include("./common_header_programming.php"); ?>



	<br><br>



  <!-- start about our passion section -->
  <section class="bg-light-white" id="プロフィール">
  		<div class="container">

        <div class="row">

					<div class="col-lg-12 col-md-12">
              <div class="padding-0px-left md-padding-0px-left sm-no-padding">
                	<a href="programming_index.php#Service_list"><input type="" value="前ページに戻る" class="btn btn-primary btn-block" id="前ページに戻る"></a>
									<hr>
									<br>
              </div>
          </div>

          <div class="col-lg-7 col-md-12">
              <div class="padding-0px-left md-padding-0px-left sm-no-padding">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td id="サービス名">サッカースクール ブログ</td>
                        </tr>
                    </tbody>
                </table>
              </div>
          </div>

          <div class="col-lg-5 col-md-12">
              <div class="padding-0px-left md-padding-0px-left sm-no-padding">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td id="URL"><a href="https://kazu0520.sakura.ne.jp/wordpress/king-of-football-blog/"target="_blank">https://kazu0520.sakura.ne.jp/wordpress/king-of-football-blog/</a></td>
                        </tr>
                    </tbody>
                </table>
              </div>
          </div>

          <div class="col-lg-12 col-md-12">
              <div class="padding-0px-left md-padding-0px-left sm-no-padding">
                <table class="table table-bordered">
                    <tbody>
                      <tr id="サービスの説明文">
                          <td colspan="2"><b>ユーザー</b>　サッカースクール KING OF FOOTBALL のスクール生</td>
                      </tr>
                    </tbody>
                </table>
              </div>
          </div>


          <div class="col-lg-12 col-md-12">
              <div class="padding-0px-left md-padding-0px-left sm-no-padding">
                <table class="table table-bordered">
                    <tbody>
                      <tr id="サービスの説明文">
                          <td colspan="2">作者が運営するサッカースクール KING OF FOOTBALL のブログです。</td>
                      </tr>
                    </tbody>
                </table>
              </div>
          </div>

          <div class="col-lg-12 col-md-12">
              <div class="padding-0px-left md-padding-0px-left sm-no-padding">
                <table class="table table-bordered">
                    <tbody>
                      <tr id="サービスの説明文">
                          <td colspan="2"><b>技術</b>　HTML・CSS・WORDPRESS</td>
                      </tr>
                    </tbody>
                </table>
              </div>
          </div>

        </div>





  				<div class="row">

  						<div class="col-lg-7 col-md-12 sm-margin-50px-bottom xs-margin-30px-bottom">
  							<div class="owl-carousel owl-theme text-center">
  									<div class="item"><img class="写真" src="https://kazu0520.sakura.ne.jp/Kazu_Portfolio/img/content/king_blog.JPG" alt="" /></div>

  							</div>
  						</div>


              <div class="col-lg-5 col-md-12">
  								<div class="padding-0px-left md-padding-0px-left sm-no-padding">

                    <table class="table table-bordered" id="テーブル2">
                          <thead>
                              <tr>
                                  <th id="機能">機能</th>
                              </tr>
                          </thead>
                          <tbody>

                              <tr>
                                  <td>・コメント機能</td>
                              </tr>



                          </tbody>
                      </table>

  								</div>
  						</div>







  				</div>
  		</div>
  </section>
  <!-- end about our passion section -->




<?php include("./common_footer.php"); ?>


    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

   <?php include("./common_script.php"); ?>

</body>
</html>
