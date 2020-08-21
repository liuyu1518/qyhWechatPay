<?php
/**
 * @user：刘宇
 * @date：2020/8/20
 * @createTime：6:43 下午
 * @company：北京企悦荟科技有限公司 https://qiyuehui.com
 */


namespace qyhly\Wechat;


use Throwable;

class WechatException extends \Exception
{
    protected $raw;

    public function __construct($message = "", $code = 0, Throwable $previous = null, $raw = null)
    {
        $this->raw = $raw;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取原始信息
     * @return mixed
     */
    public function getRaw()
    {
        return $this->raw;
    }
}
