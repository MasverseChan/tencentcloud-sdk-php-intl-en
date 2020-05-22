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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrigger request structure.
 *
 * @method string getFunctionName() Obtain Name of the function bound to the new trigger
 * @method void setFunctionName(string $FunctionName) Set Name of the function bound to the new trigger
 * @method string getTriggerName() Obtain Name of a new trigger. For a timer trigger, the name can contain up to 100 letters, digits, dashes, and underscores; for a COS trigger, it should be an access domain name of the corresponding COS bucket applicable to the XML API (e.g., 5401-5ff414-12345.cos.ap-shanghai.myqcloud.com); for other triggers, please see the descriptions of parameters bound to the specific trigger.
 * @method void setTriggerName(string $TriggerName) Set Name of a new trigger. For a timer trigger, the name can contain up to 100 letters, digits, dashes, and underscores; for a COS trigger, it should be an access domain name of the corresponding COS bucket applicable to the XML API (e.g., 5401-5ff414-12345.cos.ap-shanghai.myqcloud.com); for other triggers, please see the descriptions of parameters bound to the specific trigger.
 * @method string getType() Obtain Trigger type. Currently, COS, CMQ, timer, and ckafka triggers are supported.
 * @method void setType(string $Type) Set Trigger type. Currently, COS, CMQ, timer, and ckafka triggers are supported.
 * @method string getTriggerDesc() Obtain For parameters of triggers, see [Trigger Description](https://cloud.tencent.com/document/product/583/39901)
 * @method void setTriggerDesc(string $TriggerDesc) Set For parameters of triggers, see [Trigger Description](https://cloud.tencent.com/document/product/583/39901)
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method string getQualifier() Obtain Function version
 * @method void setQualifier(string $Qualifier) Set Function version
 * @method string getEnable() Obtain Initial enabling status of the trigger. `OPEN` indicates enabled, and `CLOSE` indicates disabled.
 * @method void setEnable(string $Enable) Set Initial enabling status of the trigger. `OPEN` indicates enabled, and `CLOSE` indicates disabled.
 */
class CreateTriggerRequest extends AbstractModel
{
    /**
     * @var string Name of the function bound to the new trigger
     */
    public $FunctionName;

    /**
     * @var string Name of a new trigger. For a timer trigger, the name can contain up to 100 letters, digits, dashes, and underscores; for a COS trigger, it should be an access domain name of the corresponding COS bucket applicable to the XML API (e.g., 5401-5ff414-12345.cos.ap-shanghai.myqcloud.com); for other triggers, please see the descriptions of parameters bound to the specific trigger.
     */
    public $TriggerName;

    /**
     * @var string Trigger type. Currently, COS, CMQ, timer, and ckafka triggers are supported.
     */
    public $Type;

    /**
     * @var string For parameters of triggers, see [Trigger Description](https://cloud.tencent.com/document/product/583/39901)
     */
    public $TriggerDesc;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var string Function version
     */
    public $Qualifier;

    /**
     * @var string Initial enabling status of the trigger. `OPEN` indicates enabled, and `CLOSE` indicates disabled.
     */
    public $Enable;

    /**
     * @param string $FunctionName Name of the function bound to the new trigger
     * @param string $TriggerName Name of a new trigger. For a timer trigger, the name can contain up to 100 letters, digits, dashes, and underscores; for a COS trigger, it should be an access domain name of the corresponding COS bucket applicable to the XML API (e.g., 5401-5ff414-12345.cos.ap-shanghai.myqcloud.com); for other triggers, please see the descriptions of parameters bound to the specific trigger.
     * @param string $Type Trigger type. Currently, COS, CMQ, timer, and ckafka triggers are supported.
     * @param string $TriggerDesc For parameters of triggers, see [Trigger Description](https://cloud.tencent.com/document/product/583/39901)
     * @param string $Namespace Function namespace
     * @param string $Qualifier Function version
     * @param string $Enable Initial enabling status of the trigger. `OPEN` indicates enabled, and `CLOSE` indicates disabled.
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}