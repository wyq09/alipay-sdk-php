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
     * 图片二进制字节流，最大为10M
     **/
    private $imageContent;

    /**
     * 图片格式，支持格式：bmp、jpg、jpeg、png、gif.
     **/
    private $imageType;

    public function setImageType($imageType)
    {
        $this->imageType = $imageType;
        $this->apiParams["image_type"] = $imageType;
    }

    public function getImageType()
    {
        return $this->imageType;
    }

    public function setImageContent($imageContent)
    {
        $this->imageContent = $imageContent;
        $this->apiParams["image_content"] = $imageContent;
    }

    public function getImageContent()
    {
        return $this->imageContent;
    }
}

