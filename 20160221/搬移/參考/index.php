<?php
session_start();
require_once('libs/goplay_manager_libs.php');

chkUserLogin($_SESSION);
$header = getManagerHeader($_SESSION['goplayManagerPriority']);
$ui = welcomeUI($_SESSION);
$footer = getManagerFooter();

echo $header.$ui.$footer;
?>

<div class="container">
	<h3>後台更新紀錄</h3>
	<hr>
	<div class="logDiv">
		<ul class="logUl">

			<li>
				<h4>2016/1/15 update</h4>
				<ul>
					<li>修正達人頁更新後達人消施且無法進入達人頁問題</li>
					<li>修正文章更新後文章消失問題</li>
				</ul>
			</li>

			<li>
				<h4>2015/11/25 update</h4>
				<ul>
					<li>新增goplayer資訊編輯介面</li>
				</ul>
			</li>

			<li>
				<h4>2015/11/17 update</h4>
				<ul>
					<li>修正文章編輯器上傳單張圖片失敗問題</li>
				</ul>
			</li>

			<li>
				<h4>2015/11/11 update</h4>
				<ul>
					<li>文章列表新增搜尋功能</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/28 update</h4>
				<ul>
					<li>修正文章編輯器封面圖上傳失敗</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/26 update</h4>
				<ul>
					<li>新增文章分類管理介面</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/25 update</h4>
				<ul>
					<li>修正地區選項列表新增地區後,文章編輯列表未出現的問題</li>
					<li>修正tag被刪除後,新增相同tag會顯示tag已存在的問題</li>

				</ul>
			</li>

			<li>
				<h4>2015/10/22 update</h4>
				<ul>
					<li>修正文章編輯器的預設字型與大小問題</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/20 update</h4>
				<ul>
					<li>文章編輯介面新增預覽按鈕, 供編輯者在圖片上點選右鍵取得圖片網址</li>
					<li>熱門文章統計修改統計方式, 可選擇指定日期區間的統計結果</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/19 update</h4>
				<ul>
					<li>增加地區管理介面</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/15 update</h4>
				<ul>
					<li>文章編輯器支援多檔上傳,目前一次最多可上傳5張圖</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/13 update</h4>
				<ul>
					<li>統計報表增加tag統計報表</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/12 update</h4>
				<ul>
					<li>修改文章添加tag規則</li>
					<li>增加tag管理介面</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/11 update</h4>
				<ul>
					<li>文章編輯器新增繁體轉簡體功能</li>
				</ul>
			</li>

			<li>
				<h4>2015/10/10 update</h4>
				<ul>
					<li>文章編輯的文章封面圖片增加按鈕上傳封面</li>
				</ul>
			</li>
		</ul>
	</div>
</div>