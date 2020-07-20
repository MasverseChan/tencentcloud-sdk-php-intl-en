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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFlowLogAttribute request structure.
 *
 * @method string getVpcId() Obtain The VPC ID or the unified ID. We recommend you use the unified ID.
 * @method void setVpcId(string $VpcId) Set The VPC ID or the unified ID. We recommend you use the unified ID.
 * @method string getFlowLogId() Obtain The unique ID of the flow log collector.
 * @method void setFlowLogId(string $FlowLogId) Set The unique ID of the flow log collector.
 * @method string getFlowLogName() Obtain The name of the flow log collector.
 * @method void setFlowLogName(string $FlowLogName) Set The name of the flow log collector.
 * @method string getFlowLogDescription() Obtain The description of the flow log collector.
 * @method void setFlowLogDescription(string $FlowLogDescription) Set The description of the flow log collector.
 */
class ModifyFlowLogAttributeRequest extends AbstractModel
{
    /**
     * @var string The VPC ID or the unified ID. We recommend you use the unified ID.
     */
    public $VpcId;

    /**
     * @var string The unique ID of the flow log collector.
     */
    public $FlowLogId;

    /**
     * @var string The name of the flow log collector.
     */
    public $FlowLogName;

    /**
     * @var string The description of the flow log collector.
     */
    public $FlowLogDescription;

    /**
     * @param string $VpcId The VPC ID or the unified ID. We recommend you use the unified ID.
     * @param string $FlowLogId The unique ID of the flow log collector.
     * @param string $FlowLogName The name of the flow log collector.
     * @param string $FlowLogDescription The description of the flow log collector.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            $this->FlowLogId = $param["FlowLogId"];
        }

        if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
            $this->FlowLogName = $param["FlowLogName"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }
    }
}