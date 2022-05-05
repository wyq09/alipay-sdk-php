<?php
/**
 * ALIPAY API: alipay.marketing.activity.user.batchqueryvoucher
 *
 * @author auto create
 *
 * @since  1.0, 2017-04-07 18:22:19
 */

namespace Alipay\Request;

class AlipayMarketingActivityUserBatchqueryvoucherRequest extends AbstractAlipayRequest
{
    /**
     * 商家营销活动咨询接口
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
