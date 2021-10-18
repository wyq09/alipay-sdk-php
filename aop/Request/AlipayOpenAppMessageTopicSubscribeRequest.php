<?php

namespace Alipay\Request;

/**
 * ALIPAY API: alipay.open.app.message.topic.subscribe request
 *
 * @author auto create
 * @since 1.0, 2021-09-07 17:15:49
 */
class AlipayOpenAppMessageTopicSubscribeRequest extends AbstractAlipayRequest
{
	/** 
	 * 订阅消息topic
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
