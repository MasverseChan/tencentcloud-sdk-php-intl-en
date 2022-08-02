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

namespace TencentCloud\Dlc\V20210125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dlc\V20210125\Models as Models;

/**
 * @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) This API is used to cancel a task.
 * @method Models\CreateSparkAppResponse CreateSparkApp(Models\CreateSparkAppRequest $req) This API is used to create a Spark application.
 * @method Models\CreateSparkAppTaskResponse CreateSparkAppTask(Models\CreateSparkAppTaskRequest $req) This API is used to create a Spark task.
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) This API is used to create a SQL query task. (We recommend you use the `CreateTasks` API instead.)
 * @method Models\CreateTasksResponse CreateTasks(Models\CreateTasksRequest $req) This API is used to create tasks in batches.
 * @method Models\DeleteSparkAppResponse DeleteSparkApp(Models\DeleteSparkAppRequest $req) This API is used to delete a Spark application.
 * @method Models\DescribeSparkAppJobResponse DescribeSparkAppJob(Models\DescribeSparkAppJobRequest $req) This API is used to query a specific Spark application.
 * @method Models\DescribeSparkAppJobsResponse DescribeSparkAppJobs(Models\DescribeSparkAppJobsRequest $req) This API is used to get the list of Spark applications.
 * @method Models\DescribeSparkAppTasksResponse DescribeSparkAppTasks(Models\DescribeSparkAppTasksRequest $req) This API is used to query the list of running task instances of a Spark application.
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) This API is used to query the result of a task.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) This API is used to query the list of tasks.
 * @method Models\ModifySparkAppResponse ModifySparkApp(Models\ModifySparkAppRequest $req) This API is used to update a Spark application.
 */

class DlcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dlc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dlc";

    /**
     * @var string
     */
    protected $version = "2021-01-25";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("dlc")."\\"."V20210125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}