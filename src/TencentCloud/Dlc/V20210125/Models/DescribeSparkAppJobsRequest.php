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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkAppJobs request structure.
 *
 * @method string getSortBy() Obtain The returned results are sorted by this field.
 * @method void setSortBy(string $SortBy) Set The returned results are sorted by this field.
 * @method string getSorting() Obtain Descending or ascending order, such as `desc`.
 * @method void setSorting(string $Sorting) Set Descending or ascending order, such as `desc`.
 * @method array getFilters() Obtain Filter by this parameter, which can be `spark-job-name`.
 * @method void setFilters(array $Filters) Set Filter by this parameter, which can be `spark-job-name`.
 * @method string getStartTime() Obtain Update start time
 * @method void setStartTime(string $StartTime) Set Update start time
 * @method string getEndTime() Obtain Update end time
 * @method void setEndTime(string $EndTime) Set Update end time
 * @method integer getOffset() Obtain Query list offset
 * @method void setOffset(integer $Offset) Set Query list offset
 * @method integer getLimit() Obtain Query list limit
 * @method void setLimit(integer $Limit) Set Query list limit
 */
class DescribeSparkAppJobsRequest extends AbstractModel
{
    /**
     * @var string The returned results are sorted by this field.
     */
    public $SortBy;

    /**
     * @var string Descending or ascending order, such as `desc`.
     */
    public $Sorting;

    /**
     * @var array Filter by this parameter, which can be `spark-job-name`.
     */
    public $Filters;

    /**
     * @var string Update start time
     */
    public $StartTime;

    /**
     * @var string Update end time
     */
    public $EndTime;

    /**
     * @var integer Query list offset
     */
    public $Offset;

    /**
     * @var integer Query list limit
     */
    public $Limit;

    /**
     * @param string $SortBy The returned results are sorted by this field.
     * @param string $Sorting Descending or ascending order, such as `desc`.
     * @param array $Filters Filter by this parameter, which can be `spark-job-name`.
     * @param string $StartTime Update start time
     * @param string $EndTime Update end time
     * @param integer $Offset Query list offset
     * @param integer $Limit Query list limit
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
        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
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
    }
}