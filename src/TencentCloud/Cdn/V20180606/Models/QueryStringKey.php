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
 * A part of `CacheKey`
 *
 * @method string getSwitch() Obtain Whether to use `QueryString` as part of `CacheKey`. Valid values: on, off
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to use `QueryString` as part of `CacheKey`. Valid values: on, off
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReorder() Obtain Whether to sort again
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReorder(string $Reorder) Set Whether to sort again
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAction() Obtain Include/exclude query parameters. Valid values: `includeAll`, `excludeAll`, `includeCustom`, `excludeAll`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Include/exclude query parameters. Valid values: `includeAll`, `excludeAll`, `includeCustom`, `excludeAll`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Array of included/excluded URL parameters (separated by ';')
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Array of included/excluded URL parameters (separated by ';')
Note: this field may return null, indicating that no valid values can be obtained.
 */
class QueryStringKey extends AbstractModel
{
    /**
     * @var string Whether to use `QueryString` as part of `CacheKey`. Valid values: on, off
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var string Whether to sort again
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Reorder;

    /**
     * @var string Include/exclude query parameters. Valid values: `includeAll`, `excludeAll`, `includeCustom`, `excludeAll`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var string Array of included/excluded URL parameters (separated by ';')
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param string $Switch Whether to use `QueryString` as part of `CacheKey`. Valid values: on, off
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Reorder Whether to sort again
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Action Include/exclude query parameters. Valid values: `includeAll`, `excludeAll`, `includeCustom`, `excludeAll`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Value Array of included/excluded URL parameters (separated by ';')
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Reorder",$param) and $param["Reorder"] !== null) {
            $this->Reorder = $param["Reorder"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
