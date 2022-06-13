<?php
/**
 * ALIPAY API: alipay.social.base.contentlib.standardcontent.batchquery
 *
 * @author auto create
 *
 * @since  1.0, 2017-04-07 18:22:19
 */

namespace Alipay\Request;

class AlipaySocialBaseContentlibStandardcontentBatchqueryRequest extends AbstractAlipayRequest
{
    /**
     * 内容批量查询接口
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
