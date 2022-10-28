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
 * DescribeBinlogBackupOverview response structure.
 *
 * @method integer getBinlogBackupVolume() Obtain Total capacity of log backups in bytes (including remote log backups)
 * @method void setBinlogBackupVolume(integer $BinlogBackupVolume) Set Total capacity of log backups in bytes (including remote log backups)
 * @method integer getBinlogBackupCount() Obtain Total number of log backups (include remote log backups)
 * @method void setBinlogBackupCount(integer $BinlogBackupCount) Set Total number of log backups (include remote log backups)
 * @method integer getRemoteBinlogVolume() Obtain Capacity of remote log backups in bytes
 * @method void setRemoteBinlogVolume(integer $RemoteBinlogVolume) Set Capacity of remote log backups in bytes
 * @method integer getRemoteBinlogCount() Obtain Number of remote backups
 * @method void setRemoteBinlogCount(integer $RemoteBinlogCount) Set Number of remote backups
 * @method integer getBinlogArchiveVolume() Obtain Capacity of archive log backups in bytes
 * @method void setBinlogArchiveVolume(integer $BinlogArchiveVolume) Set Capacity of archive log backups in bytes
 * @method integer getBinlogArchiveCount() Obtain Number of archived log backups
 * @method void setBinlogArchiveCount(integer $BinlogArchiveCount) Set Number of archived log backups
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBinlogBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer Total capacity of log backups in bytes (including remote log backups)
     */
    public $BinlogBackupVolume;

    /**
     * @var integer Total number of log backups (include remote log backups)
     */
    public $BinlogBackupCount;

    /**
     * @var integer Capacity of remote log backups in bytes
     */
    public $RemoteBinlogVolume;

    /**
     * @var integer Number of remote backups
     */
    public $RemoteBinlogCount;

    /**
     * @var integer Capacity of archive log backups in bytes
     */
    public $BinlogArchiveVolume;

    /**
     * @var integer Number of archived log backups
     */
    public $BinlogArchiveCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $BinlogBackupVolume Total capacity of log backups in bytes (including remote log backups)
     * @param integer $BinlogBackupCount Total number of log backups (include remote log backups)
     * @param integer $RemoteBinlogVolume Capacity of remote log backups in bytes
     * @param integer $RemoteBinlogCount Number of remote backups
     * @param integer $BinlogArchiveVolume Capacity of archive log backups in bytes
     * @param integer $BinlogArchiveCount Number of archived log backups
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
        if (array_key_exists("BinlogBackupVolume",$param) and $param["BinlogBackupVolume"] !== null) {
            $this->BinlogBackupVolume = $param["BinlogBackupVolume"];
        }

        if (array_key_exists("BinlogBackupCount",$param) and $param["BinlogBackupCount"] !== null) {
            $this->BinlogBackupCount = $param["BinlogBackupCount"];
        }

        if (array_key_exists("RemoteBinlogVolume",$param) and $param["RemoteBinlogVolume"] !== null) {
            $this->RemoteBinlogVolume = $param["RemoteBinlogVolume"];
        }

        if (array_key_exists("RemoteBinlogCount",$param) and $param["RemoteBinlogCount"] !== null) {
            $this->RemoteBinlogCount = $param["RemoteBinlogCount"];
        }

        if (array_key_exists("BinlogArchiveVolume",$param) and $param["BinlogArchiveVolume"] !== null) {
            $this->BinlogArchiveVolume = $param["BinlogArchiveVolume"];
        }

        if (array_key_exists("BinlogArchiveCount",$param) and $param["BinlogArchiveCount"] !== null) {
            $this->BinlogArchiveCount = $param["BinlogArchiveCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
