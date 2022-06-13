<?php
/**
 * ALIPAY API: alipay.marketing.activity.ordervoucher.create
 *
 * @author auto create
 *
 * @since  1.0, 2017-04-07 18:22:19
 */

namespace Alipay\Request;

class AlipayMarketingActivityOrdervoucherCreateRequest extends AbstractAlipayRequest
{
    /**
     * 创建商家券活动
     **/
    private $bizContent;

    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParams['biz_content'] = $bizContent;
    }

    public function getBizContent()
    {
        return $this->bizContent;
    }
}
