<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis master or replica node information
 *
 * @method integer getNodeType() Obtain Node type. 0: master node; 1: replica node
 * @method void setNodeType(integer $NodeType) Set Node type. 0: master node; 1: replica node
 * @method integer getNodeId() Obtain ID of the master or replica node, which is not required during instance creation
 * @method void setNodeId(integer $NodeId) Set ID of the master or replica node, which is not required during instance creation
 * @method integer getZoneId() Obtain AZ ID of the master or replica node
 * @method void setZoneId(integer $ZoneId) Set AZ ID of the master or replica node
 * @method string getZoneName() Obtain AZ name of the master or replica node
 * @method void setZoneName(string $ZoneName) Set AZ name of the master or replica node
 */
class RedisNodeInfo extends AbstractModel
{
    /**
     * @var integer Node type. 0: master node; 1: replica node
     */
    public $NodeType;

    /**
     * @var integer ID of the master or replica node, which is not required during instance creation
     */
    public $NodeId;

    /**
     * @var integer AZ ID of the master or replica node
     */
    public $ZoneId;

    /**
     * @var string AZ name of the master or replica node
     */
    public $ZoneName;

    /**
     * @param integer $NodeType Node type. 0: master node; 1: replica node
     * @param integer $NodeId ID of the master or replica node, which is not required during instance creation
     * @param integer $ZoneId AZ ID of the master or replica node
     * @param string $ZoneName AZ name of the master or replica node
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
