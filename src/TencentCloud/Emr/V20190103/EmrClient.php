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

namespace TencentCloud\Emr\V20190103;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Emr\V20190103\Models as Models;

/**
 * @method Models\AddUsersForUserManagerResponse AddUsersForUserManager(Models\AddUsersForUserManagerRequest $req) This API is used to add user lists (user management).
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to create an EMR cluster instance.
 * @method Models\DescribeClusterNodesResponse DescribeClusterNodes(Models\DescribeClusterNodesRequest $req) This API is used to query the information of a hardware node.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query EMR instances.
 * @method Models\DescribeInstancesListResponse DescribeInstancesList(Models\DescribeInstancesListRequest $req) This API is used to query EMR cluster instances.
 * @method Models\DescribeResourceScheduleResponse DescribeResourceSchedule(Models\DescribeResourceScheduleRequest $req) This API is used to get data from the YARN Resource Scheduling page.
 * @method Models\DescribeUsersForUserManagerResponse DescribeUsersForUserManager(Models\DescribeUsersForUserManagerRequest $req) This API is used to export users in batches.
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) This API is used to query price of instance creation.
 * @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) This API is used to query the price for renewal.
 * @method Models\InquiryPriceUpdateInstanceResponse InquiryPriceUpdateInstance(Models\InquiryPriceUpdateInstanceRequest $req) This API is used to query price of scaling.
 * @method Models\ModifyResourceScheduleConfigResponse ModifyResourceScheduleConfig(Models\ModifyResourceScheduleConfigRequest $req) This API is used to modify the resource configuration of YARN Resource Scheduling.
 * @method Models\ModifyResourceSchedulerResponse ModifyResourceScheduler(Models\ModifyResourceSchedulerRequest $req) This API is used to modify the YARN resource scheduler (the change will take effect after you click Apply).
 * @method Models\TerminateTasksResponse TerminateTasks(Models\TerminateTasksRequest $req) This API is used to terminate a task node.
 */

class EmrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "emr.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "emr";

    /**
     * @var string
     */
    protected $version = "2019-01-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("emr")."\\"."V20190103\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
