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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule engine configuration
 *
 * @method string getSwitch() Obtain Specifies whether to enable rule engine
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Specifies whether to enable rule engine
`on`: Enable
`off`: Disable
 * @method string getContent() Obtain Rule
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setContent(string $Content) Set Rule
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class RuleEngine extends AbstractModel
{
    /**
     * @var string Specifies whether to enable rule engine
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var string Rule
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @param string $Switch Specifies whether to enable rule engine
`on`: Enable
`off`: Disable
     * @param string $Content Rule
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
