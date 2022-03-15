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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTarget request structure.
 *
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getType() Obtain Target type
 * @method void setType(string $Type) Set Target type
 * @method TargetDescription getTargetDescription() Obtain Target description
 * @method void setTargetDescription(TargetDescription $TargetDescription) Set Target description
 * @method string getRuleId() Obtain Event rule ID
 * @method void setRuleId(string $RuleId) Set Event rule ID
 */
class CreateTargetRequest extends AbstractModel
{
    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string Target type
     */
    public $Type;

    /**
     * @var TargetDescription Target description
     */
    public $TargetDescription;

    /**
     * @var string Event rule ID
     */
    public $RuleId;

    /**
     * @param string $EventBusId Event bus ID
     * @param string $Type Target type
     * @param TargetDescription $TargetDescription Target description
     * @param string $RuleId Event rule ID
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TargetDescription",$param) and $param["TargetDescription"] !== null) {
            $this->TargetDescription = new TargetDescription();
            $this->TargetDescription->deserialize($param["TargetDescription"]);
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
