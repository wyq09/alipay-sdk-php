<?php
namespace Alipay\Request;
/**
 * ALIPAY API: alipay.business.mall.points.notify request
 *
 * @author auto create
 * @since 1.0, 2021-03-10 10:25:16
 */
class AlipayBusinessMallPointsNotifyRequest extends AbstractAlipayRequest
{
	/** 
	 * 商圈积分结果回调通知
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
