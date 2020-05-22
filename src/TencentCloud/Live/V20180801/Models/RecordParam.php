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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recording template parameter
 *
 * @method integer getRecordInterval() Obtain Recording interval.
In seconds. Default value: 1,800.
Value range: 300–7,200.
This parameter is not valid for HLS, and a file is generated from push start to push end when HLS is recorded.
 * @method void setRecordInterval(integer $RecordInterval) Set Recording interval.
In seconds. Default value: 1,800.
Value range: 300–7,200.
This parameter is not valid for HLS, and a file is generated from push start to push end when HLS is recorded.
 * @method integer getStorageTime() Obtain Recording storage duration.
In seconds. Value range: 0–93,312,000.
0 represents permanent storage.
 * @method void setStorageTime(integer $StorageTime) Set Recording storage duration.
In seconds. Value range: 0–93,312,000.
0 represents permanent storage.
 * @method integer getEnable() Obtain Whether to enable recording in the current format. 0: no; 1: yes. Default value: 0.
 * @method void setEnable(integer $Enable) Set Whether to enable recording in the current format. 0: no; 1: yes. Default value: 0.
 * @method integer getVodSubAppId() Obtain VOD subapplication ID.
 * @method void setVodSubAppId(integer $VodSubAppId) Set VOD subapplication ID.
 * @method string getVodFileName() Obtain Recording filename.
 * @method void setVodFileName(string $VodFileName) Set Recording filename.
 */
class RecordParam extends AbstractModel
{
    /**
     * @var integer Recording interval.
In seconds. Default value: 1,800.
Value range: 300–7,200.
This parameter is not valid for HLS, and a file is generated from push start to push end when HLS is recorded.
     */
    public $RecordInterval;

    /**
     * @var integer Recording storage duration.
In seconds. Value range: 0–93,312,000.
0 represents permanent storage.
     */
    public $StorageTime;

    /**
     * @var integer Whether to enable recording in the current format. 0: no; 1: yes. Default value: 0.
     */
    public $Enable;

    /**
     * @var integer VOD subapplication ID.
     */
    public $VodSubAppId;

    /**
     * @var string Recording filename.
     */
    public $VodFileName;

    /**
     * @param integer $RecordInterval Recording interval.
In seconds. Default value: 1,800.
Value range: 300–7,200.
This parameter is not valid for HLS, and a file is generated from push start to push end when HLS is recorded.
     * @param integer $StorageTime Recording storage duration.
In seconds. Value range: 0–93,312,000.
0 represents permanent storage.
     * @param integer $Enable Whether to enable recording in the current format. 0: no; 1: yes. Default value: 0.
     * @param integer $VodSubAppId VOD subapplication ID.
     * @param string $VodFileName Recording filename.
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
        if (array_key_exists("RecordInterval",$param) and $param["RecordInterval"] !== null) {
            $this->RecordInterval = $param["RecordInterval"];
        }

        if (array_key_exists("StorageTime",$param) and $param["StorageTime"] !== null) {
            $this->StorageTime = $param["StorageTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VodSubAppId",$param) and $param["VodSubAppId"] !== null) {
            $this->VodSubAppId = $param["VodSubAppId"];
        }

        if (array_key_exists("VodFileName",$param) and $param["VodFileName"] !== null) {
            $this->VodFileName = $param["VodFileName"];
        }
    }
}