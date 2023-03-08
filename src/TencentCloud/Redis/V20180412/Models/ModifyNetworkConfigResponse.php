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
 * ModifyNetworkConfig response structure.
 *
 * @method boolean getStatus() Obtain Execution status. Ignore this parameter.
 * @method void setStatus(boolean $Status) Set Execution status. Ignore this parameter.
 * @method string getSubnetId() Obtain New subnet ID of the instance
 * @method void setSubnetId(string $SubnetId) Set New subnet ID of the instance
 * @method string getVpcId() Obtain New VPC ID of the instance
 * @method void setVpcId(string $VpcId) Set New VPC ID of the instance
 * @method string getVip() Obtain New private IPv4 address of the instance
 * @method void setVip(string $Vip) Set New private IPv4 address of the instance
 * @method integer getTaskId() Obtain Task ID, which can be used to query the task execution status through the `DescribeTaskInfo` API.
 * @method void setTaskId(integer $TaskId) Set Task ID, which can be used to query the task execution status through the `DescribeTaskInfo` API.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyNetworkConfigResponse extends AbstractModel
{
    /**
     * @var boolean Execution status. Ignore this parameter.
     */
    public $Status;

    /**
     * @var string New subnet ID of the instance
     */
    public $SubnetId;

    /**
     * @var string New VPC ID of the instance
     */
    public $VpcId;

    /**
     * @var string New private IPv4 address of the instance
     */
    public $Vip;

    /**
     * @var integer Task ID, which can be used to query the task execution status through the `DescribeTaskInfo` API.
     */
    public $TaskId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $Status Execution status. Ignore this parameter.
     * @param string $SubnetId New subnet ID of the instance
     * @param string $VpcId New VPC ID of the instance
     * @param string $Vip New private IPv4 address of the instance
     * @param integer $TaskId Task ID, which can be used to query the task execution status through the `DescribeTaskInfo` API.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
