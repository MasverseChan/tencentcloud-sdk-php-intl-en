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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryVoucherPool response structure.
 *
 * @method string getAgentName() Obtain Reseller name
 * @method void setAgentName(string $AgentName) Set Reseller name
 * @method integer getAccountType() Obtain Reseller role type (1: Reseller; 2: Distributor; 3: Second-level reseller)
 * @method void setAccountType(integer $AccountType) Set Reseller role type (1: Reseller; 2: Distributor; 3: Second-level reseller)
 * @method float getTotalQuota() Obtain Total quota
 * @method void setTotalQuota(float $TotalQuota) Set Total quota
 * @method float getRemainingQuota() Obtain Remaining quota
 * @method void setRemainingQuota(float $RemainingQuota) Set Remaining quota
 * @method integer getIssuedNum() Obtain The number of issued vouchers
 * @method void setIssuedNum(integer $IssuedNum) Set The number of issued vouchers
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class QueryVoucherPoolResponse extends AbstractModel
{
    /**
     * @var string Reseller name
     */
    public $AgentName;

    /**
     * @var integer Reseller role type (1: Reseller; 2: Distributor; 3: Second-level reseller)
     */
    public $AccountType;

    /**
     * @var float Total quota
     */
    public $TotalQuota;

    /**
     * @var float Remaining quota
     */
    public $RemainingQuota;

    /**
     * @var integer The number of issued vouchers
     */
    public $IssuedNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $AgentName Reseller name
     * @param integer $AccountType Reseller role type (1: Reseller; 2: Distributor; 3: Second-level reseller)
     * @param float $TotalQuota Total quota
     * @param float $RemainingQuota Remaining quota
     * @param integer $IssuedNum The number of issued vouchers
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
        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("RemainingQuota",$param) and $param["RemainingQuota"] !== null) {
            $this->RemainingQuota = $param["RemainingQuota"];
        }

        if (array_key_exists("IssuedNum",$param) and $param["IssuedNum"] !== null) {
            $this->IssuedNum = $param["IssuedNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
