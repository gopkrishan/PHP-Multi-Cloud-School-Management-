<div class="w3-center w3-row">
    <div class="w3-col l9">
<b class="w3-xlarge w3-text-theme">Add Event</b><br>

<?php

echo form_open_multipart('webfunction/add_event/'.$this->uri->segment(3));

?>
<span class="w3-text-red"><?php
echo validation_errors(); ?>
</span>
<?php
if(isset($_SESSION['action_status_report']))
{

    echo $_SESSION['action_status_report'];

}
?>
<br>
<span class="w3-label">Event Title:</span><br>
<input type="text" class="w3-border-blue-grey w3-padding" style="width:58%;" name="title" value="<?php echo set_value('title'); ?>" placeholder="Event Title e.g End of the year party"></input>
<br>
<br>
<span class="w3-label">Event Time</span><br>
<input type="text" class="w3-border-blue-grey w3-padding" style="width:58%;" name="time" value="<?php echo set_value('time'); ?>" placeholder="Event Time e.g 2 December 2019"></input>
<br>

<br>
<span class="w3-label">Duration and Time</span><br>
<input type="text" class="w3-border-blue-grey w3-padding" style="width:58%;" name="duration" value="<?php echo set_value('duration'); ?>" placeholder="Duration e.g 2:00AM -4:00PM"></input>
<br>

<br>
<span class="w3-label">Event Location</span><br>
<input type="text" class="w3-border-blue-grey w3-padding" style="width:58%;" name="location" value="<?php echo set_value('location'); ?>" placeholder="Location e.g School Compound "></input>
<br>
<input type="submit" class="w3-button w3-padding w3-hover-white w3-round-large w3-border w3-border-blue w3-hover-text-blue w3-blue w3-margin" value="Publish Event" name="submit"></input><br>


</div>


