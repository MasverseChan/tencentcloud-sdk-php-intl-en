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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataBackupOverview response structure.
 *
 * @method integer getDataBackupVolume() Obtain Total capacity of data backups in bytes in the current region (including automatic backups and manual backups).
 * @method void setDataBackupVolume(integer $DataBackupVolume) Set Total capacity of data backups in bytes in the current region (including automatic backups and manual backups).
 * @method integer getDataBackupCount() Obtain Total number of data backups in the current region.
 * @method void setDataBackupCount(integer $DataBackupCount) Set Total number of data backups in the current region.
 * @method integer getAutoBackupVolume() Obtain Total capacity of automatic backups in the current region.
 * @method void setAutoBackupVolume(integer $AutoBackupVolume) Set Total capacity of automatic backups in the current region.
 * @method integer getAutoBackupCount() Obtain Total number of automatic backups in the current region.
 * @method void setAutoBackupCount(integer $AutoBackupCount) Set Total number of automatic backups in the current region.
 * @method integer getManualBackupVolume() Obtain Total capacity of manual backups in the current region.
 * @method void setManualBackupVolume(integer $ManualBackupVolume) Set Total capacity of manual backups in the current region.
 * @method integer getManualBackupCount() Obtain Total number of manual backups in the current region.
 * @method void setManualBackupCount(integer $ManualBackupCount) Set Total number of manual backups in the current region.
 * @method integer getRemoteBackupVolume() Obtain Total capacity of remote backups
 * @method void setRemoteBackupVolume(integer $RemoteBackupVolume) Set Total capacity of remote backups
 * @method integer getRemoteBackupCount() Obtain Total number of remote backups
 * @method void setRemoteBackupCount(integer $RemoteBackupCount) Set Total number of remote backups
 * @method integer getDataBackupArchiveVolume() Obtain Total capacity of archive backups in the current region
 * @method void setDataBackupArchiveVolume(integer $DataBackupArchiveVolume) Set Total capacity of archive backups in the current region
 * @method integer getDataBackupArchiveCount() Obtain Total number of archive backups in the current region
 * @method void setDataBackupArchiveCount(integer $DataBackupArchiveCount) Set Total number of archive backups in the current region
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDataBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer Total capacity of data backups in bytes in the current region (including automatic backups and manual backups).
     */
    public $DataBackupVolume;

    /**
     * @var integer Total number of data backups in the current region.
     */
    public $DataBackupCount;

    /**
     * @var integer Total capacity of automatic backups in the current region.
     */
    public $AutoBackupVolume;

    /**
     * @var integer Total number of automatic backups in the current region.
     */
    public $AutoBackupCount;

    /**
     * @var integer Total capacity of manual backups in the current region.
     */
    public $ManualBackupVolume;

    /**
     * @var integer Total number of manual backups in the current region.
     */
    public $ManualBackupCount;

    /**
     * @var integer Total capacity of remote backups
     */
    public $RemoteBackupVolume;

    /**
     * @var integer Total number of remote backups
     */
    public $RemoteBackupCount;

    /**
     * @var integer Total capacity of archive backups in the current region
     */
    public $DataBackupArchiveVolume;

    /**
     * @var integer Total number of archive backups in the current region
     */
    public $DataBackupArchiveCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $DataBackupVolume Total capacity of data backups in bytes in the current region (including automatic backups and manual backups).
     * @param integer $DataBackupCount Total number of data backups in the current region.
     * @param integer $AutoBackupVolume Total capacity of automatic backups in the current region.
     * @param integer $AutoBackupCount Total number of automatic backups in the current region.
     * @param integer $ManualBackupVolume Total capacity of manual backups in the current region.
     * @param integer $ManualBackupCount Total number of manual backups in the current region.
     * @param integer $RemoteBackupVolume Total capacity of remote backups
     * @param integer $RemoteBackupCount Total number of remote backups
     * @param integer $DataBackupArchiveVolume Total capacity of archive backups in the current region
     * @param integer $DataBackupArchiveCount Total number of archive backups in the current region
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
        if (array_key_exists("DataBackupVolume",$param) and $param["DataBackupVolume"] !== null) {
            $this->DataBackupVolume = $param["DataBackupVolume"];
        }

        if (array_key_exists("DataBackupCount",$param) and $param["DataBackupCount"] !== null) {
            $this->DataBackupCount = $param["DataBackupCount"];
        }

        if (array_key_exists("AutoBackupVolume",$param) and $param["AutoBackupVolume"] !== null) {
            $this->AutoBackupVolume = $param["AutoBackupVolume"];
        }

        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("ManualBackupVolume",$param) and $param["ManualBackupVolume"] !== null) {
            $this->ManualBackupVolume = $param["ManualBackupVolume"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("RemoteBackupVolume",$param) and $param["RemoteBackupVolume"] !== null) {
            $this->RemoteBackupVolume = $param["RemoteBackupVolume"];
        }

        if (array_key_exists("RemoteBackupCount",$param) and $param["RemoteBackupCount"] !== null) {
            $this->RemoteBackupCount = $param["RemoteBackupCount"];
        }

        if (array_key_exists("DataBackupArchiveVolume",$param) and $param["DataBackupArchiveVolume"] !== null) {
            $this->DataBackupArchiveVolume = $param["DataBackupArchiveVolume"];
        }

        if (array_key_exists("DataBackupArchiveCount",$param) and $param["DataBackupArchiveCount"] !== null) {
            $this->DataBackupArchiveCount = $param["DataBackupArchiveCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
