<?php
namespace Alipay\Request;
/**
 * ALIPAY API: alipay.business.relation.shop.modify request
 *
 * @author auto create
 * @since 1.0, 2021-03-10 10:25:16
 */
class AlipayBusinessRelationShopModifyRequest extends AbstractAlipayRequest
{
	/** 
	 * 支付宝代运营商业关系门店修改
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
