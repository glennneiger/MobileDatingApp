<?php $this->load->view('default_header'); ?>
<div id="slide_content">
  <div class="bcontent">
    <div style="float:left; width:100%; height:10px;">&nbsp;</div>
    <div style="float:left; width:100%; font-size:18px;"><?php echo $pg->title; ?></div>
    <div style="float:left; width:100%; height:10px;">&nbsp;</div>
    <div style="float:left; width:100%;"><?php echo $pg->body; ?></div>
  </div>
</div>
<?php $this->load->view('default_footer'); ?>