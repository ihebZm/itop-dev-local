<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:IncidentManagement' => '事件管理',
	'Menu:IncidentManagement+' => '事件管理',
	'Menu:Incident:Overview' => '概况',
	'Menu:Incident:Overview+' => '概况',
	'Menu:NewIncident' => '新建事件',
	'Menu:NewIncident+' => '新建事件',
	'Menu:SearchIncidents' => '搜索事件',
	'Menu:SearchIncidents+' => '搜索事件',
	'Menu:Incident:Shortcuts' => '快捷方式',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => '分配给我的事件',
	'Menu:Incident:MyIncidents+' => '分配给我的事件',
	'Menu:Incident:EscalatedIncidents' => '已升级的事件',
	'Menu:Incident:EscalatedIncidents+' => '已升级的事件',
	'Menu:Incident:OpenIncidents' => '所有打开的事件',
	'Menu:Incident:OpenIncidents+' => '所有打开的事件',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => '最近两周的事件(按优先级)',
	'UI-IncidentManagementOverview-Last-14-days' => '最近两周的事件(按数量)',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => '打开的事件(按状态)',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => '打开的事件(按办理人)',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => '打开的事件(按客户)',
));


// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: Incident
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Incident' => '事件',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => '状态',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => '新建',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => '已升级响应时间',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => '已分配',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => '已升级解决时间',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => '等待批准',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => '待定',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => '已解决',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => '已关闭',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => '影响范围',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => '部门',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => '服务',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => '个体',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => '优先级',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => '非常高',
	'Class:Incident/Attribute:priority/Value:1+' => '非常高',
	'Class:Incident/Attribute:priority/Value:2' => '高',
	'Class:Incident/Attribute:priority/Value:2+' => '高',
	'Class:Incident/Attribute:priority/Value:3' => '中',
	'Class:Incident/Attribute:priority/Value:3+' => '中',
	'Class:Incident/Attribute:priority/Value:4' => '低',
	'Class:Incident/Attribute:priority/Value:4+' => '低',
	'Class:Incident/Attribute:urgency' => '紧急度',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => '非常高',
	'Class:Incident/Attribute:urgency/Value:1+' => '非常高',
	'Class:Incident/Attribute:urgency/Value:2' => '高',
	'Class:Incident/Attribute:urgency/Value:2+' => '高',
	'Class:Incident/Attribute:urgency/Value:3' => '中',
	'Class:Incident/Attribute:urgency/Value:3+' => '中',
	'Class:Incident/Attribute:urgency/Value:4' => '低',
	'Class:Incident/Attribute:urgency/Value:4+' => '低',
	// ^ Start Here customization des courrier
	// add attribute type person vente -->
	'Class:Incident/Attribute:type_person' => 'type person',
	'Class:Incident/Attribute:type_person+' => '',
	'Class:Incident/Attribute:type_personne/Value:physical_person' => 'Physical person',
	'Class:Incident/Attribute:type_personne/Value:physical_person+' => '',
	'Class:Incident/Attribute:type_personne/Value:moral_person' => 'Moral person',
	'Class:Incident/Attribute:type_personne/Value:moral_person+' => '',
   
	// add attribute numero first invoice vente -->
	'Class:Incident/Attribute:numero_start_invoice_vente' => 'Sales invoice starting number',
	'Class:Incident/Attribute:numero_start_invoice_vente+' => '',

	//add attribute numero last invoice vente -->
	'Class:Incident/Attribute:numero_end_invoice_vente' => 'Sales invoice finishing number',
	'Class:Incident/Attribute:numero_end_invoice_vente+' => '',
	
	// add attribute numero last month vente -->
	'Class:Incident/Attribute:numero_last_month_invoice_vente' => 'Sales invoice last month number',
	'Class:Incident/Attribute:numero_last_month_invoice_vente+' => '',
	
	//add attribute chiffre d'affaires vente -->
	'Class:Incident/Attribute:amount_turnover_vente' => 'Amount of the turnover',
	'Class:Incident/Attribute:amount_turnover_vente+' => '',
	
	// add attribute bordereau bancaire vente -->
	'Class:Incident/Attribute:bank_slip_vente' => 'Bank sales slip',
	'Class:Incident/Attribute:bank_slip_vente+' => '',
	'Class:Incident/Attribute:bank_slip_vente/Value:yes' =>'Yes',
	'Class:Incident/Attribute:bank_slip_vente/Value:yes+' => '',
	'Class:Incident/Attribute:bank_slip_vente/Value:no' => 'No',
	'Class:Incident/Attribute:bank_slip_vente/Value:no+' => '',
	
	// add attribute avis d'opérations vente -->
	'Class:Incident/Attribute:transaction_notice_vente' => 'Sale transaction notice',
	'Class:Incident/Attribute:transaction_notice_vente+' => '',
	'Class:Incident/Attribute:transaction_notice_vente/Value:yes' => 'Yes',
	'Class:Incident/Attribute:transaction_notice_vente/Value:yes+' => '',
	'Class:Incident/Attribute:transaction_notice_vente/Value:no' => 'No',
	'Class:Incident/Attribute:transaction_notice_vente/Value:no+' => '',
	
	// add attribute certificats de RS clients vente -->
	'Class:Incident/Attribute:sr_certificates_vente' => 'customer RS certificates',
	'Class:Incident/Attribute:sr_certificates_vente+' => '',
	'Class:Incident/Attribute:sr_certificates_vente/Value:yes' => 'Yes',
	'Class:Incident/Attribute:sr_certificates_vente/Value:yes+' => '',
	'Class:Incident/Attribute:sr_certificates_vente/Value:no' => 'No',
	'Class:Incident/Attribute:sr_certificates_vente/Value:no+' => '',

	// add attribute statement and documents facture banque -->
	'Class:Incident/Attribute:statements_and_documents_banque' => 'Bank statements and purchasing documents',
	'Class:Incident/Attribute:statements_and_documents_banque+' => '',
	'Class:Incident/Attribute:statements_and_documents_banque/Value:yes' => 'Yes',
	'Class:Incident/Attribute:statements_and_documents_banque/Value:yes+' => '',
	'Class:Incident/Attribute:statements_and_documents_banque/Value:no' => 'No',
	'Class:Incident/Attribute:statements_and_documents_banque/Value:no+' => '',

	// add attribute comment on reconciliation statement facture banque -->
	'Class:Incident/Attribute:comment_on_reconciliation_statement_banque' => 'comment on the reconciliation statement from the previous month',
	'Class:Incident/Attribute:comment_on_reconciliation_statement_banque+' => '',
	
	// add attribute exceptional order courrier (Visa) -->
	'Class:Incident/Attribute:exceptional_order_courrier' => 'exceptional order courrier (Visa)',
	'Class:Incident/Attribute:exceptional_order_courrier+' => '',
	'Class:Incident/Attribute:exceptional_order_courrier/Value:yes' => 'Yes',
	'Class:Incident/Attribute:exceptional_order_courrier/Value:yes+' => '',
	'Class:Incident/Attribute:exceptional_order_courrier/Value:no' => 'No',
	'Class:Incident/Attribute:exceptional_order_courrier/Value:no+' => '',

	// add attribute month courrier -->
	'Class:Incident/Attribute:month_courrier' => 'Month of courrier',
	'Class:Incident/Attribute:month_courrier+' => '',
	'Class:Incident/Attribute:month_courrier/Value:1' => 'January',
	'Class:Incident/Attribute:month_courrier/Value:1+' => '',
	'Class:Incident/Attribute:month_courrier/Value:2' => 'February',
	'Class:Incident/Attribute:month_courrier/Value:2+' => '',
	'Class:Incident/Attribute:month_courrier/Value:3' => 'March',
	'Class:Incident/Attribute:month_courrier/Value:3+' => '',
	'Class:Incident/Attribute:month_courrier/Value:4' => 'April',
	'Class:Incident/Attribute:month_courrier/Value:4+' => '',
	'Class:Incident/Attribute:month_courrier/Value:5' => 'May',
	'Class:Incident/Attribute:month_courrier/Value:5+' => '',
	'Class:Incident/Attribute:month_courrier/Value:6' => 'June',
	'Class:Incident/Attribute:month_courrier/Value:6+' => '',
	'Class:Incident/Attribute:month_courrier/Value:7' => 'July',
	'Class:Incident/Attribute:month_courrier/Value:7+' => '',
	'Class:Incident/Attribute:month_courrier/Value:8' => 'August',
	'Class:Incident/Attribute:month_courrier/Value:8+' => '',
	'Class:Incident/Attribute:month_courrier/Value:9' => 'September',
	'Class:Incident/Attribute:month_courrier/Value:9+' => '',
	'Class:Incident/Attribute:month_courrier/Value:10' => 'October',
	'Class:Incident/Attribute:month_courrier/Value:10+' => '',
	'Class:Incident/Attribute:month_courrier/Value:11' => 'november',
	'Class:Incident/Attribute:month_courrier/Value:11+' => '',
	'Class:Incident/Attribute:month_courrier/Value:12' => 'December',
	'Class:Incident/Attribute:month_courrier/Value:12+' => '',

	// add attribute to block client URL -->
	'Class:Incident/Attribute:block_client_ur' => 'Block client if :',
	'Class:Incident/Attribute:block_client_ur+' => '',
	'Class:Incident/Attribute:block_client_ur/Value:1' => 'He didn\'t make the payment',
	'Class:Incident/Attribute:block_client_ur/Value:1+' => '',
	'Class:Incident/Attribute:block_client_ur/Value:2' => 'He did pay his payments',
	'Class:Incident/Attribute:block_client_ur/Value:2+' => '',
	
	// ^ End Here customization des courrier -->
	'Class:Incident/Attribute:origin' => '来源',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => '邮件',
	'Class:Incident/Attribute:origin/Value:mail+' => '邮件',
	'Class:Incident/Attribute:origin/Value:monitoring' => '监控',
	'Class:Incident/Attribute:origin/Value:monitoring+' => '监控',
	'Class:Incident/Attribute:origin/Value:phone' => '电话',
	'Class:Incident/Attribute:origin/Value:phone+' => '电话',
	'Class:Incident/Attribute:origin/Value:portal' => 'portal',
	'Class:Incident/Attribute:origin/Value:portal+' => 'portal',
	'Class:Incident/Attribute:service_id' => '服务',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => '服务名称',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => '子服务',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => '子服务名称',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => '是否升级',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => '否',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => '否',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => '是',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => '是',
	'Class:Incident/Attribute:escalation_reason' => '热门',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => '分配日期',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => '解决日期',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => '最近待定日期',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => '累计待定',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => '响应时间',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => '解决时间',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => '响应时间截止',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => '超过SLA响应时间',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'SLA响应时间结束',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => '解决时间截止',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => '超过SLA解决时间',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'SLA解决时间结束',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => '耗时',
	'Class:Incident/Attribute:time_spent+' => '',
	/*
	'Class:Incident/Attribute:resolution_code' => '解决方式',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => '外部支持',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => '外部支持',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'bug 修复',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'bug 修复',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => '硬件维修',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => '硬件维修',
	'Class:Incident/Attribute:resolution_code/Value:other' => '其它',
	'Class:Incident/Attribute:resolution_code/Value:other+' => '其它',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => '软件补丁',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => '软件补丁',
	'Class:Incident/Attribute:resolution_code/Value:system update' => '系统更新',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => '系统更新',
	'Class:Incident/Attribute:resolution_code/Value:training' => '培训',
	'Class:Incident/Attribute:resolution_code/Value:training+' => '培训',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:Incident/Attribute:resolution_code' => 'resolution code',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:a valider' => 'To Validate',
	'Class:Incident/Attribute:resolution_code/Value:a valider+' => 'To Validate',
	'Class:Incident/Attribute:resolution_code/Value:en attente' => 'On Hold',
	'Class:Incident/Attribute:resolution_code/Value:en attente+' => 'On Hold',
	'Class:Incident/Attribute:resolution_code/Value:a refaire' => 'To Redo',
	'Class:Incident/Attribute:resolution_code/Value:a refaire+' => 'To Redo',
	'Class:Incident/Attribute:resolution_code/Value:a cloturer' => 'To Close',
	'Class:Incident/Attribute:resolution_code/Value:a cloturer+' => 'To Close',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:Incident/Attribute:solution' => '解决方案',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => '待定的原因',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => '父级事件',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => '事件编号',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => '父级变更',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => '变更编号',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => 'Parent problem id~~',
	'Class:Incident/Attribute:parent_problem_id+' => '~~',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref~~',
	'Class:Incident/Attribute:parent_problem_ref+' => '~~',
	'Class:Incident/Attribute:related_request_list' => '相关需求',
	'Class:Incident/Attribute:related_request_list+' => '该事件相关的所有需求',
	'Class:Incident/Attribute:child_incidents_list' => '衍生事件',
	'Class:Incident/Attribute:child_incidents_list+' => '该事件相关的所有子事件',
	'Class:Incident/Attribute:public_log' => '评论',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => '用户满意度',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => '非常满意',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => '非常满意',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => '基本满意',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => '基本满意',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => '不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => '不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => '非常不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => '非常不满意',
	'Class:Incident/Attribute:user_comment' => '用户评论',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => '好记的父级事件ID名称',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => '分配',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => '重新分配',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => '待定',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => '超时',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => '自动解决',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => '自动关闭',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => '标记为已解决',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => '关闭',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => '重新打开',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => '不能分配父级事件给自己',

	'Class:Incident/Method:ResolveChildTickets' => '解决子工单',
	'Class:Incident/Method:ResolveChildTickets+' => '级联解决子Ticket(事件自动解决),和调整以下内容保持一至: 服务, 团队, 办理人, 解决方案',
	'Tickets:Related:OpenIncidents' => '打开的事件',
));
