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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkAppJobs response structure.
 *
 * @method array getSparkAppJobs() Obtain Detailed list of Spark jobs
 * @method void setSparkAppJobs(array $SparkAppJobs) Set Detailed list of Spark jobs
 * @method integer getTotalCount() Obtain Total number of Spark jobs
 * @method void setTotalCount(integer $TotalCount) Set Total number of Spark jobs
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSparkAppJobsResponse extends AbstractModel
{
    /**
     * @var array Detailed list of Spark jobs
     */
    public $SparkAppJobs;

    /**
     * @var integer Total number of Spark jobs
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SparkAppJobs Detailed list of Spark jobs
     * @param integer $TotalCount Total number of Spark jobs
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
        if (array_key_exists("SparkAppJobs",$param) and $param["SparkAppJobs"] !== null) {
            $this->SparkAppJobs = [];
            foreach ($param["SparkAppJobs"] as $key => $value){
                $obj = new SparkJobInfo();
                $obj->deserialize($value);
                array_push($this->SparkAppJobs, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
