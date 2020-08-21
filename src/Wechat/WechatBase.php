<?php
/**
 * @user：刘宇
 * @date：2020/8/20
 * @createTime：6:43 下午
 * @company：北京企悦荟科技有限公司 https://qiyuehui.com
 */


namespace qyhly\Wechat;


abstract class WechatBase
{
    /**
     * @return WechatHttpClient
     */
    protected function getClient()
    {
        return new WechatHttpClient();
    }

    /**
     * @param array $result
     * @return array
     */
    abstract protected function getClientResult($result);
}
