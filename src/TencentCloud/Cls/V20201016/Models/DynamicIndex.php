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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dynamic index configuration

Note: This feature is currently in a beta test. To use it, please contact technical support.
 *
 * @method boolean getStatus() Obtain Dynamic index configuration status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(boolean $Status) Set Dynamic index configuration status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DynamicIndex extends AbstractModel
{
    /**
     * @var boolean Dynamic index configuration status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param boolean $Status Dynamic index configuration status
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
