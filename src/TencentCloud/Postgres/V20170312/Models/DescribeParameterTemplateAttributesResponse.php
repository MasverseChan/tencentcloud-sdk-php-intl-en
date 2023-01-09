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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParameterTemplateAttributes response structure.
 *
 * @method string getTemplateId() Obtain Parameter template ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateId(string $TemplateId) Set Parameter template ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Number of parameters contained in the parameter template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Number of parameters contained in the parameter template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getParamInfoSet() Obtain Parameter information contained in the parameter template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamInfoSet(array $ParamInfoSet) Set Parameter information contained in the parameter template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTemplateName() Obtain Parameter template name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateName(string $TemplateName) Set Parameter template name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBMajorVersion() Obtain Database version applicable to a parameter template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBMajorVersion(string $DBMajorVersion) Set Database version applicable to a parameter template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDBEngine() Obtain Database engine applicable to a parameter template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDBEngine(string $DBEngine) Set Database engine applicable to a parameter template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTemplateDescription() Obtain Parameter template description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateDescription(string $TemplateDescription) Set Parameter template description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeParameterTemplateAttributesResponse extends AbstractModel
{
    /**
     * @var string Parameter template ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateId;

    /**
     * @var integer Number of parameters contained in the parameter template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array Parameter information contained in the parameter template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamInfoSet;

    /**
     * @var string Parameter template name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateName;

    /**
     * @var string Database version applicable to a parameter template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBMajorVersion;

    /**
     * @var string Database engine applicable to a parameter template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DBEngine;

    /**
     * @var string Parameter template description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateDescription;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TemplateId Parameter template ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Number of parameters contained in the parameter template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ParamInfoSet Parameter information contained in the parameter template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TemplateName Parameter template name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBMajorVersion Database version applicable to a parameter template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DBEngine Database engine applicable to a parameter template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TemplateDescription Parameter template description
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ParamInfoSet",$param) and $param["ParamInfoSet"] !== null) {
            $this->ParamInfoSet = [];
            foreach ($param["ParamInfoSet"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamInfoSet, $obj);
            }
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}