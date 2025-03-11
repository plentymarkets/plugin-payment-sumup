# User guide for the SumUp plugin

The SumUp plugin allows you to connect the mobile card reading device SumUp Air with the POS software for PlentyONE.

<div class="alert alert-success" role="alert">
    SumUp offers special terms and conditions to PlentyONE POS customers. Visit the <a href="https://sumup.de/plentypos/" target="_blank">SumUp website</a> (German only) to find out more.
</div>

To use the SumUp Air with POS, you need the following:

* SumUp Air or SumUp Solo card reading device
* SumUp login details<br />
*_Note:_* You enter the SumUp login details in the POS settings in the PLentyONE POS app. Alternatively, the login details can also be entered during the first card payment with the SumUp device. As such, you need to provide POS users with these login details if you do not operate the POS yourself.
* PlentyONE POS
* Mobile Android device with
    * POS app installed
    * activated Bluetooth
    * activated access to location (geolocation positioning)

<div class="alert alert-warning" role="alert">
    This plugin only supports the SumUp card reading devices mentioned above (SumUp Air or SumUp Solo). Using the SumpUp 3G card reading device is currently not possible.
</div>

Check the [PlentyONE manual](https://knowledge.plentymarkets.com/en-gb/manual/main/pos/integrating-plentymarkets-pos.html#10) for further information on hardware requirements and setting up POS.

<div class="alert alert-warning" role="alert">
    When you cancel a SumUp card payment in the POS app, you can select if the cancelled amount is returned to the customer in cash or booked back to the card account. If you select to book the amount back to the card account via the SumUp device, you also need to cancel the payment in the SumUp back end. Otherwise, the amount will not be booked back to the account.
</div>

<div class="container-toc"></div>

## Activating the payment method for a POS

Once you have provisioned the payment plugin, activate the payment method in the PlentyONE back end to make sure that POS orders generated using the SumUp device are processed correctly.

##### Activating the payment method SumUp for a POS:

1. Go to **Setup » POS » Client (store) » POS » Tab: Payment method**.
2. For the option **Connectivity**, select the setting **SumUp**. <br />
    *_Tip:_* If the option **SumUp** is not shown, you need to provision the plugin to continue.
3. **Save** the settings. <br />
→ The payment method SumUp is active.

## Connecting SumUp with POS app

The connection between SumUp and POS is established when you process the first card payment using the POS app for PlentyONE. You need your SumUp user name and SumUp password to establish the connection.

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE. – find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-payment-sumup/blob/master/LICENSE.md).
