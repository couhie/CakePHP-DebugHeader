<?php

class DebugHeaderComponent extends Component {

	function __construct(ComponentCollection $collection, $settings = array()) {
		//特定のHTTPヘッダがある時に強制的にデバッグモードにする。
		//この処理をコンストラクタで行っているのは、initialize()内で行うのでは
		//既に遅すぎる為。Modelオブジェクトが作られる前にdebugを書き換えてあげないと
		//SQL文の確認が出来なかった。
		if(isset($_SERVER['HTTP_CAKEPHP_DEBUG'])){
			Configure::write('debug', 2);
		}
	}

	function initialize(&$controller) {
	}

	function startup(&$controller) {
	}

	function beforeRender(&$controller) {
	}

	function shutdown(&$controller) {
	}

	function beforeRedirect(&$controller) {
	}

}
?>
