<?php
namespace Alipay\Request;

/**
 * ALIPAY API: alipay.open.app.message.topic.unsubscribe request
 *
 * @author auto create
 * @since 1.0, 2021-04-16 17:09:19
 */
class AlipayOpenAppMessageTopicUnsubscribeRequest extends AbstractAlipayRequest
{
	/** 
	 * 取消订阅关系
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
