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
 * Spark job details
 *
 * @method string getJobId() Obtain Spark job ID
 * @method void setJobId(string $JobId) Set Spark job ID
 * @method string getJobName() Obtain Spark job name
 * @method void setJobName(string $JobName) Set Spark job name
 * @method integer getJobType() Obtain Spark job type. Valid values: `1` (batch job), `2` (streaming job).
 * @method void setJobType(integer $JobType) Set Spark job type. Valid values: `1` (batch job), `2` (streaming job).
 * @method string getDataEngine() Obtain Engine name
 * @method void setDataEngine(string $DataEngine) Set Engine name
 * @method string getEni() Obtain This field has been disused. Use the `Datasource` field instead.
 * @method void setEni(string $Eni) Set This field has been disused. Use the `Datasource` field instead.
 * @method string getIsLocal() Obtain Whether the program package is uploaded locally. Valid values: `cos`, `lakefs`.
 * @method void setIsLocal(string $IsLocal) Set Whether the program package is uploaded locally. Valid values: `cos`, `lakefs`.
 * @method string getJobFile() Obtain Program package path
 * @method void setJobFile(string $JobFile) Set Program package path
 * @method integer getRoleArn() Obtain Role ID
 * @method void setRoleArn(integer $RoleArn) Set Role ID
 * @method string getMainClass() Obtain Main class of Spark job execution
 * @method void setMainClass(string $MainClass) Set Main class of Spark job execution
 * @method string getCmdArgs() Obtain Command line parameters of the Spark job separated by space
 * @method void setCmdArgs(string $CmdArgs) Set Command line parameters of the Spark job separated by space
 * @method string getJobConf() Obtain Native Spark configurations separated by line break
 * @method void setJobConf(string $JobConf) Set Native Spark configurations separated by line break
 * @method string getIsLocalJars() Obtain Whether the dependency JAR packages are uploaded locally. Valid values: `cos`, `lakefs`.
 * @method void setIsLocalJars(string $IsLocalJars) Set Whether the dependency JAR packages are uploaded locally. Valid values: `cos`, `lakefs`.
 * @method string getJobJars() Obtain Dependency JAR packages of the Spark job separated by comma
 * @method void setJobJars(string $JobJars) Set Dependency JAR packages of the Spark job separated by comma
 * @method string getIsLocalFiles() Obtain Whether the dependency file is uploaded locally. Valid values: `cos`, `lakefs`.
 * @method void setIsLocalFiles(string $IsLocalFiles) Set Whether the dependency file is uploaded locally. Valid values: `cos`, `lakefs`.
 * @method string getJobFiles() Obtain Dependency files of the Spark job separated by comma
 * @method void setJobFiles(string $JobFiles) Set Dependency files of the Spark job separated by comma
 * @method string getJobDriverSize() Obtain Driver resource size of the Spark job
 * @method void setJobDriverSize(string $JobDriverSize) Set Driver resource size of the Spark job
 * @method string getJobExecutorSize() Obtain Executor resource size of the Spark job
 * @method void setJobExecutorSize(string $JobExecutorSize) Set Executor resource size of the Spark job
 * @method integer getJobExecutorNums() Obtain Number of Spark job executors
 * @method void setJobExecutorNums(integer $JobExecutorNums) Set Number of Spark job executors
 * @method integer getJobMaxAttempts() Obtain Maximum number of retries of the Spark flow task
 * @method void setJobMaxAttempts(integer $JobMaxAttempts) Set Maximum number of retries of the Spark flow task
 * @method string getJobCreator() Obtain Spark job creator
 * @method void setJobCreator(string $JobCreator) Set Spark job creator
 * @method integer getJobCreateTime() Obtain Spark job creation time
 * @method void setJobCreateTime(integer $JobCreateTime) Set Spark job creation time
 * @method integer getJobUpdateTime() Obtain Spark job update time
 * @method void setJobUpdateTime(integer $JobUpdateTime) Set Spark job update time
 * @method string getCurrentTaskId() Obtain Last task ID of the Spark job
 * @method void setCurrentTaskId(string $CurrentTaskId) Set Last task ID of the Spark job
 * @method integer getJobStatus() Obtain Last status of the Spark job
 * @method void setJobStatus(integer $JobStatus) Set Last status of the Spark job
 * @method StreamingStatistics getStreamingStat() Obtain Spark streaming job statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStreamingStat(StreamingStatistics $StreamingStat) Set Spark streaming job statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataSource() Obtain Data source name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataSource(string $DataSource) Set Data source name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsLocalPythonFiles() Obtain PySpark: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsLocalPythonFiles(string $IsLocalPythonFiles) Set PySpark: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppPythonFiles() Obtain Note: This returned value has been disused.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppPythonFiles(string $AppPythonFiles) Set Note: This returned value has been disused.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsLocalArchives() Obtain Archives: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsLocalArchives(string $IsLocalArchives) Set Archives: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobArchives() Obtain Archives: Dependency resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobArchives(string $JobArchives) Set Archives: Dependency resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobPythonFiles() Obtain PySpark: Python dependency, which can be in .py, .zip, or .egg format. Multiple files should be separated by comma.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobPythonFiles(string $JobPythonFiles) Set PySpark: Python dependency, which can be in .py, .zip, or .egg format. Multiple files should be separated by comma.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskNum() Obtain Number of tasks running or ready to run under the current job
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskNum(integer $TaskNum) Set Number of tasks running or ready to run under the current job
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataEngineStatus() Obtain Engine status. -100 (default value): unknown; -2–11: normal.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngineStatus(integer $DataEngineStatus) Set Engine status. -100 (default value): unknown; -2–11: normal.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SparkJobInfo extends AbstractModel
{
    /**
     * @var string Spark job ID
     */
    public $JobId;

    /**
     * @var string Spark job name
     */
    public $JobName;

    /**
     * @var integer Spark job type. Valid values: `1` (batch job), `2` (streaming job).
     */
    public $JobType;

    /**
     * @var string Engine name
     */
    public $DataEngine;

    /**
     * @var string This field has been disused. Use the `Datasource` field instead.
     */
    public $Eni;

    /**
     * @var string Whether the program package is uploaded locally. Valid values: `cos`, `lakefs`.
     */
    public $IsLocal;

    /**
     * @var string Program package path
     */
    public $JobFile;

    /**
     * @var integer Role ID
     */
    public $RoleArn;

    /**
     * @var string Main class of Spark job execution
     */
    public $MainClass;

    /**
     * @var string Command line parameters of the Spark job separated by space
     */
    public $CmdArgs;

    /**
     * @var string Native Spark configurations separated by line break
     */
    public $JobConf;

    /**
     * @var string Whether the dependency JAR packages are uploaded locally. Valid values: `cos`, `lakefs`.
     */
    public $IsLocalJars;

    /**
     * @var string Dependency JAR packages of the Spark job separated by comma
     */
    public $JobJars;

    /**
     * @var string Whether the dependency file is uploaded locally. Valid values: `cos`, `lakefs`.
     */
    public $IsLocalFiles;

    /**
     * @var string Dependency files of the Spark job separated by comma
     */
    public $JobFiles;

    /**
     * @var string Driver resource size of the Spark job
     */
    public $JobDriverSize;

    /**
     * @var string Executor resource size of the Spark job
     */
    public $JobExecutorSize;

    /**
     * @var integer Number of Spark job executors
     */
    public $JobExecutorNums;

    /**
     * @var integer Maximum number of retries of the Spark flow task
     */
    public $JobMaxAttempts;

    /**
     * @var string Spark job creator
     */
    public $JobCreator;

    /**
     * @var integer Spark job creation time
     */
    public $JobCreateTime;

    /**
     * @var integer Spark job update time
     */
    public $JobUpdateTime;

    /**
     * @var string Last task ID of the Spark job
     */
    public $CurrentTaskId;

    /**
     * @var integer Last status of the Spark job
     */
    public $JobStatus;

    /**
     * @var StreamingStatistics Spark streaming job statistics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StreamingStat;

    /**
     * @var string Data source name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataSource;

    /**
     * @var string PySpark: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsLocalPythonFiles;

    /**
     * @var string Note: This returned value has been disused.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppPythonFiles;

    /**
     * @var string Archives: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsLocalArchives;

    /**
     * @var string Archives: Dependency resources
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobArchives;

    /**
     * @var string PySpark: Python dependency, which can be in .py, .zip, or .egg format. Multiple files should be separated by comma.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobPythonFiles;

    /**
     * @var integer Number of tasks running or ready to run under the current job
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskNum;

    /**
     * @var integer Engine status. -100 (default value): unknown; -2–11: normal.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataEngineStatus;

    /**
     * @param string $JobId Spark job ID
     * @param string $JobName Spark job name
     * @param integer $JobType Spark job type. Valid values: `1` (batch job), `2` (streaming job).
     * @param string $DataEngine Engine name
     * @param string $Eni This field has been disused. Use the `Datasource` field instead.
     * @param string $IsLocal Whether the program package is uploaded locally. Valid values: `cos`, `lakefs`.
     * @param string $JobFile Program package path
     * @param integer $RoleArn Role ID
     * @param string $MainClass Main class of Spark job execution
     * @param string $CmdArgs Command line parameters of the Spark job separated by space
     * @param string $JobConf Native Spark configurations separated by line break
     * @param string $IsLocalJars Whether the dependency JAR packages are uploaded locally. Valid values: `cos`, `lakefs`.
     * @param string $JobJars Dependency JAR packages of the Spark job separated by comma
     * @param string $IsLocalFiles Whether the dependency file is uploaded locally. Valid values: `cos`, `lakefs`.
     * @param string $JobFiles Dependency files of the Spark job separated by comma
     * @param string $JobDriverSize Driver resource size of the Spark job
     * @param string $JobExecutorSize Executor resource size of the Spark job
     * @param integer $JobExecutorNums Number of Spark job executors
     * @param integer $JobMaxAttempts Maximum number of retries of the Spark flow task
     * @param string $JobCreator Spark job creator
     * @param integer $JobCreateTime Spark job creation time
     * @param integer $JobUpdateTime Spark job update time
     * @param string $CurrentTaskId Last task ID of the Spark job
     * @param integer $JobStatus Last status of the Spark job
     * @param StreamingStatistics $StreamingStat Spark streaming job statistics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataSource Data source name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsLocalPythonFiles PySpark: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppPythonFiles Note: This returned value has been disused.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsLocalArchives Archives: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobArchives Archives: Dependency resources
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobPythonFiles PySpark: Python dependency, which can be in .py, .zip, or .egg format. Multiple files should be separated by comma.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskNum Number of tasks running or ready to run under the current job
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataEngineStatus Engine status. -100 (default value): unknown; -2–11: normal.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("Eni",$param) and $param["Eni"] !== null) {
            $this->Eni = $param["Eni"];
        }

        if (array_key_exists("IsLocal",$param) and $param["IsLocal"] !== null) {
            $this->IsLocal = $param["IsLocal"];
        }

        if (array_key_exists("JobFile",$param) and $param["JobFile"] !== null) {
            $this->JobFile = $param["JobFile"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }

        if (array_key_exists("JobConf",$param) and $param["JobConf"] !== null) {
            $this->JobConf = $param["JobConf"];
        }

        if (array_key_exists("IsLocalJars",$param) and $param["IsLocalJars"] !== null) {
            $this->IsLocalJars = $param["IsLocalJars"];
        }

        if (array_key_exists("JobJars",$param) and $param["JobJars"] !== null) {
            $this->JobJars = $param["JobJars"];
        }

        if (array_key_exists("IsLocalFiles",$param) and $param["IsLocalFiles"] !== null) {
            $this->IsLocalFiles = $param["IsLocalFiles"];
        }

        if (array_key_exists("JobFiles",$param) and $param["JobFiles"] !== null) {
            $this->JobFiles = $param["JobFiles"];
        }

        if (array_key_exists("JobDriverSize",$param) and $param["JobDriverSize"] !== null) {
            $this->JobDriverSize = $param["JobDriverSize"];
        }

        if (array_key_exists("JobExecutorSize",$param) and $param["JobExecutorSize"] !== null) {
            $this->JobExecutorSize = $param["JobExecutorSize"];
        }

        if (array_key_exists("JobExecutorNums",$param) and $param["JobExecutorNums"] !== null) {
            $this->JobExecutorNums = $param["JobExecutorNums"];
        }

        if (array_key_exists("JobMaxAttempts",$param) and $param["JobMaxAttempts"] !== null) {
            $this->JobMaxAttempts = $param["JobMaxAttempts"];
        }

        if (array_key_exists("JobCreator",$param) and $param["JobCreator"] !== null) {
            $this->JobCreator = $param["JobCreator"];
        }

        if (array_key_exists("JobCreateTime",$param) and $param["JobCreateTime"] !== null) {
            $this->JobCreateTime = $param["JobCreateTime"];
        }

        if (array_key_exists("JobUpdateTime",$param) and $param["JobUpdateTime"] !== null) {
            $this->JobUpdateTime = $param["JobUpdateTime"];
        }

        if (array_key_exists("CurrentTaskId",$param) and $param["CurrentTaskId"] !== null) {
            $this->CurrentTaskId = $param["CurrentTaskId"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("StreamingStat",$param) and $param["StreamingStat"] !== null) {
            $this->StreamingStat = new StreamingStatistics();
            $this->StreamingStat->deserialize($param["StreamingStat"]);
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("IsLocalPythonFiles",$param) and $param["IsLocalPythonFiles"] !== null) {
            $this->IsLocalPythonFiles = $param["IsLocalPythonFiles"];
        }

        if (array_key_exists("AppPythonFiles",$param) and $param["AppPythonFiles"] !== null) {
            $this->AppPythonFiles = $param["AppPythonFiles"];
        }

        if (array_key_exists("IsLocalArchives",$param) and $param["IsLocalArchives"] !== null) {
            $this->IsLocalArchives = $param["IsLocalArchives"];
        }

        if (array_key_exists("JobArchives",$param) and $param["JobArchives"] !== null) {
            $this->JobArchives = $param["JobArchives"];
        }

        if (array_key_exists("JobPythonFiles",$param) and $param["JobPythonFiles"] !== null) {
            $this->JobPythonFiles = $param["JobPythonFiles"];
        }

        if (array_key_exists("TaskNum",$param) and $param["TaskNum"] !== null) {
            $this->TaskNum = $param["TaskNum"];
        }

        if (array_key_exists("DataEngineStatus",$param) and $param["DataEngineStatus"] !== null) {
            $this->DataEngineStatus = $param["DataEngineStatus"];
        }
    }
}
