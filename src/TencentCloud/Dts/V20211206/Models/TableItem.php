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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The set of table objects, which is required if `TableMode` is `partial`.
 *
 * @method string getTableName() Obtain Name of the migrated table, which is case-sensitive
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Name of the migrated table, which is case-sensitive
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewTableName() Obtain New name of the migrated table. This parameter is required when `TableEditMode` is `rename`. It is mutually exclusive with `TmpTables`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewTableName(string $NewTableName) Set New name of the migrated table. This parameter is required when `TableEditMode` is `rename`. It is mutually exclusive with `TmpTables`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTmpTables() Obtain The temp tables to be migrated. This parameter is mutually exclusive with `NewTableName`. It is valid only when the configured migration objects are table-level ones and `TableEditMode` is `pt`. To migrate temp tables generated when pt-osc or other tools are used during the migration process, you must configure this parameter first. For example, if you want to perform the pt-osc operation on a table named "t1", configure this parameter as ["_t1_new","_t1_old"]; to perform the gh-ost operation on t1, configure it as ["_t1_ghc","_t1_gho","_t1_del"]. Temp tables generated by pt-osc and gh-ost operations can be configured at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTmpTables(array $TmpTables) Set The temp tables to be migrated. This parameter is mutually exclusive with `NewTableName`. It is valid only when the configured migration objects are table-level ones and `TableEditMode` is `pt`. To migrate temp tables generated when pt-osc or other tools are used during the migration process, you must configure this parameter first. For example, if you want to perform the pt-osc operation on a table named "t1", configure this parameter as ["_t1_new","_t1_old"]; to perform the gh-ost operation on t1, configure it as ["_t1_ghc","_t1_gho","_t1_del"]. Temp tables generated by pt-osc and gh-ost operations can be configured at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableEditMode() Obtain Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableEditMode(string $TableEditMode) Set Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableItem extends AbstractModel
{
    /**
     * @var string Name of the migrated table, which is case-sensitive
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string New name of the migrated table. This parameter is required when `TableEditMode` is `rename`. It is mutually exclusive with `TmpTables`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewTableName;

    /**
     * @var array The temp tables to be migrated. This parameter is mutually exclusive with `NewTableName`. It is valid only when the configured migration objects are table-level ones and `TableEditMode` is `pt`. To migrate temp tables generated when pt-osc or other tools are used during the migration process, you must configure this parameter first. For example, if you want to perform the pt-osc operation on a table named "t1", configure this parameter as ["_t1_new","_t1_old"]; to perform the gh-ost operation on t1, configure it as ["_t1_ghc","_t1_gho","_t1_del"]. Temp tables generated by pt-osc and gh-ost operations can be configured at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TmpTables;

    /**
     * @var string Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableEditMode;

    /**
     * @param string $TableName Name of the migrated table, which is case-sensitive
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewTableName New name of the migrated table. This parameter is required when `TableEditMode` is `rename`. It is mutually exclusive with `TmpTables`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TmpTables The temp tables to be migrated. This parameter is mutually exclusive with `NewTableName`. It is valid only when the configured migration objects are table-level ones and `TableEditMode` is `pt`. To migrate temp tables generated when pt-osc or other tools are used during the migration process, you must configure this parameter first. For example, if you want to perform the pt-osc operation on a table named "t1", configure this parameter as ["_t1_new","_t1_old"]; to perform the gh-ost operation on t1, configure it as ["_t1_ghc","_t1_gho","_t1_del"]. Temp tables generated by pt-osc and gh-ost operations can be configured at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableEditMode Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }

        if (array_key_exists("TmpTables",$param) and $param["TmpTables"] !== null) {
            $this->TmpTables = $param["TmpTables"];
        }

        if (array_key_exists("TableEditMode",$param) and $param["TableEditMode"] !== null) {
            $this->TableEditMode = $param["TableEditMode"];
        }
    }
}
