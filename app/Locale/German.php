<?php

namespace App\Locale;

use App\Contracts\Language;

final class German implements Language
{
	public function code(): string
	{
		return 'de';
	}

	public function get_locale(): array
	{
		$locale = [
			'USERNAME' => 'Benutzername',
			'PASSWORD' => 'Kennwort',
			'ENTER' => 'Eingabe',
			'CANCEL' => 'Abbrechen',
			'SIGN_IN' => 'Anmelden',
			'CLOSE' => 'Schließen',
			'SETTINGS' => 'Einstellungen',
			'SEARCH' => 'Suchen ...',
			'MORE' => 'Mehr',
			'DEFAULT' => 'Standard',

			'USERS' => 'Benutzer',
			'ALLOW_UPLOAD' => 'Allow uploads',
			'RESTRICTED_ACCOUT' => 'Restricted account',
			'CREATE' => 'Create',
			'USERS_EMPTY' => 'User list is empty!',
			'U2F' => 'U2F',
			'NOTIFICATIONS' => 'Notifications',
			'SHARING' => 'Freigabe',
			'SHARING_EMPTY' => 'Sharing list is empty!',
			'SHARING_WITH' => 'with',
			'SHARING_SHARE' => 'Share',
			'SHARING_UNDO' => 'undo',
			'SHARING_REDO' => 'redo',
			'CHANGE_LOGIN' => 'Anmeldung ändern',
			'CHANGE_SORTING' => 'Sortierung ändern',
			'SET_DROPBOX' => 'Dropbox einrichten',
			'ABOUT_LYCHEE' => 'Über Lychee',
			'DIAGNOSTICS' => 'Diagnose',
			'DIAGNOSTICS_GET_SIZE' => 'Speicherplatz-Nutzung abrufen',
			'LOGS' => 'Logs anzeigen',
			'CLEAN_LOGS' => 'Clean Noise',
			'CLEAR' => 'Clear',
			'SIGN_OUT' => 'Abmelden',
			'UPDATE_AVAILABLE' => 'Update verfügbar!',
			'MIGRATION_AVAILABLE' => 'Migration verfügbar!',
			'DEFAULT_LICENSE' => 'Standard-Lizenz für neue Uploads:',
			'SET_LICENSE' => 'Lizenz anwenden',
			'SET_OVERLAY_TYPE' => 'Setze Overlay',
			'SET_MAP_PROVIDER' => 'Speichere Provider für OpenStreetMap Karten',
			'FULL_SETTINGS' => 'Full Settings',
			'UPDATE' => 'Update',

			'SAVE_RISK' => 'Änderungen speichern, ich kenne das Risiko!',

			'SMART_ALBUMS' => 'Intelligente Alben',
			'SHARED_ALBUMS' => 'Freigegebene Alben',
			'ALBUMS' => 'Alben',
			'PHOTOS' => 'Bilder',
			'SEARCH_RESULTS' => 'Suchergebnisse',

			'RENAME' => 'Umbenennen',
			'RENAME_ALL' => 'Ausgewählte umbenennen',
			'MERGE' => 'Zusammenführen',
			'MERGE_ALL' => 'Ausgewählte zusammenführen',
			'MAKE_PUBLIC' => 'Veröffentlichen',
			'SHARE_ALBUM' => 'Album freigeben',
			'SHARE_PHOTO' => 'Foto freigeben',
			'VISIBILITY_ALBUM' => 'Sichtbarkeit des Albums',
			'VISIBILITY_PHOTO' => 'Sichtbarkeit des Fotos',
			'DOWNLOAD_ALBUM' => 'Album herunterladen',
			'ABOUT_ALBUM' => 'Über dieses Album',
			'DELETE_ALBUM' => 'Album löschen',
			'MOVE_ALBUM' => 'Album verschieben',
			'FULLSCREEN_ENTER' => 'Vollbild',
			'FULLSCREEN_EXIT' => 'Vollbild beenden',

			'SHARING_ALBUM_USERS' => 'Teile dieses Album mit Benutzern',
			'WAIT_FETCH_DATA' => 'Bitte warten Sie, während die Daten abgerufen werden...',
			'SHARING_ALBUM_USERS_NO_USERS' => 'Es sind keine Benutzer vorhanden, mit denen das Album geteilt werden kann',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Wählen Sie die Benutzer aus, mit denen das Album geteilt werden soll',

			'DELETE_ALBUM_QUESTION' => 'Album und Fotos löschen',
			'KEEP_ALBUM' => 'Album behalten',
			'DELETE_ALBUM_CONFIRMATION_1' => 'Sind Sie sicher, dass Sie das Album',
			'DELETE_ALBUM_CONFIRMATION_2' => 'und alle enthaltenen Fotos löschen wollen? Diese Aktion kann nicht rückgängig gemacht werden!',

			'DELETE_ALBUMS_QUESTION' => 'Alben und Fotos löschen',
			'KEEP_ALBUMS' => 'Alben behalten',
			'DELETE_ALBUMS_CONFIRMATION_1' => 'Sind Sie sicher, dass Sie alle',
			'DELETE_ALBUMS_CONFIRMATION_2' => 'ausgewählten Alben und die enthaltenen Fotos löschen wollen? Diese Aktion kann nicht rückgängig gemacht werden!',

			'DELETE_UNSORTED_CONFIRM' => 'Sind Sie sicher, dass Sie alle Fotos aus \'Unsortiert\' löschen wollen?<br>Diese Aktion kann nicht rückgängig gemacht werden!',
			'CLEAR_UNSORTED' => 'Unsortierte löschen',
			'KEEP_UNSORTED' => 'Unsortierte behalten',

			'EDIT_SHARING' => 'Freigabe bearbeiten',
			'MAKE_PRIVATE' => 'Privat',

			'CLOSE_ALBUM' => 'Album schließen',
			'CLOSE_PHOTO' => 'Foto schließen',
			'CLOSE_MAP' => 'Karte schließen',

			'ADD' => 'Hinzufügen',
			'MOVE' => 'Verschieben',
			'MOVE_ALL' => 'Ausgewählte verschieben',
			'DUPLICATE' => 'Duplizieren',
			'DUPLICATE_ALL' => 'Ausgewählte duplizieren',
			'COPY_TO' => 'Kopieren nach...',
			'COPY_ALL_TO' => 'Ausgewählte kopieren nach...',
			'DELETE' => 'Löschen',
			'SAVE' => 'Save',
			'DELETE_ALL' => 'Ausgewählte löschen',
			'DOWNLOAD' => 'Herunterladen',
			'DOWNLOAD_ALL' => 'Ausgewählte herunterladen',
			'UPLOAD_PHOTO' => 'Foto hochladen',
			'IMPORT_LINK' => 'Aus Link importieren',
			'IMPORT_DROPBOX' => 'Aus Dropbox importieren',
			'IMPORT_SERVER' => 'Von Server importieren',
			'NEW_ALBUM' => 'Neues Album',
			'NEW_TAG_ALBUM' => 'Neues Tag-Album',
			'UPLOAD_TRACK' => 'Track hochladen',
			'DELETE_TRACK' => 'Track löschen',

			'TITLE_NEW_ALBUM' => 'Geben Sie einen Titel für das neue Album ein:',
			'UNTITLED' => 'Unbenannt',
			'UNSORTED' => 'Unsortiert',
			'STARRED' => 'Favoriten',
			'RECENT' => 'Zuletzt benutzt',
			'PUBLIC' => 'Öffentlich',
			'NUM_PHOTOS' => 'Fotos',

			'CREATE_ALBUM' => 'Album erstellen',
			'CREATE_TAG_ALBUM' => 'Neues Tag-Album erstellen',

			'STAR_PHOTO' => 'Foto als Favorit markieren',
			'STAR' => 'Als Favorit markieren',
			'UNSTAR' => 'Als Favorit demarkieren',
			'STAR_ALL' => 'Ausgewählte als Favoriten markieren',
			'UNSTAR_ALL' => 'Ausgewählte als Favoriten demarkieren',
			'TAGS' => 'Taggen',
			'TAGS_ALL' => 'Ausgewählte Taggen',
			'UNSTAR_PHOTO' => 'Foto von Favoriten entfernen',
			'SET_COVER' => 'Setze Album Cover',
			'REMOVE_COVER' => 'Entferne Album Cover',

			'FULL_PHOTO' => 'Original öffnen',
			'ABOUT_PHOTO' => 'Über dieses Foto',
			'DISPLAY_FULL_MAP' => 'Karte',
			'DIRECT_LINK' => 'Direkter Link',
			'DIRECT_LINKS' => 'Direkte Links',
			'QR_CODE' => 'QR-Code',

			'ALBUM_ABOUT' => 'Über',
			'ALBUM_BASICS' => 'Grundlegende Informationen',
			'ALBUM_TITLE' => 'Titel',
			'ALBUM_NEW_TITLE' => 'Geben Sie einen neuen Titel für dieses Album ein:',
			'ALBUMS_NEW_TITLE_1' => 'Geben Sie einen Titel für alle',
			'ALBUMS_NEW_TITLE_2' => 'ausgewählten Alben ein:',
			'ALBUM_SET_TITLE' => 'Titel speichern',
			'ALBUM_DESCRIPTION' => 'Beschreibung',
			'ALBUM_SHOW_TAGS' => 'Tags zum anzeigen',
			'ALBUM_NEW_DESCRIPTION' => 'Geben Sie eine neue Beschreibung für dieses Album ein:',
			'ALBUM_SET_DESCRIPTION' => 'Beschreibung speichern',
			'ALBUM_NEW_SHOWTAGS' => 'Gebe Tags der Bilder ein, die in diesem Album sichtbar sein sollen:',
			'ALBUM_SET_SHOWTAGS' => 'Setze Tags zum anschauen',
			'ALBUM_ALBUM' => 'Album',
			'ALBUM_CREATED' => 'Erstellt',
			'ALBUM_IMAGES' => 'Bilder',
			'ALBUM_VIDEOS' => 'Videos',
			'ALBUM_SUBALBUMS' => 'Unteralben',
			'ALBUM_SHARING' => 'Teilen',
			'ALBUM_SHR_YES' => 'Ja',
			'ALBUM_SHR_NO' => 'Nein',
			'ALBUM_PUBLIC' => 'Öffentlich',
			'ALBUM_PUBLIC_EXPL' => 'Dieses Album kann, abhängig von den Einstellungen unten, von anderen betrachtet werden.',
			'ALBUM_FULL' => 'Original',
			'ALBUM_FULL_EXPL' => 'Original Bilder sind verfügbar.',
			'ALBUM_HIDDEN' => 'Versteckt',
			'ALBUM_HIDDEN_EXPL' => 'Nur Personen mit dem direkten Link können dieses Album ansehen.',
			'ALBUM_MARK_NSFW' => 'Markiere Album als sensibel',
			'ALBUM_UNMARK_NSFW' => 'Entferne Markierung des Albums als sensibel',
			'ALBUM_NSFW' => 'Sensibel',
			'ALBUM_NSFW_EXPL' => 'Album enthält sensible Inhalte.',
			'ALBUM_DOWNLOADABLE' => 'Zum Herunterladen',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Besucher können dieses Album herunterladen.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Teilen-Button ist sichtbar',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Zeige Links zum Teilen in sozialen Medien .',
			'ALBUM_PASSWORD' => 'Kennwort',
			'ALBUM_PASSWORD_PROT' => 'Kennwortgeschützt',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Album nur einsehbar mit gültigem Kennwort.',
			'ALBUM_PASSWORD_REQUIRED' => 'Dieses Album ist mit einem Kennwort geschützt. Geben Sie unten das Kennwort ein, um das Album anzusehen:',
			'ALBUM_MERGE_1' => 'Sind Sie sicher, dass Sie das Album',
			'ALBUM_MERGE_2' => 'mit diesem Album zusammenführen wollen',
			'ALBUMS_MERGE' => 'Sind Sie sicher, dass Sie alle ausgewählten Alben mit diesem Album zusammenführen möchten?',
			'MERGE_ALBUM' => 'Alben zusammenführen',
			'DONT_MERGE' => 'Nicht zusammenführen',
			'ALBUM_MOVE_1' => 'Sind Sie sicher, dass Sie das Album',
			'ALBUM_MOVE_2' => 'in folgendes Album verschieben möchten?',
			'ALBUMS_MOVE' => 'Sind Sie sicher, dass Sie die ausgewählten Alben in folgendes Album verschieben wollen?',
			'MOVE_ALBUMS' => 'Alben verschieben',
			'NOT_MOVE_ALBUMS' => 'Nicht verschieben',
			'ROOT' => 'Alben',
			'ALBUM_REUSE' => 'Weiterverwendung',
			'ALBUM_LICENSE' => 'Lizenz',
			'ALBUM_SET_LICENSE' => 'Lizenz festlegen',
			'ALBUM_LICENSE_HELP' => 'Benötigen Sie Hilfe bei der Auswahl?',
			'ALBUM_LICENSE_NONE' => 'Keine',
			'ALBUM_RESERVED' => 'Alle Rechte vorbehalten',
			'ALBUM_SET_ORDER' => 'Reihenfolge festlegen',
			'ALBUM_ORDERING' => 'Sortieren nach',
			'ALBUM_OWNER' => 'Owner',

			'PHOTO_ABOUT' => 'Über',
			'PHOTO_BASICS' => 'Grundlegende Informationen',
			'PHOTO_TITLE' => 'Titel',
			'PHOTO_NEW_TITLE' => 'Geben Sie einen neuen Titel für dieses Foto ein:',
			'PHOTO_SET_TITLE' => 'Titel speichern',
			'PHOTO_UPLOADED' => 'Hochgeladen',
			'PHOTO_DESCRIPTION' => 'Beschreibung',
			'PHOTO_NEW_DESCRIPTION' => 'Geben Sie eine neue Beschreibung für dieses Foto ein:',
			'PHOTO_SET_DESCRIPTION' => 'Beschreibung speichern',
			'PHOTO_NEW_LICENSE' => 'Neue Lizenz hinzufügen',
			'PHOTO_SET_LICENSE' => 'Lizenz festlegen',
			'PHOTO_LICENSE' => 'Lizenz',
			'PHOTO_LICENSE_HELP' => 'Need help choosing?',
			'PHOTO_REUSE' => 'Weiterverwendung',
			'PHOTO_LICENSE_NONE' => 'Keine',
			'PHOTO_RESERVED' => 'Alle Rechte vorbehalten',
			'PHOTO_LATITUDE' => 'Breite',
			'PHOTO_LONGITUDE' => 'Länge',
			'PHOTO_ALTITUDE' => 'Höhe',
			'PHOTO_IMGDIRECTION' => 'Richtung',
			'PHOTO_LOCATION' => 'Ort',
			'PHOTO_IMAGE' => 'Bild',
			'PHOTO_VIDEO' => 'Video',
			'PHOTO_SIZE' => 'Größe',
			'PHOTO_FORMAT' => 'Format',
			'PHOTO_RESOLUTION' => 'Auflösung',
			'PHOTO_DURATION' => 'Dauer',
			'PHOTO_FPS' => 'Bilder pro Sekunde',
			'PHOTO_TAGS' => 'Tags',
			'PHOTO_NOTAGS' => 'Keine Tags',
			'PHOTO_NEW_TAGS' => 'Geben Sie die Tags für dieses Foto ein. Sie können mehrere Tags hinzufügen, indem Sie sie mit einem Komma trennen:',
			'PHOTO_NEW_TAGS_1' => 'Geben Sie die Tags für alle',
			'PHOTO_NEW_TAGS_2' => 'ausgewählten Fotos ein. Bestehende Tags werden überschrieben. Sie können mehrere Tags hinzufügen, indem Sie sie mit einem Komma trennen:',
			'PHOTO_SET_TAGS' => 'Tags speichern',
			'PHOTO_CAMERA' => 'Kamera',
			'PHOTO_CAPTURED' => 'Aufgenommen',
			'PHOTO_MAKE' => 'Marke',
			'PHOTO_TYPE' => 'Typ/Modell',
			'PHOTO_LENS' => 'Objektiv',
			'PHOTO_SHUTTER' => 'Verschlusszeit',
			'PHOTO_APERTURE' => 'Blende',
			'PHOTO_FOCAL' => 'Brennweite',
			'PHOTO_ISO' => 'ISO',
			'PHOTO_SHARING' => 'Teilen',
			'PHOTO_SHR_PLUBLIC' => 'Öffentlich',
			'PHOTO_SHR_ALB' => 'Ja (Album)',
			'PHOTO_SHR_PHT' => 'Ja (Foto)',
			'PHOTO_SHR_NO' => 'Nein',
			'PHOTO_DELETE' => 'Foto löschen',
			'PHOTO_KEEP' => 'Foto behalten',
			'PHOTO_DELETE_1' => 'Sind Sie sicher, dass Sie das Foto',
			'PHOTO_DELETE_2' => 'löschen wollen? Diese Aktion kann nicht rückgängig gemacht werden!',
			'PHOTO_DELETE_ALL_1' => 'Sind Sie sicher, dass Sie alle',
			'PHOTO_DELETE_ALL_2' => 'ausgewählten Fotos löschen wollen? Diese Aktion kann nicht rückgängig gemacht werden!',
			'PHOTOS_NEW_TITLE_1' => '',
			'PHOTOS_NEW_TITLE_2' => 'ausgewählten Fotos ein:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Dieses Foto befindet sich in einem öffentlichen Album. Um dieses Foto als privat oder öffentlich zu markieren, bearbeiten Sie die Sichtbarkeit des übergeordneten Albums.',
			'PHOTO_SHOW_ALBUM' => 'Album anzeigen',
			'PHOTO_PUBLIC' => 'Öffentlich',
			'PHOTO_PUBLIC_EXPL' => 'Fotos können, abhängig von den Einstellungen unten, von anderen betrachtet werden.',
			'PHOTO_FULL' => 'Original',
			'PHOTO_FULL_EXPL' => 'Original Bild verfügbar.',
			'PHOTO_HIDDEN' => 'Versteckt',
			'PHOTO_HIDDEN_EXPL' => 'Nur Besucher mit dem direkten Link können dieses Foto sehen.',
			'PHOTO_DOWNLOADABLE' => 'Herunterladbar',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Besucher der Gallerie können dieses Foto herunterladen.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Teilen-Button ist sichtbar',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Zeige Links zum Teilen in sozialen Medien.',
			'PHOTO_PASSWORD_PROT' => 'Passwortgeschützt',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Foto nur mit gültigen Passwort verfügbar.',
			'PHOTO_EDIT_SHARING_TEXT' => 'Die Einstellungen zum Teilen des Foto werden wie folgt angepasst:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Dieses Foto ist in einem öffentlichen Album und erbt deshalb die Sichtbarkeitseinstellungen des Albums. Die aktuellen Sichtbarkeitseinstellungen werden unten nur zur Info dargestellt.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'Die Sichtbarkeit dieses Fotos kann über die globalen Lychee Einstellungen modifiziert werden. Die aktuellen Sichtbarkeitseinstellungen werden unten nur zur Info dargestellt.',
			'PHOTO_SHARING_CONFIRM' => 'Speichern',

			'LOADING' => 'Laden',
			'ERROR' => 'Fehler',
			'ERROR_TEXT' => 'Hoppla, da ist etwas schiefgegangen. Bitte laden Sie die Seite erneut und probieren Sie es noch einmal!',
			'ERROR_DB_1' => 'Kann keine Verbindung zur Datenbank herstellen, weil der Zugriff verweigert wurde. Überprüfen Sie Host, Benutzername und Kennwort und stellen Sie sicher, dass der Zugriff von Ihrem momentanen Standort erlaubt ist.',
			'ERROR_DB_2' => 'Kann die Datenbank nicht erstellen. Überprüfen Sie Host, Benutzername und Kennwort und stellen Sie sicher, dass der angegebene Benutzer Inhalte zur Datenbank hinzufügen darf.',
			'ERROR_CONFIG_FILE' => "Kann diese Konfiguration nicht speichern. Zugriff verweigert auf <b>'data/'</b>. Bitte setzen Sie die Schreibrechte auf <b>'data/'</b> and <b>'uploads/'</b>. Lesen Sie die README-Datei für mehr Informationen.",
			'ERROR_UNKNOWN' => 'Etwas Unerwartetes ist passiert. Bitte probieren Sie es erneut und überprüfen Sie die Installation und Ihren Server. Lesen Sie die README-Datei für mehr Informationen.',
			'ERROR_LOGIN' => 'Kann Login nicht speichern. Bitte versuchen Sie es erneut mit einem anderen Benutzernamen und Kennwort!',
			'ERROR_MAP_DEACTIVATED' => 'Karten sind unter Einstellungen deaktiviert worden.',
			'ERROR_SEARCH_DEACTIVATED' => 'Suchfunktion wurde unter Einstellungen deaktiviert.',
			'SUCCESS' => 'OK',
			'RETRY' => 'Noch einmal versuchen',

			'SETTINGS_WARNING' => 'Ändern dieser erweiterten Einstellungen kann sich negativ auf die Stabilität, Sicherheit und Geschwindigkeit dieser Anwendung auswirken. Sie sollten sie nur ändern, wenn Sie genau wissen, was Sie tun.',
			'SETTINGS_SUCCESS_LOGIN' => 'Benutzerdaten aktualisiert',
			'SETTINGS_SUCCESS_SORT' => 'Sortierreihenfolge aktualisiert',
			'SETTINGS_SUCCESS_DROPBOX' => 'Dropbox-Schlüssel aktualisiert',
			'SETTINGS_SUCCESS_LANG' => 'Sprache aktualisiert',
			'SETTINGS_SUCCESS_LAYOUT' => 'Layout aktualisiert',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'EXIF-Overlay-Einstellungen aktualisiert',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Öffentliche Suche geändert',
			'SETTINGS_SUCCESS_LICENSE' => 'Standard-Lizenz aktualisiert',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Karteneinstellungen erfolgreich aktualisiert',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Karteneinstellungen für öffentlichen Alben erfolgreich aktualisiert',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Provider für Karten erfolgreich aktualisiert',
			'SETTINGS_SUCCESS_CSS' => 'CSS aktualisiert',
			'SETTINGS_SUCCESS_UPDATE' => 'Einstellungen erfolgreich aktualisiert',
			'SETTINGS_DROPBOX_KEY' => 'Dropbox API Key',

			'U2F_NOT_SUPPORTED' => 'U2F wird nicht unterstützt. Sorry.',
			'U2F_NOT_SECURE' => 'Umgebung ist nicht sicher. U2F ist nicht verfügbar.',
			'U2F_REGISTER_KEY' => 'Neues Gerät registrieren.',
			'U2F_REGISTRATION_SUCCESS' => 'Registrierung erfolgreich!',
			'U2F_AUTHENTIFICATION_SUCCESS' => 'Authentifizierung erfolgreich!',
			'U2F_CREDENTIALS' => 'Anmeldedaten',
			'U2F_CREDENTIALS_DELETED' => 'Anmeldedaten gelöscht!',
			'U2F_NO_CREDENTIALS' => 'Credentials list is empty!',

			'NEW_PHOTOS_NOTIFICATION' => 'Send new photos notification emails.',
			'SETTINGS_SUCCESS_NEW_PHOTOS_NOTIFICATION' => 'New photos notification updated',
			'USER_EMAIL_INSTRUCTION' => 'Add your email below to enable receiving email notifications.<br />To stop receiving emails, simply remove your email below.',

			'DB_INFO_TITLE' => 'Geben Sie die Informationen zu Ihrer Datenbankverbindung an:',
			'DB_INFO_HOST' => 'Name des Datenbankservers (optional)',
			'DB_INFO_USER' => 'Benutzername für die Datenbank',
			'DB_INFO_PASSWORD' => 'Kennwort für die Datenbank',
			'DB_INFO_TEXT' => 'Lychee wird seine eigene Datenbank erstellen. Falls erforderlich, können Sie stattdessen den Namen einer bestehenden Datenbank angeben:',
			'DB_NAME' => 'Name der Datenbank (optional)',
			'DB_PREFIX' => 'Präfix für den Tabellennamen (optional)',
			'DB_CONNECT' => 'Verbinden',

			'LOGIN_TITLE' => 'Geben Sie Benutzername und Kennwort für Ihre Installation an:',
			'LOGIN_USERNAME' => 'Neuer Benutzername',
			'LOGIN_PASSWORD' => 'Neues Kennwort',
			'LOGIN_PASSWORD_CONFIRM' => 'Confirm Password',
			'LOGIN_CREATE' => 'Benutzer anlegen',

			'PASSWORD_TITLE' => 'Geben Sie Ihr bestehendes Kennwort ein:',
			'USERNAME_CURRENT' => 'Bestehender Benutzername',
			'PASSWORD_CURRENT' => 'Bestehendes Kennwort',
			'PASSWORD_TEXT' => 'Ihr Benutzername und Passwort werden wie folgt geändert:',
			'PASSWORD_CHANGE' => 'Benutzer ändern',

			'EDIT_SHARING_TITLE' => 'Freigabe bearbeiten',
			'EDIT_SHARING_TEXT' => 'Die Freigabeeinstellungen für dieses Album werden wie folgt geändert:',
			'SHARE_ALBUM_TEXT' => 'Dieses Album wird mit folgenden Einstellungen freigegeben:',
			'ALBUM_SHARING_CONFIRM' => 'Speichern',

			'SORT_ALBUM_BY_1' => 'Alben sortieren nach',
			'SORT_ALBUM_BY_2' => 'in einer',
			'SORT_ALBUM_BY_3' => 'Reihenfolge.',

			'SORT_ALBUM_SELECT_1' => 'Erstellungszeitpunkt',
			'SORT_ALBUM_SELECT_2' => 'Titel',
			'SORT_ALBUM_SELECT_3' => 'Beschreibung',
			'SORT_ALBUM_SELECT_4' => 'Öffentlich',
			'SORT_ALBUM_SELECT_5' => 'Neuestes Aufnahmedatum',
			'SORT_ALBUM_SELECT_6' => 'Ältestes Aufnahmedatum',

			'SORT_PHOTO_BY_1' => 'Fotos sortieren nach',
			'SORT_PHOTO_BY_2' => 'in einer',
			'SORT_PHOTO_BY_3' => 'Reihenfolge.',

			'SORT_PHOTO_SELECT_1' => 'Zeitpunkt des Hochladens',
			'SORT_PHOTO_SELECT_2' => 'Aufnahmedatum',
			'SORT_PHOTO_SELECT_3' => 'Titel',
			'SORT_PHOTO_SELECT_4' => 'Beschreibung',
			'SORT_PHOTO_SELECT_5' => 'Öffentlich',
			'SORT_PHOTO_SELECT_6' => 'Favorit',
			'SORT_PHOTO_SELECT_7' => 'Fotoformat',

			'SORT_ASCENDING' => 'aufsteigenden',
			'SORT_DESCENDING' => 'absteigenden',
			'SORT_CHANGE' => 'Sortierung ändern',

			'DROPBOX_TITLE' => 'Dropbox-Schlüssel festlegen',
			'DROPBOX_TEXT' => "Um Ihre Fotos von Dropbox zu importieren, brauchen Sie einen gültigen API-Key von <a href='https://www.dropbox.com/developers/apps/create'>der Dropbox-Webseite</a>. Erstellen Sie einen persönlichen Schlüssel und geben Sie ihn darunter ein:",

			'LANG_TEXT' => 'Sprache für Lychee ändern:',
			'LANG_TITLE' => 'Sprache festlegen',

			'CSS_TEXT' => 'CSS personalisieren:',
			'CSS_TITLE' => 'CSS ändern',
			'PUBLIC_SEARCH_TEXT' => 'Öffentliche Suche erlauben:',
			'OVERLAY_TYPE' => 'Daten für Foto-Overlay:',
			'OVERLAY_NONE' => 'Kein Overlay',
			'OVERLAY_EXIF' => 'EXIF Daten des Fotos',
			'OVERLAY_DESCRIPTION' => 'Beschreibung des Fotos',
			'OVERLAY_DATE' => 'Erstellungsdatum des Fotos',
			'MAP_DISPLAY_TEXT' => 'Kartenfunktionalitäten aktivieren (OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Kartenfunktionalität für öffentliche Alben aktivieren (OpenStreetMap):',
			'LOCATION_DECODING' => 'Ortsnamen mittels GPS Daten bestimmen',
			'LOCATION_SHOW' => 'Zeige Ortsnamen',
			'LOCATION_SHOW_PUBLIC' => 'Zeige Ortsnamen für öffentliche Alben',
			'MAP_PROVIDER' => 'Provider für OpenStreetMap Karten:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (kein HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (kein HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (kein HiDPI)',
			'MAP_PROVIDER_RRZE' => 'Universtät Erlangen, Deutschland (nur HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Fotos von Unterordnern für Karten berücksichtigen:',

			'LAYOUT_TYPE' => 'Layout des Fotos:',
			'LAYOUT_SQUARES' => 'Quadratische Miniaturansichten',
			'LAYOUT_JUSTIFIED' => 'Seitenverhältnis beibehalten, Blocksatz',
			'LAYOUT_UNJUSTIFIED' => 'Seitenverhältnis beibehalten, Flattersatz',
			'SET_LAYOUT' => 'Ausgerichtetes Layout benutzen:',

			'NSFW_VISIBLE_TEXT_1' => 'Setzte sensible Alben standardmäßig auf sichtbar.',
			'NSFW_VISIBLE_TEXT_2' => 'Wenn das Album öffentlich ist, kann weiterhin zugegriffen werden. Es wird nur ausgeblendet und kann <b>durch Pressen der Taste <hkb>H</hkb> sichtbar gemacht werden.</b>.',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => 'Standardmäßige Sichtbarkeit wurde erfolgreich geändert.',

			'VIEW_NO_RESULT' => 'Keine Ergebnisse',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Keine öffentlichen Alben',
			'VIEW_NO_CONFIGURATION' => 'Keine Konfiguration',
			'VIEW_PHOTO_NOT_FOUND' => 'Foto nicht gefunden',

			'NO_TAGS' => 'Keine Tags',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Sie können jetzt Ihre neuen Fotos verwalten.',
			'UPLOAD_COMPLETE' => 'Hochladen abgeschlossen',
			'UPLOAD_COMPLETE_FAILED' => 'Fehler beim Hochladen eines oder mehrerer Fotos.',
			'UPLOAD_IMPORTING' => 'Importieren',
			'UPLOAD_IMPORTING_URL' => 'URL importieren',
			'UPLOAD_UPLOADING' => 'Hochladen',
			'UPLOAD_FINISHED' => 'Beendet',
			'UPLOAD_PROCESSING' => 'Verarbeiten',
			'UPLOAD_FAILED' => 'Fehlgeschlagen',
			'UPLOAD_FAILED_ERROR' => 'Hochladen fehlgeschlagen. Der Server hat einen Fehler gemeldet!',
			'UPLOAD_FAILED_WARNING' => 'Hochladen fehlgeschlagen. Der Server hat eine Warnung ausgegeben!',
			'UPLOAD_CANCELLED' => 'Abgebrochen',
			'UPLOAD_SKIPPED' => 'Übersprungen',
			'UPLOAD_UPDATED' => 'Upgedatet',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'Dieses Foto wurde übersprungen, da es bereits in deiner Bibliothek vorhanden ist.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'Dieses Foto wurde übersprungen, da es bereits in deiner Bibliothek vorhanden ist, jedoch wurden die Metadaten upgedatet.',
			'UPLOAD_ERROR_CONSOLE' => 'Bitte schauen Sie in die Konsole Ihres Browsers, um weiter Details zu erfahren.',
			'UPLOAD_UNKNOWN' => 'Der Server hat eine unbekannte Antwort gegeben. Bitte schauen Sie in die Konsole Ihres Browsers, um weiter Details zu erfahren.',
			'UPLOAD_ERROR_UNKNOWN' => 'Hochladen fehlgeschlagen. Der Server hat einen unbekannten Fehler gemeldet!',
			'UPLOAD_ERROR_POSTSIZE' => 'Upload fehlgeschlagen. Die PHP post_max_size limit ist zu klein!',
			'UPLOAD_ERROR_FILESIZE' => 'Upload fehlgeschlagen. The PHP upload_max_filesize limit ist zu klein!',
			'UPLOAD_IN_PROGRESS' => 'Lychee ist gerade beim Hochladen!',
			'UPLOAD_IMPORT_WARN_ERR' => 'Der Import ist fertig, hat aber Warnungen oder Fehler zurückgegeben. Schauen Sie bitte ins Protokoll (Einstellungen/Protokoll ansehen).',
			'UPLOAD_IMPORT_COMPLETE' => 'Import abgeschlossen',
			'UPLOAD_IMPORT_INSTR' => 'Geben Sie bitte den direkten Link ein, um ihn zu importieren:',
			'UPLOAD_IMPORT' => 'Importieren',
			'UPLOAD_IMPORT_SERVER' => 'Importieren von Server',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Der Ordner ist leer oder enthält keine lesbaren Dateien zum Verarbeiten. Schauen Sie bitte ins Protokoll (Einstellungen/Protokoll ansehen).',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Diese Aktion wird alle Fotos, Ordner und Unterordner importieren, die sich in folgendem Verzeichnis befinden.',
			'UPLOAD_ABSOLUTE_PATH' => 'Absoluter Pfad zum Verzeichnis',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Konnte Import nicht starten, weil der Ordner leer ist.',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Originale löschen',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Die Originaldateien werden nach dem Import gelöscht, falls möglich.',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Symbolischer Link',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Importiere Dateien durch symbolische Links zu den Originalen.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Überspringe Duplikate',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Bestehende Medien-Dateien wurden übersprungen.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Synchronisiere Metadaten erneut',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Update Metadaten der bestehenden Medien-Dateien.',
			'UPLOAD_IMPORT_LOW_MEMORY' => 'Sehr wenig Speicher!',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'Der Importprozess auf dem Server nähert sich dem Speicherlimit und wird eventuell vorzeitig beendet.',
			'UPLOAD_WARNING' => 'Warnung',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'Der angegebene Pfad ist kein lesbares Verzeichnis!',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'Der angegebene Pfad ist ein von Lychee reservierter Pfad!',
			'UPLOAD_IMPORT_UNREADABLE' => 'Die Datei konnte nicht gelesen werden!',
			'UPLOAD_IMPORT_FAILED' => 'The Datei konnte nicht importiert werden!',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Dateityp wird nicht unterstützt!',
			'UPLOAD_IMPORT_ALBUM_FAILED' => 'Album konnte nicht erstellt werden!',
			'UPLOAD_IMPORT_CANCELLED' => 'Import abgebrochen',

			'ABOUT_SUBTITLE' => 'Selbst gehostetes Foto-Management, aber richtig!',
			'ABOUT_DESCRIPTION' => 'ist ein freies Foto-Management-Werkzeug, dass auf Ihrem Server oder Webspace läuft. Die Installation ist eine Sache von Sekunden. Hochladen, Organisieren und Teilen von Fotos funktioniert wie in einer nativen Anwendung. Lychee hält alles bereit, was Sie benötigen, und alle Bilder werden sicher abgespeichert.',
			'FOOTER_COPYRIGHT' => 'Alle Bilder auf dieser Website unterliegen dem Copyright von ',
			'HOSTED_WITH_LYCHEE' => 'Hosted with Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'In die Zwischenablage kopiert',
			'URL_COPIED_TO_CLIPBOARD' => 'URL in die Zwischenablage kopiert!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Direkte Links zu den Bilddateien:',
			'PHOTO_MEDIUM' => 'Mittlere Größe',
			'PHOTO_MEDIUM_HIDPI' => 'Mittlere Größe HiDPI',
			'PHOTO_SMALL' => 'Miniaturansicht',
			'PHOTO_SMALL_HIDPI' => 'Miniaturansicht HiDPI',
			'PHOTO_THUMB' => 'Quadratische Miniaturansicht',
			'PHOTO_THUMB_HIDPI' => 'Quadratische Miniaturansicht HiDPI',
			'PHOTO_THUMBNAIL' => 'Photo thumbnail',
			'PHOTO_LIVE_VIDEO' => 'Video des Live-Photos',
			'PHOTO_VIEW' => 'Lychee Foto Ansicht:',
			'VIDEO_NOT_SUPPORTED' => 'Your browser does not support the video tag.',

			'PHOTO_EDIT_ROTATECWISE' => 'Im Uhrzeigersinn drehen',
			'PHOTO_EDIT_ROTATECCWISE' => 'Gegen den Uhrzeigersinn drehen',

			'ERROR_GPX' => 'Error loading GPX file: ',
		];

		return $locale;
	}
}
