{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Event Edit</h2>	  
	    	{if isset($events_add)}
		  	<div class="success" id="msg-flash">
		  		{$events_add}
		  	</div>
		  	<br/>
		  	{/if}  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>
					<p>
					<label for="title">Events category:</label>
					<select id='selCat' name='selCat' > 
					{$Push_SelecVal}
					</select>
					</p>
					
					<p>
						<label for="title">Name:</label>
						<input type="text" id="title" name="title" value="{$smarty.post.title|default:$events_rs.name}" class="required">
					</p>

<p>
						<label for="title">Price:</label>
                                                
						<input type="text"    id="price" name="price" value="{$smarty.post.price|default:$events_rs.price}" >
					</p>

					<p>
						<label for="txt_description">Description:</label>
						<textarea id="content" name="content">{$smarty.post.content|default:$events_rs.description}</textarea>
					</p>	
					<p>
						<label for="event_date">Date/Time:</label>
						<input type="text" id="event_date" name="event_date" value="{$smarty.post.event_date|default:$events_rs.event_date}" class="required">
					</p>
					<p>
						<label for="image">Is Active:</label>
						<input type="checkbox" id="is_active" {if $events_rs.is_active == 1}checked="checked"{/if} name="is_active">
					</p>				
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="events.php">Back to Events list</a>
					</p>
				</fieldset>
			</form>
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="../css/jquery.datetimepicker.css" rel="stylesheet">

	<link rel="stylesheet" href="../css/cmxform.css">
	<script src="../js/jquery-validation/lib/jquery.js"></script>
	<script src="../js/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="../js/jquery-validation/dist/additional-methods.js"></script>
	<script src="../js/tiny_mce/tiny_mce.js"></script>
	<script src="../js/jquery.datetimepicker.js"></script>
	{literal}
<script>
	tinyMCE.init({
		mode: "textareas",
		theme : "advanced",
		width:550,
		height:400,
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks,jbimages",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,image,jbimages,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],
		// update validation status on change
		onchange_callback: function(editor) {
			tinyMCE.triggerSave();
			$("#" + editor.id).valid();
		}
	});
	$(function() {


		$('#selCat').change(function(){
		var catVal =$(this).val();
		if(catVal==1)
		{
		//$('#price').attr("readonly",false);
		//$('#price').val("");
		}
		else{

		//$('#price').val("0");
		//$('#price').attr("readonly",true);

		}

		});


		$('#event_date').datetimepicker({			
			lang:'en',
			format:'Y-m-d H:i:s'		
		});
		var validator = $("#myform").submit(function() {
			// update underlying textarea before submit validation
			tinyMCE.triggerSave();
		}).validate({
			ignore: "",
			rules: {
				title: "required",
				content: "required",
                                price:"required",
				event_date: "required"
			},
			errorPlacement: function(label, element) {
				// position error label after generated textarea
				if (element.is("textarea")) {
					label.insertAfter(element.next());
				} else {
					label.insertAfter(element)
				}
			}
		});
		validator.focusInvalid = function() {
			// put focus on tinymce on submit validation
			if (this.settings.focusInvalid) {
				try {
					var toFocus = $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []);
					if (toFocus.is("textarea")) {
						tinyMCE.get(toFocus.attr("id")).focus();
					} else {
						toFocus.filter(":visible").focus();
					}
				} catch (e) {
					// ignore IE throwing errors when focusing hidden elements
				}
			}
		}
	})
	</script>
{/literal}
{include file="admin/footer.tpl"}
