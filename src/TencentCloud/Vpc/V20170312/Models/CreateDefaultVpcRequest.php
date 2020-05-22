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
 * CreateDefaultVpc request structure.
 *
 * @method string getZone() Obtain The ID of the availability zone in which the subnet resides. The availability zone will be randomly selected if not specified.
 * @method void setZone(string $Zone) Set The ID of the availability zone in which the subnet resides. The availability zone will be randomly selected if not specified.
 * @method boolean getForce() Obtain Whether to forcibly return a default VPC
 * @method void setForce(boolean $Force) Set Whether to forcibly return a default VPC
 */
class CreateDefaultVpcRequest extends AbstractModel
{
    /**
     * @var string The ID of the availability zone in which the subnet resides. The availability zone will be randomly selected if not specified.
     */
    public $Zone;

    /**
     * @var boolean Whether to forcibly return a default VPC
     */
    public $Force;

    /**
     * @param string $Zone The ID of the availability zone in which the subnet resides. The availability zone will be randomly selected if not specified.
     * @param boolean $Force Whether to forcibly return a default VPC
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}