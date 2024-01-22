<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Menu:RequestManagement' => 'ヘルプデスク',
	'Menu:RequestManagement+' => 'ヘルプデスクk',
	'Menu:RequestManagementProvider' => 'ヘルプデスクプロバイダー',
	'Menu:RequestManagementProvider+' => 'ヘルプディスクプロバイダー',
	'Menu:UserRequest:Provider' => 'プロバイダーに移管されたオープンな要求',
	'Menu:UserRequest:Provider+' => 'プロバイダーに移管されたオープンな要求',
	'Menu:UserRequest:Overview' => '概要',
	'Menu:UserRequest:Overview+' => '概要',
	'Menu:NewUserRequest' => '新規ユーザ要求',
	'Menu:NewUserRequest+' => '新規ユーザ要求チケットの作成',
	'Menu:SearchUserRequests' => 'ユーザ要求検索',
	'Menu:SearchUserRequests+' => 'ユーザ要求チケットの検索',
	'Menu:UserRequest:Shortcuts' => 'ショートカット',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => '私に割り当てられた要求',
	'Menu:UserRequest:MyRequests+' => '私に割り当てられた要求（エージェントとして）',
	'Menu:UserRequest:MySupportRequests' => '私のサポートコール',
	'Menu:UserRequest:MySupportRequests+' => '私のサポートコール',
	'Menu:UserRequest:EscalatedRequests' => 'エスカレートされた要求',
	'Menu:UserRequest:EscalatedRequests+' => 'エスカレートされた要求',
	'Menu:UserRequest:OpenRequests' => '全てのオープンな要求',
	'Menu:UserRequest:OpenRequests+' => '全てのオープンな要求',
	'UI:WelcomeMenu:MyAssignedCalls' => '私に割り当てられた要求',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => '最近14日間のタイプ別要求',
	'UI-RequestManagementOverview-Last-14-days' => '最近14日間の要求数',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'ステータス別のオープンなリクエスト',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'エージェント別のオープンなリクエスト',
	'UI-RequestManagementOverview-OpenRequestByType' => 'タイプ別のオープンなリクエスト',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => '顧客別のオープンなリクエスト',
	'Class:UserRequest:KnownErrorList' => '既知のエラー',
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
// Class: UserRequest
//

Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Class:UserRequest' => 'ユーザ要求',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => '状態',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => '新規',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'エスカレーションTTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => '割り当て済み',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'エスカレーションTTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => '承認待ち',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => '承認済み',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => '否認済み',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => '保留中',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => '解決済み',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'クローズ',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => '要求タイプ',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'サービス要求',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'サービス要求',
	'Class:UserRequest/Attribute:impact' => 'インパクト',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => '部門',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'サービス',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => '人',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => '優先度',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => '最優先',
	'Class:UserRequest/Attribute:priority/Value:1+' => '最優先',
	'Class:UserRequest/Attribute:priority/Value:2' => '高',
	'Class:UserRequest/Attribute:priority/Value:2+' => '高',
	'Class:UserRequest/Attribute:priority/Value:3' => '中',
	'Class:UserRequest/Attribute:priority/Value:3+' => '中',
	'Class:UserRequest/Attribute:priority/Value:4' => '低',
	'Class:UserRequest/Attribute:priority/Value:4+' => '低',
	'Class:UserRequest/Attribute:urgency' => '緊急度',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => '至急',
	'Class:UserRequest/Attribute:urgency/Value:1+' => '至急',
	'Class:UserRequest/Attribute:urgency/Value:2' => '高',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '高',
	'Class:UserRequest/Attribute:urgency/Value:3' => '中',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '中',
	'Class:UserRequest/Attribute:urgency/Value:4' => '低',
	'Class:UserRequest/Attribute:urgency/Value:4+' => '低',
	// ^ Start Here customization des courrier

	// add attribute type person vente -->
	'Class:UserRequest/Attribute:type_person' => 'type person',
	'Class:UserRequest/Attribute:type_person+' => '',
	'Class:UserRequest/Attribute:type_personne/Value:physical_person' => 'Physical person',
	'Class:UserRequest/Attribute:type_personne/Value:physical_person+' => '',
	'Class:UserRequest/Attribute:type_personne/Value:moral_person' => 'Moral person',
	'Class:UserRequest/Attribute:type_personne/Value:moral_person+' => '',

	// add attribute numero first invoice vente -->
	'Class:UserRequest/Attribute:numero_start_invoice_vente' => 'Sales invoice starting number',
	'Class:UserRequest/Attribute:numero_start_invoice_vente+' => '',

	//add attribute numero last invoice vente -->
	'Class:UserRequest/Attribute:numero_end_invoice_vente' => 'Sales invoice finishing number',
	'Class:UserRequest/Attribute:numero_end_invoice_vente+' => '',

	// add attribute numero last month vente -->
	'Class:UserRequest/Attribute:numero_last_month_invoice_vente' => 'Sales invoice last month number',
	'Class:UserRequest/Attribute:numero_last_month_invoice_vente+' => '',

	//add attribute chiffre d'affaires vente -->
	'Class:UserRequest/Attribute:amount_turnover_vente' => 'Amount of the turnover',
	'Class:UserRequest/Attribute:amount_turnover_vente+' => '',

	// add attribute bordereau bancaire vente -->
	'Class:UserRequest/Attribute:bank_slip_vente' => 'Bank sales slip',
	'Class:UserRequest/Attribute:bank_slip_vente+' => '',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:yes' =>'Yes',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:yes+' => '',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:no' => 'No',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:no+' => '',

	// add attribute avis d'opérations vente -->
	'Class:UserRequest/Attribute:transaction_notice_vente' => 'Sale transaction notice',
	'Class:UserRequest/Attribute:transaction_notice_vente+' => '',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:yes+' => '',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:no' => 'No',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:no+' => '',

	// add attribute certificats de RS clients vente -->
	'Class:UserRequest/Attribute:sr_certificates_vente' => 'customer RS certificates',
	'Class:UserRequest/Attribute:sr_certificates_vente+' => '',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:yes+' => '',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:no' => 'No',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:no+' => '',

	// add attribute statement and documents facture banque -->
	'Class:UserRequest/Attribute:statements_and_documents_banque' => 'Bank statements and purchasing documents',
	'Class:UserRequest/Attribute:statements_and_documents_banque+' => '',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:yes+' => '',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:no' => 'No',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:no+' => '',

	// add attribute comment on reconciliation statement facture banque -->
	'Class:UserRequest/Attribute:comment_on_reconciliation_statement_banque' => 'comment on the reconciliation statement from the previous month',
	'Class:UserRequest/Attribute:comment_on_reconciliation_statement_banque+' => '',

	// add attribute exceptional order courrier (Visa) -->
	'Class:UserRequest/Attribute:exceptional_order_courrier' => 'exceptional order courrier (Visa)',
	'Class:UserRequest/Attribute:exceptional_order_courrier+' => '',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:yes+' => '',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:no' => 'No',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:no+' => '',

	// add attribute month courrier -->
	'Class:UserRequest/Attribute:month_courrier' => 'Month of courrier',
	'Class:UserRequest/Attribute:month_courrier+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:1' => 'January',
	'Class:UserRequest/Attribute:month_courrier/Value:1+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:2' => 'February',
	'Class:UserRequest/Attribute:month_courrier/Value:2+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:3' => 'March',
	'Class:UserRequest/Attribute:month_courrier/Value:3+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:4' => 'April',
	'Class:UserRequest/Attribute:month_courrier/Value:4+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:5' => 'May',
	'Class:UserRequest/Attribute:month_courrier/Value:5+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:6' => 'June',
	'Class:UserRequest/Attribute:month_courrier/Value:6+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:7' => 'July',
	'Class:UserRequest/Attribute:month_courrier/Value:7+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:8' => 'August',
	'Class:UserRequest/Attribute:month_courrier/Value:8+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:9' => 'September',
	'Class:UserRequest/Attribute:month_courrier/Value:9+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:10' => 'October',
	'Class:UserRequest/Attribute:month_courrier/Value:10+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:11' => 'november',
	'Class:UserRequest/Attribute:month_courrier/Value:11+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:12' => 'December',
	'Class:UserRequest/Attribute:month_courrier/Value:12+' => '',

	// add attribute to block client URL -->
	'Class:UserRequest/Attribute:block_client_ur' => 'Block client if :',
	'Class:UserRequest/Attribute:block_client_ur+' => '',
	'Class:UserRequest/Attribute:block_client_ur/Value:1' => 'He didn\'t make the payment',
	'Class:UserRequest/Attribute:block_client_ur/Value:1+' => '',
	'Class:UserRequest/Attribute:block_client_ur/Value:2' => 'He did pay his payments',
	'Class:UserRequest/Attribute:block_client_ur/Value:2+' => '',

	// ^ End Here customization des courrier -->
	'Class:UserRequest/Attribute:origin' => '起源',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'メール',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'メール',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'モニタリング',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'モニタリング',
	'Class:UserRequest/Attribute:origin/Value:phone' => '電話',
	'Class:UserRequest/Attribute:origin/Value:phone+' => '電話',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'ポータル',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'ポータル',
	'Class:UserRequest/Attribute:approver_id' => '承認者',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => '承認者メール',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => 'サービス',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'サービス名',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'サービスサブカテゴリ',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'サービスサブカテゴリ名',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => 'エスカレーションフラグ',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'いいえ',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'いいえ',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'はい',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'はい',
	'Class:UserRequest/Attribute:escalation_reason' => 'エスカレーションの理由',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => '割り当て日',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => '解決日',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => '最後の保留日',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => '合計保留',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO期限',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA tto 合格',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA tto オーバー',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR期限',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA ttr 合格',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA ttr オーバー',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => '解決遅れ',
	'Class:UserRequest/Attribute:time_spent+' => '',
	/*
	'Class:UserRequest/Attribute:resolution_code' => '解決コード',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => '補助',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '補助',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'バグ修正',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'バグ修正',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'ハードウエア修理',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'ハードウエア修理',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'その他',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'その他',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'ソフトウエアパッチ',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'ソフトウエアパッチ',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'システム更新',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'システム更新',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => '研修',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '研修',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:resolution_code' => 'resolution code',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider' => 'To Validate',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider+' => 'To Validate',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente' => 'On Hold',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente+' => 'On Hold',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire' => 'To Redo',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire+' => 'To Redo',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer' => 'To Close',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer+' => 'To Close',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:solution' => '解決',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => '保留理由',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => '親要求',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_incident_id' => '親インシデント',
	'Class:UserRequest/Attribute:parent_incident_id+' => '~~',
	'Class:UserRequest/Attribute:parent_request_ref' => '参照要求',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => '親問題',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => '参照問題',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => '親変更',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => '参照変更',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:parent_incident_ref' => 'Parent incident ref~~',
	'Class:UserRequest/Attribute:parent_incident_ref+' => '~~',
	'Class:UserRequest/Attribute:related_request_list' => '子要求',
	'Class:UserRequest/Attribute:related_request_list+' => '',
	'Class:UserRequest/Attribute:public_log' => '公開ログ',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => 'ユーザ満足度',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => '非常に満足',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '非常に満足',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => '十分満足',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '十分満足',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => '多少不満',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '多少不満',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => '非常に不満',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '非常に不満',
	'Class:UserRequest/Attribute:user_comment' => 'ユーザコメント',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => '親要求id名',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => '割り当て',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => '再割り当て',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => '承認',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => '否認',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => '保留',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'タイムアウト',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => '自動解決',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => '自動クローズ',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => '解決済みとマーク',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'この要求をクローズ',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => '再オープン',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => '承認待ち',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself~~',

	'Class:UserRequest/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info~~',
));


Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Organization:Overview:UserRequests' => 'User Requests from this organization~~',
	'Organization:Overview:MyUserRequests' => 'My User Requests for this organization~~',
	'Organization:Overview:Tickets' => 'Tickets for this organization~~',
));
