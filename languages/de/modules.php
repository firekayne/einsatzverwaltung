<?php

// BACKEND MODULE
$GLOBALS['TL_LANG']['MOD']['feuerwehr'] = array('Feuerwehr', '');
$GLOBALS['TL_LANG']['MOD']['missions'] = array('Einsatzverwaltung', 'Einsätze verwalten');
$GLOBALS['TL_LANG']['tl_module']['jumpTo_legend'] = 'Weiterleitungseinstellungen';

$GLOBALS['TL_LANG']['tl_missions']['new'] = array('Neuer Einsatz', 'Einen neuen Einsatz anlegen');
$GLOBALS['TL_LANG']['tl_missions']['edit'] = array('Einsatz bearbeiten', 'Einsatz ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_missions']['delete'] = array('Einsatz löschen', 'Einsatz ID %s löschen');
$GLOBALS['TL_LANG']['tl_missions']['show'] = array('Einsatzdetails', 'Details des Einsatzes ID %s anzeigen');

// FRONTEND MODULE
$GLOBALS['TL_LANG']['FMD']['missions'][0] = 'Einsätze';
$GLOBALS['TL_LANG']['FMD']['missions_list'] = array('Einsatzliste', 'Einsatzliste');
$GLOBALS['TL_LANG']['FMD']['missions_reader'] = array('Einsatzdetails', 'Einsatzdetails');
$GLOBALS['TL_LANG']['FMD']['missions_latest'] = array('Letzte Einsätze', 'Letzte Einsätze');

// LEGEND: EINSATZDATEN
$GLOBALS['TL_LANG']['tl_missions']['data_legend'] = 'Einsatzdaten';
$GLOBALS['TL_LANG']['tl_missions']['lfdnr'] = array('Laufende Einsatznummer', 'Geben Sie die Nummer des Einsatzes nach dem Schema ### ein.');
$GLOBALS['TL_LANG']['tl_missions']['year'] = array('Jahr', 'Geben Sie das zugehörige Jahr ein.');
$GLOBALS['TL_LANG']['tl_missions']['alarm_date'] = array('Datum der Alarmierung', 'Geben Sie das Datum der Alarmierung ein.');
$GLOBALS['TL_LANG']['tl_missions']['alarm_time'] = array('Uhrzeit der Alarmierung', 'Geben Sie die Uhrzeit der Alarmierung ein.');
$GLOBALS['TL_LANG']['tl_missions']['category'] = array('Einsatzart', 'Wählen Sie die Art des Einsatzes aus.');
$GLOBALS['TL_LANG']['tl_missions']['cat_fire'] = 'Brandeinsatz';
$GLOBALS['TL_LANG']['tl_missions']['cat_tech'] = 'Technische Hilfeleistung';
$GLOBALS['TL_LANG']['tl_missions']['cat_bma'] = 'Brandmeldeanlage';
$GLOBALS['TL_LANG']['tl_missions']['cat_misc'] = 'Sonstiges';
$GLOBALS['TL_LANG']['tl_missions']['keyword_fire'] = array('Einsatzstichwort', 'Wählen Sie das Einsatzstichwort aus.');
$GLOBALS['TL_LANG']['tl_missions']['keyword_tech'] = array('Einsatzstichwort', 'Wählen Sie das Einsatzstichwort aus.');
$GLOBALS['TL_LANG']['tl_missions']['keyword'] = array('Einsatzstichwort', 'Geben Sie das Einsatzstichwort ein.');
$GLOBALS['TL_LANG']['tl_missions']['street'] = array('Straße', 'Geben Sie die Straße ein.');
$GLOBALS['TL_LANG']['tl_missions']['city'] = array('Ort', 'Geben Sie den Ort ein.');

// LEGEND: EINSATZBERICHT
$GLOBALS['TL_LANG']['tl_missions']['report_legend'] = 'Einsatzbericht & -fotos';
$GLOBALS['TL_LANG']['tl_missions']['report'] = array('Einsatzbericht', 'Geben Sie den Einsatzbericht ein.');
$GLOBALS['TL_LANG']['tl_missions']['gallery'] = array('Einsatzfotos', 'Wählen Sie die Einsatzfotos aus.');

// LEGEND: FAHRZEUGE – POLIZEI
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_pol'] = 'Eingesetzte Kräfte der Polizei';
$GLOBALS['TL_LANG']['tl_missions']['pol_stw'] = array('Streifenwagen', 'Streifenwagen');
$GLOBALS['TL_LANG']['tl_missions']['pol_kripo'] = array('Kriminalpolizei', 'Kriminalpolizei');
$GLOBALS['TL_LANG']['tl_missions']['pol_hub'] = array('Polizeihubschrauber', 'Polizeihubschrauber');
$GLOBALS['TL_LANG']['tl_missions']['pol_sek'] = array('Sondereinsatzkommando', 'Sondereinsatzkommando');

// LEGEND: FAHRZEUGE – RETTUNGSDIENST
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_rd'] = 'Eingesetzte Kräfte des Rettungsdienstes';
$GLOBALS['TL_LANG']['tl_missions']['rd_rtw'] = array('Rettungswagen', 'Rettungswagen');
$GLOBALS['TL_LANG']['tl_missions']['rd_nef'] = array('Notarzteinsatzfahrzeug', 'Notarzteinsatzfahrzeug');
$GLOBALS['TL_LANG']['tl_missions']['rd_rth'] = array('Rettungshubschrauber', 'Rettungshubschrauber');
$GLOBALS['TL_LANG']['tl_missions']['rd_drk'] = array('DRK-Bereitschaft', 'DRK-Bereitschaft');
$GLOBALS['TL_LANG']['tl_missions']['rd_orgl'] = array('Organisatorischer Leiter', 'Organisatorischer Leiter');
$GLOBALS['TL_LANG']['tl_missions']['rd_lna'] = array('Leitender Notarzt', 'Leitender Notarzt');

// LEGEND: FAHRZEUGE – SONSTIGE
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_sonst'] = 'Sonstige eingesetzte Kräfte';
$GLOBALS['TL_LANG']['tl_missions']['sonst_kbm'] = array('Kreisbrandmeister', 'Kreisbrandmeister');
$GLOBALS['TL_LANG']['tl_missions']['sonst_wf'] = array('Werkfeuerwehr', 'Werkfeuerwehr');
$GLOBALS['TL_LANG']['tl_missions']['sonst_zds'] = array('Zentrale Dienste Schorndorf', 'Zentrale Dienste Schorndorf');
$GLOBALS['TL_LANG']['tl_missions']['sonst_energie'] = array('Energieversorger', 'Energieversorger');
$GLOBALS['TL_LANG']['tl_missions']['sonst_dlrg'] = array('DLRG', 'Deutsche Lebensrettungsgesellschaft');

// LEGEND: FAHRZEUGE – SCHORNDORF 1 – STADT
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_schorndorf_1'] = 'Fahrzeuge Abteilung 1 – Stadt';
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_10'] = array('Florian Schorndorf 1/10', 'Kommandowagen – KdoW');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_11'] = array('Florian Schorndorf 1/11', 'Einsatzleitwagen - ELW 1');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_19'] = array('Florian Schorndorf 1/19', 'Mannschaftstransportwagen - MTW');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_33'] = array('Florian Schorndorf 1/33', 'Drehleiter mit Korb – DLK 23-12 GL');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_44_1'] = array('Florian Schorndorf 1/44-1', 'Löschgruppenfahrzeug – LF 20/16');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_44_2'] = array('Florian Schorndorf 1/44-2', 'Löschgruppenfahrzeug – LF 16/12');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_50'] = array('Florian Schorndorf 1/50', 'Vorausrüstwagen – VRW');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_52'] = array('Florian Schorndorf 1/52', 'Rüstwagen – RW 2');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_74'] = array('Florian Schorndorf 1/74', 'Mehrzweckwagen - MZW');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_1_rtb'] = array('Rettungsboot', 'Rettungsboot - RTB');

// LEGEND: FAHRZEUGE – SCHORNDORF 2 – BUHLBRONN
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_schorndorf_2'] = 'Fahrzeuge Abteilung 2 – Buhlbronn';
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_2_48'] = array('Florian Schorndorf 2/48', 'Tragkraftspritzenfahrzeug - TSF-W');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_2_TSA'] = array('Tragkraftspritzenanhänger', 'Tragkraftspritzenanhänger');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_2_SA'] = array('Schlauchanhänger', 'Schlauchanhänger');

// LEGEND: FAHRZEUGE – SCHORNDORF 3 – HAUBERSBRONN
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_schorndorf_3'] = 'Fahrzeuge Abteilung 3 – Haubersbronn';
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_3_19'] = array('Florian Schorndorf 3/19', 'Mannschaftstransportwagen - MTW');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_3_42'] = array('Florian Schorndorf 3/42', 'Löschgruppenfahrzeug - LF 10/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_3_TSA'] = array('Tragkraftspritzenanhänger', 'Tragkraftspritzenanhänger');

// LEGEND: FAHRZEUGE – SCHORNDORF 4 – MIEDELSBACH
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_schorndorf_4'] = 'Fahrzeuge Abteilung 4 – Miedelsbach';
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_4_19'] = array('Florian Schorndorf 4/19', 'Mannschaftstransportwagen - MTW');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_4_42'] = array('Florian Schorndorf 4/42', 'Löschgruppenfahrzeug - LF 8/6');

// LEGEND: FAHRZEUGE – SCHORNDORF 5 – OBERBERKEN
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_schorndorf_5'] = 'Fahrzeuge Abteilung 5 – Oberberken';
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_5_42'] = array('Florian Schorndorf 5/42', 'Löschgruppenfahrzeug - LF 8/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_5_47'] = array('Florian Schorndorf 5/47', 'Tragkraftspritzenfahrzeug - TSF');

// LEGEND: FAHRZEUGE – SCHORNDORF 6 – SCHLICHTEN
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_schorndorf_6'] = 'Fahrzeuge Abteilung 6 – Schlichten';
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_6_42'] = array('Florian Schorndorf 6/42', 'Löschgruppenfahrzeug - LF 10/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_6_TSA'] = array('Tragkraftspritzenanhänger', 'Tragkraftspritzenanhänger');

// LEGEND: FAHRZEUGE – SCHORNDORF 7 – SCHORNBACH
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_schorndorf_7'] = 'Fahrzeuge Abteilung 7 – Schornbach';
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_7_42'] = array('Florian Schorndorf 7/42', 'Löschgruppenfahrzeug - LF 10/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_7_48'] = array('Florian Schorndorf 7/48', 'Tragkraftspritzenfahrzeug - TSF - W');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_7_TSA'] = array('Tragkraftspritzenanhänger', 'Tragkraftspritzenanhänger');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_7_SA'] = array('Schlauchanhänger', 'Schlauchanhänger');

// LEGEND: FAHRZEUGE – SCHORNDORF 8 – WEILER
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_schorndorf_8'] = 'Fahrzeuge Abteilung 8 – Weiler';
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_8_19'] = array('Florian Schorndorf 8/19', 'Mannschaftstransportwagen - MTW');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_8_44'] = array('Florian Schorndorf 8/44', 'Löschgruppenfahrzeug - LF 20/16');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_8_TSA'] = array('Tragkraftspritzenanhänger', 'Tragkraftspritzenanhänger');
$GLOBALS['TL_LANG']['tl_missions']['fw_schorndorf_8_SA'] = array('Schlauchanhänger', 'Schlauchanhänger');

// LEGEND: FAHRZEUGE – RUDERSBERG
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_rudersberg'] = 'Fahrzeuge Feuerwehr Rudersberg';
$GLOBALS['TL_LANG']['tl_missions']['fw_rudersberg_1_11'] = array('Florian Rudersberg 1/11', 'Einsatzleitwagen – ELW 1');

// LEGEND: FAHRZEUGE – PLUEDERHAUSEN
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_pluederhausen'] = 'Fahrzeuge Feuerwehr Plüderhausen';
$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_19'] = array('Florian Plüderhausen 1/19', 'Mannschaftstransportwagen – MTW');
$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_23'] = array('Florian Plüderhausen 1/23', 'Tanklöschfahrzeug – TLF 16/25');
$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_42'] = array('Florian Plüderhausen 1/42', 'Löschgruppenfahrzeug – LF 8/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_44'] = array('Florian Plüderhausen 1/44', 'Löschgruppenfahrzeug – LF 16/12');
$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_1_72'] = array('Florian Plüderhausen 1/72', 'Kleineinsatzfahrzeug – KEF');
$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_2_48'] = array('Florian Plüderhausen 2/48', 'Tragkraftspritzenfahrzeug – TSF-W');
$GLOBALS['TL_LANG']['tl_missions']['fw_pluederhausen_SA'] = array('Schlauchanhänger', 'Schlauchanhänger');

// LEGEND: FAHRZEUGE – WINTERBACH
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_winterbach'] = 'Fahrzeuge Feuerwehr Winterbach';
$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_11'] = array('Florian Winterbach 1/11', 'Einsatzleitwagen – ELW 1');
$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_42'] = array('Florian Winterbach 1/42', 'Löschgruppenfahrzeug – LF 8/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_44_1'] = array('Florian Winterbach 1/44-1', 'Löschgruppenfahrzeug – LF 16/12');
$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_44_2'] = array('Florian Winterbach 1/44-2', 'Löschgruppenfahrzeug – LF 16/12');
$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_45'] = array('Florian Winterbach 1/45', 'Löschgruppenfahrzeug – LF KatS');
$GLOBALS['TL_LANG']['tl_missions']['fw_winterbach_1_48'] = array('Florian Winterbach 1/48', 'Tragkraftspritzenfahrzeug – TSF-W');

// LEGEND: FAHRZEUGE – REMSHALDEN
$GLOBALS['TL_LANG']['tl_missions']['legend_veh_fw_remshalden'] = 'Fahrzeuge Feuerwehr Remshalden';
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_11'] = array('Florian Remshalden 1/11', 'Einsatzleitwagen – ELW');
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_19'] = array('Florian Remshalden 1/19', 'Mannschaftstransportwagen – MTW');
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_42_1'] = array('Florian Remshalden 1/42-1', 'Hilfeleistungslöschgruppenfahrzeug – HLF 10/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_42_2'] = array('Florian Remshalden 1/42-2', 'Löschgruppenfahrzeug – LF 8/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_44'] = array('Florian Remshalden 1/44', 'Löschgruppenfahrzeug – LF 16/12');
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_51'] = array('Florian Remshalden 1/51', 'Rüstwagen – RW 1');
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_1_74'] = array('Florian Remshalden 1/74', 'Gerätewagen Logistik 1 – GW-L1');
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_2_42'] = array('Florian Remshalden 2/42', 'Löschgruppenfahrzeug – LF 8/6');
$GLOBALS['TL_LANG']['tl_missions']['fw_remshalden_3_22'] = array('Florian Remshalden 3/22', 'Staffellöschfahrzeug – StLF 10/6');



$GLOBALS['TL_LANG']['tl_missions'][''] = array('', '');