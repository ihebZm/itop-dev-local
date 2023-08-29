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

namespace Combodo\iTop\Renderer\Bootstrap\FieldRenderer;

use AbstractAttachmentsRenderer;
use AttachmentPlugIn;
use AttributeDateTime;
use Combodo\iTop\Form\Field\Field;
use Combodo\iTop\Renderer\RenderingOutput;
use DBObjectSearch;
use DBObjectSet;
use Dict;
use InlineImage;
use MetaModel;
use utils;

/**
 * This is the class used to render attachments in the user portal.
 *
 * In the iTop console this is handled in the itop-attachments module. Most of the code here is a duplicate of this module.
 *
 * @see \AbstractAttachmentsRenderer and its implementations for the iTop console
 *
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 */
class BsFileUploadFieldRenderer extends BsFieldRenderer
{
	/** @var DBObjectSet */
	private $oAttachmentsSet;
	private $oAttachmentsSetAchat;
	private $oAttachmentsSetBanque;
	private $oAttachmentsSetOther;
	private $oAttachmentsSetUnKnown;

	public function __construct(Field $oField)
	{
		parent::__construct($oField);

		// & 1 Section of Attachement for vente the section to copy Start From HERE
		$oSearch = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_vente\'');
		// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
		$oSearch->AllowAllData();
		$sObjectClass = get_class($this->oField->GetObject());
		$this->oAttachmentsSet = new DBObjectSet($oSearch, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
		// & 1 Section of Attachement for vente the section to copy END From HERE

		// & 2 Section of Attachement for achat the section to copy Start From HERE
		$oSearch2 = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_achat\'');
		// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
		$oSearch2->AllowAllData();
		$sObjectClass = get_class($this->oField->GetObject());
		$this->oAttachmentsSetAchat = new DBObjectSet($oSearch2, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
		// & 2 Section of Attachement for achat the section to copy END From HERE

		// & 3 Section of Attachement for banque the section to copy Start From HERE
		$oSearch3 = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_banque\'');
		// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
		$oSearch3->AllowAllData();
		$sObjectClass = get_class($this->oField->GetObject());
		$this->oAttachmentsSetBanque = new DBObjectSet($oSearch3, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
		// & 3 Section of Attachement for banque the section to copy END From HERE

		// & 4 Section of Attachement for other the section to copy Start From HERE
		$oSearch4 = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_other\'');
		// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
		$oSearch4->AllowAllData();
		$sObjectClass = get_class($this->oField->GetObject());
		$this->oAttachmentsSetOther = new DBObjectSet($oSearch4, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
		// & 4 Section of Attachement for other the section to copy END From HERE

		// & 2 Section of Attachement for unknown the section to copy Start From HERE
		$oSearch5 = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_unkown\'');
		// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
		$oSearch5->AllowAllData();
		$sObjectClass = get_class($this->oField->GetObject());
		$this->oAttachmentsSetUnKnown = new DBObjectSet($oSearch5, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
		// & 2 Section of Attachement for other the section to copy END From HERE
	}

	/**
	 * @inheritDoc
	 * @throws \CoreException
	 */
	public function Render()
	{
		$oOutput = parent::Render();

		$sObjectClass = get_class($this->oField->GetObject());
		$bIsDeleteAllowed = ($this->oField->GetAllowDelete() && !$this->oField->GetReadOnly());
		$sTempId = utils::GetUploadTempId($this->oField->GetTransactionId());
		$sUploadDropZoneLabel = Dict::S('Portal:Attachments:DropZone:Message');

		// & 1 Section of Attachement the Vente section Start From HERE
		
		// Starting field container
		$oOutput->AddHtml('<div class="form-group">');

		$sCollapseTogglerIconVisibleClass = 'glyphicon-menu-down';
		$sCollapseTogglerIconHiddenClass = 'glyphicon-menu-down collapsed';
		$sCollapseTogglerClass = 'form_linkedset_toggler';
		$sCollapseTogglerId = $sCollapseTogglerClass . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperId = 'form_upload_wrapper_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTag = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClass .= ' collapsed';
		$sCollapseTogglerExpanded = 'false';
		$sCollapseTogglerIconClass = $sCollapseTogglerIconHiddenClass;
		$sCollapseJSInitState = 'false';

		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountVenteDoc = $this->oAttachmentsSet->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTag.'>')
				->AddHtml('<a id="' . $sCollapseTogglerId . '" class="' . $sCollapseTogglerClass . '" data-toggle="collapse" href="#' . $sFieldWrapperId . '" aria-expanded="' . $sCollapseTogglerExpanded . '" aria-controls="' . $sFieldWrapperId . '">')
				->AddHtml(Dict::S('Portal:FieldLabel:TypeAttachmentVente'),true)
				->AddHtml(' (<span class="attachments-count">'.$iAttachmentsCountVenteDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClass . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperId.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row">');
		$this->PrepareExistingFiles($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');
		// & 1 Section of Attachement the Vente section to copy END From HERE

		// & 2 Section of Attachement the Achat section to copy Start From HERE
		
		// Starting field container
		$oOutput->AddHtml('<div class="form-group">');

		$sCollapseTogglerIconVisibleClassAchat = 'glyphicon-menu-down_';
		$sCollapseTogglerIconHiddenClassAchat = 'glyphicon-menu-down collapsed_';
		$sCollapseTogglerClassAchat = 'form_linkedset_toggler_';
		$sCollapseTogglerIdAchat = $sCollapseTogglerClassAchat . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdAchat = 'form_upload_wrapper_Achat_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagAchat = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClassAchat .= ' collapsed';
		$sCollapseTogglerExpandedAchat = 'false';
		$sCollapseTogglerIconClassAchat = $sCollapseTogglerIconHiddenClassAchat;
		$sCollapseJSInitStateAchat = 'false';

		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountAchatDoc = $this->oAttachmentsSetAchat->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagAchat.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdAchat . '" class="' . $sCollapseTogglerClassAchat . '" data-toggle="collapse" href="#' . $sFieldWrapperIdAchat . '" aria-expanded="' . $sCollapseTogglerExpandedAchat . '" aria-controls="' . $sFieldWrapperIdAchat . '">')
				->AddHtml(Dict::S('Portal:FieldLabel:TypeAttachmentAchat'),true)
				->AddHtml(' (<span class="attachments-count">'.$iAttachmentsCountAchatDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassAchat . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdAchat.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row">');
		$this->PrepareExistingFilesAchat($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');
		// & 2 Section of Attachement the Achat section to copy END From HERE

		// & 3 Section of Attachement the Banque section to copy Start From HERE
		
		// Starting field container
		$oOutput->AddHtml('<div class="form-group">');

		$sCollapseTogglerIconVisibleClassBanque = 'glyphicon-menu-down_';
		$sCollapseTogglerIconHiddenClassBanque = 'glyphicon-menu-down collapsed_';
		$sCollapseTogglerClassBanque = 'form_linkedset_toggler_';
		$sCollapseTogglerIdBanque = $sCollapseTogglerClassBanque . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdBanque = 'form_upload_wrapper_Banque_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagBanque = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClassBanque .= ' collapsed';
		$sCollapseTogglerExpandedBanque = 'false';
		$sCollapseTogglerIconClassBanque = $sCollapseTogglerIconHiddenClassBanque;
		$sCollapseJSInitStateBanque = 'false';

		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountBanqueDoc = $this->oAttachmentsSetBanque->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagBanque.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdBanque . '" class="' . $sCollapseTogglerClassBanque . '" data-toggle="collapse" href="#' . $sFieldWrapperIdBanque . '" aria-expanded="' . $sCollapseTogglerExpandedBanque . '" aria-controls="' . $sFieldWrapperIdBanque . '">')
				->AddHtml(Dict::S('Portal:FieldLabel:TypeAttachmentBanque'),true)
				->AddHtml(' (<span class="attachments-count">'.$iAttachmentsCountBanqueDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassBanque . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdBanque.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row">');
		$this->PrepareExistingFilesBanque($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');
		// & 3 Section of Attachement the Banque section to copy END From HERE

		// & 4 Section of Attachement the Other section to copy Start From HERE
		
		// Starting field container
		$oOutput->AddHtml('<div class="form-group">');

		$sCollapseTogglerIconVisibleClassOther = 'glyphicon-menu-down_';
		$sCollapseTogglerIconHiddenClassOther = 'glyphicon-menu-down collapsed_';
		$sCollapseTogglerClassOther = 'form_linkedset_toggler_';
		$sCollapseTogglerIdOther = $sCollapseTogglerClassOther . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdOther = 'form_upload_wrapper_Other_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagOther = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClassOther .= ' collapsed';
		$sCollapseTogglerExpandedOther = 'false';
		$sCollapseTogglerIconClassOther = $sCollapseTogglerIconHiddenClassOther;
		$sCollapseJSInitStateOther = 'false';

		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountOtherDoc = $this->oAttachmentsSetOther->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagOther.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdOther . '" class="' . $sCollapseTogglerClassOther . '" data-toggle="collapse" href="#' . $sFieldWrapperIdOther . '" aria-expanded="' . $sCollapseTogglerExpandedOther . '" aria-controls="' . $sFieldWrapperIdOther . '">')
				->AddHtml(Dict::S('Portal:FieldLabel:TypeAttachmentOther'),true)
				->AddHtml(' (<span class="attachments-count">'.$iAttachmentsCountOtherDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassOther . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdOther.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row">');
		$this->PrepareExistingFilesOther($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');
		// & 4 Section of Attachement the Other section to copy END From HERE

		// & 5 Section of Attachement the Unknown section to copy Start From HERE
		
		// Starting field container
		$oOutput->AddHtml('<div class="form-group">');

		$sCollapseTogglerIconVisibleClassUnknown = 'glyphicon-menu-down_';
		$sCollapseTogglerIconHiddenClassUnknown = 'glyphicon-menu-down collapsed_';
		$sCollapseTogglerClassUnknown = 'form_linkedset_toggler_';
		$sCollapseTogglerIdUnknown = $sCollapseTogglerClassUnknown . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdUnknown = 'form_upload_wrapper_Unknown_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagUnknown = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClassUnknown .= ' collapsed';
		$sCollapseTogglerExpandedUnknown = 'false';
		$sCollapseTogglerIconClassUnknown = $sCollapseTogglerIconHiddenClassUnknown;
		$sCollapseJSInitStateUnknown = 'false';

		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountUnknownDoc = $this->oAttachmentsSetUnKnown->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagUnknown.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdUnknown . '" class="' . $sCollapseTogglerClassUnknown . '" data-toggle="collapse" href="#' . $sFieldWrapperIdUnknown . '" aria-expanded="' . $sCollapseTogglerExpandedUnknown . '" aria-controls="' . $sFieldWrapperIdUnknown . '">')
				->AddHtml(Dict::S('Portal:FieldLabel:TypeAttachmentUnknown'),true)
				->AddHtml(' (<span class="attachments-count">'.$iAttachmentsCountUnknownDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassUnknown . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdUnknown.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row">');
		$this->PrepareExistingFilesUnKnown($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');
		// & 5 Section of Attachement the Unknown section to copy END From HERE

		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$sNoAttachmentLabel = json_encode(Dict::S('Attachments:NoAttachment'));
		$sDeleteColumnDef = $bIsDeleteAllowed ? '{ targets: [4], orderable: false},' : '';
		$oOutput->AddJs(
			<<<JS
// Collapse handlers
// - Collapsing by default to optimize form space
// It would be better to be able to construct the widget as collapsed, but in this case, datatables thinks the container is very small and therefore renders the table as if it was in microbox.
$('#{$sFieldWrapperId}').collapse({toggle: {$sCollapseJSInitState}});
// - Change toggle icon class
$('#{$sFieldWrapperId}')
	.on('shown.bs.collapse', function(){
		// Creating the table if null (first expand). If we create it on start, it will be displayed as if it was in a micro screen due to the div being "display: none;"
		if(oTable_{$this->oField->GetGlobalId()} === undefined)
		{
			buildTable_{$this->oField->GetGlobalId()}();
 		}
	})
	.on('show.bs.collapse', function(){
		$('#{$sCollapseTogglerId} > span.glyphicon').removeClass('{$sCollapseTogglerIconHiddenClass}').addClass('{$sCollapseTogglerIconVisibleClass}');
	})
	.on('hide.bs.collapse', function(){
		$('#{$sCollapseTogglerId} > span.glyphicon').removeClass('{$sCollapseTogglerIconVisibleClass}').addClass('{$sCollapseTogglerIconHiddenClass}');
	});

var oTable_{$this->oField->GetGlobalId()};


// Build datatable
var buildTable_{$this->oField->GetGlobalId()} = function()
{
	oTable_{$this->oField->GetGlobalId()} = $("table#$sAttachmentTableId").DataTable( {
		"dom": "tp",
	    "order": [[3, "asc"]],
	    "columnDefs": [
	        $sDeleteColumnDef
	        { targets: '_all', orderable: true },
	    ],
	    "language": {
			"infoEmpty": $sNoAttachmentLabel,
			"zeroRecords": $sNoAttachmentLabel
		}
	} );
}
JS
		);

		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');

				
		// Removing upload input if in read only
		// TODO : Add max upload size when itop attachment has been refactored
		if (!$this->oField->GetReadOnly())
		{
			//$oOutput->AddHtml('<div class="upload_container">'.Dict::S('Attachments:AddAttachment').'<input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
			$oOutput->AddHtml('<div class="upload_container"><p style="background-color:DodgerBlue;color: white; font-size: 18px;font-family: "Arial Black", "Arial Bold", Gadget, sans-serif; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px;">'.Dict::S('Attachments:AddAttachment').'</p><br><img src="../../../images/screenshots/capture1_exemple.jpg" alt="telect all PDF files" width="260" height="125">&nbsp;<img src="../../../images/screenshots/arrow_for_screenshot.jpg" alt="arrow to next screen-shot" width="150" height="140">&nbsp;<img src="../../../images/screenshots/capture2_exemple.jpg" alt="select all PDF files" width="260" height="125"><br><br><br><input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
		}

		// Ending field container
		$oOutput->AddHtml('</div>');

		// JS for file upload
		$iMaxUploadInBytes = AttachmentPlugIn::GetMaxUploadSize();
		$sMaxUploadLabel = AttachmentPlugIn::GetMaxUpload();
		$sFileTooBigLabel = Dict::Format('Attachments:Error:FileTooLarge', $sMaxUploadLabel);
		$sFileTooBigLabelForJS = addslashes($sFileTooBigLabel);
		// Note : This is based on itop-attachement/main.itop-attachments.php
		$sAttachmentTableRowTemplate = json_encode(self::GetAttachmentTableRow(
			'{{iAttId}}',
			'{{sLineStyle}}',
			'{{sDocDownloadUrl}}',
		     true,
			'{{sAttachmentThumbUrl}}',
			'{{sFileName}}',
			'{{sAttachmentMeta}}',
			'{{sFileSize}}',
			'{{iFileSizeRaw}}',
			'{{sAttachmentDate}}',
			'{{sAttachmentTypeAttachment}}',
			'{{sAttachmentStatusComp}}',
			'{{iAttachmentDateRaw}}',
			$bIsDeleteAllowed
		));
		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$oOutput->AddJs(
			<<<JS
			var attachmentRowTemplate = $sAttachmentTableRowTemplate;
			function RemoveAttachment(sAttId)
			{
				$('#attachment_' + sAttId).attr('name', 'removed_attachments[]');
				$('#display_attachment_' + sAttId).hide();
				DecreaseAttachementsCount();
			}
			function IncreaseAttachementsCount()
			{
				UpdateAttachmentsCount(1);
			}
			function DecreaseAttachementsCount()
			{
				UpdateAttachmentsCount(-1);
			}
			function UpdateAttachmentsCount(iIncrement)
			{
				var countContainer = $("a#$sCollapseTogglerId>span.attachments-count"),
				iCountCurrentValue = parseInt(countContainer.text());
				countContainer.text(iCountCurrentValue+iIncrement);
			}

			$('#{$this->oField->GetGlobalId()}').fileupload({
				url: '{$this->oField->GetUploadEndpoint()}',
				formData: { operation: 'add', temp_id: '{$sTempId}', object_class: '{$sObjectClass}', 'field_name': '{$this->oField->GetId()}' },
				dataType: 'json',
				pasteZone: null, // Don't accept files via Chrome's copy/paste
				done: function (e, data) {
					if((data.result.error !== undefined) && window.console)
					{
						console.log(data.result.error);
					}
					else
					{
						var \$oAttachmentTBody = $(this).closest('.fileupload_field_content').find('.attachments_container table#$sAttachmentTableId>tbody'),
							iAttId = data.result.att_id,
							sDownloadLink = '{$this->oField->GetDownloadEndpoint()}'.replace(/-sAttachmentId-/, iAttId),
							sAttachmentMeta = '<input id="attachment_'+iAttId+'" type="hidden" name="attachments[]" value="'+iAttId+'"/>';

						// hide "no attachment" line if present
						\$oAttachmentFirstRow = \$oAttachmentTBody.find("tr:first-child");
						\$oAttachmentFirstRow.find("td[colspan]").closest("tr").hide();
						
						// update attachments count
						IncreaseAttachementsCount();
						 
						var replaces = [
							{search: "{{iAttId}}", replace:iAttId },
							{search: "{{lineStyle}}", replace:'' },
							{search: "{{sDocDownloadUrl}}", replace:sDownloadLink },
							{search: "{{sAttachmentThumbUrl}}", replace:data.result.icon },
							{search: "{{sFileName}}", replace: data.result.msg },
							{search: "{{sAttachmentMeta}}", replace:sAttachmentMeta },
							{search: "{{sFileSize}}", replace:data.result.file_size },
							{search: "{{sAttachmentDate}}", replace:data.result.creation_date },
							{search: "{{sAttachmentTypeAttachment}}", replace:data.result.type_attachment },
							{search: "{{sAttachmentStatusComp}}", replace:data.result.status_comp },
						];
						var sAttachmentRow = attachmentRowTemplate   ;
						$.each(replaces, function(indexInArray, value ) {
							var re = new RegExp(value.search, 'gi');
							sAttachmentRow = sAttachmentRow.replace(re, value.replace);
						});
						
						var oElem = $(sAttachmentRow);
						if(!data.result.preview){
							oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-content');
							oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-html-enabled');
						}
						\$oAttachmentTBody.append(oElem);
						// Remove button handler
						$('#display_attachment_'+data.result.att_id+' :button').on('click', function(oEvent){
							oEvent.preventDefault();
							RemoveAttachment(data.result.att_id);
						});
					}
				},
			    send: function(e, data){
			        // Don't send attachment if size is greater than PHP post_max_size, otherwise it will break the request and all its parameters (\$_REQUEST, \$_POST, ...)
			        // Note: We loop on the files as the data structures is an array but in this case, we only upload 1 file at a time.
			        var iTotalSizeInBytes = 0;
			        for(var i = 0; i < data.files.length; i++)
			        {
			            iTotalSizeInBytes += data.files[i].size;
			        }
			        
			        if(iTotalSizeInBytes > $iMaxUploadInBytes)
			        {
			            alert('$sFileTooBigLabelForJS');
				        return false;
				    }
			    },
				start: function() {
					// Scrolling to dropzone so the user can see that attachments are uploaded
					$(this)[0].scrollIntoView();
					// Showing loader
					$(this).closest('.upload_container').find('.loader').css('visibility', 'visible');
				},
				stop: function() {
					// Hiding the loader
					$(this).closest('.upload_container').find('.loader').css('visibility', 'hidden');
					// Adding this field to the touched fields of the field set so the cancel event is called if necessary
					$(this).closest(".field_set").trigger("field_change", {
						id: '{$this->oField->GetGlobalId()}',
						name: '{$this->oField->GetId()}'
					});
				}
			});

			// Remove button handler
			$('.attachments_container table#$sAttachmentTableId>tbody>tr>td :button').on('click', function(oEvent){
				oEvent.preventDefault();
				RemoveAttachment($(this).closest('.attachment').find(':input[name="attachments[]"]').val());
			});

			// Handles a drag / drop overlay
			if($('#drag_overlay').length === 0)
			{
				$('body').append( $('<div id="drag_overlay" class="global_overlay"><div class="overlay_content"><div class="content_uploader"><div class="icon glyphicon glyphicon-cloud-upload"></div><div class="message">{$sUploadDropZoneLabel}</div></div></div></div>') );
			}

			// Handles highlighting of the drop zone
			// Note : This is inspired by itop-attachments/main.attachments.php
			$(document).on('dragover', function(oEvent){
				var bFiles = false;
				if (oEvent.dataTransfer && oEvent.dataTransfer.types)
				{
					for (var i = 0; i < oEvent.dataTransfer.types.length; i++)
					{
						if (oEvent.dataTransfer.types[i] == "application/x-moz-nativeimage")
						{
							bFiles = false; // mozilla contains "Files" in the types list when dragging images inside the page, but it also contains "application/x-moz-nativeimage" before
							break;
						}

						if (oEvent.dataTransfer.types[i] == "Files")
						{
							bFiles = true;
							break;
						}
					}
				}

				if (!bFiles) return; // Not dragging files

				var oDropZone = $('#drag_overlay');
				var oTimeout = window.dropZoneTimeout;
				// This is to detect when there is no drag over because there is no "drag out" event
				if (!oTimeout) {
					oDropZone.removeClass('drag_out').addClass('drag_in');
				} else {
					clearTimeout(oTimeout);
				}
				window.dropZoneTimeout = setTimeout(function () {
					window.dropZoneTimeout = null;
					oDropZone.removeClass('drag_in').addClass('drag_out');
				}, 200);
			});
JS
		);

		return $oOutput;
	}

	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFiles(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSet->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableId" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSet->Fetch())
			{
				$iAttId = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttId.'" type="hidden" name="attachments[]" value="'.$iAttId.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttId, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentTableRow(
					$iAttId,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$iAttachmentDateRaw,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}
//& this function show the items of of the tables Achat of attachment 
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesAchat(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetAchat->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableIdAchat" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetAchat->Fetch())
			{
				$iAttId = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttId.'" type="hidden" name="attachments[]" value="'.$iAttId.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttId, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentTableRow(
					$iAttId,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$iAttachmentDateRaw,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}

//& this function show the items of of the tables 3 of attachment banque
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesBanque(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetAchat->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableIdBanque" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetBanque->Fetch())
			{
				$iAttId = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttId.'" type="hidden" name="attachments[]" value="'.$iAttId.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttId, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentTableRow(
					$iAttId,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$iAttachmentDateRaw,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}

	//& this function show the items of of the tables 4 of attachment other
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesOther(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetAchat->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableIdOther" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetOther->Fetch())
			{
				$iAttId = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttId.'" type="hidden" name="attachments[]" value="'.$iAttId.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttId, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentTableRow(
					$iAttId,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$iAttachmentDateRaw,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}


	//& this function show the items of of the tables 5 of attachment Unknown
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesUnKnown(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetUnKnown->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableIdUnKnown" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetUnKnown->Fetch())
			{
				$iAttId = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttId.'" type="hidden" name="attachments[]" value="'.$iAttId.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttId, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentTableRow(
					$iAttId,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$iAttachmentDateRaw,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}

	/**
	 * @param bool $bIsDeleteAllowed
	 *
	 * @return string
	 * @since 2.7.0
	 */
	protected static function GetAttachmentTableHeader($bIsDeleteAllowed)
	{
		$sTitleThumbnail = Dict::S('Attachments:File:Thumbnail');
		$sTitleFileName = Dict::S('Attachments:File:Name');
		$sTitleFileSize = Dict::S('Attachments:File:Size');
		$sTitleFileDate = Dict::S('Attachments:File:Date');
		//^ customization cfac for disable attachement
		$sFileTypeAttachment = Dict::S('Attachments:File:type_attachment');
		$sTitleFileStatusComp = Dict::S('Attachments:File:status');
		//^ end customization cfac

		// Optional column
		//^ customization cfac for disable attachement
		$sDeleteHeaderAsHtml = ($bIsDeleteAllowed) ? '<th role="delete" data-priority="1" style="width:10%"></th>' : '';
		//^ end customization cfac

		return <<<HTML
	<thead>
		<th role="icon" style="width:10%">$sTitleThumbnail</th>
		<th role="filename" data-priority="1" style="width:25%">$sTitleFileName</th>
		<th role="formatted-size" style="width:10%">$sTitleFileSize</th>
		<th role="upload-date">$sTitleFileDate</th>
		<th role="type-file" style="width:18%">$sFileTypeAttachment</th>
		<th role="status-file">$sTitleFileStatusComp</th>
		<!-- ^ customization cfac for disable attachement -->
			$sDeleteHeaderAsHtml
		<!--^ end customization cfac -->
	</thead>
HTML;
	}

	/**
	 * @param int $iAttId
	 * @param string $sLineStyle
	 * @param string $sDocDownloadUrl
	 * @param bool $bHasPreview replace string $sIconClass since 3.0.1
	 * @param string $sAttachmentThumbUrl
	 * @param string $sFileName
	 * @param string $sAttachmentMeta
	 * @param string $sFileSize
	 * @param integer $iFileSizeRaw
	 * @param string $sAttachmentDate
	 * @param integer $iAttachmentDateRaw
	 * @param string $sAttachmentTypeAttachment
	 * @param boolean $sAttachmentStatusComp
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @return string
	 * @since 2.7.0
	 */
	protected static function GetAttachmentTableRow(
		$iAttId, $sLineStyle, $sDocDownloadUrl, $bHasPreview, $sAttachmentThumbUrl, $sFileName, $sAttachmentMeta, $sFileSize,
		$iFileSizeRaw, $sAttachmentDate, $iAttachmentDateRaw, $sAttachmentTypeAttachment, $sAttachmentStatusComp, $bIsDeleteAllowed
	) {
		$sDeleteCell = '';
		if ($bIsDeleteAllowed && !$sAttachmentStatusComp)
		{
			$sDeleteBtnLabel = Dict::S('Portal:Button:Delete');
			$sDeleteCell = '<td role="delete"><input id="btn_remove_'.$iAttId.'" type="button" class="btn btn-xs btn-primary" value="'.$sDeleteBtnLabel.'"></td>';
		}else {
			$sDeleteBtnLabel = Dict::S('Portal:Button:Delete');
			$sDeleteCell = '<td role="delete"><input id="btn_remove_'.$iAttId.'" type="button" class="btn btn-xs btn-primary" value="'.$sDeleteBtnLabel.'" disabled></td>';
		}

		$sHtml =  "<tr id=\"display_attachment_{$iAttId}\" class=\"attachment\" $sLineStyle>";

		if($bHasPreview) {
			$sHtml .= "<td role=\"icon\"><a href=\"$sDocDownloadUrl\" target=\"_blank\" data-tooltip-content=\"<img class='attachment-tooltip' src='{$sDocDownloadUrl}'>\" data-tooltip-html-enabled=true><img src=\"$sAttachmentThumbUrl\" ></a></td>";
		} else {
			$sHtml .= "<td role=\"icon\"><a href=\"$sDocDownloadUrl\" target=\"_blank\"><img src=\"$sAttachmentThumbUrl\" ></a></td>";
		}
		// ^ customization cfac for disable attachement
		
		if ($sAttachmentStatusComp==true)
		{
			$sStatusBtnLabelValid = Dict::S('Portal:Button:ValidStatut');
			$sStatusCompCell = '<td role="status-comp" style="text-align: center; vertical-align: middle;"><input id="status_id_portal_user" style="font-size: 11px; font-weight: bold; background-color: #357a38; width: 120px; height: 28px; border: none; color: white; padding: 8px 13px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; cursor: pointer; border-radius: 25% 10%;" type="button" class="btn btn-xs btn-primary" value="'.$sStatusBtnLabelValid.'" disabled></td>';
		} else {
			$sStatusBtnLabelNonValid = Dict::S('Portal:Button:NonValidStatut');
			$sStatusCompCell = '<td role="status-comp" style="text-align: center; vertical-align: middle;"><input id="status_id_portal_user" style="font-size: 11px; font-weight: bold; background-color: #660000; width: 120px; height: 28px; border: none; color: white; padding: 8px 13px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; cursor: pointer; border-radius: 25% 10%;" type="button" class="btn btn-xs btn-primary" value="'.$sStatusBtnLabelNonValid.'" disabled></td>';
		}
		//! function to show the type by enum value TO DO
		
			if($sAttachmentTypeAttachment == 'attachment_achat'){

				$sTypeLabelAttach = Dict::S('Portal:Button:TypeAchat');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_achat" class="list-group-item list-group-item-action list-group-item-info" style="font-size: 12px; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeLabelAttach.'</li></td>';

			} else if($sAttachmentTypeAttachment == 'attachment_vente'){

				$sTypeLabelAttach = Dict::S('Portal:Button:TypeVente');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_vente" class="list-group-item list-group-item-action list-group-item-success" style="font-size: 12px; font-weight: bold; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeLabelAttach.'</li></td>';	
			
			} else if($sAttachmentTypeAttachment == 'attachment_banque'){

				$sTypeLabelAttach = Dict::S('Portal:Button:TypeBanque');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_banque" class="list-group-item list-group-item-action list-group-item-warning" style="font-size: 12px; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeLabelAttach.'</li></td>';

			} else if ($sAttachmentTypeAttachment == 'attachment_other'){

				$sTypeLabelAttach = Dict::S('Portal:Button:TypeOther');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_other" class="list-group-item list-group-item-action list-group-item-danger" style="font-size: 12px; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeLabelAttach.'</li></td>';

			} else {

			$sTypeUndefinedLabelAttachNot = Dict::S('Portal:Button:TypeUndefined');
			$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_undefined" class="list-group-item list-group-item-action list-group-item-dark" style="font-size: 12px; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeUndefinedLabelAttachNot.'</li></td>';

			}

		//var_dump($sAttachmentTypeAttachment);
		// ^ customization cfac for disable attachement

		$sHtml .=  <<<HTML
	 <td role="filename"><a href="$sDocDownloadUrl" target="_blank">$sFileName</a>$sAttachmentMeta</td>
	  <td role="formatted-size" data-order="$iFileSizeRaw">$sFileSize</td>
	  <td role="upload-date" data-order="$iAttachmentDateRaw">$sAttachmentDate</td>
	  <!-- // ^ customization cfac for disable attachement -->
	  $sTypeAttachCell
	  $sStatusCompCell
	  <!-- // ^ customization cfac for disable attachement -->
	  $sDeleteCell
	</tr>
HTML;
		return $sHtml;
	}

	/**
	 * @return string
	 */
	protected function GetAttachmentsTableId()
	{
		$sFormFieldId = $this->oField->GetGlobalId();
		$sAttachmentTableId = 'attachments-'.$sFormFieldId;

		return $sAttachmentTableId;
	}
}
