<?php
/**
 * ALIPAY API: alipay.marketing.activity.ordervoucher.query
 *
 * @author auto create
 *
 * @since  1.0, 2017-04-07 18:22:19
 */

namespace Alipay\Request;

class AlipayMarketingActivityOrdervoucherQueryRequest extends AbstractAlipayRequest
{
    /**
     * 查询商家券活动
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
