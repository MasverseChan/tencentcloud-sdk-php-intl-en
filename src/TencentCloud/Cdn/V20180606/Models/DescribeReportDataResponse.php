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
 * DescribeReportData response structure.
 *
 * @method array getDomainReport() Obtain Domain name-level data details.
 * @method void setDomainReport(array $DomainReport) Set Domain name-level data details.
 * @method array getProjectReport() Obtain Project-level data details
 * @method void setProjectReport(array $ProjectReport) Set Project-level data details
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeReportDataResponse extends AbstractModel
{
    /**
     * @var array Domain name-level data details.
     */
    public $DomainReport;

    /**
     * @var array Project-level data details
     */
    public $ProjectReport;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DomainReport Domain name-level data details.
     * @param array $ProjectReport Project-level data details
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
        if (array_key_exists("DomainReport",$param) and $param["DomainReport"] !== null) {
            $this->DomainReport = [];
            foreach ($param["DomainReport"] as $key => $value){
                $obj = new ReportData();
                $obj->deserialize($value);
                array_push($this->DomainReport, $obj);
            }
        }

        if (array_key_exists("ProjectReport",$param) and $param["ProjectReport"] !== null) {
            $this->ProjectReport = [];
            foreach ($param["ProjectReport"] as $key => $value){
                $obj = new ReportData();
                $obj->deserialize($value);
                array_push($this->ProjectReport, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
