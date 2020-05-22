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
 * Function list
 *
 * @method string getModTime() Obtain Modification time
 * @method void setModTime(string $ModTime) Set Modification time
 * @method string getAddTime() Obtain Creation time
 * @method void setAddTime(string $AddTime) Set Creation time
 * @method string getRuntime() Obtain Running
 * @method void setRuntime(string $Runtime) Set Running
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getFunctionId() Obtain Function ID
 * @method void setFunctionId(string $FunctionId) Set Function ID
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getStatus() Obtain Function status
 * @method void setStatus(string $Status) Set Function status
 * @method string getStatusDesc() Obtain Function status details
 * @method void setStatusDesc(string $StatusDesc) Set Function status details
 * @method string getDescription() Obtain Function description
 * @method void setDescription(string $Description) Set Function description
 * @method array getTags() Obtain Function tag
 * @method void setTags(array $Tags) Set Function tag
 * @method string getType() Obtain Function type. The value is `HTTP` or `Event`.
 * @method void setType(string $Type) Set Function type. The value is `HTTP` or `Event`.
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string Modification time
     */
    public $ModTime;

    /**
     * @var string Creation time
     */
    public $AddTime;

    /**
     * @var string Running
     */
    public $Runtime;

    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Function ID
     */
    public $FunctionId;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Function status
     */
    public $Status;

    /**
     * @var string Function status details
     */
    public $StatusDesc;

    /**
     * @var string Function description
     */
    public $Description;

    /**
     * @var array Function tag
     */
    public $Tags;

    /**
     * @var string Function type. The value is `HTTP` or `Event`.
     */
    public $Type;

    /**
     * @param string $ModTime Modification time
     * @param string $AddTime Creation time
     * @param string $Runtime Running
     * @param string $FunctionName Function name
     * @param string $FunctionId Function ID
     * @param string $Namespace Namespace
     * @param string $Status Function status
     * @param string $StatusDesc Function status details
     * @param string $Description Function description
     * @param array $Tags Function tag
     * @param string $Type Function type. The value is `HTTP` or `Event`.
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}