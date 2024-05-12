<?php

/*
	Asatru PHP - Danish language file

	Extend this with your phrases
	
	Set variables with {variable-name}
*/

return [
	'_language_ident' => 'Danish',
	'workspace_title' => '{name} (' . env('APP_NAME') . ' v' . env('APP_VERSION') . ')',
	'enter_email' => 'Indsæt din e-mail',
	'enter_password' => 'Indsæt dit kodeord',
	'enter_password_confirmation' => 'Bekræft dit kodeord',
	'login' => 'Log ind',
	'logout' => 'Log ud',
	'user_not_found' => 'Bruger ikke fundet: {email}',
	'password_mismatch' => 'Kodeordene stemmer ikke overens',
	'password' => 'Kodeord',
	'password_confirmation' => 'Kodeord (Bekræftelse)',
	'restore_password' => 'Gendan kodeord',
	'restore_password_info' => 'Følg venligst instruktionerne der er blevet sendt til din E-Mail konto.',
	'reset_password' => 'Nulstil kodeord',
	'reset_password_hint' => 'Naviger venligst til det følgende link, for at nulstille dit kodeord, for at kunne tilgå {workspace}: <a href="{url}">Nulstil kodeord</a>',
	'dashboard' => 'Panel',
	'welcome_message' => 'Hej {name}, velkommen tilbage!',
	'locations' => 'Lokationer',
	'select_location_to_proceed' => 'Vælg en lokation for at se de associerede planter',
	'plants' => 'Planter',
	'add_plant' => 'Tilføj Plante',
	'add_plant_short' => 'Tilføj',
	'edit_plant' => 'Rediger Plante',
	'attribute' => 'Attribut',
	'value' => 'Værdi',
	'location' => 'Lokation',
	'last_watered' => 'Sidst vandet',
	'last_repotted' => 'Sidst ompottet',
	'last_fertilised' => 'Sidst gødet',
	'perennial' => 'Flerårig',
	'annual' => 'Årlig',
	'cutting_month' => 'Skæring måned',
	'date_of_purchase' => 'Købsdato',
	'humidity' => 'Fugtighed',
	'light_level' => 'Lys niveau',
	'health_state' => 'Helbreds stadie',
	'in_good_standing' => 'I God Stand',
	'overwatered' => 'Overvandet',
	'withering' => 'Visnende',
	'infected' => 'Inficeret',
	'pest_infestation' => 'Skadedyrsangreb',
	'transplant_shock' => 'Transplantation Chok',
	'nutritional_deficiency' => 'Ernæringsmæssig Mangel',
	'sunburn' => 'Solbrændt',
	'frostbite' => 'Forfrysning',
	'root_rot' => 'Rod Rådner',
	'plant_warning' => 'Advarsel: Denne plante behøver særligt opsyn. Begrundelse: {reason}',
	'notes' => 'Noter',
	'no_notes_specified' => 'Ingen noter specificeret endnu',
	'select_month' => '- Vælg måned -',
	'select_light_level' => '- Vælg lys niveau -',
	'january' => 'Januar',
	'february' => 'Februar',
	'march' => 'Marts',
	'april' => 'April',
	'may' => 'Maj',
	'june' => 'Juni',
	'july' => 'Juli',
	'august' => 'August',
	'september' => 'September',
	'october' => 'Oktober',
	'november' => 'November',
	'december' => 'December',
	'yes' => 'Ja',
	'no' => 'Nej',
	'back_to_list' => 'Tilbage til liste',
	'back_to_dashboard' => 'Tilbage til dashboard',
	'name' => 'Navn',
	'email' => 'E-Mail',
	'photo' => 'Billede',
	'add' => 'Tilføj',
	'cancel' => 'Annuller',
	'last_edited_by' => 'Sidst redigeret: {when} (af {name})',
	'edit_property' => 'Rediger egenskab',
	'save' => 'Gem',
	'light_level_sunny' => 'Solrig',
	'light_level_half_shade' => 'Halv-Skygge',
	'light_level_full_shade' => 'Fuld Skygge',
	'warning_plants_title' => 'De følgende planter behøver særligt opmærksomhed',
	'warning_plants_all_ok' => 'Hurra! Ingen planter er på nuværende tidspunkt truet',
	'view_plant_details' => 'Vis plante detaljer',
	'log_title' => 'Log',
	'loading_please_wait' => 'Vent venligst...',
	'error' => 'Fejl',
	'photos' => 'Billeder',
	'no_photos_yet' => 'There are currently no additional photos uploaded',
	'upload' => 'Upload',
	'upload_photo' => 'Upload billede',
	'label' => 'Label',
	'confirmPhotoRemoval' => 'Er du sikker på at du vil fjerne dette billede?',
	'users' => 'Brugere',
	'photo_uploaded_successfully' => 'Billede blev uploadet succesfuldt',
	'success' => 'Succes',
	'profile' => 'Profil',
	'profile_hint' => 'Logget ind som {name} ({email})',
	'last_authored_plants' => 'Sidst forfattet planter',
	'search' => 'Søg',
	'search_hint' => 'Søg gennem databasen',
	'input_search' => 'Indsæt tekst at søge efter',
	'search_name' => 'Inkluder navne i søgning',
	'search_scientific_name' => 'Inkluder videnskabelig navne i søgning',
	'search_tags' => 'Inkluder tags i søgning',
	'search_notes' => 'Inkluder noter i søgning',
	'no_tags_specified' => 'Ingen tags specificeret endnu',
	'remove_plant' => 'Fjern plante',
	'confirmPlantRemoval' => 'Er du sikker på at du vil fjerne denne plante?',
	'tasks' => 'Opgaver',
	'tasks_hint' => 'Her kan du håndtere de påkrævede opgaver til dit plantepleje',
	'create_task' => 'Opret opgave',
	'create_new' => 'Opret ny',
	'title' => 'Titel',
	'description' => 'Beskrivelse',
	'task_created_successfully' => 'Opgave blev oprettet succesfuldt',
	'tasks_todo' => 'To-Do',
	'tasks_done' => 'Udført',
	'done' => 'Udført',
	'edit_task' => 'Rediger opgave',
	'task_edited_successfully' => 'Opgave blev redigeret succesfuldt',
	'scientific_name' => 'Videnskabeligt navn',
	'text' => 'Tekst',
	'link' => 'Link',
	'preferences' => 'Præferencer',
	'edit_preferences' => 'Rediger præferencer',
	'language' => 'Sprog',
	'show_log' => 'Vis log',
	'preferences_saved_successfully' => 'Præferencer blev gemt succesfuldt',
	'set_watered' => 'Sæt alle til vandet',
	'all_plants_watered' => 'Sidst vandet status er blevet opdateret for disse planter',
	'confirmSetAllWatered' => 'Er du sikker på at du vil opdatere sidst vandet datoen for alle disse planter?',
	'no_plants_found' => 'Der blev ikke fundet nogle planter, ved din søgnings forespørgsel',
	'inventory' => 'Inventar',
	'inventory_hint' => 'Håndter din inventar her',
	'group' => 'Gruppe',
	'confirmInventoryItemRemoval' => 'Er du sikker på du vil fjerne denne artikel?',
	'add_inventory_item' => 'Tilføj inventar artikel',
	'edit_inventory_item' => 'Rediger inventar artikel',
	'manage_groups' => 'Håndter grupper',
	'token' => 'Token',
	'close' => 'Luk',
	'chat' => 'Chat',
	'chat_hint' => 'Dette er gruppe chatten for arbejdsområdet',
	'send' => 'send',
	'new' => 'Ny',
	'chatcolor' => 'Brugernavn chat farve',
	'currentlyOnline' => 'Online lige nu: ',
	'no_photo_available' => 'Intet billede tilgængeligt',
	'due' => 'Forfalder',
	'overdue_tasks' => 'Forfaldne opgaver',
	'view_task_details' => 'Vis opgave detaljer',
	'admin_area' => 'Admin område',
	'environment' => 'Miljø',
	'workspace' => 'Arbejdsområde',
	'enable_scroller' => 'Enable scroller',
	'online_time_limit' => 'Online status tids grænse',
	'show_chat_onlineusers' => 'Vis brugere der er online lige nu',
	'show_chat_typingindicator' => 'Vis chat skrive indikator',
	'admin' => 'Admin',
	'create' => 'Opret',
	'update' => 'Opdater',
	'remove' => 'Fjern',
	'create_user' => 'Opret bruger',
	'account_created' => 'Konto oprettet',
	'account_created_hint' => 'Din konto til {workspace} blev lige oprettet. Venligst Your account for {workspace} was just created. Please <a href="{url}">login</a> with your e-mail and the password <strong>{password}</strong>. It is strongly recommended to change your password after logging in.',
	'environment_settings_saved' => 'Miljø indstillinger gemt succesfuldt',
	'user_created_successfully' => 'Ny bruger blev oprettet succesfuldt',
	'user_updated_successfully' => 'Bruger data succesfuldt opdateret',
	'user_removed_successfully' => 'Bruger kontoen blev fjernet succesfuldt',
	'confirm_user_removal' => 'Vil du virkelig fjerne denne bruger konto?',
	'sorting_type_name' => 'Alfabetisk',
	'sorting_type_last_watered' => 'Sidst vandet',
	'sorting_type_last_repotted' => 'Sidst ompottet',
	'sorting_type_last_fertilised' => 'Sidst gødet',
	'sorting_type_health_state' => 'Helbreds stadie',
	'sorting_type_perennial' => 'Flerårig',
	'sorting_type_annual' => 'Årlig',
	'sorting_type_light_level' => 'Lys Niveau',
	'sorting_type_humidity' => 'Fugtighed',
	'sorting_dir_asc' => 'Stigende',
	'sorting_dir_desc' => 'Faldende',
	'filter_by_text' => 'Filtrer efter tekst',
	'mail_info_task_overdue' => 'Opgave er forfaldnet',
	'mail_info_task_overdue_hint' => 'Opgaven <strong>{name}</strong> er forfaldnet! Forfalden dato: {date}. Gå til opgaver: <a href="{url}">{url}</a>',
	'notify_tasks_overdue' => 'Giv mig besked om forfaldne opgaver',
	'mail_info_task_tomorrow' => 'Opgave forfalder i morgen',
	'mail_info_task_tomorrow_hint' => 'Opgaven <strong>{name}</strong> forfalder i morgen. Forfalder dato: {date}. Gå til opgaver: <a href="{url}">{url}</a>',
	'notify_tasks_tomorrow' => 'Giv mig besked om opgaver der forfalder i morgen',
	'mail_info_calendar_reminder' => 'Kalender påmindelses information',
	'mail_info_calendar_reminder_hint' => 'Kalender artiklen <strong>{name}</strong> forfalder: {date_from} - {date_till}. Gå til kalender: <a href="{url}">{url}</a>',
	'notify_calendar_reminder' => 'Påmind mig om forfaldne kalender datoer',
	'cronpw' => 'Cronjob godkendelses token',
	'enable_chat' => 'Slå Chat til',
	'add_location' => 'Tilføj lokation',
	'icon' => 'Ikon',
	'active' => 'Aktiv',
	'location_added_successfully' => 'Lokation blev tilføjet succesfuldt',
	'location_updated_successfully' => 'Lokation blev opdateret succesfuldt',
	'location_migration' => 'Lokation at flytte planter til',
	'remove_location' => 'Fjern lokation',
	'location_removed_successfully' => 'Lokation blev succesfuldt fjernet',
	'check_for_new_version' => 'Søg efter ny version',
	'new_version_available' => 'Version {new_version} er tilgængelig. Få den <a href="{url}">her</a>.',
	'no_new_version_available' => 'Du bruger den nyeste version.',
	'admin_media' => 'Medier',
	'media_logo' => 'Arbejdsområde logo (.png billede)',
	'media_banner' => 'Arbejdsområde banner billede (.jpg)',
	'media_background' => 'Arbejdsområde baggrunds billede (.jpg)',
	'media_saved' => 'Medie blev gemt succesfuldt',
	'enable_history' => 'Slå historik til',
	'history_name' => 'Historik navn',
	'confirmPlantAddHistory' => 'Vil du udføre denne handling?',
	'confirmPlantRemoveHistory' => 'Vil du udføre denne handling?',
	'sorting_type_history_date' => 'Historik dato',
	'restore_from_history' => 'Gendan',
	'content_empty' => 'Det ser ret så tømt ud her...',
	'last_added_plants' => 'Sidst tilføjede planter',
	'last_authored_plants' => 'Sidst forfattede planter',
	'info' => 'Info',
	'hortusfox_version' => 'HortusFox v{version}',
	'php_version' => 'PHP Version: {version}',
	'mysql_version' => 'MySQL Version: {version}',
	'server_system_info' => 'Server: {osn} {osv} på {mt}',
	'server_timezone' => 'Tidszone: {time}',
	'render_time' => 'Render tid: {time}s',
	'background_overlay_alpha' => 'Overlay alpha værdig',
	'all_tasks_done' => 'Der er på nuværende tidspunkt ingen åbne opgaver',
	'last_added_or_updated_plants_hint' => 'Vælg nyeste planter mode',
	'show_plants_aoru_added' => 'Vis sidst tilføjede planter',
	'show_plants_aoru_updated' => 'Vis sidst forfattede planter',
	'mail' => 'Mail',
	'smtp_fromname' => 'E-Mail sender navn',
	'smtp_fromaddress' => 'E-Mail sender addresse',
	'smtp_host' => 'SMTP Host',
	'smtp_port' => 'SMTP Port',
	'smtp_username' => 'SMTP Brugernavn',
	'smtp_password' => 'SMTP Kodeord',
	'smtp_encryption' => 'SMTP Enkryptering',
	'personal_notes' => 'Personlige noter',
	'personal_notes_saved_successfully' => 'Dine personlige noter blev succesfuldt opdateret',
	'share_photo' => 'Del Billede',
	'share_photo_input' => 'Billede til at dele',
	'share_photo_title' => 'Titel',
	'share_photo_hint' => 'Dette vil offentliggøre dit billede på {url}, så du kan dele det med andre. Du får en bekræftelses e-mail når delingen lykkes.',
	'share' => 'Del',
	'copy_to_clipboard' => 'Kopier',
	'copied_to_clipboard' => 'Indhold er blevet kopieret til dit clipboard.',
	'mail_share_photo' => 'Noter på dit delte billede',
	'mail_share_photo_title' => 'Dit billede blev delt',
	'mail_share_photo_hint' => 'Dit billede er blevet delt succesfuldt!<br/><br/>Link til billede: {url_photo}<br/>Fjern billede link: {url_removal}',
	'enable_photo_share' => 'Slå billede deling til',
	'restore_password_email_placeholder' => 'Indtast din E-mail adresse',
	'search_for_location_icons' => 'Søg efter ikoner <a href="{url}" target="_blank">here</a>.',
	'upcoming_tasks_overview' => 'Kommende opgaver',
	'view_more' => 'Vis mere',
	'generate' => 'Generer',
	'generate_cronpw_hint' => 'Noter: Generere en ny token vil invalidere den nuværende',
	'confirmSetAllRepotted' => 'Er du sikker på at du vil opdatere den sidst ompottede dato for alle disse planter?',
	'all_plants_repotted' => 'Sidst ompottet status blev opdateret for disse planter',
	'set_repotted' => 'Sæt alle ompottet',
	'backup' => 'Backup',
	'gallery' => 'Galleri',
	'export' => 'Eksport',
	'import' => 'Import',
	'import_successful' => 'Import succesfuldt!',
	'pwa_enable' => 'Slå PWA support til',
	'home' => 'Hjem',
	'enable_system_messages' => 'Slå system messages til',
	'plant_count' => '{count} planter',
	'danger_count' => '{count} i fare',
	'all_in_good_standing' => 'Alt fint',
	'theme' => 'Tema',
	'themes' => 'Temaer',
	'confirm_generate_new_token' => 'Generere en ny token vil invalidere den tidligere. Vil du fortsætte?',
	'themes_hint' => 'Her kan du importere temaer. Vælg en zip-fil af dit tema du vil importere og så snart importen er fuldført, vil temaet blive tilgængeligt til alle brugere. Noter: Hvis zip-filen indeholder flere temaer, vil systemet prøve at importere alle.',
	'theme_import_successful' => 'Importen var succesfuld. Importeret temaer: {count}',
	'theme_list' => 'Liste af installerede temaer',
	'confirm_theme_removal' => 'Er du sikker på du vil fjerne dette tema?',
	'send_confirmation_email' => 'Send bekræftelses E-Mail',
	'create_your_first_location' => 'Der er ingen lokationer tilføjet endnu. Vær venlig at <a href="{url}">Opret din første lokation</a> for at tilføje planter.',
	'error_room_not_empty' => 'Lokationen er ikke tom. Du bliver nød til at oprette en anden lokation at migrere planterne til, eller slette alle planterne på lokationen, før du kan slette denne lokation.',
	'extensions' => 'Udvidelser',
	'expand' => 'Udvid',
	'collapse' => 'Kollaps',
	'theme_name' => 'Navn',
	'theme_version' => 'Version',
	'theme_author' => 'Forfatter',
	'theme_contact' => 'Kontakt',
	'all' => 'Alle',
	'user_created_password' => 'Bruger kodeord: <strong>{pw}</strong>. Send venligst dette kodeord til brugeren og informer dem om at skifte det efter at logge ind.',
	'calendar' => 'Kalender',
	'calendar_hint' => 'Her kan du håndtere vigtige datoer',
	'range' => 'Udvalg',
	'go' => 'Gå',
	'add_calendar_item' => 'Tilføj begivenhed',
	'date_from' => 'Dato fra',
	'date_till' => 'Dato til',
	'calendar_item_added' => 'Begivenheden blev tilføjet succesfuldt',
	'calendar_class' => 'Klasse',
	'calendar_class_water' => 'Vanding',
	'calendar_class_repot' => 'Ompotning',
	'calendar_class_fertilise' => 'Gødning',
	'calendar_class_purchase' => 'Køb',
	'calendar_class_cut' => 'Klipning',
	'calendar_class_treat' => 'Behandling',
	'calendar_class_harvest' => 'Høst',
	'calendar_class_other' => 'Andet',
	'edit_calendar_item' => 'Rediger begivenheden',
	'calendar_item_edited' => 'Begivenheden blev redigeret succesfuldt',
	'timespan_select' => '- Vælg Udvalg -',
	'timespan_one_week' => 'En Uge',
	'timespan_two_weeks' => 'To Uger',
	'timespan_one_month' => 'En Måned',
	'timespan_three_months' => 'Tre Måneder',
	'timespan_half_a_year' => 'Halvt år',
	'remove_calendar_item' => 'Fjern begivenhed',
	'confirm_remove_calendar_item' => 'Er du sikker på at du vil fjerne denne begivenhed?',
	'calendar_overview' => 'Datoer for den næste uge',
	'show_calendar_view' => 'Vis kalender visning på panelet',
	'unknown_calendar_class' => 'Ukendt',
	'add_calendar_class' => 'Tilføj kalender klasse',
	'calendar_class_ident' => 'Ident',
	'calendar_class_name' => 'Navn',
	'calendar_class_color_background' => 'Baggrunds farve',
	'calendar_class_color_border' => 'Kant farve',
	'calendar_class_added_successfully' => 'Kalender klasse blev succesfuldt tilføjet',
	'calendar_class_edited_successfully' => 'Kalender klasse blev succesfuldt redigeret',
	'confirm_remove_calendar_class' => 'Er du sikker på at du vil fjerne denne kalender klasse?',
	'clone_plant' => 'Klon plante',
	'show_qr_code' => 'Vis QR-Kode',
	'qr_code' => 'QR-Kode',
	'print' => 'Print',
	'bulk_print_qr_codes' => 'Print QR Koder',
	'bulk_qrcodes' => 'Bulk QR-Code printning',
	'select_all' => 'Vælg alle',
	'unselect_all' => 'Fravælg alle',
	'noListItemsSelected' => 'Ingen felter valgt',
	'set_fertilised' => 'Sæt alle gødet',
	'confirmSetAllFertilised' => 'Er du sikker på at du vil opdatere sidst gødet dato for alle disse planter?',
	'all_plants_fertilised' => 'Sidst gødet status blev opdateret for disse planter',
	'media_sound_message' => 'Ny-Besked lyd',
	'location_fmt' => 'Lokation: {loc}',
	'weather' => 'Vejr',
	'enable_weather' => 'Slå OpenWeatherMap til',
	'weather_api_key' => 'API Nøgle',
	'weather_latitude' => 'Latitude',
	'weather_longitude' => 'Longitude',
	'weather_autodetect_latlong' => 'Detekter Geolokation',
	'weather_hint' => 'Vis den nuværende vejr prognose for {region}',
	'weather_unittype' => 'Enhed type',
	'weather_cache' => 'Cache varighed (sekunder)',
	'monday' => 'Mandag',
	'tuesday' => 'Tirsdag',
	'wednesday' => 'Onsdag',
	'thursday' => 'Torsdag',
	'friday' => 'Fredag',
	'saturday' => 'Lørdag',
	'sunday' => 'Søndag',
	'api' => 'API',
	'api_key_added' => 'Ny API nøgle blev succesfuldt tilføjet',
	'api_key_removed' => 'API key blev succesfuldt fjernet',
	'toggle' => 'Slå til/fra',
	'confirm_remove_api_key' => 'Vil du virkelig fjerne denne API nøgle?',
	'add_custom_attribute' => 'Tilføj tilpasset attribut',
	'datatype' => 'Datatype',
	'content' => 'Indhold',
	'edit_custom_attribute' => 'Rediger tilpasset attribut',
	'remove_custom_attribute' => 'Fjern attribut',
	'confirm_remove_custom_attribute' => 'Vil du virkelig fjerne denne attribut?',
	'timezone' => 'Tidszone',
	'attributes' => 'Egenskaber',
	'attributes_hint' => 'Her kan du vælge, hvilke standard anlægsattributter, der skal være tilgængelige.'
];
