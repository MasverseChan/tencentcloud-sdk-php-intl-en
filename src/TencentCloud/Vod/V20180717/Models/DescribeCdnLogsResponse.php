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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCdnLogs response structure.
 *
 * @method integer getTotalCount() Obtain Total number of log download links
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of log download links
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getOverseaCdnLogs() Obtain Log download list for CDN nodes outside Mainland China. If global acceleration is not enabled for the domain name, ignore this parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOverseaCdnLogs(array $OverseaCdnLogs) Set Log download list for CDN nodes outside Mainland China. If global acceleration is not enabled for the domain name, ignore this parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDomesticCdnLogs() Obtain Log download list for CDN nodes in Mainland China.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomesticCdnLogs(array $DomesticCdnLogs) Set Log download list for CDN nodes in Mainland China.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCdnLogsResponse extends AbstractModel
{
    /**
     * @var integer Total number of log download links
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $TotalCount;

    /**
     * @var array Log download list for CDN nodes outside Mainland China. If global acceleration is not enabled for the domain name, ignore this parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OverseaCdnLogs;

    /**
     * @var array Log download list for CDN nodes in Mainland China.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DomesticCdnLogs;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of log download links
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $OverseaCdnLogs Log download list for CDN nodes outside Mainland China. If global acceleration is not enabled for the domain name, ignore this parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DomesticCdnLogs Log download list for CDN nodes in Mainland China.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("OverseaCdnLogs",$param) and $param["OverseaCdnLogs"] !== null) {
            $this->OverseaCdnLogs = [];
            foreach ($param["OverseaCdnLogs"] as $key => $value){
                $obj = new CdnLogInfo();
                $obj->deserialize($value);
                array_push($this->OverseaCdnLogs, $obj);
            }
        }

        if (array_key_exists("DomesticCdnLogs",$param) and $param["DomesticCdnLogs"] !== null) {
            $this->DomesticCdnLogs = [];
            foreach ($param["DomesticCdnLogs"] as $key => $value){
                $obj = new CdnLogInfo();
                $obj->deserialize($value);
                array_push($this->DomesticCdnLogs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
