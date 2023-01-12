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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of LogConfig
 *
 * @method array getRecords() Obtain Record
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRecords(array $Records) Set Record
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getContinueToken() Obtain Paging cursor
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setContinueToken(string $ContinueToken) Set Paging cursor
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class LogConfigListPage extends AbstractModel
{
    /**
     * @var array Record
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Records;

    /**
     * @var string Paging cursor
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ContinueToken;

    /**
     * @param array $Records Record
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ContinueToken Paging cursor
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new LogConfig();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("ContinueToken",$param) and $param["ContinueToken"] !== null) {
            $this->ContinueToken = $param["ContinueToken"];
        }
    }
}
