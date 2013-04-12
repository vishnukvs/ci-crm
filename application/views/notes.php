<? $this->load->view('include/header');?>
<? $this->load->view('include/admin_navbar');?>
<div class="wrappper">
  <div class="row">
    <div class="span12">
      <form class="form-horizontal myform"action="#"method="post">
        <fieldset>
          <h3>Create Notes</h3>
          <div class="control-group">
            <label class="control-label" for="clientname">Client Name</label>
            <div class="controls">
              <input type="text"class="input-medium"name="clientName">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="Event">Event</label>
            <div class="controls">
              <input type="text"class="input-medium"name="event">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"for="Venue">Venue</label>
            <div class="controls">
              <input type="text"class="input-medium">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"for="typeofContact">Type of Contact</label>
            <div class="controls">
             <select class="span2">
              <option>Phone</option>
              <option>Fax</option>
              <option>Email</option>
              <option>Meeting</option>
            </select>
          </div>
        </div>
        <div class="control-group">
         <div class="controls">
          <textarea id="elm1"rows="10"cols="55"class="tinymce"style="width:80%;">
          </textarea>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn btn-primary"><i class="icon-pencil icon-white"></i>  Add Notes</button>
       </div>
     </div>
   </fieldset>
 </form>
</div>
</div>
</div><!--/end of wrapper-->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?=base_url('js/bootstrap.min.js');?>"></script>
<script src="<?=base_url('js/jquery.tinymce.js');?>"></script>
<script src="<?=base_url('js/jquery.tinymce.js');?>"></script>
<script type="text/javascript">
$().ready(function() {
  $('textarea.tinymce').tinymce({
      // Location of TinyMCE script
      script_url : './js/tiny_mce.js',

      // General options
      theme : "advanced",
      plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

      // Theme options
      theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
      theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
      theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
      theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
      theme_advanced_toolbar_location : "top",
      theme_advanced_toolbar_align : "left",
      theme_advanced_statusbar_location : "bottom",
      theme_advanced_resizing : true,

      // Example content CSS (should be your site CSS)
      content_css : "css/content.css",

      // Drop lists for link/image/media/template dialogs
      template_external_list_url : "lists/template_list.js",
      external_link_list_url : "lists/link_list.js",
      external_image_list_url : "lists/image_list.js",
      media_external_list_url : "lists/media_list.js",
    });
});
</script>