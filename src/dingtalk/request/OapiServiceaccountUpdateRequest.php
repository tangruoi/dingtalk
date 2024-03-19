<?php
/**
 * dingtalk API: dingtalk.oapi.serviceaccount.update request
 * 
 * @author auto create
 * @since 1.0, 2019.07.04
 */
class OapiServiceaccountUpdateRequest
{
	/** 
	 * 头像图片mediaId
	 **/
	private $avatarMediaId;
	
	/** 
	 * 机器人管理列表中的简介，最多60个字符
	 **/
	private $brief;
	
	/** 
	 * 机器人主页中的服务号功能简介，最多200个字符
	 **/
	private $desc;
	
	/** 
	 * 服务号名称
	 **/
	private $name;
	
	/** 
	 * 机器人主页中，消息预览图片的mediaId
	 **/
	private $previewMediaId;
	
	/** 
	 * normal-正常，disabled-删除
	 **/
	private $status;
	
	/** 
	 * 服务号的unionid
	 **/
	private $unionid;
	
	private $apiParas = array();
	
	public function setAvatarMediaId($avatarMediaId)
	{
		$this->avatarMediaId = $avatarMediaId;
		$this->apiParas["avatar_media_id"] = $avatarMediaId;
	}

	public function getAvatarMediaId()
	{
		return $this->avatarMediaId;
	}

	public function setBrief($brief)
	{
		$this->brief = $brief;
		$this->apiParas["brief"] = $brief;
	}

	public function getBrief()
	{
		return $this->brief;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPreviewMediaId($previewMediaId)
	{
		$this->previewMediaId = $previewMediaId;
		$this->apiParas["preview_media_id"] = $previewMediaId;
	}

	public function getPreviewMediaId()
	{
		return $this->previewMediaId;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setUnionid($unionid)
	{
		$this->unionid = $unionid;
		$this->apiParas["unionid"] = $unionid;
	}

	public function getUnionid()
	{
		return $this->unionid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.serviceaccount.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->brief,60,"brief");
		RequestCheckUtil::checkMaxLength($this->desc,200,"desc");
		RequestCheckUtil::checkMaxLength($this->name,30,"name");
		RequestCheckUtil::checkNotNull($this->unionid,"unionid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
