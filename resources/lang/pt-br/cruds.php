<?php

return [
    'userManagement'          => [
        'title'          => 'Gestão de Usuários',
        'title_singular' => 'Gestão de Usuários',
    ],
    'permission'              => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Título',
            'title_helper'      => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'                    => [
        'title'          => 'Papéis',
        'title_singular' => 'Papel',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Título',
            'title_helper'       => ' ',
            'permissions'        => 'Permissões',
            'permissions_helper' => ' ',
            'created_at'         => 'Criado em',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deletado em',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'                    => [
        'title'          => 'Usuários',
        'title_singular' => 'Usuário',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Nome',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verificado em',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Papéis',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Criado em',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Atualizado em',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deletado em',
            'deleted_at_helper'        => ' ',
            'approved'                 => 'Aprovado',
            'approved_helper'          => ' ',
            'team'                     => 'Time',
            'team_helper'              => ' ',
        ],
    ],
    'auditLog'                => [
        'title'          => 'Logs',
        'title_singular' => 'Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Descriçāo',
            'description_helper'  => ' ',
            'subject_id'          => 'Assunto - ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Assunto - Tipo',
            'subject_type_helper' => ' ',
            'user_id'             => 'Usuário - ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Propriedades',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Criado em',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Atualizado em',
            'updated_at_helper'   => ' ',
        ],
    ],
    'faqManagement'           => [
        'title'          => 'Gestāo de FAQ',
        'title_singular' => 'Gestāo de FAQ',
    ],
    'faqCategory'             => [
        'title'          => 'Categorias',
        'title_singular' => 'Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Categoria',
            'category_helper'   => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'faqQuestion'             => [
        'title'          => 'Questões',
        'title_singular' => 'Questāo',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Categoria',
            'category_helper'   => ' ',
            'question'          => 'Questāo',
            'question_helper'   => ' ',
            'answer'            => 'Resposta',
            'answer_helper'     => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'expenseManagement'       => [
        'title'          => 'Gestão de Despesa',
        'title_singular' => 'Gestão de Despesa',
    ],
    'expenseCategory'         => [
        'title'          => 'Categorias de Despesa',
        'title_singular' => 'Categoria de Despesa',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'incomeCategory'          => [
        'title'          => 'Categorias de Renda',
        'title_singular' => 'Categoria de Renda',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'expense'                 => [
        'title'          => 'Despesas',
        'title_singular' => 'Despesa',
        'report'         => 'Despesa - Análise',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'expense_category'        => 'Categoria de Despesa',
            'expense_category_helper' => ' ',
            'entry_date'              => 'Data de Entrada',
            'entry_date_helper'       => ' ',
            'amount'                  => 'Valor',
            'amount_helper'           => ' ',
            'description'             => 'Descriçāo',
            'description_helper'      => ' ',
            'created_at'              => 'Criado em',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Atualizado em',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deletado em',
            'deleted_at_helper'       => ' ',
            'team'                    => 'Time',
            'team_helper'             => ' ',
        ],
    ],
    'income'                  => [
        'title'          => 'Rendas',
        'title_singular' => 'Renda',
        'report'           => 'Renda - Análise',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'income_category'        => 'Categoria de Renda',
            'income_category_helper' => ' ',
            'entry_date'             => 'Data de Entrada',
            'entry_date_helper'      => ' ',
            'amount'                 => 'Valor',
            'amount_helper'          => ' ',
            'description'            => 'Descriçāo',
            'description_helper'     => ' ',
            'created_at'             => 'Criado em',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Atualizado em',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deletado em',
            'deleted_at_helper'      => ' ',
            'team'                   => 'Time',
            'team_helper'            => ' ',
        ],
    ],
    'expenseReport'           => [
        'title'          => 'Relatório Mensal',
        'title_singular' => 'Relatório Mensal',
        'reports'        => [
            'title'             => 'Relatórios',
            'title_singular'    => 'Relatório',
            'incomeReport'      => 'Relatório de Rendas',
            'incomeByCategory'  => 'Renda por Categoria',
            'expenseByCategory' => 'Despesa por Categoria',
            'income'            => 'Renda',
            'expense'           => 'Despesa',
            'profit'            => 'Lucro',
        ],
    ],
    'contentManagement'       => [
        'title'          => 'Gestāo de Conteúdo',
        'title_singular' => 'Gestāo de Conteúdo',
    ],
    'contentCategory'         => [
        'title'          => 'Categorias',
        'title_singular' => 'Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'contentTag'              => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'contentPage'             => [
        'title'          => 'Páginas',
        'title_singular' => 'Página',
        'last'           => 'Últimas Páginas',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title'                 => 'Título',
            'title_helper'          => ' ',
            'category'              => 'Categorias',
            'category_helper'       => ' ',
            'categories'            => 'Categorias',
            'categories_helper'     => ' ',
            'tag'                   => 'Tags',
            'tag_helper'            => ' ',
            'tags'                  => 'Tags',
            'tags_helper'           => ' ',
            'page_text'             => 'Texto Completo',
            'page_text_helper'      => ' ',
            'excerpt'               => 'Texto Resumido',
            'excerpt_helper'        => ' ',
            'featured_image'        => 'Imagem Destacada',
            'featured_image_helper' => ' ',
            'created_at'            => 'Criado em',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Atualizado em',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deletado em',
            'deleted_at_helper'     => ' ',
            'team'                  => 'Time',
            'team_helper'           => ' ',
        ],
    ],
    'taskManagement'          => [
        'title'          => 'Gestāo de Tarefas',
        'title_singular' => 'Gestāo de Tarefas',
    ],
    'taskStatus'              => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'taskTag'                 => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'task'                    => [
        'title'          => 'Tarefas',
        'title_singular' => 'Tarefa',
        'last'           => 'Últimas Tarefas',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nome',
            'name_helper'        => ' ',
            'description'        => 'Descriçāo',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'attachment'         => 'Anexo',
            'attachment_helper'  => ' ',
            'due_date'           => 'Data de Vencimento',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Atribuído a',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Criado em',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deletado em',
            'deleted_at_helper'  => ' ',
            'team'               => 'Time',
            'team_helper'        => ' ',
        ],
    ],
    'tasksCalendar'           => [
        'title'          => 'Calendário',
        'title_singular' => 'Calendário',
    ],
    'clientManagementSetting' => [
        'title'          => 'Configurações de Clientes',
        'title_singular' => 'Configurações de Clientes',
    ],
    'currency'                => [
        'title'          => 'Moedas',
        'title_singular' => 'Moeda',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'name'                 => 'Nome',
            'name_helper'          => ' ',
            'code'                 => 'Código da Moeda',
            'code_helper'          => ' ',
            'main_currency'        => 'Moeda Principal',
            'main_currency_helper' => ' ',
            'created_at'           => 'Criado em',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Atualizado em',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deletado em',
            'deleted_at_helper'    => ' ',
            'team'                 => 'Time',
            'team_helper'          => ' ',
        ],
    ],
    'transactionType'         => [
        'title'          => 'Tipos de Transação',
        'title_singular' => 'Tipo de Transação',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'incomeSource'            => [
        'title'          => 'Fontes de Entrada',
        'title_singular' => 'Fonte de Entrada',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nome',
            'name_helper'        => ' ',
            'fee_percent'        => 'Taxa %',
            'fee_percent_helper' => ' ',
            'created_at'         => 'Criado em',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deletado em',
            'deleted_at_helper'  => ' ',
            'team'               => 'Time',
            'team_helper'        => ' ',
        ],
    ],
    'clientStatus'            => [
        'title'          => 'Status do Cliente',
        'title_singular' => 'Status do Cliente',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'projectStatus'           => [
        'title'          => 'Status do Projeto',
        'title_singular' => 'Status do Projeto',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'clientManagement'        => [
        'title'          => 'Gestão de Clientes',
        'title_singular' => 'Gestão de Clientes',
    ],
    'client'                  => [
        'title'          => 'Clientes',
        'title_singular' => 'Cliente',
        'last'           => 'Últimos Clientes',
        'report'           => 'Cliente - Análise',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'first_name'        => 'Nome',
            'first_name_helper' => ' ',
            'last_name'         => 'Sobrenome',
            'last_name_helper'  => ' ',
            'company'           => 'Empresa',
            'company_helper'    => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'phone'             => 'Telefone',
            'phone_helper'      => ' ',
            'website'           => 'Website',
            'website_helper'    => ' ',
            'skype'             => 'Skype',
            'skype_helper'      => ' ',
            'country'           => 'País',
            'country_helper'    => ' ',
            'status'            => 'Status do Cliente',
            'status_helper'     => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'project'                 => [
        'title'          => 'Projetos',
        'title_singular' => 'Projeto',
        'last'           => 'Últimos Projetos',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nome',
            'name_helper'        => ' ',
            'client'             => 'Cliente',
            'client_helper'      => ' ',
            'description'        => 'Descriçāo',
            'description_helper' => ' ',
            'start_date'         => 'Data de Início',
            'start_date_helper'  => ' ',
            'budget'             => 'Valor',
            'budget_helper'      => ' ',
            'status'             => 'Status do Projeto',
            'status_helper'      => ' ',
            'created_at'         => 'Criado em',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deletado em',
            'deleted_at_helper'  => ' ',
            'team'               => 'Time',
            'team_helper'        => ' ',
        ],
    ],
    'note'                    => [
        'title'          => 'Notas',
        'title_singular' => 'Nota',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'project'           => 'Projeto',
            'project_helper'    => ' ',
            'note_text'         => 'Texto',
            'note_text_helper'  => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'team'              => 'Time',
            'team_helper'       => ' ',
        ],
    ],
    'document'                => [
        'title'          => 'Documentos',
        'title_singular' => 'Documento',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'project'              => 'Projeto',
            'project_helper'       => ' ',
            'document_file'        => 'Arquivo',
            'document_file_helper' => ' ',
            'name'                 => 'Nome do Documento',
            'name_helper'          => ' ',
            'description'          => 'Descriçāo',
            'description_helper'   => ' ',
            'created_at'           => 'Criado em',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Atualizado em',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deletado em',
            'deleted_at_helper'    => ' ',
            'team'                 => 'Time',
            'team_helper'          => ' ',
        ],
    ],
    'transaction'             => [
        'title'          => 'Transações',
        'title_singular' => 'Transação',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'project'                 => 'Projeto',
            'project_helper'          => ' ',
            'transaction_type'        => 'Tipo de Transaçāo',
            'transaction_type_helper' => ' ',
            'income_source'           => 'Fonte de Renda',
            'income_source_helper'    => ' ',
            'amount'                  => 'Valor',
            'amount_helper'           => ' ',
            'currency'                => 'Moeda',
            'currency_helper'         => ' ',
            'transaction_date'        => 'Data da Transaçāo',
            'transaction_date_helper' => ' ',
            'name'                    => 'Nome',
            'name_helper'             => ' ',
            'description'             => 'Descriçāo',
            'description_helper'      => ' ',
            'created_at'              => 'Criado em',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Atualizado em',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deletado em',
            'deleted_at_helper'       => ' ',
            'team'                    => 'Time',
            'team_helper'             => ' ',
        ],
    ],
    'clientReport'            => [
        'title'          => 'Relatórios',
        'title_singular' => 'Relatório',
        'reports'        => [
            'month'       => 'Mês',
            'income'      => 'Renda',
            'expenses'    => 'Despesas',
            'fees'        => 'Taxas',
            'total'       => 'Total',
            'allProjects' => 'Todos os Projetos',
        ],
    ],
    'team'                    => [
        'title'          => 'Times',
        'title_singular' => 'Time',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'owner'             => 'Dono',
            'owner_helper'      => ' ',
        ],
    ],
    'userAlert'               => [
        'title'          => 'Alerta de Usuários',
        'title_singular' => 'Alerta de Usuário',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Texto',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Link',
            'alert_link_helper' => ' ',
            'user'              => 'Usuários',
            'user_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
        ],
    ],
];
