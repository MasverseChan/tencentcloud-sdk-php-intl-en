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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSdkVerificationResult response structure.
 *
 * @method string getResult() Obtain The result of the entire verification process.
 * @method void setResult(string $Result) Set The result of the entire verification process.
 * @method string getDescription() Obtain The result description.
 * @method void setDescription(string $Description) Set The result description.
 * @method integer getChargeCount() Obtain The charge count.
 * @method void setChargeCount(integer $ChargeCount) Set The charge count.
 * @method array getCardVerifyResults() Obtain The results of multiple OCR processes (in order). The result of the final process is taken as the valid result.
 * @method void setCardVerifyResults(array $CardVerifyResults) Set The results of multiple OCR processes (in order). The result of the final process is taken as the valid result.
 * @method array getCompareResults() Obtain The results of multiple liveness detection processes (in order). The result of the final process is taken as the valid result.
 * @method void setCompareResults(array $CompareResults) Set The results of multiple liveness detection processes (in order). The result of the final process is taken as the valid result.
 * @method string getExtra() Obtain Info passed in the process of getting the token.
 * @method void setExtra(string $Extra) Set Info passed in the process of getting the token.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetSdkVerificationResultResponse extends AbstractModel
{
    /**
     * @var string The result of the entire verification process.
     */
    public $Result;

    /**
     * @var string The result description.
     */
    public $Description;

    /**
     * @var integer The charge count.
     */
    public $ChargeCount;

    /**
     * @var array The results of multiple OCR processes (in order). The result of the final process is taken as the valid result.
     */
    public $CardVerifyResults;

    /**
     * @var array The results of multiple liveness detection processes (in order). The result of the final process is taken as the valid result.
     */
    public $CompareResults;

    /**
     * @var string Info passed in the process of getting the token.
     */
    public $Extra;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Result The result of the entire verification process.
     * @param string $Description The result description.
     * @param integer $ChargeCount The charge count.
     * @param array $CardVerifyResults The results of multiple OCR processes (in order). The result of the final process is taken as the valid result.
     * @param array $CompareResults The results of multiple liveness detection processes (in order). The result of the final process is taken as the valid result.
     * @param string $Extra Info passed in the process of getting the token.
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ChargeCount",$param) and $param["ChargeCount"] !== null) {
            $this->ChargeCount = $param["ChargeCount"];
        }

        if (array_key_exists("CardVerifyResults",$param) and $param["CardVerifyResults"] !== null) {
            $this->CardVerifyResults = [];
            foreach ($param["CardVerifyResults"] as $key => $value){
                $obj = new CardVerifyResult();
                $obj->deserialize($value);
                array_push($this->CardVerifyResults, $obj);
            }
        }

        if (array_key_exists("CompareResults",$param) and $param["CompareResults"] !== null) {
            $this->CompareResults = [];
            foreach ($param["CompareResults"] as $key => $value){
                $obj = new CompareResult();
                $obj->deserialize($value);
                array_push($this->CompareResults, $obj);
            }
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
