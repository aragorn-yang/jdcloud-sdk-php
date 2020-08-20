<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'waf',
        'protocol' => 'json',
//        'serviceFullName' => 'waf',
//        'serviceId' => 'waf',
    ],
    'operations' => [
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/billing:createInstance',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'GetAvailableCertForDomain' => [
            'name' => 'GetAvailableCertForDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/cert:availableForDomain',
            ],
            'input' => [ 'shape' => 'GetAvailableCertForDomainRequestShape', ],
            'output' => [ 'shape' => 'GetAvailableCertForDomainResponseShape', ],
        ],
        'BindCert' => [
            'name' => 'BindCert',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/cert:bindCert',
            ],
            'input' => [ 'shape' => 'BindCertRequestShape', ],
            'output' => [ 'shape' => 'BindCertResponseShape', ],
        ],
        'GetBpsData' => [
            'name' => 'GetBpsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/chart:getBpsData',
            ],
            'input' => [ 'shape' => 'GetBpsDataRequestShape', ],
            'output' => [ 'shape' => 'GetBpsDataResponseShape', ],
        ],
        'GetQpsData' => [
            'name' => 'GetQpsData',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/chart:getQpsData',
            ],
            'input' => [ 'shape' => 'GetQpsDataRequestShape', ],
            'output' => [ 'shape' => 'GetQpsDataResponseShape', ],
        ],
        'GetDomainLbConfig' => [
            'name' => 'GetDomainLbConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:getDomainLbConfig',
            ],
            'input' => [ 'shape' => 'GetDomainLbConfigRequestShape', ],
            'output' => [ 'shape' => 'GetDomainLbConfigResponseShape', ],
        ],
        'AddDomain' => [
            'name' => 'AddDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:add',
            ],
            'input' => [ 'shape' => 'AddDomainRequestShape', ],
            'output' => [ 'shape' => 'AddDomainResponseShape', ],
        ],
        'UpdateDomain' => [
            'name' => 'UpdateDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:update',
            ],
            'input' => [ 'shape' => 'UpdateDomainRequestShape', ],
            'output' => [ 'shape' => 'UpdateDomainResponseShape', ],
        ],
        'DeleteDomain' => [
            'name' => 'DeleteDomain',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:delete',
            ],
            'input' => [ 'shape' => 'DeleteDomainRequestShape', ],
            'output' => [ 'shape' => 'DeleteDomainResponseShape', ],
        ],
        'ListDomains' => [
            'name' => 'ListDomains',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:list',
            ],
            'input' => [ 'shape' => 'ListDomainsRequestShape', ],
            'output' => [ 'shape' => 'ListDomainsResponseShape', ],
        ],
        'GetDomainAntiConfig' => [
            'name' => 'GetDomainAntiConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:getAntiConfig',
            ],
            'input' => [ 'shape' => 'GetDomainAntiConfigRequestShape', ],
            'output' => [ 'shape' => 'GetDomainAntiConfigResponseShape', ],
        ],
        'ListMainCfg' => [
            'name' => 'ListMainCfg',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:listMainCfg',
            ],
            'input' => [ 'shape' => 'ListMainCfgRequestShape', ],
            'output' => [ 'shape' => 'ListMainCfgResponseShape', ],
        ],
        'DisableRules' => [
            'name' => 'DisableRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/domain:disableRules',
            ],
            'input' => [ 'shape' => 'DisableRulesRequestShape', ],
            'output' => [ 'shape' => 'DisableRulesResponseShape', ],
        ],
        'DescribeIpDomainInfo' => [
            'name' => 'DescribeIpDomainInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ip:domainInfo',
            ],
            'input' => [ 'shape' => 'DescribeIpDomainInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpDomainInfoResponseShape', ],
        ],
        'IsWafVip' => [
            'name' => 'IsWafVip',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/ip:isWafVip',
            ],
            'input' => [ 'shape' => 'IsWafVipRequestShape', ],
            'output' => [ 'shape' => 'IsWafVipResponseShape', ],
        ],
        'EnableWaf' => [
            'name' => 'EnableWaf',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:enable',
            ],
            'input' => [ 'shape' => 'EnableWafRequestShape', ],
            'output' => [ 'shape' => 'EnableWafResponseShape', ],
        ],
        'AntiModeWaf' => [
            'name' => 'AntiModeWaf',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:antiMode',
            ],
            'input' => [ 'shape' => 'AntiModeWafRequestShape', ],
            'output' => [ 'shape' => 'AntiModeWafResponseShape', ],
        ],
        'AntiLevelWaf' => [
            'name' => 'AntiLevelWaf',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:antiLevel',
            ],
            'input' => [ 'shape' => 'AntiLevelWafRequestShape', ],
            'output' => [ 'shape' => 'AntiLevelWafResponseShape', ],
        ],
        'EnableWafUserDefine' => [
            'name' => 'EnableWafUserDefine',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:setWafUserDefine',
            ],
            'input' => [ 'shape' => 'EnableWafUserDefineRequestShape', ],
            'output' => [ 'shape' => 'EnableWafUserDefineResponseShape', ],
        ],
        'SetWafRule' => [
            'name' => 'SetWafRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:setRule',
            ],
            'input' => [ 'shape' => 'SetWafRuleRequestShape', ],
            'output' => [ 'shape' => 'SetWafRuleResponseShape', ],
        ],
        'DelWafRule' => [
            'name' => 'DelWafRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:delRule',
            ],
            'input' => [ 'shape' => 'DelWafRuleRequestShape', ],
            'output' => [ 'shape' => 'DelWafRuleResponseShape', ],
        ],
        'ListWafRules' => [
            'name' => 'ListWafRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:listRules',
            ],
            'input' => [ 'shape' => 'ListWafRulesRequestShape', ],
            'output' => [ 'shape' => 'ListWafRulesResponseShape', ],
        ],
        'AddIps' => [
            'name' => 'AddIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/userdefine:addIps',
            ],
            'input' => [ 'shape' => 'AddIpsRequestShape', ],
            'output' => [ 'shape' => 'AddIpsResponseShape', ],
        ],
        'UpdateIps' => [
            'name' => 'UpdateIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/userdefine:updateIps',
            ],
            'input' => [ 'shape' => 'UpdateIpsRequestShape', ],
            'output' => [ 'shape' => 'UpdateIpsResponseShape', ],
        ],
        'ListIps' => [
            'name' => 'ListIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/userdefine:listIps',
            ],
            'input' => [ 'shape' => 'ListIpsRequestShape', ],
            'output' => [ 'shape' => 'ListIpsResponseShape', ],
        ],
        'DelIps' => [
            'name' => 'DelIps',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/userdefine:delIps',
            ],
            'input' => [ 'shape' => 'DelIpsRequestShape', ],
            'output' => [ 'shape' => 'DelIpsResponseShape', ],
        ],
        'SetWafCondition' => [
            'name' => 'SetWafCondition',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:setCondition',
            ],
            'input' => [ 'shape' => 'SetWafConditionRequestShape', ],
            'output' => [ 'shape' => 'SetWafConditionResponseShape', ],
        ],
        'DelWafCondition' => [
            'name' => 'DelWafCondition',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:delCondition',
            ],
            'input' => [ 'shape' => 'DelWafConditionRequestShape', ],
            'output' => [ 'shape' => 'DelWafConditionResponseShape', ],
        ],
        'ListWafConditions' => [
            'name' => 'ListWafConditions',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:listConditions',
            ],
            'input' => [ 'shape' => 'ListWafConditionsRequestShape', ],
            'output' => [ 'shape' => 'ListWafConditionsResponseShape', ],
        ],
        'ListWafFilter' => [
            'name' => 'ListWafFilter',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/waf:listFilter',
            ],
            'input' => [ 'shape' => 'ListWafFilterRequestShape', ],
            'output' => [ 'shape' => 'ListWafFilterResponseShape', ],
        ],
        'EnableBot' => [
            'name' => 'EnableBot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:setBot',
            ],
            'input' => [ 'shape' => 'EnableBotRequestShape', ],
            'output' => [ 'shape' => 'EnableBotResponseShape', ],
        ],
        'EnableUsrBot' => [
            'name' => 'EnableUsrBot',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:setUserDefineBot',
            ],
            'input' => [ 'shape' => 'EnableUsrBotRequestShape', ],
            'output' => [ 'shape' => 'EnableUsrBotResponseShape', ],
        ],
        'SetBotStdRules' => [
            'name' => 'SetBotStdRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:setStdRule',
            ],
            'input' => [ 'shape' => 'SetBotStdRulesRequestShape', ],
            'output' => [ 'shape' => 'SetBotStdRulesResponseShape', ],
        ],
        'ListBotStdRules' => [
            'name' => 'ListBotStdRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:listStdRule',
            ],
            'input' => [ 'shape' => 'ListBotStdRulesRequestShape', ],
            'output' => [ 'shape' => 'ListBotStdRulesResponseShape', ],
        ],
        'AddBotUsrRule' => [
            'name' => 'AddBotUsrRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:addUsrRule',
            ],
            'input' => [ 'shape' => 'AddBotUsrRuleRequestShape', ],
            'output' => [ 'shape' => 'AddBotUsrRuleResponseShape', ],
        ],
        'UpdateBotUsrRule' => [
            'name' => 'UpdateBotUsrRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:updateUsrRule',
            ],
            'input' => [ 'shape' => 'UpdateBotUsrRuleRequestShape', ],
            'output' => [ 'shape' => 'UpdateBotUsrRuleResponseShape', ],
        ],
        'ListBotUsrRules' => [
            'name' => 'ListBotUsrRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:listUsrRule',
            ],
            'input' => [ 'shape' => 'ListBotUsrRulesRequestShape', ],
            'output' => [ 'shape' => 'ListBotUsrRulesResponseShape', ],
        ],
        'DelBotUsrRule' => [
            'name' => 'DelBotUsrRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/bot:delUsrRule',
            ],
            'input' => [ 'shape' => 'DelBotUsrRuleRequestShape', ],
            'output' => [ 'shape' => 'DelBotUsrRuleResponseShape', ],
        ],
        'EnableRisk' => [
            'name' => 'EnableRisk',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:enable',
            ],
            'input' => [ 'shape' => 'EnableRiskRequestShape', ],
            'output' => [ 'shape' => 'EnableRiskResponseShape', ],
        ],
        'SetRiskRule' => [
            'name' => 'SetRiskRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskRule',
            ],
            'input' => [ 'shape' => 'SetRiskRuleRequestShape', ],
            'output' => [ 'shape' => 'SetRiskRuleResponseShape', ],
        ],
        'ListRiskRules' => [
            'name' => 'ListRiskRules',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskRules',
            ],
            'input' => [ 'shape' => 'ListRiskRulesRequestShape', ],
            'output' => [ 'shape' => 'ListRiskRulesResponseShape', ],
        ],
        'DelRiskRule' => [
            'name' => 'DelRiskRule',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskRule',
            ],
            'input' => [ 'shape' => 'DelRiskRuleRequestShape', ],
            'output' => [ 'shape' => 'DelRiskRuleResponseShape', ],
        ],
        'SetRiskJs' => [
            'name' => 'SetRiskJs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:setRiskJs',
            ],
            'input' => [ 'shape' => 'SetRiskJsRequestShape', ],
            'output' => [ 'shape' => 'SetRiskJsResponseShape', ],
        ],
        'ListRiskJs' => [
            'name' => 'ListRiskJs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:listRiskJs',
            ],
            'input' => [ 'shape' => 'ListRiskJsRequestShape', ],
            'output' => [ 'shape' => 'ListRiskJsResponseShape', ],
        ],
        'DelRiskJs' => [
            'name' => 'DelRiskJs',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/risk:delRiskJs',
            ],
            'input' => [ 'shape' => 'DelRiskJsRequestShape', ],
            'output' => [ 'shape' => 'DelRiskJsResponseShape', ],
        ],
        'SetJsPage' => [
            'name' => 'SetJsPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/js:setPage',
            ],
            'input' => [ 'shape' => 'SetJsPageRequestShape', ],
            'output' => [ 'shape' => 'SetJsPageResponseShape', ],
        ],
        'DescribeJsPages' => [
            'name' => 'DescribeJsPages',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/js:listPage',
            ],
            'input' => [ 'shape' => 'DescribeJsPagesRequestShape', ],
            'output' => [ 'shape' => 'DescribeJsPagesResponseShape', ],
        ],
        'DelJsPage' => [
            'name' => 'DelJsPage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/wafInstanceIds/{wafInstanceId}/js:delPage',
            ],
            'input' => [ 'shape' => 'DelJsPageRequestShape', ],
            'output' => [ 'shape' => 'DelJsPageResponseShape', ],
        ],
    ],
    'shapes' => [
        'GetPriceReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'extraDomainsNum' => [ 'type' => 'integer', 'locationName' => 'extraDomainsNum', ],
                'extraBitsLimit' => [ 'type' => 'integer', 'locationName' => 'extraBitsLimit', ],
            ],
        ],
        'OrderReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'buyType' => [ 'type' => 'integer', 'locationName' => 'buyType', ],
                'timeSpan' => [ 'type' => 'integer', 'locationName' => 'timeSpan', ],
                'timeUnit' => [ 'type' => 'string', 'locationName' => 'timeUnit', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'extraDomainsNum' => [ 'type' => 'integer', 'locationName' => 'extraDomainsNum', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'returnURL' => [ 'type' => 'string', 'locationName' => 'returnURL', ],
                'extraBitsLimit' => [ 'type' => 'integer', 'locationName' => 'extraBitsLimit', ],
            ],
        ],
        'AssignCertReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'certId' => [ 'type' => 'string', 'locationName' => 'certId', ],
            ],
        ],
        'GetAvailableCertReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'ChartItemValue' => [
            'type' => 'structure',
            'members' => [
                'value' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'EsLogFile' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
            ],
        ],
        'GetEsLogUrlReq' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'TopValue' => [
            'type' => 'structure',
            'members' => [
                'rank' => [ 'type' => 'integer', 'locationName' => 'rank', ],
                'src' => [ 'type' => 'string', 'locationName' => 'src', ],
                'pv' => [ 'type' => 'integer', 'locationName' => 'pv', ],
            ],
        ],
        'GetChartReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'isSum' => [ 'type' => 'boolean', 'locationName' => 'isSum', ],
                'isWafRule' => [ 'type' => 'boolean', 'locationName' => 'isWafRule', ],
                'isRs' => [ 'type' => 'boolean', 'locationName' => 'isRs', ],
                'pieItem' => [ 'type' => 'string', 'locationName' => 'pieItem', ],
            ],
        ],
        'GetAntiEventReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'antiType' => [ 'type' => 'string', 'locationName' => 'antiType', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'sortKey' => [ 'type' => 'string', 'locationName' => 'sortKey', ],
                'sortDesc' => [ 'type' => 'string', 'locationName' => 'sortDesc', ],
            ],
        ],
        'Bps' => [
            'type' => 'structure',
            'members' => [
                'upBps' =>  [ 'shape' => 'ChartItemValue', ],
                'downBps' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'WafTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'area_top50' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'waf_rule_sum' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'GetEsLogReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'logType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'AclTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'rulename_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'KVPair' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'double', 'locationName' => 'value', ],
            ],
        ],
        'CcTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'BotTopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
                'url_top10' => [ 'type' => 'list', 'member' => [ 'shape' => 'TopValue', ], ],
            ],
        ],
        'Abnormal' => [
            'type' => 'structure',
            'members' => [
                'noResp' =>  [ 'shape' => 'ChartItemValue', ],
                's503' =>  [ 'shape' => 'ChartItemValue', ],
                's404' =>  [ 'shape' => 'ChartItemValue', ],
                's502' =>  [ 'shape' => 'ChartItemValue', ],
                's504' =>  [ 'shape' => 'ChartItemValue', ],
                's5XX' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'Qps' => [
            'type' => 'structure',
            'members' => [
                'qpsTotal' =>  [ 'shape' => 'ChartItemValue', ],
                'wafAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'ccAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'aclAnti' =>  [ 'shape' => 'ChartItemValue', ],
                'cacheTotal' =>  [ 'shape' => 'ChartItemValue', ],
            ],
        ],
        'AntiEvent' => [
            'type' => 'structure',
            'members' => [
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'csaInfo' => [ 'type' => 'string', 'locationName' => 'csaInfo', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'accessTime' => [ 'type' => 'integer', 'locationName' => 'accessTime', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'attackType' => [ 'type' => 'string', 'locationName' => 'attackType', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'payLoad' => [ 'type' => 'string', 'locationName' => 'payLoad', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'isReported' => [ 'type' => 'integer', 'locationName' => 'isReported', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'LogReportReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'logId' => [ 'type' => 'string', 'locationName' => 'logId', ],
                'accessTime' => [ 'type' => 'integer', 'locationName' => 'accessTime', ],
            ],
        ],
        'TopN' => [
            'type' => 'structure',
            'members' => [
                'addr_top10' =>  [ 'shape' => 'TopValue', ],
                'area_top10' =>  [ 'shape' => 'TopValue', ],
                'url_top10' =>  [ 'shape' => 'TopValue', ],
                'ua_top10' =>  [ 'shape' => 'TopValue', ],
            ],
        ],
        'ListEsLogDownloadReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'start' => [ 'type' => 'integer', 'locationName' => 'start', ],
                'end' => [ 'type' => 'integer', 'locationName' => 'end', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'EsLogEvent' => [
            'type' => 'structure',
            'members' => [
                'accessTime' => [ 'type' => 'integer', 'locationName' => 'accessTime', ],
                'remoteAddr' => [ 'type' => 'string', 'locationName' => 'remoteAddr', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'area' => [ 'type' => 'string', 'locationName' => 'area', ],
                'method' => [ 'type' => 'string', 'locationName' => 'method', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'payLoad' => [ 'type' => 'string', 'locationName' => 'payLoad', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'logType' => [ 'type' => 'string', 'locationName' => 'logType', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'upstreamErr' => [ 'type' => 'string', 'locationName' => 'upstreamErr', ],
            ],
        ],
        'WebUserdefConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'conditionNum' => [ 'type' => 'integer', 'locationName' => 'conditionNum', ],
                'ruleNum' => [ 'type' => 'integer', 'locationName' => 'ruleNum', ],
            ],
        ],
        'UserDefPageConf' => [
            'type' => 'structure',
            'members' => [
                'pageNum' => [ 'type' => 'integer', 'locationName' => 'pageNum', ],
            ],
        ],
        'AntiStatus' => [
            'type' => 'structure',
            'members' => [
                'acl' => [ 'type' => 'integer', 'locationName' => 'acl', ],
                'cc' => [ 'type' => 'string', 'locationName' => 'cc', ],
                'waf' => [ 'type' => 'string', 'locationName' => 'waf', ],
            ],
        ],
        'AddDomain' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sslProtocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'lbType' => [ 'type' => 'string', 'locationName' => 'lbType', ],
                'rsConfig' =>  [ 'shape' => 'RsConfig', ],
                'pureClient' => [ 'type' => 'integer', 'locationName' => 'pureClient', ],
                'httpsRedirect' => [ 'type' => 'integer', 'locationName' => 'httpsRedirect', ],
                'rsOnlySupportHttp' => [ 'type' => 'integer', 'locationName' => 'rsOnlySupportHttp', ],
                'httpVersion' => [ 'type' => 'string', 'locationName' => 'httpVersion', ],
                'enableKeepalive' => [ 'type' => 'integer', 'locationName' => 'enableKeepalive', ],
                'suiteLevel' => [ 'type' => 'integer', 'locationName' => 'suiteLevel', ],
                'enableUnderscores' => [ 'type' => 'integer', 'locationName' => 'enableUnderscores', ],
            ],
        ],
        'AttackInfo' => [
            'type' => 'structure',
            'members' => [
                'aclAnti' => [ 'type' => 'integer', 'locationName' => 'aclAnti', ],
                'ccAnti' => [ 'type' => 'string', 'locationName' => 'ccAnti', ],
                'wafAnti' => [ 'type' => 'string', 'locationName' => 'wafAnti', ],
            ],
        ],
        'DnsStatus' => [
            'type' => 'structure',
            'members' => [
                'statusCode' => [ 'type' => 'integer', 'locationName' => 'statusCode', ],
                'statusMsg' => [ 'type' => 'string', 'locationName' => 'statusMsg', ],
            ],
        ],
        'IntSemConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
            ],
        ],
        'IpbanConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'banTime' => [ 'type' => 'integer', 'locationName' => 'banTime', ],
                'detectTime' => [ 'type' => 'integer', 'locationName' => 'detectTime', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
            ],
        ],
        'DomainRegionInfo' => [
            'type' => 'structure',
            'members' => [
                'hb_bgp' =>  [ 'shape' => 'RegionVipInfo', ],
                'hd_bgp' =>  [ 'shape' => 'RegionVipInfo', ],
                'hn' =>  [ 'shape' => 'RegionVipInfo', ],
            ],
        ],
        'SetDomainRegionReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'RsConfig' => [
            'type' => 'structure',
            'members' => [
                'rsAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'httpRsPort' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'httpsRsPort' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'rsType' => [ 'type' => 'integer', 'locationName' => 'rsType', ],
            ],
        ],
        'BotConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'enableUserDefine' => [ 'type' => 'integer', 'locationName' => 'enableUserDefine', ],
            ],
        ],
        'RegionVipInfo' => [
            'type' => 'structure',
            'members' => [
                'chosen' => [ 'type' => 'boolean', 'locationName' => 'chosen', ],
                'vips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ActiveFuncReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'StatusConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'statusNum' => [ 'type' => 'integer', 'locationName' => 'statusNum', ],
            ],
        ],
        'ListDomains' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'CommonReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'AccessWafStatusReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'AccessWafStatus' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'statusCode' => [ 'type' => 'integer', 'locationName' => 'statusCode', ],
                'statusMsg' => [ 'type' => 'string', 'locationName' => 'statusMsg', ],
            ],
        ],
        'CcConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'ccMode' => [ 'type' => 'integer', 'locationName' => 'ccMode', ],
                'qps' => [ 'type' => 'integer', 'locationName' => 'qps', ],
                'enableUserDefine' => [ 'type' => 'integer', 'locationName' => 'enableUserDefine', ],
                'rulesCount' => [ 'type' => 'integer', 'locationName' => 'rulesCount', ],
            ],
        ],
        'FilterSenseConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'respCodeNum' => [ 'type' => 'integer', 'locationName' => 'respCodeNum', ],
                'senseinfoNum' => [ 'type' => 'integer', 'locationName' => 'senseinfoNum', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'DomainMainConfig' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sslProtocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pureClient' => [ 'type' => 'integer', 'locationName' => 'pureClient', ],
                'httpStatus' => [ 'type' => 'integer', 'locationName' => 'httpStatus', ],
                'antiStatus' =>  [ 'shape' => 'AntiStatus', ],
                'disableWaf' => [ 'type' => 'integer', 'locationName' => 'disableWaf', ],
                'attackInfo' =>  [ 'shape' => 'AttackInfo', ],
                'dnsStatus' =>  [ 'shape' => 'DnsStatus', ],
                'enableCname2Rs' => [ 'type' => 'integer', 'locationName' => 'enableCname2Rs', ],
                'enableIpv6' => [ 'type' => 'integer', 'locationName' => 'enableIpv6', ],
                'region' =>  [ 'shape' => 'RegionVipInfo', ],
            ],
        ],
        'AclConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'aclRuleNum' => [ 'type' => 'integer', 'locationName' => 'aclRuleNum', ],
            ],
        ],
        'WafConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'wafMode' => [ 'type' => 'integer', 'locationName' => 'wafMode', ],
                'wafLevel' => [ 'type' => 'integer', 'locationName' => 'wafLevel', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'FilterHeaderConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'reqEnable' => [ 'type' => 'integer', 'locationName' => 'reqEnable', ],
                'respEnable' => [ 'type' => 'integer', 'locationName' => 'respEnable', ],
                'reqHeaderNum' => [ 'type' => 'integer', 'locationName' => 'reqHeaderNum', ],
                'respHeaderNum' => [ 'type' => 'integer', 'locationName' => 'respHeaderNum', ],
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
            ],
        ],
        'LastAttackReport' => [
            'type' => 'structure',
            'members' => [
                'lastAttackTime' => [ 'type' => 'integer', 'locationName' => 'lastAttackTime', ],
                'attackCount' => [ 'type' => 'integer', 'locationName' => 'attackCount', ],
            ],
        ],
        'DomainConfig' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'cname' => [ 'type' => 'string', 'locationName' => 'cname', ],
                'certName' => [ 'type' => 'string', 'locationName' => 'certName', ],
                'lbConf' =>  [ 'shape' => 'LbConf', ],
                'dnsStatus' =>  [ 'shape' => 'DnsStatus', ],
                'wafConf' =>  [ 'shape' => 'WafConf', ],
                'ccConf' =>  [ 'shape' => 'CcConf', ],
                'aclConf' =>  [ 'shape' => 'AclConf', ],
                'ipbanConf' =>  [ 'shape' => 'IpbanConf', ],
                'lastAttackReport' =>  [ 'shape' => 'LastAttackReport', ],
                'antispiderConf' =>  [ 'shape' => 'EnableConf', ],
                'webcacheConf' =>  [ 'shape' => 'EnableConf', ],
                'disableWaf' => [ 'type' => 'integer', 'locationName' => 'disableWaf', ],
                'skipConf' =>  [ 'shape' => 'SkipConf', ],
                'denyConf' =>  [ 'shape' => 'DenyConf', ],
                'webUserdefConf' =>  [ 'shape' => 'WebUserdefConf', ],
                'ratelimitConf' =>  [ 'shape' => 'RatelimitConf', ],
                'userDefPageConf' =>  [ 'shape' => 'UserDefPageConf', ],
                'filterHeaderConf' =>  [ 'shape' => 'FilterHeaderConf', ],
                'filterSenseConf' =>  [ 'shape' => 'FilterSenseConf', ],
                'intSemConf' =>  [ 'shape' => 'IntSemConf', ],
                'uriRewriteConf' =>  [ 'shape' => 'UriRewriteConf', ],
                'threatinfoConf' =>  [ 'shape' => 'EnableConf', ],
                'proxycacheConf' =>  [ 'shape' => 'EnableConf', ],
                'botConf' =>  [ 'shape' => 'EnableConf', ],
            ],
        ],
        'DenyConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'listNum' => [ 'type' => 'integer', 'locationName' => 'listNum', ],
            ],
        ],
        'LbConf' => [
            'type' => 'structure',
            'members' => [
                'protocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sslProtocols' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'lbType' => [ 'type' => 'string', 'locationName' => 'lbType', ],
                'rsConfig' =>  [ 'shape' => 'RsConfig', ],
                'pureClient' => [ 'type' => 'integer', 'locationName' => 'pureClient', ],
                'httpsRedirect' => [ 'type' => 'integer', 'locationName' => 'httpsRedirect', ],
                'rsOnlySupportHttp' => [ 'type' => 'integer', 'locationName' => 'rsOnlySupportHttp', ],
                'httpsCertUpdateStatus' => [ 'type' => 'integer', 'locationName' => 'httpsCertUpdateStatus', ],
                'httpStatus' => [ 'type' => 'integer', 'locationName' => 'httpStatus', ],
                'httpVersion' => [ 'type' => 'string', 'locationName' => 'httpVersion', ],
                'enableKeepalive' => [ 'type' => 'integer', 'locationName' => 'enableKeepalive', ],
                'suiteLevel' => [ 'type' => 'integer', 'locationName' => 'suiteLevel', ],
                'enableUnderscores' => [ 'type' => 'integer', 'locationName' => 'enableUnderscores', ],
                'maxBodySize' => [ 'type' => 'string', 'locationName' => 'maxBodySize', ],
            ],
        ],
        'DisableRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'EnableConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'SkipConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'listNum' => [ 'type' => 'integer', 'locationName' => 'listNum', ],
            ],
        ],
        'LbConfig' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'lbConf' =>  [ 'shape' => 'LbConf', ],
            ],
        ],
        'ActiveFuncByRegionReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'RatelimitConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'rateLimitNum' => [ 'type' => 'integer', 'locationName' => 'rateLimitNum', ],
            ],
        ],
        'UriRewriteConf' => [
            'type' => 'structure',
            'members' => [
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'uriRewriteNum' => [ 'type' => 'integer', 'locationName' => 'uriRewriteNum', ],
            ],
        ],
        'DomainInfo' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'rsAddr' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'dnsType' => [ 'type' => 'string', 'locationName' => 'dnsType', ],
                'backupCname' => [ 'type' => 'string', 'locationName' => 'backupCname', ],
                'enable2Dos' => [ 'type' => 'integer', 'locationName' => 'enable2Dos', ],
            ],
        ],
        'IpVipInfo' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'isVip' => [ 'type' => 'boolean', 'locationName' => 'isVip', ],
            ],
        ],
        'IpDomainInfo' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'isVip' => [ 'type' => 'boolean', 'locationName' => 'isVip', ],
                'domainInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainInfo', ], ],
            ],
        ],
        'ListNoticeReq' => [
            'type' => 'structure',
            'members' => [
                'noticeType' => [ 'type' => 'integer', 'locationName' => 'noticeType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'IdReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'NoticeConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'noticeType' => [ 'type' => 'integer', 'locationName' => 'noticeType', ],
                'title' => [ 'type' => 'string', 'locationName' => 'title', ],
                'docType' => [ 'type' => 'integer', 'locationName' => 'docType', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetWafUserDefineReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enableUserDef' => [ 'type' => 'integer', 'locationName' => 'enableUserDef', ],
            ],
        ],
        'DelRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ids' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'IpListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'SetWebcacheUrlReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
            ],
        ],
        'SetIntSemReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enableIntSem' => [ 'type' => 'integer', 'locationName' => 'enableIntSem', ],
                'intSemMode' => [ 'type' => 'string', 'locationName' => 'intSemMode', ],
            ],
        ],
        'SetHeaderReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'headers' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValCfg', ], ],
            ],
        ],
        'SetFilterReqRespRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'opObject' => [ 'type' => 'string', 'locationName' => 'opObject', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'valType' => [ 'type' => 'string', 'locationName' => 'valType', ],
            ],
        ],
        'GeoCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'SetRiskRuleReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
            ],
        ],
        'ConditionIdSet' => [
            'type' => 'structure',
            'members' => [
                'conditionId' => [ 'type' => 'integer', 'locationName' => 'conditionId', ],
                'opposite' => [ 'type' => 'string', 'locationName' => 'opposite', ],
            ],
        ],
        'BotMatchItem' => [
            'type' => 'structure',
            'members' => [
                'field' => [ 'type' => 'string', 'locationName' => 'field', ],
                'logic' => [ 'type' => 'integer', 'locationName' => 'logic', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'RiskJsCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetProxycacheConfigReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'itemCfg' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheItemCfg', ], ],
            ],
        ],
        'AntiLevelWafReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'wafLevel' => [ 'type' => 'integer', 'locationName' => 'wafLevel', ],
            ],
        ],
        'DenyActionCfg' => [
            'type' => 'structure',
            'members' => [
                'atOp' => [ 'type' => 'integer', 'locationName' => 'atOp', ],
                'atVal' => [ 'type' => 'string', 'locationName' => 'atVal', ],
            ],
        ],
        'ListCcRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'matchType' => [ 'type' => 'integer', 'locationName' => 'matchType', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'singleIpLimit' => [ 'type' => 'integer', 'locationName' => 'singleIpLimit', ],
                'blockType' => [ 'type' => 'integer', 'locationName' => 'blockType', ],
                'blockTime' => [ 'type' => 'integer', 'locationName' => 'blockTime', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'SetListRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'listType' => [ 'type' => 'string', 'locationName' => 'listType', ],
                'listRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListRuleCfg', ], ],
            ],
        ],
        'ListListRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'listType' => [ 'type' => 'string', 'locationName' => 'listType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'AntiModeWafReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'wafMode' => [ 'type' => 'integer', 'locationName' => 'wafMode', ],
            ],
        ],
        'ListJsPageReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'EnableNameReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'ListProxycacheUrlCfg' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'urls' => [ 'type' => 'list', 'member' => [ 'shape' => 'ListProxycacheUrl', ], ],
            ],
        ],
        'UsrBotRules' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'detectThrsd' => [ 'type' => 'integer', 'locationName' => 'detectThrsd', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'matchItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'BotMatchItem', ], ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'ValListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'StatusCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'oriStatus' => [ 'type' => 'string', 'locationName' => 'oriStatus', ],
                'setStatus' => [ 'type' => 'string', 'locationName' => 'setStatus', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
            ],
        ],
        'ListDenySkipRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'SetGeoReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'geos' => [ 'type' => 'list', 'member' => [ 'shape' => 'GeoCfg', ], ],
            ],
        ],
        'KeyValCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'ListBotStdRuleReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'botType' => [ 'type' => 'string', 'locationName' => 'botType', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
            ],
        ],
        'SetPagesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pages' => [ 'type' => 'list', 'member' => [ 'shape' => 'PageCfg', ], ],
            ],
        ],
        'FilterSenseinfoListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchLogic' => [ 'type' => 'string', 'locationName' => 'matchLogic', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'matchVal' => [ 'type' => 'string', 'locationName' => 'matchVal', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'SetRiskJsReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
            ],
        ],
        'SetProxycacheUrlReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'proto' => [ 'type' => 'string', 'locationName' => 'proto', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
            ],
        ],
        'KeyValListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'Proxycacheitem' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'SkipActionCfg' => [
            'type' => 'structure',
            'members' => [
                'passAll' => [ 'type' => 'integer', 'locationName' => 'passAll', ],
                'cc' => [ 'type' => 'integer', 'locationName' => 'cc', ],
                'waf' => [ 'type' => 'integer', 'locationName' => 'waf', ],
                'deny' => [ 'type' => 'integer', 'locationName' => 'deny', ],
                'rateLimit' => [ 'type' => 'integer', 'locationName' => 'rateLimit', ],
                'bot' => [ 'type' => 'integer', 'locationName' => 'bot', ],
                'risk' => [ 'type' => 'integer', 'locationName' => 'risk', ],
            ],
        ],
        'ListWafFilterReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'conditionId' => [ 'type' => 'integer', 'locationName' => 'conditionId', ],
            ],
        ],
        'FilterReqRespRulesConfig' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'opObject' => [ 'type' => 'string', 'locationName' => 'opObject', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'valType' => [ 'type' => 'string', 'locationName' => 'valType', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'isForceApply' => [ 'type' => 'integer', 'locationName' => 'isForceApply', ],
            ],
        ],
        'ListRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'PageCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'CommonNameReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ListRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'FilterCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'partOfReq' => [ 'type' => 'string', 'locationName' => 'partOfReq', ],
                'reqKey' => [ 'type' => 'string', 'locationName' => 'reqKey', ],
                'matchLogic' => [ 'type' => 'string', 'locationName' => 'matchLogic', ],
                'reqValue' => [ 'type' => 'string', 'locationName' => 'reqValue', ],
                'decodeFunc' => [ 'type' => 'string', 'locationName' => 'decodeFunc', ],
                'isBase64Decode' => [ 'type' => 'string', 'locationName' => 'isBase64Decode', ],
            ],
        ],
        'SetCookieReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'cookies' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValCfg', ], ],
            ],
        ],
        'SetCcRuleReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'matchType' => [ 'type' => 'integer', 'locationName' => 'matchType', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'singleIpLimit' => [ 'type' => 'integer', 'locationName' => 'singleIpLimit', ],
                'blockType' => [ 'type' => 'integer', 'locationName' => 'blockType', ],
                'blockTime' => [ 'type' => 'integer', 'locationName' => 'blockTime', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'PageListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
                'checkStatus' => [ 'type' => 'integer', 'locationName' => 'checkStatus', ],
            ],
        ],
        'SetWafRuleReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConditionIdSet', ], ],
            ],
        ],
        'SetRewriteRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'rewriteType' => [ 'type' => 'string', 'locationName' => 'rewriteType', ],
                'rewriteRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RewriteRuleCfg', ], ],
            ],
        ],
        'SetWafConditionReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterCfg', ], ],
            ],
        ],
        'StatusListCfg' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'oriStatus' => [ 'type' => 'string', 'locationName' => 'oriStatus', ],
                'setStatus' => [ 'type' => 'string', 'locationName' => 'setStatus', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'SetFilterSenseinfoReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchLogic' => [ 'type' => 'string', 'locationName' => 'matchLogic', ],
                'matchType' => [ 'type' => 'string', 'locationName' => 'matchType', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'matchVal' => [ 'type' => 'string', 'locationName' => 'matchVal', ],
            ],
        ],
        'CommonDenySkipReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
            ],
        ],
        'SetRatelimitRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'rules' => [ 'type' => 'list', 'member' => [ 'shape' => 'RateLimitRuleCfg', ], ],
            ],
        ],
        'ListWafRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConditionNameSet', ], ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'ListWafFilterCfg' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'conditionId' => [ 'type' => 'string', 'locationName' => 'conditionId', ],
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterCfg', ], ],
            ],
        ],
        'RewriteRuleListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'oriVal' => [ 'type' => 'string', 'locationName' => 'oriVal', ],
                'setVal' => [ 'type' => 'string', 'locationName' => 'setVal', ],
            ],
        ],
        'ListRiskJsReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'JsPage' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'ConditionNameSet' => [
            'type' => 'structure',
            'members' => [
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'opposite' => [ 'type' => 'string', 'locationName' => 'opposite', ],
            ],
        ],
        'ListProxycacheUrl' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'proto' => [ 'type' => 'string', 'locationName' => 'proto', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'SetBotStdRuleReq' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'botType' => [ 'type' => 'string', 'locationName' => 'botType', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'StdBotRules' => [
            'type' => 'structure',
            'members' => [
                'botType' => [ 'type' => 'string', 'locationName' => 'botType', ],
                'subType' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
            ],
        ],
        'EnableWebcacheReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'SetUserAntiCfgReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'filterHeaderEnable' => [ 'type' => 'string', 'locationName' => 'filterHeaderEnable', ],
                'reqHeaderEnable' => [ 'type' => 'string', 'locationName' => 'reqHeaderEnable', ],
                'respHeaderEnable' => [ 'type' => 'string', 'locationName' => 'respHeaderEnable', ],
                'filterSenseEnable' => [ 'type' => 'string', 'locationName' => 'filterSenseEnable', ],
                'statusEnable' => [ 'type' => 'string', 'locationName' => 'statusEnable', ],
                'skipEnable' => [ 'type' => 'string', 'locationName' => 'skipEnable', ],
                'denyEnable' => [ 'type' => 'string', 'locationName' => 'denyEnable', ],
                'ratelimitEnable' => [ 'type' => 'string', 'locationName' => 'ratelimitEnable', ],
                'uriRewriteEnable' => [ 'type' => 'string', 'locationName' => 'uriRewriteEnable', ],
            ],
        ],
        'ListWebcacheUrlCfg' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'url' => [ 'type' => 'string', 'locationName' => 'url', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'ValCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'ListWafConditionsReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
            ],
        ],
        'CacheItemCfg' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'DelRuleNameReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'ListRuleListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'SetBotUsrRuleReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'detectThrsd' => [ 'type' => 'integer', 'locationName' => 'detectThrsd', ],
                'detectPeriod' => [ 'type' => 'integer', 'locationName' => 'detectPeriod', ],
                'matchItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'BotMatchItem', ], ],
                'action' =>  [ 'shape' => 'DenyActionCfg', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'RiskRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'action' => [ 'type' => 'string', 'locationName' => 'action', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'MatchOpValCfg' => [
            'type' => 'structure',
            'members' => [
                'matchOp' => [ 'type' => 'integer', 'locationName' => 'matchOp', ],
                'val' => [ 'type' => 'integer', 'locationName' => 'val', ],
            ],
        ],
        'EnableReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
            ],
        ],
        'SetStatusReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'status' => [ 'type' => 'list', 'member' => [ 'shape' => 'StatusCfg', ], ],
            ],
        ],
        'ListRewriteRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'rewriteType' => [ 'type' => 'string', 'locationName' => 'rewriteType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'SetIpbanReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'detectTime' => [ 'type' => 'integer', 'locationName' => 'detectTime', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
                'banTime' => [ 'type' => 'integer', 'locationName' => 'banTime', ],
            ],
        ],
        'SetIpReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpCfg', ], ],
            ],
        ],
        'SetUriReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'integer', 'locationName' => 'iswhite', ],
                'uris' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValCfg', ], ],
            ],
        ],
        'ListPagesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'checkStatus' => [ 'type' => 'integer', 'locationName' => 'checkStatus', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'RewriteRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'oriVal' => [ 'type' => 'string', 'locationName' => 'oriVal', ],
                'setVal' => [ 'type' => 'string', 'locationName' => 'setVal', ],
            ],
        ],
        'AtCfg' => [
            'type' => 'structure',
            'members' => [
                'denyAction' =>  [ 'shape' => 'DenyActionCfg', ],
                'skipAction' =>  [ 'shape' => 'SkipActionCfg', ],
            ],
        ],
        'RateLimitRuleCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'host' =>  [ 'shape' => 'MatchOpValCfg', ],
                'url' =>  [ 'shape' => 'MatchOpValCfg', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'rate' => [ 'type' => 'integer', 'locationName' => 'rate', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'RateLimitRuleListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'host' =>  [ 'shape' => 'MatchOpValCfg', ],
                'url' =>  [ 'shape' => 'MatchOpValCfg', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'rate' => [ 'type' => 'integer', 'locationName' => 'rate', ],
                'matchAction' => [ 'type' => 'string', 'locationName' => 'matchAction', ],
                'redirection' => [ 'type' => 'string', 'locationName' => 'redirection', ],
            ],
        ],
        'GeoListCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
                'geo' => [ 'type' => 'string', 'locationName' => 'geo', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'SetJsPageReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'matchOp' => [ 'type' => 'string', 'locationName' => 'matchOp', ],
                'uri' => [ 'type' => 'string', 'locationName' => 'uri', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'ListFilterReqRespRulesReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'opObject' => [ 'type' => 'string', 'locationName' => 'opObject', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'AntiModeCcReq' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'ccMode' => [ 'type' => 'integer', 'locationName' => 'ccMode', ],
                'qps' => [ 'type' => 'integer', 'locationName' => 'qps', ],
            ],
        ],
        'IpCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'val' => [ 'type' => 'string', 'locationName' => 'val', ],
                'atCfg' =>  [ 'shape' => 'AtCfg', ],
            ],
        ],
        'ListWafConditionCfg' => [
            'type' => 'structure',
            'members' => [
                'conditionName' => [ 'type' => 'string', 'locationName' => 'conditionName', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'updateTime' => [ 'type' => 'integer', 'locationName' => 'updateTime', ],
            ],
        ],
        'ListFilterSenseinfoReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'GetInstanceReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'ReNickNameReq' => [
            'type' => 'structure',
            'members' => [
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
            ],
        ],
        'SetWafInstanceIdRegionReq' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
            ],
        ],
        'InstanceIdCfg' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'nickName' => [ 'type' => 'string', 'locationName' => 'nickName', ],
                'packageType' => [ 'type' => 'integer', 'locationName' => 'packageType', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'domainPackages' => [ 'type' => 'integer', 'locationName' => 'domainPackages', ],
                'extraBitsLimit' => [ 'type' => 'integer', 'locationName' => 'extraBitsLimit', ],
                'startTime' => [ 'type' => 'integer', 'locationName' => 'startTime', ],
                'releaseingTime' => [ 'type' => 'integer', 'locationName' => 'releaseingTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
                'valid' => [ 'type' => 'integer', 'locationName' => 'valid', ],
            ],
        ],
        'ContactGroup' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'SetReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'warnType' => [ 'type' => 'string', 'locationName' => 'warnType', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'detectUnit' => [ 'type' => 'string', 'locationName' => 'detectUnit', ],
            ],
        ],
        'WarningCfg' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'userPin' => [ 'type' => 'string', 'locationName' => 'userPin', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domains' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'ruleName' => [ 'type' => 'string', 'locationName' => 'ruleName', ],
                'warnType' => [ 'type' => 'string', 'locationName' => 'warnType', ],
                'enable' => [ 'type' => 'integer', 'locationName' => 'enable', ],
                'detectSpan' => [ 'type' => 'integer', 'locationName' => 'detectSpan', ],
                'detectThreshold' => [ 'type' => 'integer', 'locationName' => 'detectThreshold', ],
                'unit' => [ 'type' => 'string', 'locationName' => 'unit', ],
                'detectUnit' => [ 'type' => 'string', 'locationName' => 'detectUnit', ],
                'contactWays' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'contactorPersons' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactPerson', ], ],
                'contactorGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactGroup', ], ],
                'detectItems' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Contactor' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'DisableReq' => [
            'type' => 'structure',
            'members' => [
                'disable' => [ 'type' => 'integer', 'locationName' => 'disable', ],
            ],
        ],
        'ListReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DelReq' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'ruleType' => [ 'type' => 'string', 'locationName' => 'ruleType', ],
            ],
        ],
        'WarnContactor' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'ContactPerson' => [
            'type' => 'structure',
            'members' => [
                'contactId' => [ 'type' => 'integer', 'locationName' => 'contactId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'phoneNumber' => [ 'type' => 'string', 'locationName' => 'phoneNumber', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
                'selected' => [ 'type' => 'integer', 'locationName' => 'selected', ],
            ],
        ],
        'CreateInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'OrderReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'BindCertRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AssignCertReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetAvailableCertForDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAvailableCertForDomainResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindCertResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'BindCertResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetAvailableCertForDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetAvailableCertReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetAvailableCertForDomainResultShape' => [
            'type' => 'structure',
            'members' => [
                'bindCertId' => [ 'type' => 'string', 'locationName' => 'bindCertId', ],
                'bindCertName' => [ 'type' => 'string', 'locationName' => 'bindCertName', ],
                'certIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'certNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
            ],
        ],
        'GetBpsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetChartReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetBpsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetBpsDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetBpsDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'bps' =>  [ 'shape' => 'Bps', ],
            ],
        ],
        'GetQpsDataResultShape' => [
            'type' => 'structure',
            'members' => [
                'timeScope' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'qps' =>  [ 'shape' => 'Qps', ],
            ],
        ],
        'GetQpsDataResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetQpsDataResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetQpsDataRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'GetChartReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetDomainLbConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'CommonReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'UpdateDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListMainCfgResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListMainCfgResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListMainCfgResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainMainConfig', ], ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'AddDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DisableRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DisableRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddDomain', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListDomainsResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'list' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'ListMainCfgRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListDomains', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetDomainAntiConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainAntiConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'CommonReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetDomainLbConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetDomainLbConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainAntiConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'CommonReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DisableRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DisableRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DisableRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainMainConfig', ], ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'maxLimit' => [ 'type' => 'integer', 'locationName' => 'maxLimit', ],
            ],
        ],
        'AddDomainRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AddDomain', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'GetDomainLbConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'config' =>  [ 'shape' => 'LbConfig', ],
            ],
        ],
        'UpdateDomainResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetDomainAntiConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'disableWaf' => [ 'type' => 'integer', 'locationName' => 'disableWaf', ],
                'aclConf' =>  [ 'shape' => 'AclConf', ],
                'antispiderConf' =>  [ 'shape' => 'EnableConf', ],
                'ccConf' =>  [ 'shape' => 'CcConf', ],
                'denyConf' =>  [ 'shape' => 'DenyConf', ],
                'intSemConf' =>  [ 'shape' => 'IntSemConf', ],
                'ipbanConf' =>  [ 'shape' => 'IpbanConf', ],
                'ratelimitConf' =>  [ 'shape' => 'RatelimitConf', ],
                'threatinfoConf' =>  [ 'shape' => 'EnableConf', ],
                'userDefPageConf' =>  [ 'shape' => 'UserDefPageConf', ],
                'wafConf' =>  [ 'shape' => 'WafConf', ],
                'webUserdefConf' =>  [ 'shape' => 'WebUserdefConf', ],
                'webcacheConf' =>  [ 'shape' => 'EnableConf', ],
                'skipConf' =>  [ 'shape' => 'SkipConf', ],
                'filterHeaderConf' =>  [ 'shape' => 'FilterHeaderConf', ],
                'filterSenseConf' =>  [ 'shape' => 'FilterSenseConf', ],
                'statusConf' =>  [ 'shape' => 'StatusConf', ],
                'uriRewriteConf' =>  [ 'shape' => 'UriRewriteConf', ],
                'proxycacheConf' =>  [ 'shape' => 'EnableConf', ],
                'riskConf' =>  [ 'shape' => 'EnableConf', ],
            ],
        ],
        'DeleteDomainResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListDomainsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListDomains', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListDomainsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListDomainsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IsWafVipRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'IsWafVipResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpVipInfo', ], ],
            ],
        ],
        'DescribeIpDomainInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeIpDomainInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'list' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpDomainInfo', ], ],
            ],
        ],
        'DescribeIpDomainInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpDomainInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'IsWafVipResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'IsWafVipResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListBotStdRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListBotStdRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListWafConditionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListWafConditionsReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListRiskRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafFilterResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListWafFilterResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelJsPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListDenySkipRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelWafRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafFilterResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' =>  [ 'shape' => 'ListWafFilterCfg', ],
            ],
        ],
        'DelRiskRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListRiskJsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'data' =>  [ 'shape' => 'RiskJsCfg', ],
            ],
        ],
        'EnableBotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'EnableReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'SetWafConditionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetWafConditionReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'AddIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetIpReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'AddBotUsrRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListRiskRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'data' =>  [ 'shape' => 'RiskRuleCfg', ],
            ],
        ],
        'UpdateIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetIpReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'SetRiskRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListRiskJsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListRiskJsReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafConditionsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListWafConditionsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWafResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListIpsResultShape' => [
            'type' => 'structure',
            'members' => [
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
                'domain' => [ 'type' => 'string', 'locationName' => 'domain', ],
                'iswhite' => [ 'type' => 'string', 'locationName' => 'iswhite', ],
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'data' =>  [ 'shape' => 'IpListCfg', ],
            ],
        ],
        'ListBotStdRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' =>  [ 'shape' => 'StdBotRules', ],
            ],
        ],
        'DelBotUsrRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelRiskRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListRiskJsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListRiskJsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AntiLevelWafResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableWafRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'EnableReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'SetRiskJsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListWafRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListWafRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeJsPagesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
                'data' =>  [ 'shape' => 'JsPage', ],
            ],
        ],
        'SetWafConditionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableUsrBotResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelWafRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableUsrBotRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'EnableReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'EnableUsrBotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddBotUsrRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelIpsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelBotUsrRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetWafConditionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetJsPageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListBotUsrRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListRiskRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListRiskRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetBotStdRulesResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelRiskRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'AntiLevelWafRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AntiLevelWafReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListBotUsrRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListBotUsrRulesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelRiskJsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'EnableWafResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListWafRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'data' =>  [ 'shape' => 'ListWafRuleCfg', ],
            ],
        ],
        'SetWafRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetWafRuleReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelWafConditionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'EnableBotResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableWafUserDefineRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetWafUserDefineReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelWafRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddIpsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListBotStdRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListBotStdRuleReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'UpdateBotUsrRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelBotUsrRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AntiModeWafResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetBotStdRulesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddBotUsrRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetBotUsrRuleReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'SetWafRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetRiskJsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetRiskJsReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ListIpsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateIpsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableRiskResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetRiskRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetBotStdRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetBotStdRuleReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'SetJsPageResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListBotUsrRulesResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' =>  [ 'shape' => 'UsrBotRules', ],
            ],
        ],
        'DelWafConditionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeJsPagesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListJsPageReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DescribeJsPagesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeJsPagesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWafUserDefineResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ListWafFilterRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListWafFilterReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'ListWafConditionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pageIndex' => [ 'type' => 'integer', 'locationName' => 'pageIndex', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'list' =>  [ 'shape' => 'ListWafConditionCfg', ],
            ],
        ],
        'SetWafRuleResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AntiLevelWafResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableRiskResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AntiModeWafResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AntiModeWafRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'AntiModeWafReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelRiskJsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'EnableWafUserDefineResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelRiskJsResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'EnableBotResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'SetJsPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetJsPageReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'SetRiskJsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateBotUsrRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetBotUsrRuleReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'EnableRiskRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'EnableReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'UpdateBotUsrRuleResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DelJsPageResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DelJsPageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'DelRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'SetRiskRuleRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'SetRiskRuleReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'DelWafConditionResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ListWafRulesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'req' =>  [ 'shape' => 'ListRulesReq', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'wafInstanceId' => [ 'type' => 'string', 'locationName' => 'wafInstanceId', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
    ],
];
