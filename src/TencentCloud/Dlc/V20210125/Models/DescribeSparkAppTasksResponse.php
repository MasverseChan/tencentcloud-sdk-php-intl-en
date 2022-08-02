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
 * DescribeSparkAppTasks response structure.
 *
 * @method TaskResponseInfo getTasks() Obtain Task result (this field has been disused)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTasks(TaskResponseInfo $Tasks) Set Task result (this field has been disused)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of tasks
 * @method void setTotalCount(integer $TotalCount) Set Total number of tasks
 * @method array getSparkAppTasks() Obtain List of task results
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparkAppTasks(array $SparkAppTasks) Set List of task results
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSparkAppTasksResponse extends AbstractModel
{
    /**
     * @var TaskResponseInfo Task result (this field has been disused)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tasks;

    /**
     * @var integer Total number of tasks
     */
    public $TotalCount;

    /**
     * @var array List of task results
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparkAppTasks;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param TaskResponseInfo $Tasks Task result (this field has been disused)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of tasks
     * @param array $SparkAppTasks List of task results
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = new TaskResponseInfo();
            $this->Tasks->deserialize($param["Tasks"]);
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SparkAppTasks",$param) and $param["SparkAppTasks"] !== null) {
            $this->SparkAppTasks = [];
            foreach ($param["SparkAppTasks"] as $key => $value){
                $obj = new TaskResponseInfo();
                $obj->deserialize($value);
                array_push($this->SparkAppTasks, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
