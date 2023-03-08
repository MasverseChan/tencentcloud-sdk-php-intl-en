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
 * ModifyNetworkConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getOperation() Obtain Network change type. Valid values:
- `changeVip`: VPC change, including the private IPv4 address and port.
- `changeVpc`: Subnet change.
- `changeBaseToVpc`: Change from classic network to VPC.
- `changeVPort`: Port change.
 * @method void setOperation(string $Operation) Set Network change type. Valid values:
- `changeVip`: VPC change, including the private IPv4 address and port.
- `changeVpc`: Subnet change.
- `changeBaseToVpc`: Change from classic network to VPC.
- `changeVPort`: Port change.
 * @method string getVip() Obtain Private IPv4 address of the instance, which is required if `Operation` is `changeVip`.
 * @method void setVip(string $Vip) Set Private IPv4 address of the instance, which is required if `Operation` is `changeVip`.
 * @method string getVpcId() Obtain VPC ID after the change, which is required if `Operation` is `changeVpc` or `changeBaseToVpc`.
 * @method void setVpcId(string $VpcId) Set VPC ID after the change, which is required if `Operation` is `changeVpc` or `changeBaseToVpc`.
 * @method string getSubnetId() Obtain Subnet ID after the change, which is required if `Operation` is `changeVpc` or `changeBaseToVpc`.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID after the change, which is required if `Operation` is `changeVpc` or `changeBaseToVpc`.
 * @method integer getRecycle() Obtain Retention period of the original private IPv4 address
- Unit: Days.
- Valid values: `0`, `1`, `2`, `3`, `7`, `15`.

**Note**: You can set the retention period of the original address only in the latest SDK. In earlier SDKs, the original address is released immediately. To view the SDK version, go to [SDK Center](https://intl.cloud.tencent.com/document/sdk?from_cn_redirect=1).
 * @method void setRecycle(integer $Recycle) Set Retention period of the original private IPv4 address
- Unit: Days.
- Valid values: `0`, `1`, `2`, `3`, `7`, `15`.

**Note**: You can set the retention period of the original address only in the latest SDK. In earlier SDKs, the original address is released immediately. To view the SDK version, go to [SDK Center](https://intl.cloud.tencent.com/document/sdk?from_cn_redirect=1).
 * @method integer getVPort() Obtain Network port after the change, which is required if `Operation` is `changeVPort` or `changeVip`. Value range: [1024,65535].
 * @method void setVPort(integer $VPort) Set Network port after the change, which is required if `Operation` is `changeVPort` or `changeVip`. Value range: [1024,65535].
 */
class ModifyNetworkConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Network change type. Valid values:
- `changeVip`: VPC change, including the private IPv4 address and port.
- `changeVpc`: Subnet change.
- `changeBaseToVpc`: Change from classic network to VPC.
- `changeVPort`: Port change.
     */
    public $Operation;

    /**
     * @var string Private IPv4 address of the instance, which is required if `Operation` is `changeVip`.
     */
    public $Vip;

    /**
     * @var string VPC ID after the change, which is required if `Operation` is `changeVpc` or `changeBaseToVpc`.
     */
    public $VpcId;

    /**
     * @var string Subnet ID after the change, which is required if `Operation` is `changeVpc` or `changeBaseToVpc`.
     */
    public $SubnetId;

    /**
     * @var integer Retention period of the original private IPv4 address
- Unit: Days.
- Valid values: `0`, `1`, `2`, `3`, `7`, `15`.

**Note**: You can set the retention period of the original address only in the latest SDK. In earlier SDKs, the original address is released immediately. To view the SDK version, go to [SDK Center](https://intl.cloud.tencent.com/document/sdk?from_cn_redirect=1).
     */
    public $Recycle;

    /**
     * @var integer Network port after the change, which is required if `Operation` is `changeVPort` or `changeVip`. Value range: [1024,65535].
     */
    public $VPort;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Operation Network change type. Valid values:
- `changeVip`: VPC change, including the private IPv4 address and port.
- `changeVpc`: Subnet change.
- `changeBaseToVpc`: Change from classic network to VPC.
- `changeVPort`: Port change.
     * @param string $Vip Private IPv4 address of the instance, which is required if `Operation` is `changeVip`.
     * @param string $VpcId VPC ID after the change, which is required if `Operation` is `changeVpc` or `changeBaseToVpc`.
     * @param string $SubnetId Subnet ID after the change, which is required if `Operation` is `changeVpc` or `changeBaseToVpc`.
     * @param integer $Recycle Retention period of the original private IPv4 address
- Unit: Days.
- Valid values: `0`, `1`, `2`, `3`, `7`, `15`.

**Note**: You can set the retention period of the original address only in the latest SDK. In earlier SDKs, the original address is released immediately. To view the SDK version, go to [SDK Center](https://intl.cloud.tencent.com/document/sdk?from_cn_redirect=1).
     * @param integer $VPort Network port after the change, which is required if `Operation` is `changeVPort` or `changeVip`. Value range: [1024,65535].
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Recycle",$param) and $param["Recycle"] !== null) {
            $this->Recycle = $param["Recycle"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }
    }
}
