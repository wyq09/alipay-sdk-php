<?php
namespace Alipay\Request;
/**
 * ALIPAY API: alipay.marketing.material.image.upload request
 *
 * @author auto create
 * @since 1.0, 2021-03-10 10:25:16
 */
class AlipayMarketingMaterialImageUploadRequest extends AbstractAlipayRequest
{
	/** 
	 * 营销图片资源上传接口
	 **/
	private $bizContent;

	
	public function setBizContent($bizContent)
	{
		$this->bizContent = $bizContent;
		$this->apiParams["biz_content"] = $bizContent;
	}

	public function getBizContent()
	{
		return $this->bizContent;
	}

}
