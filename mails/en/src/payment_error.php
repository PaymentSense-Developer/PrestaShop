<?php include ('header.php'); ?>

<tr>
	<td align="center">
		<span class="title"><?php echo t('Hi {firstname} {lastname},'); ?></span>
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<td class="box">
		<p>
			<?php echo t('Your order with the reference {order_name} - Payment processing error'); ?>
		</p>
		<span>
			<?php echo t('There is a problem with your payment for <strong><span>{shop_name}</span></strong> order with the reference <strong><span>{order_name}</span></strong>. Please contact us at your earliest convenience.'); ?><br/>
			<strong><span><?php echo t('We cannot ship your order until we receive your payment.'); ?></span></strong>
		</span>
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>
		<span>
			<?php echo t('You can review your order and download your invoice from the <a href="{history_url}">"Order history"</a> section of your customer account by clicking <a href="{my_account_url}">"My account"</a> on our shop.'); ?>
		</span>
	</td>
</tr>
<tr>
	<td>
		<span>
			<?php echo t('If you have a guest account, you can follow your order via the <a href="{guest_tracking_url}">"Guest Tracking"</a> section on our shop.'); ?>
		</span>
	</td>
</tr>

<?php include ('footer.php'); ?>