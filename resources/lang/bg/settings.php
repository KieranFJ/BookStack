<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Настройки',
    'settings_save' => 'Запази настройките',
    'settings_save_success' => 'Настройките са записани',

    // App Settings
    'app_customization' => 'Персонализиране',
    'app_features_security' => 'Екстри и Сигурност',
    'app_name' => 'Име на приложението',
    'app_name_desc' => 'Това име е включено във всяка шапка и във всеки имейл изпратен от системата.',
    'app_name_header' => 'Покажи името в шапката',
    'app_public_access' => 'Публичен достъп',
    'app_public_access_desc' => 'Активирането на тази настройка, ще позволи на гости, които не са влезли в системта, да имат достъп до съдържанието на вашето приложение.',
    'app_public_access_desc_guest' => 'Достъпа на гостите може да бъде контролиран от "Guest" потребителя.',
    'app_public_access_toggle' => 'Позволяване на публичен достъп',
    'app_public_viewing' => 'Позволване на публичен достъп?',
    'app_secure_images' => 'По-висока сигурност при качване на изображения',
    'app_secure_images_toggle' => 'Активиране на по-висока сигурност при качване на изображения',
    'app_secure_images_desc' => 'С цел производителност, всички изображения са публични. Тази настройка добавя случаен, труден за отгатване низ от символи пред линка на изображението. Подсигурете, че индексите на директорията не са включени за да предотвратите лесен достъп.',
    'app_editor' => 'Редактор на страница',
    'app_editor_desc' => 'Изберете кой редактор да се използва от всички потребители за да редактират страници.',
    'app_custom_html' => 'Персонализирано съдържание на HTML шапката',
    'app_custom_html_desc' => 'Всяко съдържание, добавено тук, ще бъде поставено в долната част на секцията <head> на всяка страница. Това е удобно за преобладаващи стилове или добавяне на код за анализ.',
    'app_custom_html_disabled_notice' => 'Съдържанието на персонализираната HTML шапка е деактивирано на страницата с настройки, за да се гарантира, че евентуални лоши промени могат да бъдат върнати.',
    'app_logo' => 'Лого на приложението',
    'app_logo_desc' => 'Това изображение трябва да е с 43px височина. <br> Големите изображения ще бъдат намалени.',
    'app_primary_color' => 'Основен цвят на приложението',
    'app_primary_color_desc' => 'Изберете основния цвят на приложението, включително на банера, бутоните и линковете.',
    'app_homepage' => 'Application Homepage',
    'app_homepage_desc' => 'Изберете начална страница, която ще замени изгледа по подразбиране. Дефинираните права на страницата, която е избрана ще бъдат игнорирани.',
    'app_homepage_select' => 'Избери страница',
    'app_footer_links' => 'Футър линкове',
    'app_footer_links_desc' => 'Добави линк в съдържанието на футъра. Добавените линкове ще се показват долу в повечето страници, включително и в страниците, в които логването не е задължително. Можете да използвате заместител "trans::<key>", за да използвате дума дефинирана от системата. Пример: Използването на "trans::common.privacy_policy" ще покаже "Лични данни" или на "trans::common.terms_of_service" ще покаже "Общи условия".',
    'app_footer_links_label' => 'Link Label',
    'app_footer_links_url' => 'Линк URL',
    'app_footer_links_add' => 'Добави футър линк',
    'app_disable_comments' => 'Disable Comments',
    'app_disable_comments_toggle' => 'Disable comments',
    'app_disable_comments_desc' => 'Disables comments across all pages in the application. <br> Existing comments are not shown.',

    // Color settings
    'content_colors' => 'Content Colors',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Shelf Color',
    'book_color' => 'Book Color',
    'chapter_color' => 'Chapter Color',
    'page_color' => 'Page Color',
    'page_draft_color' => 'Page Draft Color',

    // Registration Settings
    'reg_settings' => 'Registration',
    'reg_enable' => 'Enable Registration',
    'reg_enable_toggle' => 'Enable registration',
    'reg_enable_desc' => 'When registration is enabled user will be able to sign themselves up as an application user. Upon registration they are given a single, default user role.',
    'reg_default_role' => 'Default user role after registration',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Email Confirmation',
    'reg_email_confirmation_toggle' => 'Require email confirmation',
    'reg_confirm_email_desc' => 'If domain restriction is used then email confirmation will be required and this option will be ignored.',
    'reg_confirm_restrict_domain' => 'Domain Restriction',
    'reg_confirm_restrict_domain_desc' => 'Enter a comma separated list of email domains you would like to restrict registration to. Users will be sent an email to confirm their address before being allowed to interact with the application. <br> Note that users will be able to change their email addresses after successful registration.',
    'reg_confirm_restrict_domain_placeholder' => 'No restriction set',

    // Maintenance settings
    'maint' => 'Maintenance',
    'maint_image_cleanup' => 'Cleanup Images',
    'maint_image_cleanup_desc' => "Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.",
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'Run Cleanup',
    'maint_image_cleanup_warning' => ':count potentially unused images were found. Are you sure you want to delete these images?',
    'maint_image_cleanup_success' => ':count potentially unused images found and deleted!',
    'maint_image_cleanup_nothing_found' => 'No unused images found, Nothing deleted!',
    'maint_send_test_email' => 'Send a Test Email',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Изпрати тестов имейл',
    'maint_send_test_email_success' => 'Имейл изпратен на :address',
    'maint_send_test_email_mail_subject' => 'Тестов Имейл',
    'maint_send_test_email_mail_greeting' => 'Изпращането на Имейл работи!',
    'maint_send_test_email_mail_text' => 'Поздравления! След като получихте този имейл, Вашите имейл настройки са конфигурирани правилно.',
    'maint_recycle_bin_desc' => 'Изтрити рафти, книги, глави и страници се преместват в кошчето, откъдето можете да ги възстановите или изтриете завинаги. Стари съдържания в кошчето ще бъдат изтрити автоматично след време, в зависимост от настройките на системата.',
    'maint_recycle_bin_open' => 'Отвори Кошчето',

    // Recycle Bin
    'recycle_bin' => 'Кошче',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Изтрит предмет',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Изтрит от',
    'recycle_bin_deleted_at' => 'Час на изтриване',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'Без филтър',
    'audit_deleted_item' => 'Изтрит предмет',
    'audit_deleted_item_name' => 'Име: :name',
    'audit_table_user' => 'Потребител',
    'audit_table_event' => 'Събитие',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'Дата на активност',
    'audit_date_from' => 'Време от',
    'audit_date_to' => 'Време до',

    // Role Settings
    'roles' => 'Роли',
    'role_user_roles' => 'Потребителски роли',
    'role_create' => 'Създай нова роля',
    'role_create_success' => 'Ролята беше успешно създадена',
    'role_delete' => 'Изтрий роля',
    'role_delete_confirm' => 'Това ще изтрие ролята \':roleName\'.',
    'role_delete_users_assigned' => 'В тази роля се намират :userCount потребители. Ако искате да преместите тези потребители в друга роля, моля изберете нова роля отдолу.',
    'role_delete_no_migration' => "Не премествай потребителите в нова роля",
    'role_delete_sure' => 'Сигурни ли сте, че искате да изтриете тази роля?',
    'role_delete_success' => 'Ролята беше успешно изтрита',
    'role_edit' => 'Редактиране на роля',
    'role_details' => 'Детайли на роля',
    'role_name' => 'Име на ролята',
    'role_desc' => 'Кратко описание на ролята',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'Външни ауторизиращи ID-a',
    'role_system' => 'Настойки за достъп на системата',
    'role_manage_users' => 'Управление на потребители',
    'role_manage_roles' => 'Управление роли и права',
    'role_manage_entity_permissions' => 'Управление на правата за достъп всички книги, глави и страници',
    'role_manage_own_entity_permissions' => 'Управление на правата за достъп на собствени книги, глави и страници',
    'role_manage_page_templates' => 'Управление на шаблони на страници',
    'role_access_api' => 'Достъп до API на системата',
    'role_manage_settings' => 'Управление на настройките на приложението',
    'role_export_content' => 'Export content',
    'role_asset' => 'Настройки за достъп до активи',
    'roles_system_warning' => 'Важно: Добавянето на потребител в някое от горните три роли може да му позволи да промени собствените си права или правата на другите в системата. Възлагайте тези роли само на доверени потребители.',
    'role_asset_desc' => 'Тези настройки за достъп контролират достъпа по подразбиране до активите в системата. Настройките за достъп до книги, глави и страници ще отменят тези настройки.',
    'role_asset_admins' => 'Администраторите автоматично получават достъп до цялото съдържание, но тези опции могат да показват или скриват опциите за потребителския интерфейс.',
    'role_all' => 'Всички',
    'role_own' => 'Собствени',
    'role_controlled_by_asset' => 'Controlled by the asset they are uploaded to',
    'role_save' => 'Запази ролята',
    'role_update_success' => 'Ролята беше успешно актуализирана',
    'role_users' => 'Потребители в тази роля',
    'role_users_none' => 'В момента няма потребители, назначени за тази роля',

    // Users
    'users' => 'Потребители',
    'user_profile' => 'Потребителски профил',
    'users_add_new' => 'Добави нов потребител',
    'users_search' => 'Търси Потребители',
    'users_latest_activity' => 'Последна активност',
    'users_details' => 'Потребителски детайли',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'User Roles',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 6 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'External Authentication ID',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Only fill the below if you would like to change your password.',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'Изтрий потребител',
    'users_delete_named' => 'Изтрий потребителя :userName',
    'users_delete_warning' => 'Това изцяло ще изтрие този потребител с името \':userName\' от системата.',
    'users_delete_confirm' => 'Сигурни ли сте, че искате да изтриете този потребител?',
    'users_migrate_ownership' => 'Мигрирайте собствеността на сайта',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'Няма избрани потребители',
    'users_delete_success' => 'User successfully removed',
    'users_edit' => 'Edit User',
    'users_edit_profile' => 'Edit Profile',
    'users_edit_success' => 'User successfully updated',
    'users_avatar' => 'User Avatar',
    'users_avatar_desc' => 'Select an image to represent this user. This should be approx 256px square.',
    'users_preferred_language' => 'Preferred Language',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Social Accounts',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Connect Account',
    'users_social_disconnect' => 'Disconnect Account',
    'users_social_connected' => ':socialAccount account was successfully attached to your profile.',
    'users_social_disconnected' => ':socialAccount account was successfully disconnected from your profile.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
