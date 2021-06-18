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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of purchasable instance specifications. `Cpu` and `Memory` determine the instance specification during instance creation. The value range of the storage capacity is [MinStorageSize,MaxStorageSize]
 *
 * @method integer getCpu() Obtain Number of instance CPU cores
 * @method void setCpu(integer $Cpu) Set Number of instance CPU cores
 * @method integer getMemory() Obtain Instance memory in GB
 * @method void setMemory(integer $Memory) Set Instance memory in GB
 * @method integer getMaxStorageSize() Obtain Maximum instance storage capacity GB
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set Maximum instance storage capacity GB
 * @method integer getMinStorageSize() Obtain Minimum instance storage capacity GB
 * @method void setMinStorageSize(integer $MinStorageSize) Set Minimum instance storage capacity GB
 */
class InstanceSpec extends AbstractModel
{
    /**
     * @var integer Number of instance CPU cores
     */
    public $Cpu;

    /**
     * @var integer Instance memory in GB
     */
    public $Memory;

    /**
     * @var integer Maximum instance storage capacity GB
     */
    public $MaxStorageSize;

    /**
     * @var integer Minimum instance storage capacity GB
     */
    public $MinStorageSize;

    /**
     * @param integer $Cpu Number of instance CPU cores
     * @param integer $Memory Instance memory in GB
     * @param integer $MaxStorageSize Maximum instance storage capacity GB
     * @param integer $MinStorageSize Minimum instance storage capacity GB
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }
    }
}
