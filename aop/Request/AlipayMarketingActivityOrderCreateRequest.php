<?php
/**
 * ALIPAY API: alipay.marketing.activity.order.create
 *
 * @author auto create
 *
 * @since  1.0, 2017-04-07 18:22:19
 */

namespace Alipay\Request;

class AlipayMarketingActivityOrderCreateRequest extends AbstractAlipayRequest
{
    /**
     * 商家营销购买下单接口
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
