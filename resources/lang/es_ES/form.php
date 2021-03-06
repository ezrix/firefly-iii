<?php

/**
 * form.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                   => 'Banco',
    'bank_balance'                => 'Saldo',
    'savings_balance'             => 'Salgo de ahorro',
    'credit_card_limit'           => 'Límite de la tarjeta de crédito',
    'automatch'                   => 'Coinciden automáticamente',
    'skip'                        => 'Saltar',
    'enabled'                     => 'Enabled',
    'name'                        => 'Nombre',
    'active'                      => 'Activo',
    'amount_min'                  => 'Importe mínimo',
    'amount_max'                  => 'Importe máximo',
    'match'                       => 'Encuentros en',
    'strict'                      => 'Strict mode',
    'repeat_freq'                 => 'Repetición',
    'journal_currency_id'         => 'Divisa',
    'currency_id'                 => 'Divisa',
    'transaction_currency_id'     => 'Currency',
    'external_ip'                 => 'Your server\'s external IP',
    'attachments'                 => 'Adjuntos',
    'journal_amount'              => 'Importe',
    'journal_source_name'         => 'Revenue account (source)',
    'keep_bill_id'                => 'Bill',
    'journal_source_id'           => 'Asset account (source)',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Verificar la seguridad de contraseña',
    'source_account'              => 'Cuenta origen',
    'destination_account'         => 'Cuenta destino',
    'journal_destination_id'      => 'Asset account (destination)',
    'asset_destination_account'   => 'Destination account',
    'include_net_worth'           => 'Include in net worth',
    'asset_source_account'        => 'Source account',
    'journal_description'         => 'Descripción',
    'note'                        => 'Notas',
    'split_journal'               => 'Dividir esta transacción',
    'split_journal_explanation'   => 'Dividir esta transacción en múltiples partes',
    'currency'                    => 'Divisa',
    'account_id'                  => 'Cuenta',
    'budget_id'                   => 'Presupuesto',
    'openingBalance'              => 'Saldo inicial',
    'tagMode'                     => 'Modo de etiqueta',
    'tag_position'                => 'Etiquetar ubicación',
    'virtualBalance'              => 'Saldo virtual',
    'targetamount'                => 'Cantidad objetivo',
    'accountRole'                 => 'Tipo de cuenta',
    'openingBalanceDate'          => 'Fecha del saldo inicial',
    'ccType'                      => 'Plan de pagos con tarjeta de crédito',
    'ccMonthlyPaymentDate'        => 'Fecha de pago mensual de la tarjeta de crédito',
    'piggy_bank_id'               => 'Hucha',
    'returnHere'                  => 'Volver aquí',
    'returnHereExplanation'       => 'Después de guardar, vuelve aquí para crear otro.',
    'returnHereUpdateExplanation' => 'Después de actualizar, vuelve aquí.',
    'description'                 => 'Descripción',
    'expense_account'             => 'Cuenta de gastos',
    'revenue_account'             => 'Cuenta de ingresos',
    'decimal_places'              => 'Lugares decimales',
    'exchange_rate_instruction'   => 'Monedas extranjeras',
    'source_amount'               => 'Importe (origen)',
    'destination_amount'          => 'Importe (destino)',
    'native_amount'               => 'Cantidad nativa',
    'new_email_address'           => 'Nueva dirección de email',
    'verification'                => 'Verificación',
    'api_key'                     => 'Clave de API',
    'remember_me'                 => 'Recordarme',
    'liability_type_id'           => 'Liability type',
    'interest'                    => 'Interest',
    'interest_period'             => 'Interest period',

    'source_account_asset'        => 'Cuenta de origen (cuenta de activos)',
    'destination_account_expense' => 'Cuenta de destino (cuenta de gastos)',
    'destination_account_asset'   => 'Cuenta de destino (cuenta de activos)',
    'source_account_revenue'      => 'Cuenta de origen (cuenta de ingresos)',
    'type'                        => 'Tipo',
    'convert_Withdrawal'          => 'Convertir extracción',
    'convert_Deposit'             => 'Convertir depósito',
    'convert_Transfer'            => 'Convertir transferencia',

    'amount'                      => 'Importe',
    'foreign_amount'              => 'Foreign amount',
    'existing_attachments'        => 'Existing attachments',
    'date'                        => 'Fecha',
    'interest_date'               => 'Fecha de interés',
    'book_date'                   => 'Fecha de registro',
    'process_date'                => 'Fecha de procesamiento',
    'category'                    => 'Categoría',
    'tags'                        => 'Etiquetas',
    'deletePermanently'           => 'Borrar permanentemente',
    'cancel'                      => 'Cancelar',
    'targetdate'                  => 'Fecha límite',
    'startdate'                   => 'Fecha de inicio',
    'tag'                         => 'Etiqueta',
    'under'                       => 'Debajo',
    'symbol'                      => 'Símbolo',
    'code'                        => 'Código',
    'iban'                        => 'IBAN',
    'accountNumber'               => 'Número de cuenta',
    'creditCardNumber'            => 'Número de la tarjeta de crédito',
    'has_headers'                 => 'Encabezados',
    'date_format'                 => 'Formato de fecha',
    'specifix'                    => 'Banco- o archivo de soluciones especificas',
    'attachments[]'               => 'Adjuntos',
    'store_new_withdrawal'        => 'Guardar rueva retirada de efectivo',
    'store_new_deposit'           => 'Guardar nuevo depósito',
    'store_new_transfer'          => 'Guardar nueva transferencia',
    'add_new_withdrawal'          => 'Añadir rueva retirada de efectivo',
    'add_new_deposit'             => 'Añadir nuevo depósito',
    'add_new_transfer'            => 'Añadir nueva transferencia',
    'title'                       => 'Título',
    'notes'                       => 'Notas',
    'filename'                    => 'Nombre de fichero',
    'mime'                        => 'Tipo Mime',
    'size'                        => 'Tamaño',
    'trigger'                     => 'Disparador',
    'stop_processing'             => 'Detener el procesamiento',
    'start_date'                  => 'Inicio del rango',
    'end_date'                    => 'Final del rango',
    'export_start_range'          => 'Inicio del rango de exportación',
    'export_end_range'            => 'Fin del rango de exportación',
    'export_format'               => 'Formato del archivo',
    'include_attachments'         => 'Incluir archivos adjuntos subidos',
    'include_old_uploads'         => 'Incluir datos importados',
    'accounts'                    => 'Exportar transacciones de estas cuentas',
    'delete_account'              => 'Borrar cuenta ":name"',
    'delete_bill'                 => 'Eliminar factura ":name"',
    'delete_budget'               => 'Eliminar presupuesto ":name"',
    'delete_category'             => 'Eliminar categoría ":name"',
    'delete_currency'             => 'Eliminar divisa ":name"',
    'delete_journal'              => 'Eliminar la transacción con descripción ":description"',
    'delete_attachment'           => 'Eliminar adjunto ":name"',
    'delete_rule'                 => 'Eliminar regla ":title"',
    'delete_rule_group'           => 'Eliminar grupo de reglas ":title"',
    'delete_link_type'            => 'Eliminar tipo de enlace ":name"',
    'delete_user'                 => 'Eliminar usuario ":email"',
    'delete_recurring'            => 'Delete recurring transaction ":title"',
    'user_areYouSure'             => 'Si elimina usuario ":email", todo desaparecerá. No hay deshacer, recuperar ni nada. Si te eliminas, perderás el acceso a esta instancia de Firefly III.',
    'attachment_areYouSure'       => '¿Seguro que quieres eliminar el archivo adjunto llamado "name"?',
    'account_areYouSure'          => '¿Seguro que quieres eliminar la cuenta llamada ":name"?',
    'bill_areYouSure'             => '¿Seguro que quieres eliminar la factura llamada ":name"?',
    'rule_areYouSure'             => '¿Seguro que quieres eliminar la regla titulada ":title"?',
    'ruleGroup_areYouSure'        => '¿Seguro que quieres eliminar el grupo de reglas titulado ":title"?',
    'budget_areYouSure'           => '¿Seguro que quieres eliminar el presupuesto llamado ":name"?',
    'category_areYouSure'         => '¿Seguro que quieres eliminar la categoría llamada ":name"?',
    'recurring_areYouSure'        => 'Are you sure you want to delete the recurring transaction titled ":title"?',
    'currency_areYouSure'         => '¿Está seguro que desea eliminar la moneda denominada ":name"?',
    'piggyBank_areYouSure'        => '¿Está seguro que desea eliminar la hucha llamada ":name"?',
    'journal_areYouSure'          => '¿Estás seguro de que deseas eliminar la transacción descrita ":description"?',
    'mass_journal_are_you_sure'   => '¿Usted esta seguro de querer eliminar estas transacciones?',
    'tag_areYouSure'              => '¿Seguro que quieres eliminar la etiqueta ":tag"?',
    'journal_link_areYouSure'     => '¿Seguro que quieres eliminar el vínculo entre <a href=":source_link">:source</a> y <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => '¿Estás seguro de que deseas eliminar el tipo de vínculo ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Deleting stuff from Firefly III is permanent and cannot be undone.',
    'mass_make_selection'         => 'Aún puede evitar que se eliminen elementos quitando la casilla de verificación.',
    'delete_all_permanently'      => 'Eliminar selección permanentemente',
    'update_all_journals'         => 'Actualiza estas transacciones',
    'also_delete_transactions'    => 'La única transacción conectada a esta cuenta también se eliminará. | Todas las :count transacciones conectadas a esta cuenta también se eliminarán.',
    'also_delete_connections'     => 'La única transacción vinculada con este tipo de enlace perderá esta conexión. | Todas las :count transacciones vinculadas con este tipo de enlace perderán su conexión.',
    'also_delete_rules'           => 'La única regla conectada a este grupo de reglas también se eliminará. | Todas las :count reglas conectadas a este grupo de reglas también se eliminarán.',
    'also_delete_piggyBanks'      => 'La única alcancía conectada a esta cuenta también se eliminará. | Todas las :count alcancías conectadas a esta cuenta también se eliminará.',
    'bill_keep_transactions'      => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will be spared deletion.',
    'budget_keep_transactions'    => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will be spared deletion.',
    'category_keep_transactions'  => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will be spared deletion.',
    'recurring_keep_transactions' => 'The only transaction created by this recurring transaction will not be deleted.|All :count transactions created by this recurring transaction will be spared deletion.',
    'tag_keep_transactions'       => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will be spared deletion.',
    'check_for_updates'           => 'Ver actualizaciones',

    'email'                 => 'Correo electrónico',
    'password'              => 'Contraseña',
    'password_confirmation' => 'Contraseña (otra vez)',
    'blocked'               => '¿Está bloqueado?',
    'blocked_code'          => 'Razón del bloqueo',
    'login_name'            => 'Login',

    // import
    'apply_rules'           => 'Apply rules',
    'artist'                => 'Artist',
    'album'                 => 'Album',
    'song'                  => 'Song',


    // admin
    'domain'                => 'Dominio',
    'single_user_mode'      => 'Deshabilitar registro de usuario',
    'is_demo_site'          => 'Está en modo demostración',

    // import
    'import_file'           => 'Importar archivo',
    'configuration_file'    => 'Archivo de configuración',
    'import_file_type'      => 'Importar tipo de archivo',
    'csv_comma'             => 'Una coma (,)',
    'csv_semicolon'         => 'Un punto y coma (;)',
    'csv_tab'               => 'Un tabulador (invisible)',
    'csv_delimiter'         => 'Delimitador de campo CSV',
    'csv_import_account'    => 'Cuenta de importación predeterminada',
    'csv_config'            => 'Configuración de importación de CSV',
    'client_id'             => 'Identificación del cliente',
    'service_secret'        => 'Servicio secreto',
    'app_secret'            => 'Secreto de aplicación',
    'app_id'                => 'App ID',
    'secret'                => 'Secret',
    'public_key'            => 'Llave pública',
    'country_code'          => 'Código del país',
    'provider_code'         => 'Banco o proveedor de datos',
    'fints_url'             => 'FinTS API URL',
    'fints_port'            => 'Port',
    'fints_bank_code'       => 'Bank code',
    'fints_username'        => 'Username',
    'fints_password'        => 'PIN / Password',
    'fints_account'         => 'FinTS account',
    'local_account'         => 'Firefly III account',
    'from_date'             => 'Date from',
    'to_date'               => 'Date to',


    'due_date'                => 'Fecha de vencimiento',
    'payment_date'            => 'Fecha de pago',
    'invoice_date'            => 'Fecha de la factura',
    'internal_reference'      => 'Referencia interna',
    'inward'                  => 'Descripción interna',
    'outward'                 => 'Descripción externa',
    'rule_group_id'           => 'Grupo de reglas',
    'transaction_description' => 'Transaction description',
    'first_date'              => 'First date',
    'transaction_type'        => 'Transaction type',
    'repeat_until'            => 'Repeat until',
    'recurring_description'   => 'Recurring transaction description',
    'repetition_type'         => 'Type of repetition',
    'foreign_currency_id'     => 'Foreign currency',
    'repetition_end'          => 'Repetition ends',
    'repetitions'             => 'Repetitions',
    'calendar'                => 'Calendar',
    'weekend'                 => 'Weekend',
    'client_secret'           => 'Client secret',

];
