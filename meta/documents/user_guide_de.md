# User Guide für das Plugin SumUp

Mit dem Plugin SumUp verbindest du das mobile EC-Kartenlesegerät SumUp Air von SumUp mit der Kassensoftware POS für PlentyONE.

<div class="alert alert-success" role="alert">
    PlentyONE POS-Kunden profitieren von exklusiven SumUp-Konditionen. Besuche die <a href="https://sumup.de/plentypos/" target="_blank">SumUp-Website</a>, um mehr zu erfahren.
</div>

Um SumUp mit PlentyONE POS nutzen zu können, benötigst du:

* SumUp Air oder SumUp Solo EC-Kartenlesegerät
* SumUp-Zugangsdaten <br />
    *_Hinweis:_* Die SumUp-Zugangsdaten gibst du in den POS Einstellungen in der POS App für PlentyONE ein. Alternativ können die Zugangsdaten auch bei der ersten Kartenzahlung mit dem SumUp-Gerät eingegeben werden. Stelle diese Daten also ggf. Kassenbenutzern zur Verfügung.
* POS für PlentyONE
* Mobiles Android-Gerät mit
    * installierter PlentyONE POS App
    * aktiviertem Bluetooth
    * aktivierte Ortung (Standortbestimmung)


<div class="alert alert-warning" role="alert">
    Dieses Plugin unterstützt ausschließlich die oben aufgeführten EC-Kartenlesegeräte SumUp Air und SumUp Solo. Eine Anbindung des SumUp 3G-Terminals steht aktuell nicht zur Verfügung.
</div>

Weitere Informationen zur Einrichtung und den Hardware-Anforderungen von PlentyONE POS findest du im [PlentyONE Handbuch](https://knowledge.plentymarkets.com/de-de/manual/main/pos/pos-einrichten.html#10).

<div class="alert alert-warning" role="alert">
    Wenn du eine SumUp-Kartenzahlung in der POS App stornierst, kannst du wählen, ob du den stornierten Betrag bar auszahlst oder auf das Konto zurückbuchen möchtest. Wenn du die Rückbuchung über SumUp wählst, musst du diese Rückbuchung auch manuell im SumUp-Backend vornehmen, da der Betrag sonst nicht zurückgebucht wird.
</div>

<div class="container-toc"></div>

## Zahlungsart für POS aktivieren

Nachdem du das Plugin bereitgestellt hast, aktiviere die Zahlungsart im PlentyONE Backend, damit über das SumUp-Gerät eingehende POS-Aufträge korrekt abgewickelt werden.

##### Zahlungsart SumUp für die Kasse aktivieren:

1. Öffne das Menü **Einstellungen » Mandant (Shop) » Standard » POS » Tab: Zahlungsart**.
2. Wähle für die Option **Anbindung** die Einstellung **SumUp**. <br />
    *_Tipp:_* Wenn die Option **SumUp** nicht verfügbar ist, wurde das Plugin noch nicht bereitgestellt.
3. **Speichere** die Einstellungen. <br />
→ Die Zahlungsart SumUp ist aktiv.

## SumUp mit POS App verbinden

Die Verbindung zwischen SumUp und deiner POS für PlentyONE stellst du her, wenn du zum ersten Mal eine Kartenzahlung über die POS App entgegennimmst. Du benötigst deinen SumUp-Benutzernamen und dein SumUp-Passwort, um die Verbindung herzustellen.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen findest du in der [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
