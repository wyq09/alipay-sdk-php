<?php
namespace Alipay\Request;
/**
 * ALIPAY API: alipay.marketing.activity.payeeinfo.create request
 *
 * @author auto create
 * @since 1.0, 2021-03-10 10:25:16
 */
class AlipayMarketingActivityPayeeinfoCreateRequest extends AbstractAlipayRequest
{
	/** 
	 * 营销收款账号进件
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
