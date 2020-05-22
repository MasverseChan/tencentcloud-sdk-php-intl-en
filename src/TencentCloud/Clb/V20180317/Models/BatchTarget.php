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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch binding type
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method integer getPort() Obtain Binding port
 * @method void setPort(integer $Port) Set Binding port
 * @method string getInstanceId() Obtain CVM instance ID
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID
 * @method string getEniIp() Obtain ENI IP
 * @method void setEniIp(string $EniIp) Set ENI IP
 * @method integer getWeight() Obtain Weight of a CVM instance. Value range: [0, 100]. If it is not specified when binding the instance, 10 will be used by default.
 * @method void setWeight(integer $Weight) Set Weight of a CVM instance. Value range: [0, 100]. If it is not specified when binding the instance, 10 will be used by default.
 * @method string getLocationId() Obtain Layer-7 rule ID
 * @method void setLocationId(string $LocationId) Set Layer-7 rule ID
 */
class BatchTarget extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var integer Binding port
     */
    public $Port;

    /**
     * @var string CVM instance ID
     */
    public $InstanceId;

    /**
     * @var string ENI IP
     */
    public $EniIp;

    /**
     * @var integer Weight of a CVM instance. Value range: [0, 100]. If it is not specified when binding the instance, 10 will be used by default.
     */
    public $Weight;

    /**
     * @var string Layer-7 rule ID
     */
    public $LocationId;

    /**
     * @param string $ListenerId Listener ID
     * @param integer $Port Binding port
     * @param string $InstanceId CVM instance ID
     * @param string $EniIp ENI IP
     * @param integer $Weight Weight of a CVM instance. Value range: [0, 100]. If it is not specified when binding the instance, 10 will be used by default.
     * @param string $LocationId Layer-7 rule ID
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }
    }
}