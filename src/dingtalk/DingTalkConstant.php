<?php
/**
 * Created by PhpStorm.
 * User: zuodeng
 * Date: 2018/7/18
 * Time: 上午11:31
 */
class DingTalkConstant
{
    static $CALL_TYPE_OAPI = "oapi";
    static $CALL_TYPE_TOP = "top";

    static $METHOD_POST = "POST";
    static $METHOD_GET = "GET";

    static $FORMAT_JSON = "json";
    static $FORMAT_XML = "xml";

    static $GET_TOKEN_URL = "https://oapi.dingtalk.com/gettoken";

    static $GET_USER_INFO_URL  = 'https://oapi.dingtalk.com/topapi/v2/user/getuserinfo';

    static $GET_USER_DETAILS_URL  = 'https://oapi.dingtalk.com/topapi/v2/user/get';
}
