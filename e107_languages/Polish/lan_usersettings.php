<?php
/*
+====================================================================+
* Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - lan_usersettings.php                     *
   *                                                                 *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/
define("PAGE_NAME", "Ustawienia użytkownika");

/*
LANs rationalised - some common ones now in lan_user.php. Old numbers generally cross-referenced
// define("LAN_7", "Display Name: ");		See LAN_USER_01
define("LAN_11", "the name you use to login to the site - this cannot be changed, please contact an administrator if it needs to be changed for security purposes");

//define("LAN_20", "Error");
define("LAN_106", "That doesn't appear to be a valid email address");
//define("LAN_112", "Email Address: ");		see LAN_USER_60
define("LAN_119", "Location: ");
//define("LAN_120", "Signature: ");
//define("LAN_121", "Avatar: ");
define("LAN_144", "Website URL: ");
//define("LAN_151", "OK");
define("LAN_185", "You left the password field blank ");
//define("LAN_308", "Real Name: ");
define("LAN_402", "Type path or choose avatar");

define("LAN_410", "Settings for");
define("LAN_411", "Update Your Settings");
define("LAN_412", "Change Your Password");
define("LAN_413", "Choose An Avatar");
//define("LAN_416", "Yes");
//define("LAN_417", "No");
define("LAN_419", "Personal / Contact Information");
//define("LAN_420", "Avatar");			LAN_USER_07
//define("LAN_425", "Photograph");		LAN_USER_06
//define("LAN_427", "Submit ...");
//define("LAN_428", "News Item");
//define("LAN_429", "Link");
//define("LAN_430", "Download");
//define("LAN_431", "Article");
//define("LAN_432", "Review");

//define("LAN_435", "XML User Protocol file");	// LAN_USER_11

//define("LAN_SIGNUP_1", "Min.");		See LAN_USER_78
//define("LAN_SIGNUP_2", "chars.");	See LAN_USER_79
//define("LAN_SIGNUP_4", "Your password must be at least ");	See LAN_USER_77
//define("LAN_SIGNUP_5", " characters long.");			See LAN_USER_77
//define("LAN_SIGNUP_6", "Your ");				See LAN_USER_75
//define("LAN_SIGNUP_7", " is required");		See LAN_USER_75


//define("LAN_CUSTOMTITLE", "Custom Title");		See LAN_USER_04
//define("LAN_ICQNUMBER", "ICQ number must contain only numbers");

//v.617
define("LAN_408", "A user with that email address already exists. ");
*/
define("MAX_AVWIDTH", "Maksymalny rozmiar awatara (sxw) to ");
define("MAX_AVHEIGHT", "x");
// define("GIF_RESIZE", "Please resize gif image or convert to different format");
//define("RESIZE_NOT_SUPPORTED", "Resize method not supported by this server. Please resize image or choose another. File has been deleted.");


// v0.7
define("LAN_USET_1", "Twój awatar jest za szeroki");
define("LAN_USET_2", "Maksymalną dopuszczoną szerokością jest");
define("LAN_USET_3", "Twój awatar jest za wysoki");
define("LAN_USET_4", "Maksymalną dopuszczoną wysokością jest");
//define("LAN_USET_5", "Subscribed to");					// Now LAN_USER_76
//define("LAN_USET_6", "Subscribe to our mailing-list(s) and/or sections of this site.");		Now LAN_USER_73
define("LAN_USET_7", "Pozostałe informacje");//Miscellaneous
define("LAN_USET_8", "Sygnatura użytkownika");
define("LAN_USET_9", "Niektóre wymagane pola (oznaczone znakiem *) zostały utracone.");
define("LAN_USET_10","Aby przejść dalej, proszę zaktualizować swoje ustawienia.");
define("LAN_USET_11", "Podany login nie może być zaakceptowany, proszę wybrać inny");
define("LAN_USET_12", "Podany nick jest za krótki. Proszę wybrać inny");
define("LAN_USET_13", "Nieprawidłowe znaki w loginie. Proszę wybrać inny");
define("LAN_USET_14", "Podany login jest za długi. Proszę wybrać inny");
define("LAN_USET_15", "Podany nick jest za długi. Proszę wybrać inny");
define("LAN_USET_16", "Zaznacz pole wyboru, aby usunąć istniejące zdjęcia bez przesyłania kolejnego");
define("LAN_USET_17", "Podany nick jest już zajęty. Proszę wybrać inny");
define('LAN_USET_18', 'Dane użytkownika zostały zmienione przez administratora: --ID--, Nick : --LOGNAME--');
//define('LAN_USET_19', 'Custom Title');			Now LAN_USER_74
define('LAN_USET_20', "Musisz zmienić hasło, jeżeli zmieniłeś Nick lub adres E-mail");
define('LAN_USET_21', 'Proszę potwierdzić zmiany poprzez ponowne wprowadzenie hasła: ');
define('LAN_USET_22', 'Błędne hasło !'); // TODO LAN common?
define('LAN_USET_23', 'Pozostaw puste, aby zachować istniejące hasło');		// LAN_401
define('LAN_USET_24', 'Nowe hasło: ');							// LAN_152
define('LAN_USET_25', 'Powtórz nowe hasło: ');					// LAN_153
define('LAN_USET_26', 'Wyślij swój awatar');						// LAN_415
define('LAN_USET_27', 'Wyślij swoje zdjęcie');					// LAN_414
define('LAN_USET_28', 'Będzie pokazywane na stronie Twojego profilu');	// LAN_426
//define('LAN_USET_29', 'URL to your XUP file');						// LAN_433
define('LAN_USET_30', 'co to jest?');								// LAN_434
define('LAN_USET_31', 'Informacje rejestracyjne');					// LAN_418
define('LAN_USET_32', 'Uwaga: Wszystkie elementy graficzne przesłane na ten serwer, które zostaną uznane przez administratorów za nieodpowiednie, zostaną natychmiast skasowane.');	// LAN_404
define('LAN_USET_33', 'Wybierz dostępnego awatara');					// LAN_421
define('LAN_USET_34', 'Pobieraj awatara z adresu');							// LAN_422
define('LAN_USET_35', 'Wpisz pełny adres do grafiki');			// LAN_423
define('LAN_USET_36', 'Kliknij przycisk, aby zobaczyć awatary dostępne na tej stronie');	// LAN_424
define('LAN_USET_37', 'Zapisz ustawienia');								// LAN_154 //TODO common LAN?
define('LAN_USET_38', 'Wybierz awatara');								// LAN_403
define('LAN_USET_39', 'Aktualizacja ustawień użytkownika');						// LAN_155
define('LAN_USET_40', 'Podane hasła nie są identyczne');			// LAN_105
define('LAN_USET_41', 'Ustawienia zaktualizowano i zapisano w bazie danych.');	// LAN_150 //TODO Common LAN?
define('LAN_USET_42', 'Niedopasowanie na kluczu walidacji');//Mismatch on validation key
define('LAN_USET_43', 'Błąd zapisu ustawień');

// BC for v1.x template
define("LAN_7", "Nick: ");
define("LAN_8", "Nazwa, która będzie wyświetlana na stronie");
define("LAN_9", "Login: ");
define("LAN_10", "Nazwa, która będzie używana podczas logowania");
define("LAN_112", "Adres E-mail: ");
define("LAN_113", "Ukryć adres e-mail?: ");
define("LAN_114", "Zablokuje wyświetlanie adresu e-mail na stronie");
define("LAN_120", "Sygnatura: ");
define("LAN_122", "Strefa czasowa:");
define("LAN_152", "Nowe hasło: ");
define("LAN_153", "Powtórz hasło: ");
define("LAN_154", "Zapisz ustawienia");
define("LAN_308", "Prawdziwe imię: ");
define("LAN_401", "Pozostaw puste, aby zachować istniejące hasło");
define("LAN_404", "Uwaga: Wszystkie elementy graficzne przesłane na ten serwer, które zostaną uznane przez administratorów za nieodpowiednie, zostaną natychmiast skasowane.");
define("LAN_414", "Prześlij swoje zdjęcie");
define("LAN_415", "Prześlij swojego awatara");
define("LAN_418", "Informacje rejestracyjne");
define("LAN_420", "Awatar");
define("LAN_421", "Wybierz dostępnego awatara");
define("LAN_422", "Pobieraj awatara z adresu");
define("LAN_423", "Wpisz pełny adres do grafiki");
define("LAN_424", "Kliknij przycisk, aby zobaczyć awatary dostępne na tej stronie");
define("LAN_425", "Zdjęcie");
define("LAN_426", "Zostanie wyświetlone na stronie Twojego profilu");
define("LAN_433", "Adres URL do Twojego pliku XUP");
define("LAN_434", "co to jest?");
define("LAN_435", "Plik XML User Protocol");
define("LAN_CUSTOMTITLE", "Dodatkowy opis");
define("LAN_USET_5", "Subskrypcja");
define("LAN_USET_6", "Zapisz się na naszą listę mailingową oraz do poszczególnych działów.");
//define("LAN_USET_8", "Sygnatura oraz strefa czasowa");
?>