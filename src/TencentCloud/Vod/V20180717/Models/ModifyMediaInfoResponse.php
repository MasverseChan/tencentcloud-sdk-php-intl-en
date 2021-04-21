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
 * ModifyMediaInfo response structure.
 *
 * @method string getCoverUrl() Obtain URL of new video cover.
* Note: this returned value is valid only if the request carries `CoverData`.*
 * @method void setCoverUrl(string $CoverUrl) Set URL of new video cover.
* Note: this returned value is valid only if the request carries `CoverData`.*
 * @method array getAddedSubtitleSet() Obtain Added subtitle information
 * @method void setAddedSubtitleSet(array $AddedSubtitleSet) Set Added subtitle information
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyMediaInfoResponse extends AbstractModel
{
    /**
     * @var string URL of new video cover.
* Note: this returned value is valid only if the request carries `CoverData`.*
     */
    public $CoverUrl;

    /**
     * @var array Added subtitle information
     */
    public $AddedSubtitleSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CoverUrl URL of new video cover.
* Note: this returned value is valid only if the request carries `CoverData`.*
     * @param array $AddedSubtitleSet Added subtitle information
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
        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("AddedSubtitleSet",$param) and $param["AddedSubtitleSet"] !== null) {
            $this->AddedSubtitleSet = [];
            foreach ($param["AddedSubtitleSet"] as $key => $value){
                $obj = new MediaSubtitleItem();
                $obj->deserialize($value);
                array_push($this->AddedSubtitleSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
