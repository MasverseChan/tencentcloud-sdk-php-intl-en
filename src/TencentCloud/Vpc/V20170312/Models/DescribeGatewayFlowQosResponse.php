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
 * DescribeGatewayFlowQos response structure.
 *
 * @method array getGatewayQosSet() Obtain List of instance details
 * @method void setGatewayQosSet(array $GatewayQosSet) Set List of instance details
 * @method integer getTotalCount() Obtain Number of eligible instances.
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible instances.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeGatewayFlowQosResponse extends AbstractModel
{
    /**
     * @var array List of instance details
     */
    public $GatewayQosSet;

    /**
     * @var integer Number of eligible instances.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $GatewayQosSet List of instance details
     * @param integer $TotalCount Number of eligible instances.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("GatewayQosSet",$param) and $param["GatewayQosSet"] !== null) {
            $this->GatewayQosSet = [];
            foreach ($param["GatewayQosSet"] as $key => $value){
                $obj = new GatewayQos();
                $obj->deserialize($value);
                array_push($this->GatewayQosSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
