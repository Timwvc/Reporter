<?php
require_once 'header.php';
//  define('_PAGE_TPL', 'index.tpl');
$page_title = '首頁';

$op = isset($_REQUEST['op']) ? htmlspecialchars($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;

switch ($op) {
    default:
        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }
        break;
}

// $smarty->assign('now', date("Y年m月d日 H:i:s"));
require_once 'footer.php';

function list_article()
{
    global $db, $smarty;
    $sql    = "SELECT * from `article` ORDER BY `UPDATE_TIME` desc";
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    $i      = "";
    while ($data = $result->fetch_assoc()) {
        $all[$i]            = $data;
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);
        $i++;
        // var_export($data);
    }
    $smarty->assign('all', $all);
}

