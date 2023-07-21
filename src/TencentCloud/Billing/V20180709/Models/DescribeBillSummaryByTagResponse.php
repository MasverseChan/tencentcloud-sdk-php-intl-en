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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummaryByTag response structure.
 *
 * @method integer getReady() Obtain Indicates whether the data is ready. `0`: Not ready. `1`: Ready. If `Ready` is `0`, it indicates that the current UIN is initializing billing for the first time. Wait for 5-10 minutes and try again.
 * @method void setReady(integer $Ready) Set Indicates whether the data is ready. `0`: Not ready. `1`: Ready. If `Ready` is `0`, it indicates that the current UIN is initializing billing for the first time. Wait for 5-10 minutes and try again.
 * @method array getSummaryOverview() Obtain Details about cost distribution over different tags
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSummaryOverview(array $SummaryOverview) Set Details about cost distribution over different tags
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SummaryTotal getSummaryTotal() Obtain Total cost
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSummaryTotal(SummaryTotal $SummaryTotal) Set Total cost
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBillSummaryByTagResponse extends AbstractModel
{
    /**
     * @var integer Indicates whether the data is ready. `0`: Not ready. `1`: Ready. If `Ready` is `0`, it indicates that the current UIN is initializing billing for the first time. Wait for 5-10 minutes and try again.
     */
    public $Ready;

    /**
     * @var array Details about cost distribution over different tags
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SummaryOverview;

    /**
     * @var SummaryTotal Total cost
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SummaryTotal;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Ready Indicates whether the data is ready. `0`: Not ready. `1`: Ready. If `Ready` is `0`, it indicates that the current UIN is initializing billing for the first time. Wait for 5-10 minutes and try again.
     * @param array $SummaryOverview Details about cost distribution over different tags
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SummaryTotal $SummaryTotal Total cost
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Ready",$param) and $param["Ready"] !== null) {
            $this->Ready = $param["Ready"];
        }

        if (array_key_exists("SummaryOverview",$param) and $param["SummaryOverview"] !== null) {
            $this->SummaryOverview = [];
            foreach ($param["SummaryOverview"] as $key => $value){
                $obj = new TagSummaryOverviewItem();
                $obj->deserialize($value);
                array_push($this->SummaryOverview, $obj);
            }
        }

        if (array_key_exists("SummaryTotal",$param) and $param["SummaryTotal"] !== null) {
            $this->SummaryTotal = new SummaryTotal();
            $this->SummaryTotal->deserialize($param["SummaryTotal"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
