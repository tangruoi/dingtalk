<?php

/**
 * 保存结果
 * @author auto create
 */
class IntegrateBatchResultVo
{
	
	/** 
	 * 业务方唯一标识
	 **/
	public $biz_uk;
	
	/** 
	 * 一条数据的明细
	 **/
	public $field_list;
	
	/** 
	 * 关联id, 一般为userId
	 **/
	public $relation_id;	
}
?>