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
 * Parameter template information
 *
 * @method integer getId() Obtain Parameter template ID
 * @method void setId(integer $Id) Set Parameter template ID
 * @method string getTemplateName() Obtain Parameter template name
 * @method void setTemplateName(string $TemplateName) Set Parameter template name
 * @method string getTemplateDescription() Obtain Parameter template description
 * @method void setTemplateDescription(string $TemplateDescription) Set Parameter template description
 * @method string getEngineVersion() Obtain Engine version
 * @method void setEngineVersion(string $EngineVersion) Set Engine version
 */
class ParamTemplateListInfo extends AbstractModel
{
    /**
     * @var integer Parameter template ID
     */
    public $Id;

    /**
     * @var string Parameter template name
     */
    public $TemplateName;

    /**
     * @var string Parameter template description
     */
    public $TemplateDescription;

    /**
     * @var string Engine version
     */
    public $EngineVersion;

    /**
     * @param integer $Id Parameter template ID
     * @param string $TemplateName Parameter template name
     * @param string $TemplateDescription Parameter template description
     * @param string $EngineVersion Engine version
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }
    }
}
