<?php
namespace Collne\WelcartUtils;

/**
 * どのページなのかを判断する関数がまとめてるクラス
 */
class Pages {

    /**
     * 今にいるページは受注編集ページだったら`true`を返却
     *
     * @author Evan D Shaw <evandanielshaw@gmail.com>
     * @return boolean
     */
    public static function isOrderEditPage() {
        if (is_admin()) {
            $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
            $action = isset($_REQUEST['order_action']) ? $_REQUEST['order_action'] : '';
            if (trim($page) === 'usces_orderlist' && ($action === 'edit' || $action === 'editpost')) {
                return true;
            }
        }

        return false;
    }
}
