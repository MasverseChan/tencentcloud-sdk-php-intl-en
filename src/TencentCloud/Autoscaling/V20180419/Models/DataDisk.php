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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of data disk in launch configuration. If this parameter is not specified, no data disk will be purchased by default. You can specify only one data disk when purchasing it.
 *
 * @method string getDiskType() Obtain Data disk type. For more information on limits of data disk types, see [Cloud Disk Types](https://intl.cloud.tencent.com/document/product/362/31636). Valid values:<br><li>`LOCAL_BASIC`: local disk <br><li>`LOCAL_SSD`: local SSD disk <br><li>`CLOUD_BASIC`: HDD cloud disk <br><li>`CLOUD_PREMIUM`: premium cloud storage<br><li>`CLOUD_SSD`: SSD cloud disk <br><br>The default value should be the same as the `DiskType` field under `SystemDisk`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setDiskType(string $DiskType) Set Data disk type. For more information on limits of data disk types, see [Cloud Disk Types](https://intl.cloud.tencent.com/document/product/362/31636). Valid values:<br><li>`LOCAL_BASIC`: local disk <br><li>`LOCAL_SSD`: local SSD disk <br><li>`CLOUD_BASIC`: HDD cloud disk <br><li>`CLOUD_PREMIUM`: premium cloud storage<br><li>`CLOUD_SSD`: SSD cloud disk <br><br>The default value should be the same as the `DiskType` field under `SystemDisk`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getDiskSize() Obtain Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [CVM Instance Configuration](https://intl.cloud.tencent.com/document/product/213/2177?from_cn_redirect=1). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [CVM Instance Configuration](https://intl.cloud.tencent.com/document/product/213/2177?from_cn_redirect=1). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSnapshotId() Obtain Data disk snapshot ID, such as `snap-l8psqwnt`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotId(string $SnapshotId) Set Data disk snapshot ID, such as `snap-l8psqwnt`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getDeleteWithInstance() Obtain Specifies whether the data disk is terminated along with the termination of the associated CVM instance.  Values: <br><li>`TRUE` (only available for pay-as-you-go cloud disks that are billed by hour) and `FALSE`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Specifies whether the data disk is terminated along with the termination of the associated CVM instance.  Values: <br><li>`TRUE` (only available for pay-as-you-go cloud disks that are billed by hour) and `FALSE`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string Data disk type. For more information on limits of data disk types, see [Cloud Disk Types](https://intl.cloud.tencent.com/document/product/362/31636). Valid values:<br><li>`LOCAL_BASIC`: local disk <br><li>`LOCAL_SSD`: local SSD disk <br><li>`CLOUD_BASIC`: HDD cloud disk <br><li>`CLOUD_PREMIUM`: premium cloud storage<br><li>`CLOUD_SSD`: SSD cloud disk <br><br>The default value should be the same as the `DiskType` field under `SystemDisk`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $DiskType;

    /**
     * @var integer Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [CVM Instance Configuration](https://intl.cloud.tencent.com/document/product/213/2177?from_cn_redirect=1). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Data disk snapshot ID, such as `snap-l8psqwnt`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotId;

    /**
     * @var boolean Specifies whether the data disk is terminated along with the termination of the associated CVM instance.  Values: <br><li>`TRUE` (only available for pay-as-you-go cloud disks that are billed by hour) and `FALSE`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $DeleteWithInstance;

    /**
     * @param string $DiskType Data disk type. For more information on limits of data disk types, see [Cloud Disk Types](https://intl.cloud.tencent.com/document/product/362/31636). Valid values:<br><li>`LOCAL_BASIC`: local disk <br><li>`LOCAL_SSD`: local SSD disk <br><li>`CLOUD_BASIC`: HDD cloud disk <br><li>`CLOUD_PREMIUM`: premium cloud storage<br><li>`CLOUD_SSD`: SSD cloud disk <br><br>The default value should be the same as the `DiskType` field under `SystemDisk`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $DiskSize Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [CVM Instance Configuration](https://intl.cloud.tencent.com/document/product/213/2177?from_cn_redirect=1). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SnapshotId Data disk snapshot ID, such as `snap-l8psqwnt`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $DeleteWithInstance Specifies whether the data disk is terminated along with the termination of the associated CVM instance.  Values: <br><li>`TRUE` (only available for pay-as-you-go cloud disks that are billed by hour) and `FALSE`.
Note: this field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }
    }
}
