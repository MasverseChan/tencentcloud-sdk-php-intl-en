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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeTasks request structure.
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method string getStartTime() Obtain Start time of the query.
 * @method void setStartTime(string $StartTime) Set Start time of the query.
 * @method string getEndTime() Obtain End time of the query.
 * @method void setEndTime(string $EndTime) Set End time of the query.
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: `0`.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
 * @method array getFilters() Obtain Filter criteria. Each filter criteria can have up to 20 entries.
<li>`job-id`:<br> Filter by the <strong>Task ID</strong>, such as 1379afjk91u32h. Only one ID can be specified.<br>Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`target`:<br>   Filter by the <strong>resource address</strong>, such as http://www.qq.com/1.txt. Only one entry allowed.<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`domains`:<br>   Filter by the <strong>domain name</strong>, such as www.qq.com<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`statuses`:<br>   Filter by the <strong>task status</strong><br>   Required: No<br>   Fuzzy query: Not supported<br>   Values:<br>   `processing`: Tasks in progress<br>   `success`: Succeeded tasks<br>   `failed`: Failed tasks<br>   `timeout`: Timed-out tasks<li>`type`:<br>   Filter by the <strong>purging mode</strong>. Only one value allowed.<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<br>   Values:<br>   `purge_url`: Purge URLs.<br>   `purge_prefix`: Purge prefixes.<br>   `purge_all`: Purge all caches.<br>   `purge_host`: Purge hostnames.
 * @method void setFilters(array $Filters) Set Filter criteria. Each filter criteria can have up to 20 entries.
<li>`job-id`:<br> Filter by the <strong>Task ID</strong>, such as 1379afjk91u32h. Only one ID can be specified.<br>Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`target`:<br>   Filter by the <strong>resource address</strong>, such as http://www.qq.com/1.txt. Only one entry allowed.<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`domains`:<br>   Filter by the <strong>domain name</strong>, such as www.qq.com<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`statuses`:<br>   Filter by the <strong>task status</strong><br>   Required: No<br>   Fuzzy query: Not supported<br>   Values:<br>   `processing`: Tasks in progress<br>   `success`: Succeeded tasks<br>   `failed`: Failed tasks<br>   `timeout`: Timed-out tasks<li>`type`:<br>   Filter by the <strong>purging mode</strong>. Only one value allowed.<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<br>   Values:<br>   `purge_url`: Purge URLs.<br>   `purge_prefix`: Purge prefixes.<br>   `purge_all`: Purge all caches.<br>   `purge_host`: Purge hostnames.
 */
class DescribePurgeTasksRequest extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var string Start time of the query.
     */
    public $StartTime;

    /**
     * @var string End time of the query.
     */
    public $EndTime;

    /**
     * @var integer Offset for paginated queries. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
     */
    public $Limit;

    /**
     * @var array Filter criteria. Each filter criteria can have up to 20 entries.
<li>`job-id`:<br> Filter by the <strong>Task ID</strong>, such as 1379afjk91u32h. Only one ID can be specified.<br>Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`target`:<br>   Filter by the <strong>resource address</strong>, such as http://www.qq.com/1.txt. Only one entry allowed.<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`domains`:<br>   Filter by the <strong>domain name</strong>, such as www.qq.com<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`statuses`:<br>   Filter by the <strong>task status</strong><br>   Required: No<br>   Fuzzy query: Not supported<br>   Values:<br>   `processing`: Tasks in progress<br>   `success`: Succeeded tasks<br>   `failed`: Failed tasks<br>   `timeout`: Timed-out tasks<li>`type`:<br>   Filter by the <strong>purging mode</strong>. Only one value allowed.<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<br>   Values:<br>   `purge_url`: Purge URLs.<br>   `purge_prefix`: Purge prefixes.<br>   `purge_all`: Purge all caches.<br>   `purge_host`: Purge hostnames.
     */
    public $Filters;

    /**
     * @param string $ZoneId ID of the site.
     * @param string $StartTime Start time of the query.
     * @param string $EndTime End time of the query.
     * @param integer $Offset Offset for paginated queries. Default value: `0`.
     * @param integer $Limit Limit on paginated queries. Default value: `20`. Maximum value: `1000`.
     * @param array $Filters Filter criteria. Each filter criteria can have up to 20 entries.
<li>`job-id`:<br> Filter by the <strong>Task ID</strong>, such as 1379afjk91u32h. Only one ID can be specified.<br>Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`target`:<br>   Filter by the <strong>resource address</strong>, such as http://www.qq.com/1.txt. Only one entry allowed.<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`domains`:<br>   Filter by the <strong>domain name</strong>, such as www.qq.com<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<li>`statuses`:<br>   Filter by the <strong>task status</strong><br>   Required: No<br>   Fuzzy query: Not supported<br>   Values:<br>   `processing`: Tasks in progress<br>   `success`: Succeeded tasks<br>   `failed`: Failed tasks<br>   `timeout`: Timed-out tasks<li>`type`:<br>   Filter by the <strong>purging mode</strong>. Only one value allowed.<br>   Type: String<br>   Required: No<br>   Fuzzy query: Not supported<br>   Values:<br>   `purge_url`: Purge URLs.<br>   `purge_prefix`: Purge prefixes.<br>   `purge_all`: Purge all caches.<br>   `purge_host`: Purge hostnames.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}