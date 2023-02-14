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
 * ReviewImage response structure.
 *
 * @method array getReviewResultSet() Obtain The image moderation result. <font color=red>Note: This parameter is no longer used. Please use `MediaReviewResult` instead.</font>
 * @method void setReviewResultSet(array $ReviewResultSet) Set The image moderation result. <font color=red>Note: This parameter is no longer used. Please use `MediaReviewResult` instead.</font>
 * @method ReviewImageResult getMediaReviewResult() Obtain The image moderation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMediaReviewResult(ReviewImageResult $MediaReviewResult) Set The image moderation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ReviewImageResponse extends AbstractModel
{
    /**
     * @var array The image moderation result. <font color=red>Note: This parameter is no longer used. Please use `MediaReviewResult` instead.</font>
     */
    public $ReviewResultSet;

    /**
     * @var ReviewImageResult The image moderation result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MediaReviewResult;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $ReviewResultSet The image moderation result. <font color=red>Note: This parameter is no longer used. Please use `MediaReviewResult` instead.</font>
     * @param ReviewImageResult $MediaReviewResult The image moderation result.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ReviewResultSet",$param) and $param["ReviewResultSet"] !== null) {
            $this->ReviewResultSet = [];
            foreach ($param["ReviewResultSet"] as $key => $value){
                $obj = new ContentReviewResult();
                $obj->deserialize($value);
                array_push($this->ReviewResultSet, $obj);
            }
        }

        if (array_key_exists("MediaReviewResult",$param) and $param["MediaReviewResult"] !== null) {
            $this->MediaReviewResult = new ReviewImageResult();
            $this->MediaReviewResult->deserialize($param["MediaReviewResult"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}