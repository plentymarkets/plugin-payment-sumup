# User Guide für das Plugin SumUp

Mit dem Plugin SumUp verbinden Sie das mobile EC-Kartenlesegerät SumUp Air von SumUp mit der Kassensoftware plentymarkets POS.

Um das SumUp Air mit plentymarkets POS nutzen zu können, benötigen Sie:

* SumUp Air EC-Kartenlesegerät
* SumUp-Zugangsdaten<br />
__**Hinweis:**__ Die SumUp-Zugangsdaten geben Sie bei der ersten Kartenzahlung mit dem SumUp Air ein. Stellen Sie diese Daten also ggf. Kassenbenutzern zur Verfügung.
* plentymarkets POS Kasse
* Mobiles Android-Gerät mit
    * installierter plentymarkets App
    * aktiviertem Bluetooth
    * aktiverter Ortung (Standortbestimmung)

Weitere Informationen zur Einrichtung und den Hardware-Anforderungen von plentymarkets POS finden Sie im [plentymarkets Handbuch](https://knowledge.plentymarkets.com/omni-channel/pos/pos-einrichten).

<div class="alert alert-warning" role="alert">
Wenn Sie eine SumUp-Kartenzahlung in der plentymarkets App stornieren, können Sie wählen, ob Sie den stornierten Betrag bar auszahlen oder auf das Konto zurückbuchen möchten. Wenn Sie die Rückbuchung über SumUp wählen, müssen Sie diese Rückbuchung auch manuell im SumUp-Backend vornehmen, da der Betrag sonst nicht zurückgebucht wird.
</div>

<div class="container-toc"></div>

## Zahlungsart für POS aktivieren

Nachdem Sie das Plugin bereitgestellt haben, aktivieren Sie die Zahlungsart im plentymarkets Backend, damit über das SumUp-Gerät eingehende POS-Aufträge korrekt abgewickelt werden.

##### Zahlungsart SumUp für die Kasse aktivieren:

1. Öffnen Sie das Menü **Einstellungen » Mandant (Shop) » Standard » POS » Tab: Zahlungsart**.
2. Wählen Sie für die Option **Anbindung** die Einstellung **SumUp**. +
**__Tipp:__** Wenn die Option **SumUp** nicht verfügbar ist, wurde das Plugin noch nicht bereitgestellt.
3. **Speichern** Sie die Einstellungen.<br />
→ Die Zahlungsart SumUp ist aktiv.

## SumUp mit plentymarkets POS verbinden

Die Verbindung zwischen SumUp und plentymarkets POS stellen Sie her, wenn Sie zum ersten Mal eine Kartenzahlung über plentymarkets POS entgegennehmen. Sie benötigen Ihren SumUp-Benutzernamen und Ihr SumUp-Passwort, um die Verbindung herzustellen.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
