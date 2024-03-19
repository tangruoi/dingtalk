<?php

/**
 * 部门限制可见的生效场景配置
 * @author auto create
 */
class SceneConfig
{
	
	/** 
	 * 当前部门是否采用单独的配置。如果设置了false，则采用组织维度的配置
	 **/
	public $active;
	
	/** 
	 * 是否在单聊框生效
	 **/
	public $chatbox_subtitle;
	
	/** 
	 * 是否在查看组织架构生效
	 **/
	public $node_list;
	
	/** 
	 * 是否在个人资料页生效
	 **/
	public $profile;
	
	/** 
	 * 是否在搜索生效
	 **/
	public $search;	
}
?>