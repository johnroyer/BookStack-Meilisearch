<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nazadnje objavljeno',
    'recently_created_pages' => 'Nazadnje objavljene strani',
    'recently_updated_pages' => 'Nazadnje posodobljene strani',
    'recently_created_chapters' => 'Nazadnje objavljena poglavja',
    'recently_created_books' => 'Nazadnje objavljene knjige',
    'recently_created_shelves' => 'Nazadnje ustvarjene police',
    'recently_update' => 'Nazadnje posodobljeno',
    'recently_viewed' => 'Nazadnje prikazano',
    'recent_activity' => 'Nedavna dejavnost',
    'create_now' => 'Ustvarite eno sedaj',
    'revisions' => 'Revizije',
    'meta_revision' => 'Številka revizije #:revisionCount',
    'meta_created' => 'Ustvarjeno :timeLength',
    'meta_created_name' => 'Ustvaril :timeLength uporabnik :user',
    'meta_updated' => 'Posodobljeno :timeLength',
    'meta_updated_name' => 'Posodobil :timeLength uporabnik :user',
    'meta_owned_name' => 'V lasti :user',
    'meta_reference_count' => 'Referenced by :count item|Referenced by :count items',
    'entity_select' => 'Izbira entitete',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Slike',
    'my_recent_drafts' => 'Moji nedavni osnutki',
    'my_recently_viewed' => 'Nedavno prikazano',
    'my_most_viewed_favourites' => 'My Most Viewed Favourites',
    'my_favourites' => 'My Favourites',
    'no_pages_viewed' => 'Niste si ogledali še nobene strani',
    'no_pages_recently_created' => 'Nedavno ni bila ustvarjena nobena stran',
    'no_pages_recently_updated' => 'Nedavno ni bila posodobljena nobena stran',
    'export' => 'Izvozi',
    'export_html' => 'Vsebuje spletno datoteko',
    'export_pdf' => 'PDF datoteka (.pdf)',
    'export_text' => 'Navadna besedilna datoteka',
    'export_md' => 'Markdown File',
    'export_zip' => 'Portable ZIP',
    'default_template' => 'Default Page Template',
    'default_template_explain' => 'Assign a page template that will be used as the default content for all pages created within this item. Keep in mind this will only be used if the page creator has view access to the chosen template page.',
    'default_template_select' => 'Select a template page',
    'import' => 'Import',
    'import_validate' => 'Validate Import',
    'import_desc' => 'Import books, chapters & pages using a portable zip export from the same, or a different, instance. Select a ZIP file to proceed. After the file has been uploaded and validated you\'ll be able to configure & confirm the import in the next view.',
    'import_zip_select' => 'Select ZIP file to upload',
    'import_zip_validation_errors' => 'Errors were detected while validating the provided ZIP file:',
    'import_pending' => 'Pending Imports',
    'import_pending_none' => 'No imports have been started.',
    'import_continue' => 'Continue Import',
    'import_continue_desc' => 'Review the content due to be imported from the uploaded ZIP file. When ready, run the import to add its contents to this system. The uploaded ZIP import file will be automatically removed on successful import.',
    'import_details' => 'Import Details',
    'import_run' => 'Run Import',
    'import_size' => ':size Import ZIP Size',
    'import_uploaded_at' => 'Uploaded :relativeTime',
    'import_uploaded_by' => 'Uploaded by',
    'import_location' => 'Import Location',
    'import_location_desc' => 'Select a target location for your imported content. You\'ll need the relevant permissions to create within the location you choose.',
    'import_delete_confirm' => 'Are you sure you want to delete this import?',
    'import_delete_desc' => 'This will delete the uploaded import ZIP file, and cannot be undone.',
    'import_errors' => 'Import Errors',
    'import_errors_desc' => 'The follow errors occurred during the import attempt:',

    // Permissions and restrictions
    'permissions' => 'Dovoljenja',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Shrani dovoljenja',
    'permissions_owner' => 'Lastnik',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => 'Rezultati iskanja',
    'search_total_results_found' => ':count najdenih rezultatov|:count skupaj najdenih rezultatov',
    'search_clear' => 'Počisti iskanje',
    'search_no_pages' => 'Nobena stran se ne ujema z vašim iskanjem',
    'search_for_term' => 'Išči :term',
    'search_more' => 'Prikaži več rezultatov',
    'search_advanced' => 'Napredno iskanje',
    'search_terms' => 'Iskalni izrazi',
    'search_content_type' => 'Vrsta vsebine',
    'search_exact_matches' => 'Natančno ujemanje',
    'search_tags' => 'Iskanje po oznakah',
    'search_options' => 'Možnosti',
    'search_viewed_by_me' => 'Ogledano',
    'search_not_viewed_by_me' => 'Neogledano',
    'search_permissions_set' => 'Nastavljena dovoljenja',
    'search_created_by_me' => 'Ustvaril sem jaz',
    'search_updated_by_me' => 'Posodobil sem jaz',
    'search_owned_by_me' => 'Owned by me',
    'search_date_options' => 'Možnosti datuma',
    'search_updated_before' => 'Posodobljeno pred',
    'search_updated_after' => 'Posodobljeno po',
    'search_created_before' => 'Ustvarjeno pred',
    'search_created_after' => 'Ustvarjeno po',
    'search_set_date' => 'Nastavi datum',
    'search_update' => 'Posodobi iskanje',

    // Shelves
    'shelf' => 'Polica',
    'shelves' => 'Police',
    'x_shelves' => ':count Polica|:count Police',
    'shelves_empty' => 'Ustvarjena ni bila nobena polica',
    'shelves_create' => 'Ustvari novo polico',
    'shelves_popular' => 'Priljubljene police',
    'shelves_new' => 'Nove police',
    'shelves_new_action' => 'Nova polica',
    'shelves_popular_empty' => 'Najbolj priljubljene police se bodo pojavile tukaj.',
    'shelves_new_empty' => 'Nazadnje ustvarjene police se bodo pojavile tukaj.',
    'shelves_save' => 'Shrani polico',
    'shelves_books' => 'Knjige na tej polici',
    'shelves_add_books' => 'Dodaj knjige na to polico',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Na tej polici ni nobene knjige',
    'shelves_edit_and_assign' => 'Uredi knjižno polico za dodajanje knjig',
    'shelves_edit_named' => 'Edit Shelf :name',
    'shelves_edit' => 'Edit Shelf',
    'shelves_delete' => 'Delete Shelf',
    'shelves_delete_named' => 'Delete Shelf :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Shelf Permissions',
    'shelves_permissions_updated' => 'Shelf Permissions Updated',
    'shelves_permissions_active' => 'Shelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on shelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_permissions_create' => 'Shelf create permissions are only used for copying permissions to child books using the action below. They do not control the ability to create books.',
    'shelves_copy_permissions_to_books' => 'Kopiraj dovoljenja na knjige',
    'shelves_copy_permissions' => 'Dovoljenja kopiranja',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Knjiga',
    'books' => 'Knjige',
    'x_books' => ':count Knjiga|:count Knjig',
    'books_empty' => 'Ustvarjena ni bila nobena knjiga',
    'books_popular' => 'Priljubjene knjige',
    'books_recent' => 'Zadnje knjige',
    'books_new' => 'Nove knjige',
    'books_new_action' => 'Nova knjiga',
    'books_popular_empty' => 'Tukaj bodo prikazane najbolj priljubljene knjige.',
    'books_new_empty' => 'Tukaj bodo prikazane nazadnje ustvarjene knjige.',
    'books_create' => 'Ustvari novo knjigo',
    'books_delete' => 'Izbriši knjigo',
    'books_delete_named' => 'Izbriši knjigo :bookName',
    'books_delete_explain' => 'S tem boste izbrisali knjigo z nazivom \':bookName\'. Vse strani in poglavja bodo odstranjena.',
    'books_delete_confirmation' => 'Ali ste prepričani, da želite izbrisati to knjigo?',
    'books_edit' => 'Uredi knjigo',
    'books_edit_named' => 'Uredi knjigo :bookName',
    'books_form_book_name' => 'Ime knjige',
    'books_save' => 'Shrani knjigo',
    'books_permissions' => 'Dovoljenja knjige',
    'books_permissions_updated' => 'Posodobljena dovoljenja knjige',
    'books_empty_contents' => 'V tej knjigi ni bila ustvarjena še nobena stran ali poglavje.',
    'books_empty_create_page' => 'Ustvari novo stran',
    'books_empty_sort_current_book' => 'Razvrsti trenutno knjigo',
    'books_empty_add_chapter' => 'Dodaj poglavje',
    'books_permissions_active' => 'Aktivna dovoljenja knjige',
    'books_search_this' => 'Išči v tej knjigi',
    'books_navigation' => 'Navigacija po knjigi',
    'books_sort' => 'Razvrsti vsebino knjige',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => 'Razvrsti knjigo :bookName',
    'books_sort_name' => 'Razvrsti po imenu',
    'books_sort_created' => 'Razvrsti po datumu nastanka',
    'books_sort_updated' => 'Razvrsti po datumu posodobitve',
    'books_sort_chapters_first' => 'Najprej poglavja',
    'books_sort_chapters_last' => 'Nazadnje poglavja',
    'books_sort_show_other' => 'Prikaži druge knjige',
    'books_sort_save' => 'Shrani novo razvrstitev',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Move Up',
    'books_sort_move_down' => 'Move Down',
    'books_sort_move_prev_book' => 'Move to Previous Book',
    'books_sort_move_next_book' => 'Move to Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move to Start of Book',
    'books_sort_move_book_end' => 'Move to End of Book',
    'books_sort_move_before_chapter' => 'Move to Before Chapter',
    'books_sort_move_after_chapter' => 'Move to After Chapter',
    'books_copy' => 'Copy Book',
    'books_copy_success' => 'Book successfully copied',

    // Chapters
    'chapter' => 'Poglavje',
    'chapters' => 'Poglavja',
    'x_chapters' => ':count Poglavje|:count Poglavja',
    'chapters_popular' => 'Priljubljena poglavja',
    'chapters_new' => 'Novo poglavje',
    'chapters_create' => 'Ustvari novo poglavje',
    'chapters_delete' => 'Izbriši poglavje',
    'chapters_delete_named' => 'Izbriši poglavje :chapterName',
    'chapters_delete_explain' => 'Poglavje z imenom ":chapterName" bo izbrisano. Vse strani znotraj poglavja bodo prav tako izbrisane.',
    'chapters_delete_confirm' => 'Ste prepričani, da želite izbrisati to poglavje?',
    'chapters_edit' => 'Uredi poglavje',
    'chapters_edit_named' => 'Uredi poglavje :chapterName',
    'chapters_save' => 'Shrani poglavje',
    'chapters_move' => 'Premakni poglavje',
    'chapters_move_named' => 'Premakni poglavje :chapterName',
    'chapters_copy' => 'Copy Chapter',
    'chapters_copy_success' => 'Chapter successfully copied',
    'chapters_permissions' => 'Dovoljenja poglavij',
    'chapters_empty' => 'V tem poglavju trenutno ni strani.',
    'chapters_permissions_active' => 'Dovoljenja poglavij so aktivirana',
    'chapters_permissions_success' => 'Posodobljena dovoljenja poglavij',
    'chapters_search_this' => 'Išči v tem poglavju',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'Stran',
    'pages' => 'Strani',
    'x_pages' => ':count Stran|:count Strani',
    'pages_popular' => 'Priljubjene strani',
    'pages_new' => 'Nova stran',
    'pages_attachments' => 'Priponke',
    'pages_navigation' => 'Navigacija po strani',
    'pages_delete' => 'Izbriši stran',
    'pages_delete_named' => 'Izbriši stran :pageName',
    'pages_delete_draft_named' => 'Izbriši osnutek strani :pageName',
    'pages_delete_draft' => 'Izbriši osnutek strani',
    'pages_delete_success' => 'Stran izbirsana',
    'pages_delete_draft_success' => 'Osnutek strani izbrisan',
    'pages_delete_warning_template' => 'This page is in active use as a book or chapter default page template. These books or chapters will no longer have a default page template assigned after this page is deleted.',
    'pages_delete_confirm' => 'Ste prepričani, da želite izbrisati to stran?',
    'pages_delete_draft_confirm' => 'Ali ste prepričani, da želite izbrisati ta osnutek?',
    'pages_editing_named' => 'Urejanje strani :pageName',
    'pages_edit_draft_options' => 'Možnosti osnutka',
    'pages_edit_save_draft' => 'Shrani osnutek',
    'pages_edit_draft' => 'Uredi osnutek strani',
    'pages_editing_draft' => 'Urejanje osnutka',
    'pages_editing_page' => 'Urejanje strani',
    'pages_edit_draft_save_at' => 'Osnutek shranjen ob ',
    'pages_edit_delete_draft' => 'Izbriši osnutek',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => 'Zavrzi osnutek',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_switch_to_new_wysiwyg' => 'Switch to new WYSIWYG',
    'pages_edit_switch_to_new_wysiwyg_desc' => '(In Alpha Testing)',
    'pages_edit_set_changelog' => 'Opiši spremembe na dokumentu',
    'pages_edit_enter_changelog_desc' => 'Vnesite kratek opis sprememb, ki ste jih naredili',
    'pages_edit_enter_changelog' => 'Vpišite vsebino sprememb',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Shrani stran',
    'pages_title' => 'Naslov strani',
    'pages_name' => 'Ime strani',
    'pages_md_editor' => 'Urejevalnik',
    'pages_md_preview' => 'Predogled',
    'pages_md_insert_image' => 'Vstavi sliko',
    'pages_md_insert_link' => 'Vnesi povezavo do objekta',
    'pages_md_insert_drawing' => 'Vstavi risbo',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'Stran ni v poglavju',
    'pages_move' => 'Premakni stran',
    'pages_copy' => 'Kopiraj stran',
    'pages_copy_desination' => 'Destinacija kopije',
    'pages_copy_success' => 'Stran uspešno kopirana',
    'pages_permissions' => 'Dovoljenja strani',
    'pages_permissions_success' => 'Posodobljena dovoljenja strani',
    'pages_revision' => 'Revizija',
    'pages_revisions' => 'Pregled strani',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'Pregledi strani za :pageName',
    'pages_revision_named' => 'Pregled strani za :pageName',
    'pages_revision_restored_from' => 'Obnovljeno iz #:id; :summary',
    'pages_revisions_created_by' => 'Ustvaril',
    'pages_revisions_date' => 'Datum revizije',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Revizija št. :id',
    'pages_revisions_numbered_changes' => 'Revizija št. #:id Changes',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Dnevnik sprememb',
    'pages_revisions_changes' => 'Spremembe',
    'pages_revisions_current' => 'Trenutna različica',
    'pages_revisions_preview' => 'Predogled',
    'pages_revisions_restore' => 'Obnovi',
    'pages_revisions_none' => 'Ta stran nima popravkov',
    'pages_copy_link' => 'Kopiraj povezavo',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'Aktivna dovoljenja strani',
    'pages_initial_revision' => 'Prvotno objavljeno',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'Nova stran',
    'pages_editing_draft_notification' => 'Trenutno urejate osnutek, ki je bil nazadnje shranjen :timeDiff.',
    'pages_draft_edited_notification' => 'Ta stran je odtlej posodobljena. Priporočamo, da zavržete ta osnutek.',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count uporabnikov je začelo urejati to stran',
        'start_b' => ':userName je začel urejati to stran',
        'time_a' => 'odkar je bila stran nazandnje posodobljena',
        'time_b' => 'v zadnjih :minCount minutah',
        'message' => ':start :time. Pazite, da ne boste prepisali posodobitev drug drugega!',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => 'Določena stran',
    'pages_is_template' => 'Predloga strani',

    // Editor Sidebar
    'toggle_sidebar' => 'Toggle Sidebar',
    'page_tags' => 'Oznake strani',
    'chapter_tags' => 'Oznake poglavja',
    'book_tags' => 'Oznake knjige',
    'shelf_tags' => 'Oznake police',
    'tag' => 'Oznaka',
    'tags' =>  'Oznake',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Ime oznake',
    'tag_value' => 'Vrednost oznake (opcijsko)',
    'tags_explain' => "Dodajte nekaj oznak za boljšo kategorizacijo vaše vsebine.\nZ dodelitvijo oznake lahko poskrbite za bolj poglobljeno organizacijo.",
    'tags_add' => 'Dodaj drugo oznako',
    'tags_remove' => 'Odstrani to oznako',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'All values',
    'tags_view_tags' => 'View Tags',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Priponke',
    'attachments_explain' => 'Naložite nekaj datotek ali pripnite nekaj povezav, da jih prikažete na vaši strani. Vidne so v stranski orodni vrstici.',
    'attachments_explain_instant_save' => 'Spremembe tukaj so takoj shranjene.',
    'attachments_upload' => 'Naloži datoteko',
    'attachments_link' => 'Pripni povezavo',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'Nastavi povezavo',
    'attachments_delete' => 'Ali ste prepričani, da želite izbrisati to priponko?',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => 'Nobena datoteka ni bila naložena',
    'attachments_explain_link' => 'Lahko pripnete povezavo, če ne želite naložiti datoteke. Lahko je povezava na drugo stran ali povezava do dateteke v oblaku.',
    'attachments_link_name' => 'Ime povezave',
    'attachment_link' => 'Povezava priponke',
    'attachments_link_url' => 'Povezava do datoteke',
    'attachments_link_url_hint' => 'Url spletnega mesta ali datoteke',
    'attach' => 'Pripni',
    'attachments_insert_link' => 'Dodaj povezavo na priponko na stran',
    'attachments_edit_file' => 'Uredi datoteko',
    'attachments_edit_file_name' => 'Ime datoteke',
    'attachments_edit_drop_upload' => 'Spustite datoteke ali kliknite tukaj, če želite naložiti in prepisati',
    'attachments_order_updated' => 'Razvrščanje priponk posodobljeno',
    'attachments_updated_success' => 'Podrobnosti priloge posodobljene',
    'attachments_deleted' => 'Priponka izbirsana',
    'attachments_file_uploaded' => 'Datoteka uspešno naložena',
    'attachments_file_updated' => 'Datoteka uspešno posodobljena',
    'attachments_link_attached' => 'Povezava uspešno dodana na stran',
    'templates' => 'Predloge',
    'templates_set_as_template' => 'Stran je predloga',
    'templates_explain_set_as_template' => 'To stran lahko nastavite kot predlogo in njeno vsebino uporabite pri izdelavi drugih strani. Ostali uporabniki bodo lahko uporabljali to predlogo, če imajo dovoljenja za to stran.',
    'templates_replace_content' => 'Zamenjaj vsebino strani',
    'templates_append_content' => 'Dodajte k vsebini strani',
    'templates_prepend_content' => 'Dodaj predpono k vsebini strani',

    // Profile View
    'profile_user_for_x' => 'Uporabnik že :time',
    'profile_created_content' => 'Ustvarjena vsebina',
    'profile_not_created_pages' => ':userName ni izdelal nobene strani',
    'profile_not_created_chapters' => ':userName ni izdelal nobenega poglavja',
    'profile_not_created_books' => ':userName ni objavil nobene knjige',
    'profile_not_created_shelves' => ':userName ni izdelal nobene knjižne police',

    // Comments
    'comment' => 'Komentar',
    'comments' => 'Komentarji',
    'comment_add' => 'Dodaj komentar',
    'comment_placeholder' => 'Dodaj komentar',
    'comment_count' => '{0} Ni komentarjev|{1} 1 Komentar|[2,*] :count Komentarji',
    'comment_save' => 'Shrani komentar',
    'comment_new' => 'Nov kometar',
    'comment_created' => 'komentirano :createDiff',
    'comment_updated' => 'Posodobljeno :updateDiff od :username',
    'comment_updated_indicator' => 'Updated',
    'comment_deleted_success' => 'Komentar je izbrisan',
    'comment_created_success' => 'Komentar dodan',
    'comment_updated_success' => 'Komentar posodobljen',
    'comment_delete_confirm' => 'Ste prepričani, da želite izbrisati ta komentar?',
    'comment_in_reply_to' => 'Odgovor na :commentId',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => 'Ali ste prepričani, da želite izbrisati to revizijo?',
    'revision_restore_confirm' => 'Ali ste prepričani da želite obnoviti to revizijo? Vsebina trenutne strani bo zamenjana.',
    'revision_cannot_delete_latest' => 'Ne morem izbrisati zadnje revizije.',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Listed below is all the known content in the system that links to this item.',

    // Watch Options
    'watch' => 'Watch',
    'watch_title_default' => 'Default Preferences',
    'watch_desc_default' => 'Revert watching to just your default notification preferences.',
    'watch_title_ignore' => 'Ignore',
    'watch_desc_ignore' => 'Ignore all notifications, including those from user-level preferences.',
    'watch_title_new' => 'New Pages',
    'watch_desc_new' => 'Notify when any new page is created within this item.',
    'watch_title_updates' => 'All Page Updates',
    'watch_desc_updates' => 'Notify upon all new pages and page changes.',
    'watch_desc_updates_page' => 'Notify upon all page changes.',
    'watch_title_comments' => 'All Page Updates & Comments',
    'watch_desc_comments' => 'Notify upon all new pages, page changes and new comments.',
    'watch_desc_comments_page' => 'Notify upon page changes and new comments.',
    'watch_change_default' => 'Change default notification preferences',
    'watch_detail_ignore' => 'Ignoring notifications',
    'watch_detail_new' => 'Watching for new pages',
    'watch_detail_updates' => 'Watching new pages and updates',
    'watch_detail_comments' => 'Watching new pages, updates & comments',
    'watch_detail_parent_book' => 'Watching via parent book',
    'watch_detail_parent_book_ignore' => 'Ignoring via parent book',
    'watch_detail_parent_chapter' => 'Watching via parent chapter',
    'watch_detail_parent_chapter_ignore' => 'Ignoring via parent chapter',
];
