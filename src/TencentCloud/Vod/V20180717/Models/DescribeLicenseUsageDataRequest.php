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
 * DescribeLicenseUsageData request structure.
 *
 * @method string getStartTime() Obtain The start date for the query in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
 * @method void setStartTime(string $StartTime) Set The start date for the query in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
 * @method string getEndTime() Obtain The end date for the query in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format). The end date must be later than the start date.
 * @method void setEndTime(string $EndTime) Set The end date for the query in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format). The end date must be later than the start date.
 * @method string getLicenseType() Obtain The license type, which is DRM by default. Valid values:
<li> DRM</li>
 * @method void setLicenseType(string $LicenseType) Set The license type, which is DRM by default. Valid values:
<li> DRM</li>
 * @method integer getSubAppId() Obtain The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 */
class DescribeLicenseUsageDataRequest extends AbstractModel
{
    /**
     * @var string The start date for the query in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
     */
    public $StartTime;

    /**
     * @var string The end date for the query in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format). The end date must be later than the start date.
     */
    public $EndTime;

    /**
     * @var string The license type, which is DRM by default. Valid values:
<li> DRM</li>
     */
    public $LicenseType;

    /**
     * @var integer The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param string $StartTime The start date for the query in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
     * @param string $EndTime The end date for the query in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format). The end date must be later than the start date.
     * @param string $LicenseType The license type, which is DRM by default. Valid values:
<li> DRM</li>
     * @param integer $SubAppId The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}