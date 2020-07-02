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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceStatus response structure.
 *
 * @method boolean getServiceEnabled() Obtain Whether the KMS service has been activated. true: activated
 * @method void setServiceEnabled(boolean $ServiceEnabled) Set Whether the KMS service has been activated. true: activated
 * @method integer getInvalidType() Obtain Service unavailability type. 0: not purchased; 1: normal; 2: suspended due to arrears; 3: resource released
 * @method void setInvalidType(integer $InvalidType) Set Service unavailability type. 0: not purchased; 1: normal; 2: suspended due to arrears; 3: resource released
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean Whether the KMS service has been activated. true: activated
     */
    public $ServiceEnabled;

    /**
     * @var integer Service unavailability type. 0: not purchased; 1: normal; 2: suspended due to arrears; 3: resource released
     */
    public $InvalidType;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled Whether the KMS service has been activated. true: activated
     * @param integer $InvalidType Service unavailability type. 0: not purchased; 1: normal; 2: suspended due to arrears; 3: resource released
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
        if (array_key_exists("ServiceEnabled",$param) and $param["ServiceEnabled"] !== null) {
            $this->ServiceEnabled = $param["ServiceEnabled"];
        }

        if (array_key_exists("InvalidType",$param) and $param["InvalidType"] !== null) {
            $this->InvalidType = $param["InvalidType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
