<h4 class="customer-profile-group-heading"><?php echo _l('contracts_tickets_tab'); ?></h4>
<div class="clearfix"></div>
<?php
if(isset($client)){
 echo AdminTicketsTableStructure('table-tickets-single');
} ?>
