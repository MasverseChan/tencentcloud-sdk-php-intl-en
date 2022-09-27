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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNewL7Rules response structure.
 *
 * @method array getRules() Obtain List of forwarding rules
 * @method void setRules(array $Rules) Set List of forwarding rules
 * @method array getHealths() Obtain List of health check settings
 * @method void setHealths(array $Healths) Set List of health check settings
 * @method integer getTotal() Obtain Total number of rules
 * @method void setTotal(integer $Total) Set Total number of rules
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNewL7RulesResponse extends AbstractModel
{
    /**
     * @var array List of forwarding rules
     */
    public $Rules;

    /**
     * @var array List of health check settings
     */
    public $Healths;

    /**
     * @var integer Total number of rules
     */
    public $Total;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Rules List of forwarding rules
     * @param array $Healths List of health check settings
     * @param integer $Total Total number of rules
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new NewL7RuleEntry();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Healths",$param) and $param["Healths"] !== null) {
            $this->Healths = [];
            foreach ($param["Healths"] as $key => $value){
                $obj = new L7RuleHealth();
                $obj->deserialize($value);
                array_push($this->Healths, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}