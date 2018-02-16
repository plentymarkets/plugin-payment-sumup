# User guide for the SumUp plugin

The SumUp plugin allows you to connect the mobile card reading device SumUp Air with the POS software plentymarkets POS.

<div class="alert alert-success" role="alert">
SumUp offers special terms and conditions to plentymarkets POS customers. Visit the [SumUp website](https://sumup.de/plentypos/) (in German) to find out more.
</div>

To use the SumUp Air with plentymarkets POS, you need the following:

* SumUp Air card reading device
* SumUp login details<br />
__**Note:**__ The SumUp login details are entered when you process the first card payment using the SumUp device. As such, you need to provide POS users with these login details if you do not operate the POS yourself.
* plentymarkets POS
* Mobile Android device with
    * plentymarkets app installed
    * activated Bluetooth
    * activated access to location (geolocation positioning)

Check the [plentymarkets manual](https://knowledge.plentymarkets.com/en/omni-channel/pos/integrating-plentymarkets-pos) for further information on hardware requirements and setting up plentymarkets POS.

<div class="alert alert-warning" role="alert">
When you cancel a SumUp card payment in the plentymarkets app, you can select if the cancelled amount is returned to the customer in cash or booked back to the card account. If you select to book the amount back to the card account via the SumUp device, you also need to cancel the payment in the SumUp back end. Otherwise, the amount will not be booked back to the account.
</div>

<div class="container-toc"></div>

## Activating the payment method for a POS

Once you have provisioned the payment plugin, activate the payment method in the plentymarkets back end to make sure that POS orders generated using the SumUp device are processed correctly.

##### Activating the payment method SumUp for a POS:

1. Go to **Settings » Client (store) » Standard » POS » POS » Tab: Payment method**.
2. For the option **Connectivity**, select the setting **SumUp**. <br />
**__Tipp:__** If the option **SumUp** is not shown, you need to provision the plugin to continue.
3. **Save** the settings.<br />
→ The payment method SumUp is active.

## Connecting SumUp with plentymarkets POS

The connection between SumUp and plentymarkets POS is established when you process the first card payment using plentymarkets POS. You need your SumUp user name and SumUp password to establish the connection.

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE. – find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
