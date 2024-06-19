<php
require '../vendor/autoload.php';

$smarty = new Smarty();

$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setCacheDir('../cache/');
$smarty->setConfigDir('../configs/');

// チャットボットの処理を行う
require '../src/Chatbot.php';
$chatbot = new Chatbot();

// Smartyにデータを渡す
$smarty->assign('messages', $chatbot->getMessages());

// テンプレートを表示する
$smarty->display('index.tpl');
