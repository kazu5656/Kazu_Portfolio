<?php
require_once('common_config.php');
require_once('common_functions.php');
session_start();




if ($_SERVER['REQUEST_METHOD'] != 'POST') {

        // CSRF対策↓
        setToken();

} else {

        // CSRF対策↓
        checkToken();


        // フォームからサブミットされた時の処理
        // 入力されたニックネーム、メールアドレス、パスワードを受け取り、変数に入れる。

        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_phone_number = $_POST['user_phone_number'];
        $Question = $_POST['Question'];

        // 入力チェックを行う。
        $err = array();

        // [氏名]未入力チェック
        if ($user_name == '') {
                $err['user_name'] = '氏名を入力して下さい。';
        }else {
                // 文字数チェック
                if (strlen(mb_convert_encoding($user_name, 'SJIS', 'UTF-8')) > 30) {
                $err['user_name'] = '氏名は30バイト以内で入力して下さい。';
                }
        }

        // [メールアドレス]未入力チェック
        if ($user_email == '') {
                    $err['user_email'] = 'メールアドレスを入力して下さい。';
        } else {
                    // [メールアドレス]形式チェック
                    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                    $err['user_email'] = 'メールアドレスが不正です。';
                    }
        }

        // [パスワード]未入力チェック
        if ($user_phone_number == '') {
                    $err['user_phone_number'] = '電話番号を入力して下さい。';
        }

        // もし$err配列に何もエラーメッセージが保存されていなかったら
        if (empty($err)) {

                    $complete_msg = "問い合わせが完了しました。問い合わせ完了メールをご確認下さい。";

                    // 管理者にメールを送信"
                    mb_language("japanese");
                    mb_internal_encoding("UTF-8");
                    $mail_title = '【パーソナルトレーニング】お問い合わせがありました。';
                    $mail_body = '氏名：'. $user_name.PHP_EOL;
                    $mail_body.= 'メールアドレス：'.$user_email.PHP_EOL.'電話番号：'.$user_phone_number.PHP_EOL.'ご質問：'.$Question;
                    mb_send_mail(kazu_mail, $mail_title, $mail_body);

                    // 申込完了メールを送信"
                    mb_language("japanese");
                    mb_internal_encoding("UTF-8");
                    $mail_title = 'お問い合わせありがとうございます。';
                    $mail_body = $user_name. ' 様'.PHP_EOL.PHP_EOL;
                    $mail_body.= 'この度は【パーソナルトレーニング】についてのお問い合わせをいただきありがとうございます。'.PHP_EOL.PHP_EOL;
                    $mail_body.= 'お問い合わせ内容を確認次第、返信いたしますのでしばらくお待ち下さい。';
                    mb_send_mail($user_email, $mail_title, $mail_body);

        }

        unset($pdo);

}





?>

<!DOCTYPE html>
<html lang="ja">
<head>

		<title>プライバシーポリシー | <?php echo SERVICE_NAME; ?></title>

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

      span.言語{
        color: white;
        font-weight: bold;
        background-color: #75eb7b;
        padding: 5px;
        font-size: 15px;
      }

      .table{
        text-align: left;
        color: white;
      }

      .表１列目{
        width: 5%;
        text-align: center;
      }

      .表２列目{
        width: 95%;
      }

      .個人情報保護法{
        font-size: 18px;
        font-weight: bold;
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

			.slide_explanation{
				font-size: 8px;
			}

		}

		</style>

</head>


<body>

  <?php include("./common_header_PT.php"); ?>

	<br><br><br><br>

  <!-- start advice section -->
  <section class="box-hover bg-black margin-90px-bottom md-margin-70px-bottom sm-margin-50px-bottom">
      <div class="container text-center">

      <div class="row">
          <div class="col-md-12">

            <div class="section-heading left white">
                <h4>プライバシーポリシー</h4>
                <p>当社は、個人情報の保護に関する法律（以下「個人情報保護法」といいます）その他関連法令等を遵守し、
                  個人情報保護法第２条第１項によって定義された個人情報を適正に取り扱うことが、
                  重要な社会的責務であるとの認識に立ち、 以下の規定に従い、個人情報の適切な取扱い及び保護に努めます。<br>
                  本文中の用語の定義は、個人情報保護法及び関連法令によります。</p>
            </div>

            <!-- start table section -->
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="個人情報保護法">1　個人情報の利用目的</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、取得したお客様の個人情報を、以下の目的のために利用します。</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(1)</td>
                                        <td class="表２列目">当社のサービスの提供、維持、保護及び改善のため</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(2)</td>
                                        <td class="表２列目">お客様本人の確認、認証サービスのため</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(3)</td>
                                        <td class="表２列目">当社のサービスに関するお問い合わせ等への対応のため</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(4)</td>
                                        <td class="表２列目">ダイレクトメールの発送等、当社や提携会社等の商品及びサービスに関するご案内のため</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(5)</td>
                                        <td class="表２列目">当社のサービスに関する当社の規約、ポリシー等（以下「規約等」といいます）に違反する行為に対する対応のため</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(6)</td>
                                        <td class="表２列目">当社のサービスに関する規約等の変更などを通知するため</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(7)</td>
                                        <td class="表２列目">パーソナルトレーニング受講時の料金請求のため</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(8)</td>
                                        <td class="表２列目">新商品及びサービスの研究や開発を目的とする市場調査やデータ分析のため</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(9)</td>
                                        <td class="表２列目">その他個人情報取得時に明示した利用目的</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(10)</td>
                                        <td class="表２列目">その他上記利用目的に付随する目的のため</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="個人情報保護法">2　個人情報利用目的の変更</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、個人情報の利用目的を、関連性を有すると合理的に認められる範囲内において変更することがあり、変更した場合にはお客様に通知又は公表します。</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="個人情報保護法">3　個人情報の適正な取得</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、適法かつ適正な手段により個人情報を取得し、偽りその他不正の手段により取得しません。</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="個人情報保護法">4　個人情報の適正管理</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(1)</td>
                                        <td class="表２列目">データ内容の正確性の確保</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、取得したお客様の個人データにつき、利用目的の達成に必要な範囲内において、正確かつ最新の内容に保つとともに、利用する必要がなくなったときは、当該個人データを消去するよう努めます。</td>
                                    </tr>
                                    <tr>
                                        <td class="表１列目">(2)</td>
                                        <td class="表２列目">安全管理措置</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、お客様の個人データの漏洩、滅失又は毀損の防止その他の安全管理のために必要かつ適切な措置を講じます。</td>
                                    </tr>


                                    <tr>
                                        <td colspan="2" class="個人情報保護法">5　第三者提供</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、お客様の個人データについて、個人情報保護法その他の法令に基づき開示が認められる場合を除くほか、あらかじめ当該お客様の同意を得ないで、第三者（委託先を除きます）に提供しません。</td>
                                    </tr>


                                    <tr>
                                        <td colspan="2" class="個人情報保護法">6　個人情報の開示</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、お客様から、個人情報保護法の定めに基づき個人情報の開示を求められたときは、ご本人からのご請求であることを確認の上で、お客様に対し、遅滞なく開示を行います（当該個人情報が存在しないときにはその旨を通知いたします）。ただし、個人情報保護法その他の法令により、当社が開示の義務を負わない場合は、この限りではありません。なお、個人情報の開示につきましては、手数料（1件あたり500円）を頂戴しておりますので、あらかじめご了承ください。</td>
                                    </tr>


                                    <tr>
                                        <td colspan="2" class="個人情報保護法">7　個人情報の訂正等</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、お客様から、個人情報が真実でないという理由によって、個人情報保護法の定めに基づきその内容の訂正、追加又は削除（以下「訂正等」といいます）を求められた場合には、お客様本人からのご請求であることを確認の上で、利用目的の達成に必要な範囲内において、遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正等を行い、その旨をお客様に通知します（訂正等を行わない旨の決定をしたときは、お客様に対しその旨を通知いたします）。ただし、個人情報保護法その他の法令により、当社が訂正等の義務を負わない場合は、この限りではありません。</td>
                                    </tr>


                                    <tr>
                                        <td colspan="2" class="個人情報保護法">8　個人情報の利用停止等</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、お客様から、お客様の個人情報が、あらかじめ公表された利用目的の範囲を超えて取り扱われているという理由又は偽りその他不正の手段により取得されたものであるという理由により、個人情報保護法の定めに基づきその利用の停止又は消去（以下「利用停止等」といいます）を求められた場合において、そのご請求に理由があることが判明した場合には、お客様本人からのご請求であることを確認の上で、遅滞なく個人情報の利用停止等を行い、その旨をお客様に通知します。ただし、個人情報保護法その他の法令により、当社が利用停止等の義務を負わない場合は、この限りではありません。</td>
                                    </tr>


                                    <tr>
                                        <td colspan="2" class="個人情報保護法">9　Cookie（クッキー）その他の技術の利用</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社のサービスは、Cookie及びこれに類する技術を利用することがあります。これらの技術は、当社による当社のサービスの利用状況等の把握に役立ち、サービス向上に資するものです。Cookieを無効化されたいお客様は、ウェブブラウザの設定を変更することによりCookieを無効化することができます。ただし、Cookieを無効化すると、当社のサービスの一部の機能をご利用いただけなくなる場合があります。</td>
                                    </tr>



                                    <tr>
                                        <td colspan="2" class="個人情報保護法">10　お問い合わせ</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">開示等のお申出、ご意見、ご質問、苦情のお申出その他個人情報の取扱いに関するお問い合わせは、下記の窓口までお願い致します。
                                        <br><a href="index_query.php">お問合せフォーム</a></td>
                                    </tr>


                                    <tr>
                                        <td colspan="2" class="個人情報保護法">11　継続的改善</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">当社は、個人情報の取扱いに関する運用状況を適宜見直し、継続的な改善に努めるものとし、必要に応じて、本方針を変更することがあります。</td>
                                    </tr>







                                </tbody>
                            </table>
            <!-- end table section -->

            <a href="contact_PT_start.php"><input type="" value="申し込みフォームに戻る"  class="btn btn-info btn-block"></a>



          </div><!-- col-md-12 -->
      </div><!-- row -->

      </div><!-- container -->
  </section>
  <!-- end advice section -->










<?php include("./common_footer.php"); ?>


    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

   <?php include("./common_script.php"); ?>

</body>
</html>
