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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSupportProxyVersion response structure.
 *
 * @method array getSupportProxyVersions() Obtain Collection of supported database proxy versions
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
 * @method void setSupportProxyVersions(array $SupportProxyVersions) Set Collection of supported database proxy versions
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
 * @method string getCurrentProxyVersion() Obtain The current proxy version
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set The current proxy version
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSupportProxyVersionResponse extends AbstractModel
{
    /**
     * @var array Collection of supported database proxy versions
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
     */
    public $SupportProxyVersions;

    /**
     * @var string The current proxy version
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
     */
    public $CurrentProxyVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SupportProxyVersions Collection of supported database proxy versions
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
     * @param string $CurrentProxyVersion The current proxy version
Note: u200dThis field may returnu200d·nullu200d·, indicating that no valid values can be obtained.
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
        if (array_key_exists("SupportProxyVersions",$param) and $param["SupportProxyVersions"] !== null) {
            $this->SupportProxyVersions = $param["SupportProxyVersions"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
