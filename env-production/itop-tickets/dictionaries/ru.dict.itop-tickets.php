<?php
/**
 * Локализация интерфейса Combodo iTop подготовлена сообществом iTop по-русски http://community.itop-itsm.ru.
 *
 * @author      Vladimir Kunin <v.b.kunin@gmail.com>
 * @link        http://community.itop-itsm.ru  iTop Russian Community
 * @link        https://github.com/itop-itsm-ru/itop-rus
 * @license     http://opensource.org/licenses/AGPL-3.0
 *
 */
//
// Class: Ticket
//
Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:Ticket' => 'Тикет',
	'Class:Ticket+' => '',
	'Class:Ticket/Attribute:ref' => 'Номер',
	'Class:Ticket/Attribute:ref+' => '',
	'Class:Ticket/Attribute:org_id' => 'Организация',
	'Class:Ticket/Attribute:org_id+' => '',
	'Class:Ticket/Attribute:org_name' => 'Организация',
	'Class:Ticket/Attribute:org_name+' => '',
	'Class:Ticket/Attribute:caller_id' => 'Инициатор',
	'Class:Ticket/Attribute:caller_id+' => '',
	'Class:Ticket/Attribute:caller_name' => 'Инициатор',
	'Class:Ticket/Attribute:caller_name+' => '',
	'Class:Ticket/Attribute:team_id' => 'Команда',
	'Class:Ticket/Attribute:team_id+' => '',
	'Class:Ticket/Attribute:team_name' => 'Команда',
	'Class:Ticket/Attribute:team_name+' => '',
	'Class:Ticket/Attribute:agent_id' => 'Агент',
	'Class:Ticket/Attribute:agent_id+' => '',
	'Class:Ticket/Attribute:agent_name' => 'Агент',
	'Class:Ticket/Attribute:agent_name+' => '',
	'Class:Ticket/Attribute:title' => 'Название',
	'Class:Ticket/Attribute:title+' => '',
	'Class:Ticket/Attribute:description' => 'Описание',
	'Class:Ticket/Attribute:description+' => '',
	'Class:Ticket/Attribute:start_date' => 'Дата начала',
	'Class:Ticket/Attribute:start_date+' => '',
	'Class:Ticket/Attribute:end_date' => 'Дата окончания',
	'Class:Ticket/Attribute:end_date+' => '',
	'Class:Ticket/Attribute:last_update' => 'Дата обновления',
	'Class:Ticket/Attribute:last_update+' => '',
	'Class:Ticket/Attribute:close_date' => 'Дата закрытия',
	'Class:Ticket/Attribute:close_date+' => '',
	'Class:Ticket/Attribute:private_log' => 'Внутренний журнал',
	'Class:Ticket/Attribute:private_log+' => 'Информация внутреннего журнала недоступна пользователям портала',
	'Class:Ticket/Attribute:contacts_list' => 'Контакты',
	'Class:Ticket/Attribute:contacts_list+' => 'Все контакты, связанные с этим тикетом',
	'Class:Ticket/Attribute:functionalcis_list' => 'КЕ',
	'Class:Ticket/Attribute:functionalcis_list+' => 'Все конфигурационные единицы, на которые влияет этот тикет. Элементы, отмеченные как "Вычислено" автоматически считаются затронутыми и участвуют в анализе влияния. Элементы, отмеченные как "Не влияет" исключены из анализа.',
	'Class:Ticket/Attribute:workorders_list' => 'Наряды на работу',
	'Class:Ticket/Attribute:workorders_list+' => 'Наряды на работу',
	'Class:Ticket/Attribute:finalclass' => 'Тип',
	'Class:Ticket/Attribute:finalclass+' => '',
	'Class:Ticket/Attribute:operational_status' => 'Статус обработки',
	'Class:Ticket/Attribute:operational_status+' => 'Вычисляется после детального статуса',
	'Class:Ticket/Attribute:operational_status/Value:ongoing' => 'Выполняется',
	'Class:Ticket/Attribute:operational_status/Value:ongoing+' => 'В процессе обработки',
	'Class:Ticket/Attribute:operational_status/Value:resolved' => 'Выполнен',
	'Class:Ticket/Attribute:operational_status/Value:resolved+' => '',
	'Class:Ticket/Attribute:operational_status/Value:closed' => 'Закрыт',
	'Class:Ticket/Attribute:operational_status/Value:closed+' => '',
	'Ticket:ImpactAnalysis' => 'Анализ влияния',
));


//
// Class: lnkContactToTicket
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkContactToTicket' => 'Связь Контакт/Тикет',
	'Class:lnkContactToTicket+' => '',
	'Class:lnkContactToTicket/Attribute:ticket_id' => 'Тикет',
	'Class:lnkContactToTicket/Attribute:ticket_id+' => '',
	'Class:lnkContactToTicket/Attribute:ticket_ref' => 'Связь',
	'Class:lnkContactToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkContactToTicket/Attribute:contact_id' => 'Контакт',
	'Class:lnkContactToTicket/Attribute:contact_id+' => '',
	'Class:lnkContactToTicket/Attribute:contact_email' => 'Email контакта',
	'Class:lnkContactToTicket/Attribute:contact_email+' => '',
	'Class:lnkContactToTicket/Attribute:role' => 'Роль (текст)',
	'Class:lnkContactToTicket/Attribute:role+' => '',
	'Class:lnkContactToTicket/Attribute:role_code' => 'Роль',
	'Class:lnkContactToTicket/Attribute:role_code/Value:manual' => 'Добавлено вручную',
	'Class:lnkContactToTicket/Attribute:role_code/Value:computed' => 'Вычислено',
	'Class:lnkContactToTicket/Attribute:role_code/Value:do_not_notify' => 'Не уведомлять',
));

//
// Class: WorkOrder
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:WorkOrder' => 'Наряд на работу',
	'Class:WorkOrder+' => '',
	'Class:WorkOrder/Attribute:name' => 'Название',
	'Class:WorkOrder/Attribute:name+' => '',
	'Class:WorkOrder/Attribute:status' => 'Статус',
	'Class:WorkOrder/Attribute:status+' => '',
	'Class:WorkOrder/Attribute:status/Value:open' => 'Открыт',
	'Class:WorkOrder/Attribute:status/Value:open+' => '',
	'Class:WorkOrder/Attribute:status/Value:closed' => 'Закрыт',
	'Class:WorkOrder/Attribute:status/Value:closed+' => '',
	'Class:WorkOrder/Attribute:description' => 'Описание',
	'Class:WorkOrder/Attribute:description+' => '',
	'Class:WorkOrder/Attribute:ticket_id' => 'Тикет',
	'Class:WorkOrder/Attribute:ticket_id+' => '',
	'Class:WorkOrder/Attribute:ticket_ref' => 'Тикет',
	'Class:WorkOrder/Attribute:ticket_ref+' => '',
	'Class:WorkOrder/Attribute:team_id' => 'Команда',
	'Class:WorkOrder/Attribute:team_id+' => '',
	'Class:WorkOrder/Attribute:team_name' => 'Команда',
	'Class:WorkOrder/Attribute:team_name+' => '',
	'Class:WorkOrder/Attribute:agent_id' => 'Агент',
	'Class:WorkOrder/Attribute:agent_id+' => '',
	'Class:WorkOrder/Attribute:agent_email' => 'Email агента',
	'Class:WorkOrder/Attribute:agent_email+' => '',
	'Class:WorkOrder/Attribute:start_date' => 'Дата начала',
	'Class:WorkOrder/Attribute:start_date+' => '',
	'Class:WorkOrder/Attribute:end_date' => 'Дата окончания',
	'Class:WorkOrder/Attribute:end_date+' => '',
	'Class:WorkOrder/Attribute:log' => 'Журнал',
	'Class:WorkOrder/Attribute:log+' => '',
	'Class:WorkOrder/Stimulus:ev_close' => 'Закрыть',
	'Class:WorkOrder/Stimulus:ev_close+' => '',
));


// Fieldset translation
Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Ticket:baseinfo'                                                => 'Общая информация',
	'Ticket:date'                                                    => 'Даты',
	'Ticket:contact'                                                 => 'Контакты',
	'Ticket:moreinfo'                                               => 'Дополнительная информация',
	'Ticket:relation'                                               => 'Зависимости',
	'Ticket:log'                                                    => 'Журнал',
	'Ticket:Type'                                                   => 'Приоритет',
	//customization courrier cfac 
	'Ticket:courrier:Process'                                       => 'Courrier process coordination',
	'Ticket:courrier:Check'                                         => 'Courrier check',
	'Ticket:courrier:Validation'                                    => 'Courrier Validation',
	//customization courrier cfac 
	'Ticket:support'                                                => 'Поддержка',
	'Ticket:resolution'                                             => 'Решение',
	'Ticket:SLA'                                                    => 'Отчёт SLA',
	'WorkOrder:Details'                                             => 'Детали',
	'WorkOrder:Moreinfo'                                            => 'Дополнительная информация',
	'Tickets:ResolvedFrom'                                          => 'Автоматическое решение из %1$s',
	'Class:cmdbAbstractObject/Method:Set'                           => 'Set~~',
	'Class:cmdbAbstractObject/Method:Set+'                          => 'Set a field with a static value~~',
	'Class:cmdbAbstractObject/Method:Set/Param:1'                   => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Set/Param:1+'                  => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:Set/Param:2'                   => 'Value~~',
	'Class:cmdbAbstractObject/Method:Set/Param:2+'                  => 'The value to set~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate'                => 'SetCurrentDate~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate+'               => 'Set a field with the current date and time~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate/Param:1'        => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate/Param:1+'       => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDateIfNull'          => 'SetCurrentDateIfNull~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDateIfNull+'         => 'Set an empty field with the current date and time~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDateIfNull/Param:1'  => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDateIfNull/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser'                => 'SetCurrentUser~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser+'               => 'Set a field with the currently logged in user~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser/Param:1'        => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser/Param:1+'       => 'The field to set, in the current object. If the field is a string then the friendly name will be used, otherwise the identifier will be used. That friendly name is the name of the person if any is attached to the user, otherwise it is the login.~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson'              => 'SetCurrentPerson~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson+'             => 'Set a field with the currently logged in person (the "person" attached to the logged in "user").~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson/Param:1'      => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson/Param:1+'     => 'The field to set, in the current object. If the field is a string then the friendly name will be used, otherwise the identifier will be used.~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime'                => 'SetElapsedTime~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime+'               => 'Set a field with the time (seconds) elapsed since a date given by another field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:1'        => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:1+'       => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:2'        => 'Reference Field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:2+'       => 'The field from which to get the reference date~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:3'        => 'Working Hours~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:3+'       => 'Leave empty to rely on the standard working hours scheme, or set to "DefaultWorkingTimeComputer" to force a 24x7 scheme~~',
	'Class:cmdbAbstractObject/Method:SetIfNull'                     => 'SetIfNull~~',
	'Class:cmdbAbstractObject/Method:SetIfNull+'                    => 'Set a field only if it is empty, with a static value~~',
	'Class:cmdbAbstractObject/Method:SetIfNull/Param:1'             => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetIfNull/Param:1+'            => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetIfNull/Param:2'              => 'Value~~',
	'Class:cmdbAbstractObject/Method:SetIfNull/Param:2+'             => 'The value to set~~',
	'Class:cmdbAbstractObject/Method:AddValue'                       => 'AddValue~~',
	'Class:cmdbAbstractObject/Method:AddValue+'                      => 'Add a fixed value to a field~~',
	'Class:cmdbAbstractObject/Method:AddValue/Param:1'               => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:AddValue/Param:1+'              => 'The field to modify, in the current object~~',
	'Class:cmdbAbstractObject/Method:AddValue/Param:2'               => 'Value~~',
	'Class:cmdbAbstractObject/Method:AddValue/Param:2+'              => 'Decimal value which will be added, can be negative~~',
	'Class:cmdbAbstractObject/Method:SetComputedDate'                => 'SetComputedDate~~',
	'Class:cmdbAbstractObject/Method:SetComputedDate+'               => 'Set a field with a date computed from another field with extra logic~~',
	'Class:cmdbAbstractObject/Method:SetComputedDate/Param:1'        => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetComputedDate/Param:1+'       => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetComputedDate/Param:2'        => 'Modifier~~',
	'Class:cmdbAbstractObject/Method:SetComputedDate/Param:2+'       => 'Textual information to modify the source date, eg. "+3 days"~~',
	'Class:cmdbAbstractObject/Method:SetComputedDate/Param:3'        => 'Source field~~',
	'Class:cmdbAbstractObject/Method:SetComputedDate/Param:3+'       => 'The field used as source to apply the Modifier logic~~',
	'Class:cmdbAbstractObject/Method:SetComputedDateIfNull'          => 'SetComputedDateIfNull~~',
	'Class:cmdbAbstractObject/Method:SetComputedDateIfNull+'         => 'Set non empty field with a date computed from another field with extra logic~~',
	'Class:cmdbAbstractObject/Method:SetComputedDateIfNull/Param:1'  => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetComputedDateIfNull/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetComputedDateIfNull/Param:2'  => 'Modifier~~',
	'Class:cmdbAbstractObject/Method:SetComputedDateIfNull/Param:2+' => 'Textual information to modify the source date, eg. "+3 days"~~',
	'Class:cmdbAbstractObject/Method:SetComputedDateIfNull/Param:3'  => 'Source field~~',
	'Class:cmdbAbstractObject/Method:SetComputedDateIfNull/Param:3+' => 'The field used as source to apply the Modifier logic~~',
	'Class:cmdbAbstractObject/Method:Reset'                          => 'Reset~~',
	'Class:cmdbAbstractObject/Method:Reset+'                         => 'Reset a field to its default value~~',
	'Class:cmdbAbstractObject/Method:Reset/Param:1'                  => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Reset/Param:1+'                 => 'The field to reset, in the current object~~',
	'Class:cmdbAbstractObject/Method:Copy'                           => 'Copy~~',
	'Class:cmdbAbstractObject/Method:Copy+'                          => 'Copy the value of a field to another field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:1'                   => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:1+'                  => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:2'                   => 'Source Field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:2+'                  => 'The field to get the value from, in the current object~~',
	'Class:cmdbAbstractObject/Method:ApplyStimulus'                  => 'ApplyStimulus~~',
	'Class:cmdbAbstractObject/Method:ApplyStimulus+'                 => 'Apply the specified stimulus to the current object~~',
	'Class:cmdbAbstractObject/Method:ApplyStimulus/Param:1'          => 'Stimulus code~~',
	'Class:cmdbAbstractObject/Method:ApplyStimulus/Param:1+'         => 'A valid stimulus code for the current class~~',
	'Class:ResponseTicketTTO/Interface:iMetricComputer'              => 'Time To Own~~',
	'Class:ResponseTicketTTO/Interface:iMetricComputer+'             => 'Goal based on a SLT of type TTO~~',
	'Class:ResponseTicketTTR/Interface:iMetricComputer'              => 'Time To Resolve~~',
	'Class:ResponseTicketTTR/Interface:iMetricComputer+'             => 'Goal based on a SLT of type TTR~~',
));

//
// Class: Document
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:Document/Attribute:contracts_list' => 'Договоры',
	'Class:Document/Attribute:contracts_list+' => 'Связанные договоры',
	'Class:Document/Attribute:services_list' => 'Услуги',
	'Class:Document/Attribute:services_list+' => 'Связанные услуги',
));