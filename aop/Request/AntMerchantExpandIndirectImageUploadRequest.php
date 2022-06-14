<?php
/**
 * ALIPAY API: ant.merchant.expand.indirect.image.upload
 *
 * @author auto create
 *
 * @since  1.0, 2017-04-07 18:22:19
 */

namespace Alipay\Request;

class AntMerchantExpandIndirectImageUploadRequest extends AbstractAlipayRequest
{
    /**
     * 图片上传
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

