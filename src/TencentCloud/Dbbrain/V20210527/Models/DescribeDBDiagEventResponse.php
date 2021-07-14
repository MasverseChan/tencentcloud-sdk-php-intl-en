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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBDiagEvent response structure.
 *
 * @method string getDiagItem() Obtain Diagnosis item.
 * @method void setDiagItem(string $DiagItem) Set Diagnosis item.
 * @method string getDiagType() Obtain Diagnosis type.
 * @method void setDiagType(string $DiagType) Set Diagnosis type.
 * @method integer getEventId() Obtain Event ID.
 * @method void setEventId(integer $EventId) Set Event ID.
 * @method string getExplanation() Obtain Event details.
 * @method void setExplanation(string $Explanation) Set Event details.
 * @method string getOutline() Obtain Summary.
 * @method void setOutline(string $Outline) Set Summary.
 * @method string getProblem() Obtain Found problem.
 * @method void setProblem(string $Problem) Set Found problem.
 * @method integer getSeverity() Obtain Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
 * @method void setSeverity(integer $Severity) Set Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getSuggestions() Obtain Suggestion.
 * @method void setSuggestions(string $Suggestions) Set Suggestion.
 * @method string getMetric() Obtain Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetric(string $Metric) Set Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBDiagEventResponse extends AbstractModel
{
    /**
     * @var string Diagnosis item.
     */
    public $DiagItem;

    /**
     * @var string Diagnosis type.
     */
    public $DiagType;

    /**
     * @var integer Event ID.
     */
    public $EventId;

    /**
     * @var string Event details.
     */
    public $Explanation;

    /**
     * @var string Summary.
     */
    public $Outline;

    /**
     * @var string Found problem.
     */
    public $Problem;

    /**
     * @var integer Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
     */
    public $Severity;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string Suggestion.
     */
    public $Suggestions;

    /**
     * @var string Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Metric;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $DiagItem Diagnosis item.
     * @param string $DiagType Diagnosis type.
     * @param integer $EventId Event ID.
     * @param string $Explanation Event details.
     * @param string $Outline Summary.
     * @param string $Problem Found problem.
     * @param integer $Severity Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
     * @param string $StartTime Start time
     * @param string $Suggestions Suggestion.
     * @param string $Metric Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time.
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
        if (array_key_exists("DiagItem",$param) and $param["DiagItem"] !== null) {
            $this->DiagItem = $param["DiagItem"];
        }

        if (array_key_exists("DiagType",$param) and $param["DiagType"] !== null) {
            $this->DiagType = $param["DiagType"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Explanation",$param) and $param["Explanation"] !== null) {
            $this->Explanation = $param["Explanation"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }

        if (array_key_exists("Problem",$param) and $param["Problem"] !== null) {
            $this->Problem = $param["Problem"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Suggestions",$param) and $param["Suggestions"] !== null) {
            $this->Suggestions = $param["Suggestions"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
