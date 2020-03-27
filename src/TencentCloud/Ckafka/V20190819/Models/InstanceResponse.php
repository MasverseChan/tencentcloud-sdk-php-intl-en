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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceList() Obtain List of eligible instances
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceList(array $InstanceList) Set List of eligible instances
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of eligible results
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of eligible results
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Aggregated returned result of instance status
 */
class InstanceResponse extends AbstractModel
{
    /**
     * @var array List of eligible instances
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceList;

    /**
     * @var integer Total number of eligible results
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;
    /**
     * @param array $InstanceList List of eligible instances
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of eligible results
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
