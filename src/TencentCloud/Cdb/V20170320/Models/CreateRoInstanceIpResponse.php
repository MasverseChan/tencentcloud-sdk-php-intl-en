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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoInstanceIp response structure.
 *
 * @method integer getRoVpcId() Obtain VPC ID of the read-only instance.
 * @method void setRoVpcId(integer $RoVpcId) Set VPC ID of the read-only instance.
 * @method integer getRoSubnetId() Obtain Subnet ID of the read-only instance.
 * @method void setRoSubnetId(integer $RoSubnetId) Set Subnet ID of the read-only instance.
 * @method string getRoVip() Obtain Private IP address of the read-only instance.
 * @method void setRoVip(string $RoVip) Set Private IP address of the read-only instance.
 * @method integer getRoVport() Obtain Private port number of the read-only instance.
 * @method void setRoVport(integer $RoVport) Set Private port number of the read-only instance.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateRoInstanceIpResponse extends AbstractModel
{
    /**
     * @var integer VPC ID of the read-only instance.
     */
    public $RoVpcId;

    /**
     * @var integer Subnet ID of the read-only instance.
     */
    public $RoSubnetId;

    /**
     * @var string Private IP address of the read-only instance.
     */
    public $RoVip;

    /**
     * @var integer Private port number of the read-only instance.
     */
    public $RoVport;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $RoVpcId VPC ID of the read-only instance.
     * @param integer $RoSubnetId Subnet ID of the read-only instance.
     * @param string $RoVip Private IP address of the read-only instance.
     * @param integer $RoVport Private port number of the read-only instance.
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
        if (array_key_exists("RoVpcId",$param) and $param["RoVpcId"] !== null) {
            $this->RoVpcId = $param["RoVpcId"];
        }

        if (array_key_exists("RoSubnetId",$param) and $param["RoSubnetId"] !== null) {
            $this->RoSubnetId = $param["RoSubnetId"];
        }

        if (array_key_exists("RoVip",$param) and $param["RoVip"] !== null) {
            $this->RoVip = $param["RoVip"];
        }

        if (array_key_exists("RoVport",$param) and $param["RoVport"] !== null) {
            $this->RoVport = $param["RoVport"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
