<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>登入驗證</title>
    <script src="https://www.gstatic.com/firebasejs/ui/2.3.0/firebase-ui-auth__zh_tw.js"></script>
	<link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/2.3.0/firebase-ui-auth.css" />
	
    <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
    <script src="config.js"></script>
    <script src="common.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
	<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
    <script src="dist/firebaseui.js"></script>
	
	<script src="https://www.gstatic.com/firebasejs/ui/2.3.0/firebase-ui-auth__zh_tw.js"></script>
<link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/2.3.0/firebase-ui-auth.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div id="container">
      <h3>登入驗證</h3>
      <div id="loading">載入中...</div>
      <div id="loaded" class="hidden">
        <div id="main">
          <div id="user-signed-in" class="hidden">
            <div id="user-info">
              <div id="photo-container">
                <img id="photo">
              </div>
              <div id="name"></div>
              <div id="email"></div>
              <div id="phone"></div>
              <div class="clearfix"></div>
            </div>
            <p>
              <button id="sign-out">登出</button>
              <button id="delete-account">刪除帳戶紀錄</button>
            </p>
          </div>
          <div id="user-signed-out" class="hidden">
            <h4>目前狀態：您已登出</h4>
			<div style="display:hidden">
				<fieldset>
				  <legend>驗證于否</legend>
				  手機簡訊驗證，是否要啟用預防機器人驗證:
				  <label for="recaptcha-normal">
					<input type="radio" id="recaptcha-normal" name="recaptcha" value="normal">
					開啟
				  </label>
				  <label for="recaptcha-invisible">
					<input type="radio" id="recaptcha-invisible" name="recaptcha" value="invisible" checked>
					關閉
				  </label>
				</fieldset>
				<p>
				  <button id="sign-in-with-redirect">本頁登入</button>
				  <button id="sign-in-with-popup">開新視窗登入</button>
				</p>
			</div>
            <div id="firebaseui-spa">
              <h5>登入方式:</h5>
              <div id="firebaseui-container"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
