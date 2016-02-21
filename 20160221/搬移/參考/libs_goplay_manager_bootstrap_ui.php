<?php

function getManagerHeader($userPriority) {

    header('Content-Type: text/html; charset=utf-8');

    $head = getHead();
    switch($userPriority) {
    
        case 1:
        case 2:
            $result = getResultPriority1();
        break;

        case 3:
        case 4:
            $result = getResultPriority3();
        break;
        default:
            $result = getResultPriority0();

        break;
    }

    return $head.$result;
}

function getHead() {

    $result = <<<EOF
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Go play server manager</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/const.js"></script>
    <script src="js/libs.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/nice_edit/nicEdit.js" type="text/javascript"></script>
    <script src="js/chart_js/Chart.js" type="text/javascript"></script>
    <script src="js/chart_js_extend.js" type="text/javascript"></script>
    <script src="js/export_csv.js" type="text/javascript"></script>
    <script src="js/tablesorter/jquery.tablesorter.min.js" type="text/javascript"></script>
    <script src="js/fancybox/jquery.fancybox.js" type="text/javascript"></script>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="css/std_theme.css">

  </head>
EOF;

    return $result;
}

function getResultPriority0() {

  $result = <<<EOF
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">go play 管理後台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="logout.php">登出</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
EOF;

  return $result;
}
function getResultPriority1() {

  $result = <<<EOF
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">go play 管理後台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">內容管理<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="post_content_editor.php">新增文章</a></li>
                <li><a href="post_list.php">文章列表</a></li>
              </ul>
            </li>
            <li><a href="user_info_editor.php">goplayer資訊編輯</a></li>
            <li><a href="logout.php">登出</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
EOF;

  return $result;
}

function getResultPriority3() {

  $result = <<<EOF
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">go play 管理後台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="app_users.php">用戶</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">內容管理<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="post_content_editor.php">新增文章</a></li>
                <li><a href="post_list.php">文章列表</a></li>
                <li><a href="post_recommend_list.php">推薦文章管理</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">統計報表<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="user_statistics.php">用戶註冊統計</a></li>
                <li><a href="post_statistics.php">熱門文章統計</a></li>
                <li><a href="post_tag_statistics.php">熱門Tag統計</a></li>

              </ul>
            </li>
            <li><a href="post_tag_manager.php">tag管理</a></li>
            <li><a href="region_list_manager.php">地區管理</a></li>
            <li><a href="post_category_manager.php">主題分類管理</a></li>

            <li><a href="manager_user_manager.php">後台用戶管理</a></li>
            <!--li><a href="backend_manager.php">后台管理</a></li-->
            <li><a href="user_info_editor.php">goplayer資訊編輯</a></li>
            <li><a href="logout.php">登出</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
EOF;

  return $result;
}

function getManagerFooter() {

	$result = <<<EOF
		</div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
EOF;

	return $result;
}

?>