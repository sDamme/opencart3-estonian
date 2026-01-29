<?php
// Text
$_['text_title']				= 'Klarna Arve - Maksa 14 päeva jooksul';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Arve vajab täiendavat teavet enne, kui nad saavad teie tellimust töödelda.';
$_['text_male']					= 'Mees';
$_['text_female']				= 'Naine';
$_['text_year']					= 'Aasta';
$_['text_month']				= 'Kuu';
$_['text_day']					= 'Päev';
$_['text_comment']				= 'Klarna arve ID: %s. ' . "\n" . '%s/%s: %.4f';
$_['text_trems_description']    = 'Olen nõus, et Klarnale edastatakse arveostu teostamiseks ning isiku- ja krediidikontrolliks vajalikud andmed. Oma <a href="https://online.klarna.com/consent_de.yaws" target="_blank">nõusoleku</a> võin ma igal ajal tulevikus kehtetuks tunnistada.';

// Entry
$_['entry_gender']				= 'Sugu';
$_['entry_pno']					= 'Isikukood';
$_['entry_dob']					= 'Sünnikuupäev';
$_['entry_phone_no']			= 'Telefoninumber';
$_['entry_street']				= 'Tänav';
$_['entry_house_no']			= 'Maja number';
$_['entry_house_ext']			= 'Maja täiend';
$_['entry_company']				= 'Ettevõtte registrikood';

// Help
$_['help_pno']					= 'Palun sisestage siia oma isikukood.';
$_['help_phone_no']				= 'Palun sisestage oma telefoninumber.';
$_['help_street']				= 'Pange tähele, et tarne on Klarnaga maksmisel võimalik ainult registreeritud aadressile.';
$_['help_house_no']				= 'Palun sisestage oma maja number.';
$_['help_house_ext']			= 'Palun sisestage siia oma maja täiend. Nt A, B, C, Punane, Sinine jne.';
$_['help_company']				= 'Palun sisestage oma ettevõtte registrikood';

// Error
$_['error_deu_terms']			= 'Peate nõustuma Klarna privaatsuspoliitikaga (andmekaitse)';
$_['error_address_match']		= 'Arveldus- ja saatmisaadress peavad ühtima, kui soovite kasutada Klarna Arvet';
$_['error_network']				= 'Klarnaga ühendumisel tekkis viga. Palun proovige hiljem uuesti.';