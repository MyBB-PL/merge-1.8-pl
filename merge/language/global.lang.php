<?php
/**
 * MyBB Merge System 1.8.6 Polish Language File
 * Copyright © 2008-2015 MyBBoard.pl Team
 * Licencja: http://www.mybb.com/download/merge-system/license/
 */

/**
 * MyBB 1.8 Merge System
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybb.com
 * License: http://www.mybb.com/download/merge-system/license/
 */

$l['next'] = "Dalej";
$l['version'] = "Wersja";
$l['none'] = "brak";
$l['please_wait'] = "Proszę czekać...";
$l['welcome'] = "Witamy";
$l['pause'] = "Wstrzymaj";
$l['error'] = "Błąd";
$l['warning'] = "Ostrzeżenie";
$l['completed'] = "zakończono";
$l['dependencies'] = "Moduł zależy od";
$l['resume'] = "Wznów";
$l['run'] = "Uruchom";
$l['cleanup'] = "Przejdź do czyszczenia";
$l['yes'] = "Tak";
$l['no'] = "Nie";
$l['download'] = "Pobierz";
$l['redirecting'] = "Przekierowywanie...";
$l['dont_wait'] = "Kliknij tutaj, jeżeli nie chcesz czekać.";
$l['back'] = "Wróć";
$l['found_error'] = "Napotkane błędy";
$l['loading_data'] = "Wczytywanie informacji z bazy danych...";
$l['done'] = " zakończono.";

// Modules, english names are hardcoded. Uncomment this for your language
// Descriptions are added as "module_{key}_desc, however the current ones doesn't have a description
// Singular versions are added as "module_{key}_singular

$l['module_usergroups'] = 'Grupy użytkowników';
$l['module_usergroups_singular'] = 'Grupa użytkowników';
$l['module_users'] = 'Użytkownicy';
$l['module_users_singular'] = 'Użytkownik';
$l['module_categories'] = 'Kategorii';
$l['module_forums'] = 'Działy';
$l['module_forums_singular'] = 'Dział';
$l['module_forumperms'] = 'Uprawnienia do działów';
$l['module_forumperms_singular'] = 'Uprawnienie do działów';
// Yes, this is used twice as the key used for automatic detection is different sometimes. Will be fixed in a later release
$l['module_forum_permissions'] = 'Uprawnienia do działów';
$l['module_forum_permissions_singular'] = 'Uprawnienie do działów';
$l['module_moderators'] = 'Moderatorzy';
$l['module_moderators_singular'] = 'Moderator';
$l['module_threads'] = 'Wątki';
$l['module_threads_singular'] = 'Wątek';
$l['module_posts'] = 'Posty';
$l['module_posts_singular'] = 'Post';
$l['module_attachments'] = 'Załączniki';
$l['module_attachments_singular'] = 'Załącznik';
$l['module_polls'] = 'Ankiety';
$l['module_polls_singular'] = 'Ankieta';
// Yes, this is used twice as the key used for automatic detection is different sometimes. Will be fixed in a later release
$l['module_poll_votes'] = 'Ankiety';
$l['module_poll_votes_singular'] = 'Ankieta';
$l['module_pollvotes'] = 'Głosy w ankietach';
$l['module_pollvotes_singular'] = 'Głos w ankiecie';
$l['module_privatemessages'] = 'Prywatne wiadomości';
$l['module_privatemessages_singular'] = 'Prywatna wiadomość';
// Yes, this is used twice as the key used for automatic detection is different sometimes. Will be fixed in a later release
$l['module_private_messages'] = 'Prywatne wiadomości';
$l['module_private_messages_singular'] = 'Prywatna wiadomość';
$l['module_events'] = 'Wydarzenia';
$l['module_events_singular'] = 'Wydarzenie';
$l['module_icons'] = 'Ikony';
$l['module_icons_singular'] = 'Ikona';
$l['module_smilies'] = 'Emotikony';
$l['module_smilies_singular'] = 'Emotikona';
$l['module_settings'] = 'Ustawienia';
$l['module_settings_singular'] = 'Ustawienie';
$l['module_attachtypes'] = 'Typy załączników';
$l['module_attachtypes_singular'] = 'Typ załączników';

$l['module_categories_singular'] = 'Kategoria';

//polish lanugage file
$l['module_db_configuration'] = 'Konfiguracja bazy danych';

$l['creating_fields'] = "Tworzenie pól do śledzenia danych podczas procesu importu/łączenia (to może chwilę potrwać)...";
$l['creating_table'] = "Tworzenie tabeli {1}.";
$l['creating_columns'] = "Dodawanie kolumn {2} typu {1} do tabeli {3}";

$l['indexpage_require'] = "MyBB Merge System do uruchomienia wymaga MyBB w wersji 1.8.";

$l['welcomepage_description'] = "Witamy w MyBB Merge System. MyBB Merge System został zaprojektowany w celu umożliwienia importu z innych silników forów dyskusyjnych do MyBB 1.8. W dodatku umożliwia on <i>połączenie</i> kilku forów opartych o MyBB w jedno.<br /><br /> Szczegółowy poradnik można przeczytać w angielskiej wiki: ";
$l['welcomepage_mergesystem'] = "Merge System";
$l['welcomepage_anonymousstat'] = "Wyślij anonimowe statystyki do twórców MyBB";
$l['welcomepage_informations'] = "Jakie informacje są wysyłane? (j. ang.)";
$l['welcomepage_closeboard'] = "Wyłącz forum na czas migracji";
$l['welcomepage_note'] = "MyBB Merge system <u><strong>nie służy</strong></u> do aktualizacji forów MyBB. Upewnij się, że przed rozpoczęciem procesu importu lub łączenia wszystkie pluginy, które mogą mieć wpływ na te procesy zostały <strong>wyłączone</strong> na obydwu silnikach. <strong>Wysoce zalecane</strong> jest również wykonanie kopii zapasowej bazy danych obu silników.";
$l['welcomepage_pleasenote'] = "Uwaga";

$l['requirementspage_check'] = "Sprawdzanie wymagań";
$l['requirementspage_req'] = "Wymagania";
$l['requirementspage_uptodate'] = "aktualna";
$l['requirementspage_outofdatedesc'] = "Używana przez Ciebie wersja MyBB Merge System jest nieaktualna! W związku z tym może ona nie działać właściwie do czasu aktualizacji. Najnowsza wersja to:
";
$l['requirementspage_outofdate'] = "nieaktualny";
$l['requirementspage_mergeoutofdate'] = "Używana wersja MyBB Merge System jest nieaktualna";
$l['requirementspage_unabletocheck'] = "nie można zweryfikować";
$l['requirementspage_unabletocheckdesc'] = "Nie można zweryfikować wersji forum w porównaniu do najnowszej na mybb.com";
$l['requirementspage_chmoduploads'] = "Katalog zawierający załączniki (/uploads/) nie ma praw zapisu. Nadaj mu odpowiednie uprawnienia ";
$l['requirementspage_chmoduploads2'] = " przed kontynuowaniem.";
$l['requirementspage_chmod'] = "chmod";
$l['requirementspage_notwritable'] = "niezapisywalny";
$l['requirementspage_attnotwritable'] = "Katalog załączników jest niezapisywalny";
$l['requirementspage_attwritable'] = "zapisywalny";
$l['requirementspage_attwritabledesc'] = "Katalog załączników jest zapisywalny";
$l['requirementspage_reqfailed'] = "Sprawdzanie wymagań nie powiodło się:";
$l['requirementspage_mergeversion'] = "Wersja Merge System:";
$l['requirementspage_attwritabledesc2'] = "Katalog załączników zapisywalny:";
$l['requirementspage_checkagain'] = "Po naprawieniu powyższych błedów naciśnij przycisk \"Sprawdź ponownie\" aby spróbować ponownie zweryfikować wymagania.";
$l['requirementspage_congrats'] = "Gratulujemy, wszystkie wymagania zostały spełnionie! Naciśnij przycisk \"Dalej\" aby kontynuować.
";

$l['boardspage_welcome'] = "Dziękujemy za wybranie MyBB. Ten kreator pomoże Ci w dokonaniu konwersji istniejącego silnika forum do MyBB.";
$l['boardspage_boardselection'] = "Wybór silnika";
$l['boardspage_boardselectiondesc'] = "Wybierz silnik, z którego chcesz dokonać importu.";

$l['module_selection'] = "Wybór modułów";
$l['module_selection_select'] = "Wybierz moduł do uruchomienia.";
$l['module_selection_import'] = "Import {1} ";
$l['module_selection_cleanup_desc'] = "Po uruchomieniu wybranych modułów, przejdź do następnego kroku procesu importu. Zostanie przeprowadzone czyszczenie, które usunie tymczasowe dane utworzone podczas tego procesu.";

$l['database_configuration'] = "Konfiguracja bazy danych";
$l['database_settings'] = "Ustawienia bazy danych";
$l['database_engine'] = "Silnik bazy danych";
$l['database_path'] = "Ścieżka bazy danych";
$l['database_host'] = "Serwer bazy danych";
$l['database_user'] = "Użytkownik bazy danych";
$l['database_pw'] = "Hasło bazy danych";
$l['database_name'] = "Nazwa bazy danych";
$l['database_table_settings'] = "Ustawienia tabel bazy danych";
$l['database_table_prefix'] = "Prefiks tabel";
$l['database_table_encoding'] = "Kodowanie tabel";
$l['database_utf8_thead'] = "Koduj w UTF-8";
$l['database_utf8_desc'] = "Automatycznie dokonać konwersji do UTF8?<br /><small>Wyłącz tę opcję, jeżeli proces konwersji tworzy<br />dziwne znaki w postach.</small>";
$l['database_click_next'] = "Jeżeli te dane są poprawne, naciśnij przycisk Dalej aby kontynuować.";
$l['database_exit'] = "Opuść konfigurację";
$l['database_check_success'] = "Sprawdzanie dostępu do bazy danych... <span style=\"color: green\">zakończone powodzeniem.</span>";
$l['database_success'] = "Pomyślnie skonfigurowano i połączono z bazą danych.";
$l['database_details'] = "Podaj dane do bazy danych istniejącej instalacji silnika {1}.";

$l['wbb_installationnumber'] = "Numer instalacji";
$l['wbb_installationnumber_desc'] = "Jaki numer instalacji wybrałeś podczas instalacji?";

$l['column_length_check'] = 'Sprawdzanie zgodności danych ze strukturą bazy danych MyBB...';
$l['column_length_checking'] = 'Sprawdzanie kolumny {1} w tabeli {2}';

$l['per_screen_config'] = "Konfiguracja opcji";
$l['per_screen'] = "{1} - wybierz liczbę do zaimportowania w jednym momencie";
$l['per_screen_label'] = "{1} do zaimportowania w jednym momencie";
$l['per_screen_autorefresh'] = "Czy chcesz, aby proces był automatycznie kontynuowany do momentu aż zostanie zakończony";

$l['stats_in_progress'] = "{2} - {1} jest/są w tym momencie importowane. Pozostaje {3} do zaimportowania i {4} stron.";
$l['stats'] = "{2} - ogólna liczba pozostałych do zaimportowania: {1}.";

$l['progress'] = "Wprowadzanie {1} #{2}";
$l['progress_merging_user'] = "Łączenie użytkownika #{1} z użytkownikiem #{2}";
$l['progress_settings'] = "Wprowadzanie {1} {2} z bazy danych silnika {3}";
$l['progress_none_left'] = "Nie ma {1} do zaimportowania. Naciśnij przycisk Dalej aby kontynuować.";
$l['progress_none_left_settings'] = "Nie ma {1} do zaktualizowania. Naciśnij przycisk Dalej aby kontynuować.";

$l['import_successfully'] = "Pomyślnie zakończono import danych z modułu {1}.";

$l['module_post_rebuilding'] = "Przebudowa liczników";
$l['module_post_rebuild_counters'] = "<br />\nPrzebudowywanie wewnętrznych liczników...(To może chwilę potrwać)<br />";
$l['module_post_rebuilding_thread'] = "Przebudowywanie liczników wątków... ";
$l['module_post_thread_counter'] = "Przebudowa liczników dla wątku #{1}";
$l['module_post_rebuilding_forum'] = "Przebudowywanie liczników działów...";
$l['module_post_forum_counter'] = "Przebudowa liczników dla działu #{1}";
$l['module_post_rebuilding_user_post'] = "Przebudowywanie liczników postów użytkowników...";
$l['module_post_user_counter'] = "Przebudowywanie licznika dla użytkownika #{1}";
$l['module_post_rebuilding_user_thread'] = "Przebudowywanie liczników wątków użytkowników...";

$l['module_settings_updating'] = "Aktualizacja ustawień {1}";

$l['module_attachment_link'] = "Podaj adres do folderu z załącznikami silnika {1}:";
$l['module_attachment_label'] = "Adres URL folderu z załącznikami<br /><span class='smalltext'>Jeśli to możliwe, użyj względnej/bezwzględnej ścieżki. Pamiętaj, że obecny katalog to <b>merge</b>.</span>";
$l['module_attachment_error'] = "Nie można przenieść załącznika (ID: {1})";
$l['module_attachment_not_found'] = "Nie można odnaleźć załącznika (ID: {1})";
$l['module_attachment_create_thumbnail'] = "Automatycznie utwórz miniaturki dla przesłanych obrazów";
$l['module_attachment_create_thumbnail_note'] = 'Pamiętaj, że miniaturki muszą być tworzone na nowo za każdym razem, gdy zostanie zmienione ustawienie rozmiaru miniaturek. Jeśli nie uruchamiałeś jeszcze modułu ustawień, lub planujesz zmienić wspomniane ustawienie po konwersji, ustaw tę opcję na \'Nie\'.';

$l['attmodule_ipadress'] = "Nie można używać adresu \"localhost\" w adresie. Użyj swojego adresu IP (upewnij się, że port 80 jest otwarty w routerze bądź zaporze).";
$l['attmodule_ipadress2'] = "Nie można używać adresu \"127.0.0.1\" w adresie. Użyj swojego adresu IP (upewnij się, że port 80 jest otwarty w routerze bądź zaporze).";

$l['module_avatar_link'] = "Podaj adres do folderu {1} z awatarami użytkowników";
$l['module_avatar_label'] = "Adres URL folderu z obrazkami awatarów<br /><span class='smalltext'>Jeśli to możliwe, użyj względnej/bezwzględnej ścieżki. Pamiętaj, że obecny katalog to <b>merge</b>.</span>";
$l['module_avatar_error'] = "Wystąpił błąd podczas przenoszenia awatara (ID: {1})";
$l['module_avatar_not_found'] = "Nie można znaleźć awatara (ID: {1})";

$l['upload_not_writeable'] = 'Katalog zawierający wysłane przez użytkowników pliki (uploads/) nie jest zapisywalny. Nadaj mu poprawne uprawnienia <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">chmod</a> aby zezwolić na zapisywanie do niego.';
$l['download_not_readable'] = 'Katalog nie jest zapisywalny. Nadaj mu poprawne uprawnienia <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">chmod</a> aby zezwolić na zapisywanie do niego i upewnij się, że podany adres URL jest prawidłowy. Jeśli nadal problem będzię występował, spróbuj użyć pełnej ścieżki systemowej zamiast adresu URL (na przykład: /var/www/htdocs/sciezka/do/twojego/starego/forum/uploads/ lub C:/sciezka/do/twojego/starego/forum/upload/). Dodatkowo sprawdź, czy dostęp nie jest blokowany przez wpisy w pliku htaccess.';

$l['removing_table'] = "Usuwanie tabeli {1}";
$l['removing_columns'] = "Usuwanie kolumn {1} z tabeli {2}";

$l['cleanup_header'] = "MyBB Merge System - ostatni krok: czyszczenie";
$l['cleanup_notice'] = "Przeprowadzanie ostatecznego czyszczenia i konserwacji (to może chwilę potrwać)... ";

$l['finish_completion'] = "Zakończenie";
$l['finish_head'] = '<p>Proces importu został zakończony. Możesz teraz odwiedzić swoją kopię <a href="../">MyBB</a> lub jej <a href="../{$1}/index.php">panelu administratora</a>. Zalecane jest uruchomienie procesów przeliczania i przebudowy w panelu administratora.</p>
	<p>Usuń katalog zawierający MyBB Merge System, jeżeli nie zamierzasz dokonywać importu z innych silników.</p>';
$l['finish_whats_next_head'] = "Co dalej?";
$l['finish_whats_next'] = 'Ponieważ niemożiwe jest łączenie wszystkich uprawnień, ustawień i liczników, musisz wykonać teraz kilka rzeczy, aby być pewnym, że wszystko działa tak jak powinno:
		<ul>
			<li>Sprawdź wszystkie <a href="../{1}/index.php?module=config">ustawienia</a></li>
			<li>Sprawdź uprawnienia <a href="../{1}/index.php?module=forum">działów</a> i <a href="../{1}/index.php?module=user-groups">grup</a></li>
		</ul>';
$l['finish_report1'] = "Poniższe opcje pozwolą Ci na pobranie raportu z przeprowadzonych działań w wybranym przez siebie stylu.";
$l['finish_report2'] = "Generowanie raportu";
$l['finish_report_type'] = "Wybierz styl raportu do wygenerowania.";
$l['finish_report_type_txt'] = "zwykły plik tekstowy";
$l['finish_report_type_html'] = "plik HTML";

$l['warning_innodb'] = "Tabela \"{1}\" jest aktualnie w formacie InnoDB. Wysoce zalecana jest konwersja jej do typu MyISAM. W innym wypadku mogą wystąpić poważne spadki w wydajności podczas pracy MyBB Merge System.";

$l['error_no_admin'] = 'Tylko administratorzy mogą uruchomić merge system. Przejdź do strony głównej forum i zaloguj się na konto administratora.';

$l['error_invalid_board'] = "Wybrany moduł nie istnieje.";
$l['error_js_off'] = 'Wygląda na to, że w przeglądarce, której używasz, została wyłączona obsługa skryptów JavaScript. MyBB Merge System wymaga, aby ich obsługa była włączona w celu poprawnego działania. Po włączeniu obsługi JavaScript w przeglądarce, odśwież tę stronę.';
$l['error_list'] = "MyBB Merge System napotkał poniższe błędy:";
$l['error_click_next'] = "Po rozwiązaniu powyższych problemów możesz kontynuować proces poprzez nacisnięcie przycisku Dalej.";

$l['error_database_relative'] = "Nie możesz używać względnych adresów URL dla baz danych SQLite. Użyj ścieżki systemu plików, na przykład /home/user/database.db.";
$l['error_database_invalid_engine'] = "Wybrano niepoprawny typ silnika bazy danych. Upewnij się, że wybrano go z listy poniżej.";
$l['error_database_cant_connect'] = "Nie można połączyć się z bazą danych na serwerze {1} z podaną nazwą użytkownika i hasłem. Czy na pewno te dane są poprawne?";
$l['error_database_wrong_table'] = "Baza danych silnika {1} nie mogła zostać odnaleziona w '{2}'.  Upewnij się, że baza danych silnika {1} istnieje w tej bazie danych z podanym prefiksem do tabel.";
$l['error_database_list'] = "Wygląda na to, że w podane dane do bazy danych są błędne";
$l['error_database_continue'] = "Po naprawieniu powyższych błędów będzie można kontynuować proces importu.";
$l['error_database_non_supported'] = 'Wygląda na to, że Twój hosting nie obsługuje żadnego z wymaganych rozszerzeń bazy danych.';
$l['error_column_length_desc'] = 'Stara baza danych zawiera dane, które nie mogą być automatycznie połączone. Szczegółowe informacje na ten temat można znaleźć w <a href="http://docs.mybb.com/1.8/merge/column-length-check/">oficjalnej dokumentacji</a> (j. ang.).';
$l['error_column_length_table'] = 'Kolumny znajdujące się w tabeli <b>{1}</b>, których dane zostaną wybrakowane';
$l['error_column_length'] = '- {1} (Maksymalna długość: {2})';

$l['loginconvert_title'] = "MyBB Merge System - import haseł użytkowników";
$l['loginconvert_message'] = "<div class=\"error\">
			<h3>Błąd</h3>
			MyBB Merge System nie może kontynuować dopóki do folderu z pluginami MyBB (inc/plugins) nie zostanie skopiowany plik loginconvert.php (znajdziesz go w katalogu z MyBB Merge System).
			</div>
			
			<p>Więcej informacji można odnaleźć <a href=\"http://wiki.mybb.com/index.php/Running_the_Merge_System#loginconvert.php_plugin\" target=\"_blank\">tutaj</a> (j. ang.).</p>
			<p>Po skopiowaniu pliku naciśnij przycisk Dalej aby kontynuować.</p>";


$l['report_txt'] = 'MyBB Merge System - raport importu
--------------------------------------------------------
Witamy w raporcie wygenerowanym przez MyBB Merge System.
Ten raport zawiera krótki przegląd informacji na temat przeprowadzonych działań.

Główne informacje
-------
	Połączone forum:    {$1}
	Import rozpoczęto:  {$2}
	Import zakończono:  {$3}

Statystyki zapytań do bazy danych
-------------------------
	Liczba zapytań do bazy danych MyBB:             {$4}
	Liczba zapytań do bazy danych starego silnika:  {$5}
	Łączny czas wykonywania zapytań:                {$6}

Moduły
-------
Praca poniższych modułów została zakończona:
{$7}

Statystyki importu
-----------------
Zaimportowano następujące elementy z silnika {$8}:
{$9}

Błędy
------
Podczas importu system napotkał poniższe błędy:
{$10}

Problemy
---------
Tabela "mybb_debuglogs" znajdująca się w bazie danych forum zawiera
informacje debugowania na temat przeprowadzonych działań. W przypadku problemów
zwróć się o pomoc na http://community.mybb.com/.

--------------------------------------------------------
Raport wygenerowano: {$11}';

$l['report_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Raport wygenerowany przez MyBB Merge System</title>
	<style type="text/css">
		body {
			font-family: Verdana, Arial, sans-serif;
			font-size: 12px;
			background: #efefef;
			color: #000000;
			margin: 0;
		}

		#container {
			margin: auto auto;
			width: 780px;
			background: #fff;
			border: 1px solid #ccc;
			padding: 20px;
		}

		h1 {
			font-size: 25px;
			margin: 0;
			background: #ddd;
			padding: 10px;
		}

		h2 {
			font-size: 18px;
			margin: 0;
			padding: 10px;
			background: #efefef;
		}

		h3 {
			font-size: 14px;
			clear: left;
			border-bottom: 1px dotted #aaa;
			padding-bottom: 4px;
		}

		ul, li {
			padding: 0;
		}

		#general p, #modules p, #import p, ul, li, dl {
			margin-left: 30px;
		}

		dl dt {
			float: left;
			width: 300px;
			padding-bottom: 10px;
			font-weight: bold;
		}

		dl dd {
			padding-bottom: 10px;
		}

		#footer {
			border-top: 1px dotted #aaa;
			padding-top: 10px;
			font-style: italic;
		}

		.float_right {
			float: right;
		}
	</style>
</head>
<body>
<div id="container">
	<h1>MyBB Merge System</h1>
	<h2>Raport z dokonanego importu</h2>
	<p>Witamy w raporcie wygenerowanym przez MyBB Merge System. Ten raport zawiera krótki przegląd informacji na temat przeprowadzonych działań.</p>
	<div id="general">
		<h3>Główne statystyki</h3>
		<p>Podczas importu połączono forum oparte o silnik {1} z Twoim aktualnym forum.</p>
		<dl>
			<dt>Import rozpoczęto</dt>
			<dd>{2}</dd>

			<dt>Import zakończono</dt>
			<dd>{3}</dd>
		</dl>
	</div>
	<div id="database">
		<h3>Statystyki zapytań do bazy danych</h3>
		<dl>
			<dt>Liczba zapytań do bazy danych MyBB</dt>
			<dd>{4}</dd>
			
			<dt>Liczba zapytań do bazy danych silnika</dt>
			<dd>{5}</dd>

			<dt>Łączny czas wykonywania zapytań</dt>
			<dd>{6}</dd>
		</dl>
	</div>
	<div id="modules">
		<h3>Moduły</h3>
		<p>Praca poniższych modułów została zakończona:</p>
		<ul>
		{7}
		</ul>
	</div>
	<div id="import">
		<h3>Statystyki importu</h3>
		<p>Zaimportowano następujące elementy z silnika {8}:</p>
		<dl>
		{9}
		</dl>
	</div>
	<div id="errors">
		<h3>Błędy</h3>
		<p>Podczas importu system napotkał poniższe błędy:</p>
		<ul>
		{10}
		</ul>
	</div>
	<div id="problems">
		<h3>Problemy</h3>
		<p>Tabela "mybb_debuglogs" znajdująca się w bazie danych forum zawiera informacje debugowania na temat przeprowadzonych działań. W przypadku problemów zwróć się o pomoc na <a href="http://community.mybb.com/">forum wsparcia MyBB</a>.</p>
	</div>
	<div id="footer">
		<div class="float_right">MyBB © 2002-{12} MyBB Group, Polskie tłumaczenie © 2010-{12} <a href="http://www.mybboard.pl">Polski Support MyBB</a></div>
		<div>Raport wygenerowano {11}</div>
	</div>
</div>
</body>
</html>';
