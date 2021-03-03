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

                    // 差出人
                    $mailfrom="From:" .mb_encode_mimeheader("kazu-portfolio ") ."";

                    // 管理者にメールを送信"
                    mb_language("japanese");
                    mb_internal_encoding("UTF-8");
                    $mail_title = '【kazu portfolio】お問い合わせがありました。';
                    $mail_body = '氏名：'. $user_name.PHP_EOL;
                    $mail_body.= 'メールアドレス：'.$user_email.PHP_EOL.'電話番号：'.$user_phone_number.PHP_EOL.'ご質問：'.$Question;
                    mb_send_mail(kazu_mail, $mail_title, $mail_body, $mailfrom);

                    // 申込完了メールを送信"
                    mb_language("japanese");
                    mb_internal_encoding("UTF-8");
                    $mail_title = 'お問い合わせありがとうございます。';
                    $mail_body = $user_name. ' 様'.PHP_EOL.PHP_EOL;
                    $mail_body.= 'この度はお問い合わせをいただきありがとうございます。'.PHP_EOL.PHP_EOL;
                    $mail_body.= 'お問い合わせ内容を確認次第、返信いたしますのでしばらくお待ち下さい。'.PHP_EOL.PHP_EOL;
                    $mail_body.= '※本メールアドレスは返信用ではありません。本メールの返信でのお問い合わせは受け付けておりません。';
                    mb_send_mail($user_email, $mail_title, $mail_body, $mailfrom);

        }

        unset($pdo);

}





?>

<!DOCTYPE html>
<html lang="ja">
<head>

		<title>お問い合わせフォーム | <?php echo SERVICE_NAME; ?></title>

    <?php include("./common_head_meta.php"); ?>

    

		<style>

		@media screen and (max-width: 3000px) {

			.br-携帯長 { display:none; }
			.br-携帯短 { display:none; }


      #ロボットではない{
        margin-bottom: 10px;
      }

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

      #受講場所{
      color: white;
      font-size: 16px;
      font-weight: bold;
      float: left;
      }

      #お名前{
      color: white;
      font-size: 16px;
      font-weight: bold;
      float: left;
      }

      #メールアドレス{
      color: white;
      font-size: 16px;
      font-weight: bold;
      float: left;
      }

      #電話番号{
      color: white;
      font-size: 16px;
      font-weight: bold;
      float: left;
      }

      #ご質問など{
      color: white;
      font-size: 16px;
      font-weight: bold;
      float: left;
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

  <?php include("./common_header_kazu_portfolio.php"); ?>

	<br><br><br><br>



  <!-- start advice section -->
  <section class="box-hover bg-black margin-90px-bottom md-margin-70px-bottom sm-margin-50px-bottom">
      <div class="container text-center">

      <div class="row">
          <div class="col-md-12">

            <div class="section-heading left white">
                <h4>お問い合わせフォーム</h4>

                <?php if ($complete_msg): ?>
                    <div class="alert alert-success">
                      <?php echo h($complete_msg); ?>
                    </div>
                <?php endif; ?>

                <?php if ($recaptcha_err): ?>
                    <div class="alert alert-success">
                      <?php echo h($recaptcha_err); ?>
                    </div>
                <?php endif; ?>



                <p>佐竹の活動について<br class="br-携帯短" />何かご質問があれば、ご遠慮なく<br class="br-携帯短" />お問い合わせください。<br>
                  ※このフォームはSSL化通信で<br class="br-携帯短" />暗号化されています。
                </p>
            </div>

                  <form id="demo_form"method="POST" class="panel panel-default panel-body" >



                        <div class="form-group <?php if ($err['user_email'] != '') echo 'has-error'; ?>">
                            <label id="お名前">お名前</label><br>
                            <input type="text" class="validate[required]" name="user_name"size="50"
                            value="<?php echo h($user_name); ?>" placeholder=お名前 /><span class="help-block"><?php echo h($err['user_name']); ?></span>
                        </div>

                        <div class="form-group <?php if ($err['user_email'] != '') echo 'has-error'; ?>">
                            <label id="メールアドレス">メールアドレス</label><br>
                            <input type="text" class="validate[required,custom[email]" name="user_email" size="50"
                            value="<?php echo h($user_email); ?>" placeholder="メールアドレス" /><span class="help-block"><?php echo h($err['user_email']); ?></span>
                        </div>

                        <div class="form-group <?php if ($err['user_phone_number'] != '') echo 'has-error'; ?>">
                            <label id="電話番号">電話番号</label><br>
                            <input type="text" class="validate[required,custom[phone]]" name="user_phone_number" size="50"
                            value="<?php echo h($user_phone_number); ?>"placeholder="電話番号" /><span class="help-block"><?php echo h($err['user_phone_number']); ?></span>
                        </div>

                        <div class="form-group <?php if ($err['Question'] != '') echo 'has-error'; ?>">
                            <label id="ご質問など">ご質問など</label>  <br>
                            <textarea name="Question" cols="55" rows="8" ><?php echo h($Question); ?></textarea><span class="help-block"><?php echo h($err['Question']); ?></span>
                        </div>



                        <div class="form-group">
                            <input class="btn btn-success btn-block" type="submit" value="送信">
                        </div>

                        <input type="hidden" name="token" value="<?php echo h($_SESSION['sstoken']); ?>" />

                  </form>



                  <a href="privacy_policy_portfolio.php"><input type="" value="プライバシーポリシーを確認する" class="btn btn-info btn-block"></a>

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
