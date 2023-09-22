<?php
/**
 * Copyright (C) 2013-2021 Combodo SARL
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
 */
// Portal
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Page:DefaultTitle' => 'Uživatelský portál %1$s',
	'Page:PleaseWait' => 'Počkejte prosím',
	'Page:Home' => 'Domů',
	'Page:GoPortalHome' => 'Domů',
	'Page:GoPreviousPage' => 'Předchozí stránka',
	'Page:ReloadPage' => 'Reload page~~',
	'Portal:Button:Submit' => 'Odeslat',
	'Portal:Button:Apply' => 'Update~~',
	'Portal:Button:Cancel' => 'Zrušit',
	'Portal:Button:Close' => 'Zavřít',
	'Portal:Button:Add' => 'Přidat',
	'Portal:Button:Remove' => 'Odebrat',
	'Portal:Button:Delete' => 'Smazat',
	// ^ customization cfac for disable attachement
	'Portal:Button:ValidStatut' => 'Counted',
	'Portal:Button:NonValidStatut' => 'Not Counted',
	'Portal:Button:TypeAchat' => 'Buying',
	'Portal:Button:TypeVente' => 'Sale',
	'Portal:Button:TypeBanque' => 'Bank',
	'Portal:Button:TypeOther' => 'Other',
	'Portal:Button:TypeUndefined' => 'No Type',
	//* this section for table attachement title
	'Portal:FieldLabel:CourrierTitle' => 'Accounting Documents',
	'Portal:FieldLabel:TypeAttachmentVente' => 'Sales Documents',
	'Portal:FieldLabel:TypeAttachmentAchat' => 'Purchase Documents',
	'Portal:FieldLabel:TypeAttachmentBanque' => 'Bank Documents',
	'Portal:FieldLabel:TypeAttachmentOther' => 'Other Documents',
	'Portal:FieldLabel:TypeAttachmentUnknown' => 'Unknown Documents',
	//* this section is reserved to show the message of payment
	'Portal:FieldLabel:1MessageBlock' => 'Thank you for your trust in our file system management service.',
	'Portal:FieldLabel:2MessageBlock' => 'Your access to the application is ready to be activated, but for this we need to settle the payment associated with your subscription.',
	'Portal:FieldLabel:3MessageBlock' => 'Please make payment as soon as possible to activate your in-app service.',
	'Portal:FieldLabel:4MessageBlock' => 'Once payment is confirmed, you will be able to take full advantage of all the features of our file system management service.',
	'Portal:FieldLabel:5MessageBlock' => 'If you have any questions or need help making payment,',
	'Portal:FieldLabel:6MessageBlock' => 'do not hesitate to contact us at \'<Strong>direction@cfac.com.tn</Strong>\' or at <Strong>55 555 555</Strong>',
	'Portal:FieldLabel:7MessageBlock' => 'We thank you for your cooperation and look forward to providing you with an exceptional experience with our file system management application.',
	'Portal:FieldLabel:8MessageBlock' => 'Sincerely.',
	// ^ customization cfac for disable attachement
	'Portal:EnvironmentBanner:Title' => 'You are currently in <strong>%1$s</strong> mode~~',
	'Portal:EnvironmentBanner:GoToProduction' => 'Go back to PRODUCTION mode~~',
	'Error:HTTP:400' => 'Bad request~~',
	'Error:HTTP:401' => 'Authentication~~',
	'Error:HTTP:404' => 'Stránka nenalezena',
	'Error:HTTP:500' => 'Jejda! Nastal problém',
	'Error:HTTP:GetHelp' => 'Kontaktujte prosím administrátora, pokud problém přetrvá.',
	'Error:XHR:Fail' => 'Data se nepodařilo načíst, kontaktujte prosím administrátora.',
	'Portal:ErrorUserLoggedOut' => 'You are logged out and need to log in again in order to continue.~~',
	'Portal:Datatables:Language:Processing' => 'Počkejte prosím',
	'Portal:Datatables:Language:Search' => 'Filtr :',
	'Portal:Datatables:Language:LengthMenu' => 'Zobrazit _MENU_ položek na stránku',
	'Portal:Datatables:Language:ZeroRecords' => 'Žádný výsledek',
	'Portal:Datatables:Language:Info' => 'Stránka _PAGE_ z _PAGES_',
	'Portal:Datatables:Language:InfoEmpty' => 'Žádná informace',
	'Portal:Datatables:Language:InfoFiltered' => 'vyfiltrováno z _MAX_ položek',
	'Portal:Datatables:Language:EmptyTable' => 'Žádná data',
	'Portal:Datatables:Language:DisplayLength:All' => 'Vše',
	'Portal:Datatables:Language:Paginate:First' => 'První',
	'Portal:Datatables:Language:Paginate:Previous' => 'Předchozí',
	'Portal:Datatables:Language:Paginate:Next' => 'Následující',
	'Portal:Datatables:Language:Paginate:Last' => 'Poslední',
	'Portal:Datatables:Language:Sort:Ascending' => 'řadit vzestupně',
	'Portal:Datatables:Language:Sort:Descending' => 'řadit sestupně',
	'Portal:Autocomplete:NoResult' => 'Žádná data',
	'Portal:Attachments:DropZone:Message' => 'Přesuňte soubory myší pro vložení',
	'Portal:File:None' => 'No file',
	'Portal:File:DisplayInfo' => '<a href="%2$s" class="file_download_link">%1$s</a>',
	'Portal:File:DisplayInfo+' => '%1$s (%2$s) <a href="%3$s" class="file_open_link" target="_blank">Open</a> / <a href="%4$s" class="file_download_link">Download</a>',
	'Portal:Calendar-FirstDayOfWeek' => 'cs', //work with moment.js locales
));

// Object form
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Portal:Form:Caselog:Entry:Close:Tooltip' => 'Close this entry~~',
	'Portal:Form:Close:Warning' => 'Do you want to leave this form ? Data entered may be lost~~',
	'Portal:Error:ObjectCannotBeCreated' => 'Error: object cannot be created. Check associated objects and attachments before submitting again this form.~~',
	'Portal:Error:ObjectCannotBeUpdated' => 'Error: object cannot be updated. Check associated objects and attachments before submitting again this form.~~',
));

// UserProfile brick
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Brick:Portal:UserProfile:Name' => 'Uživatelský profil',
	'Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil' => 'Můj profil',
	'Brick:Portal:UserProfile:Navigation:Dropdown:Logout' => 'Odhlásit',
	'Brick:Portal:UserProfile:Password:Title' => 'Heslo',
	'Brick:Portal:UserProfile:Password:ChoosePassword' => 'Zadejte heslo',
	'Brick:Portal:UserProfile:Password:ConfirmPassword' => 'Potvrďte heslo',
	'Brick:Portal:UserProfile:Password:CantChangeContactAdministrator' => 'Pro změnu hesla kontaktujte administrátora',
	'Brick:Portal:UserProfile:Password:CantChangeForUnknownReason' => 'Nepodařilo se změnit heslo, kontaktujte prosím administrátora',
	'Brick:Portal:UserProfile:PersonalInformations:Title' => 'Osobní informace',
	'Brick:Portal:UserProfile:Photo:Title' => 'Foto',
));

// AggregatePageBrick
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Brick:Portal:AggregatePage:DefaultTitle' => 'Dashboard~~',
));

// BrowseBrick brick
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Brick:Portal:Browse:Name' => 'Procházet položky',
	'Brick:Portal:Browse:Mode:List' => 'Seznam',
	'Brick:Portal:Browse:Mode:Tree' => 'Strom',
	'Brick:Portal:Browse:Mode:Mosaic' => 'Mosaic~~',
	'Brick:Portal:Browse:Action:Drilldown' => 'Rozpad',
	'Brick:Portal:Browse:Action:View' => 'Podrobnosti',
	'Brick:Portal:Browse:Action:Edit' => 'Upravit',
	'Brick:Portal:Browse:Action:Create' => 'Vytvořit',
	'Brick:Portal:Browse:Action:CreateObjectFromThis' => 'Nový %1$s',
	'Brick:Portal:Browse:Tree:ExpandAll' => 'Rozbalit vše',
	'Brick:Portal:Browse:Tree:CollapseAll' => 'Sbalit vše',
	'Brick:Portal:Browse:Filter:NoData' => 'Žádná položka',
));

// ManageBrick brick
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Brick:Portal:Manage:Name' => 'Spravovat položky',
	'Brick:Portal:Manage:Table:NoData' => 'Žádná položka',
	'Brick:Portal:Manage:Table:ItemActions' => 'Actions~~',
	'Brick:Portal:Manage:DisplayMode:list' => 'List~~',
	'Brick:Portal:Manage:DisplayMode:pie-chart' => 'Pie Chart~~',
	'Brick:Portal:Manage:DisplayMode:bar-chart' => 'Bar Chart',
	'Brick:Portal:Manage:Others' => 'Others~~',
	'Brick:Portal:Manage:All' => 'All~~',
	'Brick:Portal:Manage:Group' => 'Group~~',
	'Brick:Portal:Manage:fct:count' => 'Total~~',
	'Brick:Portal:Manage:fct:sum' => 'Sum~~',
	'Brick:Portal:Manage:fct:avg' => 'Average~~',
	'Brick:Portal:Manage:fct:min' => 'Min~~',
	'Brick:Portal:Manage:fct:max' => 'Max~~',
));

// ObjectBrick brick
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Brick:Portal:Object:Name' => 'Objekt',
	'Brick:Portal:Object:Form:Create:Title' => 'Nový %1$s',
	'Brick:Portal:Object:Form:Edit:Title' => 'Aktualizace %2$s (%1$s)',
	'Brick:Portal:Object:Form:View:Title' => '%1$s : %2$s',
	'Brick:Portal:Object:Form:Stimulus:Title' => 'Vyplňte prosím následující informace:',
	'Brick:Portal:Object:Form:Message:Saved' => 'Uloženo',
	'Brick:Portal:Object:Form:Message:ObjectSaved' => '%1$s uloženo~~',
	'Brick:Portal:Object:Search:Regular:Title' => 'Vybrat %1$s (%2$s)',
	'Brick:Portal:Object:Search:Hierarchy:Title' => 'Vybrat %1$s (%2$s)',
	'Brick:Portal:Object:Copy:TextToCopy' => '%1$s: %2$s~~',
	'Brick:Portal:Object:Copy:Tooltip' => 'Copy object link~~',
	'Brick:Portal:Object:Copy:CopiedTooltip' => 'Copied~~'
));

// CreateBrick brick
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Brick:Portal:Create:Name' => 'Rychlé vytvoření',
	'Brick:Portal:Create:ChooseType' => 'Please, choose a type~~',
));

// Filter brick
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Brick:Portal:Filter:Name' => 'Prefilter a brick~~',
	'Brick:Portal:Filter:SearchInput:Placeholder' => 'eg. connect wifi~~',
	'Brick:Portal:Filter:SearchInput:Submit' => 'Search~~',
));
